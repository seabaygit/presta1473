<?php
/* @var $this FilmController */
/* @var $data Film */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('film_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->film_id), array('view', 'id'=>$data->film_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_film')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('introduction_context')); ?>:</b>
	<?php echo CHtml::encode($data->introduction_context); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_memo')); ?>:</b>
	<?php echo CHtml::encode($data->special_memo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('release_year')); ?>:</b>
	<?php echo CHtml::encode($data->release_year); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('language_id')); ?>:</b>
	<?php echo CHtml::encode($data->language_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('original_language_id')); ?>:</b>
	<?php echo CHtml::encode($data->original_language_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rental_duration')); ?>:</b>
	<?php echo CHtml::encode($data->rental_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rental_rate')); ?>:</b>
	<?php echo CHtml::encode($data->rental_rate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replacement_cost')); ?>:</b>
	<?php echo CHtml::encode($data->replacement_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('special_features')); ?>:</b>
	<?php echo CHtml::encode($data->special_features); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>