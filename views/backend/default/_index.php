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

                <?= $form->field($model, 'category') ?>

                <?= $form->field($model, 'question')->textarea(['rows' => 6])?>

                <?= $form->field($model, 'answer')->textarea(['rows' => 6]) ?>
               

                <div class="form-group">
                    <?= Html::submitButton('Gönder', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>


 <h1>Gönderilen Sorular</h1>
           <div class="row">
        <div class="col-lg-9">  
            <?php $i=1; foreach($sss as $value){ ?>   
                    <div class="panel panel-primary">
                        <div class="panel-heading panel-primary question" id=" <?php echo $i; ?>"><h3><?php echo $value["question"];  ?>  </h3></div>
                     <div class="<?php echo $i; ?> content" style="display;">
                          <div class="panel-body"><?php echo $value["answer"]; ?> </hr>  </div> 
                      <div class="panel-footer"><?php echo $value["category"]; ?>   <b></b></div>
                      <div class="panel-footer"> <?= Html::a('SORUYU SİL', ['class' => 'btn btn-success', 'delete-function', 'ID' => $value["id"]]) ?> <b></b></div>
                     </div>

                    </div>                                          

                
             <?php $i++; } ?>
        </div>
    </div>



    <h1>Kullanıcıların sorduğu sorular</h1>
            <table class="table table-striped table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Soru</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                  foreach ($tablo2 as $key => $value) {
                      echo "<tr><th>".$value["question"]."</th><th>".$value["email"]."</th></tr>";
                  }
                  ?>
                </tbody>
            </table>
        </div>

</div>





