
@extends('Bootstrap.extensao')
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>						
<body> 

<meta name="csrf-token" content="{{ csrf_token() }}">
					
<!-- <body>
@extends('Bootstrap.extensao')

<div class="card">
    <div class="body">
        <form action="cliente/save" method="POST">
        @csrf 
            <div class="row clearfix">
                <div class="body" style="width: 100%">
                    <ul class="list-group">
                        <center>
                            <li class="list-group-item list-group-item-info">
                                <h4>Cadastro de Cliente</h4>
                            </li>
                        </center>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="nome" name='nome' type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="whatsapp" name='whatsapp' type="text" class="validate">
                        <label for="whatsapp">Whatsapp</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="facebook" name='facebook' type="text" class="validate">
                        <label for="facebook">Facebook</label>
                    </div>
                </div> 

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="email" name='email' type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>   

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <div class="input-field col s12">
                        <input id="instagram" name= 'instagram'type="text" class="validate">
                        <label for="instagram">Instagram</label>
                    </div>
                </div>   
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>    
                <button style="width: 150px" type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                <button style="width: 150px" type="button" class="btn btn-danger waves-effect">Excluir</button>
            </center>
            </div>
        </form>
    </div>
</div>
<center>    
    <button style="width: 150px" type="submit" class="btn btn-success waves-effect">Cadastrar</button>
    <button style="width: 150px" type="button" class="btn btn-danger waves-effect">Excluir</button>
</center>
</body> -->


<body>
	<div id="results">Your captured image will appear here...</div>
	
	<h1>WebcamJS Test Page</h1>
	<h3>Demonstrates simple 320x240 capture &amp; display</h3>
	
	<div id="my_camera"></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" href="../../public/js/webcamjs/webcam.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
        if (typeof define === 'function' && define.amd) {
            define( function() { return Webcam; } );
        } 
        else if (typeof module === 'object' && module.exports) {
            module.exports = Webcam;
        } 
        else {
            window.Webcam = Webcam;
        }
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	
	<!-- A button for taking snaps -->
	<form>
		<input type=button value="Take Snapshot" onClick="take_snapshot()">
	</form>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<h2>Here is your image:</h2>' + 
					'<img src="'+data_uri+'"/>';
			} );
		}
	</script>
	
</body>



</html>