<!doctype html>
<?php 		require_once "sistem/fonksiyon.php"; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furkan AYDIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
</head>
  
  
  
  <body class="d-flex flex-column">
  
 <?php
		include "include/header.php";
		require_once "include/menu.php";

?>



<!-- Sayfamın gövedi bura başladı --->

<div class="container mt-5">

	<!-- row -->
	<div class="row">
		
		
		<div class="accordion mt-5 mb-5" id="projectShowcase">
		
				<div class="accordion-item shadow-sm mb-3">
					<h2 class="accordion-header" >
					
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kisiselweb" >
								
								<i class="bi bi-person-lines-fill me-2"></i> Kişisel Web Sitesi
						
						</button>
					
					</h2>
					<div id="kisiselweb" class="accordion-collapse collapse show" data-bs-parent="#projectShowcase">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-4">
										<img src="kisisel.png" class="img-fluid rounded" alt="Kişesel Web Sitesi Fotoğrafı"></img>	
								</div>
								<div class="col-md-8">
										<p> HTML 5, CSS3, JavaScript ve Bootstrap kullanılarak geliştirilen, dinamik, ve monil uyumlu kişisel tanıtım sayfası. </p>
										<p>
											<span class="badge bg-primary">HTML5</span>
											<span class="badge bg-info text-dark">CSS3</span>
											<span class="badge bg-warning text-dark">JavaScript</span>
											<span class="badge bg-success">Bootstrap 5</span>
										</p>
										<a href="#" class="btn btn-outline-primary btn-sm">Canlı Demo Tıklayınız.</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="accordion-item shadow-sm mb-3">
					<h2 class="accordion-header" >
					
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dashboard" >
								
								<i class="bi bi-bar-chart-line-fill me-2"></i> Gösterge Paneli
						
						</button>
					
					</h2>
					<div id="dashboard" class="accordion-collapse collapse" data-bs-parent="#projectShowcase">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-4">
										<img src="dashboard.png" class="img-fluid rounded" alt="Kişesel Web Sitesi Fotoğrafı"></img>	
								</div>
								<div class="col-md-8">
										<?php 
											$vize=70;
											$final=80;
											$sonuc=hesapNotumu(80,70);
											echo "Bu projeden aldığınız not ".$sonuc; 
										?>
										
										<p> Matplotlib ve D3.js entegrasyonlu, interaktif grafiklerle KPI takibi sağlayan kontrol paneli.</p>
										<p>
											<span class="badge bg-primary">D3.js</span>
											<span class="badge bg-info text-dark">Flask</span>
											<span class="badge bg-warning text-dark">JavaScript</span>
											<span class="badge bg-success">Chart.js</span>
										</p>
										<a href="#" class="btn btn-outline-primary btn-sm">Kaynak Kodlar İçin Tıklayınız.</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="accordion-item shadow-sm mb-3">
					<h2 class="accordion-header" >
					
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#egitimweb" >
								
								<i class="bi bi-laptop me-2"></i> Çevirim içi Eğitim Platformu
						
						</button>
					
					</h2>
					<div id="egitimweb" class="accordion-collapse collapse" data-bs-parent="#projectShowcase">
						<div class="accordion-body">
							<div class="row">
								<div class="col-md-4">
										<img src="cevrimici.png" class="img-fluid rounded" alt="Kişesel Web Sitesi Fotoğrafı"></img>	
								</div>
								<div class="col-md-8">
										<p> HTML 5, CSS3, JavaScript ve Bootstrap kullanılarak ön arayüz tasarlanmış olup, arka tarafta php kodlaması veri tabanında ise Mysql kullanılmıştır. </p>
										<p>
											<span class="badge bg-primary">HTML5</span>
											<span class="badge bg-info text-dark">CSS3</span>
											<span class="badge bg-warning text-dark">JavaScript</span>
											<span class="badge bg-success">Bootstrap 5</span>
											<span class="badge bg-danger">PHP</span>
											<span class="badge bg-primary">MySQL</span>
										</p>
										<a href="#" class="btn btn-outline-primary btn-sm">Canlı Demo Tıklayınız.</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				
				
		
		
		</div>
		
		
		
		
	</div>
	
	<!-- row bitti -->

</div>
<!-- Container 'ım bitti -->	
	
		<footer class="container-fluid copyright  text-center shadow-lg border-top border-warning " style="background-color:#e3f2fd; flex-grow:1">
	
		<div class="credits mt-2">
			@ <span>Tüm hakları saklıdır.</span> <strong>Furkan AYDIN </strong>
			<p>FuAy Web Tasarımı Geliştirme</p>
		
		</div>
			
		</footer>
	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  

	
	
  
  </body>
</html>