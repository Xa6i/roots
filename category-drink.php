<?php /* Template Name: Drink */ ?>
<?php get_template_part('templates/page', 'header'); ?>


<!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->

<div id="carousel-drink" class="carousel slide"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://placehold.it/800x450" alt="" />
      <div class="carousel-caption">
        <p>Caption text One</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x450" alt="" />
      <div class="carousel-caption">
        <p>Caption text Two</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x450" alt="" />
      <div class="carousel-caption">
        <p>Caption text Three</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x450" alt="" />
      <div class="carousel-caption">
        <p>Caption text Four</p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#carousel-drink" data-slide="prev"><i class="fa fa-chevron-circle-left fa-white"></i></a>
    <a class="carousel-control right" href="#carousel-drink" data-slide="next"><i class="fa fa-chevron-circle-right fa-white"></i></a>
</div><!-- /.carousel -->


<!-- Begin grid -->
<div class="row">
  <!-- <div class="panel-group important"> -->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="panel panel-drink">
        <div class="panel-heading">
          <h2 class="panel-title"><a href="happy-hour/"><i class="fa fa-smile-o fa-lg"></i><i class="fa fa-clock-o fa-lg"></i> Happy Hour</a></h2>
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
      <div class="panel panel-cafe">
        <div class="panel-heading">
          <h2 class="panel-title" href="#"><i class="fa fa-coffee fa-lg"></i> Coffee</h2>
        </div>
        <div class="panel-body">
          <p>By drink I meant <em>coffee</em>, you lush!</p>
          <p><a class="btn btn-cafe" href="#"><i class="fa fa-coffee fa-white"></i> Coffee &raquo;</a></p>
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
  <!-- </div> panel-group -->
</div> <!-- row -->
<!-- Insert blog hook here. -->

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>

<!-- Le javascript
================================================== -->
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<!-- Bootstrap jQuery plugins compiled and minified -->
<script src="js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 4000
    });
  });
</script>
