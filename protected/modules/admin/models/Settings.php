<?php

	class Settings extends CActiveRecord {
		public static function model($className = 'Settings') {
			return parent::model( $className );
		}

		function tableName() {
			return 'settings';
		}

		function rules() {
			return array( array( 'site_name, admin_email, hide_top_access_level, hide_gm_access_level, news_per_page, news_comment_enable, webshop_per_page, top_per_page,
					email_activation_enable, user_registration_limit, authorization_protect_enable, authorization_log_level, points_transfer_enable, demo_membership_enable, demo_membership_id
					referrals_enable, referrals_check_type, referrals_filter_name, referrals_filter_value, referrals_bonus_owner, referrals_bonus_referral', 'required' ), array( 'money_column, anticheat_salt', 'safe' ) );
		}

		function attributeLabels() {
			return array( 'site_name' => 'Название сайта', 'admin_email' => 'E-mail адрес администратора', 'hide_top_access_level' => 'Скрывать игроков из топов с уровнем доступа выше', 'hide_gm_access_level' => 'Скрывать игроков из списка гм-ов с уровнем доступа выше', 'news_per_page' => 'Количество новостей на странице', 'news_comment_enable' => 'Включить комментирование новостей', 'webshop_per_page' => 'Количество записей на странице вебшопа', 'top_per_page' => 'Количество записей на странице топа', 'money_column' => 'Имя колонки с деньгами аккаунта <i class="ml5 btn-question" title="Имя столбца в базе данных логин-сервера, в котором хранятся деньги игрового аккаунта"></i>', 'email_activation_enable' => 'Включить подтверждение регистрации по email <i class="ml5 btn-question" title="Чтобы активировать аккаунт, пользователь должен будет перейти по ссылке, указанной в письме"></i>', 'user_registration_limit' => 'Включить ограничение регистраций <i class="ml5 btn-question" title="Если включено, то пользователь сможет зарегистрировать только один аккаунт в сутки"></i>', 'authorization_protect_enable' => 'Включить защиту при авторизациях <i class="ml5 btn-question" title="Если пользователь ввел непрввильно пароль 5 раз подряд за последние 15 минут, то вместо авторизации его будет перенаправлять на страницу с сообщением, что он был заблокирован на 15 минут"></i>', 'authorization_log_level' => 'Записывать авторизации пользователей', 'anticheat_salt' => 'Дополнительные символы для пароля <i class="ml5 btn-question" title="Добавляет к паролю набор указанных символов. Актуально для некоторых античитов. <br>Внимание! После изменения этого параметра пользователям нужно будет сбросить пароль от игрового аккаунта"></i>', 'points_transfer_enable' => 'Включить передачу поинтов', 'demo_membership_enable' => 'Включить демо-премиум', 'demo_membership_id' => 'Активировать в качестве демо-премиума', 'referrals_enable' => 'Включить систему рефералов <i class="ml5 btn-question" title="Позволяет получать бонусы за регистрацию новых пользователей"></i>', 'referrals_check_type' => 'Проверка клонов рефералов <i class="ml5 btn-question" title="Позволяет косвенно определить является ли реферал клоном или нет. Проверка по MAC адресу работает только если в базе данных логин-сервера в таблице с аккаунтами есть столбец last_mac"></i>', 'referrals_filter_name' => 'Параметр для получения бонуса', 'referrals_filter_value' => 'Значение для получения бонуса', 'referrals_bonus_owner' => 'Бонус владельцу', 'referrals_bonus_referral' => 'Бонус рефералу' );
		}

		function getmembershipList() {
			return Yii::app(  )->db->createCommand(  )->select( 'id, name' )->from( 'membership' )->order( 'id ASC' )->queryAll(  );
		}
	}

?>