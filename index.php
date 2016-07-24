<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BMI udregner</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="page-header">BMI udregner</h1>
                <ol class="breadcrumb" style="width:300px;">
                <li class="active">
                <i class="fa fa-dashboard"></i> Din BMI er: 
        		<?php
        			if(isset($_POST['submit'])) {	 
	            			$hoejde = $_POST['hoejde'];
	            			$vaegt = $_POST['vaegt'];
	            			$bmi = (($vaegt)/($hoejde*$hoejde))*10000;
	            			echo $english_format_number = number_format($bmi,2);
	            								
	            			if($bmi < 18.5){
	            			    echo ". " . "Du er undervægtig";
	            			}
	            			if($bmi > 18.5 && $bmi < 24.9){
	            				echo ". " . "Du er normalvægtig";
	            			}
	            			if($bmi > 24.9){
	            				echo ". " . "Du er overvægtig";
	            			}
        			}
        		?>	
                </li>
                </ol>
            </div>
        </div>
			
		<!-- PHP BMI udregner -->
            
        <div class="row">
            <div class="col-lg-12">
			    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    				<div class="form-group">
                        <input type="number" class="form-control" name="hoejde" placeholder="Højde i cm" style="width:300px;" required>
                    </div>
    				<div class="form-group">
                        <input type="number" class="form-control" name="vaegt" placeholder="Vægt i kg" style="width:300px;" required>
                    </div>
    				<button type="submit" name="submit" class="btn btn-primary" style="width:300px;">Udregn din BMI</button>
				</form>
            </div>
        </div>
</body>
</html>
