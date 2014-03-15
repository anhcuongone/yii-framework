<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-_form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table style="width: 500px; margin: 0px 20px 5px 150px">
	<tr>
		<td>
		<?php echo $form->labelEx($model,'Username'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'username',array('disabled'=>'disabled')); ?>
		<?php echo $form->error($model,'username'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($model,'Password'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'password',array('name'=>'password')); ?>
		<?php echo $form->error($model,'password'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->labelEx($model,'Họ Tên'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'HoTen',array('name'=>'HoTen')); ?>
		<?php echo $form->error($model,'HoTen'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($model,'Ngày Tạo'); ?>
		</td>
		<td>
		<?php echo $form->dateField($model,'NgayTao',array('name'=>'NgayTao')); ?>
		<?php echo $form->error($model,'NgayTao'); ?>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="text-align: center;">
		<?php echo CHtml::submitButton('Submit',array('name'=>'submit')); ?>
		</td>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->