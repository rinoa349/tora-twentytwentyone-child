
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
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/este.jpeg"/>
  <div class="este-top-title">HEALTH & BEAUTY</div>


  <div class="top-menu">
    <div class="top-menu-comment">
      オイルトリートメントに精油を合わせることで、日々の心身のバランスの乱れを整えます。<br>
      静かな森の中、木漏れ日を浴びるような心地へ誘いながら、<br>
      自己治癒力を高め、内面にある健やかさと美しさを取り戻すお手伝いをさせていただきます。<br>
      大切なお身体を、日頃からトリートメントでメンテナンスすることによって不調を防ぎ、<br>
      いきいきとした素肌を保ち、軽やかな心身でお過ごしいただきたいと願っております。<br>
    </div>
  </div>

  <div class="middle-menu">
    
    <div class="kairo_menu">
      <div class="kairo_container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kairo_menu1.jpeg"/>
        <div class="kairo_menu_title">【　美骨カイロコース　】<br>
          骨盤・全身調整
          <span class="kairo_sub_title">（＊ 初回(プラス30分)カウンセリングと検査が含まれます。）</span><br><br>
          肩こりや腰痛・膝痛・しびれ・神経痛の緩和、背骨や骨盤の歪みを整えて<br>
          自律神経の働きを良くしていきます。
        </div>
      </div>

      <div class="kairo_container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kairo_menu2.jpeg"/>
        <div class="kairo_menu_title">【　エステコース　】<br><br>
          オイルを使った足、背中、お腹、腕、デコルテの全身オールハンドトリートメントに加え<br>
          気になる部位に集中的にアプローチ。
        </div>
      </div>
      
      <div class="kairo_container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kairo_menu3.jpeg"/>
        <div class="kairo_menu_title">【　オプションコース（トリートメント）　】<br><br>
          お好みの“時間とメニュー”の組み合わせが楽しめる、当サロンの一番人気のコースです。
        </div>
      </div>

      <div class="kairo_container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kairo_menu4.jpeg"/>
      <div class="kairo_menu_title">【　美肌フェイシャル　】<br><br>
          丁寧なクレンジング・洗顔の後、フェイシャルマッサージで血行を良くし、<br>
          くすみやむくみを解消します。
        </div>
      </div>

      <div class="menu-link">
        <!--  ↓リンクを貼る↓  -->
        <h2>詳しくメニューを見る</h2>
      </div><br><br>
  </div>
</div>


<?php

get_footer();

