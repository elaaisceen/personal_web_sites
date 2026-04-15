<?php 

if($rutbe != 7){

?>
<div class="alert alert-danger">Yetkisiz işlem! Log kayıtlarınız yöneticiye bildirilmiştir.</div>
<?php

go("login.php?do=anasayfa",3);
exit;
}
?>

<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
          
               

              <div class="col-sm-6">
                <h3 class="mb-0">Ön Sayfa Bilgileri</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">İçerikler</li>
                  <li class="breadcrumb-item active" aria-current="page">Ön Sayfa İşlemleri</li>
                  
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
          <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
               <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header">
                    <div class="card-title">Ön Sayfa Bilgilerini Güncelle</div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Form-->

                  <?php 
                  if($_POST){
                    $entity =new \Entities\YetkinlikBilgisiEntity();
                    $entity->sirasi=temizle($_POST["sirasi"]);
                    $entity->yetenek_adi=temizle($_POST["yetenek_adi"]);
                    $entity->yetenek_duzey=temizle($_POST["yetenek_duzey"]);
                    $entity->gorunurluk=temizle($_POST["gorunurluk"]);
                    $entity->yetenek_ekleyen=$ekleyen;

                    $ekle=$code->guncelleYetkinlikBilgisi($entity, $getirYetkinlik->yetenek_id);
                    if ($ekle){
                      ?>
                      <div class="alert alert-success">Yetkinlik bilgisi başarılı bir şekilde düzenlendi. Lütfen bekleyiniz, yönlendiriliyorsunuz...</div>
                    <?php 
                          go("Login.php?do=yeteneklerim",3);
                        } else { ?>
                        <div class="alert alert-danger">Hata ! Yetkinlik bilgisi düzenlenemiyor. Lütfen tekrar deneyiniz.</div>
                        <?php } ?>
                  
                  <?php } ?>  

                  <style>
                    .form-label{
                      font-weight: bold;
                    }
                  </style>

                  <form method="post">
                    <!--begin::Body-->
                    <div class="card-body">

                    <div class="mb-3">
                        <label for="baslik" class="form-label">Ad Soyad, Ünvan</label>
                        <input type="text" class="form-control" id="baslik" name="baslik" value="" required />
                      </div>
                      
                      <div class="mb-3">
                        <label for="yetenek_adi" class="form-label">Öz Geçmiş Yazısı / Hakkımda</label>
                        <textarea name="editor1"></textarea>
                      </div>

                      <div class="mb-3">
                        <label for="dosya" class="form-label">Ön Sayfa Görseli Seçiniz</label>
                        <input type="file" class="form-control" id="dosya" name="dosya" value="" required />
                        <small><i><b class="text-danger">Lütfen Dikkat:</b> Seçeceğiniz dosya boyutu 250x200 şeklinde olmasına dikkat ediniz. </i></small>
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-mailbox"></i></span>
                        <input type="text" class="form-control" placeholder="E-posta adresini giriniz.">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                        <input type="text" class="form-control" placeholder="Telefon numarasını giriniz.">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-instagram"></i></span>
                        <input type="text" class="form-control" placeholder="Instagram adresinizi giriniz.">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-facebook"></i></span>
                        <input type="text" class="form-control" placeholder="Facebook adresinizi giriniz.">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-twitter-x"></i></span>
                        <input type="text" class="form-control" placeholder="X adresinizi giriniz.">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-linkedin"></i></span>
                        <input type="text" class="form-control" placeholder="LinkedIn adresinizi giriniz.">
                      </div>

                      

                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer text-end">
                      <button type="submit" class="btn btn-warning" ><i class="bi bi-pencil-square me-2"></i>Güncelle</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
            </div>
          </div>
         </div>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor1');
</script>