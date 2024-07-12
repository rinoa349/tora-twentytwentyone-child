<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

	

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<body>

<!---------------------------- 画像スライダー ---------------------------->

<div id="photo">
  <img  class="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este_room5.jpg"/>
  <img  class="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este_room1.jpg"/>
  <img  class="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este_room2.jpg"/>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(function(){
    const setImg = '#photo';
    const fadeSpeed = 1600;
    const switchDelay = 5000;

    $(setImg).children('img').css({opacity:'0'});
    $(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

    setInterval(function(){
        $(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
    },switchDelay);
});
</script>

<!---------------------------- メニュー画面 ---------------------------->
<div class="line"></div>

    <div class="menu-container">
      <div class="section_title">MENU</div>
          <img  class="este1-image fade-in fade-in-up" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-hero-img.jpg"/>
          <p class="menu_title_middle fade-in fade-in-up">カイロプラクティック技術を美容的な観点で美しい姿勢美をつくる「美容カイロテクニック」。<br>
          骨格、筋肉を整え、さらにより美しい姿勢に整える身体の内部（血液、リンパ）に<br>アプローチするエステティックの技術を融合させ、
          健康美を創造する美容カイロエステティックです。<br><br>
        
          当サロンは、身体の内側にある骨格のケアと外側の皮膚のケア、さらに手技によるトリートメントによって癒しが得られる<br>「三位一体の総合美容法」を確立し、ご提案しています。<br><br>
          背骨や骨盤のゆがみを徒手によって矯正する治療法、カイロプラクティックの視点からお客様対応をさせていただきます。<br>
          従いまして、徒手により身体を矯正させていただくだけではなく、体操（運動）・食餌（栄養）・物理（睡眠）の<br>生活改善提案として、健康関連商品も同時にご案内させていただきます。</p>
        
          <div class="menu-link fade-in fade-in-up">
            <a href="<?php echo home_url('/menu/'); ?>">メニューを見る</a>  
          </div>
    </div>
    
<!---------------------------- 投稿ループ ------------------------------>

  <div class="post-container">
    <div class="section_title">NEWS</div>
        <div class="index_post fade-in fade-in-up">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <p class="index_post_date fade-in fade-in-up"><?php the_date(); ?><a class="index_post_title"  href="<?php the_permalink();?>"><?php the_title();?></a></p><br>

          <?php endwhile; endif; ?>
        
          <?php my_paging_nav(); ?>
        </div>
  </div>
  
<!---------------------------- アクセス情報 ---------------------------->

    <div class="access-container">
      <div class="section_title">information/access</div>
          <div class="index-access-image">
					  <img  class="index-home fade-in fade-in-up" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este_room.jpg"/>
          
            <div class="index-access-comment fade-in fade-in-up">
              <p>【　TORa ~health & beauty~　】</p>
              <p>〒381-2223 長野県長野市里島27-2<br>  タウンコートいずみ B102号室</p>
              <p>TEL 090-3408-3514</p>
              <p>営業時間 10：00 〜 17：00 </p>
              <p>完全予約制</p>
            </div>
          </div>
    </div>
      <div class="menu-link fade-in fade-in-up">
        <a href="<?php echo home_url('access'); ?>">案内情報を見る</a>
      </div>

</div>

<?php
get_footer();
