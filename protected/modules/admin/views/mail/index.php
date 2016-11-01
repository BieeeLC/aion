<?php

	$this->setPageTitle( 'Список почты' );
	echo '

';
	echo '<s';
	echo 'cript type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var oTable = $(\'#mail\').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDeferRender": true,
			"bLengthChange": true,
			"fnServerData": function (sSource, aoData, fnCallback) {
				$.getJSON(sSource, aoData, function (json) {
					fnCallback(json);
					tooltips();
					ajaxButton();
					';
	echo 'aionLink();
				});
			},
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[7, "desc"]],
			"oLanguage": {"sUrl": "';
	echo Power::url( 'js/datatables-1.9.4/ru.txt' );
	echo '"},
			"aoColumnDefs": [
				{"aTargets":[0], "mData":"sender_name"},
				{"aTargets":[1], "mData":"recipient_name"},
				{"aTargets":[2], "mData": "mail_title", "mRender": function (data, type, full) {return \'<img src="';
	echo Power::url( 'images/mail.png' );
	echo '" title="\'+data+\'" />\';}},
				{"aTargets":[3], "mData": "mail_message", "mRender": function (data, type, full) {return \'<img src="';
	echo Power::url( 'images/mail.png' );
	echo '" title="\'+data+\'" />\';}},
				{"aTargets":[4], "mData":"item_id", "mRender": function (data, type, full) {return \'<a class="aion-icon" href="http://aiona.net/item/\'+data+\'">\'+data+\'</a>\';}},
				{"aTargets":[5], "mData":"item_count"},
				{"aTargets":[6], "mData":"express", "bSearchable":false},
				{"aTargets":[7], "mData":"recieved_time", "bSearchable":false},
				//{"aTargets":[8], "mData":';
	echo '"mail_unique_id", "bSearchable":false, "mRender": function (data, type, full) {return \'';
	echo '<s';
	echo 'pan url="';
	echo Power::url( 'admin/mail/delete' );
	echo '"\'+data+\' confirm="Удалить письмо" class="ajaxbutton" title="Удалить"><i class="btn-delete"></i></span>\';}}
			]
		});
	});
</script>


<div class="note-border">
	<div class="note">
		<div class="note-title">Список почты</div>
		<div class="note-body">
			<table id="mail" class="table">
				<thead>
				<tr>
					<th width="170px">Отправитель</th>
					<th ';
	echo 'width="170px">Получатель</th>
					<th width="50px">Тема</th>
					<th width="50px">Сообщение</th>
					<th width="50px">Вещь</th>
					<th width="60px">Кол-во</th>
					<th width="60px">Тип</th>
					<th width="150px">Отправлено</th>
<!--					<th width="50px">Удалить</th>-->
				</tr>
				</thead>
			</table>
		</div>
	</div>
</div>';
?>