<?php $this->setPageTitle('Jogadores Online'); ?>


<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var oTable = $('#top-players').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDeferRender": true,
			"bLengthChange": true,
			"bFilter": false,
			"bInfo": false,
			"sAjaxSource": '<?php echo Power::url('top/online'); ?>',
			"fnServerData": function ( sSource, aoData, fnCallback ) {
				$.getJSON( sSource, aoData, function (json) { 
					fnCallback(json);
					tooltips();
				} );
			},
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[ 0, "asc" ]],
			"aoColumns": [{"mData": "name"}, {"mData": "exp"}, {"mData": "ap"}, {"mData": "all_kill"}, {"mData": "race"}, {"mData": "player_class"}],
			"oLanguage": {"sUrl": "<?php echo Power::url('js/datatables-1.9.4/ru.txt'); ?>"},
			"aoColumnDefs": [
				{"aTargets": [0], "mRender": function (data, type, full) {return '<a href="<?php echo Power::url('player'); ?>'+data+'">'+data+'</a>';}}
			]
		});
	});
</script>


<div class="note">
	<div class="note-title">Jogadores Online</div>
	<div class="note-body">
		<table id="top-players" class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th width="80px">Nível</th>
					<th width="80px">AP</th>
					<th width="80px">Kills</th>
					<th width="80px">Raça</th>
					<th width="80px">Classe</th>
				</tr>
			</thead>
		</table>
	</div>
</div>