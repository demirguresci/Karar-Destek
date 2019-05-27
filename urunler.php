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
  <a class="list-group-item list-group-item-action" href="giris-ekrani" style=" font-size:25px;color:white;background-color:gray;width:320px;"><b>Anasayfa</a>
  <a class="list-group-item list-group-item-action" href="siparis-kayit.php"  style=" font-size:25px;color:white;background-color:gray;width:320px;">Sipariş Kayıt</a>
  <a class="list-group-item list-group-item-action" href="urunler.php"  style="font-size:25px;color:white;background-color:gray; height:2000px;width:320px;">Ürünler</a>

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
<link rel="stylesheet" href="stylee.css" type="text/css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_ad', 'toplam_kar','urun_fiyat','urun_maliyet'],
          <?php 
			$query = "SELECT sum((urunler.urun_siparis_adet*urunler.urun_fiyat)-(urunler.urun_siparis_adet*urunler.urun_maliyet))as toplam_kar,sum(urunler.urun_siparis_adet*urunler.urun_fiyat) as toplam_kazanc, 
			sum(urunler.urun_siparis_adet*urunler.urun_maliyet) as toplam_maliyet,urunler.urun_ad
			FROM urunler 
			WHERE urunler.urun_ad= 'yagli kagit'
			";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_ad']."',".$row['toplam_kar'].",".$row['toplam_kazanc'].",".$row['toplam_maliyet']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'YAĞLI KAĞIT',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material1'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	<link rel="stylesheet" href="stylee.css" type="text/css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_ad', 'toplam_kar','urun_fiyat','urun_maliyet'],
          <?php 
			$query = "SELECT sum((urunler.urun_siparis_adet*urunler.urun_fiyat)-(urunler.urun_siparis_adet*urunler.urun_maliyet))as toplam_kar,sum(urunler.urun_siparis_adet*urunler.urun_fiyat) as toplam_kazanc, 
			sum(urunler.urun_siparis_adet*urunler.urun_maliyet) as toplam_maliyet,urunler.urun_ad
			FROM urunler 
			WHERE urunler.urun_ad= 'aydınger kagit'
			";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_ad']."',".$row['toplam_kar'].",".$row['toplam_kazanc'].",".$row['toplam_maliyet']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'AYDINGER KAĞIT',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	<link rel="stylesheet" href="stylee.css" type="text/css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_ad', 'toplam_kar','urun_fiyat','urun_maliyet'],
          <?php 
			$query = "SELECT sum((urunler.urun_siparis_adet*urunler.urun_fiyat)-(urunler.urun_siparis_adet*urunler.urun_maliyet))as toplam_kar,sum(urunler.urun_siparis_adet*urunler.urun_fiyat) as toplam_kazanc, 
			sum(urunler.urun_siparis_adet*urunler.urun_maliyet) as toplam_maliyet,urunler.urun_ad
			FROM urunler 
			WHERE urunler.urun_ad= 'sari saman'
			";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_ad']."',".$row['toplam_kar'].",".$row['toplam_kazanc'].",".$row['toplam_maliyet']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: 'SARI SAMAN',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material3'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	<link rel="stylesheet" href="stylee.css" type="text/css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'urun_ad', 'toplam_kar','urun_fiyat','urun_maliyet'],
          <?php 
			$query = "SELECT sum((urunler.urun_siparis_adet*urunler.urun_fiyat)-(urunler.urun_siparis_adet*urunler.urun_maliyet))as toplam_kar,sum(urunler.urun_siparis_adet*urunler.urun_fiyat) as toplam_kazanc, 
			sum(urunler.urun_siparis_adet*urunler.urun_maliyet) as toplam_maliyet,urunler.urun_ad
			FROM urunler 
			WHERE urunler.urun_ad= 'tuale kagit'
			";
          
			$exec = mysqli_query($baglan,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['urun_ad']."',".$row['toplam_kar'].",".$row['toplam_kazanc'].",".$row['toplam_maliyet']."],";
			 }
			 ?> 
         
        ]);

        var options = {
          chart: {
            title: ' TUALE KAĞIT',
        
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material4'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	</head>
<body >
<div id='grafik'>
        
        <div id="columnchart_material1" style="width: 400px; height: 400px; margin-left:1020px; margin-top:-2000px;border:3px;"></div>
		<div id="columnchart_material2" style="width: 400px; height: 400px; margin-left:1020px; margin-top:10px;border:3px;"></div>
		<div id="columnchart_material3" style="width: 400px; height: 400px; margin-left:1020px; margin-top:10px;border:3px;"></div>
		<div id="columnchart_material4" style="width: 400px; height: 400px; margin-left:1020px; margin-top:10px;border:3px;"></div>
    </div>

	




<table border="3" align="center" style="width:250px;height:250px;margin-left:350px;margin-top:150px;border-radius:3px;" >
<tr>
<div style="margin-left:350px;margin-top:-1500px;"><img src="yagli.jpg" style="border-radius:20px;width:150px;height:150px;"/></div>
<div style="margin-left:350px;margin-top:250px;"><img src="aydınger.jpeg" style="border-radius:20px;width:150px;height:150px;"/></div>
<div style="margin-left:350px;margin-top:300px;"><img src="saman.jpg" style="border-radius:20px;width:150px;height:150px;"/></div>
<div style="margin-left:350px;margin-top:275px;"><img src="tuale.png" style="border-radius:20px;width:150px;height:150px;"/></div>
</table>

 
</table>
<table border="3" align="center" style="width:255px;height:100px;margin-left:600px;margin-top:-970px;border-radius:3px;border: solid #908f8f;" >
<tr>

<td align="center" style="font-size:25px;font-family:Arial;color:#908f8f;"> SARI SAMAN TOPLAM SAYISI</td>

 
</tr>
<?php
require("sonConn.php");
if ($baglan){
$sonuc=mysqli_query($baglan,"select count(urunler.urun_id) as toplam_urun from urunler where urunler.urun_ad='sari saman'");
mysqli_set_charset($baglan, "utf8");
 while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr align="center" style="font-size:35px;color: #908f8f;">';
echo '<td>'.$satir["toplam_urun"].'</td>';

}
}

?>
 
</table>
<table border="3" align="center" style="width:255px;height:100px;margin-left:600px;margin-top:-575px;border-radius:3px;border: solid #908f8f;" >
<tr>

<td align="center" style="font-size:25px;font-family:Arial;color:#908f8f;">AYDINGER TOPLAM SAYISI</td>

 
</tr>
<?php
require("sonConn.php");
if ($baglan){
$sonuc=mysqli_query($baglan,"select count(urunler.urun_id) as toplam_urun from urunler where urunler.urun_ad='aydınger kagit'");
mysqli_set_charset($baglan, "utf8");
 while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr align="center" style="font-size:35px;color: #908f8f;">';
echo '<td>'.$satir["toplam_urun"].'</td>';

}
}

