<?php
use yii\helpers\Url;
use yii\helpers\Html;

	$activationUrl = Url::to(['/site/activate', 'user' => $user->id, 'token' => $user->uid], true);
	echo "Please click on the link ". Html::a('activate_link', $activationUrl);
?>
