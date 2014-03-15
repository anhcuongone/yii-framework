<?php
/* @var $this ShopproductsController */
/* @var $model Shopproducts */
/* @var $form CActiveForm */
$obj=new ShopproductsController(null);

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shopproducts-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<table style="width: 900px">
	<tr>
		<td>
		<?php echo $form->labelEx($model,'category_id'); ?>
		</td>
		<td>
		<?php echo $form->dropDownList($model,'category_id', CHtml::listData($obj->LayDanhSachTheLoai(),'category_id','title'),array('style'=>'width:305px','name'=>'category_id')); ?>
		<?php echo $form->error($model,'category_id'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($model,'Ten'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'Ten',array('size'=>45,'maxlength'=>45,'name'=>'Ten')); ?>
		<?php echo $form->error($model,'Ten'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->labelEx($model,'MoTa'); ?>
		</td>
		<td>
		<?php echo $form->textArea($model,'MoTa',array('rows'=>4, 'cols'=>35,'name'=>'MoTa')); ?>
		<?php echo $form->error($model,'MoTa'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($model,'GiaTien'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'GiaTien',array('size'=>45,'maxlength'=>45,'name'=>'GiaTien')); ?>
		<?php echo $form->error($model,'GiaTien'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->labelEx($model,'Mau'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'Mau',array('size'=>45,'maxlength'=>45,'name'=>'Mau')); ?>
		<?php echo $form->error($model,'Mau'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($model,'ChatLieu'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'ChatLieu',array('size'=>45,'maxlength'=>45,'name'=>'ChatLieu')); ?>
		<?php echo $form->error($model,'ChatLieu'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->labelEx($model,'KichCo'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'KichCo',array('size'=>45,'maxlength'=>45,'name'=>'KichCo')); ?>
		<?php echo $form->error($model,'KichCo'); ?>
		</td>
		<td>
		<?php echo $form->labelEx($model,'DonVi'); ?>
		</td>
		<td>
		<?php echo $form->textField($model,'DonVi',array('size'=>45,'maxlength'=>45,'name'=>'DonVi')); ?>
		<?php echo $form->error($model,'DonVi'); ?>
		</td>
	</tr>
	<tr>
		<td>
		<?php echo $form->labelEx($model,'Image'); ?>
		</td>
		<td>
		<?php echo $form->fileField($model,'Image'); ?>
		<?php echo $form->error($model,'Image'); ?>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="text-align: center;"> 
		<?php echo CHtml::submitButton('Save',array('name'=>'Save')) ?>	
		</td>
	</tr>
</table>
<?php $this->endWidget(); ?>

</div><!-- form -->