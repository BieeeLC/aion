<?php
	class News extends CActiveRecord {
		function getDbConnection() {
			return Yii::app(  )->db;
		}

		function tableName() {
			return Config::db( 'db' ) . '.news';
		}

		public static function model($className = 'News') {
			return parent::model( $className );
		}

		function rules() {
			return array( array( 'title, category_id, text_short, user_id, comments_enable, date', 'required' ), array( 'user_id, category_id, date', 'numerical', 'integerOnly' => true ), array( 'title', 'length', 'max' => 128 ), array( 'description, keywords', 'length', 'max' => 255 ), array( 'text_full', 'safe' ) );
		}

		function attributeLabels() {
			return array( 'news_id' => 'ID новости', 'user_id' => 'Автор', 'title' => 'Заголовок', 'category_id' => 'Категория', 'text_short' => 'Короткое описание', 'text_full' => 'Полное описание', 'comments_enable' => 'Комментарии к новости', 'date' => 'Дата', 'description' => 'Мета-тег Description', 'keywords' => 'Мета-тег Keywords' );
		}
	}

?>