<?php

	class Webshop extends CActiveRecord {
		public static function model($className = 'Webshop') {
			return parent::model( $className );
		}

		function tableName() {
			return 'webshop';
		}

		function rules() {
			return array( array( 'item_id, category_id, quantity, price', 'required' ), array( 'item_id, category_id, quantity, change_quantity_enable, price', 'numerical', 'integerOnly' => true ), array( 'item_id, category_id, quantity, price', 'length', 'max' => 10 ) );
		}

		function attributeLabels() {
			return array( 'id' => 'ID', 'item_id' => 'ID вещи', 'category_id' => 'Категория', 'quantity' => 'Количество', 'change_quantity_enable' => 'Можно менять количество', 'price' => 'Цена' );
		}
	}

?>