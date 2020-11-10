<?php get_header();?>
<main>
      <ul id="breadcrumbs">
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li><a href="<?php echo get_post_type_archive_link('report'); ?>">ご案内</a></li>
    </ul>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="archive">
    <a href="<?php the_permalink();?>">
      <div class="content">
        <div class="inner">
        <div class="lead" style="background-image:url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0];?>);">
        <h2><?php the_title();?></h2>
        <time datetime="<?php the_time();?>"><?php echo DatetimeUtility::date( 'JK年n月j日', get_the_time('U'));?></time>  
        </div>
        </div>
      </div>
    </a>
    </section>
    <?php endwhile; ?>
    
    <?php get_template_part('inc', 'section-sns');?>
  </main>
<?php get_footer();?>
