<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.07.15
 * Time: 0:45
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<?= Html::submitButton('Submit', ['class'=>'btn btn-success']); ?>
