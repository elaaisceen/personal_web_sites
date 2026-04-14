<?php 
require_once "../sistem/config.php";
require_once "../sistem/fonksiyon.php";

if (!isset($_SESSION["no"])){
	
	//Oturum açmamışsa login sayfasına yönlendir.
	header("Location:../login.php");
	
	exit;
	
}



	$kullanici_no=temizle($_GET["kullanici_no"]);

?>
<html>
 <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
 </head>

 <body>
 
	<div class="container">
	
		<div class="row">
		
				<div class="d-flex justify-content-betweEn align-items-center p-2">
				
					<span>Hoş Geldin <?php echo $_SESSION["adi"]." ".$_SESSION["soyadi"]; ?></span>
					<a href="cikis.php"><span>Çıkış Yap</span></a>
				</div>
				
				<div class="card">
				
					<div class="card-header bg-info text-white d-flex justify-content-between">
						<p class="h3">Kayıt Sil</p>
						<a href="default.php">
							<input type="button" class="btn btn-warning" value="Listeye Dön">
						</a>	
					</div>
					
					<div class="card-body">
<?php 

if ($_SESSION["rutbe"]!=7){
	?>
	<div class="alert alert-danger">Yetkisiz erişim!</div>
<?php	
	go("http://localhost/furkan/kullanici/default.php",3);
}

?>
					
					<?php 
					
						$sorgu=$pdo->prepare("Update kullanicilar SET sil=1 Where kullanici_no=?  ");
						
						$sil=$sorgu->execute([$kullanici_no]);	
						
						if ($sil){		
						
						?>
						<div class="alert alert-success"><?php echo $kullanici_no; ?> numaralı kullanıcı başarılı bir şekilde silinmiştir.</div>
					<?php	
						go ("http://localhost/furkan/kullanici/default.php", 3);
						}else {
							
						
					?>
						<div class="alert alert-danger"><?php echo $kullanici_no; ?> numaralı silinememiştir.</div>	
					<?php 
						go ("http://localhost/furkan/kullanici/default.php", 3);
						
						} 
					
					?>	
						
					</div>
				
				</div>
		
		</div>
	
	
	</div>
 
 </body>



</html>

