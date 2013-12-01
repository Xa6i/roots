<div class="page-header">
	<?php if (roots_display_sidebar()) : ?>
	  <h1>
    	<?php echo roots_title(); ?>
  	</h1>
	<?php else : ?>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
			  <h1>
			    <?php echo roots_title(); ?>
			  </h1>
			</div>  
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			  <p>
			  	<? get_search_form(); ?>
			  </p>
			</div>
		</div>
	<?php endif; ?>
</div>