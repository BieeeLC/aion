<?php

	class SettingsVotes extends CActiveRecord {
		public static function model($className = 'SettingsVotes') {
			return parent::model( $className );
		}

		function tableName() {
			return 'settings_votes';
		}

		function rules() {
			return array( array( 'mmotopru_link, l2topru_link, aiontopinfo_link, gamesites200com_link, gtop100com_link, topgorg_link, xtremetop100com_link', 'length', 'max' => 128 ), array( 'mmotopru_bonus, mmotopru_bonus_sms, l2topru_bonus, aiontopinfo_bonus, gamesites200com_bonus, gtop100com_bonus, topgorg_bonus, xtremetop100com_bonus', 'numerical', 'integerOnly' => true ) );
		}

		function attributeLabels() {
			return array( 'mmotopru_link' => 'Ссылка на страницу со списком голосов', 'mmotopru_bonus' => 'Бонус за голос', 'mmotopru_bonus_sms' => 'Бонус за СМС голос', 'l2topru_link' => 'Ссылка на страницу со списком голосов', 'l2topru_bonus' => 'Бонус за голос', 'aiontopinfo_link' => 'Ссылка на страницу со списком голосов', 'aiontopinfo_bonus' => 'Бонус за голос', 'gamesites200com_link' => 'Ссылка для голосования', 'gamesites200com_bonus' => 'Бонус за голос', 'gtop100com_link' => 'Ссылка для голосования', 'gtop100com_bonus' => 'Бонус за голос', 'topgorg_link' => 'Ссылка для голосования', 'topgorg_bonus' => 'Бонус за голос', 'xtremetop100com_link' => 'Ссылка для голосования', 'xtremetop100com_bonus' => 'Бонус за голос' );
		}
	}

?>