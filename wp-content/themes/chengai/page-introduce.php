<?php

/* 
 *
 * Template Name: introduce
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
                    <h1 style="text-shadow: 0 0 0.2rem black">
                        <?php echo get_the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="content-main">
            <div class="introduce-block">
                <div class="introduce-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="introduce-info-title">
                                    <h2>01</h2>
                                    <div class="introduce-info-text">
                                        <h3>Our Business</h3><h4>事业介绍</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 introduce-info-text">
                                <?php the_field('introduce_content', get_queried_object_id()) ?>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="introduce-info-logo">
                                    <img src="<?php the_field('introduce_logo', get_queried_object_id()) ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="introduce-info-title">
                                    <h2>02</h2>
                                    <div class="introduce-info-text">
                                        <h3>Summary</h3><h4>会社概要</h4>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-12">
                                <div class="introduce-info-table">
                                    <div class="introduce-info-entry">
                                        <div class="introduce-info-entry-title"><p>社名</p><p>Company Name</p></div>
                                        <div class="introduce-info-entry-property"><span>株式会社エステート・ワン</span></div>
                                    </div>
                                    <div class="introduce-info-entry">
                                        <div class="introduce-info-entry-title"><p>本社所在地</p><p>Head Office</p></div>
                                        <div class="introduce-info-entry-property"><span>東京都台東区元浅草1-20-9 Estate One BLD. 5F·6F（アクセスマップ）</span><br><span>Tel：03-5826-4777</span></div>
                                    </div>
                                    <div class="introduce-info-entry">
                                        <div class="introduce-info-entry-title"><p>代表者</p><p>Representative</p></div>
                                        <div class="introduce-info-entry-property"><span>王　雷, President</span></div>
                                    </div>
                                    <div class="introduce-info-entry">
                                        <div class="introduce-info-entry-title"><p>設立</p><p>Foundation</p></div>
                                        <div class="introduce-info-entry-property"><span>2014年6月7日</span></div>
                                    </div>
                                    <div class="introduce-info-entry">
                                        <div class="introduce-info-entry-title"><p>資本金</p><p>Capital</p></div>
                                        <div class="introduce-info-entry-property"><span>7,203百万円(2019年3月末現在)</span></div>
                                    </div>
                                    <div class="introduce-info-entry">
                                        <div class="introduce-info-entry-title"><p>事業内容</p><p>Bussiness Portfolio</p></div>
                                        <div class="introduce-info-entry-property"><span>不動産開発</span><br><span>売買</span><br><span>賃貸</span><br><span>管理</span><br><span>コンサルティング</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-10" style="margin: auto">
                                <div class="introduce-info-licence">
                                    <img src="<?php the_field('introduce_img', get_queried_object_id()) ?>" alt="">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="introduce-info-title">
                                    <h2>03</h2>
                                    <div class="introduce-info-text">
                                        <h3>Office Scene</h3><h4>办公室一览</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="introduce-info-office">
                                    <img src="../../../wp-content/uploads/2019/09/introduce-office-1.png" alt="">
                                    <img src="../../../wp-content/uploads/2019/09/introduce-office-2.png" alt="">
                                    <img src="../../../wp-content/uploads/2019/09/introduce-office-3.png" alt="">
                                    <img src="../../../wp-content/uploads/2019/09/introduce-office-4.png" alt="">

                                </div>
                            </div>
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