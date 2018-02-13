<?php
/**
 * Created by PhpStorm.
 * User: skeepy
 * Date: 13.02.2018
 * Time: 12:26
 */

namespace console\controllers;

use yii\console\Controller,
    yii\helpers\Console;


class AboutController extends Controller
{

    public function actionIndex()
    {
        $this->stdout("
╔═══════════════════════════════════════════════════════════════════╗
║                               /\_/\                               ║
║                             =( °w° )=                             ║
║                               )   (  //                           ║
║                              (__ __)//                            ║
║                                                                   ║
║                             Hi there!                             ║
║                My name is Yuri, I'm 26 years old.                 ║
║  I live in the small town of Nadym and I like Web development :)  ║
║                                                                   ║
╚═══════════════════════════════════════════════════════════════════╝\n",
            Console::FG_BLUE);
    }
}