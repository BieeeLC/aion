<?php $this->setPageTitle('Top Legiões'); ?>


<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		var oTable = $('#top-players').dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDeferRender": true,
			"bLengthChange": true,
			"bFilter": false,
			"bInfo": false,
			"sAjaxSource": '<?php echo Power::url('top/legions'); ?>',
			"fnServerData": function ( sSource, aoData, fnCallback ) {
				$.getJSON( sSource, aoData, function (json) { 
					fnCallback(json);
					tooltips();
				} );
			},
			"sPaginationType": "full_numbers",
			"iDisplayLength": 50,
			"aaSorting": [[5, "DESC"]],
			"aoColumns": [{"mData": "name"}, {"mData": "race"}, {"mData": "legat"}, {"mData": "members_count"}, {"mData": "level"}, {"mData": "contribution_points"}],
			"oLanguage": {"sUrl": "<?php echo Power::url('js/datatables-1.9.4/ru.txt'); ?>"},
			"aoColumnDefs": [
				{"aTargets": [0], "mData": "inventory", "mRender": function (data, type, full) {return '<a href="<?php echo Power::url('legion'); ?>'+data+'">'+data+'</a>';}},
				{"aTargets": [2], "mData": "inventory", "mRender": function (data, type, full) {return '<a href="<?php echo Power::url('player'); ?>'+data+'">'+data+'</a>';}},
			],
		});
	});
</script>


<div class="note">
	<div class="note-title">Top Legiões</div>
	<div class="note-body">
		<table id="top-players" class="table">
			<thead>
				<tr>
					<th>Legião</th>
					<th width="95px">Raça</th>
					<th width="95px">Легат</th>
					<th width="95px">Jogadores</th>
					<th width="95px">Nível</th>
					<th width="95px">Очки</th>
				</tr>
			</thead>
		</table>
	</div>
</div>