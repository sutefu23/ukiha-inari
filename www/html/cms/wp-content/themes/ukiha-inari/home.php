<?php get_header();?>
<main>
    <section id="origin" class="vertical">
      <div class="inner">
      <h1>由来記</h1>
      <article class="content">
        <dl class="deities">
          <dt>祭神</dt>
          <dd><span data-ruby="うかのみたま">稲魂</span>大神　<span data-ruby="おおやまくい">大山昨</span>神　菅原道真公</dd>
        </dl>
        <dl>
          <dt>ご利益</dt>
          <dd>
            五穀豊穣、商売繁盛、開運厄除
          </dd>
        </dl>
        <dl>
          <dt>由緒</dt>
          <dd>
            昭和三十二年（一九七五）十二月、
            京都伏見、稲荷大明神を新設の城ヶ鼻
            公園内に勧請
          </dd>
        </dl>
        <dl>
          <dt>経緯</dt>
          <dd>
            昭和三十二年十月に敷地、道路、社殿が
            完備し十二月六日浮羽の新社殿に奉祀
            昭和三十三年、宗教法人認可            
          </dd>
        </dl>
        <dl>
          <dt>例祭</dt>
          <dd>
            一月元旦、二月初午日、四月六日（春の
            大祭）、毎月一日午前六時半より
            商売繁盛、安全祈願。
          </dd>
        </dl>
        <dl>
          <dt>奥の院</dt>
          <dd>
            松尾天神
          </dd>
        </dl>
      </article>
      <a class="btn btn-vertical" href="<?php echo home_url('origin');?>">もっと詳しく</a>
    </div>
    </section>
    <section id="news" class="vertical">
      <div class="inner">
      <h1>ご案内</h1>
      <div class="content">
      <?php 
        $args = array(
          'post_type'   =>	'news',
          'post_status'	=>	'publish',
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ) : 
          setup_postdata( $post ); ?>
        <article>
          <time datetime="<?php the_time('Y-m-d');?>"><?php echo mb_convert_kana(DatetimeUtility::date( 'JK年n月j日', get_the_time('U')),'KVRN');?></time>
          <h3><?php echo mb_convert_kana(get_the_title(),'KVRN');?></h3>
          <p><?php echo mb_convert_kana(get_the_content(),'KVRN');?></p>
        </article>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
    </div>
    <div class="bottom">
      <!-- <div class="pagenation">
        <span class="navi-btn navi-btn-prev">前</span>
        <ul class="navi">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <span class="navi-btn navi-btn-next">次</span>
      </div> -->
      <!-- <a href="/news/" class="btn">ご案内一覧</a> -->
    </div>
    </section>
    <section id="event" class="vertical">
      <div class="inner">
        <h1>行事日程</h1>
        <article class="content">
            <h3>令和二年</h3>
            <p>一月一日～三日　正月行事</p>
            <p>二月一日 ６時３０分　神事</p>
            <p>二月六日 １１時　初午祭神事</p>
            <p>三月一日 ６時３０分　神事</p>
            <p>四月一日 ６時３０分　神事</p>
            <p>四月六日 １１時　春の大祭神事</p>
            <p>五月一日 ６時３０分　神事</p>
            <p>六月一日 ６時３０分　神事</p>
            <p>七月一日 ６時３０分　神事</p>
            <p>八月一日 ６時３０分　神事</p>  
        </article>
      </div>
      <div class="bottom">
        <article class="content">
            <p>九月一日 ６時３０分　神事</p>
            <p>十月一日 ６時３０分　神事</p>
            <p>十一月一日 ６時３０分　神事</p>
            <p>十二月一日 ６時３０分　神事</p>
            <p>十二月十七日 ８時３０分　注連縄製作
            及び飾り・境内清掃</p>
            <p>十二月二十六日 ８時３０分　旗立・
            清掃・準備</p>
            <p>十二月三十一日 １４時　社務所・
            札所準備</p>
            <p>十二月三十一日 ２３時　神事</p>
        </article>
      </div>
    </section>
    <section id="report" class="vertical">
      <div class="inner">
        <h1>活動報告</h1>
        <div class="content">
        <?php $args = array(
          'post_type'	  =>	'report',
          'post_status'	=>	'publish',
          'posts_per_page'  =>	3
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ) : 
          setup_postdata( $post ); ?>
          <article>
            <img class="thumb" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id())[0];?>" alt="<?php the_title();?>">
            <span class="date"><?php echo get_the_time('m月d日');?></span>
            <a class="box" href="<?php the_permalink();?>">
              <time datetime="<?php the_time('Y-m-d');?>"><?php echo mb_convert_kana(DatetimeUtility::date( 'JK年n月j日', get_the_time('U')),'KVRN');?></time>
              <h3><?php echo mb_convert_kana(get_the_title(),'KVRN');?></h3>
              <p><?php echo mb_convert_kana(get_the_excerpt(),'KVRN');?></p>
            </a>
          </article>
        <?php endforeach;
        wp_reset_postdata();?>
        </div>
      </div>
      <div class="bottom">
        <a href="<?php echo home_url('/report/');?>" class="btn">活動一覧</a>
      </div>
    </section>
    <section id="access" class="vertical">
      <div class="inner">
        <h1>アクセス</h1>
        <div class="content">
          <div class="access-info">
            <dl>
              <dt>【住所】</dt>
              <dd>福岡県うきは市浮羽町流川１５１３-９</dd>
            </dl>
            <dl>
              <dt>【最寄り高速出口】</dt>
              <dd>杷木インターチェンジ</dd>
            </dl>
            <dl>
              <dt>【最寄り駅】</dt>
              <dd>九大本線うきは駅</dd>
            </dl>
            <dl>
              <dt>【駐車場】</dt>
              <dd>あり</dd>
            <dl>
          </div>
            <!-- <a class="map-link" href="//goo.gl/maps/u4TwjuHfGC7zd5ss5"> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13335.358528160443!2d130.7917393!3d33.3230078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x218dbd88e3de8c68!2z5rWu576956iy6I2356We56S-!5e0!3m2!1sja!2sjp!4v1590734911992!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <!-- </a> -->
        </div>
      </div>
    </section>
    <?php get_template_part('inc', 'section-sns');?>
    <section id="opinion" class="oriental">
      <div class="inner">
        <h1>ご意見</h1>
        <?php echo do_shortcode('[contact-form-7 id="27" title="お問合せ"]');?>
      </div>
    </section>
  </main>
<?php get_footer();?>