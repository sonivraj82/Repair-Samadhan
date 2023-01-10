<?php session_start();
	
	if(isset($_POST['Submit'])){

		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
			
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			$msg="<span style='color:red; position:absolute; top:220px; left:500px'>Invalid Login Details</span>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<form method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3 style="text-align: center;">Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top" style="font-size: 30px;">Username : </td>
      <td><input class="form-control me-2" name="Username" type="text"></td>
    </tr>
    <tr>
      <td align="right" style="font-size: 30px;">Password : </td>
      <td><input name="Password" type="password" class="form-control me-2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><button class="btn btn-outline-success" name="Submit" type="submit">Login</button></td>
    </tr>
  </table>
</form>
</body>
</html>