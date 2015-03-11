<?php
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use app\models\Status;
?>
<?php $form = ActiveForm::begin();?>

    <?= $form->field($model, 'titleOfCompany')->textArea(['rows' => '1'])->label('Title of Company'); ?>
    <?= $form->field($model, 'text')->textArea(['rows' => '4'])->label('Review of Company'); ?>
 
    <?=
    $form->field($model, 'permissions')->dropDownList($model->getPermissions(), 
             ['prompt'=>'- Choose Your Permissions -']) ?>
 
    <div class="form-group">
        <?= Html::submitButton('Create New Review', ['class' => 'btn btn-primary']) ?>
    </div>
 
<?php ActiveForm::end(); ?>