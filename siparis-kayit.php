<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<nav class="navbar navbar-dark bg-dark" style="height:100px;">
<h2 style="color:white;"><b>İLKEM MATBAA</h2>
<div><a href="home.php" target="_blank"><a href="home.php" class="btn btn-primary btn-lg active" style="position:relative;right:5px;" role="button" aria-pressed="true">Çıkış</a></div>
</nav>
<div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="giris-ekrani" style=" font-size:30px;color:white;background-color:gray;width:320px;"><b>Anasayfa</a>
  <a class="list-group-item list-group-item-action" href="siparis-kayit.php"  style=" font-size:30px;color:white;background-color:gray;width:320px;">Sipariş Kayıt</a>
  <a class="list-group-item list-group-item-action" href="urunler.php"  style=" font-size:30px;color:white;background-color:gray; height:1000px;width:320px;">Ürünler</a>

</div>



<script>   

$(document).ready(function(){
	$("#cikis").click(function soto(){
			window.location.href="http://localhost/anasayfa.php"
	});
	$("#anasayfa").click(function soto(){
			window.location.href="http://localhost/giris-ekrani.php"
	});
	$("#siparis_kayit").click(function soto(){
			window.location.href="http://localhost/siparis-kayit.php"
	});
	
	$("#urunler").click(function soto(){
			window.location.href="http://localhost/urunler.php"
	});


	
});
</script>

</head>
<body>


<div style="margin-top:-1100px;margin-left:650px;font-size:34px;"><h3>SİPARİŞ KAYIT TABLOSU</h3></div>
<div class="container" style=" width:1000px;;
    height: 1020px;
    padding: 20px;
	color:black;
    background-color:rgba(226,226,226,0.6);
    position: absolute;
    top: 30%;
    left: 30%;
	border:3px ;
	"> 
<form method="POST" action="sonKontrol.php" class="form-signin">
	<label style="font-size:25px;">ÜRÜN ADET:</label><br>
	<input id="urun_adet" name="urun_adet" type="text" class="form-control"  ><br>
	<label style="font-size:25px;">ÜRÜN TÜR:</label>
	<input id="urun_tur" name="urun_tur" type="text" class="form-control" ><br>
	<label style="font-size:25px;">ÜRÜN AD:</label>
	<input id="urun_ad" name="urun_ad" type="text" class="form-control"  ><br>
	<label style="font-size:25px;">ÜRÜN FİYAT:</label>
	<input id="urun_fiyat" name="urun_fiyat" type="text" class="form-control"><br>
	<label style="font-size:25px;">ÜRÜN BİRİM MALİYET:</label>
	<input id="urun_fiyat" name="urun_birim_maliyet" type="text" class="form-control"><br>
	<label style="font-size:25px;">MÜŞTERİ AD:</label>
	<input id="musteri_ad" name="musteri_ad" type="text" class="form-control"  ><br>
	<label style="font-size:25px;">MÜŞTERİ SOYAD:</label>
	<input id="musteri_soyad" name="musteri_soyad" type="text" class="form-control"  ><br>
	<label style="font-size:25px;">ŞEHİR:</label>
	<input id="sehir" name="sehir" type="text" class="form-control"  ><br>
	<input type="submit" class="btn btn-lg btn-primary btn-block" ></div>
	 
</form>
<div>
</body>
</html>