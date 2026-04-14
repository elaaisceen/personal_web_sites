<?php 
require_once "../sistem/config.php";
require_once "../sistem/fonksiyon.php";

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
					
				</div>
				
				<div class="card">
				
					<div class="card-header bg-info text-white d-flex justify-content-between">
						<p class="h3">Güvenli Çıkış</p>
						<a href="yenikayit.php">
							<input type="button" class="btn btn-warning" value="Yeni Kullanıcı Ekle">
						</a>	
					</div>
					
					<div class="card-body">
					
						<div class="alert alert-success"> 
							Başarılı bir şekilde çıkış yaptınız. Lütfen bekleyiniz yönlendiriliyorsunuz.
						</div>
						
					</div>
				
				</div>
		
		</div>
	
	
	</div>
 
 </body>
<?php 

session_destroy();

go("http://localhost/furkan/login.php", 3);

?>	


</html>

