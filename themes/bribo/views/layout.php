<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title><?php echo Power::title($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Power::url('images/favicon.png'); ?>" type="image/x-icon" />
	
	<!-- Styles -->
	<link rel="stylesheet" href="<?php echo Power::theme('css/style.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo Power::theme('css/widget.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo Power::theme('css/modules.css'); ?>" type="text/css" />
	
	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo Power::url('js/jquery-2.0.2.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo Power::url('js/datatables-1.9.4/jquery.dataTables.min.js'); ?>"></script>

	<!-- PowerWeb JS -->
	<script type="text/javascript" src="<?php echo Power::url('js/modules.js'); ?>"></script>
	<script type="text/javascript" src="http://aiona.net/js/tooltip/tooltip.js"></script>
</head>

<body>
	<!-- Navbar -->
	<div id="navbar" class="navbar">
		<ul class="nav">
			<li class="leaf"><a href="<?php echo Power::url(); ?>">Início</a></li>
			<li class="leaf"><a href="<?php echo Power::url('top/online'); ?>">Jogadores Online</a></li>
			<li class="leaf"><a href="<?php echo Power::url('top/players'); ?>">Top Jogadores</a></li>
			<li class="leaf"><a href="<?php echo Power::url('top/legions'); ?>">Top Legiões</a></li>
			<!-- <li class="leaf"><a href="<?php echo Power::url('siege'); ?>">Карта осад</a></li> -->
			<li class="leaf"><a href="<?php echo Power::url('stats'); ?>">Estatística</a></li>
			<li class="leaf"><a href="#">Fórum</a></li>
		</ul>
	</div>
	<!-- End Navbar -->

	<!-- Logo -->

	<div class="cont_logo">

	<div style="float:left; width:265px; height:100%;">
	<div class="start">
            	<a href="#" style="display: block;height: 100%;"></a>
        </div>
	</div>

		<div id="logo">
			<a href="<?php echo Power::url(); ?>" style="display: block;height: 100%;"></a>
		</div>

		<div style="float:left; width:265px; height:100%;">


			<div class="onlinebox">
				
				<!-- FACEBOOK -->		
				
				
			</div>
<!--
		 <div style="float:left; margin:4px 0px 0px 62px;">
        		<img border="0" width="22" alt="Техническая поддержка" title="Skype Технической поддержки" src="files/Skype.png">
        	</div>
		<div style="float:left; margin:6px 0px 0px 3px;font-weight: bold;font-size: 14px;">Welcome</div> 

		<div class="howtostart">
            		<a href="#" style="display: block;height: 100%;"></a>
        	</div> 
			
			-->


		</div>
	</div>

	<!-- End Logo -->


	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Content -->
		<div id="content">
	 <?php $this->widget('application.components.widgetTop', array('onlyMain'=>true, 'limit'=>10, 'order'=>'daily_kill DESC, weekly_kill DESC')); ?>
			<?php echo $content; ?>
		</div>
		<!-- End Content -->

		<!-- Sidebar -->
		<div id="sidebar">

			<!-- <div class="play">
				<div class="play-button">
					<div class="play-text">
						<a href="#">Скачать клиент</a>
					</div>
					<div class="play-text-small">
						<a href="#">Скачать лаунчер</a>
					</div>
				</div>
			</div> -->

			<div class="playy">
				<div class="playy-button">
					<a href="#" style="display: block;height: 100%;"></a>
				</div>
			</div>

			<div class="menu">
				<div class="menu-title"><li>Conta</li></div>
				<div class="menu-body">
					<?php if (Power::isGuest()): ?>
						<ul class="list">
							<li><a href="<?php echo Power::url('user/login'); ?>">Painel de Controle</a></li>
							<li><a href="<?php echo Power::url('user/registration'); ?>">Cadastrar-se</a></li>
							<li><a href="<?php echo Power::url('user/resetpassword'); ?>">Recuperar Senha</a></li>
							<li><a href="<?php echo Power::url('user/activation'); ?>">Reativar Conta</a></li>
						</ul>
					<?php else: ?>
						<ul class="list">
						<?php if (Power::isAdmin()): ?><li><a href="<?php echo Power::url('admin'); ?>">Админцентр</a></li><?php endif; ?>
							<li><a href="<?php echo Power::url('user'); ?>">Профиль (<b><?php echo Power::userName(); ?></b>)</a></li>
							<li><a href="<?php echo Power::url('account'); ?>">Игровые аккаунты</a></li>
							<li><a href="<?php echo Power::url('balance'); ?>">Управление балансом</a></li>
							<li><a href="<?php echo Power::url('webshop'); ?>">Веб-шоп</a></li>
							<li><a href="<?php echo Power::url('vote'); ?>">Бонусы за голосования</a></li>
							<li><a href="<?php echo Power::url('referrals'); ?>">Бонусы за рефералов</a></li>
							<li><a href="<?php echo Power::url('userbar'); ?>">Генератор юзербаров</a></li>
							<li><a href="<?php echo Power::url('logs'); ?>">Просмотр отчетов</a></li>
							<li><a href="<?php echo Power::url('user/settings'); ?>">Настройки</a></li>
							<li><a href="<?php echo Power::url('user/logout'); ?>">Выход</a></li>
						</ul>
					<?php endif; ?>
				</div>
			</div>

			<div class="menu">
				<div class="menu-title"><li>Menu</li></div>
				<div class="menu-body">
					<ul class="list">
						<li><a href="<?php echo Power::url(); ?>">Início</a></li>
						<li><a href="<?php echo Power::url('top/online'); ?>">Jogadores Online</a></li>
						<li><a href="<?php echo Power::url('top/players'); ?>">Top Jogadores</a></li>
						<li><a href="<?php echo Power::url('top/legions'); ?>">Top Legiões</a></li>
						<li><a href="<?php echo Power::url('siege'); ?>">Siege</a></li>
						<li><a href="<?php echo Power::url('player/search'); ?>">Procurar Jogador</a></li>
						<li><a href="<?php echo Power::url('droplist'); ?>">Droplist</a></li>
						<li><a href="<?php echo Power::url('broker'); ?>">Leilão</a></li>
						<li><a href="<?php echo Power::url('stats'); ?>">Estatísticas</a></li>
					</ul>
				</div>
			</div>


			<div class="menu">
				<div class="menu-title"><li>Servidor</li></div>
				<div class="menu-body">
					<ul class="list">
						<li><?php $this->widget('application.components.widgetServerStatus'); ?></li>
						<li>Jogadores Online: <b><?php echo Status::online('all'); ?></b></li>
						<li>Asmodians Online: <b><?php echo Status::online('asmo'); ?></b></li>
						<li>Elyos Online: <b><?php echo Status::online('ely'); ?></b></li>
					</ul>
				</div>
			</div>

			<div class="menu">
				<div class="menu-title"><li>Votar</li></div>
				<div class="menu-body">
					<div class="voting-banner">
						<a href="#"><img src="<?php echo Power::url('images/banner_mmotop.png'); ?>" /></a>
						<div class="clear"></div>
					</div>
					<div class="voting-info">Ao votar é necessário especificar <b>o seu usuário</b></div>
				</div>
			</div>

		</div>
		<!-- End Sidebar -->

		<div class="clear"></div>
	</div>
	<!-- End Wrapper -->

	<!-- Footer -->
	<div id="footer" class="wrapper">
		<div class="footer-body">
			<div class="mt10"><?php echo Power::copyright(); ?></div>
			<div class="mt10">Todos os direitos reservados: <a href="http://aiongate.com" target="_blank">aiongate.com</a></div>
		</div>
	</div>
	<!-- End Footer -->
	<div id="tooltip-title"></div>
</body>
</html>