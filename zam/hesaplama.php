<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zam hesaplama-2</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style> 
#resim{
  background-repeat: no-repeat;
  height: 100%;
  background-position: center;
  background-size: cover;
    

    }
   #yazi{
        position: absolute;
        top: 50px;
        right:320px; 
        color: 	#black;
    }

   
  </style>



<body>
<?php
$s=$_POST['s'];
$z=$_POST['z'];
$maas=((($s)*7.5)*30);
$zam=($maas*(($z+100)/100));
$calisma=(30*7.5);
$yzam=((($s)*($z))/100);
$ysü=($s+$yzam);
$v15=$zam-(($zam*15)/100);
$v20=$zam-(($zam*20)/100);
$v27=$zam-(($zam*27)/100);
$a=($zam/2);
?>
<center><img src="arkaplan.jpg" title="Background" id="resim"></center>    
<div id="yazi"> 
<center><table width="600" border="0">
  <tr>
    <td colspan="2" align="center"><b>Zam Hesaplama</b></td>
  </tr>
  <br>
  <tr>
    <td width="250"><br><br>Saatlik Ücreti:<?php echo $s; ?>  TL</td>
  </tr>
  <br>
  <tr>
    <td>Zam Değeri:<?php echo $z; ?></td>
  </tr>
  <tr>
    <td><hr>Saatlik Ücretiniz :<?php echo $s;?> TL <br>Çalışma Saati :<?php echo $calisma;?>  Saat</td>
  </tr>
  <tr>
    <td>Brüt Ücretiniz :<?php echo $maas;?> TL <br><br><hr>Yüzde Zam :<?php echo $yzam;?>  TL</td>
  </tr>
  <tr>
    <td>Yeni Saatlik Ücretiniz :<?php echo $ysü;?> TL</td>
  </tr>
  <tr>
    <td><hr>Toplam Zamlı Maaşınız:<b><?php echo $zam; ?> TL</b</td>

  </tr>
  
  <tr>
    <td><hr>Toplam Net Maaş (Vergi Oranı:15%) :<?php echo $v15; ?> TL</td>
  </tr>
  <tr>
    <td>Toplam Net Maaş (Vergi Oranı:20%) :<?php echo $v20; ?> TL</td>
  </tr>  <tr>
    <td>Toplam Net Maaş (Vergi Oranı:27%) :<?php echo $v27; ?> TL</td>
  </tr>
  <tr>
    <td>Avans:<?php echo $a; ?> TL</td>
  </tr>
  
</table>
<br><br>
<a href="javascript:javascript:history.go(-1)">Geri dön</a>
<br />
</center></div>
</body>
</html>