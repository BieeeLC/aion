<?php

	$this->setPageTitle( 'Логи авторизации' );
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
	echo Power::url( 'admin/log/auth' );
	echo '\',
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[5, "desc"]],
			"oLanguage": {"sUrl": "';
	echo Power::url( 'js/datatables-1.9.4/ru.txt' );
	echo '"},
			"aoColumnDefs": [
				{"aTargets":[0], "mData":"login"},
				{"aTargets":[1], "mData":"ip_address"},
				{"aTargets":[2], "mData":"user_agent"},
				{"aTargets":[3], "mData":"type"},
				{"aTargets":[4], "mData":"status"},
				{"aTargets":[5], "mData":"date", "bSearchable":false}
			]
		});
	});
</script>


<div class="note-border">
	<div class="note">
		<div class="note-title">';
	echo 'Логи авторизации</div>
		<div class="note-body">
			<table id="logs" class="table">
				<thead>
				<tr>
					<th>Логин</th>
					<th>IP адрес</th>
					<th>Браузер</th>
					<th width="100px">Тип</th>
					<th width="120px">Статус</th>
					<th width="120px">Дата</th>
				</tr>
				</thead>
			</table>
		</div>
	</div>
</div>';
?>