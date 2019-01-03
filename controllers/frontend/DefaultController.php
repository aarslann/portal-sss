<?php
namespace kouosl\sss\controllers\frontend;
use kouosl\sss\models\Sss;
use kouosl\sss\models\Usersss;
use Yii;		

/**
 * Default controller for the `duyuru` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$model = new Usersss();
    	if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Soru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        }else {	
        $sss = Yii::$app->db->createCommand('SELECT * FROM sss order by id desc limit 0,20')->queryAll();
        return $this->render('_index',['sss' => $sss,'model' => $model]);
    }
    }
}