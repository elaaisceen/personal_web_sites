<!doctype html>

<html lang="en">
<?php 
  //yetkinlikler değerleri
  $yazar="Elanur Tuana İşcen";
  $html="85";
  $css="75";
  $bootstrap="65";
  $javascript="40";
  $figma="45";
  $ortalama=($html+$css+$bootstrap+$javascript+$figma)/5;
  //yetkinklikler başlıkları
  $htmlbaslik="HTML";
  $cssbaslik="CSS";
  $bootstrapbaslik="Bootstrap";
  $javascriptbaslik="JavaScript";
  $tasarimbaslik="Tasarım";

  //eğitim kademesi
  $lise="Lise";
  $onlisans="Önlisans";
  $lisans="Lisans";
  $yandal="Yandal";

  //eğitim bilgileri
  $lisebilgi="İzmit Atatürk MTAL- CAD";
  $onlisansbilgi="Atatürk Üniversitesi- İSG";
  $lisansbilgi="Bartın Üniversitesi - BTBS";
  $yandalbilgi="Bartın Üniversitesi- YBS";
  ?>

<head>
      <link rel="icon" type="image/png" href="..\include\logo.ico">
        <title><?php $yazar ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>

          :root {
  --clr-common-black: #1b1f24;
}

.bg-common-black {
  background-color: var(--clr-common-black);
}

            .horizontal-timeline .items {
  border-top: 3px solid #e9ecef;
  display: flex !important;
  flex-wrap: nowrap ; /* Elemanların alt satıra geçmesini engeller */
  -webkit-overflow-scrolling: touch; /* Mobilde pürüzsüz kaydırma */
}

.horizontal-timeline .items .items-list {
  display: block;
  position: relative;
  text-align: center;
  padding-top: 70px;
  margin-right: 0;
}

.horizontal-timeline .items .items-list:before {
  content: "";
  position: absolute;
  height: 36px;
  border-right: 2px dashed #dee2e6;
  top: 0;
}

.horizontal-timeline .items .items-list .event-date {
  position: absolute;
  top: 36px;
  left: 0;
  right: 0;
  width: 75px;
  margin: 0 auto;
  font-size: 0.9rem;
  padding-top: 8px;
}

@media (min-width: 1140px) {
  .horizontal-timeline .items .items-list {
    display: inline-block;
    width: 24%;
    padding-top: 45px;
  }

  .horizontal-timeline .items .items-list .event-date {
    top: -40px;
  }
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 15px;
}

