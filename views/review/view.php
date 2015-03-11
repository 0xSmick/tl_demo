<?php
  use yii\helpers\Html;
?>
 
<h1>Your Review</strong></h1>
<p><label>Text</label>:</p>
  <?= Html::encode($model->text) ?>
<br /><br />
<p><label>Permissions</label>:</p>
<?php
echo $model->getPermissionsLabel($model->permissions);
?>