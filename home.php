<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<nav class="navbar navbar-dark bg-dark" style="height:100px;"></nav>
</head>
<body background="indir.jpg" >
<div class="container">
	
<form method="POST" action="logout.php" class="form-signin" style="position:relative;left:470px;top:200px;;">
	<h2>Giriş Ekranı</h2>
	<label>Kullanıcı Adı:</label>
	<input id="eposta" name="eposta" type="email" class="form-control" style="width:250px;"></br>
	<label>Şifre:</label>
	<input id="sifre" name="sifre" type="password" class="form-control" style="width:250px;"></br>
	<input type="submit" class="btn btn-lg btn-primary btn-block" style="width:250px;">
</form>
</div>
</body>
</html>