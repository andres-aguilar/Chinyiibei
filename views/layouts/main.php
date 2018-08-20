<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" 
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" 
    crossorigin="anonymous">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">

    <nav id="sidebar">
        <div class="sidebar-header">
            <h3 class='text-center'><?= Yii::$app->name ?></h3>
            <figure class='text-center'>
                <img src='/assets/media/Chinchilla-icon.png' alt="">
            </figure>
        </div>

        <ul class="list-unstyled components">
            <p class='text-center'>Control de inventario</p>
            <li>
                <?= HTML::A(
                        '<i class="fas fa-book"></i> Bitacora',
                        Url::to(['site/index'])
                ) ?>
            </li>
            <li>
                <?= HTML::A(
                    '<i class="fas fa-file-alt"></i> Reportes',
                    Url::to(['/site/reports'])
                ) ?>
            </li>
            <li>
                <?= HTML::A(
                    '<i class="fas fa-stethoscope"></i> Estatus',
                    Url::to(['/site/status'])
                ) ?>
            </li>
            <li>
                <?= HTML::A(
                    '<i class="fas fa-edit"></i> Registro',
                    Url::to(['/site/status'])
                ) ?>
            </li>
            <li>
                <?=  HTML::A(
                    '<i class="fas fa-male"></i><i class="fas fa-female"></i> Cruzas',
                    Url::to(['/site/crosses'])
                ) ?>
            </li>
            <li>
                <?= HTML::A(
                    '<i class="fas fa-cogs"></i> Catalogos',
                    Url::to(['/site/catalogs'])
                ) ?>
            </li>
        </ul>
    </nav>

    <div class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
