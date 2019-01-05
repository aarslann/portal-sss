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
         $tablo2 = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
         $sss = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc")->queryAll();
         if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Soru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            $usersss = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
            return $this->render('_index', [
                'usersss' => $usersss,
                'model' => $model,
                'tablo2' => $tablo2,
                'sss' => $sss,
                
                
            ]);
        }

    }

public function actionSendIndex() {
 {
         $model = new Sss();
         $tablo2 = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
         $sss = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc")->queryAll();
         if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Soru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            $usersss = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
            return $this->render('_index', [
                'usersss' => $usersss,
                'model' => $model,
                'tablo2' => $tablo2,
                'sss' => $sss,
                
                
            ]);
        }

    }


    
}

    public function actionDeleteFunction($ID){
        $model = new Sss();
        $tablo2 = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
        $sss = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc")->queryAll();
        if (isset($ID) && $ID!='') {
            $formitem = Sss::findOne($ID);
            if($formitem != null){
            $formitem->delete();
            $usersss = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
            $sss = Yii::$app->db->createCommand("SELECT * FROM sss order by 'id' desc")->queryAll();
            return $this->render('_index', ['usersss' => $usersss, 'model' => $model,'tablo2' => $tablo2, 'sss' => $sss,]);
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
            $usersss = Yii::$app->db->createCommand("SELECT * FROM usersss order by 'id' desc")->queryAll();
            return $this->render('_index', [
                'usersss' => $usersss,
                'model' => $model,
                'tablo2' => $tablo2,
                'sss' => $sss,
                
                
            ]);
        }
        }
        }
    }
}
