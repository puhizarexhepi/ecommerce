<?php get_header(); ?>
<link rel="stylesheet" href="../wp-content/themes/newtheme/style.css"> 
<div class="container pt-5 pb-5">


    <!-- <h1><?php //single_cat_title(); ?></h1> -->
 <div class="post"> 
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<div class="card-mb-4">
    <div class="card-body">

        <?php if(has_post_thumbnail()): ?>

        <img height="300" width="210" src="<?php the_post_thumbnail_url('smallest'); ?>" >

    <?php endif; ?>

        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-success">Lexo me Shume</a>
    </div>
 </div> 


    <?php endwhile; endif; ?>
</div>

</div>

<?php wp_pagenavi(); ?>
<br><br>

<?php get_footer(); ?>
<style>
    .post{
        display: flex;
    }
    .card-mb-4{
        margin-inline-end: 30px;
    }
</style>