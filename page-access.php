
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

<div class="access">
  <div class="title">
    <div class="title-up">information / access</div>
    <div class="title-middle">-</div>
    <div class="title-down">サロン案内／アクセス</div>
  </div>

  <div class="home-image">
    <%= image_tag asset_path("este_room6.jpg"), class:"home" %>
  </div>

  <div class="access-adress">
    <div class="name">【　HEALTH & BEAUTY  TORa　】</div>
    <div class="adress">〒381-2223 長野県長野市里島27-2<br> タウンコートいずみ B102号室</div>
    <div class="phone-number">TEL 090-3408-3514</div>
    <div class="time">営業時間 10：00 〜 17：00 </div>
    完全予約制
  </div>

  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.8945784601055!2d138.15274949999994!3d36.580758200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d8384790b477f%3A0x10a1138aa568a0b2!2z44CSMzgxLTIyMjMg6ZW36YeO55yM6ZW36YeO5biC6YeM5bO277yS77yX4oiS77ySIOOCv-OCpuODs-OCs-ODvOODiCDjgYTjgZrjgb8gQQ!5e0!3m2!1sja!2sjp!4v1690082679566!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


</div>

<?php

get_footer();
