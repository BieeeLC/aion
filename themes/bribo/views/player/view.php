<?php $this->setPageTitle('Информация о персонаже '.$player['name']); ?>


<?php if (Power::isAdmin()): ?>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			var oTable = $('#player-inventory').dataTable({
				"bProcessing": true,
				"bServerSide": true,
				"sAjaxSource": '<?php echo Power::url('player/getPlayerInventory', $player['id']); ?>',
				"bDeferRender": true,
				"bFilter": false,
				"bLengthChange": true,
				"fnServerData": function ( sSource, aoData, fnCallback ) {
					 $.getJSON( sSource, aoData, function (json) {
						fnCallback(json);
						aionLink();
					} );
				 },
				"sPaginationType": "full_numbers",
				'iDisplayLength': 10,
				"aoColumns": [{ "mData": "item_id" }, { "mData": "item_count" }, { "mData": "item_location" }],
				"oLanguage": {"sUrl": "<?php echo Power::url('js/datatables-1.9.4/ru.txt'); ?>"},
				"aoColumnDefs": [
					{"aTargets": [0], "mData": "inventory", "mRender": function (data, type, full) {return '<a class="aion-icon-text" href="http://aiona.net/item/'+data+'">'+data+'</a>';}}
				]
			});
			var oTable2 = $('#player-mail').dataTable({
				"bProcessing": true,
				"bServerSide": true,
				"sAjaxSource": "<?php echo Power::url('player/getPlayerMail', $player['id']); ?>",
				"bDeferRender": true,
				"bFilter": false,
				"bLengthChange": true,
				"fnServerData": function ( sSource, aoData, fnCallback ) {
					$.getJSON( sSource, aoData, function (json) {
						fnCallback(json);
						tooltips();
					} );
				},
				"sPaginationType": "full_numbers",
				'iDisplayLength': 10,
				"aoColumns": [{"mData":"sender_name"}, {"mData":"mail_title"}, {"mData":"mail_message"}, {"mData":"item_id"},
					{"mData":"attached_kinah_count"}, {"mData":"express"}, {"mData":"recieved_time"}],
				"oLanguage": {"sUrl": "<?php echo Power::url('js/datatables-1.9.4/ru.txt'); ?>"},
				"aoColumnDefs": [
					{"aTargets": [0], "mData": "mail", "mRender": function (data, type, full) {return '<a href="<?php echo Power::url('player'); ?>'+data+'">'+data+'</a>';}},
					{"aTargets": [1], "mData": "mail", "mRender": function (data, type, full) {return '<img src="<?php echo Power::url('images/mail.png'); ?>" title="'+data+'" />';}},
					{"aTargets": [2], "mData": "mail", "mRender": function (data, type, full) {return '<img src="<?php echo Power::url('images/mail.png'); ?>" title="'+data+'" />';}},
					{"aTargets": [3], "mData": "mail", "mRender": function (data, type, full) {return '<a class="aion-icon" href="http://aiona.net/item/'+data+'">'+data+'</a>';}}
				]
			});
		});
	</script>
<?php endif; ?>


<div class="note">
	<div class="note-title"></div>
	<div class="note-body">
		<table class="table">
			<tr>
				<td rowspan="4" width="112px"><?php echo Info::getRaceGenderIco($player['race'], $player['gender']); ?></td>
				<td width="250px"><b><?php echo $player['name']; ?></b></td>
				<td width="200px"></td>
				<td width="200px"><?php echo Info::getLevel($player['exp']); ?> уровень</td>
			</tr>
			<tr>
				<td>Класс: <?php echo Info::getClassText($player['player_class']); ?></td>
				<td>AP: <?php echo number_format($player['ap'],0,' ',' '); ?></td>
				<td>HP: <?php echo $player['hp']; ?></td>
			</tr>
			<tr>
				<td>Раса: <?php echo Info::getRaceText($player['race']); ?></td>
				<td>Убийств: <?php echo $player['all_kill']; ?></td>
				<td>MP: <?php echo $player['mp']; ?></td>
			</tr>
		</table>
	</div>
</div>		


<div class="note half mr20">
	<div class="note-title">Статистика</div>
	<div class="note-body">	
		<table class="table tleft">
			<tr>
				<td width="150px">Статус</td>
				<td><?php echo Info::getOnlineIco($player['online']); ?></td>
			</tr>
			<tr>
				<td>Локация</td>
				<td>
					<?php if ($player['show_location'] == 1 OR Power::isAdmin()): ?><?php echo Adb::url('world', $player['world_id'], 2); ?>
					<?php else: ?>Скрыто<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Титул</td>
				<td><?php echo Adb::url('title', $player['title_id'], 2); ?></td>
			</tr>
			<tr>
				<td>Опыт</td>
				<td><?php echo number_format($player['exp'], 0,' ',' '); ?></td>
			</tr>
			<tr>
				<td>AP</td>
				<td>
					<span title="За все время"><?php echo number_format($player['ap'], 0,' ',' '); ?></span> /
					<span title="За неделю "><?php echo number_format($player['weekly_ap'], 0,' ',' '); ?></span> /
					<span title="За прошлый день"><?php echo number_format($player['daily_ap'], 0,' ',' '); ?></span>
				<td>
			</tr>
			<tr>
				<td>Убийств</td>
				<td title="Всего / За неделю / Вчера"><?php echo $player['all_kill']; ?> / <?php echo $player['weekly_kill']; ?> / <?php echo $player['daily_kill']; ?></td>
			</tr>
			<tr>
				<td>Ранг</td>
				<td><?php echo Info::getAbyssRankText($player['rank']); ?></td>
			</tr>
			<tr>
				<td>Легион</td>
				<td>
					<?php if ($player['legion_rank']): ?><a href="<?php echo Power::url('legion', $player['legion']); ?>"><?php echo $player['legion']; ?></a> (<?php echo Info::getLegionRankText($player['legion_rank']); ?>)
					<?php else: ?>Не состоит в легионе<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td>Дата создания</td>
				<td><?php echo Yii::app()->dateFormatter->format('dd.MM.y, HH:mm:ss', $player['creation_date']); ?></td>
			</tr>
			<tr>
				<td>Последний визит</td>
				<td><?php echo Yii::app()->dateFormatter->format('dd.MM.y, HH:mm:ss', $player['last_online']); ?></td>
			</tr>
		</table>
	</div>
</div>

<div class="note half">
	<div class="note-title">Экипировка</div>
	<div class="note-body">
			<?php if ($player['show_inventory'] == 1 OR Power::isAdmin()): ?>
				<div class="equip">
					<?php foreach ($equip as $data) echo Info::equip($data['item_id'], $data['slot']); ?>
				</div>
			<?php else: ?>Пользователь скрыл инвентарь<?php endif; ?>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>


<?php if (Power::isAdmin()): ?>
	<div class="note">
		<div class="note-title">Инвентарь игрока</div>
		<div class="note-body">
			<table id="player-inventory" class="table">
				<thead>
					<tr>
						<th>Вещь</th>
						<th width="100px">Кол-во</th>
						<th width="150px">Расположен</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
<?php endif; ?>

<?php if (Power::isAdmin()): ?>
	<div class="note">
		<div class="note-title">Почта игрока</div>
		<div class="note-body">
			<table id="player-mail" class="table">
				<thead>
					<tr>
						<th>Отправитель</th>
						<th>Тема</th>
						<th>Сообщение</th>
						<th>Вещь</th>
						<th>Кинары</th>
						<th>Экспресс</th>
						<th>Получено</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
<?php endif; ?>