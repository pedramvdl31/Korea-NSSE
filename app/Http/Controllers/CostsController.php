<?php
namespace App\Http\Controllers;


use Input;
use Validator;
use Redirect;
use Request;
use Route;
use Response;
use Auth;
use Laracasts\Flash\Flash;
use View;
use JavaScript;
use Excel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use App\Admin;
use App\Cost;
use PHPExcel_IOFactory;

use PDF;
use Image;
use Filesystem;
use ZipArchive;
use SimpleXMLElement;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
// use Knp\Snappy\Pdf;

class CostsController extends Controller
{
    public function __construct() {
        $this->layout = 'layouts.admins';
    }
    
	public function getIndex()
	{
		//TABLE BODY HTML
		$ca = Cost::PrepareCostArray(Cost::pluck('company_name')->toArray());
		$tbh = Cost::PrepareTBH($ca);
		$enc = json_encode(Cost::PrepareChartData($ca));
	    JavaScript::put([
	    	'costs_array' => json_encode($ca),
	        'enc' => $enc
	    ]);
		return view('costs.index')
			->with('layout',$this->layout)
			->with('tbh',$tbh);
	}

	public function getIndexName($id=null)
	{
		$name = '기존정보';
		if (isset($id)) {
			$name = $id;
		}
		//TABLE BODY HTML
		$ca = Cost::PrepareCostArray(Cost::pluck('company_name')->toArray());
		$tbh = Cost::PrepareTBH($ca);
		$enc = json_encode(Cost::PrepareChartData($ca));
	    JavaScript::put([
	    	'costs_array' => json_encode($ca),
	        'enc' => $enc
	    ]);
		return view('costs.index_name')
			->with('layout',$this->layout)
			->with('name',$name)
			->with('tbh',$tbh);
	}


        public function getGenPdf()
    {
		$ca = Cost::PrepareCostArray(Cost::pluck('company_name')->toArray());
		$tbh = Cost::PrepareTBH($ca);
		$chartdata = Cost::PrepareChartData($ca);
		$enc = json_encode($chartdata);
	    JavaScript::put([
	        'enc' => $enc
	    ]);
	    $now_dt = time();
	    $tok = Job::generateRandomNumber(6);
		$datap = array('tbh' =>$tbh);
		$pdf = PDF::loadView('costs.img_pdf_gen', $datap);
		return $pdf->download('PDF-Report-'.$now_dt.'-'.$tok.'.pdf');
    }
        public function getGenExcel()
    {

    	$sp = DIRECTORY_SEPARATOR;
    	$zip = new ZipArchive;
    	if ($zip->open('assets'.$sp.'excels'.$sp.'chart.zip') === TRUE) {
    		$des = 'assets'.$sp.'excels'.$sp.'chart-extracted'.$sp.'chart';
    		if (!is_dir($des)) {
 				mkdir($des,0777);    		
			}
			Job::deleteContent($des);
	    	$zip->extractTo($des);
	    	$zip->close();
		}
		//--
		$xml_files_base = 'assets'.$sp.'excels'.$sp.'chart-extracted'.$sp.'chart'.$sp.'xl'.$sp.'worksheets'.$sp;
		$xml_file= $xml_files_base.'sheet1.xml';
		if (file_exists($xml_file)) {
			$fg = file_get_contents($xml_file);
			$xml = new SimpleXMLElement($fg);
			$ca = Cost::PrepareCostArray(Cost::pluck('company_name')->toArray());
			$prepare_xml = Cost::PrepareExcelXml($ca,$xml);
			//SAVE
			// Job::dump($prepare_xml);
			$prepare_xml->asXML($xml_files_base."sheet1.xml");
		}

		$xml_coname_base = 'assets'.$sp.'excels'.$sp.'chart-extracted'.$sp.'chart'.$sp.'xl'.$sp;
		$xml_file_co= $xml_coname_base.'sharedStrings.xml';
		if (file_exists($xml_file_co)) {
			$fg_c = file_get_contents($xml_file_co);
			$xml_c = new SimpleXMLElement($fg_c);
			$ca_names = Cost::PrepareCoNamesArray(Cost::pluck('company_name')->toArray());
			$prepare_xml_co = Cost::PrepareExcelXmlConames($ca_names,$xml_c);
			// Job::dump($prepare_xml_co);
			//SAVE
			$prepare_xml_co->asXML($xml_coname_base."sharedStrings.xml");
		}

		// Get real path for our folder
		$src_file = 'assets'.$sp.'excels'.$sp.'chart-extracted'.$sp.'chart';
		$dest_file = 'assets'.$sp.'excels'.$sp.'output_chart'.$sp.'chart.zip';

		Job::zipData($src_file, $dest_file);

		$new_file_xlsx = 'assets'.$sp.'excels'.$sp.'output_chart'.$sp.'chart.xlsx';
		if (file_exists($dest_file)) {
			rename($dest_file, $new_file_xlsx);
		}
	    $now_dt = time();
	    $tok = Job::generateRandomNumber(6);
		if(!$new_file_xlsx){ // file does not exist
		    die('file not found');
		} else {
		    header("Cache-Control: public");
		    header("Content-Description: File Transfer");
		    header("Content-Disposition: attachment; filename=Excel-Report-".$now_dt."-".$tok.".xlsx");
		    header("Content-Type: application/xlsx");
		    header("Content-Transfer-Encoding: binary");
		    // read the file from disk
		    readfile($new_file_xlsx);
		}
		//--
    }

        public function getGenPrint()
    {
		//TABLE BODY HTML
		$ca = Cost::PrepareCostArray(Cost::pluck('company_name')->toArray());
		$tbh = Cost::PrepareTBH($ca);
		$chartdata = Cost::PrepareChartData($ca);
		$enc = json_encode($chartdata);
	    JavaScript::put([
	        'enc' => $enc
	    ]);
	    $now_dt = time();
	    $tok = Job::generateRandomNumber(6);
	    $chartdata = Cost::PrepareExcelArray($ca);

		return view('costs.print')
			->with('layout','layouts.empty')
			->with('tbh',$tbh);
    }


	public function getAdd()
	{
		// $tax_status = Tax::taxStatus();
		// return view('taxes.add')
		// 	->with('layout',$this->layout)
		// 	->with('tax_status',$tax_status);
	}
	public function postAdd()
	{
		
	}

	public function getEdit($id = null)
	{
		// return view('taxes.edit')
		// 	->with('layout',$this->layout);
	}
	public function postEdit()
	{
		
	}

	public function postDelete()
	{
		// $tax_id = Input::get('tax_id');
		// $tax = Tax::find($tax_id);
		// if($tax->delete()) {
		// 	return Redirect::action('TaxesController@getIndex')
		// 	->with('message', 'Successfully deleted!')
		// 	->with('alert_type','alert-success');
		// } else {
		// 	return Redirect::back()
		// 	->with('message', 'Oops, somthing went wrong. Please try again.')
		// 	->with('alert_type','alert-danger');	
		// }
	}

	public function postUpdateReport()
	{
		if(Request::ajax()){
			$data_array = Input::get('data_array');
			$data_de = json_decode($data_array,true);
			$save_data = Cost::SaveUpdatedReport($data_de);

			if ($save_data == 200) {
				$ca = Cost::PrepareCostArray(Cost::pluck('company_name')->toArray());
				$tbh = Cost::PrepareTBH($ca);
				$chartdata = Cost::PrepareChartData($ca);
				$enc = json_encode($chartdata);
			}
            return Response::json(array(
                'status' => $save_data,
                'tbh' => $tbh,
                'chart_array' => $enc
                ));
        }
	}
	
}
