<?php

	$this->setPageTitle( 'Список новостей' );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">';
	echo $this->getPageTitle(  );
	echo '</div>
		<div class="note-body">
			<table class="table">
				<tr>
					<th>Заголовок</th>
					<th width="100px">Категория</th>
					<th width="100px">Автор</th>
					<th width="50px">Коммент.</th>
					<th width="150px">Дата</th>
					<th width="90px">Операции</th>
				</tr>
				';
	foreach ($model as $data) {
		echo '				<tr>
					<td class="tleft"><a href="';
		echo Power::url( 'news', $data['id'] );
		echo '">';
		echo substr( $data['title'], 0, 44 );
		echo '...</a></td>
					<td><a href="';
		echo Power::url( 'news/category', $data['category_alt_name'] );
		echo '">';
		echo $data['category_name'];
		echo '</a></td>
					<td>';
		echo $data['user_name'];
		echo '</td>
					<td>
						';
		($data['comments_enable'] ? $css = 'btn-on' : $css = 'btn-off');
		echo '						<i class="ajaxbutton ';
		echo $css;
		echo '" url="';
		echo Power::url( 'admin/news/allowcomment', $data['id'], array( 'show' => $data['comments_enable'] ) );
		echo '" title="Комментирование"></i>
					</td>
					<td>';
		echo Power::date( $data['date'], 'yyyy.MM.dd, HH:mm' );
		echo '</td>
					<td>
						<a href="';
		echo Power::url( 'admin/news/edit', $data['id'] );
		echo '" class="btn mr10" title="Редактировать"><i class="btn-edit"></i></a>
						';
		echo '<s';
		echo 'pan url="';
		echo Power::url( 'admin/news/delete', $data['id'] );
		echo '" confirm="Удалить новость" class="ajaxbutton" title="Удалить"><i class="btn-delete"></i></span>
					</td>
				</tr>
				';
	}

	echo '			</table>
			<div class="pages">';
	Config::pages(  );
	echo '</div>
		</div>
	</div>
</div>';
?>