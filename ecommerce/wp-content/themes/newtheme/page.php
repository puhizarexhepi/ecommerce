<?php get_header(); ?>
<link rel="stylesheet" href="../wp-content/themes/newtheme/style.css"> 
<div class="container pt-5 pb-5">


    <!-- <h1><?php //the_title(); ?></h1> -->

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    
    <?php if(has_post_thumbnail()): ?>

<img height="500" width="100%" src="<?php the_post_thumbnail_url('smallest'); ?>" >

<?php endif; ?>


</div>

<?php get_footer(); ?>