<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Redirect;
use Route;
use Response;
use Auth;
use URL;
use Session;
use View;
use App\Http\Requests;
use App\Job;
use App\User;
use App\Admin;
use App\Knsse;
use App;
use Excel;
use PHPExcel_IOFactory;
use File;
use PDF;
use Filesystem;
use Image;

class Knsse extends Model
{
	static public function MakeAndSaveBoxPlotChartImage($data,$loc){
		$data = array('data' =>json_encode($data));
        $tok = Job::generateRandomNumber(6).time();
        $img = Image::loadView('knsse.BPoutput',$data)->save($loc.'chartbp'.$tok.'.jpg');
	}
	static public function MakeAndSaveSpiderChartImage($data,$loc){
		$data = array('data' =>json_encode($data));
        $tok = Job::generateRandomNumber(6).time();
        $img = Image::loadView('knsse.SPoutput',$data)->save($loc.'chartsp'.$tok.'.jpg');
	}

}
