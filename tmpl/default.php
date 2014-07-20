<?php
defined('_JEXEC') or die;
?>
<div id="myCarousel" class="carousel slide" style="margin:0 auto;max-width:<?php if($params->get('ddcbs_image_width')!=Null){echo $params->get('ddcbs_image_width');} ?>">
<!-- Carousel items -->
<div class="carousel-inner">
<?php if(($params->get('ddcbs_image_1')!=Null)) :?>
	<div class="active item"><img class="" src="<?php echo $params->get('ddcbs_image_1'); ?>" alt="" /></div>
	<?php if (($params->get('ddcbs_image_1_caption')!=Null)) :?>
		<div class="carousel-caption">
			<h4><?php echo $params->get('ddcbs_image_1_caption_header'); ?></h4>
			<p><?php echo $params->get('ddcbs_image_1_caption'); ?></p>
		</div>
	<?php endif; ?>
<?php endif; ?>
<?php if (($params->get('ddcbs_image_2')!=Null)) :?>
	<div class="item"><img class="" src="<?php echo $params->get('ddcbs_image_2'); ?>" alt="" /></div>
	<?php if (($params->get('ddcbs_image_2_caption')!=Null)) :?>
				<div class="carousel-caption">
			<h4><?php echo $params->get('ddcbs_image_2_caption_header'); ?></h4>
			<p><?php echo $params->get('ddcbs_image_2_caption'); ?></p>
		</div>
	<?php endif; ?>
<?php endif; ?>
<?php if (($params->get('ddcbs_image_3')!=Null)) :?>
	<div class="item"><img class="" src="<?php echo $params->get('ddcbs_image_3'); ?>" alt="" /></div>
	<?php if (($params->get('ddcbs_image_3_caption')!=Null)) :?>
				<div class="carousel-caption">
			<h4><?php echo $params->get('ddcbs_image_3_caption_header'); ?></h4>
			<p><?php echo $params->get('ddcbs_image_3_caption'); ?></p>
		</div>
	<?php endif; ?>
<?php endif; ?>
<?php if (($params->get('ddcbs_image_4')!=Null)) :?>
	<div class="item"><img class="" src="<?php echo $params->get('ddcbs_image_4'); ?>" alt="" /></div>
	<?php if (($params->get('ddcbs_image_4_caption')!=Null)) :?>
				<div class="carousel-caption">
			<h4><?php echo $params->get('ddcbs_image_4_caption_header'); ?></h4>
			<p><?php echo $params->get('ddcbs_image_4_caption'); ?></p>
		</div>
	<?php endif; ?>
<?php endif; ?>
<?php if (($params->get('ddcbs_image_5')!=Null)) :?>
	<div class="item"><img class="" src="<?php echo $params->get('ddcbs_image_5'); ?>" alt="" /></div>
	<?php if (($params->get('ddcbs_image_5_caption')!=Null)) :?>
				<div class="carousel-caption">
			<h4><?php echo $params->get('ddcbs_image_5_caption_header'); ?></h4>
			<p><?php echo $params->get('ddcbs_image_5_caption'); ?></p>
		</div>
	<?php endif; ?>
<?php endif; ?>
</div>
<?php if($params->get('ddcbs_slide_select')==1) :?>
	<!-- Carousel nav --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
<?php endif; ?>
<?php if($params->get('ddcbs_slide_select')==0) :?>
	<script src="modules/mod_ddcbootslide/js/script.js"></script>
<?php endif; ?>
</div>
