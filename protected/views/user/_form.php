<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
        <?php  /*echo $form->dropDownList($model,'type',
            CHtml::listData(Usertype::model()->findall(),'id','role')); */?>
        <?php echo CHtml::activeDropDownList($model,'type',CHtml::listData(Usertype::model()->findall(),'role','role'));?>

		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_time'); ?>
		<?php echo $form->textField($model,'modified_time'); ?>
		<?php echo $form->error($model,'modified_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perhour'); ?>
		<?php echo $form->textField($model,'perhour'); ?>
		<?php echo $form->error($model,'perhour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taxes'); ?>
		<?php echo $form->textField($model,'taxes',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'taxes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>

        <?php echo CHtml::activeDropDownList($model,'gender',$model->getGenderOptions(),
           array('empty' => '(Select a gender)'));?>

		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merital_status'); ?>
        <?php echo CHtml::activeDropDownList($model,'merital_status',$model->getMarriageOptions(),
           array('empty' => '(Select a status)'));?>

		<?php echo $form->error($model,'merital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FBlogin'); ?>
		<?php echo $form->textField($model,'FBlogin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FBlogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FBlink'); ?>
		<?php echo $form->textField($model,'FBlink',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'FBlink'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->