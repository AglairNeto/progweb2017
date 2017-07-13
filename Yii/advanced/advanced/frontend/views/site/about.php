<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Está aplicação possui o jogo tetris desenvolvido por Aglair Neto.</p>

    <p><?= $data ?></p>

    <code><?= __FILE__ ?></code>
</div>
