<?php

	class Membership extends CActiveRecord {
		public static function model($className = 'Membership') {
			return parent::model( $className );
		}

		function tableName() {
			return 'membership';
		}

		function rules() {
			return array( array( 'name, price', 'required' ), array( 'name', 'length', 'max' => 32 ), array( 'price', 'length', 'max' => 10 ), array( 'membership_type, membership_duration, craftship_type, craftship_duration, apship_type, apship_duration, collectionship_type, collectionship_duration,  price', 'numerical', 'integerOnly' => true ) );
		}

		function attributeLabels() {
			return array( 'id' => 'ID', 'name' => 'Название', 'membership_type' => 'Тип премиума', 'membership_duration' => 'Премиум (длительность, час.)', 'craftship_type' => 'Крафт (тип)', 'craftship_duration' => 'Крафт (длительность, час.)', 'apship_type' => 'AP (тип)', 'apship_duration' => 'AP (длительность, час.)', 'collectionship_type' => 'Сбор (тип)', 'collectionship_duration' => 'Сбор (длительность, час.)', 'price' => 'Цена' );
		}
	}

?>