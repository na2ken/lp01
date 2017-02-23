<?php
/* Template Name: ランディングページ用テンプレート01 */
?>
<!DOCTYPE html>
<html lang="ja" id="pageTop page-lp01">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="format-detection" content="address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/css/bootstrap.css">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/css/animate.css">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/css/bp.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/lp01.css">
    <title><?php bloginfo('name'); ?></title>
</head>

<body class="lp lp01">
  <div class="l-cover-justvertical verticalPadding-t-0 verticalPadding-b-0">
      <div class="container-fluid" id="section00">
          <div class="row no-gutter">

              <div class="verticalMargin-t-0 verticalPadding-b-0">
      <?php
      // アイキャッチ画像を配置する
      if ( has_post_thumbnail() ) :
          the_post_thumbnail( 'medium img-responsive' );
          else : ?>
          <figure>
            <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/noimageLp.png" alt="<?php the_title(); ?>" class="img-responsive">
          </figure>
      <?php endif; ?>

      <div class="flexBox__area2">
        <div class="flexBox2">
          <div class="container">
              <div class="row">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h1 class="textSize-lg text-center wht-text"><?php the_title(); ?></h1>
        </div>
       </div>
     </div>

   </div><!-- /.verticalMargin-t-0 -->


          </div><!-- /.row -->
      </div><!-- /.container-fluid -->


  </div><!-- /.l-cover -->

    <article class="gryColorTone2nd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 gryColor">
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
                </div>
    	      </div><!-- /.row -->
        </div><!-- /.container -->
    </article>
    <footer class="l-footer">
           <div class="l-footerAbove">
                 <div class="container">
                       <div class="row">
                           <div class="col-lg-12">
                               <p class="text-center textColor-gryColorTone2nd verticalPadding-t-0 verticalPadding-b-0">
                                   <span class="small"><i class="fa fa-copyright horizontalMargin-r-xs"></i><?php bloginfo('name'); ?> Allrights Reserved.<span>
                               </p>
                           </div>
                       </div>
                 </div>
           </div>
    </footer>
</body>
<html>
