<?php
/* @var $this ShopcategoryController */
/* @var $model Shopcategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shopcategory-_form-form',
	'enableAjaxValidation'=>false,
		
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table style="width: 200px; margin-left: 300px">
	<tr>
		<td><?php echo $form->labelEx($model,'title'); ?></td>
		<td><?php echo $form->textField($model,'title',array('name'=>'tieude')); ?>
		<?php echo $form->error($model,'title'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'language'); ?></td>
		<td><?php echo $form->textField($model,'language',array('name'=>'NgonNgu')); ?>
		<?php echo $form->error($model,'language'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'description'); ?></td>
		<td><?php echo $form->textField($model,'description',array('name'=>'MoTa')); ?>
		<?php echo $form->error($model,'description'); ?></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><?php echo CHtml::submitButton('Submit',array('name'=>'submit')); ?></td>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->