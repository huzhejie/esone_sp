<?php 

/* 
 *
 * Template Name: account
 * 作者：WordPress花园
 * 
 */
get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>

<section id="content">
  <div class="page-top-banner">
    <div class="page-banner-img" style="background: url(<?php echo $page_banner?>) no-repeat center center; background-size: cover;">
      <div class="page-title-dec">
        <h1>
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="content-main">
    <div class="account-block">
      <div class="account-content">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[user_registration_my_account]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();
?>