<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Temi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="temi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Введите название'])->label('Название') ?>

    <?= $form->field($model, 'id_sozd')->textInput(['placeholder' => 'Введите id создателя'])->label('Id создателя') ?>

    <?= $form->field($model, 'id_stati')->radioList([
    '1' => 'Сделать тему закротой',
    '2' => 'Сделать тему открытой',
	])->label('')?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6, 'placeholder' => 'Введите информацию о теме'])->label('Содержание темы') ?>

    <?= $form->field($model, 'data')->textInput(['maxlength' => true, 'placeholder' => 'Введите дату создания'])->label('Дата выхода') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
