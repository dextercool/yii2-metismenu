<?php
/**
 * Created by PhpStorm.
 * User: Insolita
 * Date: 05.04.15
 * Time: 23:03
 */

namespace insolita\metismenu;


use yii\base\Widget;

/**
 * Class MetisSidebar
 * Side bar widget - wrapper under MetisMenu and nice toggle similar as in inspinia bootstrap theme
 *
 * @package insolita\metismenu
 */
class MetisSidebar extends Widget{

    /**
     * @var string $firstContent - html content before menu
     */
    public $firstContent='';
    /**
     * @var string $lastContent = html content after menu
     */
    public $lastContent='';
    /**
     * @var array  $menuItems
     */
    public $menuItems=[];
    /**
     * @var array $menuOptions = array of Metis-Menu settings (['toggle'=>true, 'encodeLabels'=>true, etc])
     */
    public $menuOptions=[];
}