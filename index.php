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
          <img  class="este1-image fade-in fade-in-up" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este1-image.jpeg"/>
          <p class="menu_title_middle fade-in fade-in-up">TORa オリジナルメニューをはじめ、エンビロン、セルコスメのメニューをご用意。<br><br>
          人の体がそれぞれ違うように、肌ケアも十人十色。<br>カウンセリングを元に最適なケアをご提案いたします。</p>
        
          <div class="menu-link fade-in fade-in-up">
            <a href="<?php echo home_url('/menu/'); ?>">全てのメニューを見る</a>  
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
              <p>【　HEALTH & BEAUTY  TORa　】</p>
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

  <div class="line"></div>

</div>

<?php
get_footer();
