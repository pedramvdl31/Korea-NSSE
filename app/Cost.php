<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;
class Cost extends Model
{
    

    public static function PrepareCostArray($cdata) {
    	$comapnies_array = array();
    	if (isset($cdata)) {
    		//make array, array key based on each company name
    		foreach ($cdata as $cdk => $cdv) {
    			$comapnies_array[$cdv] = '';
    		}
    		//go through all and save the data for each company
    		foreach ($comapnies_array as $cmk => $cmv) {
    			$tc = Cost::where('company_name',$cmk)->get();
    			$comapnies_array[$cmk]['row-count'] = count($tc);
    			$total = 0;
    			foreach ($tc as $tck => $tcv) {
    				$total+=$tcv->value;
    				$comapnies_array[$cmk]['total'] = $total;
    				$comapnies_array[$cmk][$tcv->month]['user_id'] = $tcv->user_id;
    				$comapnies_array[$cmk][$tcv->month]['value'] = $tcv->value;
    			}
    		}
    	}
        return $comapnies_array;
    }

    public static function PrepareTBH($cadata) {
        $bhtml='';
        if (isset($cadata)) {
            foreach ($cadata as $cdkey => $cdval) {
                $bhtml.='<tr class="re-tr">';
                $bhtml.='<th scope="row" class="gr">'.$cdkey.'</th>';
                for ($i=1; $i<=12 ; $i++) { 
                        if (isset($cdval[$i])) {
                            if (isset($cdval[$i]['value'])) {
                                $fval = number_format ($cdval[$i]['value'],3,".",",");
                                $bhtml.= '<td class="re-td" company="'.$cdkey.'" month="'.$i.'">'.$fval.'</td>';
                            }
                        } else {
                            $bhtml.= '<td class="re-td" company="'.$cdkey.'" month="'.$i.'">-</td>';
                        }
                }
                if (isset($cdval['total'])) {
                    $ftotal = number_format ($cdval['total'],3,".",",");
                    $bhtml.= '<td class="gr">'.$ftotal.'</td>';
                }
                $bhtml.='</tr>';
            }
        }
        return $bhtml;
    }


    public static function PrepareChartData($cd) {
        $oarray= array();
        if (isset($cd)) {
            //PREPARE FIRST ARRAY COMPANIES NAME
            $count1=1;
            $oarray[0][0]= 'Genre';
            foreach ($cd as $cdke => $cdv) {
                $oarray[0][$count1]= $cdke;
                $count1++;
            }
            $oarray[0][$count1]= array('role' => 'annotation');
            $oarray_array_count = count($oarray[0]);
            if ($oarray_array_count>0) {
                $new_co_num = $oarray_array_count-1;
                for ($i=1; $i <= 12 ; $i++) { 
                    $oarray[$i][0]=(string)$i;
                    $count2=0;
                    $ann=0;
                    for ($j=1; $j <= $new_co_num; $j++) { 
                        if (isset($oarray[0][$j])) {
                            $this_company_name = $oarray[0][$j];
                            if (!is_array($this_company_name)) {
                                if (isset($cd[$this_company_name])) {
                                    $tco = $cd[$this_company_name];
                                    if (isset($tco[$i])) {
                                        if (isset($tco[$i]['value'])) {
                                            $oarray[$i][$j]=(float)$tco[$i]['value'];
                                            $ann+=$tco[$i]['value'];
                                        }
                                    } else {
                                        $oarray[$i][$j]='';
                                    }
                                    $count2++;
                                }
                            }
                        }
                    }
                    $oarray[$i][$count2+1]=number_format ($ann,3,".",",");
                }
            }
        }
        return $oarray;
    }
    
    public static function PrepareCoNamesArray($cdata) {
        $comapnies_array = array();
        if (isset($cdata)) {
            //make array, array key based on each company name
            foreach ($cdata as $cdk => $cdv) {
                $comapnies_array[$cdv] = '';
            }
            //go through all and save the data for each company
            foreach ($comapnies_array as $cmk => $cmv) {
                $tc = Cost::where('company_name',$cmk)->get();
                $comapnies_array[$cmk] = $cmk;
            }
        }
        return $comapnies_array;
    }
    
