<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
function isMobile() {
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    }
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset($_SERVER['HTTP_VIA'])) {
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile',
        );
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    // 协议法，因为有可能不准确，放到最后判断
    if (isset($_SERVER['HTTP_ACCEPT'])) {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false)
            && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false
                || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    return false;
}
?>


<footer id="footer" class="dark footer-block">

    <div class="container">
        <div class="footer-widgets-wrap clearfix">
            <div class="row">
                <div class="col-12">
                    <div class="footer-site-menu">
                        <div class="footer-site-logo">
                            <img src="<?php the_field('footer_logo', 'option') ?>" alt="footer logo">
                            <div class="contact-block-dec">
                                <?php
                                $contactInfoDate = get_field('contact_info', 'option');
                                foreach($contactInfoDate as $value) {
                                    if (true){
                                        ?>
                                        <!--            <h6>--><?php //_e('微信联系我们', 'esone');?><!--</h6>-->
                                        <div class="contact-dec-wechat">

                                            <?php
                                            foreach($value['contact_us_time'] as $time) {


                                                ?>
                                                <!--                  <span>--><?php //_e('工作日', 'esone');?><!--：--><?php //echo $time['contact_us_workday'] ?><!--</span>-->
                                                <!--                  <span>--><?php //_e('双休日', 'esone');?><!--：--><?php //echo $time['contact_us_two-day_dayoffs'] ?><!--</span>-->
                                                <!--                    <img src="--><?php //the_field('weixin_img', 'option')?><!--" alt="wechat">-->
                                                <div class="contact-block-add">
                                                    <div><p>東京都台東区元浅草1-20-9 Estate One BLD.5F・6F</p></div>
                                                    <div class="contact-contents">
                                                        <p>TEL: 03-5826-4777</p><p>FAX: 03-5826-4778</p>
                                                        <!--                            <div class="contact-left"><span>TEL: 03-5826-4777</span><br><span>FAX: 03-5826-4778</span></div>-->
                                                        <!--                            <div class="contact-right"><span>工作日：09:00 ~ 20:00</span><br><span>双休日：10:00 ~ 18:00</span></div>-->
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
//                                    else{
//                                        ?>
<!--                                        <div class="contact-dec-wechat">-->
<!---->
<!--                                            --><?php
//                                            foreach($value['contact_us_time'] as $time) {
//
//
//                                                ?>
<!--                                                <div class="contact-block-add"><p>東京都台東区元浅草1-20-9 <br> Estate One BLD.5F・6F</p>-->
<!--                                                    <div class="contact-left" style="font-size: 12px"><span>TEL: 03-5826-4777</span><br><span>FAX: 03-5826-4778</span></div>-->
<!--                                                </div>-->
<!--                                                <div>-->
<!--                                                    <div class="contact-right" style="float: right"><span>工作日：09:00 ~ 20:00</span><br><span>双休日：10:00 ~ 18:00</span><br><span style="float: right">--><?php //_e('微信联系我们', 'esone');?><!--</span></div>-->
<!---->
<!--                                                    <img src="--><?php //the_field('weixin_img', 'option')?><!--" alt="wechat"></div>-->
<!--                                                --><?php
//                                            }
//                                            ?>
<!--                                        </div>-->
<!--                                        --><?php
//                                    }
                                }?>

                            </div>
                        </div>
                        <?php
                        if ( has_nav_menu( 'social' ) ) : ?>
                            <nav class="social-footer-navigation" role="navigation">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'social',
                                    'menu_class'     => 'social-links-menu',
                                    'depth'          => 1,
                                    'link_before'    => '<span class="screen-reader-text">',
                                    'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                                ) );
                                ?>
                            </nav>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <?php
            global $sitepress; $current_lang = $sitepress->get_current_language();
            if($current_lang === "zh-hans") {
                ?>

                <?php
            }
            ?>
        </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<div id="gotoTop" class="icon-angle-up"></div>
<?php wp_footer(); ?>

</body>

</html>