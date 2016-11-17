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
use App\Knsse;
use App;
use Excel;
use PHPExcel_IOFactory;
use File;

use PDF;
use CloudConvert;
use Filesystem;
use Image;

use Illuminate\Support\Facades\Storage;


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



        // DELETE EVERY FILE IN FOLDER
        Job::DelEveryFile(public_path().'/assets/output/images/*');


        //DATA FOR BOX PLOT CHART
        $charts_data = array( 0 => array( 'label' =>'브드드람',
                            'values'=> array(
                                        'Q1' =>120,
                                        'Q2' =>150,
                                        'Q3' =>200,
                                        'whisker_low' =>115,
                                        'whisker_high' =>210
                                        ),
             ));
        //dataarray, location
        // Knsse::MakeAndSaveBoxPlotChartImage($charts_data,public_path().'/assets/output/images/');

        // Knsse::MakeAndSaveSpiderChartImage($charts_data,public_path().'/assets/output/images/');
        

        

        $data = json_encode($charts_data);

        
        // return view('knsse.BPoutput')
        //     ->with('data',$data)
        //     ->with('layout',$this->layout);
        $data = json_encode($charts_data);
        return view('knsse.SPoutput')
            ->with('data',$data)
            ->with('layout',$this->layout);

        // $now_dt = time();
        // $tok = Job::generateRandomNumber(6);
        // $pdf = PDF::loadView('knsse.output');
        // return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.pdf');
    }
    //convert page
    public function postConvertToImage() {


        $status = 400;
        $data=Input::get('hdata');
        $fst= Input::get('fst');
        if (isset($fst)) {
            if ($fst==1) {
                // DELETE EVERY FILE IN FOLDER
                Job::DelEveryFile(public_path().'/assets/output/images/*');
            }
        }
        if (isset($data)) {
            $status = 200;
            $tok = Job::generateRandomNumber(6).time();
            $img = Image::loadHTML(json_decode($data))->save(public_path().'/assets/output/images/chartsp'.$tok.'.jpg');
        }

        if (isset($fst)) {
            if ($fst==99) {

                // DELETE EVERY FILE IN FOLDER
                Job::DelEveryFile(public_path().'/assets/output/words/*');

                // Creating the new document...
                $phpWord = new \PhpOffice\PhpWord\PhpWord();

                /* Note: any element you append to a document must reside inside of a Section. */

                 // Adding an empty Section to the document...
                $section = $phpWord->addSection();

                // Adding Text element to the Section having font styled by default...
                $section->addText(
                    htmlspecialchars(
                        '"Hello Baby'
                            . 'The important thing is not to stop questioning." '
                            . '(Albert Einstein)'
                    )
                );

                // Saving the document as OOXML file...
                $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
                $objWriter->save(public_path().'/assets/output/words/wordboyoung'.time().Job::generateRandomNumber(6).'.docx');





            }
        }

        return Response::json(array(
            'status' => $status
        ));
    }



    public function getKNSSEIndex() {   
                
        // // A few settings
        // $img_file = 'assets/myqr.jpg';
        // // Read image path, convert to base64 encoding
        // $imgData = base64_encode(file_get_contents($img_file));
        // // Format the image SRC:  data:{mime};base64,{data};
        // $src = 'data: '.mime_content_type($img_file).';base64,'.$imgData;
        // // Echo out a sample image
        // $myimge = '<img src="'.$src.'">';

        $content = '<html>
                    <head>
                    <meta charset="utf-8">
                    </head>
                    <body>
                        <p>
                            My Content
                            
                        </p>
                        <img src="myimage/myqr.jpg">
                    </body>
                    </html>';

        // Filesystem::put('file.doc', $content);
        file_put_contents(public_path().'/assets/output/words/file.doc',$content);




        return view('knsse.index')
        ->with('layout',$this->layout);
    }

    //AJAX FILE UPLOAD
    public function postKNSSEFileUpload() {


        $saved_file = Job::TmpFileSave($_FILES,public_path("assets/excel/tmp/"),'777');
        if ($saved_file['status']==200) {
            
            $full_path = $saved_file['ffpath'];
            Excel::load($full_path, function($reader) {
                // Getting all results
                $results = $reader->get();
                // ->all() is a wrapper for ->get() and will work the same
                $results = $reader->all();
            });



            $charts_data = array( 0 => array( 'label' =>'브드드람',
                        'values'=> array(
                                    'Q1' =>120,
                                    'Q2' =>150,
                                    'Q3' =>200,
                                    'whisker_low' =>115,
                                    'whisker_high' =>210
                                    ),
            ));

            return Response::json(array(
                'status' => 200,
                'charts_data'=>$charts_data
            ));
        } else {
            return Response::json(array(
                'status' => $saved_file['status']
            ));
        }


    }


    
}
