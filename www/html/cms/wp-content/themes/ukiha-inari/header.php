<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri();?>/favicon.ico">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <?php if(is_home()):?>
    <script>
    (function(d) {
      var config = {
        kitId: 'vbk7hfj',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <?php endif;?>
  <?php wp_head();?>
</head>
<body id="#top" class="<?php if(!is_home()){echo 'page';}?>">
  <header>
    <?php if(is_home()):?>
    <h1><img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="浮羽稲荷神社-Ukiha Inari Shrine" srcset="<?php echo get_template_directory_uri();?>/img/logo@2x.png"></h1>
    <?php endif;?>
    <nav>
      <ul>
        <li><a href="<?php echo home_url('/origin/');?>"><span>由来</span></a></li>
        <li><a href="<?php if(!is_home()){echo home_url('/'); } ?>#news"><span>ご案内</span></a></li>
        <li><a href="<?php if(!is_home()){echo home_url('/'); } ?>#event"><span>行事日程</span></a></li>
        <li><a href="<?php echo home_url('/report/');?>"><span>活動報告</span></a></li>
        <li><a href="<?php if(!is_home()){echo home_url('/'); } ?>#access"><span>アクセス</span></a></li>
        <li><a href="<?php if(!is_home()){echo home_url('/'); } ?>#opinion"><span>ご意見</span></a></li>
      </ul>
    </nav>
  </header>