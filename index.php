<?php
require_once 'function.php';
$token=tokenemail();
$_SESSION['tokenone']=$token;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>upload</title>
	<link type="text/css" href="css/bootstrap-rtl.min.css" rel="stylesheet">
	<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
	<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>

<body >
<section style="margin-top:50px; margin-bottom:50px;" >
	            <div class="container">
				<div class="card-header" >
				<span style="float:right; font-size:larger; color: red; ">Email</span>
				<?php

                   if (isset($_SESSION['email'])){

	               echo $_SESSION['email']; 

                   unset($_SESSION['email']);

	                   }
                ?>
				<div class="card-body" style="direction: rtl;margin-top:50px;">
                
					<form    method="POST"   action="exe.php"    autocompelet="Off">
					

					    <div class="input-group form-group">
						<input type="email" class="form-control  col-lg-12 col-sm-12 col-md-12 col-xs-12"  placeholder="TO" name="addone" id="addone" autocompelet="Off">
						</div>


						<div class="input-group form-group">
						<input type="email" class="form-control col-lg-12 col-sm-12 col-md-12 col-xs-12"  placeholder="FROM" name="addtwo" id="addtwo" autocompelet="Off">
						</div>


						<div class="">
						<textarea name="text" id="text" class="form-control col-lg-12 col-sm-12 col-md-12 col-xs-12"  placeholder="TEXT"  autocompelet="Off" style="width:auto;  height:auto;"></textarea>
						<script>
                        CKEDITOR.replace('text');
                        </script>
						</div>
		



						<div class="input-group form-group">		
						<input type="hidden" class="form-control"   name="token" id="token" value="<?php echo  $token; ?>"/>
						</div>
						
						

						<div class="">
						<input type="submit" class="btn btn-success col-lg-3 col-sm-3 col-md-3 col-xs-3" name="send" id="send" value="Send" style="  width:100%; margin-top:10px;   font-size:17px;"/>
						<input type="submit" class="btn btn-success col-lg-3 col-sm-3 col-md-3 col-xs-3" name="Cancel" id="Cancel" value="Cancel" style="  width:100%; margin-top:10px;  font-size:17px;"/>
					    </div>
                        

					</form>

				</div>
	            </div>
                </div>

</section>
	
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/build-config.js"></script>
	<script src="js/ckeditor.js"></script>
	<script src="js/config.js"></script>
	<script src="js/styles.js"></script>
</body>
</html>


