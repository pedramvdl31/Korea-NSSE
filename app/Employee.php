<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{





    public static function PrepareTableForPrint($data) {
        $html = '
            <style>
             .bln{
                border-left:0 !important;
             }
             .brn{
                border-right:0 !important;
             }
                 th{
                    text-align:center;
                    vertical-align: middle !important;
                 }
                 .ver-col{
                    transform: rotate(90deg);
                    writing-mode: vertical-lr;
                 }
                .differentTable, .differentTable td{
                   border-color: #7b7979;
                }
                .differentTable>thead>tr>th, .differentTable>tbody>tr>th, .differentTable>tfoot>tr>th, .differentTable>thead>tr>td, .differentTable>tbody>tr>td, .differentTable>tfoot>tr>td {
                    border: 1px solid #7b7979;
                }
            </style>


            <div class="table-responsive">
              <table class="table table-bordered differentTable" style="margin-bottom:0">
                <thead>
                     <!-- First row -->
                  <tr>
                    <th colspan="17">
                        (CNC) CHECK SHEET
                    </th>
                  </tr>
                    <!-- Second row -->
                  <tr>
                    <th>
                        설비명
                    </th>
                    <th>
                        1 호기
                    </th>
                    <th>
                        소재 NO
                    </th>
                    <th class="brn" colspan="2">
                        ①&nbsp;12314325&nbsp;&nbsp;&nbsp;&nbsp;-
                    </th>
                    <th class="bln" colspan="2">
                        &nbsp;&nbsp;962&nbsp;&nbsp;&nbsp;㎏
                    </th>
                    <th class="brn" colspan="2">
                        ②&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                    </th>
                    <th class="bln" colspan="2">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;㎏
                    </th>
                    <th>
                        작업자
                    </th>
                    <th>
                        USERNAME
                    </th>
                    <th>
                        작업일자
                    </th>
                    <th colspan="3">
                        2017년&nbsp;&nbsp;8월&nbsp;&nbsp;27일&nbsp;&nbsp;( <span class="label label-primary">주</span> , 야 )
                    </th>
                  </tr>
                   <!-- Third row -->
                  <tr>
                    <th rowspan="2">
                        항목
                    </th>
                    <th rowspan="2">
                        항목
                    </th>
                    <th rowspan="2">
                        08:40</br>(20:40)
                    </th>
                    <th rowspan="2">
                        10:40</br>(22:40)
                    </th>
                    <th rowspan="2">
                        13:20</br>(01:20)
                    </th>
                    <th rowspan="2">
                        15:20</br>(03:40)
                    </th>
                    <th rowspan="2">
                        17:40</br>(05:40)
                    </th>
                    <th rowspan="2">
                        19:40</br>(07:40)
                    </th>
                    <th rowspan="2">
                        작 업</br>종료시
                    </th>
                    <th rowspan="2">
                        기종전환</br>(     :     )
                    </th>
                    <th rowspan="2">
                        기종전환</br>(     :     )
                    </th>
                    <th rowspan="2">
                        TOOL</br>교체시
                    </th>
                    <th rowspan="2">
                        TOOL</br>교체시
                    </th>
                    <th>
                        모  델
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <tr>
                    <th>
                        생산량
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        1
                    </th>
                    <th rowspan="13" class="ver-col" style="border:none">
                        외관검사기준서참조</br>작업표준서참조
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        양품
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        2
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        불량품
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        3
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th colspan="4">
                        불량내용
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        4
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        외관
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        5
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        SETTING품
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        6
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        외경(COPY)
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        7
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        R홈
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        8
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        NECK홈
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        9
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        홈경
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        10
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        절단
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        11
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        면취
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        12
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        기타
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        13
                    </th>

                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                </thead>
                <tbody>

                </tbody>
              </table> 
            </div>









            <style>
             .ts{
                font-size:20px;

             }
             .sep{
                vertical-align: text-bottom;
                font-size: 23px;
                font-weight: 900;
             }
             .th-relative{
                position:relative;
             }
             .th-span-abs{
                background: white;
                position: absolute;
                border: 1px solid gray;
                left: -10px;
                padding: 1px;
             }
             .b-l-b{
                border-left: 2px solid black !important;
             }
             .b-r-b{
                border-right: 2px solid black !important;
             }
            </style>


            <div class="table-responsive">
              <table class="table table-bordered differentTable">
                <thead>
                     <!-- row -->
                    <tr>
                        <th colspan="3" style="min-width: 225px;">
                            <span class="ts">
                                <sub>비가동내역</sub>
                            </span>
                            <span class="sep">
                                \
                            </span>
                            <span class="ts">
                                <sup>시 간</sup>
                            </span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">08</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">09</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">10</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">11</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">12</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">13</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">14</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">15</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">16</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">17</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">18</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">19</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">20</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">21</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">22</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">23</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">24</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">01</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">02</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">03</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">04</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">05</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">06</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">07</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">08</span>
                        </th>
                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            원소재 투입
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2" colspan="2">
                            기종전환
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            SAMPLE 작업
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            설비고장
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th rowspan="3">
                            공</br>구</br>교</br>환
                        </th>
                        <th>
                            G/B CHUCK      
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            BITE(INSERT)         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            기 타         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            결 품
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th rowspan="3">
                            공</br>구</br>교</br>환
                        </th>
                        <th>
                            G/B CHUCK      
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            BITE(INSERT)         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            기 타         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th colspan="20" rowspan="3">
                        BITE(INSERT) 교환 내용
                        </th>
                        <th colspan="129" rowspan="3">
                        ※특이사항
                        </th>
                        <th colspan="1" rowspan="3" style="border: 1px solid #7b7979;">
                            생</br>산
                        </th>
                    </tr>
                    <tr>
                        <th style="white-space: nowrap;">
                            작업자
                        </th>
                        <th style="white-space: nowrap;">
                            책임자
                        </th>
                    </tr>
                    <tr>
                        <th style="height: 52px;">
                        </th>
                        <th style="height: 52px;">
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
              </table> 
            </div>
        ';

        return $html;
    }


	public static function PrepareCheckSheetTable($data) {

        //GET USERNAME
        $t_user = User::find($data->user_id);
        if (isset($t_user)) {
            $uname = $t_user->username;
        }

        //PREPARE WORKDATE
        $year='-';
        $month='-';
        $day='-';
        if (isset($data->work_date)) {
            $date_array = explode('-', $data->work_date);
            $year=$date_array[0];
            $month=$date_array[1];
            $day=$date_array[2];
        }

        //PREPARE WORKKIND
        $wt_html = '-';
        if (isset($data->work_kind)) {
            switch ($data->work_kind) {
                case 1:
                    $wt_html = '<span class="label label-primary">주</span> , 야';
                    break;
                case 2:
                    $wt_html = '주 , <span class="label label-primary">야</span>';
                    break;
            }
        }

        //PREPARE APPROVALS
        $worker_appr = '-';
        $manager_appr = '-';
        if (isset($data->worker_appr)) {
            if ($data->worker_appr==1) {
                $worker_appr = '✓';
            }
        }
        if (isset($data->manager_appr)) {
            if ($data->manager_appr==1) {
                $manager_appr = '✓';
            }
        }

        //PREPARE CHECKSHEET DATA
        $cshdata = DB::table('check_sheet_data')->where('check_sheets_id',$data->id)->get();
        $t_html = array();
        for ($n=0; $n <=12 ; $n++) { 
            $t_html[$n]='';
        }

        for ($i=0; $i <=12 ; $i++) { 
            for ($j=1; $j <= 8; $j++) { 
                $ntn = 't'.$j;
                $t_html[$i][$ntn]='';
            }
        }

        if (isset($cshdata)) {
            for ($ni=0; $ni <=12 ; $ni++) { 
                $tn = "t".($ni+1);
                if (isset($cshdata[$ni]->$tn)) {
                    for ($nj=1; $nj <= 8; $nj++) {
                        $tj = "t".($nj);
                        $t_html[$ni][$tj] = $cshdata[$ni]->$tj;
                    }
                }
            }
        }

        // Job::dump($t_html);
        if (isset($data)) {
            $html = '
            <style>
                .tn{
                    font-weight: 400;
                }
                .bln{
                    border-left:0 !important;
                }
                .brn{
                    border-right:0 !important;
                }
                th{
                    text-align:center;
                    vertical-align: middle !important;
                }
                .ver-col{
                    transform: rotate(90deg);
                    writing-mode: vertical-lr;
                }
                .differentTable, .differentTable td{
                    border-color: #7b7979;
                }
                .differentTable>thead>tr>th, .differentTable>tbody>tr>th, .differentTable>tfoot>tr>th, .differentTable>thead>tr>td, .differentTable>tbody>tr>td, .differentTable>tfoot>tr>td {
                    border: 1px solid #7b7979;
                }
            </style>

            <div class="table-responsive">
              <table class="table table-bordered differentTable" style="margin-bottom:0">
                <thead>
                     <!-- First row -->
                  <tr>
                    <th colspan="17">
                        (<span class="tn">'.$data->machine_name.'</span>) CHECK SHEET
                    </th>
                  </tr>
                    <!-- Second row -->
                  <tr>
                    <th>
                        설비명
                    </th>
                    <th>
                        <span class="tn">'.$data->id.'</span> 호기
                    </th>
                    <th>
                        소재 NO
                    </th>
                    <th class="brn" colspan="2">
                        ①&nbsp;<span class="tn">'.$data->part_no1.'</span>&nbsp;&nbsp;&nbsp;&nbsp;-
                    </th>
                    <th class="bln" colspan="2">
                        &nbsp;&nbsp;<span class="tn">'.$data->part_weight1.'</span>&nbsp;&nbsp;&nbsp;㎏
                    </th>
                    <th class="brn" colspan="2">
                        ②&nbsp;<span class="tn">'.$data->part_no2.'</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                    </th>
                    <th class="bln" colspan="2">
                        &nbsp;&nbsp;<span class="tn">'.$data->part_weight1.'</span>&nbsp;&nbsp;&nbsp;㎏
                    </th>
                    <th>
                        작업자
                    </th>
                    <th>
                        <span class="tn">'.$uname.'</span>
                    </th>
                    <th>
                        작업일자
                    </th>
                    <th colspan="3">
                        <span class="tn">'.$year.'</span>년&nbsp;&nbsp;<span class="tn">'.$month.'</span>월&nbsp;&nbsp;<span class="tn">'.$day.'</span>일&nbsp;&nbsp;('.$wt_html.')
                    </th>
                  </tr>
                   <!-- Third row -->
                  <tr>
                    <th rowspan="2">
                        항목
                    </th>
                    <th rowspan="2">
                        항목
                    </th>
                    <th rowspan="2">
                        08:40</br>(20:40)
                    </th>
                    <th rowspan="2">
                        10:40</br>(22:40)
                    </th>
                    <th rowspan="2">
                        13:20</br>(01:20)
                    </th>
                    <th rowspan="2">
                        15:20</br>(03:40)
                    </th>
                    <th rowspan="2">
                        17:40</br>(05:40)
                    </th>
                    <th rowspan="2">
                        19:40</br>(07:40)
                    </th>
                    <th rowspan="2">
                        작 업</br>종료시
                    </th>
                    <th rowspan="2">
                        기종전환</br>(     :     )
                    </th>
                    <th rowspan="2">
                        기종전환</br>(     :     )
                    </th>
                    <th rowspan="2">
                        TOOL</br>교체시
                    </th>
                    <th rowspan="2">
                        TOOL</br>교체시
                    </th>
                    <th>
                        모델
                    </th>
                    <th>
                        <span class="tn">'.$data->model.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <tr>
                    <th>
                        생산량
                    </th>
                    <th>
                        <span class="tn">'.$data->prod_qty.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        1
                    </th>
                    <th rowspan="13" class="ver-col">
                        외관검사기준서참조</br>작업표준서참조
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t1'].'<input name="hungmok[0][t1]"></span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[0]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        양품
                    </th>
                    <th>
                        <span class="tn">'.$data->good_qty.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        2
                    </th>

                    <th>
                        <span class="tn">'.$t_html[1]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[1]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[1]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[1]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[1]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[1]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[1]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        불량품
                    </th>
                    <th>
                        <span class="tn">'.$data->prod_qty.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        3
                    </th>

                    <th>
                        <span class="tn">'.$t_html[2]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[2]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[2]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[2]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[2]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[2]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[2]['t7'].'</span>
                    </th>                    
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th colspan="4">
                        불량내용
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        4
                    </th>

                    <th>
                        <span class="tn">'.$t_html[3]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[3]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[3]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[3]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[3]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[3]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[3]['t7'].'</span>
                    </th>                    
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        외관
                    </th>
                    <th>
                        <span class="tn">'.$data->e1.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        5
                    </th>

                    <th>
                        <span class="tn">'.$t_html[4]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[4]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[4]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[4]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[4]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[4]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[4]['t7'].'</span>
                    </th>                    
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        SETTING품
                    </th>
                    <th>
                        <span class="tn">'.$data->e2.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        6
                    </th>

                    <th>
                        <span class="tn">'.$t_html[5]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[5]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[5]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[5]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[5]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[5]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[5]['t7'].'</span>
                    </th>                    
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        외경(COPY)
                    </th>
                    <th>
                        <span class="tn">'.$data->e3.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        7
                    </th>

                    <th>
                        <span class="tn">'.$t_html[6]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[6]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[6]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[6]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[6]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[6]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[6]['t7'].'</span>
                    </th>                    
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        R홈
                    </th>
                    <th>
                        <span class="tn">'.$data->e4.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        8
                    </th>

                    <th>
                        <span class="tn">'.$t_html[7]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[7]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[7]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[7]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[7]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[7]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[7]['t7'].'</span>
                    </th>                    
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        NECK홈
                    </th>
                    <th>
                        <span class="tn">'.$data->e5.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        9
                    </th>

                    <th>
                        <span class="tn">'.$t_html[8]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[8]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[8]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[8]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[8]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[8]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[8]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        홈경
                    </th>
                    <th>
                        <span class="tn">'.$data->e6.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        10
                    </th>

                    <th>
                        <span class="tn">'.$t_html[9]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[9]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[9]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[9]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[9]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[9]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[9]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        절단
                    </th>
                    <th>
                        <span class="tn">'.$data->e7.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        11
                    </th>

                    <th>
                        <span class="tn">'.$t_html[10]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[10]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[10]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[10]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[10]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[10]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[10]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        면취
                    </th>
                    <th>
                        <span class="tn">'.$data->e8.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        12
                    </th>

                    <th>
                        <span class="tn">'.$t_html[11]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[11]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[11]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[11]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[11]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[11]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[11]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        기타
                    </th>
                    <th>
                        <span class="tn">'.$data->e9.'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                  </tr>
                  <!-- Row -->
                  <tr>
                    <th>
                        13
                    </th>

                    <th>
                        <span class="tn">'.$t_html[12]['t1'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[12]['t2'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[12]['t3'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[12]['t4'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[12]['t5'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[12]['t6'].'</span>
                    </th>
                    <th>
                        <span class="tn">'.$t_html[12]['t7'].'</span>
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                    <th>
                        
                    </th>
                </thead>
                <tbody>

                </tbody>
              </table> 
            </div>

            <style>
             .ts{
                font-size:20px;

             }
             .sep{
                vertical-align: text-bottom;
                font-size: 23px;
                font-weight: 900;
             }
             .th-relative{
                position:relative;
             }
             .th-span-abs{
                background: white;
                position: absolute;
                border: 1px solid gray;
                left: -10px;
                padding: 1px;
             }
             .b-l-b{
                border-left: 2px solid black !important;
             }
             .b-r-b{
                border-right: 2px solid black !important;
             }
            </style>


            <div class="table-responsive">
              <table class="table table-bordered differentTable">
                <thead>
                     <!-- row -->
                    <tr>
                        <th colspan="3" style="min-width: 225px;">
                            <span class="ts">
                                <sub>비가동내역</sub>
                            </span>
                            <span class="sep">
                                \
                            </span>
                            <span class="ts">
                                <sup>시 간</sup>
                            </span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">08</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">09</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">10</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">11</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">12</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">13</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">14</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">15</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">16</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">17</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">18</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">19</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">20</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">21</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">22</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">23</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">24</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">01</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">02</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">03</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">04</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">05</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">06</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">07</span>
                        </th>
                        <th class="th-relative" colspan="6">
                            <span class="th-span-abs">08</span>
                        </th>
                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            원소재 투입
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2" colspan="2">
                            기종전환
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            SAMPLE 작업
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            설비고장
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th rowspan="3">
                            공</br>구</br>교</br>환
                        </th>
                        <th>
                            G/B CHUCK      
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            BITE(INSERT)         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            기 타         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th colspan="2">
                            결 품
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th rowspan="3">
                            공</br>구</br>교</br>환
                        </th>
                        <th>
                            G/B CHUCK      
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            BITE(INSERT)         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th></th>
                        <th>
                            기 타         
                        </th>
                        <th class="b-l-b">
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                                        
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            
                        </th>
                        <th class="b-r-b">
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                           
                        </th>
                        <th>
                           
                        </th>
                        <th class="b-r-b">
                           
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th>
                          
                        </th>
                        <th>
                           
                        </th>
                        <th>
                          
                        </th>
                        <th class="b-r-b">
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                          
                        </th>
                        <th>
                         
                        </th>
                        <th class="b-r-b">
                          
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>
                        <th>
                         
                        </th>

                    </tr>
                     <!-- row -->
                    <tr>
                        <th colspan="20" rowspan="3">
                        BITE(INSERT) 교환 내용
                        </th>
                        <th colspan="129" rowspan="3">
                        ※특이사항
                        </th>
                        <th colspan="1" rowspan="3" style="border: 1px solid #7b7979;">
                            생</br>산
                        </th>
                    </tr>
                    <tr>
                        <th style="white-space: nowrap;">
                            작업자
                        </th>
                        <th style="white-space: nowrap;">
                            책임자
                        </th>
                    </tr>
                    <tr>
                        <th style="height: 52px;">
                            <span class="tn">'.$worker_appr.'</span>
                        </th>
                        <th style="height: 52px;">
                            <span class="tn">'.$manager_appr.'</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
              </table> 
            </div>';
        }


		return $html;
	}
}
