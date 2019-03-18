<?php

namespace app\models;

use Yii;
use Yii\helpers\Url;


class Mailer {

	const TYPE_REGISTRATION = 1;

	private static $renderFile;
	private static $renderParams = [];
	private static $from = ['akshay.gymtrekker@gmail.com' => 'Acme mailer'];
	private static $to;
	private static $subject;

	public static function validate($type, $model){
		switch ($type) {
			case self::TYPE_REGISTRATION;
				if (empty($model->id) || empty($model->uid) || empty($model->username) || empty($model->email)) {
					# code...
					return false;
				}
				# code...
				//self::$from = ['akshay.gymtrekker@gmail.com' => 'Acme mailer'];
				self::$to = [$model->email];
				self::$subject = 'Please activate your account';
				self::$renderFile = 'registration';
				self::$renderParams = ['user' => $model];
				break;
			
			default:
				return false;
		}
		return true;

	}

	public static function send($type, $model){
		if(!self::validate($type, $model)){
			return false;
		}
		//send emails
		$message = \Yii::$app->mailer->compose(self::$renderFile, self::$renderParams);
		return $message->setFrom(self::$from)->setTo(self::$to)->setSubject(self::$subject)->send();
	}
}