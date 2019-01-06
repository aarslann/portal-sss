# portal-sss

Portal sıkça sorulan sorular modülünü, portal web uygulamasına eklemek için /portal dizininde bulunan composer.json dosyasına gidilerek, aşağıdaki kod parçaları repositories ve require kısımlarına eklenir. Portal dizininde composer update işlemi yapılarak modül yüklenir.

....

"repositories":

[

{

    ....
    
    {
    
        "type": "vcs",
        
        "url": "https://github.com/aarslann/portal-sss.git"
        
    }
],

"require": {

....   
"kouosl/portal-sss": "dev-develop"

},

....

Kullanıcı ve yönetici panellerinin çalışması için gerekli olan veritabanı tabloları, modülün migrations klasörü içerisinde bulunmaktadır. Migrate işlemi yapılması gerekmektedir.

## Admin Paneli

Soru Ekleme

![ss1](https://user-images.githubusercontent.com/44694563/50736427-82636d00-11ce-11e9-88b5-8bfe068e0052.png)

Soru Silme ve Kullanıcı Sorularını Görüntüleme

![ss2](https://user-images.githubusercontent.com/44694563/50736428-82fc0380-11ce-11e9-92ff-5f9727279a4f.png)


## Kullanıcı Paneli

Soruları Görüntüleme ve Soru Sorma

![ss4](https://user-images.githubusercontent.com/44694563/50738301-703ff980-11e3-11e9-87d9-5ab85be531d4.png)


► Admin paneli: http://portal.kouosl/admin/sss

► Kullanıcı paneli: http://portal.kouosl/sss
