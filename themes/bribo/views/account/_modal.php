<script>
	function setId(id, name) {
		$('#form-password')[0].reset();
		$(".note-result").text('');
		$('input[name="AccountForm[accountId]"]').val(id);
		$('span[name="accountName"]').text(name);
		$('#reset').attr({href: '<?php echo Power::url('account/resetpassword'); ?>'+id});
	}
</script>


<div class="modal" id="modal-password">
	<div class="modal-window">
		<div class="modal-title">
			Alterar Senha <span name="accountName"></span>
			<span class="modal-close" modal="modal-password">×</span>
		</div>
		<div class="modal-body">
			<div class="note-result"></div>
			<?php $form=$this->beginWidget('CActiveForm', array('id'=>'form-password')); ?>
			<div class="table">
				<div class="row">
					<div>Senha atual</div>
					<div class="w200"><input name="AccountForm[passwordCurrent]" type="text" class="text" /></div>
					<div><a id="reset" href="">Limpar</a></div>
				</div>
				<div class="row">
					<div>Nova senha</div>
					<div class="w200"><input name="AccountForm[passwordNew]" type="text" class="text" /></div>
				</div>
				<div class="row">
					<div>Repita a nova senha</div>
					<div class="w200"><input name="AccountForm[passwordConfirm]" type="text" class="text" /></div>
				</div>
				<div class="row">
					<div></div>
					<div class="w200">
						<?php echo CHtml::ajaxSubmitButton('Alterar', CHtml::normalizeUrl(array('/account/changepassword/')), array('update'=>'.note-result'), array('live'=>false, 'class'=>'button')); ?>
						<input name="AccountForm[accountId]" type="hidden" />
					</div>
				</div>
			</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>