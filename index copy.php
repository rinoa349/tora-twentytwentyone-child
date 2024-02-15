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
  <div class='contents'>

    <!-- メニュー画面を表示 -->
    <div class="menu-content">
        <div class="line"></div>
      <div class="title">
        <div class="title-up">menu</div>
        <div class="title-middle">-</div>
        <div class="title-down">【 それぞれのお体に合わせた最適なケアのご提案 】</div>
      </div>
      <img  class="este1-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este1-image.jpeg"/>
        <p class="menu_title_middle">TORa オリジナルメニューをはじめ、エンビロン、セルコスメのメニューをご用意。<br>
        人の体がそれぞれ違うように、肌ケアも十人十色。<br>カウンセリングを元に最適なケアをご提案いたします。</p>
      <div class="menu-link">
        <a href="<?php echo home_url('/menu/'); ?>">全てのメニューを見る</a>
      </div>
    </div>

   
    
  </div>

 

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}
?>

 <div class="line"></div>
    <!-- アクセス情報を表示 -->
    <div class="access">
        <div class="title">
          <div class="title-up">information / access</div>
          <div class="title-middle">-</div>
          <div class="title-down">【 サロン案内／アクセス 】</div>
        </div>
      <div class="access-top">
        <div class="access-flex">
          <div class="access-image">
					<img  class="home" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este_room.jpg"/>
          </div>
          <div class="access-information">
            <div class="access-comment">
              <div class="name">【　HEALTH & BEAUTY  TORa　】</div>
              <div class="adress">〒381-2223 長野県長野市里島27-2<br> タウンコートいずみ B102号室</div>
              <div class="phone-number">TEL 090-3408-3514</div>
              <div class="time">営業時間 10：00 〜 17：00 </div>
              完全予約制
            </div>
          </div>
        </div>
      </div>
      <div class="menu-link">
        <a href="<?php echo home_url('access'); ?>">案内情報を見る</a>
      </div>
    </div>
  </div>
  <div class="line"></div>

</div>

<?php
get_footer();