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
                <h3 class="mb-0">Yetkinlik Bilgileri</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">İçerikler</li>
                  <li class="breadcrumb-item active " aria-current="page">Yetkinlik Bilgileri Listeleri</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
</div>
<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12"></div>
              <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">Yetkinlik Bilgilerinin Listesi</h3>
                    <a href="login.php?do=yetkinlikekle" class="ms-auto"><button class="btn btn-info "><i class="bi bi-plus"></i>Yetkinlik Bilgisi Ekle</button></a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th>Yetkinlik No</th>
                          <th>Sırası</th>
                          <th>Yetkinlik Adı</th>
                          <th>Yetkinlik Düzeyi</th>
                          <th>Ekleyen</th>
                          <th>Görünürlük</th>
                          <th>Ekleme Tarihi</th>
                          <th>İşlemler</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $yetkinlikbilgileri=$code->GetirYetkinlikBilgileri();

                          //var_dump($kullanicilar); //Çıktıyı kontrol etmek çıktının içindekileri görmek için kullanılır.
                        ?>
                        <?php 
                        foreach($yetkinlikbilgileri as $kSatir):
                        ?>
                        <tr class="align-middle">
                          <td><?php echo $kSatir->yetenek_id; ?></td>
                          <td><?php echo $kSatir->sirasi; ?></td>
                          <td><?php echo $kSatir->yetenek_adi; ?></td>
                          <td><?php echo $kSatir->yetenek_duzey; ?></td>
                          <td><?php echo $kSatir->kullanici_adi." ".$kSatir->kullanici_soyadi; ?></td>
                          <td> <?php
                            if($kSatir->gorunurluk == 1) {
                            echo "<span class='badge text-bg-success'> Aktif </span>";
                            } else {
                            echo "<span class='badge text-bg-danger'> Pasif </span>";
                            }

                            ?></td>
                          <td><?php echo $kSatir->tarih; ?></td>
                          <td>
                            <a href="login.php?do=yetkinlikduzenle&yetenek_id=<?php echo $kSatir->yetenek_id; ?>" class="btn btn-outline-primary me-2"> <i class="bi bi-pencil"></i> </a>

                            <a href="login.php?do=yetkinliksil&yetenek_id=<?php echo $kSatir->yetenek_id; ?>" class="btn btn-outline-danger" onclick="return confirm('Bu kaydı silmek istediğinizden emin misiniz?')"> <i class="bi bi-trash"></i></a>
                          </td>
              
                        </tr>
                          <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
             
              </div>
              <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>