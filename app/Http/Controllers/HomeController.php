<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\ProductCat;
use App\Product;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Auth;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0 "); // Proxies.
        
        $cat=DB::table('select_category')->get(); //get data from table
        $ser=DB::table('select_service')->get(); //get data from table
        $cou=DB::table('select_country')->get(); //get data from table
        $cyc=DB::table('select_cycle')->get(); //get data from table
        $typ=DB::table('select_service_type')->get(); //get data from table
        $usr_serv = DB::table('user_services')
                        ->where('user_id', Auth::user()->id)
                        ->first(); //get data from table

        return view('adminlte::home',compact('cat','ser','cou','cyc','typ','usr_serv')); //sent data to view
    }

    public function testfunction()
    {
        $prod = ProductCat::all();
        return view('summary',compact('prod')); //sent data to view
    }

    public function servicesummary()
    {
        
        $summary_data = Input::all();
        $price = 0;
        foreach ($summary_data['category'] as $key => $value) {
            $category = (isset($value[0])) ? $value[0] : "";
            $life_cycle = (isset($summary_data['life'][$key])) ? implode("','", $summary_data['life'][$key]) : "";
            $service = (isset($summary_data['service'][$key])) ? implode("','", $summary_data['service'][$key]) : "";
            $servicesub = (isset($summary_data['servicesub'][$key])) ? implode("','", $summary_data['servicesub'][$key]) : "";
            $country = (isset($summary_data['country'][$key])) ? implode("','", $summary_data['country'][$key]) : ""; 
            $results = DB::select( DB::raw("SELECT SUM(price) as price FROM prices WHERE `category` = '".$category."' AND `life-cycle` IN ('".$life_cycle."') AND `service` IN ('".$service."') AND `service-type` IN ('".$servicesub."','') AND `country` IN ('".$country."')  ") );

            $price = (isset($results[0])) ? $results[0]->price : 0;
            $summary_data['price'][$key][0] = $price;
        }

        $arr = array();
        foreach ($summary_data['country'] as $key => $value) {
            $arr[$key] = $value[0];
        }
        asort($arr);
        
        $user_services = DB::table('user_services')->where('user_id', Auth::user()->id)->count();
        if($user_services) {
            DB::table('user_services')
                ->where('user_id', Auth::user()->id)
                ->update(['data' => serialize($summary_data)]);
        }else{
            DB::table('user_services')->insert(
                ['data' => serialize($summary_data), 'user_id' => Auth::user()->id]
            );
        }

        Session::put('key', $summary_data);    
        return view('adminlte::summary', compact('summary_data', 'arr'));
    }


    public function portal()
    {
        $value = session()->get('key');
        Session::put('sel-key', $_GET); 
        $patent = 0;
        $trademark = 0;
        $patent_trademark = 0;

        foreach ($value['category'] as $key => $val) {
            if($val[0] == 'Patent') {
                $arr = $value['life'][$key];
                if (in_array("Filing", $arr) || in_array("Post-Filing", $arr))
                {
                  $patent = 1;
                }
            }    
        }
        foreach ($value['category'] as $key => $val) {
            if($val[0] == 'Trademark') {
                $arr = $value['life'][$key];
                if (in_array("Filing", $arr) || in_array("Post-Filing", $arr))
                {
                  $trademark = 1;
                }
            }    
        }
        foreach ($value['category'] as $key => $val) {
            if($val[0] == 'Trademark' || $val[0] == 'Patent') {
                $arr = $value['life'][$key];
                if (in_array("Filing", $arr))
                {
                  $patent_trademark = 1;
                }
            }    
        }

        if($patent && !$trademark && !$patent_trademark) {
            return view('adminlte::patent_fill',compact('value'));
        }
        if(!$patent && $trademark && !$patent_trademark) {
            return view('adminlte::trademark_fill',compact('value'));
        }
        if($patent_trademark) {
            return view('adminlte::patent_trademark_fill',compact('value'));
        }
        // $seletd = session()->get('sel-key');
        $seletd = count($value['category']);
        return view('adminlte::make_payment',compact('value', 'seletd'));
        
    
    }

    public function payment()
    {

        $value = session()->get('key');
        // $seletd = session()->get('sel-key');
        $seletd = count($value['category']);
        return view('adminlte::make_payment',compact('value', 'seletd'));

    }

    public function getService()
    {
    	if($_POST) {
    		$cate_id = $_POST['cate_id'];
    		$cycle_id = $_POST['cycle_id'];
    		// Paitent
    		$results = array();
    		if($cate_id == 2 && $cycle_id == 1) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(1,2)") );
    		}
    		if($cate_id == 2 && $cycle_id == 2) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(20,8)") );
    		}
    		if($cate_id == 2 && $cycle_id == 3) {
    			// $results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(10,11,12)") );
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(10,11,5,7)") );
    		}
    		// Trademark
    		if($cate_id == 1 && $cycle_id == 1) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(1)") );
    		}
    		if($cate_id == 1 && $cycle_id == 2) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(13,21)") );
    		}
			if($cate_id == 1 && $cycle_id == 3) {
    			// $results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(10,15,19)") );
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(10,11,5,7)") );
    		}

    		if($cate_id == 3 && $cycle_id == 1) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(16)") );
    		}
    		if($cate_id == 3 && $cycle_id == 2) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(17,18)") );
    		}
    		if($cate_id == 3 && $cycle_id == 3) {
    			// $results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(10,11,12)") );
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(10,11,5,7)") );
    		}
    		if($cate_id == 4 && $cycle_id == 4) {
    			$results = DB::select( DB::raw("SELECT * FROM `select_service` WHERE id IN(19)") );
    		}
    		echo json_encode($results);

    	}
 		exit();
    }

}