    public static function PrepareExcelXmlConames($ca,$sxe) {
        if (isset($ca,$sxe)) {
            unset($sxe->si);
            $sxe->addChild('si','');

            $sxe->si[0]='';
            $sxe->si[0]->addChild('t','Companies');

            $months = array(
                '1' =>'Jan',
                '2' =>'Feb',
                '3' =>'Mar',
                '4' =>'Apr',
                '5' =>'May',
                '6' =>'Jun',
                '7' =>'Jul',
                '8' =>'Aug',
                '9' =>'Sep',
                '10' =>'Oct',
                '11' =>'Nov',
                '12' =>'Dec',
                '13' =>'Total',
                );
            for ($i=1; $i <=13; $i++) { 
                $sxe->si[$i]='';
                $sxe->si[$i]->addChild('t',$months[$i]);
            }
            $count=14;
            foreach ($ca as $ck => $cv) {
                $sxe->si[$count]='';
                $sxe->si[$count]->addChild('t',$ck);
                $count++;
            }

            $sxe->attributes()->count = $count;
            $sxe->attributes()->uniqueCount = $count;
        }
        return isset($sxe)?$sxe:null;
    }

    public static function PrepareExcelXml($ca,$sxe) {

        if (isset($ca,$sxe)) {
            $sxe->dimension->attributes()->ref = "A16:N19";
            $almap = range('A', 'Z');
            $starting=17;
            $row_num = 1;//just for now
            $c_num = 1;
            $title_count=14;

            //FIX THE TITLE VALUES
            for ($i=0; $i <=13 ; $i++) { 
                if (!empty($sxe->sheetData->row[0]->c[$i]->v)) {
                    $sxe->sheetData->row[0]->c[$i]->v = $i;
                }
            }

            //SET ALL VALUES
            foreach ($ca as $coname => $cav) {
                $sxe->sheetData->row[$row_num]='';
                $sxe->sheetData->row[$row_num]->addAttribute("r",$starting);
                $sxe->sheetData->row[$row_num]->addAttribute("spans","1:14");
                $sxe->sheetData->row[$row_num]->c='';
                $sxe->sheetData->row[$row_num]->c[0]='';
                $sxe->sheetData->row[$row_num]->c[0]->addAttribute("r",'A'.$starting);
                $sxe->sheetData->row[$row_num]->c[0]->addAttribute("t",'s');
                $sxe->sheetData->row[$row_num]->c[0]->addChild('v',$title_count);
                for ($i=1; $i<=12 ; $i++) { 
                    if (isset($cav[$i])) {
                        $sxe->sheetData->row[$row_num]->c[$i]='';
                        $sxe->sheetData->row[$row_num]->c[$i]->addAttribute("r",$almap[$i].$starting);
                        $sxe->sheetData->row[$row_num]->c[$i]->addChild('v',$cav[$i]['value']);
                    } else {
                        $sxe->sheetData->row[$row_num]->c[$i]='';
                        $sxe->sheetData->row[$row_num]->c[$i]->addAttribute("r",$almap[$i].$starting);
                        $sxe->sheetData->row[$row_num]->c[$i]->addChild('v','0');                    
                    }
                }
                $sxe->sheetData->row[$row_num]->c[13]='';
                $sxe->sheetData->row[$row_num]->c[13]->addAttribute("r",$almap[13].$starting);
                $sxe->sheetData->row[$row_num]->c[13]->addChild('v',$cav['total']);


                $c_num++;
                $row_num++;
                $starting++;
                $title_count++;
            }
        }
        return isset($sxe)?$sxe:null;
    }
    

