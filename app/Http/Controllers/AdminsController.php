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

use Excel;
use PHPExcel_IOFactory;
use File;

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


    // public function getUsersEdit($id = null) {
    //     $users = User::find($id);
    //     $roles = Role::PerpareAdminRoleSelect();
    //     $user_role_id = RoleUser::GetUserRoleId($users->id);
    //     return view('admins.users_setting.edit')
    //      ->with('layout',$this->layout)
    //      ->with('roles',$roles)
    //      ->with('users',$users)
    //      ->with('user_role_id',$user_role_id); 
    // }
    
    // public function postUsersEdit() {

    //     $username = Input::get('username');
    //     $fname = Input::get('fname');
    //     $lname = Input::get('lname');
    //     $email = Input::get('email');
    //     $role_id = Input::get('role_id');
    //     $id = Input::get('id');

    //     $users = User::find($id);
    //     $users->username = $username;
    //     $users->firstname = $fname;
    //     $users->lastname = $lname;
    //     $users->email = $email;

    //     $role_users = RoleUser::where('user_id',$id)->first();
    //     $role_users->role_id = $role_id;

    //     if ($users->save() && $role_users->save()) {
    //         Flash::success('Successfully Updated');
    //     } else {
    //         Flash::Error('Error');
    //     }
    //     return Redirect::back();
    // }

    
}
