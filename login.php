<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style type="text/css">
	.container{
		margin-top: 100px;
	    margin-left: 474px;
	    width: 29%;
	    text-align: center;
	    background: aquamarine;
	}
</style>
<body style="background-color: #ddd;">
	<div class="container">
		<h1>TDSoftware</h1>
		<hr>
	<div class="col-md-12">
		<form action="login_process.php" method="POST">
			<div class="form-group">
			<div>
				<input type="text" name="Username" id="usernameID" placeholder="Username" class="form-control" required="">
				<input type="password" name="Password" id="passwordID" placeholder="Password" class="form-control" required="">
			</div>
			<div>
				<input id="submit" type="submit" class="btn btn-success" value="Login" name="login">
			</div>
		</div>
		</form>
	</div>		
   </div>

</body>
</html>