<?php $this->setPageTitle('Отчеты'); ?>

<div class="note">
	<div class="note-title">Отчеты</div>
	<div class="note-body">
		<div class="mb10">
			<?php echo CHtml::ajaxLink('Авторизация', CController::createUrl('logs/viewauthlogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
			<?php echo CHtml::ajaxLink('Пополнение баланса', CController::createUrl('logs/viewpaymentslogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
			<?php echo CHtml::ajaxLink('Передача поинтов', CController::createUrl('logs/viewtransferlogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
			<?php echo CHtml::ajaxLink('Покупки в веб-шопе', CController::createUrl('logs/viewwebshoplogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
		</div>
		<div>
			<?php echo CHtml::ajaxLink('Покупка премиумов', CController::createUrl('logs/viewmembershiplogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
			<?php echo CHtml::ajaxLink('Голосование в топах', CController::createUrl('logs/viewvoteslogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
			<?php echo CHtml::ajaxLink('Регистрации рефералов', CController::createUrl('logs/viewreferralslogs/'), array('update'=>'#logs-content'), array('class'=>'button')); ?>
		</div>
	</div>
</div>

<div id="logs-content"></div>