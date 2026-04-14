<?php 
require_once "../sistem/config.php";
require_once "../sistem/fonksiyon.php";

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
<?php 

if ($_SESSION["rutbe"]!=7){
	?>
	<div class="alert alert-danger">Yetkisiz erişim!</div>
<?php	
	go("http://localhost/furkan/kullanici/default.php",3);
}

?> 
 <body>
 
	<div class="container">
	
		<div class="row">
		
				<div class="d-flex justify-content-betweEn align-items-center p-2">
				
					<span>Hoş Geldin <?php echo $_SESSION["adi"]." ".$_SESSION["soyadi"]; ?></span>
					<a href="cikis.php"><span>Çıkış Yap</span></a>
				</div>
				
				<div class="card">
				
					<div class="card-header bg-info text-white d-flex justify-content-between">
						<p class="h3">Yeni Kayıt</p>
						<a href="default.php">
							<input type="button" class="btn btn-warning" value="Listeye Dön">
						</a>	
					</div>
					
					<div class="card-body">
					
					<?php 
							
							if(isset($_POST["kayit"])){
								
								$options=[
										'memory_cost'=>1<<17, //128MB
										'time_cost'=>4, // hesapalama tur sayısı
										'threads'=>2, // paralel iş parçacığı
								
								];
								
								 $kullanici_adi=temizle($_POST["adi"]);
								 $kullanici_soyadi=temizle($_POST["soyadiniz"]);
								 $kullanici_eposta=temizle($_POST["eposta"]);
								 $cinsiyet=temizle($_POST["cinsiyet"]);
								//echo $sifre=temizle($_POST["sifre"]);
								//$sifre=hash('md5',$_POST["sifre"]);
								//$sifre=hash('sha256',$_POST["sifre"]);
								$sifre=$_POST['sifre'];
								$sifre2=$_POST['sifre2'];
								
								
								if (!empty($kullanici_adi) && !empty($kullanici_soyadi) && !empty($kullanici_eposta) && !empty($cinsiyet) && !empty($sifre)&& !empty($sifre2)){
								
								if ($sifre===$sifre2) {
									
								if(gecerliSifremi($sifre)){
								
							
								$sifre=password_hash($sifre,PASSWORD_ARGON2ID,$options);
								
								$varmi=$pdo->prepare("Select kullanici_eposta FROM kullanicilar where kullanici_eposta=? and sil=?");
								$varmi->execute([$kullanici_eposta,2]);
								$varmisonuc=$varmi->fetch();
								try {
								if ($varmisonuc){
									
									?>
									
										<div class="alert alert-danger"><?php echo $kullanici_eposta; ?> adlı eposta ile daha önce kayıt yapılmıştır.</div>
										
								<?php	
								} else {
								
								$ekle=$pdo->prepare("INSERT INTO kullanicilar SET
														kullanici_adi=?,
														kullanici_soyadi=?,
														kullanici_eposta=?,
														kullanici_cinsiyet=?,
														kullanici_sifre=?");
								if ($ekle->execute([$kullanici_adi,$kullanici_soyadi,$kullanici_eposta,$cinsiyet,$sifre])){
									
														go("http://localhost/furkan/kullanici/default.php",3);
														
														?>
														<div class="alert alert-success">Başarılı Bir Şekilde Kayıt Alınmıştır. Lütfen Bekleyiniz Yölendiriliyorsunuz..</div>
												<?php	} else { ?>

													<div class="alert alert-danger">Kayıt başarısız tekrar deneyiniz.</div>
							<?php		
									}
								}
							  } catch ( PDOException $error){
								echo "<div class='alert alert-danger'>";
								echo "Yeni üye kaydı başarısızdır. Lütfen tüm alanları kontrol ederek tekrar deneyiniz.";
								echo "</div>";
							  }
							  
							  
							  	} else {
									?>
									
										<div class="alert alert-warning">
											<h3>Zayıf Şifre !</h3>
											<p>! Lütfen şifrenizi oluştururken aşağıdaki kurallara uyunuz.</p>
											<p><b>Şifreniz;</b>
											<p>* En az bir büyük harf içermelidir.
											<p>* En az bir rakam içermelidir.
											<p>* En az bir özel karakter içermelidir.
											<p>* Şifreniz minimum 8 karakterden oluşmalıdır.
										
										</div>
								<?php	
									
								}	/*-------------    Geçerli Şifre Girildi mi Kontrol eder ------------*/
								
								
								
								} else {
									?>
									
										<div class="alert alert-warning">Şifreler uyuşmamaktadır!</div>
								<?php	
									
								}	/*-------------    Şifrelerin aynı girilip girilmediğini kontrol eder! ------------*/
								
								
								  
								} else {
									?>
									
										<div class="alert alert-danger">Lütfen tüm alanları doldurarak kayıt yapınız.</div>
								<?php	
									
								} /*-------------    Tüm alanları doldurmayı kontrol eder. ------------*/

								
							  }
									
						
						
						?>		
						<form class="form" method="post">
							<div class="mb-3">
									<label class="fw-bold" for="adi"> Adınız</label>
									<input type="text" name="adi" id="adi" class="form-control" value="<?php if (isset($_POST["kayit"])){ echo $kullanici_adi; }?>" placeholder="Lütfen Adınız" required >
								</div>
								<div class="mb-3">
									<label class="fw-bold" for="soyadiniz"> Soyadınız</label>
									<input type="text" name="soyadiniz" id="soyadiniz" class="form-control" value="<?php if (isset($_POST["kayit"])){  echo $kullanici_soyadi; } ?>" placeholder="Lütfen Adınız ve Soyadınızı Giriniz" required >
								</div>
								
								<div class="mb-3">
									<label class="fw-bold" for="epostagiriniz"> E-posta Adresiniz</label>
									<input type="email" name="eposta" id="epostagiriniz" value="<?php if (isset($_POST["kayit"])){ echo $kullanici_eposta; } ?>" class="form-control" placeholder="Lütfen Eposta Adresiniz" required >
								</div>
								<div class="mb-3">
									<label class="fw-bold" for="cinsiyet"> Cinsiyetiniz</label>
									<select name="cinsiyet" value="<?php if (isset($_POST["kayit"])){  echo $kullanici_cinsiyet; } ?>" class="form-control" required>
									    <option value="">Lütfen Seçiniz</option>
										<option value="1" <?php if (isset($_POST["kayit"]) && $cinsiyet==1) { echo "selected"; } ?> >Kadın</option>
										<option value="2" <?php if (isset($_POST["kayit"]) && $cinsiyet==2) { echo "selected"; } ?>>Erkek</option>
									</select>
								</div>
								<div class="mb-3">
								<label class="fw-bold" for="sifre">Şifreniz</label>
									<input type="password" name="sifre" id="sifre" class="form-control" placeholder="Lütfen şifrenizi giriniz."  required>
								</div>
								<div class="mb-3">
								<label class="fw-bold" for="sifre2">Şifreniz</label>
									<input type="password" name="sifre2" id="sifre2" class="form-control" placeholder="Lütfen şifrenizi doğrulayınız."  required>
								</div>
								<div class="d-grid mb-3">
									<button type="submit"  name="kayit" class="btn btn-success"> 
									<i class="bi bi-person-fill-add me-1"></i>Ekle
									</button>
								</div>
						</form>
						
						
					</div>
				
				</div>
		
		</div>
	
	
	</div>
 
 </body>



</html>

