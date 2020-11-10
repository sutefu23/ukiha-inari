<?php get_header();?>
<main>
  <?php while ( have_posts() ) : the_post(); ?>
      <ul id="breadcrumbs">
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <?php if(!is_page()):?>
      <li><a href="<?php echo get_post_type_archive_link('report'); ?>">ご案内</a></li>
      <?php endif;?>
      <li><?php the_title();?></li>
    </ul>
    <section id="page">
      <div class="lead">
        <h1><?php the_title();?></h1>
        <?php if(!is_page()):?>
        <time datetime="<?php the_time();?>"><?php echo DatetimeUtility::date( 'JK年n月j日', get_the_time('U'));?></time>
        <?php endif; ?>
      </div>
      <div class="content">
        <div class="inner">
          <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0];?>" alt="" class="thumb">
          <div class="article">
            <?php the_content();?>
          </div>
        </div>
      </div>
    </section>
    
    <?php get_template_part('inc', 'section-sns');?>
  <?php endwhile; ?>
  </main>
<?php get_footer();?>
