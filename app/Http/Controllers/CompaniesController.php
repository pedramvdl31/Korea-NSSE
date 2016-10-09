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
class CompaniesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct() {
        $this->layout = 'layouts.admins';
        $this->company_id = 1;
	}

	public function getAdd() {

		$time = Company::getDayHours();
		$country = Company::country_code();

		//var_dump($cities);
		$this->layout->content = View::make('companies.add')
			->with('time',$time)
			->with('country_code',$country);
	}
	/*
	* Processes the company form and redirect with a flash if successful else go back with errors
	*
	*/

	public function postAdd(){

		$validator = Validator::make(Input::all(), Company::$rules);
	 
	    if ($validator->passes()) {
			$store_hours = Company::prepareStoreHours(Input::get('hours'));

			$owner_id = (isset(Auth::user()->parent_id)) ? Auth::user()->parent_id : Auth::user()->id;	    	
	        // validation has passed, save user in DB
			$company = new Company;
			$company->name = Input::get('name');
			$company->phone = Input::get('phone');
			$company->email = Input::get('email');
			$company->street = Input::get('street');
			$company->zipcode = Input::get('zipcode');
			$company->city = Input::get('city');
			$company->state = Input::get('state');
			$company->region = Input::get('region');
			$company->country = Input::get('country');
			$company->store_hours = $store_hours;
			$company->status = 1;
			if($company->save()){

				/**
				* Begin Page Processing
				**/	
				$img_folder = 'img/'.$company->id;
				if (!is_dir($img_folder)){
				    mkdir($img_folder, 0755, true);
				}
			}

		    return Redirect::action('CompaniesController@getView')
		    	->with('message', 'Successfully Registered Company!')
		    	->with('alert_type','alert-success');

	    } else {
	        // validation has failed, display error messages    
	        return Redirect::to('/companies/add')
	        	->with('message', 'The following errors occurred')
	        	->with('alert_type','alert-danger')
	        	->withErrors($validator)
	        	->withInput();
	    }
	}	
	public function getEdit($id = null) {
		
		$owner_id = (isset(Auth::user()->parent_id)) ? Auth::user()->parent_id : Auth::user()->id;
		$companies_all_by_owner = 1;
		
		$company_list = array(
			''=>'Select which company that will use this printer'
		);

		$time = Company::getDayHours();
		$country = Company::country_code();
		$companies = Company::prepareForView(Company::find($id));
		View::share('companies',$companies);
		// $this->layout = View::make('layouts.admin_company'); // Override controller layout
		return view('companies.edit')
			->with('company_list',$company_list)
			->with('time',$time)
			->with('layout','layouts.admins')
			->with('country_code',$country);		
	}

	public function postEdit(){


		$store_hours = Company::prepareStoreHours(Input::get('hours'));

		$owner_id = (isset(Auth::user()->parent_id)) ? Auth::user()->parent_id : Auth::user()->id;	    	
        // validation has passed, save user in DB
		$id = Input::get('id');
		$company = Company::find($id);
		$company->name = Input::get('name');
		$company->phone = Input::get('phone');
		$company->email = Input::get('email');
		$company->street = Input::get('street');
		$company->zipcode = Input::get('zipcode');
		$company->city = Input::get('city');
		$company->state = Input::get('state');
		$company->region = Input::get('region');
		$company->country = Input::get('country');
		$company->store_hours = $store_hours;

		$company->status = 1;
		$company->save();

		return Redirect::action('CompaniesController@getView')
	    	->with('message', 'Successfully updated company!')
	    	->with('alert_type','alert-success');

	}
	public function getView(){

		$companies = Company::prepareForView(Company::find($this->company_id));
		$owners = User::prepareForView(User::find(1));
		View::share('companies',$companies);
		$website = array();
		// $website = Website::prepare(Website::where('company_id', '=', $this->company_id)->first());
		if (isset($companies)) {
			return view('companies.view')
				->with('owners',$owners)
				->with('layout',$this->layout)
				->with('websites',$website);
		}

	}

}