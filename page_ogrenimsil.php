<?php

if($rutbe != 7){

?>
<div class="alert alert-danger">Yetkisiz işlem! Log kayıtlarınız yöneticiye bildirilmiştir.</div>
<?php
go("login.php?do=anasayfa",3);
exit;
}


  $bilgi_no=temizle($_GET["bilgi_no"]);
  $sil=$code->silOgrenimbilgisi($bilgi_no);
  
  

?>

<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Kullanıcılar</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">İçerikler</li>
                  <li class="breadcrumb-item active " aria-current="page"><a href="login.php?do=ogrenimbilgisi">Öğrenim Bilgileri</a></li>
                  <li class="breadcrumb-item " aria-current="page">Öğrenim Bilgileri Sil</li>
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
              <?php if ($sil){ ?>
            <div class="alert alert-success">Öğrenim bilgisi başarılı bir şekilde silinmiştir.Lütfen bekleyiniz, yönlendiriliyorsunuz...</div>
            <?php 
              go("Login.php?do=ogrenim",3);
            }else{ ?>
            <div class="alert alert-danger">Hata ! Öğrenim bilgisi silinememiştir. Lütfen tekrar deneyiniz.</div>
            <?php } ?>
</div>
</div>
</div>