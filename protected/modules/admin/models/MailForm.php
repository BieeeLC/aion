<?php

	class MailForm extends CFormModel {
		var $mail_title = null;
		var $player_name = null;
		var $item_id = null;
		var $item_count = null;
		var $mail_message = null;
		var $player_id = null;

		function rules() {
			return array( array( 'mail_title, player_name', 'required' ), array( 'mail_title', 'length', 'max' => 20 ), array( 'item_id, item_count', 'numerical', 'integerOnly' => true ), array( 'item_id, item_count', 'length', 'max' => 10 ), array( 'mail_message', 'length', 'max' => 1000 ), array( 'player_name', 'checkPlayer' ) );
		}

		function attributeLabels() {
			return array( 'mail_title' => 'Заголовок письма', 'player_name' => 'Имя персонажа', 'item_id' => 'ID предмета', 'item_count' => 'Количество', 'mail_message' => 'Сообщение' );
		}

		function checkPlayer($attribute) {
			$player_id = Yii::app(  )->gs->createCommand(  )->select( 'id, online' )->from( 'players' )->where( 'name = :name', array( ':name' => $this->player_name ) )->queryRow(  );
            if (!$player_id) {
				$this->addError( 'player_name', Yii::t( 'admin', 'playerNotFound' ) );
				return null;
			}


			if ($player_id['online'] == 1) {
				$this->addError( 'player_name', Yii::t( 'admin', 'playerIsOnline' ) );
				return null;
			}

			$this->player_id = $player_id['id'];
		}
	}

?>