<?php 

namespace Classes;

use Entities\AyarlarEntity;
use Entities\KullanicilarEntity;
use Entities\OgrenimBilgisiEntity;
use Entities\YetkinlikBilgisiEntity;

class code{

    public $db;
    private $dbhost='localhost';
    private $dbname='newtech';
    private $dbuser='root';
    private $dbpass='';

    public KullanicilarEntity $user;

    public function __construct()
    {
        $this->user=$_SESSION['user'] ?? new KullanicilarEntity();
    }

    public function connect2db():void
    {
            try
            {

                   $this->db = new \PDO("mysql:host=$this->dbhost;dbname=$this->dbname;charset=utf8", $this->dbuser, $this->dbpass);
                   $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            }
            catch (\PDOException $error)
            {
                die($error->getMessage());
            }

    }

    public function getSettings(): AyarlarEntity
    {
        $sth=$this->db->prepare("select * from ayarlar where site_durum=?");
        $sth->execute([AyarlarEntity::silinmedi]);

        return $sth->rowCount() > 0 ? $sth->fetchObject(AyarlarEntity::class) : new AyarlarEntity();


    }

    public function checkAccess()
    {
        if(!$this->user)
            return false;

        if($this->user->sil!=KullanicilarEntity::silinmedi)
            return false;

        return true;
    }

    
    public function login($username,$sifre) : KullanicilarEntity {

        $sth=$this->db->prepare("SELECT * FROM kullanicilar WHERE kullanici_eposta=? AND kullanici_sifre=? AND sil=?");
        $sth->execute([
            $username,
            $sifre,
            KullanicilarEntity::silinmedi
        ]);
        
        return $sth->rowCount()>0 ? $sth->fetObject(KullanicilarEntity::class) : new KullanicilarEntity();
    }

    //Session ayarlama - Oturum açma
    public function setSession($data):void{
        $_SESSION['user']=$data;
    }

