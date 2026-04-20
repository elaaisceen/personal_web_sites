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
                <h3 class="mb-0">Öğrenim Bilgileri</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="login.php?do=anasayfa">Anasayfa</a></li>
                  <li class="breadcrumb-item " aria-current="page">İçerikler</li>
                  <li class="breadcrumb-item active " aria-current="page">Öğrenim Bilgileri Listeleri</li>
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
                    <h3 class="card-title">Öğrenim Bilgilerinin Listesi</h3>
                    <a href="login.php?do=ogrenimekle" class="ms-auto"><button class="btn btn-info "><i class="bi bi-plus"></i>Öğrenim Bilgisi Ekle</button></a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th>Bilgi No</th>
                          <th>Öğrenim Sırası</th>
                          <th>Mezuniyet Yılı</th>
                          <th>Öğrenim Seviyesi</th>
                          <th>Kurum Adı</th>
                          <th>Ekleyen</th>
                          <th>Ekleme Tarihi</th>
                          <th>İşlemler</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $ogrenimbilgileri=$code->GetirOgrenimBilgileri();

                          //var_dump($kullanicilar); //Çıktıyı kontrol etmek çıktının içindekileri görmek için kullanılır.
                        ?>
                        <?php 
                        foreach($ogrenimbilgileri as $kSatir):
                        ?>
                        <tr class="align-middle">
                          <td><?php echo $kSatir->bilgi_no; ?></td>
                          <td><?php echo $kSatir->sirasi; ?></td>
                          <td><?php echo $kSatir->mezuniyet_yili; ?></td>
                          <td><?php echo $kSatir->ogrenim_seviyesi; ?></td>
                          <td><?php echo $kSatir->ogrenim_kurumadi; ?></td>
                          <td><?php echo $kSatir->kullanici_adi." ".$kSatir->kullanici_soyadi; ?></td>
                          <td><?php echo $kSatir->ekleme_tarihi; ?></td>
                          <td>
                            <a href="login.php?do=ogrenimduzenle&bilgi_no=<?php echo $kSatir->bilgi_no; ?>" class="btn btn-outline-primary me-2"> <i class="bi bi-pencil"></i> </a>

                            <a href="login.php?do=ogrenimsil&bilgi_no=<?php echo $kSatir->bilgi_no; ?>" class="btn btn-outline-danger" onclick="return confirm('Bu kaydı silmek istediğinizden emin misiniz?')"> <i class="bi bi-trash"></i></a>
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