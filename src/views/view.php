<?php
/**
 * @author      Dmitriy Sabirov <web8dew@yandex.ru>
 * @copyright   Dmitriy Sabirov 19.12.18
 * @license     MIT
 * @license     https://opensource.org/licenses/MIT
 * @since       19.12.18
 */

use yii\helpers\Html;

/**
 * @var $this \yii\web\View
 * @var $imageId string
 * @var $cropperOptions array
 */

$img_src = '/img/demo/profile.jpg';

//echo Html::img($img_src, [
//    'id' => $imageId,
//    'class' => 'cropper-image'
//]);


echo Html::img(
    $cropperOptions['preview']['url'],
    [
        'width' => $cropperOptions['preview']['width'],
        'height' => $cropperOptions['preview']['height']
    ]
);


/* passing variables to JS */
$passVariables = <<<JS
const imageId = '$imageId';
JS;
Yii::$app->view->registerJs($passVariables, $this::POS_HEAD);
