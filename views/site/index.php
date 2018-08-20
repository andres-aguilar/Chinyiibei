<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Bitacora';
?>
<div class="contenedor">

    <h2><?=Html::encode($this->title)?></h2>

    <div class="body-content">
        <?php foreach ($model as $chinchilla): ?>
         <p><?= Html::encode($chinchilla->idChinchilla) ?></p> 
         <?php endforeach; ?>
        </div>
    </div>
</div>
