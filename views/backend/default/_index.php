<?php
use kouosl\sss\models\Usersss;
use kouosl\sss\models\Sss;
use kouosl\theme\widgets\Portlet;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Soru ekle';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'id')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'category') ?>

                <?= $form->field($model, 'question')->textarea(['rows' => 6])?>

                <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>

               

                <div class="form-group">
                    <?= Html::submitButton('Gönder', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


<h3>Kullanıcıların sormuş olduğu sorular</h3>

<div class="row">
        <div class="col-lg-9">
            <?php $i=1; foreach($usersss as $value){ ?>   
                    <div class="panel panel-primary">
                        <div class="panel-heading panel-primary question" id="<?php echo $i; ?>"><h3><?php echo $value["question"]; ?></h3></div>
                     <div class="<?php echo $i; ?> content" style="display;">
                          <div class="panel-body"><?php echo $value["email"]; ?></div>
                      <div class="panel-footer"><b></b></div>
                     </div>

                    </div>                                          

                
             <?php $i++; } ?>
        </div>
    </div>





</div>





