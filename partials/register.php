<!DOCTYPE html>

<?php
$db = new PDO ('mysql:host=localhost;dbname=etnacamp', 'root', 'root');

if(isset($_POST['formregister']))
  {
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $password = hash('sha256', $_POST['password']);
    $password2 = hash('sha256', $_POST['password2']);
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
 
      if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['password']) && !empty($_POST['password2'])) 
        {
    
        if ($mail == $mail2)
          {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL))
              {
                $requser = $db->prepare("SELECT * FROM Utilisateurs WHERE Mail = ?");
                $requser->execute(array($mail));
                $nb = $requser->rowCount();
                  if ($nb == 0)
                  {
                    if ($password == $password2)
                      {
                        $insertuser = $db->prepare("INSERT INTO Utilisateurs (Nom, Prenom, Mail, Password) VALUES (?, ?, ?, ?)");
                        $insertuser->execute(array($nom, $prenom, $mail, $password));
                        $msg = 'Your account has been had !';
                        header("Location: login.php");
                      }
                    else 
                      {
                        $msg = 'Not the same password !';
                      }
                    }
                  else
                  {
                    $msg = 'This mail address is not available';
                  }
              }
            else
            {
              $msg = 'fefew';
            }
          }
        else 
        {
          $msg = 'It seems that the mails address are not the same';
        }
      }
      else
      {
        $msg = "You need to complete all fields";
      }
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Datacamp</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<?php include_once '../partials/sidebar2.php'; ?>
	<div class="container-fluid" id="bodycontent">
		<div class="row">
			<div class="col-xs-12">
				<?php include_once '../partials/upbar.php';?>
			</div>	
			<div class="col-xs-12">
				<div id="main">
					<center>
						<form action="" method="POST">
							<table style="align-content: center;">
								<tbody id="styleinput">
								<tr>
									<td><input type="text" placeholder="First Name" name="nom" style="width:200px;"></td>
								</tr> 
								<tr>
									<td><input type="text" placeholder="Last Name" name="prenom" style="width:200px;"></td>
								</tr>
								<tr>
									<td><input type="email" placeholder="Mail Address" name="mail" style="width:200px;"></td>
								</tr>
								<tr>
									<td><input type="email" placeholder="Confirmation Mail Address" name="mail2" style="width:200px;"></td>
								</tr>
								<tr>
									<td><input type="password" placeholder="Password" name="password" style="width:200px;"></td>
								</tr>
								<tr>
									<td><input type="password" placeholder="Confirmation Password" name="password2" style="width:200px;"></td>
								</tr><br><br>
								<tr>
									<td>
										<center>
										<br><br>
											<input type="Submit" name="formregister" value="S'inscrire">
										</center>
									</td>
								</tr>
								</tbody>
							</table>
						</form>
					</center>
					<?php
        if(isset($msg))
          {
            echo "$msg";
          }
      ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>