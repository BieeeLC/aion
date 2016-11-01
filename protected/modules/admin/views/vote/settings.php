<?php

	$this->setPageTitle( 'Настройка голосований в рейтингах' );
	echo '

';
	
	$form = $this->beginWidget( 'CActiveForm' );
	echo $form->errorSummary( $model );
	echo Power::message(  );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">Настройки для MMOTOP.ru</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'mmotopru_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'mmotopru_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'mmotopru_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'mmotopru_bonus', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'mmotopru_bonus_sms' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'mmotopru_bonus_sms', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Настройки для L2TOP.ru</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'l2topru_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'l2topru_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'l2topru_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'l2topru_bonus', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Настройка голосований в рейтингах</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'aiontopinfo_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'aiontopinfo_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'aiontopinfo_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'aiontopinfo_bonus', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Настройки для gamesites200.com</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'gamesites200com_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'gamesites200com_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'gamesites200com_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'gamesites200com_bonus', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Настройки для gtop100.com</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'gtop100com_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'gtop100com_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'gtop100com_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'gtop100com_bonus', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Настройки для topg.org</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'topgorg_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'topgorg_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'topgorg_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'topgorg_bonus', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
			</table>
		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Настройки для XtremeTop100.com</div>
		<div class="note-body">
			<table class="form w300">
				<tr>
					<td>';
	echo $form->label( $model, 'xtremetop100com_link' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'xtremetop100com_link', array( 'class' => 'w500' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'xtremetop100com_bonus' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'xtremetop100com_bonus', array( 'class' => 'w150' ) );
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