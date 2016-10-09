<?php
namespace App\Http\Controllers;

use Input;
use Validator;
use Redirect;
use Hash;
use Request;
use Route;
use Response;
use Auth;
use URL;
use Session;
use Laracasts\Flash\Flash;
use View;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Admin;
use App\Role;
use App\Permission;
use App\PermissionRole;
use App\Website;
use App\Company;
use App\Menu;
use App\Page;
use App\MenuItem;
use App\Resource;
use Excel;
use PHPExcel_IOFactory;

class ResourcesController extends Controller {
	//set layout
	protected $layout = "layouts.admin";
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct() {
		// Check if user is authorized to view the page
        $this->company_id = 1;
        // // Define layout
        $this->layout = 'layouts.admins';
	}

public function getIndex() {

	}

	//COOPER> NOT IN USE
	public function getAdd() {
		$time = Company::getDayHours();
		$country = Company::country_code();

		//var_dump($cities);
		 return view('resources.add')
		 ->with('layout',$this->layout)
			->with('time',$time)
			->with('country_code',$country);
	}


	//COOPER> QRCODE INDEX PAGE
	public function getQrIndex() {
		 return view('resources.qr_index')
		 ->with('layout',$this->layout);
	}
	public function getQrIndexEmp() {
		 return view('resources.qr_index')
		 ->with('layout','layouts.employees');
	}
	//COOPER> DOWNLOAD EXCEL FILE
	public function getViewExcel($src=null) {
		$sp = DIRECTORY_SEPARATOR; 
		$fpath = 'assets'.$sp.'resources_file'.$sp.$this->company_id.$sp.$src;
		if(!$fpath){ // file does not exist
		    die('file not found');
		} else {
		    header("Cache-Control: public");
		    header("Content-Description: File Transfer");
		    header("Content-Disposition: attachment; filename=".$src);
		    header("Content-Type: application/xlsx");
		    header("Content-Transfer-Encoding: binary");
		    // read the file from disk
		    readfile($fpath);
		}
	}

	/*
	* Processes the company form and redirect with a flash if successful else go back with errors
	*
	*/

	public function postAdd(){
		$validator = Validator::make(Input::all(), Company::$rules);
	    if ($validator->passes()) {
	    } else {
	        // validation has failed, display error messages    
	        return Redirect::to('/companies/add')
	        	->with('message', 'The following errors occurred')
	        	->with('alert_type','alert-danger')
	        	->withErrors($validator)
	        	->withInput();
	    }
	}
	public function getEdit() {
		$companies = Company::find($this->company_id);
		$all_resources = Resource::PrepareAll(Resource::all());
		// Job::dump($all_resources);
		return view('resources.edit')
			->with('layout',$this->layout)
			->with('resources',$all_resources)
			->with('companies',$companies);	
	}

	public function postEdit(){

		$companies = Company::find($this->company_id);
		$path = 'assets/img'.DIRECTORY_SEPARATOR.$this->company_id;
		$resources = glob($path.DIRECTORY_SEPARATOR.'*.*');
		// $this->layout = View::make('layouts.admin_company'); // Override controller layout
		 return view('resources.edit')
		 ->with('layout',$this->layout)
			->with('resources',$resources)
			->with('companies',$companies);	

		$all_resources = Resource::PrepareAll(Resource::all());
		// Job::dump('ss');
		// Job::dump($all_resources);
		return view('resources.index')
			->with('layout',$this->layout)
			->with('resources',$resources);

	}

	public function getGenQRCode() {
		return view('resources.gen_qrcode')
			->with('layout',$this->layout);
	}
	public function getGenQRCodeEmp() {
		return view('resources.gen_qrcode')
			->with('layout','layouts.employees');
	}
	//COOPER> SAVE UPLOADED FILES RESOURCES
	public function postFileupload() {
		$companies = Company::find($this->company_id);
		$sp = DIRECTORY_SEPARATOR;
		$ParentPath = "assets".$sp."resources_file".$sp;
		$savePath = "assets".$sp."resources_file".$sp.$this->company_id.$sp;
		Job::CheckNMakeDirAllPerm($ParentPath);
		Job::CheckNMakeDirAllPerm($savePath);
		$files = Input::file('files');
		$file_info = Job::GetFileInfo($_FILES['files']['name'][0]);
	    do {
	    	$rand_data = Job::ReturnRandDateNTok();
	    	$fileName = Job::FormatFileNames($file_info['or_name']).'_'.$rand_data['now_dt'].'_'.$rand_data['tok'].'.'.$file_info['exten'];
	    } while (file_exists($savePath.$fileName));
		// Save image and rename it to new name
		if($files[0]->move($savePath, $fileName)){
			$n_n = new Resource();
			$n_n->user_id = Auth::id();
			$n_n->file_src = $fileName;
			$n_n->type = $file_info['exten'];
			$n_n->original_name = $file_info['or_name'];
			if ($n_n->save()) {
			    return Response::json([
			        'success'=>true,
			        'path'=> $savePath.$fileName
			    ]);
			} else {
			    return Response::json([
			        'success'=>false,
			        'reason'=> 'Error saving to database.' 
			    ]);				
			}
		} else {
		    return Response::json([
		        'success'=>false,
		        'reason'=> 'Error saving image.' 
		    ]);
		} 
	}
		//COOPER> REPLACE EXCEL FILES
		public function postFileuploadReplace() {
			$input_ins = Input::all();
			$this_src_id = $input_ins['src'];
			if (isset($this_src_id)) {
				$sp = DIRECTORY_SEPARATOR;
				$savePath = "assets".$sp."resources_file".$sp.$this->company_id.$sp;
				$this_res = Resource::find($this_src_id);
				if (isset($this_res)) {
					$this_resource_src_name = $this_res->file_src;
					$file_path = $savePath.$this_resource_src_name;
					if (file_exists($file_path)) {

						$files = Input::file('files');
						$file_info = Job::GetFileInfo($_FILES['files']['name'][0]);
					    $fileName = $this_resource_src_name;
						// Save image and rename it to new name
						if($files[0]->move($savePath, $fileName)){
							    return Response::json([
							        'success'=>true,
							        'path'=> $savePath.$fileName
							    ]);
						} else {
						    return Response::json([
						        'success'=>false,
						        'reason'=> 'Error saving image.' 
						    ]);
						} 

					}
				}
			}
			
		    return Response::json([
		        'success'=>false,
		        'reason'=> 'Error saving image.' 
		    ]);
	}

	public function postDelete() {
		$status=400;
		$src = Input::get('src');
		if (!empty($src)) {
			$this_src = Resource::find($src);
			if (!empty($this_src)) {
				$tfile = public_path('assets/resources_file/'.$this->company_id.'/'.$this_src->file_src);
				if (file_exists($tfile)) {
					if (unlink($tfile)) {
						if ($this_src->delete()) {
							$status=200;
						}
					}
				} else {
					//for some reasone there is inconsistent data record, delete anyway
					if ($this_src->delete()) {
						$status=200;
					}
				}

			}
		}
		return Response::json(array(
			'status' => $status
		));
	}


}