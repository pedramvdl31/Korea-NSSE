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
use Zipper;

use Illuminate\Support\Facades\Storage;



class AdminsController extends Controller
{
    public function __construct() {
        $this->layout = 'layouts.admins';
    }
    
    public function getIndex() {

        // $phpWord = new \PhpOffice\PhpWord\PhpWord();
        // // Begin code
        // $section = $phpWord->addSection();

        // $section->addText('Local image with styles:');
        // $section->addImage('resources/_earth.jpg', array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        // $section->addTextBreak(2);
        // $section->addText('Local image with styles:');
        // $section->addImage('resources/_earth.jpg', array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        // $section->addTextBreak(2);
        // $section->addText('Local image with styles:');
        // $section->addImage('resources/_earth.jpg', array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        // $section->addTextBreak(2);
        // $section->addText('Local image with styles:');
        // $section->addImage('resources/_earth.jpg', array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        // $section->addTextBreak(2);
        // $section->addText('Local image with styles:');
        // $section->addImage('resources/_earth.jpg', array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        // $section->addTextBreak(2);
        // $section->addText('Local image with styles:');
        // $section->addImage('resources/_earth.jpg', array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        // $section->addTextBreak(2);


        // // Saving the document as OOXML file...
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $objWriter->save('helloWorld.docx');

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

    public function getKNSSEIndex() {   
        return view('knsse.index')
        ->with('layout',$this->layout);
    }

    //AJAX FILE UPLOAD
    public function postKNSSEFileUpload() {

        Job::DelEveryFile(public_path().'/assets/excel/tmp/*');
        $saved_file = Job::TmpFileSave($_FILES,public_path("assets/excel/tmp/"),'777');
        if (true) {

            $aun = array();
            $aun2 = array();
            $uni_names = array();
            $full_path = $saved_file['ffpath'];
            $results = Excel::load($saved_file['ffpath'])->get();
            foreach ($results[0] as $k => $v) {
                array_push($aun,$v[2]);
            }
            $aun2 = array_unique($aun);
            unset($aun2[0]);
            //All Uni Names
            $uni_names = json_encode(array_values($aun2));
            // $uni_names = json_encode(array("Volvo", "BMW", "Toyota"));
            

            $charts_data = array(   
                                    0 => array( 'label' =>'전국',
                                            'values'=> array(
                                                'Q1' =>20,
                                                'Q2' =>23,
                                                'Q3' =>27,
                                                'whisker_low' =>19,
                                                'whisker_high' =>28
                                                )
                                            ),
                                    1 => array( 'label' =>'수도건大',
                                            'values'=> array(
                                                'Q1' =>23,
                                                'Q2' =>30,
                                                'Q3' =>40,
                                                'whisker_low' =>20,
                                                'whisker_high' =>42
                                                )
                                            ),
                                    2 => array( 'label' =>'ACE 수도건大',
                                            'values'=> array(
                                                'Q1' =>23,
                                                'Q2' =>24,
                                                'Q3' =>29,
                                                'whisker_low' =>20,
                                                'whisker_high' =>30
                                                )
                                            )
                                );

            return Response::json(array(
                'status' => 200,
                'charts_data'=>$charts_data,
                'uni_names'=>$uni_names
            ));
        } else {
            return Response::json(array(
                'status' => $saved_file['status']
            ));
        }


    }
    //convert page
    public function postConvertToImage() {
        $status = 400;
        $data=Input::get('hdata');
        $pnum=Input::get('pnum');
        $w=Input::get('width');
        $h=Input::get('height');
        $uname=Input::get('uname');
        if ($pnum==1) {
            // DELETE EVERY FILE IN FOLDER
            // File::cleanDirectory(public_path().'/assets/output/');
            // Job::CheckNMakeDirAllPerm(public_path().'/assets/output/'.$uname);
            // Job::CheckNMakeDirAllPerm(public_path().'/assets/output/'.$uname.'/images');
        }
        if (isset($data)) {
                        $newstyle= '<style type="text/css">
#picturediv{width:900px;height:500px;position:relative;float:left;overflow:hidden}.curchart{width:950px;height:400px;float:left;position:relative;width:100%}.grid .tick{stroke:#d3d3d3;opacity:.7;shape-rendering:crispEdges}.grid path{stroke-width:0}.axis path{fill:none;stroke:#bbb;shape-rendering:crispEdges}.axis path,.axis line{fill:none;stroke:#000;shape-rendering:crispEdges}g{background:transparent!important;background-color:transparent!important}.x.axis path{display:none}.lineCPI{fill:none;stroke:#858abe;stroke-width:2px}.lineRPIJ{fill:none;stroke:#D8565F;stroke-width:2px}.grid .tick{stroke:#d3d3d3;stroke-opacity:.7;stroke-dasharray:("3,3");shape-rendering:crispEdges}.grid path{stroke-width:0}.axis text{fill:#555}.axis line{stroke:#e7e7e7;shape-rendering:crispEdges}.axis .axis-label{font-size:14px}.line{fill:none;stroke-width:1.5px}.dot{stroke:transparent;stroke-width:10px;cursor:pointer}.dot:hover{stroke:rgba(68,127,255,0.3)}.c3-chart-lines .c3-target-data2{stroke-dasharray:3,3}.cs{width:590px;float:left;top:-15px;left:-61px}.textt2{position:relative;float:left;width:80%}#containermy{height:300px;width:100%;position:relative}.relat{position:relative!important}#chartwrapper{position:absolute;left:70px}.c3 line{fill:none;stroke:gray!important}path.domain{stroke:gray!important;stroke-width:1px!important}.mytable tr:first-child td:nth-child(1),.mytable tr:first-child td:nth-child(2){border:1px transparent}.mytable th,.frth{width:100px!important;max-width:100px!important;min-width:100px!important;font-weight:900}.mytable th,td{font-size:15px;border:1px solid gray;border-collapse:collapse;padding:5px;text-align:center;min-width:53.018px!important}#hr0{position:relative;margin:0;padding:0;border:solid 1px}#hr1{margin:0;padding:0;border:dashed 1px}table{background-color:transparent;border-spacing:0;border-collapse:collapse}.mytable{width:481.81px!important}.hrt2{position:relative;float:left;width:20%;padding-top:10px}.lsymb{font-size:30px;position:absolute;left:6px;top:-10px}.lsymbd{font-size:17px;left:4px;top:0}  </style> ';
            $AppandedData = $newstyle.$data;
            $status = 200;
            $tok = Job::generateRandomString(15).time();
            $img = Image::loadHTML($AppandedData)->setOption('height', $h)->setOption('width', $w)->setOption('quality', 100)->save(public_path().'/assets/output/'.$uname.'/images/chart-'.$tok.'-line.jpg');
        }

        if ($pnum==9) {
            // // DELETE EVERY FILE IN FOLDER
            // Job::DelEveryFile(public_path().'/assets/output/words/*');
            // Job::DelEveryFile(public_path().'/assets/output/words/charts/*');
            // // COPY ALL IMAGES TO NEW FOLDER
            // File::copyDirectory(public_path().'/assets/output/images',public_path().'/assets/output/words/charts');
            // $manuals = [];
            // $filenames = [];
            // $filesInFolder = \File::files(public_path().'/assets/output/words/charts');

            // foreach($filesInFolder as $path)
            // {
            //     $manuals[] = pathinfo($path);
            // }
            // foreach ($manuals as $key => $value) {
            //     array_push($filenames,$value['basename']);
            // }

            // $image_html = '';
            // foreach ($filenames as $key => $value) {
            //     $image_html.=' <img style="width:100px !important" src="charts/'.$value.'"> ';
            // }

            // $content = '<html>
            //             <head>
            //             <meta charset="utf-8">
            //             </head>
            //             <body>
            //                 <p>
            //                     My Content
            //                 </p>'
            //             .$image_html.
            //             '</body>
            //             </html>';
            // // Filesystem::put('file.doc', $content);
            // $tok2 = Job::generateRandomNumber(6).time();
            // $file_path = public_path().'/assets/output/words/file'.$tok2.'.doc';
            // file_put_contents($file_path,$content);

            // $zipfilename = public_path().'/assets/output/words/output_'.$tok2.'.zip';
            // $download_path = '/assets/output/words/output_'.$tok2.'.zip';

            // $files = glob(public_path().'/assets/output/words/*.doc');
            // $charts = glob(public_path().'/assets/output/words/charts/*');

            // if (Zipper::make($zipfilename)->add($files)->folder('charts')->add($charts)) {
            //     return Response::json(array(
            //         'status' => 9,
            //         'file_path' =>$download_path
            //     ));
            // }

        }
        return Response::json(array(
            'status' => $status
        ));
    }
    public function postCrtUniFldrs() {
        $uname=Input::get('data');
        $status=400;
        $base = public_path().'/assets/output/';
        if (File::cleanDirectory($base)) {
            if (isset($uname)&&is_array($uname)) {
                foreach ($uname as $k => $v) {
                    if (Job::MakeDirAllPerm($base.$k)) {
                        Job::MakeDirAllPerm($base.$k.'/images');
                    }
                }
                $status=200;
            }
        }
        return Response::json(array(
            'status' => $status
        ));
    }
    public function postMakeDocs() {
        $uname=Input::get('data');
        $status=400;

        $base = public_path().'/assets/output/';
        
        // Begin code
        if (isset($uname)&&is_array($uname)) {

            foreach ($uname as $k => $v) {
                $phpWord = new \PhpOffice\PhpWord\PhpWord();
                $files = glob($base.$k.'/images/*.{jpg,png,gif}', GLOB_BRACE);
                foreach($files as $file) {
                    $section = $phpWord->addSection();
                    $section->addImage($file, array('width' => 510, 'height' => 410, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
                }
                // Saving the document as OOXML file...
                $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
                $objWriter->save($base.$k.'/helloWorld.docx');
            }


            $status=200;
        }
        return Response::json(array(
            'status' => $status
        ));
    }
    public function postRnmToKrean() {
        $uname=Input::get('data');
        $status=400;
        $base = public_path().'/assets/output/';

        if (isset($uname)&&is_array($uname)) {
            foreach ($uname as $k => $v) {
                // Job::rcopy($base.$k , $base.$v );
                // Move a file to a new location
                File::move($base.$k, $base.$v);
            }
            $status=200;
        }
        return Response::json(array(
            'status' => $status
        ));
    }

    
}
