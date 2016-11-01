<?php
	$this->setPageTitle( 'Настройка обвязки' );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">Общие настройки</div>
		<div class="note-body">
			';
	
	$form = $this->beginWidget( 'CActiveForm' );
	echo $form->errorSummary( $model );
	echo Power::message(  );
	echo '			<table class="form w450">
				<tr>
					<td>';
	echo $form->label( $model, 'site_name' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'site_name' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'admin_email' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'admin_email' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'hide_top_access_level' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'hide_top_access_level', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'hide_gm_access_level' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'hide_gm_access_level', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'news_per_page' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'news_per_page', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'news_comment_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'news_comment_enable' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'webshop_per_page' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'webshop_per_page', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'top_per_page' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'top_per_page', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'money_column' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'money_column' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'points_transfer_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'points_transfer_enable' );
	echo '</td>
				</tr>

				<tr>
					<td>';
	echo $form->label( $model, 'demo_membership_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'demo_membership_enable' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'demo_membership_id' );
	echo '</td>
					<td>';
	echo $form->dropDownList( $model, 'demo_membership_id', CHtml::listdata( Settings::getmembershiplist(  ), 'id', 'name' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Регистрация и авторизация</div>
		<div class="note-body">
			<table class="form w450">
				<tr>
					<td>';
	echo $form->label( $model, 'email_activation_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'email_activation_enable' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'user_registration_limit' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'user_registration_limit' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'authorization_protect_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'authorization_protect_enable' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'authorization_log_level' );
	echo '</td>
					<td>';
	echo $form->dropDownList( $model, 'authorization_log_level', array( 'ALL' => 'Все авторизации', 'ERROR' => 'Только авторизации с ошибками', 'NONE' => 'Не записывать данные' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'anticheat_salt' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'anticheat_salt' );
	echo '</td>
				</tr>
<!--				<tr>-->
<!--					<td>Активировать демо-премиум при создании нового аккаунта</td>-->
<!--					<td>-->';
	echo '<!--</td>-->
<!--				</tr>-->
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Реферальная систем</div>
		<div class="note-body">
			<table class="form w450">
				<tr>
					<td>';
	echo $form->label( $model, 'referrals_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'referrals_enable' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'referrals_check_type' );
	echo '</td>
					<td>';
	echo $form->dropDownList( $model, 'referrals_check_type', array( 'last_ip' => 'Проверка по IP адресу', 'last_mac' => 'Проверка по MAC адресу' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'referrals_filter_name' );
	echo '</td>
					<td>';
	echo $form->dropDownList( $model, 'referrals_filter_name', array( 'all_kill' => 'Всего убийств', 'ap' => 'Количество AP', 'exp' => 'Количество опыта' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'referrals_filter_value' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'referrals_filter_value', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'referrals_bonus_owner' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'referrals_bonus_owner', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'referrals_bonus_referral' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'referrals_bonus_referral', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-body center">
			';
	echo CHtml::submitbutton( 'Сохранить настройки', array( 'class' => 'button' ) );
	echo '			';
	$this->endWidget(  );
	echo '		</div>
	</div>
</div>';
?>