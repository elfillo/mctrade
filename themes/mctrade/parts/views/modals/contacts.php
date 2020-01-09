<div class="modal modal_contacts">
	<div class="wrapper wrapper_contacts">
		<div class="modal_close"><img src="<?php echo get_template_directory_uri() ?>/img/close.svg" alt="close"></div>
		<div class="content">
			<?php the_field('contacts', get_page_id('index'))?>
		</div>
	</div>
</div>