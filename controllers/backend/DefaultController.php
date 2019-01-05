<?php
namespace kouosl\sss\controllers\backend;
use kouosl\sss\models\Usersss;
use kouosl\sss\models\Sss;
use Yii;
/**
 * Default controller for the `sss` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
         $model = new Sss();
         $tablo2 = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc limit 0,5")->queryAll();
         if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Soru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            $usersss = Yii::$app->db->createCommand('SELECT * FROM usersss')->queryAll();
            return $this->render('_index', [
                'usersss' => $usersss,
                'model' => $model,
                'tablo2' => $tablo2,
                
                
            ]);
        }

    }

public function actionSendIndex() {
 {
         $model = new Sss();
         $tablo2 = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc limit 0,5")->queryAll();
         if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Soru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            $usersss = Yii::$app->db->createCommand('SELECT * FROM usersss')->queryAll();
            return $this->render('_index', [
                'usersss' => $usersss,
                'model' => $model,
                'tablo2' => $tablo2,
                
                
            ]);
        }

    }


    
}

    public function actionDeleteFunction($ID){
        $model = new Sss();
        $tablo2 = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc limit 0,5")->queryAll();
        if (isset($ID) && $ID!='') {
            $formitem = Usersss::findOne($ID);
            if($formitem != null){
            $formitem->delete();
            $usersss = Yii::$app->db->createCommand('SELECT * FROM usersss')->queryAll();
            return $this->render('_index', ['usersss' => $usersss, 'model' => $model,'tablo2' => $tablo2,]);
        }
        else {
            if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Soru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            $usersss = Yii::$app->db->createCommand('SELECT * FROM usersss')->queryAll();
            return $this->render('_index', [
                'usersss' => $usersss,
                'model' => $model,
                'tablo2' => $tablo2,
                
                
            ]);
        }
        }
        }
    }
}
