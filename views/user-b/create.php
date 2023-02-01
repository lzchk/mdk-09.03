<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = 'Create User B';
$this->params['breadcrumbs'][] = ['label' => 'User Bs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-b-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
