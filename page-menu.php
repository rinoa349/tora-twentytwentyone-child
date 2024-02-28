
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
 * 
 * Template Name: page-menu.php
 */

get_header(); ?>


<div class="menu"> 
  <div class="este-top-title">HEALTH & BEAUTY</div>
  <img class="este_menu_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/este.jpeg"/>

    <div class="top-menu-comment">
      昨今オイルトリートメントに精油を合わせることで、日々の心身のバランスの乱れを整えます。<br>
      静かな森の中、木漏れ日を浴びるような心地へ誘いながら、<br>
      自己治癒力を高め、内面にある健やかさと美しさを取り戻すお手伝いをさせていただきます。<br>
      大切なお身体を、日頃からトリートメントでメンテナンスすることによって不調を防ぎ、<br>
      いきいきとした素肌を保ち、軽やかな心身でお過ごしいただきたいと願っております。<br>
    </div>

  <div class="middle-menu">
    
    <div class="kairo_menu">
      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 美骨カイロコース 】</p>
          骨盤・全身調整
        <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo_menu1.jpeg"/>
        
          <span class="kairo_sub_title">（＊ 初回(プラス30分)カウンセリングと検査が含まれます。）</span><br><br>
          <p class="kairo_menu_comment">肩こりや腰痛・膝痛・しびれ・神経痛の緩和、背骨や骨盤の歪みを整えて自律神経の働きを良くしていきます。</p>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 エステコース 】</p><br>
        <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo_menu2.jpeg"/>
          <p class="kairo_menu_comment">オイルを使った足、背中、お腹、腕、デコルテの全身オールハンドトリートメントに加え気になる部位に集中的にアプローチ。</p>
        </div>
      </div>
      
      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 オプションコース(トリートメント) 】</p><br>
        <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo_menu3.jpeg"/>
        <p class="kairo_menu_comment">お好みの“時間とメニュー”の組み合わせが楽しめる、当サロンの一番人気のコースです。</p>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 美肌フェイシャル 】</p><br>
        <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo_menu4.jpeg"/>
      <p class="kairo_menu_comment">丁寧なクレンジング・洗顔の後、フェイシャルマッサージで血行を良くし、くすみやむくみを解消します。</p>
        </div>
      </div> 
      </div>

      <div class="menu-link">
        <a href="<?php echo home_url('/menu-list/'); ?>">詳しくメニューを見る</a>
      </div><br><br>
  </div>
</div>


<?php

get_footer();

