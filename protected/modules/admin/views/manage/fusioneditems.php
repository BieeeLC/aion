<?php

	$this->setPageTitle( 'Список сдвоенных вещей' );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">Список сдвоенных вещей</div>
		<div class="note-body">
			<table class="table">
				<tr>
					<th>Персонаж</th>
					<th>Уникальный ID</th>
					<th>ID вещи</th>
					<th>Сдвоенно</th>
					<th width="100px">Удалить</th>
				</tr>
				';
	foreach ($model as $data) {
		echo '					<tr>
						<td><a href="';
		echo Power::url( 'admin/player/edit', $data['item_owner'] );
		echo '">';
		echo $data['name'];
		echo '</a></td>
						<td>';
		echo $data['item_unique_id'];
		echo '</td>
						<td>';
		echo $data['item_id'];
		echo '</td>
						<td>';
		echo $data['fusioned_item'];
		echo '</td>
						<td>';
		echo '<s';
		echo 'pan url="';
		echo Power::url( 'admin/manage/deleteitem', $data['item_unique_id'] );
		echo '" confirm="Удалить вещь" class="ajaxbutton" title="Удалить"><i class="btn-delete"></i></span></td>
					</tr>
				';
	}

	echo '			</table>
		</div>
	</div>
</div>';
?>