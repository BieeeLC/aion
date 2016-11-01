<?php
	$this->setPageTitle( 'Премиум аккаунты' );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">Редактирование премиумов</div>
		<div class="note-body">
			';
	
	$form = $this->beginWidget( 'CActiveForm' );
	echo $form->errorSummary( $post );
	echo Power::message(  );
	echo '			<table class="form">
				<tr>
					<td>';
	echo $form->label( $post, 'name' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'name', array( 'maxlength' => 32 ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'membership_type' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'membership_type', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'membership_duration' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'membership_duration', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'craftship_type' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'craftship_type', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'craftship_duration' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'craftship_duration', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'apship_type' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'apship_type', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'apship_duration' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'apship_duration', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'collectionship_type' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'collectionship_type', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'collectionship_duration' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'collectionship_duration', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $post, 'price' );
	echo '</td>
					<td>';
	echo $form->textField( $post, 'price', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td></td>
					<td>';
	echo CHtml::submitbutton( ($post->isNewRecord ? 'Добавить' : 'Сохранить изменения'), array( 'class' => 'button' ) );
	echo '</td>
				</tr>
			</table>
			';
	$this->endWidget(  );
	echo '		</div>
	</div>
</div>


<div class="note-border">
	<div class="note">
		<div class="note-title">Список премиумов</div>
		<div class="note-body">
			<table class="table border">
				<tr>
					<th rowspan="2">Название</th>
					<th colspan="2">Премиум</th>
					<th colspan="2">Крафт</th>
					<th colspan="2">AP</th>
					<th colspan="2">Сбор</th>
					<th rowspan=';
	echo '"2" width="80px">Цена</th>
					<th rowspan="2" width="80px">Операции</th>
				</tr>
				<tr>
					<th>Тип</th>
					<th>Время</th>
					<th>Тип</th>
					<th>Время</th>
					<th>Тип</th>
					<th>Время</th>
					<th>Тип</th>
					<th>Время</th>
				</tr>
				';
	foreach ($model as $data) {

		echo '				<tr>
					<td>';
		echo $data['name'];
		echo '</td>
					<td>';
		echo Info::getmembershipico( $data['membership_type'] );
		echo '</td>
					<td>';
		echo Info::getmembershipduration( $data['membership_duration'] );
		echo '</td>
					<td>';
		echo Info::getmembershipico( $data['craftship_type'] );
		echo '</td>
					<td>';
		echo Info::getmembershipduration( $data['craftship_duration'] );
		echo '</td>
					<td>';
		echo Info::getmembershipico( $data['apship_type'] );
		echo '</td>
					<td>';
		echo Info::getmembershipduration( $data['apship_duration'] );
		echo '</td>
					<td>';
		echo Info::getmembershipico( $data['collectionship_type'] );
		echo '</td>
					<td>';
		echo Info::getmembershipduration( $data['collectionship_duration'] );
		echo '</td>
					<td>';
		echo $data['price'];
		echo '</td>
					<td>
						<a href="';
		echo Power::url( 'admin/webshop/membership', $data['id'] );
		echo '" class="btn mr10" title="Редактировать"><i class="btn-edit"></i></a>
						';
		echo '<s';
		echo 'pan url="';
		echo Power::url( 'admin/webshop/membershipdelete', $data['id'] );
		echo '" confirm="Удалить премиум" class="ajaxbutton" title="Удалить"><i class="btn-delete"></i></span>
					</td>
				</tr>
				';
	}

	echo '			</table>
		</div>
	</div>
</div>';
?>