?>
 
</table>
<table border="3" align="center" style="width:255px;height:100px;margin-left:600px;margin-top:735px;border-radius:3px;border: solid #908f8f;" >
<tr>

<td align="center" style="font-size:25px;font-family:Arial;color:#908f8f;">TUALE TOPLAM SAYISI</td>

 
</tr>
<?php
require("sonConn.php");
if ($baglan){
$sonuc=mysqli_query($baglan,"select count(urunler.urun_id) as toplam_urun from urunler where urunler.urun_ad='tuale kagit'");
mysqli_set_charset($baglan, "utf8");
 while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr align="center" style="font-size:35px;color: #908f8f;">';
echo '<td>'.$satir["toplam_urun"].'</td>';

}
}

?>
 
</table>
<table border="3" align="center" style="width:255px;height:100px;margin-left:600px;margin-top:-1405px;border-radius:3px;border: solid #908f8f;" >
<tr>

<td align="center" style="font-size:25px;font-family:Arial;color:#908f8f;">YAĞLI  TOPLAM  SAYISI</td>

 
</tr>
<?php
require("sonConn.php");
if ($baglan){
$sonuc=mysqli_query($baglan,"select count(urunler.urun_id) as toplam_urun from urunler where urunler.urun_ad='yagli kagit'");
mysqli_set_charset($baglan, "utf8");
 while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr align="center" style="font-size:35px;color: #908f8f;">';
echo '<td>'.$satir["toplam_urun"].'</td>';

}
}

?>
 
</table>

</body>
</html>