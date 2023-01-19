<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php if(Yii::$app->user->isGuest){ ?>
            <link rel="stylesheet" type="text/css" href="<?=Yii::$app->request->baseUrl.'/css/dark-theme.css'?>"/>
        <?php }else{ if(Yii::$app->user->identity->Theme){ ?>
            <link rel="stylesheet" type="text/css" href="<?=Yii::$app->request->baseUrl.'/css/dark-theme.css'?>"/>
        <?php }else{ ?>
            <link rel="stylesheet" type="text/css" href="<?=Yii::$app->request->baseUrl.'/css/light-theme.css'?>"/>
        <?php }} ?>
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="bg-color-1">
        <?php $this->beginBody() ?>

        <div class="wrap">
            <nav class="fixed-top navbar navbar-expand-lg">
                <div class="container">
                    <a href=""><img width="250px" src="<?=Yii::$app->request->baseUrl.'/img/default/AniMangaList.png'?>" placeholder="AniMangaList"/></a>
                    <ul class="navbar-nav">
                        <?php if(Yii::$app->user->isGuest){ ?>
                            <li class="nav-item">
                                <a class="nav-link bold text-color-2 <?=(Yii::$app->controller->route=='site/signup'?'active':'')?>" href="<?=Yii::$app->request->baseUrl.'/signup'?>">Signup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bold text-color-2 <?=(Yii::$app->controller->route=='site/login'?'active':'')?>" href="<?=Yii::$app->request->baseUrl.'/login'?>">Login</a>
                            </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link bold text-color-2 <?=(Yii::$app->controller->route=='user/myaccount'?'active':'')?>" href="<?=Yii::$app->request->baseUrl.'/myaccount'?>">
                                    <div class="row">
                                        <div class="col">
                                            <span><?=Yii::$app->user->identity->Username?></span>
                                        </div>
                                        <div class="col">
                                            <?php if(Yii::$app->user->identity->Image){ if(file_exists(Yii::getAlias('@backend').'/web/img'.Yii::$app->user->identity->Image)){ ?>
                                                <img src="<?=Yii::$app->urlManagerBackend->baseUrl.'/'.'img/'.Yii::$app->user->identity->IdUser.'/'.Yii::$app->user->identity->Image?>"/>
                                            <?php }else{ ?>
                                                <img src="<?=Yii::$app->urlManagerBackend->baseUrl.'/img/default/'.(Yii::$app->user->identity->Gender=='F'?'F':'M').'.jpg'?>"/>
                                            <?php }}else{ ?>
                                                <img src="<?=Yii::$app->urlManagerBackend->baseUrl.'/img/default/'.(Yii::$app->user->identity->Gender=='F'?'F':'M').'.jpg'?>"/>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <div class="container" id="main-container">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item pb-0 px-0">
                        <a class="nav-link text-30 rad-b-0 rad-t-50 <?=(Yii::$app->controller->route=='site/index')?'bg-color-2 text-color-1 bold active':'text-color-2'?>">Home</a>
                    </li>
                    <li class="nav-item pb-0 px-0">
                        <a class="nav-link text-30 rad-b-0 rad-t-50 <?=(Yii::$app->controller->route=='site/manga')?'bg-color-2 text-color-1 bold active':'text-color-2'?>">All Manga</a>
                    </li>
                    <li class="nav-item pb-0 px-0">
                        <a class="nav-link text-30 rad-b-0 rad-t-50 <?=(Yii::$app->controller->route=='site/anime')?'bg-color-2 text-color-1 bold active':'text-color-2'?>">All Anime</a>
                    </li>
                    <li class="nav-item pb-0 px-0">
                        <a class="nav-link text-30 rad-b-0 rad-t-50 <?=(Yii::$app->controller->route=='site/library')?'bg-color-2 text-color-1 bold active':'text-color-2'?>">Library</a>
                    </li>
                </ul>
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer fixed-bottom">
            <div class="container">
                <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
                <p class="float-end"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage();
