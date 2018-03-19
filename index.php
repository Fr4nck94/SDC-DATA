<?php 
session_start();
	if (isset($_SESSION['ID']))
	{
	
	}
	else 
		header("Location: partials/login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datacamp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php include_once 'partials/sidebar.php'; ?>
	<div class="container-fluid" id="bodycontent">
		<div class="row">
			<div class="col-xs-12">
				<?php include_once 'partials/upbar.php';?>
			</div>	
			<div class="col-xs-12">
				<div id="main">
					JE SUIS DANS LA PAGE INDEX
				</div>
			</div>
		</div>
	</div>
</body>
</html>