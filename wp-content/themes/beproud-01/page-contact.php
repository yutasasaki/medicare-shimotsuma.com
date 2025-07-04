<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 *
 */

get_header(); ?>

<section class="contact">
	<h1>お問い合わせ<span>CONTACT</span></h1>
	<p>歯科医の診断・治療方針などに不安や疑問を感じた場合や、スタッフによる対応、医療設備や医院施設に関するご意見も承ります。<br>
	また、治療のご感想、頑張っているスタッフへの感謝のメッセージなども、ぜひお気軽にお寄せください。<br>
	いただきましたメッセージは、真摯に受けとめ、さらなるサービスの向上に取り組んでまいります。</p>
	<p><span style="color: red">*</span>は必須項目です</p>
	<?php echo do_shortcode('[contact-form-7 id="30" title="お問い合わせ"]'); ?>
</section>


<?php get_footer(); ?>
