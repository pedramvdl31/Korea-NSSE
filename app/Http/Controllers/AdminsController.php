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
        return view('knsse.pdf_gen');
    }
    public function getKNSSEIndex() {   

        // $headers = array(
        //     "Content-type"=>"text/html",
        //     "Content-Disposition"=>"attachment;Filename=myfile.doc"
        // );






        // $view = View::make('knsse.pdf_gen');
        // $contents = (string) $view;
        // // or
        // $contents = $view->render();

        // // return PDF::loadFile($contents)->inline('github.pdf');
        // $pdf = App::make('snappy.pdf.wrapper');
        // $pdf->loadHTML($contents);
        // return $pdf->inline();


        return view('admins.knsse_upload')
        ->with('layout',$this->layout);

        // $now_dt = time();
        // $tok = Job::generateRandomNumber(6);
        // $pdf = PDF::loadView('knsse.pdf_gen');
        // return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.pdf');
        //     return view('knsse.pdf_gen');


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
