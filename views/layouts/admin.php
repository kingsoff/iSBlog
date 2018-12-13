<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
     NavBar::begin([
        'brandLabel' => 'Информационная безопасность', // Надпись слева
        'brandUrl' => Yii::$app->homeUrl, // Url который будет указ в гиперссылке на надписи
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top', // Класс bootstrap class="navbar-inverse navbar-fixed-top" в HTML
        ],
    ]);

    $menuItems = [ // Те, которые будут отображаться всегда
        ['label' => 'Главная', 'url' => ['/admin/site/index']],
        ['label' => 'Статьи', 'url' => ['/admin/article/index']],
        ['label' => 'Комментарии', 'url' => ['/admin/comment/index']],
        ['label' => 'Категории', 'url' => ['/admin/category/index']],
        ['label' => 'Теги', 'url' => ['/admin/tag/index']]
    ];


    echo Nav::widget([ // Выводим результат метода
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems // Элементы меню
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
