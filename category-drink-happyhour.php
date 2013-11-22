<?php /* Template Name: Happy Hour */ ?>
<?php get_template_part('templates/page', 'header'); ?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="jumbotron">
<h1 font-family="courier"><code>I <i class="fa fa-heart"></i> Reno</code></h1>
<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
<p><a class="btn btn-love btn-lg" href="#"><i class="fa fa-heart fa-white"></i> Love &raquo;</a></p>
</div>
<!-- Begin grid -->
<div class="row">
  <div class="panel-group">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="panel panel-drink">
        <div class="panel-heading">
          <h2 class="panel-title" href="#"><i class="fa fa-smile-o fa-lg"></i><i class="fa fa-clock-o fa-lg"></i> Happy Hour</h2>
        </div>
        <div class="panel-body">
          <p>Find a Happy Hour that works with your schedule.</p>
          <p><a class="btn btn-drink" href="#"><i class="fa fa-smile-o fa-white"></i><i class="fa fa-clock-o fa-white"></i> Happy Hour &raquo;</a></p>
        </div>
      </div>
    </div> <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="panel panel-drink">
        <div class="panel-heading">
          <h2 class="panel-title" href="#"><i class="fa fa-moon-o fa-lg"></i> All Night</h2>
        </div>
        <div class="panel-body">
          <p>The night is young! Find a bar that's open late.</p>
          <p><a class="btn btn-drink" href="#"><i class="fa fa-moon-o fa-white"></i> All Night &raquo;</a></p>
        </div>
      </div>
    </div> <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
    <div class="clearfix visible-md visible-sm"></div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="panel panel-drink">
        <div class="panel-heading">
          <h2 class="panel-title" href="#"><i class="fa fa-coffee fa-lg"></i> Coffee</h2>
        </div>
        <div class="panel-body">
          <p>By drink I meant <em>coffee</em>, you lush!</p>
          <p><a class="btn btn-drink" href="#"><i class="fa fa-coffee fa-white"></i> Coffee &raquo;</a></p>
        </div>
      </div>
    </div> <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="panel panel-drink">
        <div class="panel-heading">
          <h2 class="panel-title" href="#"><i class="fa fa-beer fa-lg"></i> Pub Crawl</h2>
        </div>
        <div class="panel-body">
          <p>Superheroes, Santas and Zombies, oh my!  Prepare for the next pub crawl.</p>
          <p><a class="btn btn-drink" href="#"><i class="fa fa-beer fa-white"></i> Pub Crawl &raquo;</a></p>
        </div>
      </div>
    </div> <!-- col-xs-12 col-sm-6 col-md-6 col-lg-6 -->
  </div> <!-- panel-group -->
</div> <!-- row -->
<!-- Insert blog hook here. -->

<?php
  $args = ( 'post_type'       => 'post',
            'category_name'   => 'drink',
          );
  query_posts( $args )
?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
  <div class="featuredImg" style="margin-bottom:10px;">
    <a href="<?php echo get_permalink(); ?>" class="img">
    <?php echo $postImg['full']; ?></a>
  </div>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
