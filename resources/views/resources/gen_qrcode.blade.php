@extends($layout)
@section('stylesheets')
@stop
@section('scripts')

<!-- <script type="text/javascript" src="/packages/js_qr_reader/jquery.webcamqrcode.js"></script> -->


<script type="text/javascript" src="/packages/qrdecoder/qcode-decoder.min.js"></script>
<script type="text/javascript" src="/packages/webcamjs/webcam.js"></script>
<script type="text/javascript" src="/packages/qr_generator/qrcode.js"></script>
<script type="text/javascript" src="/assets/js/qrcode_index.js"></script>


@stop
@section('content')
<style type="text/css">
  .wrapper {    
    margin-bottom: 20px;
    background: transparent !important;
  }

  .form-signin {
    max-width: 420px;
    padding: 30px 38px 66px;
    margin: 0 auto;
    background-color: #eee;
    border: 3px dotted rgba(0,0,0,0.1);  
    }

  .form-signin-heading {
    text-align:center;
    margin-bottom: 30px;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
  }

  input[type="text"] {
    margin-bottom: 0px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .colorgraph {
    height: 7px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }

    /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {
		.wrapper {    
			margin-top: 10px;
		}
    	.my-vid{
    		width: 100% !important;
    	}
    }

    /* Custom, iPhone Retina */ 
    @media only screen and (max-width : 320px) {
		.wrapper {    
			margin-top: 10px;
		}
    	.my-vid{
    		width: 100% !important;
    	}    
    }
</style>
  <div class="wrapper">
    <div class="col-md-6 col-sm-12 col-xs-12 secform">
      <fieldset class="form-group">
        <label for="pnum">Process number</label>
        <input type="text" class="form-control ifs" id="pnum" placeholder="Process number">
        <small class="text-muted">Process number information...</small>
      </fieldset>
      <fieldset class="form-group">
        <label for="empname">Employee Username</label>
        <input type="text" readonly class="form-control" id="empname" placeholder="Employee Username">
      </fieldset>
      <fieldset class="form-group">
        <label for="empname">Machine Id</label>
        <input type="text" class="form-control ifs" id="machid" placeholder="Employee Username">
      </fieldset>
      <fieldset class="form-group">
        <label for="empname">Current Date/Time</label>
        <input type="text" readonly class="form-control" id="cdate" placeholder="Employee Username">
      </fieldset>
      <fieldset class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control ifs" id="comment" rows="3"></textarea>
      </fieldset>
      <button class="btn btn-primary pull-right" id="print-qr">Print</button>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-12 secform">
      <fieldset class="form-group">
        <label for="exampleInputEmail1">Qr Code</label>
        <div class="well well-lg">
         <center>
           <div id="qrcode"></div>
         </center>
        </div>
      </fieldset>
    </div>
  </div>
@stop