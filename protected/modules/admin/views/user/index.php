<?php

	$this->setPageTitle( 'Список пользователей' );
	echo '

';
	echo '<s';
	echo 'cript type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var oTable = $(\'#users\').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDeferRender": true,
			"bLengthChange": true,
			"sAjaxSource": \'';
	echo Power::url( 'admin/user' );
	echo '\',
			"fnServerData": function ( sSource, aoData, fnCallback ) {
				$.getJSON( sSource, aoData, function (json) {
					fnCallback(json);
					tooltips();
				} );
			},
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[5, "desc"]],
			"oLanguage": {"sUrl": "';
	echo Power::url( 'js/datatables-1.9.4/ru.txt' );
	echo '"},
			"aoColumnDefs": [
				{"aTargets":[0], "mData":"login"},
				{"aTargets":[1], "mData":"email"},
				{"aTargets":[2], "mData":"group_id", "bSearchable":false},
				{"aTargets":[3], "mData":"ip_address"},
				{"aTargets":[4], "mData":"money", "bSearchable":false},
				{"aTargets":[5], "mData":"created", "bSearchable":false}
			]
		});
	});
</script>


<div class="note-border">
	<d';
	echo 'iv class="note">
		<div class="note-title">Список пользователей</div>
		<div class="note-body">
			<table id="users" class="table">
				<thead>
				<tr>
					<th width="150px">Имя пользователя</th>
					<th width="150px">E-mail адрес</th>
					<th width="100px">Группа</th>
					<th width="150px">IP адрес</th>
					<th width="100px">Баланс</th>
			';
	echo '		<th width="150px">Регистрация</th>
				</tr>
				</thead>
			</table>
		</div>
	</div>
</div>';
?>