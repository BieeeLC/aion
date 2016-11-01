<?php

	$this->setPageTitle( 'Голосования в рейтингах' );
	echo '

';
	echo '<s';
	echo 'cript type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var oTable = $(\'#logs\').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDeferRender": true,
			"bLengthChange": true,
			"sAjaxSource": \'';
	echo Power::url( 'admin/log/votes' );
	echo '\',
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[4, "desc"]],
			"oLanguage": {"sUrl": "';
	echo Power::url( 'js/datatables-1.9.4/ru.txt' );
	echo '"},
			"aoColumnDefs": [
				{"aTargets":[0], "mData":"rating"},
				{"aTargets":[1], "mData":"login"},
				{"aTargets":[2], "mData":"name"},
				{"aTargets":[3], "mData":"date", "bSearchable":false},
				{"aTargets":[4], "mData":"completed", "bSearchable":false}
			]
		});
	});
</script>


<div class="note-border">
	<div class="note">
		<div class="note-title">Голосования в';
	echo ' рейтингах</div>
		<div class="note-body">
			<table id="logs" class="table">
				<thead>
				<tr>
					<th width="170px">Рейтинг</th>
					<th width="170px">Пользователь</th>
					<th width="170px">Аккаунт</th>
					<th width="150px">Дата</th>
					<th width="150px">Дата</th>
				</tr>
				</thead>
			</table>
		</div>
	</div>
</div>';
?>