.social-icons a {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.social-icons a:hover {
    background: var(--clr-theme-accent);
    transform: translateY(-3px);
}

.social-icons a i {
    font-size: 20px;
    color: var(--clr-common-white);
    transition: all 0.3s ease;
}

.social-icons a:hover i {
    color: var(--clr-common-white);
}

@media (max-width: 575px) {
    .social-icons {
        gap: 15px;
    }
    
    .social-icons a {
        width: 35px;
        height: 35px;
    }
    
    .social-icons a i {
        font-size: 18px;
    }
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    padding: 0 40px;
    min-height: 50px;
}

.footer-text {
    flex: 1;
    text-align: right;
    padding-right: 60px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.footer-text p {
    margin: 0;
    line-height: 1;
}

.footer-separator {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 2px;
    height: 40px;
    background-color: var(--clr-theme-accent);
}

.social-icons {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    padding-left: 60px;
    margin: 0;
    gap: 15px;
}

@media (max-width: 767px) {
    .footer-content {
        flex-direction: column;
        gap: 20px;
        padding: 0;
        min-height: auto;
    }

    .footer-text {
        justify-content: center;
        padding-right: 0;
    }

    .footer-separator {
        position: static;
        transform: none;
        width: 40px;
        height: 2px;
        margin: 10px 0;
    }

    .social-icons {
        padding-left: 0;
        justify-content: center;
    }
}

.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #1b1f24;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loading-logo {
    width: 150px;
    height: auto;
    opacity: 1;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

.loading-overlay.fade-out {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}
body {
      background-color: #fff0f6;
      font-family: 'Segoe UI', sans-serif;
    }

    h2 {
      color: #d63384;
      font-weight: bold;
      text-align: center;
      margin-bottom: 40px;
    }

    label {
      font-weight: 600;
      margin-bottom: 5px;
      display: block;
      color: #880e4f;
    }

    .progress {
      height: 25px;
      border-radius: 30px;
      overflow: hidden;
      background-color: #ffe4ec;
    }

    .progress-bar {
      font-weight: bold;
      line-height: 25px;
      transition: width 1.5s ease-in-out;
    }

    .bg-pink {
      background-color: #e83e8c !important;
    }

    .bg-pink-dark {
      background-color: #d63384 !important;
    }

    .bg-pink-light {
      background-color: #f8bbd0 !important;
      color: #000 !important;
    }
.zq_footer-area {
            background: #222;
            color: #fff;
            padding: 32px 0 16px 0;
            border-top-left-radius: 32px;
            border-top-right-radius: 32px;
            box-shadow: 0 -2px 24px rgba(0,0,0,0.12);
            width: 100%;
            margin-top: 64px;
        }
        .zq_footer-container {
            max-width: 1100px;
            margin: 0 auto;
        }
        .zq_footer-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-content {
            width: 100%;
            text-align: center;
        }

        .footer-text p {
            margin: 0 0 10px 0;
            font-size: 1.1em;
            color: #bbb;
        }
        .footer-separator {
            width: 60px;
            height: 2px;
            background: #444;
            margin: 15px auto;
            border-radius: 2px;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            color: #bbb;
            margin: 0 10px;
            font-size: 1.6em;
            transition: color 0.2s;
            text-decoration: none;
        }
        .social-icons a:hover {
            color: #d63384;
        }

        @media (max-width: 600px) {
            .zq_footer-container { padding: 0 10px; }
            .zq_footer-area { border-top-left-radius: 18px; border-top-right-radius: 18px; }
        }
        .progress-bar {
      width: 0%;
      transition: width 2s ease-out;
}
        </style>
        
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
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
			
				<?php 
				
					$tarih=date("Y-m-d");
					
					$gunler=array(
							'Monday'=>'Pazartesi',
							'Tuesday'=>'Salı',
							'Wednesday'=>'Çarşamba',
							'Thursday'=>'Perşembe',
							'Friday'=>'Cuma',
							'Saturday'=>'Cumartesi',
							'Sunday'=>'Pazar'
							
					);
					
					$gunIngilizce=date("l", strtotime($tarih));
					
					/*echo $tarih;
					echo "<br>";
					echo $gunler["Tuesday"];
					echo "<br>";
					echo $gunIngilizce;
					echo "<br>";
					echo $gunler[$gunIngilizce];*/
					$bugun=$gunler[$gunIngilizce];
				?>
			
				<!-- Fotoğraf başladı -->
				<div class="col-md-5 d-flex justify-content-center">
				<?php if ($bugun=="Pazartesi"){ ?>
				
					<img src="./siteresim/IMG-20230313-WA0016.jpg" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } else if ($bugun=="Salı"){ ?>

					<img src="./siteresim/8264.JPG" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } else if ($bugun=="Çarşamba"){?>
				
					<img src="./siteresim/IMG-20230401-WA0031.jpg" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } else if ($bugun=="Perşembe"){?> 
					
					<img src="./siteresim/IMG-20240307-WA0072.jpg" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } ?>
        <?php if ($bugun=="Cuma"){ ?>
				
					<img src="./siteresim/IMG_20230405_182401_608.webp" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } else if ($bugun=="Cumartesi"){ ?>

					<img src="./siteresim/IMG_20230407_205159_885.webp" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } else if ($bugun=="Pazar"){?>
				
					<img src="./siteresim/8264.JPG" style="width:80%; height:100%" data-aos="flip-left" data-aos-delay="300"></img>
				
				<?php } ?>
				</div>
				<!-- / Fotoğraf bitti-->
				
				<!-- Bilgiler başladı --->
				<div class="col-md-7 text-secondary" data-aos="fade-up" data-aos-delay="300">
					<p class="h1"><i><?php echo $yazar; ?></i></p>
					<p><?php 
					
					//echo "iki parametreli:".durumagoreHesapla(100,60);
					//echo " üç parametreli:".durumagoreHesapla(100,60,20);
						
					?>
					<p style="text-align:justify"> Yazılım Geliştirici / IT Uzmanı </p>
					<p style="text-align:justify">Merhaba! Ben Elanur Tuana İşcen, yazılım geliştirme alanında tutkulu bir bireyim. 
						Eğitimim ve projelerimle kendimi sürekli geliştirmekteyim. Amacım, yenilikçi ve etkili yazılım çözümleri sunarak kullanıcı deneyimini iyileştirmektir. 
						Bu web sitesi, benim projelerimi ve yeteneklerimi sergilemek için oluşturulmuştur. 
						İlgilendiğiniz konular hakkında daha fazla bilgi almak isterseniz, benimle iletişime geçmekten çekinmeyin! </p>
				</div>
				<!-- Bilgiler bitti --->
         <div class="col-12 py-5">
				<h2 class="mb-5 border-bottom border-secondary">Akademik Kariyerim & Yetkinliklerim</h2>			
</div>

<!-- Yetkinliklerim Başladı --->
		<div class="container-fluid py-5">
      
  <div class="row">
    
    <!-- Zaman Çizelgesi -->
    <div class="col-md-9" >
      <div class="horizontal-timeline" style="padding-top: 30px;">

        <ul class="list-inline items">
          <?php $getirOgrenimBilgiler=$code->GetirOgrenimBilgileri(); ?>
        	<?php foreach ($getirOgrenimBilgiler as $gSatir): ?>

			
          <li class="list-inline-item items-list" data-aos="fade-up">
            <div class="px-4">
              <div class="event-date badge" style="background-color: #d63384;"><?php echo $gSatir->mezuniyet_yili; ?></div>
              <h5 class="pt-2"><?php echo $gSatir->ogrenim_seviyesi; ?></h5>
              <p class="text-muted"><?php echo $gSatir->ogrenim_kurumadi; ?></p>
              <div>
                <a href="#" class="btn btn-sm" style="background-color: #f8bbd0;">Read more</a>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>

    
    <?php $getirYetkinlikler=$code->GetirYetkinlikBilgileri(); ?>
    <!-- Yetkinlikler -->
    <div class="col-md-3">

        <?php foreach ($getirYetkinlikler as $ySatir): ?>

      <div class="mb-4" data-aos="fade-down-right" data-aos-delay="500">
        <label ><?php echo $ySatir->yetenek_adi; ?></label>
        <div class="progress" role="progressbar">
          <div class="progress-bar bg-pink" style="width: 0%;" aria-valuenow=" <?php echo $ySatir->yetenek_duzey; ?>
          "aria-valuemin="0" aria-valuemax="100"data-target-width= "<?php echo $ySatir->yetenek_duzey . "%"; ?>">
            <?php echo $ySatir->yetenek_duzey . "%"; ?>
        </div>
        </div>
      </div>
      <?php endforeach; ?>
      
    </div>
  </div>
</div>

<!-- Yetkinliklerim Bitti -->	
			
	</div>
	</div>
	<!-- row bitti -->
</div>
</div>

<br>
<br>

<!-- Container 'ım bitti -->	

	<footer>
	
		<section class="zq_footer-area" id="footer" padding-bottom: 100px;>
    <div class="container container-custom-1">
        <div class="zq_footer-container">
            <div class="zq_footer-wrap">
                <div class="footer-content">
                    <div class="footer-text">
                        <p>© 2026 Tüm Hakları Saklıdır - Elanur Tuana İŞCEN</p>
						
                    </div>
                    <div class="footer-separator"></div>
                    <div class="social-icons">
                        <a href="https://github.com/elaaisceen" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/elanur-tuana-iscen-99195629a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/codecad.ela?igsh=N283M3RsYnk0bW82" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
			
	</footer>
	<!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
              AOS.init({
                duration: 1200,  
                once: true      
              });
            });
          </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
        // Sosyal ikonlara tıklanınca yeni sekmede açılması için (güvenlik için rel ekli)
        document.querySelectorAll('.social-icons a').forEach(link => {
            link.addEventListener('click', function(e) {
                this.setAttribute('rel', 'noopener noreferrer');
                this.setAttribute('target', '_blank');
            });
        });
    </script>
<script>
    AOS.init({ duration: 1200, once: true });
  </script>
<script>
    window.addEventListener('load',function(){
      //sayfadaki tüm işlemler bittiğinde yani sayfa yüklendiğinde
      var progressBars = document.querySelectorAll('.progress-bar');
      progressBars.forEach(function(bar) {
        var targetWidth=bar.getAttribute('data-target-width');
        setTimeout(function() {
          bar.style.width=targetWidth;
          bar.innerText=targetWidth;
        },1000);
      });
    });
  </script>
	
	
	
  
  </body>
</html>