<?php
/* @var $this ShopproductsController */
/* @var $data Shopproducts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ten')); ?>:</b>
	<?php echo CHtml::encode($data->Ten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MoTa')); ?>:</b>
	<?php echo CHtml::encode($data->MoTa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GiaTien')); ?>:</b>
	<?php echo CHtml::encode($data->GiaTien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mau')); ?>:</b>
	<?php echo CHtml::encode($data->Mau); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ChatLieu')); ?>:</b>
	<?php echo CHtml::encode($data->ChatLieu); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('KichCo')); ?>:</b>
	<?php echo CHtml::encode($data->KichCo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DonVi')); ?>:</b>
	<?php echo CHtml::encode($data->DonVi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image')); ?>:</b>
	<?php echo CHtml::encode($data->Image); ?>
	<br />

	*/ ?>

</div>