<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
      protected $table = 'resources';

      
      	//COOPER> GROUP FILES
    	public static function PrepareAll($data) {
	        $output = [];
	        if(isset($data)) {
	            foreach ($data as $dk => $dv) {
	            	$tt = strtolower($dv->type);
	            	$ft = '';
	            	switch ($tt) {
	            		case 'png':
	            		case 'jpg':
	            		case 'gif':
	            		case 'tif':
	            			$ft = 'img';
	            			break;
	            		case 'xls':
	            		case 'xlsm':
	            		case 'xlsx':
	            		case 'ods':
	            			$ft = 'excel';
	            			break;
	            		case 'pdf':
	            			$ft = 'pdf';
	            			break;
	            		case 'mov':
	            		case 'flv':
	            		case 'mp4':
	            		case 'wmv':
	            		case 'avi':
	            			$ft = 'video';
	            			break;
	            		default:
	            			$ft = 'undefined';
	            			break;
	            	}
	                $output[$ft][$dv->id]['src'] = $dv->file_src;
	                $output[$ft][$dv->id]['tid'] = $dv->id;
	                $output[$ft][$dv->id]['or_name'] = $dv->original_name;
	                $output[$ft][$dv->id]['type'] = $dv->type;
	                $output[$ft][$dv->id]['created_at'] = $dv->created_at;
	            }
	        }
	        return $output;
    	}
}


