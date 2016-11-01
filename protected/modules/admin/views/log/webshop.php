<?php

	$this->setPageTitle( 'Покупка вещей' );
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
	echo Power::url( 'admin/log/webshop' );
	echo '\',
			"fnServerData": function(sSource, aoData, fnCallback){
				$.getJSON(sSource, aoData, function(json){ 
					fnCallback(json);
					aionLink();
				});
			},
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[6, "desc"]],
			"oLanguage": {"sUrl": "';
	echo Power::url( 'js/datatables-1.9.4/ru.txt' );
	echo '"},
			"aoColumnDefs": [
				{"aTargets":[0], "mData":"login"},
				{"aTargets":[1], "mData":"account_name"},
				{"aTargets":[2], "mData":"name"},
				{"aTargets":[3], "mData":"item_id"},
				{"aTargets":[4], "mData":"quantity"},
				{"aTargets":[5], "mData":"price"},
				{"aTargets":[6], "mData":"date", "bSearchable":false}
			]
		});
	});
</script>


<div class="note-border">
	<div';
	echo ' class="note">
		<div class="note-title">Покупка вещей</div>
		<div class="note-body">
			<table id="logs" class="table">
				<thead>
				<tr>
					<th width="155px">Пользователь</th>
					<th width="155px">Аккаунт</th>
					<th width="155px">Персонаж</th>
					<th width="55px">Предмет</th>
					<th width="80px">Кол-во</th>
					<th width="80px">Цен�';
	echo '�</th>
					<th width="120px">Дата</th>
				</tr>
				</thead>
			</table>
		</div>
	</div>
</div>';
?>