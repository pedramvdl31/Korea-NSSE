<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <!-- <link href="/assets/js/d3/nv.d3.css" rel="stylesheet" type="text/css"> -->
        <link href="/packages/c3-0.4.11/c3.css" rel="stylesheet" type="text/css">


        <script src="/assets/plugins/jQuery/jquery-2.2.3.min.js" charset="utf-8"></script>


        <script src="/assets/js/d3/d3.min.js" charset="utf-8"></script>
        <script src="/assets/js/d3/nv.d3.js"></script>
        <script src="/packages/c3-0.4.11/c3.min.js"></script>

        <script src="/assets/js/knsse/SPoutput.js"></script>


        <script type="text/javascript">
          window.chartsdata = '{!!$data!!}';
        </script>
    </head>
    <body>


    <section>
        <style type="text/css">
            #picturediv{
                width: 610px;
                height: 500px;
                position: relative;
                float: left;
                overflow: hidden;
            }
        </style>
        <div id="picturediv">
            <style type="text/css">
                html {
                    font-size: 10px;
                -webkit-tap-highlight-color: rgba(0,0,0,0);
                }
                html {
                font-family: sans-serif;
                }
                .grid .tick {
                stroke: lightgrey;
                opacity: 0.7;
                shape-rendering: crispEdges;
                }
                .grid path {
                stroke-width: 0;
                }
                .axis path {
                fill: none;
                stroke: #bbb;
                shape-rendering: crispEdges;
                }
                     .axis path,
                .axis line {
                fill: none;
                stroke: #000;
                shape-rendering: crispEdges;
                }
                path {
                  stroke: steelblue;
                  stroke-width: 2;
                  fill: none !important; 
                }
                g{
                background: transparent !important; 
                background-color: transparent !important; 
                }
                .x.axis path {
                display: none;
                }

                .lineCPI { 
                fill: none;
                stroke: #858abe;
                stroke-width: 2px;
                }

                .lineRPIJ {
                fill: none;
                stroke: #D8565F;
                stroke-width: 2px;
                }

                .grid .tick {
                  stroke: lightgrey;
                  stroke-opacity: 0.7;
                  stroke-dasharray: ("3, 3");  
                  shape-rendering: crispEdges;
                }
                .grid path {
                        stroke-width: 0;
                }
                .axis text {
                fill: #555;
                }

                .axis line {  
                stroke: #e7e7e7;
                shape-rendering: crispEdges;
                }

                .axis .axis-label {
                font-size: 14px;
                }

                .line {
                fill: none;
                stroke-width: 1.5px;
                }

                .dot {
                /* consider the stroke-with the mouse detect radius? */
                stroke: transparent;
                stroke-width: 10px;  
                cursor: pointer;
                }

                .dot:hover {
                stroke: rgba(68, 127, 255, 0.3);
                }
                .c3-chart-lines .c3-target-data2 {
                  stroke-dasharray: 3, 3
                }
                .cs{
                    width: 590px;
                    float: left;
                    top: -8px;
                    left: -71px;
                }
                }
                .textt2{
                position: relative;
                float: left;
                width: 70%;
                }
                #containermy{
                height: 300px;
                width: 100%;
                position: relative;
                }
                .relat{
                position: relative !important;
                }
                #chartwrapper{
                    position: absolute;
                    left: 70px;
                }
                                .c3 line {
                    fill: none;
                    stroke: gray !important;
                }
                path.domain{
                    stroke: gray !important;
                    stroke-width: 1px !important;
                }
                .mytable tr:first-child td:nth-child(1), .mytable tr:first-child td:nth-child(2) {
                border:1px transparent;    
                }
                .mytable th,.frth{
                    width: 100px !important;
                    max-width: 100px !important;
                    min-width: 100px !important;
                  font-weight: 900;
                }
                .mytable th, td {
                  font-size: 15px;
                  border: 1px solid gray;
                  border-collapse: collapse;
                  padding: 5px;
                  text-align: center;
                }
                .mytable th, td{
                    min-width: 37.015624px !important;
                }
                #lhr{
                  margin: 0 !important;
                  padding: 0 !important;
                  border: solid 1px black !important;
                }
                #lhr2{
                  margin: 0 !important;
                  padding: 0 !important;
                  border: dashed 1px black !important;
                }
                table {
                    background-color: transparent;
                }
                table {
                    border-spacing: 0;
                    border-collapse: collapse;
                }
                .mytable{
                    width: 481.81px !important;
                }
            </style>
            <div id="chartwrapper">
                <div id="containermy" style="">
                    <div id="chart"></div>
                    <div class="cs relat" id="table">
                      <table class="mytable">
                       <tr>
                        <th class="t2td" style="border:none !important"></th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습고차 학습학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                        <th>고차원 학습</th>
                       </tr>
                       <tr>
                        <td class="frth"><span class="hrt2"><hr id="lhr" align="left" width="100%"></span><span class="textt2">&nbsp;2014년 전체</span></td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                       </tr>
                       <tr>
                        <td class="frth"><span class="hrt2"><hr id="lhr2" align="left" width="100%"></span><span class="textt2">&nbsp;2014년 전체</span></td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                        <td>45.3</td>
                       </tr>
                      </table>
                    </div>
                </div>
            </div>

        </div>  
    </section>

      
     
    </body>
</html>