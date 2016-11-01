<?php

	$this->setPageTitle( 'Прохождения квестов' );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">Прохождения квестов</div>
		<div class="note-body">
			<table class="table">
				<tr>
					<th>Персонаж</th>
					<th>ID Квеста</th>
					<th>Прохождений</th>
				</tr>
				';
	foreach ($model as $data ) {

		
		echo '					<tr>
						<td><a href="';
		echo Power::url( 'admin/player/edit', $data['player_id'] );
		echo '">';
		echo $data['name'];
		echo '</a></td>
						<td>';
		echo $data['quest_id'];
		echo '</td>
						<td>';
		echo $data['complete_count'];
		echo '</td>
					</tr>
				';
	}

	echo '			</table>
		</div>
	</div>
</div>';
?>