    //Session silme - Oturum Kapatma
    public function logout(){

        $this->user=new KullanicilarEntity;
        unset($_SESSION['user']);
    }
    public function GetirKullanicilar()
    {
        $sth=$this->db->prepare("
        Select kullanici_no,
        kullanici_adi,
        kullanici_soyadi,
        kullanici_eposta,
        (Case When kullanici_cinsiyet=1 then 'Kadın' else 'Erkek' end) as kullanici_cinsiyet,
        (Case when kullanici_rutbe=2 then 'Kullanıcı' else 'Yönetici' end) as kullanici_rutbe,
        kayit_tarihi,
        sil
        from kullanicilar where sil=2");

        $sth->execute();
        return $sth->rowCount()>0? $sth->fetchAll(\PDO::FETCH_CLASS) : [];
    }
     public function getirKullaniciyi($kullanici_no)
    {
        $sth=$this->db->prepare("
        Select kullanici_no,
        kullanici_adi,
        kullanici_soyadi,
        kullanici_eposta,
        kullanici_rutbe,
        (Case When kullanici_cinsiyet=1 then 'Kadın' else 'Erkek' end) as kullanici_cinsiyet,
        kayit_tarihi,
        sil
        from kullanicilar where kullanici_no=? AND sil=2");

        $sth->execute([$kullanici_no]);
        return $sth->rowCount() > 0 ? $sth->fetchObject(KullanicilarEntity::class) : new KullanicilarEntity();
    }

    public function guncelleKullaniciyi($entity, $kullanici_no){
        $sth=$this->db->prepare("UPDATE kullanicilar SET kullanici_adi=?,kullanici_soyadi=?,kullanici_eposta=?,kullanici_cinsiyet=? WHERE kullanici_no=?");
        $sth->execute([
            $entity->kullanici_adi,
            $entity->kullanici_soyadi,
            $entity->kullanici_eposta,
            $entity->kullanici_cinsiyet,
            $entity->kullanici_rutbe,  
            $kullanici_no
        ]);

        return $sth->rowCount(); 

    }

    public function silKullanicilar($kullanici_no){
        $sth=$this->db->prepare("UPDATE kullanicilar SET sil=1 WHERE kullanici_no=?");
        $sth->execute([$kullanici_no]);

        return $sth->rowCount();
    }


    public function GetirOgrenimBilgileri() :array{
        $sth=$this->db->prepare("
            Select
            a.bilgi_no, 
            a.sirasi,	
            a.sirasi, 
            a.mezuniyet_yili,
            (Case when a.ogrenim_seviyesi=1 then 'İlkokul' 
                when a.ogrenim_seviyesi=2 then 'Ortaokul'
                when a.ogrenim_seviyesi=3 then 'Lise'
                when a.ogrenim_seviyesi=4 then 'ÖnLisans'
                when a.ogrenim_seviyesi=5 then 'Lisans'
                when a.ogrenim_seviyesi=6 then 'Yüksek Lisans'
                when a.ogrenim_seviyesi=7 then 'Doktora' end) as ogrenim_seviyesi,
                a.ogrenim_seviyesi as seviyesiralama,
                a.ogrenim_kurumadi,
            a.ekleyen,
            a.ekleme_tarihi,
            a.sil,
            b.kullanici_adi,
            b.kullanici_soyadi
            from ogrenimbilgisi as a inner 
            join kullanicilar as b on a.ekleyen=b.kullanici_no WHERE a.sil=2 ORDER BY sirasi ASC;");

        $sth->execute();
        return $sth->rowCount()>0? $sth->fetchAll(\PDO::FETCH_CLASS) : [];
    }

    public function ekleOgrenimBilgisi($entity){
        $sth=$this->db->prepare
        ("INSERT INTO ogrenimbilgisi SET sirasi=?,mezuniyet_yili=?,ogrenim_seviyesi=?,
        ogrenim_kurumadi=?,ekleyen=?");
        $sth->execute([
            $entity->mezuniyet_yili,
            $entity->ogrenim_seviyesi,
            $entity->ogrenim_kurumadi,
            $entity->sirasi,
            $entity->ekleyen]);

        return $sth->rowCount(); 

    }

    public function getirOgrenimBilgileriTek($bilgi_no) {
        $sth=$this->db->prepare("
            Select
            a.bilgi_no, 	 
            a.mezuniyet_yili,
            (Case when a.ogrenim_seviyesi=1 then 'İlkokul' 
                when a.ogrenim_seviyesi=2 then 'Ortaokul'
                when a.ogrenim_seviyesi=3 then 'Lise'
                when a.ogrenim_seviyesi=4 then 'ÖnLisans'
                when a.ogrenim_seviyesi=5 then 'Lisans'
                when a.ogrenim_seviyesi=6 then 'Yüksek Lisans'
                when a.ogrenim_seviyesi=7 then 'Doktora' end) as ogrenim_seviyesi,
                a.ogrenim_kurumadi,
            a.ekleyen,
            a.ekleme_tarihi,
            a.sil
            from ogrenimbilgisi as a  WHERE a.sil=2 and a.bilgi_no=?");

        $sth->execute([$bilgi_no]);
        return $sth->rowCount()>0? $sth->fetchObject(OgrenimBilgisiEntity::class) : new OgrenimBilgisiEntity();
    }
    public function guncelleOgrenimBilgisi($entity, $bilgi_no){
        $sth=$this->db->prepare
        ("UPDATE ogrenimbilgisi 
        SET mezuniyet_yili=?,
        sirasi=?,
        ogrenim_seviyesi=?,
        ogrenim_kurumadi=? 
        WHERE bilgi_no=?");
        $sth->execute([
            $entity->mezuniyet_yili,
            $entity->sirasi,
            $entity->ogrenim_seviyesi,
            $entity->ogrenim_kurumadi,
            $bilgi_no]);

        return $sth->rowCount(); 

    }

    public function silOgrenimbilgisi( $bilgi_no){
        $sth=$this->db->prepare
        ("UPDATE ogrenimbilgisi 
        SET sil=1
        WHERE bilgi_no=?");
        $sth->execute([$bilgi_no]);

        return $sth->rowCount(); 

    }
    public function GetirYetkinlikBilgileri() :array{
        $sth=$this->db->prepare("
            Select
            a.yetenek_id,
            a.yetenek_adi,
            a.yetenek_duzey,
            a.gorunurluk,
            a.sirasi,
            a.sil,
            a.tarih,
            b.kullanici_adi,
            b.kullanici_soyadi
            from yetenekler as a inner 
            join kullanicilar as b on a.yetenek_ekleyen=b.kullanici_no WHERE a.sil=2 ORDER BY sirasi ASC;");

        $sth->execute();
        return $sth->rowCount()>0? $sth->fetchAll(\PDO::FETCH_CLASS) : [];
    }

    public function ekleYetkinlikBilgisi($entity){
        $sth=$this->db->prepare
        ("INSERT INTO yetenekler SET sirasi=?, yetenek_adi=?,yetenek_duzey=?,yetenek_ekleyen=?");
        $sth->execute([
            $entity->sirasi,
            $entity->yetenek_adi,
            $entity->yetenek_duzey,
            $entity->yetenek_ekleyen]);

        return $sth->rowCount(); 

    }
    public function getirYetkinlikBilgileriTek($yetenek_id) {
        $sth=$this->db->prepare("
            Select
            yetenek_id,
            yetenek_adi,
            yetenek_duzey,
            gorunurluk,
            sirasi
            from yetenekler as a where a.sil=2 and a.yetenek_id =?; ");

        $sth->execute([$yetenek_id]);
        return $sth->rowCount()>0? $sth->fetchObject(YetkinlikBilgisiEntity::class) : new YetkinlikBilgisiEntity();
    }
    public function guncelleYetkinlikBilgisi($entity, $yetenek_id){
        $sth=$this->db->prepare(" UPDATE 
        yetenekler SET 
        yetenek_adi=?,
        yetenek_duzey=?,
        gorunurluk=?,
        sirasi=?
         WHERE yetenek_id=?");
        $sth->execute([
            $entity->yetenek_adi,
            $entity->yetenek_duzey,
            $entity->gorunurluk,
            $entity->sirasi,
            $yetenek_id]);

        return $sth->rowCount(); 

    }
    public function silYetkinlikBilgisi( $yetenek_id){
        $sth=$this->db->prepare
        ("UPDATE yetenekler 
        SET sil=1
        WHERE yetenek_id=?");
        $sth->execute([$yetenek_id]);

        return $sth->rowCount(); 

    }
    

}
