<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Input;
use Validator;
use Redirect;
use Hash;
use Route;
use Response;
use Auth;
use URL;
use Session;
use Laracasts\Flash\Flash;
use View;
use JavaScript;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Admin;
use App\Role;
use App\RoleUser;
use App\Permission;
use App\PermissionRole;
use App;
use Excel;
use PHPExcel_IOFactory;
use File;

use PDF;
use CloudConvert;
use Filesystem;
use Image;


class AdminsController extends Controller
{
    public function __construct() {
        $this->layout = 'layouts.admins';
    }
    
    public function getIndex() {
        return view('admins.index')
        ->with('layout',$this->layout);
    }
    public function getLogin() {
        $this->layout = 'layouts.master-layout';
        return view('admins.login')
            ->with('layout',$this->layout);
    }

    public function postLogin() {
        
        $username = Input::get('email');
        $password = Input::get('password');
        // Session::reflash();

        if (Auth::attempt(array('username'=>$username, 'password'=>$password))) {
            Flash::success('Welcome back '.$username.'!');
            // return redirect()->action('AdminsController@getIndex');
            // Check for intended redirect, if not exists then go to default /admins page
            return (redirect()->intended('/admins'));
        } else { //LOGING FAILED
            Flash::error('Wrong Username or Password!');
            $this->layout = 'layouts.master-layout';
            return view('admins.login')
            ->with('layout',$this->layout)
            ->with('wrong',true);
        }
    }

    public function getLogout() {
        Auth::logout();
        Flash::success('You have successfully been logged out');
        return Redirect::action('AdminsController@getLogin');
    
    }
    public function getViewAcl() {   
        return view('admins.acl_view')
        ->with('layout',$this->layout);         
    }

    public function getKnsseCharts() { 

        $charts_data = array( 0 => array( 'label' =>'브드드람',
                                    'values'=> array(
                                                'Q1' =>120,
                                                'Q2' =>150,
                                                'Q3' =>200,
                                                'whisker_low' =>115,
                                                'whisker_high' =>210
                                                ),
                     ));


        // JavaScript::put([
        //     'chartsdata' => json_encode($charts_data)
        // ]);




        // $now_dt = time();
        // $tok = Job::generateRandomNumber(6);
        // $pdf = Image::file('knsse.output');
        // return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.jpg');


        // $view = view('knsse.output');
        // $contents = (string) $view;
        // file_put_contents(public_path().'/assets/exercise.html', $contents);


        // CloudConvert::file(public_path().'/assets/exercise.html')->withOptions([
        //          'javascript_delay' => 5000
        //     ])->to('doc');


         // CloudConvert::website('http://k-nsse.webprinciples.com/charts')->withOptions([
         //         'javascript_delay' => 5000
         //    ])->to(public_path().'/assets/nyan.pdf');
        
        // CloudConvert::file(public_path().'/assets/myqr.png')->quality(70)->to('jpg');
        // CloudConvert::website('www.nyan.cat')->to('/assets/nyan.jpg');


        //WORKINGGG
        // $data = array('data' =>json_encode($charts_data));
        // $now_dt = time();
        // $tok = Job::generateRandomNumber(6);
        // $img = Image::loadView('knsse.output',$data)->save(public_path().'/assets/test.jpg');
        //WORKING END


        // $headers = array(
        //     "Content-type"=>"text/html",
        //     "Content-Disposition"=>"attachment;Filename=myfile.doc"
        // );

        // $p = public_path().'/assets/test.jpg';
        // $content = '<html>
        //             <head>
        //             <meta charset="utf-8">
        //             </head>
        //             <body>
        //                  <img src="'.$p.'" width="400px">
        //             </body>
        //             </html>';

        // return Response::make($content,200, $headers);
       

        $data = json_encode($charts_data);
        return view('knsse.output')
            ->with('data',$data)
            ->with('layout',$this->layout);

        // $now_dt = time();
        // $tok = Job::generateRandomNumber(6);
        // $pdf = PDF::loadView('knsse.output');
        // return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.pdf');
    }
    //convert page
    public function postConvertToDocx() {

        // file_put_contents(public_path().'/assets/exercise.html', Input::get('hdata'));
        

        // $now_dt = time();
        // $tok = Job::generateRandomNumber(6);
        // $pdf = Image::loadView('knsse.output');
        // return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.png');
            
        // working    
        // CloudConvert::file(public_path().'/assets/exercise.html')->quality(100)->to('jpg');





    }



    public function getKNSSEIndex() {   
        return view('admins.knsse_upload')
        ->with('layout',$this->layout);
    }

    //AJAX FILE UPLOAD
    public function postKNSSEFileUpload() {


        $saved_file = Job::TmpFileSave($_FILES,public_path("assets/excel/tmp/"),'777');

        Job::dump('**************SAVED****************');

        if ($saved_file['status']==200) {
            
            $full_path = $saved_file['ffpath'];
            Excel::load($full_path, function($reader) {
                // Getting all results
                $results = $reader->get();
                Job::dump($results);
                // ->all() is a wrapper for ->get() and will work the same
                $results = $reader->all();
            });


            Job::dump('**************DONE PRINTING****************');


            return Response::json(array(
                'status' => 200
            ));
        } else {
            return Response::json(array(
                'status' => $saved_file['status']
            ));
        }


    }


    
}
