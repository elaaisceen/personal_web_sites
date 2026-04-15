<?php 

if($rutbe != 7){

?>
<div class="alert alert-danger">Yetkisiz işlem! Log kayıtlarınız yöneticiye bildirilmiştir.</div>
<?php

go("login.php?do=anasayfa",3);
exit;
}

$gelenYetkinlikNo= (int) temizle($_GET["yetenek_id"]);
$getirYetkinlik=$code->getirYetkinlikBilgileriTek($gelenYetkinlikNo);






?>

<div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
          
               

              <div class="col-sm-6">
                <h3 class="mb-0">Yetkinlik Bilgileri</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page"></li>
                  <li class="breadcrumb-item active " aria-current="page"><a href="login.php?do=yeteneklerim">Yetkinlik Bilgileri</a></li>
                  <li class="breadcrumb-item " aria-current="page">Yeni Yetkinlik Düzenle</li>
                  
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
                    <div class="card-title">Yeni Yetkinlik Düzenle</div>
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

                  <form method="post">
                    <!--begin::Body-->
                    <div class="card-body">

                    <div class="mb-3">
                        <label for="sirasi" class="form-label">Sırası</label>
                        <input type="text" class="form-control" id="sirasi" name="sirasi" value="<?php echo $getirYetkinlik->sirasi; ?>" required />
                      </div>
                      
                      <div class="mb-3">
                        <label for="yetenek_adi" class="form-label">Yetkinlik Adı</label>
                        <input type="text" class="form-control" id="yetenek_adi" name="yetenek_adi" value="<?php echo $getirYetkinlik->yetenek_adi; ?>" required />
                      </div>
                      <div class="mb-3">
                        <label for="yetenek_duzey" class="form-label">Yetkinlik Düzeyi</label>
                         <input type="number" class="form-control" id="yetenek_duzey" name="yetenek_duzey" value="<?php echo $getirYetkinlik->yetenek_duzey; ?>" required />
                         <small><i><b class="text-danger">* Lütfen Dikkat : </b> Yetkinlik düzeylerinizi lütfen 0 ile 100 arasinda bir
                                değer ile giriş yapınız. </i> </small>
                       </div>

                       <div class="mb-3">
                        <label for="gorunurluk" class="form-label">Yetkinlik Gorünürlük</label>
                        <select name="gorunurluk" class="form-control" id="gorunurluk">
                          <option value="1" <?php if($getirYetkinlik->gorunurluk == 1) echo 'selected'; ?>>Aktif</option>
                          <option value="2" <?php if($getirYetkinlik->gorunurluk == 2) echo 'selected'; ?>>Pasif</option>
                        </select>
                      </div>

                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer text-end">
                      <button type="submit" class="btn btn-warning" ><i class="bi bi-plus"></i>Yetkinlik Bilgisini Düzenle</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
            </div>
          </div>
         </div>