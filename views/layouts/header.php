<?php

use app\assets\AppAsset;
use yii\helpers\Html;
/* @var $this yii\web\View */
AppAsset::register($this);
?>

<header>
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="#"><img src="web/logo/logo.png" alt="logo" width="80px", height="80px"></a>
            </div>
            <div class="nav">
                <ul>
                    <li><?=Html::a('Заявки', ['bid/index']); ?></li>
                    <li><?=Html::a('Пользователи', ['user/index']); ?></li>
                    <li><?=Html::a('Категории заявок', ['category/index']); ?></li>
                </ul>
            </div>
        </div>
    </div>
</header>

