
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
  
  <img class="este_menu_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-menu-hero-img.jpg"/>
  <div class="este-top-title">HEALTH & BEAUTY</div>
    <div class="top-menu-comment">
     カイロプラクティックにより背骨・骨盤のバランスを整えることで、神経・ホルモン・<br>
     血液・リンパを正常化へと導き、自然治癒力アップへ。また、姿勢美を作りキレイなボディラインを目指せます。<br><br>
     カイロプラクティックで骨格を整え内側から健康へ、さらに美容カイロエステはクレイセラピーで皮膚の健康美を。<br>
    </div>

  <div class="middle-menu">
    
    <div class="kairo_menu">

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 ご新規様限定　骨盤・歪み調整コース　（¥2000引き） 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img8.jpg"/>
            <p class="kairo_menu_comment">初回お試し割引実施しています。<br>
            通常¥6600 → ¥4400<br>
            初めての施術ではカウンセリングと検査時間をいただきますので、お時間を通常より多めにいただいております。<br><br>
            <span class="menu_fee">〈 所要時間（目安） 約90分 ・・・ 4,400円 〉</span>
            </p>
          </div>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 美骨カイロコース（骨盤調整・全身調整） 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img5.jpg"/>  
              <p class="kairo_menu_comment">骨盤・全身調整<br><br>
                                            肩こり、腰痛、ストレートネック、美姿勢、慢性的な身体の不調に。<br><br>
                                            <span class="menu_fee">〈 所要時間（目安） 約60分 ・・・ 6,600円 〉</span></p>
          </div>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 脂肪・セルライト撃退コース（上半身集中） 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img2.jpg"/>
            <p class="kairo_menu_comment">遠赤外線・ゲルマニウムヒートマット（20分）<br>
            協力マッサージ（バーニングセル使用）<br>
            二の腕、背中、ウエスト、腰周り、お腹、超音波トリートメントorEMSマシーン。<br><br>
            <span class="menu_fee">〈 所要時間（目安） 約60分 ・・・ 9,900円 〉</span>
            </p>
          </div>
        </div>
      </div>
      
      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 脂肪・セルライト撃退コース（下半身集中） 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img9.jpeg"/>
            <p class="kairo_menu_comment">遠赤外線・ゲルマニウムヒートマット（20分）<br>
            協力マッサージ（バーニングセル使用）<br>
            お尻、太もも、膝肉、ふくらはぎ、足首、超音波トリートメントorEMSマシーン。<br><br>
            <span class="menu_fee">〈 所要時間（目安） 約60分 ・・・ 9,900円 〉</span></p>
          </div>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 クレイ美肌フェイシャル（新規割引） 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img4.jpg"/>
            <p class="kairo_menu_comment"><span style="font-weight: bold;">「　お肌のお悩みに合わせたオーダーメイドフェイシャルコースです。　」<br>（しわ、シミ、たるみ、乾燥、ニキビ、若返り）</span><br><br>
          <span style="display: block; margin: 0 auto; text-align: center;">美顔調整<br>
          クレイマッサージ（顔・首・デコルテ）<br>
          美容液導入<br>
          ドライヘッドマッサージ<br>
          お仕上げ<br><br>
          （オプション　極上美容液パック（＋3,000円））<br><br>
          <span class="menu_fee">〈 所要時間（目安） 約60分 ・・・ 9,900円 〉</span>
          </p></span>
          </div>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 オールハンド・全身トリートメント（クレイクリーム）新規割引 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img1.jpg"/>  
              <p class="kairo_menu_comment">モンモリノナイト・クレイクリーム使用<br><br>
                                            オールハンドの全身トリートメントです。<br><br>
                                            <span class="menu_fee">〈 所要時間（目安） 約60分 ・・・ 8,800円 〉</span></p>
          </div>
        </div>
      </div>

      <div class="kairo_container">
        <div class="kairo_menu_title"><p class="kairo_menu_name">【 ブライダルコース 】</p><br>
          <div class="kairo_contents">
            <img class="kairo_image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kairo-img7.jpg"/>  
              <p class="kairo_menu_comment">
              背中、首筋、二の腕、ウエスト〜腰ラインをメインにドレスを美しく着こなせる美ラインをつくっていきます。<br>「美骨調整（ウエストくびれ、肩甲骨、鎖骨）」<br><br>
                                            ディープクレンジング → バーニングセル → ボディトリートメント → <br>
                                            コラキューティス、モイスチャーパックorクールパック → フィルムノーブルオイル<br><br>
                                            <span class="menu_fee">〈 所要時間（目安） 約60分 ・・・ 16,500円 〉</span></p>
          </div>
        </div>
      </div>
      </div>

      <div class="menu-link">
        <a href="https://tol-app.jp/s/shgt6zy182gfq2am4m49">予約をする</a>
      </div><br><br>
  </div>
</div>


<?php

get_footer();

