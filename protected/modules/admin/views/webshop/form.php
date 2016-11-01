<?php
	$this->setPageTitle( 'Добавление вещи' );
	echo '

<div class="note-border">
	<div class="note">
		<div class="note-title">Добавление вещи</div>
		<div class="note-body">
			';
	
	$form = $this->beginWidget( 'CActiveForm' );
	echo $form->errorSummary( $model );
	echo Power::message(  );
	echo '			<table class="form">
				<tr>
					<td width="300px">';
	echo $form->label( $model, 'item_id' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'item_id' );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'category_id' );
	echo '</td>
					<td>';
	echo $form->dropDownList( $model, 'category_id', CHtml::listdata( WebshopCategory::getcategories(  ), 'id', 'name' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'quantity' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'quantity', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'change_quantity_enable' );
	echo '</td>
					<td>';
	echo $form->checkBox( $model, 'change_quantity_enable' );
	echo '</td>
					<td><i class="ml10 btn-question" title="Разрешить пользователям менять количество товара при покупке в вебшопе.<br />Цена будет вычисляться автоматически из расчета текущей цены к количеству."></i></td>
				</tr>
				<tr>
					<td>';
	echo $form->label( $model, 'price' );
	echo '</td>
					<td>';
	echo $form->textField( $model, 'price', array( 'class' => 'w150' ) );
	echo '</td>
				</tr>
				<tr>
					<td></td>
					<td>';
	echo CHtml::submitbutton( ($model->isNewRecord ? 'Добавить' : 'Сохранить изменения'), array( 'class' => 'button' ) );
	echo '</td>
				</tr>
			</table>
			';
	$this->endWidget(  );
	echo '		</div>
	</div>
</div>';
?>