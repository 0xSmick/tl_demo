<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
	if(Yii::$app->session->getFlash('success')) {
		echo "<div class='alert alert-success'>" .Yii::$app->session->getFlash('success') ."</div>";
	}
?>

<h1>Create Your Account</h1>
<p>Just three simple steps</p>	


<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>
<?= $form->field($model, 'password'); ?>

<?= Html::submitButton('Submit', ['class'=>'btn btn-success']); ?>

