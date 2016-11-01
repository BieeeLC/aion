<?php

	echo '<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title>';
	echo Power::title( $this->pageTitle );
	echo '</title>
	<link rel="shortcut icon" href="';
	echo Power::url( 'images/favicon.png' );
	echo '" type="image/x-icon" />
	<link rel="stylesheet" href="';
	echo Power::url( 'themes/admin/style.css' );
	echo '" type="text/css" />
	<link rel="stylesheet" href="';
	echo Power::theme( 'css/modules.css' );
	echo '" type="text/css" />
	';
	echo '<s';
	echo 'cript type="text/javascript" src="';
	echo Power::url( 'js/jquery-1.8.3.min.js' );
	echo '"></script>
	';
	echo '<s';
	echo 'cript type="text/javascript" src="';
	echo Power::url( 'js/datatables-1.9.4/jquery.dataTables.min.js' );
	echo '"></script>
	';
	echo '<s';
	echo 'cript type="text/javascript" src="';
	echo Power::url( 'js/modules.js' );
	echo '"></script>
	';
	echo '<s';
	echo 'cript type="text/javascript" src="';
	echo Power::url( 'js/tooltip.js' );
	echo '"></script>
	';
	echo '<s';
	echo 'cript type="text/javascript" src="http://aiona.net/js/tooltip.js"></script>
	';
	echo '<s';
	echo 'cript>
		$(document).ready(function() {
			// Active link TODO
			$.each($(".navigation>li>ul>li>a"), function() {
				var r = location.href.split(\'index\')[0].split(\'?\')[0].split(\'#\')[0].split(\'edit\')[0].split(\'view\')[0];
				if (this.href == r) {
					var el = $(this);
					var li = el.parent().parent().parent();
					var ul = el.parent().parent();
					el.addClass(\'current\');
					li.a';
	echo 'ddClass(\'active\');
					ul.show();
				}
			});
			$.each($(".navigation li a"), function() {
				var u = location.href.split(\'index\')[0].split(\'?\')[0].split(\'#\')[0];
				if (this.href == u) $(this).parent().addClass(\'active\');
			});
			 // Navigation sub-menu
			$(".navigation li a.expand").click(function(){
				var ul = $(this).next();
				if (ul.css(\'display\') === \'block\') ul.hide(1';
	echo '00);
				else ul.show(100);
			});
		});
	</script>
</head>


<body>

	<div id="header">
		header
	</div>

	<div id="wrapper">
		<div id="sidebar">
			<ul class="navigation">
				<!-- Главная -->
				<li><a href="';
	echo Power::url(  );
	echo '">Главная страница</a></li>
				<li><a href="';
	echo Power::url( 'admin' );
	echo '">Админцентр</a></li>
				
				<!-- Новости -->
				<li>
					<a href="#" class="expand">Управление новостями</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/news/add' );
	echo '">Добавить новость</a></li>
						<li><a href="';
	echo Power::url( 'admin/news' );
	echo '">Список новостей</a></li>
						<li><a href="';
	echo Power::url( 'admin/news/category' );
	echo '">Категории новостей</a></li>
					</ul>
				</li>

				<!-- Страницы -->
				<li>
					<a href="#" class="expand">Управление страницами</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/page/add' );
	echo '">Добавить страницу</a></li>
						<li><a href="';
	echo Power::url( 'admin/page' );
	echo '">Список страниц</a></li>
					</ul>
				</li>

				<!-- Аккаунты -->
				<li>
					<a href="#" class="expand">Аккаунты</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/user' );
	echo '">Список пользователей</a></li>
						<li><a href="';
	echo Power::url( 'admin/account' );
	echo '">Список аккаунтов</a></li>
						<li><a href="';
	echo Power::url( 'admin/player' );
	echo '">Список персонажей</a></li>
						<li><a href="';
	echo Power::url( 'admin/legion' );
	echo '">Список легионов</a></li>
					</ul>
				</li>

				<!-- Вебшоп -->
				<li>
					<a href="#" class="expand">Вебшоп</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/webshop/add' );
	echo '">Добавить вещь</a></li>
						<li><a href="';
	echo Power::url( 'admin/webshop' );
	echo '">Список вещей</a></li>
						<li><a href="';
	echo Power::url( 'admin/webshop/category' );
	echo '">Категории вебшопа</a></li>
						<li><a href="';
	echo Power::url( 'admin/webshop/membership' );
	echo '">Премиум аккаунты</a></li>
					</ul>
				</li>

				<!-- Логи -->
				<li>
					<a href="#" class="expand">Просмотр отчетов</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/log/payments' );
	echo '">Пополнение баланса</a></li>
						<li><a href="';
	echo Power::url( 'admin/log/webshop' );
	echo '">Покупка вещей</a></li>
						<li><a href="';
	echo Power::url( 'admin/log/membership' );
	echo '">Покупка премиумов</a></li>
						<li><a href="';
	echo Power::url( 'admin/log/votes' );
	echo '">Голосования в рейтингах</a></li>
						<li><a href="';
	echo Power::url( 'admin/log/transferpoints' );
	echo '">Передача поинтов</a></li>
						<li><a href="';
	echo Power::url( 'admin/log/referrals' );
	echo '">Рефералы</a></li>
						<li><a href="';
	echo Power::url( 'admin/log/auth' );
	echo '">Авторизации</a></li>
					</ul>
				</li>

				<!-- Обслуживание -->
				<li>
					<a href="#" class="expand">Обслуживание</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/manage/fusioneditems' );
	echo '">Сдвоенные вещи</a></li>
						<li><a href="';
	echo Power::url( 'admin/manage/questcount' );
	echo '">Прохождения квестов</a></li>
					</ul>
				</li>

				<!-- Игровая почта -->
				<li>
					<a href="#" class="expand">Игровая почта</a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/mail' );
	echo '">Список почты</a></li>
						<li><a href="';
	echo Power::url( 'admin/mail/send' );
	echo '">Отправить почту</a></li>
					</ul>
				</li>

				<!-- Настройки -->
				<li>
					<a href="#" class="expand">Настройки</span></a>
					<ul>
						<li><a href="';
	echo Power::url( 'admin/settings' );
	echo '">Настройка обвязки</a></li>
						<li><a href="';
	echo Power::url( 'admin/vote/settings' );
	echo '">Настройка рейтингов</a></li>
						<li><a href="';
	echo Power::url( 'admin/robokassa/settings' );
	echo '">Настройка Робокассы</a></li>
						<li><a href="';
	echo Power::url( 'admin/interkassa/settings' );
	echo '">Настройка Интеркассы</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="content">
			';

	if (Yii::app(  )->user->hasFlash( 'message' )) {
		echo Yii::app(  )->user->getFlash( 'message' );
	}

	echo '			';
	echo $content;
	echo '		</div>
	</div>

	<div class="clear"></div>

	<div id="footer">
		<div class="profile">';
	echo Power::profile(  );
	echo '</div>
		<div class="copyright">';
	echo Power::copyright(  );
	echo '</div>
	</div>
</body>
</html>
';
?>