<?php 
require_once "../sistem/config.php";

if (!isset($_SESSION["no"])){
	
	//Oturum açmamışsa login sayfasına yönlendir.
	header("Location:../login.php");
	
	
	
	exit;
	
}

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
					<a href="cikis.php"><span>Çıkış Yap</span></A>
				</div>
				
				<div class="card">
				
					<div class="card-header bg-info text-white d-flex justify-content-between">
						<p class="h3">Kullanıcıların Listesi</p>
						<a href="yenikayit.php">
							<input type="button" class="btn btn-warning" value="Yeni Kullanıcı Ekle">
						</a>	
					</div>
					
					<?php 
					
						try{
							
							$sql="Select 
										kullanici_no, 
										kullanici_adi,
										kullanici_soyadi,
										kullanici_eposta,
										kullanici_cinsiyet,
										kayit_tarih
									FROM kullanicilar where sil=2	";
									
							$kullanicilar=$pdo->query($sql);		
						
							
						}catch(PDOException $error){
							
							echo "<div class='alert alert-danger'> Veri Tabanı Hatası:".$error->getMesage()."</div>";
						}
					
					?>
					
					<div class="card-body">
					
						<table class="table border table-striped table-hover">
						
							<tr>
								<th>Kullanici No</th>
								<th>Adı</th>
								<th>Soyadı</th>
								<th>E-posta</th>
								<th>Cinsiyet</th>
								<th>Kayıt Tarihi</th>
								<th>İşlemler</th>
							</tr>
							<?php foreach($kullanicilar as $kSatir): ?>
							<tr>
								<td><?php echo $kSatir["kullanici_no"]; ?></td>
								<td><?php echo $kSatir["kullanici_adi"]; ?></td>
								<td><?php echo $kSatir["kullanici_soyadi"]; ?></td>
								<td><?php echo $kSatir["kullanici_eposta"]; ?></td>
								<td>
									<?php  if ($kSatir["kullanici_cinsiyet"]==1){
										echo "Kadın";
									}else {
										
										echo "Erkek";
									}?>
									
								</td>
								<td><?php echo date("d-m-Y", strtotime($kSatir["kayit_tarih"])); ?></td>
								<td>
								   <a href="sil.php?&kullanici_no=<?php echo $kSatir["kullanici_no"]; ?>"
									onclick="return confirm('<?php echo $kSatir["kullanici_no"]; ?> 
									nolu kullanıcıyı silmek istediğiniz emin misiniz?')">
									<button type="button" class="btn btn-danger" ><i class="bi bi-trash"></i>Sil</button></a>	
									<button type="button" class="btn btn-warning" ><i class="bi bi-pencil-square"></i>Düzenle</button>
								
								</td>	
							</tr>	
							<?php endforeach; ?>
						
						</table>
					
					</div>
				
				</div>
		
		</div>
	
	
	</div>
 
 
 
 </body>
	


</html>

