<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\bootstrap\ActiveForm;
use kouosl\sss\models\Usersss;
use kouosl\sss\models\Sss;
use kouosl\sss\Module;
use kouosl\site\models\Setting;

$this->title = 'Sıkça sorulan sorular';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title; ?>

<div class="site-contact">
  <h1>  <?php 
            $lang = yii::$app->session->get('lang');
      \Yii::$app->language = $lang;
      yii::$app->session->set('lang',$lang);
      \Yii::$app->language = 'tr-TR';
            echo Module::t('sss','Frequently Asked Questions');
            ?> </h1>


    <div class="row">
        <div class="col-lg-9">
            <?php $i=1; foreach($sss as $value){ ?>   
                    <div class="panel panel-primary">
                        <div class="panel-heading panel-primary question" id="<?php echo $i; ?>"><h3><?php echo $value["question"]; ?></h3></div>
                     <div class="<?php echo $i; ?> content" style="display;">
                          <div class="panel-body"><?php echo $value["answer"]; ?></div>
                      <div class="panel-footer"><b>Kategori: <?php echo $value["category"]." " ?></b></div>
                     </div>

                    </div>                                          

                
             <?php $i++; } ?>
        </div>
    </div>



 <h2>Yanıt bulamadınız mı? Bize ulaşın.</h2>

  <img src="https://www.elegantthemes.com/blog/wp-content/uploads/2015/10/client-questions-featured.png">


     <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>    

              <?= $form->field($model, 'question')->textarea(['rows' => 4]) ?>

              <?= $form->field($model, 'email')->textarea(['rows' => 1]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Gönder', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    </div>