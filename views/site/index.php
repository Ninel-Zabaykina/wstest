<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'DesignPRO';
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><?= Html::a('Users', ['user/index'], ['class' => 'btn btn-lg btn-success']); ?></p>
    </div>

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