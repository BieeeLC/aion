<?php

	$this->setPageTitle( 'Список аккаунтов' );
	echo '

';
	echo '<s';
	echo 'cript type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var oTable = $(\'#accounts\').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDeferRender": true,
			"bLengthChange": true,
			"sAjaxSource": \'';
	echo Power::url( 'admin/account' );
	echo '\',
			"fnServerData": function ( sSource, aoData, fnCallback ) {
				$.getJSON( sSource, aoData, function (json) {
					fnCallback(json);
					tooltips();
				} );
			},
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[ 0, "asc" ]],
			"oLanguage": {"sUrl": "';
	echo Power::url( 'js/datatables-1.9.4/ru.txt' );
	echo '"},
			"aoColumnDefs": [
				{"aTargets":[0], "mData":"name"},
				{"aTargets":[1], "mData":"login"},
				{"aTargets":[2], "mData":"access_level", "bSearchable":false},
				{"aTargets":[3], "mData":"last_ip"},
				{"aTargets":[4], "mData":"money", "bSearchable":false}
			]
		});
	});
</script>


<div class="note-border">
	<div class="note">
		<div class="note-title">Список акк�';
	echo '�унтов</div>
		<div class="note-body">
			<table id="accounts" class="table">
				<thead>
				<tr>
					<th width="214px">Аккаунт</th>
					<th width="214px">Пользователь</th>
					<th width="100px">Группа</th>
					<th width="180px">Последний IP</th>
					<th width="100px">Баланс</th>
				</tr>
				</thead>
			</table>
		</div>
	</div>
</div>';
?>