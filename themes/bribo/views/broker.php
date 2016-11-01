<?php $this->setPageTitle('Аукцион'); ?>

<div class="note">
	<div class="note-title">Аукцион</div>
	<div class="note-body">
		<table class="table">
			<tr>
				<th>Товар</th>
				<th width="90px">Цена</th>
				<th>Кол-во</th>
				<th width="90px">Продавец</th>
				<th>Раса</th>
				<th width="110px">Истекает</th>
			</tr>
			<?php foreach ($model as $data) : ?>
			<tr class="center">
				<td><?php echo Adb::url('item', $data['item_id'], 3); ?></td>
				<td><?php echo number_format($data['price'],0,' ',' '); ?></td>
				<td><?php echo $data['item_count']; ?></td>
				<td><a href="<?php echo Power::url('player', $data['seller']); ?>"><?php echo $data['seller']; ?></a></td>
				<td><?php echo Info::getRaceIco($data['broker_race']); ?></td>
				<td><?php echo Power::date($data['expire_time'], 'd.MM.yyyy, HH:mm'); ?></td>
			</tr>
			<?php endforeach ?>
		</table>
		<div class="pages"><?php Config::pages(); ?></div>
	</div>
</div>

