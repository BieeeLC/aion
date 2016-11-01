<?php $this->pageTitle = 'Бонусы за голосования в рейтингах'; ?>


<script>
	$('body').on('click','#aiontopinfo, #l2topru, #mmotopru', function() {
		var e = $(this);
		var id = e.attr('id');
		if (id == 'aiontopinfo') var url = '<?php echo Power::url('vote/getaiontopinfovotes'); ?>';
		else if (id == 'l2topru') var url = '<?php echo Power::url('vote/getl2topruvotes'); ?>';
		else if (id == 'mmotopru') var url = '<?php echo Power::url('vote/getmmotopruvotes'); ?>';
		$.ajax({
			url: url,
			type: "POST",
			data:  {YII_CSRF_TOKEN: "<?php echo Yii::app()->request->csrfToken; ?>"},
			dataType: "json",
			cache: false,
			async: true,
			beforeSend: function() {
				e.html('Загрузка...');
				e.attr({disabled: true});
			},
			success: function(data) {
				e.html('Получить бонус');
				e.attr({disabled: false});
				$('#'+id+'-status').html('Найдено голосов: <b>'+data.votes+'</b>. Зачислено поинтов: <b>'+data.sum+'</b>');
			},
			error: function(data) {
				e.html('Получить бонус');
				e.attr({disabled: false});
				$('#'+id+'-status').html('Ошибка '+data.status+': '+data.statusText);
			}
		});
	});
</script>


<div class="note">
	<div class="note-title">Бонусы за голосования в рейтингах</div>
	<div class="note-body">

		<?php if ($config['aiontopinfo_link']) : ?>
		<div class="rating-block">
			<div class="rating-ico"><img src="<?php echo Power::url('images/scr_aiontopinfo.jpg'); ?>"></div>
			<div class="rating-name">Aion-Top.info</div>
		</div>
		<div class="rating-info-bg">
			<div class="rating-info">
				<ul class="rating-stats">
					<li>Всего голосов: <?php echo $model['AIONTOPINFO']['count']; ?></li>
					<li>Последний голос: <?php echo Power::date($model['AIONTOPINFO']['date']); ?></li>
					<li>Последнее зачисление: <?php echo Power::date($model['AIONTOPINFO']['completed']); ?></li>
				</ul>
				<div id="aiontopinfo-status" class="rating-status">Бонус еще не зачислен</div>
				<button id="aiontopinfo" class="button">Получить бонус</button>
			</div>
		</div>
		<?php endif; ?>

		<?php if ($config['l2topru_link']) : ?>
		<div class="rating-block">
			<div class="rating-ico"><img src="<?php echo Power::url('images/scr_l2topru.jpg'); ?>"></div>
			<div class="rating-name">L2TOP.ru</div>
		</div>
		<div class="rating-info-bg">
			<div class="rating-info">
				<ul class="rating-stats">
					<li>Всего голосов: <?php echo $model['L2TOPRU']['count']; ?></li>
					<li>Последний голос: <?php echo Power::date($model['L2TOPRU']['date']); ?></li>
					<li>Последнее зачисление: <?php echo Power::date($model['L2TOPRU']['completed']); ?></li>
				</ul>
				<div id="l2topru-status" class="rating-status">Бонус еще не зачислен</div>
				<button id="l2topru" class="button">Получить бонус</button>
			</div>
		</div>
		<?php endif; ?>

		<?php if ($config['mmotopru_link']) : ?>
		<div class="rating-block">
			<div class="rating-ico"><img src="<?php echo Power::url('images/scr_mmotopru.jpg'); ?>"></div>
			<div class="rating-name">MMOTOP.ru</div>
		</div>
		<div class="rating-info-bg">
			<div class="rating-info">
				<ul class="rating-stats">
					<li>Всего голосов: <?php echo $model['MMOTOPRU']['count']; ?></li>
					<li>Последний голос: <?php echo Power::date($model['MMOTOPRU']['date']); ?></li>
					<li>Последнее зачисление: <?php echo Power::date($model['MMOTOPRU']['completed']); ?></li>
				</ul>
				<div id="mmotopru-status" class="rating-status">Бонус еще не зачислен</div>
				<button id="mmotopru" class="button">Получить бонус</button>
			</div>
		</div>
		<?php endif; ?>
		
	</div>
</div>
