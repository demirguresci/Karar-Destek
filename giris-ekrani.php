<?php
$baglan=mysqli_connect("localhost","root","","busra4");
mysqli_query($baglan,"SET NAMES UTF8");
?>

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
  <a class="list-group-item list-group-item-action" href="giris-ekrani" style="height:75px; font-size:25px;color:white;background-color:gray;width:250px;"><b>Anasayfa</a>
  <a class="list-group-item list-group-item-action" href="siparis-kayit.php"  style="height:75px; font-size:25px;color:white;background-color:gray;width:250px;">Sipariş Kayıt</a>
  <a class="list-group-item list-group-item-action" href="urunler.php"  style="height:75px; font-size:25px;color:white;background-color:gray; height:1428px;width:250px;">Ürünler</a>

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
 <meta charset="utf-8">
	 <link rel="stylesheet" href="stylee.css" type="text/css">
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'ad_soyad', 'urun_adet_toplam','urun_tur'],
          <?php 
			$query = "SELECT SUM(urunler.urun_siparis_adet) AS urun_adet_toplam,concat(musteri.musteri_ad,musteri.musteri_soyad)as ad_soyad,urunler.urun_tur FROM urunler,musteri,ur_mus WHERE urunler.urun_id=ur_mus.urun_id AND musteri.musteri_id=ur_mus.musteri_id GROUP BY ad_soyad order by urunler.urun_tur";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['ad_soyad']."','".$row['urun_adet_toplam']."','".$row['urun_tur']."'],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'ÜRÜN TÜRLERİNE GÖRE TOPLAM KAZANÇ',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material5'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_tur', 'urun_siparis_adet'],
          <?php 
			$query = "SELECT sum(urunler.urun_siparis_adet) as urunler, urunler.urun_tur,concat(musteri.musteri_ad,musteri.musteri_soyad)as ad_soyad
			FROM urunler , musteri, ur_mus
			WHERE urunler.urun_id=ur_mus.urun_id AND musteri.musteri_id=ur_mus.musteri_id
			GROUP BY urunler.urun_tur";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_tur']."',".$row['urunler']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'TÜRLERİN TOPLAM ÜRÜN SAYILARI',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_tur', 'urun_kar_toplam'],
          <?php 
			$query = "SELECT SUM((urunler.urun_siparis_adet*urunler.urun_fiyat)-(urunler.urun_siparis_adet*urunler.urun_maliyet)) AS urun_kar_toplam,urunler.urun_tur
      FROM urunler
	  GROUP BY urunler.urun_tur";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_tur']."',".$row['urun_kar_toplam']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'ÜRÜN TÜRLERİNE GÖRE TOPLAM KAR',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material3'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_tur', 'urun_maliyet'],
          <?php 
			$query = "SELECT sum(urunler.urun_siparis_adet*urunler.urun_maliyet) as toplam_maliyet, urunler.urun_tur
			FROM urunler 
			GROUP BY urunler.urun_tur";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_tur']."',".$row['toplam_maliyet']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'ÜRÜN TÜRLERİNE GÖRE TOPLAM MALİYET',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_tur', 'urun_fiyat'],
          <?php 
			$query = "SELECT sum(urunler.urun_siparis_adet*urunler.urun_fiyat) as toplam_kazanc, urunler.urun_tur
			FROM urunler 
			GROUP BY urunler.urun_tur";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_tur']."',".$row['toplam_kazanc']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'ÜRÜN TÜRLERİNE GÖRE TOPLAM KAZANÇ',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material4'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

</head>
<body >


<table border="3" align="center" style="width:450px;height:150px;margin-left:260px;margin-top:-1500px;border-radius:3px;border: solid #908f8f;" >
<tr>

<td align="center" style="font-size:20px;font-family:Arial;color:#908f8f;">TOPLAM SİPARİŞ ADEDİ</td>

 
</tr>
<?php
require("sonConn.php");
if ($baglan){
$sonuc=mysqli_query($baglan,"select count(urunler.urun_siparis_adet) as toplam from urunler");
mysqli_set_charset($baglan, "utf8");
 while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr align="center" style="font-size:35px;color: #908f8f;">';
echo '<td>'.$satir["toplam"].'</td>';

}
}

?>
 
</table>
<table border="3" align="center" style="width:450px;height:150px;margin-left:900px;margin-top:-150px;border-radius:3px;border: solid #908f8f;" >
<tr>

<td align="center" style="font-size:20px;font-family:Arial;color:#908f8f;">TOPLAM MÜŞTERİ SAYISI</td>

 
</tr>
<?php
require("sonConn.php");
if ($baglan){
$sonuc=mysqli_query($baglan,"select count(musteri.musteri_id) as toplam_mus from musteri");
mysqli_set_charset($baglan, "utf8");
 while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr align="center" style="font-size:35px;color: #908f8f;">';
echo '<td>'.$satir["toplam_mus"].'</td>';

}
}

?>
 
</table>



<div id='grafik'>
         <div id="columnchart_material5" style="width: 1240px; height: 400px; margin-left:280px; margin-top:80px;border:3px;"></div>
        <div id="columnchart_material2" style="width: 550px; height: 400px; margin-left:280px; margin-top:60px;border:3px;"></div>
		<div id="columnchart_material3" style="width: 550px; height: 400px; margin-left:280px; margin-top:10px;border:3px; "></div>
		<div id="columnchart_material" style="width: 550px; height: 400px; margin-left:910px; margin-top:-400px;border:3px;"></div>
		<div id="columnchart_material4" style="width: 550px; height: 400px; margin-left:910px; margin-top:-805px;border:3px;"></div>
    </div>
</body>
</html>