<?php $this->setPageTitle('Управление балансом'); ?>


<script>
	$('document').ready(function(){
		var el = $('select#TransferPointsForm_type');
		var v = el.val();
		if (v === 'ACCOUNT') {
			$('div#transfer-type-user').hide();
			$('div#transfer-type-account').show();
		}
		else if (v === 'USER') {
			$('div#transfer-type-account').hide();
			$('div#transfer-type-user').show();
		}
		el.change(function(){
			v = $(this).val();
			if (v === 'ACCOUNT') {
				$('input#TransferPointsForm_recipient_user').val('');
				$('div#transfer-type-user').hide();
				$('div#transfer-type-account').show();
			}
			else if (v === 'USER') {
				$('div#transfer-type-account').hide();
				$('div#transfer-type-user').show();
			}
		});
	});
</script>


<div class="note">
	<div class="note-title">Informações Gerais</div>
	<div class="note-body">
		<div class="table border">
			<div class="row">
				<div class="w250">Зачислено за все время</div>
				<div><?php echo $balance['total']; ?> PTS</div>
			</div>
			<div class="row">
				<div class="w250">Всего зачислений</div>
				<div><?php echo $balance['payments']; ?> (<a href="<?php echo Power::url('logs'); ?>">Посмотреть отчет</a>)</div>
			</div>
			<div class="row">
				<div class="w250">Ваш текущий баланс</div>
				<div><b><?php echo $balance['current']; ?> PTS</b></div>
			</div>
		</div>
	</div>
</div>


<div class="note">
	<div class="note-title">Пополнение баланса</div>
	<div class="note-body">
		<?php echo Power::message(); ?>
		<?php $this->widget('application.components.widgetInterkassa'); ?>
		<div class="mb10"></div>
		<?php $this->widget('application.components.widgetRobokassa'); ?>
	</div>
</div>


<div class="note">
	<div class="note-title">Передача поинтов</div>
	<div class="note-body">
		<?php if(Config::get('points_transfer_enable') == 1) : $form=$this->beginWidget('CActiveForm'); echo CHtml::errorSummary($post); echo Power::message('message-transfer'); ?>
		<div class="table">
			<div class="row">
				<div class="w0"><?php echo $form->dropDownList($post,'type', array('ACCOUNT'=>'Игровому аккаунту', 'USER'=>'Пользователю')); ?></div>
				<div id="transfer-type-account" class="sh10"><?php echo $form->dropDownList($post,'recipient_account', Power::getUserAccounts(), array('empty' => '-- Выберите аккаунт --', 'class'=>' w180')); ?></div>
				<div id="transfer-type-user" class="sh10"><?php echo $form->textField($post,'recipient_user', array('class'=>'text', 'placeholder'=>'Введите имя пользователя')); ?></div>
				<div><?php echo $form->label($post,'sum')?></div>
				<div class="sh10"><?php echo $form->textField($post,'sum', array('class'=>'text w90')); ?></div>
				<div><?php echo CHtml::submitButton('Передать', array('class'=>'button')); ?></div>
			</div>
		</div>
		<?php $this->endWidget(); else: ?>
			Передача поинтов отключена администрацией
		<?php endif; ?>
	</div>
</div>


<div class="note">
	<div class="note-title">Перевод поинтов из игрового аккаунта</div>
	<div class="note-body">
		<?php $formRe=$this->beginWidget('CActiveForm'); echo CHtml::errorSummary($retrieve); echo Power::message('message-retrieve'); ?>
		<div class="table">
			<div class="row">
				<div class="w250"><?php echo $formRe->dropDownList($retrieve, 'accountId', Power::getUserAccounts(), array('empty' => '-- Выберите аккаунт --', 'class'=>' w180')); ?></div>
				<div><?php echo $formRe->label($retrieve, 'sum')?></div>
				<div class="sh10 w200"><?php echo $formRe->textField($retrieve, 'sum', array('class'=>'text w90')); ?></div>
				<div><?php echo CHtml::submitButton('Перевести', array('class'=>'button')); ?></div>
			</div>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>
