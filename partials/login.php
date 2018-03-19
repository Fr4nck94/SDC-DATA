<?php
session_start();

$bd = new PDO('mysql:host=localhost;dbname=etnacamp', 'root', 'root');

if (isset($_POST['Connection']))
{
	$log_mail = htmlspecialchars($_POST['email']);
	$log_passwd = hash('sha256', $_POST['passwd']);
	$requser = $bd->prepare("SELECT * FROM Utilisateurs WHERE Mail = ? AND Password = ?");
	$requser->execute(array($log_mail, $log_passwd));
	$count = $requser->rowCount();
	if($count == 1)
	{
		$userinfo = $requser->fetch();
		$_SESSION['ID'] = $userinfo['ID'];
		$_SESSION['Mail'] = $userinfo['Mail'];
		header("Location: ../index.php?ID=".$_SESSION['ID']);
	}
	else
	{
		echo "Verifiez vos informations";
	}
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datacamp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php include_once 'sidebar2.php'; ?>
	<div class="container-fluid" id="bodycontent">
		<div class="row">
			<div class="col-xs-12">
				<?php include_once 'upbar.php';?>
			</div>	
			<div class="col-xs-12">
				<div id="main">
					<table>
						<div align="center">
							<form method="POST">
								<input type="email" name="email" placeholder="Your email" required><br>
								<br>
								<input type="Password" name="passwd" placeholder="Password" required><br>
								<br>
								<input type="Submit" value="Sign in" name="Connection">
							</form>
							<form action="register.php"><br>
								<input type="Submit" value="Register">
							</form>
						</div>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>