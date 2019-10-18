<?php
/*
 * Template Name: contact
 * 作者：WordPress花园
 *
 **/
get_header();

$page_banner = get_field('page_banner', get_queried_object_id()) ? get_field('page_banner', get_queried_object_id()) : get_field('page_banner', 'option');

?>
<style>
  .contact-map-content {
    height: 100%;
  }
  .companymap {
    height: 100%;
    max-height: 50vh;
  }

  #floating-panel {
    position: absolute;
    top: 10px;
    left: 25%;
    z-index: 5;
    background-color: #fff;
    padding: 5px;
    border: 1px solid #999;
    text-align: center;
    font-family: 'Roboto', 'sans-serif';
    line-height: 30px;
    padding-left: 10px;
  }
</style>
<section id="content" class="page-contact-block">
    <div class="page-top-banner">
        <div class="page-banner-img" style="background: url(<?php echo $page_banner?>) no-repeat center center; background-size: cover;">
            <div class="page-title-dec">
                <h1 style="text-shadow: 0 0 0.2rem black">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
  <div class="content-main">
    <div class="contact-info-block">
      <div class="container">
<!--        <div class="contact-block-info">-->
<!--          <div class="contact-block-title page-title">-->
<!--            <h1 class="contact-title-info page-title-info">--><?php //echo get_the_title(); ?><!--</h1>-->
<!--          </div>-->
<!--        </div>-->

        <div class="contact-block-contain">
          <div class="row">
            <?php echo do_shortcode("[gravityform id='". get_field("contact_page_form", "option") ."' title='false' description='false' ajax='true']"); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-inf-map">
      <div class="container">
          <div class="contact-info-title">
              <h4>会社信息</h4>
              <hr>
          </div>
        <div class="contact-map-block">

          <?php 
          $num = 0;
          $companyData = get_field('contact_company_list', get_the_ID());
          
          foreach($companyData as $value) {

          ?>

          <div class="contact-map-dec">

            <div class="row">

              <div class="col-12 col-md-4">
                <div class="contact-map-text">
                  <h3 class="contact-company-title">
                      <?php echo $value['contact_company_title'] ?>
                  </h3>
                  <div class="contact-company-adder contact-company-text">
<!--                    <span>--><?php //echo _e('地址', 'esone') ?><!--: </span>-->
                      <div class="contact-address"><span  class="contact-address-icon"></span>
                    <p><?php echo $value['contact_company_adder'] ?></p></div>
                  </div>
                  <div class="contact-company-tel contact-company-text">
                    <span><?php echo _e('TEL', 'esone') ?>: </span>
                    <span><?php echo $value['contact_company_tel'] ?></span>
                  </div>
                  <?php 
                    if($value['contact_company_fax']) {
                  ?>
                  <div class="contact-company-fax contact-company-text">
                    <span><?php echo _e('FAX', 'esone') ?>: </span>
                    <span><?php echo $value['contact_company_fax'] ?></span>
                  </div>
                  <?php 
                    }
                  ?>

                  <?php 
                    if($value['business_cooperation']) {
                  ?>                  
                  <div class="contact-company-business contact-company-text">
                    <span><?php echo _e('商务合作', 'esone') ?>: </span>
                    <span><?php echo $value['business_cooperation'] ?></span>
                  </div>
                  <?php 
                    }
                  ?>

                </div>
              </div>
              <div class="col-12 col-md-8">
                <div class="contact-map-content">
                  <div class="companymap" id="companyMap<?php echo $num ?>">
                    <?php echo $value['contact_company_map']; ?>
                  </div>
                </div>
              </div>

            </div>

          </div>
        <?php
        $num ++;
        }
        ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php

get_footer();

?>