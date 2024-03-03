<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

/*  ・chld_thm_cfgのエラーが出る

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-custom-color-overrides','twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style','tt1-dark-mode' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
*/

// END ENQUEUE PARENT ACTION



/////////////////// CSSの読み込み //////////////////////////////////////

  add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('my_style', get_stylesheet_directory_uri() . '/style.css');
  }, 11);


/////////////////// 外部CSSの読み込み ///////////////////////////////////
  
  function my_styles() {
    if ( is_page( 'menu' ) ) {
        wp_enqueue_style( 'menu', get_stylesheet_directory_uri() . '/tora-style.css/menu.css', array(), '1.0.0' );
    } elseif ( is_page( 'access' ) ) {
      wp_enqueue_style( 'access', get_stylesheet_directory_uri() . '/tora-style.css/access.css', array(), '1.0.0' );
    } elseif ( is_page( 'menu-list' ) ) {
      wp_enqueue_style( 'menu-list', get_stylesheet_directory_uri() . '/tora-style.css/menu-list.css', array(), '1.0.0' ); 
    }
  }
add_action( 'wp_enqueue_scripts', 'my_styles' );


/////////////////// JavaScriptの読み込み ////////////////////////////////
  
function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_stylesheet_directory_uri() . '/top-page.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

/////////////////// アイキャッチ画像を有効化 ///////////////////////////////

add_theme_support('post-thumbnails');

//ページネーション
function my_paging_nav() {
//グローバル変数を宣言
  global $wp_query , $wp_rewrite; 

// ページ数が2より小さかったらページネーションを表示しない
  if ( $wp_query->max_num_pages < 2 ) {
      return;
  }
// ページがあればページ数を取得、なければ1を入れる
  $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
// パーマリンクの設定をしていたら、それに従い表示する。デフォルトなら「?paged=%#%」で表示する
  $format  = $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

//ページネーションの設定
  $links = paginate_links( array(
      'base'     => get_pagenum_link() . '%_%', //URLのベース
      'format'   => $format, //ページネーションのリンクの構造
      'total'    => $wp_query->max_num_pages, //ページ数（全ページを指定）
      'current'  => $paged, //現在のページの位置
      'mid_size' => 1, //現在のページの両側に表示する数
      'prev_text' => '前へ',
      'next_text' => '次へ',
  ) );

  if ( $links ) :

  ?>
<!-- 表示されるHTML -->
  <nav role="navigation">
      <ul class="page-numbers">
          <li><?php echo $links; ?></li>
      </ul>
  </nav>
  <?php endif; 
}