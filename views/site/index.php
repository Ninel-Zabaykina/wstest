<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'DesignPRO';
?>

<div class="site-index">
<section class="design">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4"><b>Design.Pro</b></h1>

        <p class="lead"><b>Мы перестроим ваш мир к лучшему.</b></p>

        <p><?= Html::a('Оставить заявку', ['user/index'],['class'=>'b1']); ?></p>
    </div>
</section>

    <div class="body-content">
        <div class="bids">
            <?php foreach ($bids as $bid):?>
                <div class="col-lg-4">
                    <h2><a href="<?= Url::toRoute(['bid/index', 'id' =>$bid->id]);?>"><?=$bid->title?></a></h2>
                    <p>
                        <?=$bid->description?>
                    </p>
                </div>
            <?php endforeach;?>
    </div>
</div>