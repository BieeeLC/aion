<?php

	class Pages extends CActiveRecord {
	  public static	function model($className = 'Pages') {
			return parent::model( $className );
		}

		function tableName() {
			return 'pages';
		}

		function rules() {
			return array( array( 'name, title, text', 'required' ), array( 'name, title', 'length', 'max' => 128 ), array( 'description, keywords', 'length', 'max' => 255 ), array( 'name', 'match', 'pattern' => '/^[A-Za-z0-9][\w]+$/', 'message' => '{attribute} может содержать только латинские буквы' ), array( 'name', 'unique' ) );
		}

		function attributeLabels() {
			return array( 'id' => 'ID', 'name' => 'Адрес ссылки', 'title' => 'Заголовок страницы', 'text' => 'Текст', 'description' => 'Мета-тег Description', 'keywords' => 'Мета-тег Keywords' );
		}
	}

?>