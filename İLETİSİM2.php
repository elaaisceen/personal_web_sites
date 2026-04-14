<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="nav_foot.html">

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
      box-shadow: 0 -2px 24px rgba(0, 0, 0, 0.12);
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
      .zq_footer-container {
        padding: 0 10px;
      }

      .zq_footer-area {
        border-top-left-radius: 18px;
        border-top-right-radius: 18px;
      }
    }

    .progress-bar {
      width: 0%;
      transition: width 2s ease-out;
    }

    .info-item i {
      font-size: 20px;
      color: white;
      width: 56px;
      height: 56px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-color: pink;
      border-radius: 50%;
      transition: all 0.3s ease-in-out;
      border: 2px dotted pink;
    }

    .info-item p {
      padding: 0;
      margin-bottom: 0;
      font-size: 14px;
      text-align: center;
      color: white;

    }

    .info-item h3 {
      font-size: 20px;
      font-weight: 700;
      margin: 10px 0;
      text-align: center;
      color: white;

    }
  </style>
</head>

<body>
  <header>
    <?php 

require_once 'include/menu.php';

?>

  </header>
  <main>


    <br>


    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded w-100"
            style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); background-color:var(--clr-common-black); color: #bbb;">
            <h2 style="color: #db1aca;">İletişim</h2>
            <p>Beni her zaman arayabilir veya e-posta gönderebilirsiniz.</p>
          </div>
        </div>


        <!-- Adres -->
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded w-100"
            style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); background-color:var(--clr-common-black); color: #bbb;">
            <i class="bi bi-geo-alt" style="color: #db1aca;"></i>
            <h3>Adresim</h3>
            <p>Kutlubey Yerleşkesi: Kutlubeyyazıcılar Köyü Yeni Köyubağlısı Yeni Sokak No:32/2</p>
          </div>
        </div>

        <!-- Telefon -->
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded w-100"
            style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); background-color:var(--clr-common-black); color: #bbb;">
            <i class="bi bi-telephone" style="color: #db1aca;"></i>
            <h3>İletişim Numarası</h3>
            <p>+90 XXX XXX XX XX</p>
          </div>
        </div>
        <!-- Mail -->
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="info-item d-flex flex-column justify-content-center align-items-center p-3 mb-5 rounded w-100"
            style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); background-color:var(--clr-common-black); color: #bbb;">
            <i class="bi bi-envelope" style="color: #db1aca;"></i>
            <h3>Mail Adresi</h3>
            <p>elanurtuana@iscen</p>
          </div>
        </div>
      </div>
      </form>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="info-item d-flex flex-column justify-content-center align-items-center p-2 mb-5 rounded w-100 "
            style="box-shadow: 0px 0px 20px rgba(0,0,0,0.1); background-color:var(--clr-common-black); color: #bbb;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4417.238642083686!2d32.28725125981439!3d41.55071190496928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409b7ab4a40a9d37%3A0x503bc50f823c4b15!2zQmFydMSxbiDDnG5pdmVyc2l0ZXNpIEt1dGx1YmV5IFlhesSxY8SxbGFyIEthbXDDvHPDvA!5e0!3m2!1str!2str!4v1748004777526!5m2!1str!2str" 
              width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <!--onay modali burada-->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">KVKK Metni</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Bu metin, kişisel verilerin korunması ve işlenmesi ile ilgili olarak tarafınıza bilgi vermek
                    amacıyla
                    hazırlanmıştır. Kişisel verilerinizin işlenmesi, saklanması ve korunması konularında detaylı bilgi
                    almak
                    için lütfen KVKK Politikasını inceleyiniz.</p>
                  <p>KVKK Politikasını kabul ediyorsanız, lütfen "Onaylıyorum" butonuna tıklayınız.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                  <button type="button" class="btn btn-success">Onaylıyorum</button>
                </div>
              </div>
            </div>
          </div>
          <!--onay modali burada-->
          <form action="" class="form" method="#">
            <div class="row shadow">

              <div class="col-md-6 ">
                <input type="text" name="adi" class="form-control" placeholder="Adınız Soyadınız" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" name="eposta" class="form-control" placeholder="Lütfen e-posta adresinizi giriniz."
                  required>
              </div>
              <div class="col-md-12 mt-3">
                <input type="text" name="konu" class="form-control" placeholder="Konu" required>
                <div class="col-md-12">
                  <textarea name="mesaj" id="" class="form-control"
                    placeholder="Lütfen konu ile ilgili mesajınızı belirtiniz" rows="4" required></textarea>

                </div>
                <div class="col-md-12 mt-4 mb-3 d-flex justify-content-center">
                  <button type="button" class="btn btn-warning rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="bi bi-send"> </i>Mesajınızı Gönderin</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

  </main>
  <footer>
    <section class="zq_footer-area" id="footer" padding-bottom: 100px;>
      <div class="container container-custom-1">
        <div class="zq_footer-container">
          <div class="zq_footer-wrap">
            <div class="footer-content">
              <div class="footer-text">
                <p>© 2025 Tüm Hakları Saklıdır - Elanur Tuana İŞCEN</p>
              </div>
              <div class="footer-separator"></div>
              <div class="social-icons">
                <a href="https://github.com/elaaisceen" target="_blank">
                  <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/elanur-tuana-iscen-99195629a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank">
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
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
      link.addEventListener('click', function (e) {
        this.setAttribute('rel', 'noopener noreferrer');
        this.setAttribute('target', '_blank');
      });
    });
  </script>
  <script>
    AOS.init({ duration: 1200, once: true });
  </script>
  <script>
    window.addEventListener('load', function () {
      //sayfadaki tüm işlemler bittiğinde yani sayfa yüklendiğinde
      var progressBars = document.querySelectorAll('.progress-bar');
      progressBars.forEach(function (bar) {
        var targetWidth = bar.getAttribute('data-target-width');
        setTimeout(function () {
          bar.style.width = targetWidth;
          bar.innerText = targetWidth;
        }, 1000);
      });
    });
  </script>
</body>

</html>