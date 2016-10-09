<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use Route;
use Response;
use Auth;
use URL;
use Session;
use Laracasts\Flash\Flash;
use View;
use JavaScript;
use Excel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Employee;
use PDF;
use DB;

class EmployeesController extends Controller
{
    public function __construct() {
        $this->layout = 'layouts.employees';
    }
    
    public function getIndex() {
        return view('employees.index')
        ->with('layout',$this->layout);
    }

    public function getCheckSheetView() {

        $data = DB::table('check_sheets')->where('user_id',1)->first();

        $table_html = Employee::PrepareCheckSheetTable($data);
        return view('employees.check_sheet_view')
        ->with('table_html',$table_html)
        ->with('layout',$this->layout);
    }

        public function getGenPrint()
    {
        $tbh = Employee::PrepareTableForPrint(1);
        return view('employees.print_checksheet')
            ->with('layout','layouts.empty')
            ->with('tbh',$tbh);
    }

        public function getGenPdf()
    {
        $tbh = Employee::PrepareTableForPrint(1);
        $datap = array('tbh' =>$tbh);
        $now_dt = time();
        $tok = Job::generateRandomNumber(6);
        $pdf = PDF::loadView('employees.img_pdf_gen', $datap);
        return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.pdf');
    }


}