    public static function PrepareTBHExcel($cadata) {
        $bhtml='';
        if (isset($cadata)) {
            foreach ($cadata as $cdkey => $cdval) {
                $bhtml.='<tr class="re-tr">';
                $bhtml.='<th scope="row" class="gr">'.$cdkey.'</th>';
                for ($i=1; $i<=12 ; $i++) { 
                        if (isset($cdval[$i])) {
                            if (isset($cdval[$i]['value'])) {
                                $fval = number_format ($cdval[$i]['value'],0,".",",");
                                $bhtml.= '<td class="re-td" company="'.$cdkey.'" month="'.$i.'">'.$fval.'</td>';
                            }
                        } else {
                            $bhtml.= '<td class="re-td" company="'.$cdkey.'" month="'.$i.'">-</td>';
                        }
                }
                if (isset($cdval['total'])) {
                    $ftotal = number_format ($cdval['total'],0,".",",");
                    $bhtml.= '<td class="gr">'.$ftotal.'</td>';
                }
                $bhtml.='</tr>';
            }
        }
        return $bhtml;
    }








    public static function PrepareExcelArray($cd) {
    	$oarray= array();
    	if (isset($cd)) {
    		//PREPARE FIRST ARRAY COMPANIES NAME
    		$count1=1;
    		$oarray[0][0]= 'Genre';
    		for ($iz=1; $iz <= 12 ; $iz++) {
    			$oarray[0][$count1]= $iz.'월';
    			$count1++;
    		}
    		$oarray[0][$count1]= array('role' => 'annotation');
    		$oarray_array_count = count($oarray[0]);
    		if ($oarray_array_count>0) {
	    		$new_co_num = $oarray_array_count-1;
	    		for ($i=1; $i <= 12 ; $i++) { 
	    			$oarray[$i][0]=(string)$i;
	    			$count2=0;
	    			$ann=0;
	    			for ($j=1; $j <= $new_co_num; $j++) { 
	    				if (isset($oarray[0][$j])) {
	    					$this_company_name = $oarray[0][$j];
	    					if (!is_array($this_company_name)) {
		    					if (isset($cd[$this_company_name])) {
		    						$tco = $cd[$this_company_name];
		    						if (isset($tco[$i])) {
		    							if (isset($tco[$i]['value'])) {
		    								$oarray[$i][$j]=(float)$tco[$i]['value'];
		    								$ann+=$tco[$i]['value'];
		    							}
		    						} else {
		    							$oarray[$i][$j]='';
		    						}
		    						$count2++;
		    					}
	    					}
	    				}
	    			}
	    			$oarray[$i][$count2+1]=number_format ($ann,3,".",",");
	    		}
    		}
    	}
    	// Job::dump($oarray);
    	// Job::dump($cd);
        return $oarray;
    }
    

    public static function SaveUpdatedReport($darray) {
        $status = 400;
        if (isset($darray)) {
            $status = 200;
            $tu = Auth::id();
            foreach ($darray as $conamekey => $cv) {
                foreach ($cv as $cvkmonth => $cvval) {
                    if (isset($cvval['updated'])) {
                        if ($cvval['updated']=="1") {
                                // Job::dump($conamekey);
                                // Job::dump($cvkmonth);
                            $tc = Cost::where('company_name',$conamekey)
                                        ->where('month',$cvkmonth)->first();
                            if (isset($tc) && !empty($tc)) {
                                // Job::dump('set');
                                // Job::dump($tc);
                                $tc->user_id=$tu;
                                $tc->status=2;//UPDATED
                                if (isset($cvval['value'])) {
                                    $tc->value=$cvval['value'];
                                }
                                $tc->save();

                            } else {
                                // Job::dump('NOT-set');
                                $ncost = new Cost();
                                $ncost->user_id=$tu;
                                $ncost->company_name=$conamekey;
                                $ncost->month=$cvkmonth;
                                if (isset($cvval['value'])) {
                                    $ncost->value=$cvval['value'];
                                }
                                $ncost->save();
                            }
                        }
                    }
                }
            }
        }
        return $status;
    }

}
