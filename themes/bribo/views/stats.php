<?php $this->setPageTitle('Статистика сервера'); ?>

<script type="text/javascript" src="<?php echo Power::url('js/highcharts-3.0.4/highcharts.js'); ?>"></script>
<script>
	$(function () {
		$('#stat-race').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				margin: [30, 20, 50, 20],
			},
			title: {text: 'Соотношение рас'},
			tooltip: {
				headerFormat: ' <span style="font-size: 11px">{point.key}: </span>',
				pointFormat: '<b>{point.y}</b> ({point.percentage:.1f}%)',
				style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textAlign: 'center', padding: '10px'}
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {enabled: false},
					showInLegend: true
				}
			},
			series: [{
				type: 'pie',
				name: 'Соотношение рас',
				data: [{
					name: 'Асмодиане',
					color: '#8BBC21',
					y: <?php echo $model['asmo']; ?>
				}, {
					name: 'Элийцы',
					color: '#2F7ED8',
					y: <?php echo $model['ely']; ?>
				}]
			}],
			credits: {enabled: false}
		});

		$('#stat-legion').highcharts({
			chart: {
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false,
				margin: [30, 20, 50, 20],
			},
			title: {text: 'Соотношение легионов'},
			tooltip: {
				headerFormat: ' <span style="font-size: 11px">{point.key}: </span>',
				pointFormat: '<b>{point.y}</b> ({point.percentage:.1f}%)',
				style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textAlign: 'center', padding: '10px'}
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {enabled: false},
					showInLegend: true
				}
			},
			series: [{
				type: 'pie',
				name: 'Соотношение легионов',
				data: [{
					name: 'Асмодиане',
					color: '#8BBC21',
					y: <?php echo $model['leg_asmo']; ?>
				}, {
					name: 'Элийцы',
					color: '#2F7ED8',
					y: <?php echo $model['leg_ely']; ?>
				}],
			}],
			credits: {enabled: false}
		});

		$('#stat-class').highcharts({
			chart: {
				type: 'column',
				margin: [50, 20, 80, 50]
			},
			title: {text: 'Статистика по классам'},
			xAxis: {
				categories: ['Гладиатор', 'Страж', 'Убийца', 'Стрелок', 'Волшебник', 'Заклинатель', 'Целитель', 'Чародей', 'Бард', 'Снайпер'],
				labels: {
					rotation: -45,
					align: 'right',
					style: {fontSize: '11px', fontFamily: 'Open Sans, Verdana, sans-serif'}
				}
			},
			yAxis: {title: false},
			legend: {enabled: false},
			tooltip: {
				headerFormat: ' <span style="font-size: 11px">{point.key}: </span>',
				pointFormat: '<b>{point.y}</b>',
				style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textAlign: 'center', padding: '10px'}
			},
			series: [{
				name: 'Статистика по классам',
				data: [<?php echo $model['GLADIATOR']; ?>, <?php echo $model['TEMPLAR']; ?>, <?php echo $model['ASSASSIN']; ?>, <?php echo $model['RANGER']; ?>, <?php echo $model['SORCERER']; ?>,
						<?php echo $model['SPIRIT_MASTER']; ?>, <?php echo $model['CLERIC']; ?>, <?php echo $model['CHANTER']; ?>, <?php echo $model['BARD']; ?>, <?php echo $model['GUNNER']; ?>],
				dataLabels: {
					enabled: true,
					rotation: -90,
					color: '#FFFFFF',
					align: 'right',
					x: 4,
					y: 10,
					style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textShadow: '0 0 3px black'}
				}
			}],
			credits: {enabled: false}
		});

		$('#stat-level').highcharts({
			chart: {
				type: 'column',
				margin: [50, 20, 30, 50]
			},
			title: {text: 'Статистика по уровням'},
			xAxis: {
				categories: ['1-9', '10-20', '21-30', '31-40', '41-50', '51-55', '56-60', '61-65'],
				labels: {
					rotation: 0,
					align: 'center',
					style: {fontSize: '11px', fontFamily: 'Open Sans, Verdana, sans-serif'}
				}
			},
			yAxis: {title: false},
			legend: {enabled: false},
			tooltip: {
				headerFormat: ' <span style="font-size: 11px">{point.key}: </span>',
				pointFormat: '<b>{point.y}</b>',
				style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textAlign: 'center', padding: '10px'}
			},
			series: [{
				name: 'Статистика по классам',
				data: [<?php echo $model['9']; ?>, <?php echo $model['20']; ?>, <?php echo $model['30']; ?>, <?php echo $model['40']; ?>,
						<?php echo $model['50']; ?>, <?php echo $model['55']; ?>, <?php echo $model['60']; ?>, <?php echo $model['65']; ?>],
				dataLabels: {
					enabled: true,
					rotation: -90,
					color: '#FFFFFF',
					align: 'right',
					x: 4,
					y: 10,
					style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textShadow: '0 0 3px black'}
				}
			}],
			credits: {enabled: false}
		});

		$('#stat-acc').highcharts({
			chart: {type: 'bar'},
			title: {text: 'Общая статистика'},
			xAxis: {
				categories: ['Аккаунты', 'Персонажи'],
				title: {text: null}
			},
			yAxis: {title: false},
			tooltip: {
				headerFormat: ' <span style="font-size: 11px">{point.key}: </span>',
				pointFormat: '<b>{point.y}</b>',
				style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textAlign: 'center', padding: '10px'}
			},
			legend: {enabled: false},
				series: [{
				name: 'Общая статистика',
				data: [{
					name: 'Аккаунты',
						color: '#8BBC21',
						y: <?php echo Status::accounts(); ?>
					}, {
						name: 'Персонажи',
						color: '#2F7ED8',
						y: <?php echo $model['all']; ?>
					}],
					dataLabels: {
						enabled: true,
						rotation: 0,
						color: '#FFFFFF',
						align: 'right',
						style: {fontSize: '12px', fontFamily: 'Verdana, sans-serif', textShadow: '0 0 3px black'}
					}
				}],
			credits: {enabled: false}
		});
	});
</script>

<div class="note">
	<div class="note-title">Статистика сервера</div>
	<div class="note-body">
		<div id="stat-race" style="width: 330px; height: 300px; float: left;"></div>
		<div id="stat-legion" style="width: 330px; height: 300px; float: right;"></div>
		<div class="line"></div>
		<div id="stat-class"></div>
		<div class="line"></div>
		<div id="stat-level"></div>
		<div class="line"></div>
		<div id="stat-acc" style="height: 200px;"></div>
	</div>
</div>