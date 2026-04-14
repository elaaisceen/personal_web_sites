<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- AOS Animation Library -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <title>Akademik ve Kişisel Çalışmalarım</title>
    <style>
        body {
            background-color: #f8bbd0 ;
        }
        .container {
        display: flex;
        gap: 20px;
        align-items: center;
        align-content: center;
        justify-content: center;
        }
        .item:nth-child(1),
        .item:nth-child(2),
        .item:nth-child(3) 
        {
        height: 200px;
        order: 0;
        flex-grow: 10;
        flex-shrink: 2;
        flex-basis: 20px;
        align-self: center;
        }

        .container {
        display: flex;
        gap: 20px;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        align-content: center;
        }

        #resim1, #resim2, #resim3 {
        width: 300px;
        height: 300px;
        flex-basis: 500px;
        align-self: center;
        }

        #yazi1, #yazi2, #yazi3 {
        width: px;
        height: 200px;
        flex-basis: 300px;
        }
    </style>
</head>

<body>
     <header>
            <header class="header">
            <div class="d-flex align-items-center bg-common-black text-white  p-1" >
                <div class="container d-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center text-white">
                        <i class="bi bi-envelope text-warning"></i><a href="mailto:elanurtuanaiscen@gmail.com" class="text-white ms-1">elanurtuanaiscen@gmail.com</a>
                        <i class="bi bi-telephone ms-4 text-warning"></i><span class="ms-1"> +90 542 432 65 48 </span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                       <a href="https://github.com/elaaisceen" class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);" href="#"><i class="bi bi-github ms-2 mb-2 text-warning"></i></a>
                       <a href="https://www.linkedin.com/in/elanur-tuana-iscen-99195629a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);" href="#"><i class="bi bi-linkedin ms-2 mb-2 text-warning"></i></a>
                       <a href="#" class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);" href="#"><i class="bi bi-twitter-x ms-2 mb-2 text-warning"></i></a>
                       <a href="https://www.instagram.com/codecad.ela?igsh=N283M3RsYnk0bW82" class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.200rem, 0);" href="#"><i class="bi bi-instagram ms-2 mb-2 text-warning"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg bordered" style="background-color: pink !important" data-bs-theme="light" >
            <div class="container d-flex align-items-center justify-content-between">
                <img src="CodeCad3-Photoroom.png" style="width: 3%" data-aos="fade-right" data-aos-delay="100">
                <a class="navbar-brand" href="#">E-LAN</a>
              <!--Sayfa belli bir ölçeğin altına düştüğünde yani telefon arayüzününe geçtiğinde 3 çizgi çıkarıp menü haline alır ve butona tıklayark menüye dönüşür-->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Anasayfa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Akademik Kariyerim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./İLETİSİM2.HTML">İletişim</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-link"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Projelerim
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./dropdown/basarilar.php">Başarılar</a></li>
                      <li><a class="dropdown-item" href="./dropdown/sertifika.php">Sertifikalar</a></li>
                      <li><a class="dropdown-item" href="./dropdown/calismalar.php">Çalışmalar</a></li>
                    </ul>
                    <script>
                       document.querySelectorAll('.dropdown-item').forEach(function(el) {
                       el.addEventListener('click', function () {
                       window.location.href = this.getAttribute('href');
                        });
                        });
                    </script>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
<!-- Akademik ve Kişisel Çalışmalarım Kategorize-->
 <h1 class="text-center" style="text-align: center; font-size: 50px;">Akademik ve Kişisel Çalışmalarım</h1>
    <div class="container" style="text-align: center; font-size:30px; margin-top: 50px;">
        <div class="item">
            <h3 >Ortaöğretim Mesleki Çalışmalarım</h3>
            <div>
                <div class="container">
                <div id="resim1"><img src="/dropdown/calismalar/liseResim/2023/IMG-20230313-WA0015.jpg" alt="lise çalışmam"></div>
                <div id="yazi1" style="font-size: 20px;"><a href="/dropdown/calismalar/lise.php">Lise Çalışmalarım İçin Tıklayınız</a></div>
            </div>
            </div>
        </div>
        <div class="item">
            <h3>Yükseköğretim Çalışmalarım</h3>
            <div>
                <div class="container">
                <div id="resim2" class="item">1</div>
                <div id="yazi2" class="item">2</div>
            </div>
        </div>
        <div class="item">
            <h3>Kulüp & Projeler</h3>
             <div>
                <div class="container">
                <div id="yazi3" class="item">1</div>
                <div id="resim3" class="item">2</div>
            </div>
        </div>
    </div>
</body>
<footer>
            <!-- place footer here -->
             <section class="zq_footer-area" id="footer" padding-bottom: 50px;>
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
</html>