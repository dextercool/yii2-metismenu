<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 03.04.15
 * Time: 3:19
 */

namespace insolita\metismenu;


use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle{


    public $sourcePath = '@vendor/bower/metisMenu/dist';
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    public function init()
    {
        $postfix = YII_DEBUG ? '' : '.min';
        $this->js[] = 'metisMenu' . $postfix . '.js';
        $this->css[] = 'metisMenu' . $postfix . '.css';

        parent::init();
    }
}