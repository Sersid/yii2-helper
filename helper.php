<?php
function dump($var)
{
    yii\helpers\BaseVarDumper::dump($var, 10, true);
}