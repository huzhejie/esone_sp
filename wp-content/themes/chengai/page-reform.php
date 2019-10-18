<?php

/* 
 *
 * Template Name: reform
 * 作者：WordPress花园
 * 
 * 
**/

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
            <div class="reform-lists-block">
                <div class="reform-lists-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="reform-lists-info">
                                    <?php $reform_data = get_field('reform_history_list',  get_queried_object_id());
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
                                    $index = 1;
                                    if(!isMobile()) {
                                        foreach ($reform_data as $data_list) {

                                            if ($index % 2 == 1) {
                                                ?>
                                                <div class="reform-lists-dec reform-lists-left">
                                                    <div class="before-reform" id="before-<?php echo $index ?>">
                                                        <span><?php echo $data_list['reform_time'] ?></span>
                                                    </div>
                                                    <div class="reform-dec-img">
                                                        <img src="<?php echo $data_list['reform_banner'] ?>" alt="">
                                                    </div>
                                                    <div class="reform-dec-content">
                                                        <?php
                                                        foreach ($data_list['reform_content'] as $reform_content) {
                                                            ?>
                                                            <p><?php echo $reform_content['reform_content_info'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="after-reform" id="after-<?php echo $index ?>"></div>
                                                </div>
                                                <?php
                                                $index += 1;
                                            } else {
                                                ?>
                                                <div class="reform-lists-dec reform-lists-right">
                                                    <div class="before-reform" id="before-<?php echo $index ?>">
                                                        <span><?php echo $data_list['reform_time'] ?></span></div>
                                                    <div class="reform-dec-content">
                                                        <?php
                                                        foreach ($data_list['reform_content'] as $reform_content) {
                                                            ?>
                                                            <p><?php echo $reform_content['reform_content_info'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="reform-dec-img">
                                                        <img src="<?php echo $data_list['reform_banner'] ?>" alt="">
                                                    </div>
                                                    <div class="after-reform" id="after-<?php echo $index ?>"></div>
                                                </div>
                                                <?php
                                                $index += 1;
                                            }
                                            ?>
                                            <div class="reform-lists-dec reform-lists-left">
                                                <div class="before-reform" id="before-7"><scan>至今</scan></div>
                                            </div>
                                            <?php

                                        }
                                    } else{
                                        foreach ($reform_data as $data_list) {
                                            ?>
                                            <div class="reform-lists-dec reform-lists-left">
                                                <div class="before-reform" id="before-<?php echo $index ?>">
                                                    <span><?php echo $data_list['reform_time'] ?></span>
                                                </div>
                                                <div class="reform-dec-img">
                                                    <img src="<?php echo $data_list['reform_banner'] ?>" alt="">
                                                </div>
                                                <div class="reform-dec-content">
                                                    <?php
                                                    foreach ($data_list['reform_content'] as $reform_content) {
                                                        ?>
                                                        <p><?php echo $reform_content['reform_content_info'] ?></p>
                                                    <?php } ?>
                                                </div>
                                                <div class="after-reform" id="after-<?php echo $index ?>"></div>
                                            </div>
                                            <?php
                                            $index+=1;
                                        }
                                    }?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        // 获取元素的绝对位置坐标（像对于页面左上角）
        function getElementPagePosition(element){
            //计算x坐标
            var actualLeft = element.offsetLeft;
            var current = element.offsetParent;
            while (current !== null){
                actualLeft += current.offsetLeft;
                current = current.offsetParent;
            }
            //计算y坐标
            var actualTop = element.offsetTop;
            var current = element.offsetParent;
            while (current !== null){
                actualTop += (current.offsetTop+current.clientTop);
                current = current.offsetParent;
            }
            //返回结果
            return {x: actualLeft, y: actualTop}
        }
        var elements = document.getElementsByClassName('reform-dec-img');
        var length = elements.length;
        var fnLineChart = function () {
            for( var i = 0;i<length;i++) {
                var ele = elements[i];
                var eleNext = elements[i+1];
                if(!eleNext) {
                    eleNext = document.getElementById('before-7');
                    eleNext.style.left='40%';
                }
                var beginPoint = getElementPagePosition(ele);
                var endPoint = getElementPagePosition(eleNext);
                if(i%2===0) {
                    document.getElementById('before-'+(i+1)).style.left = '40%';
                    var x1 = beginPoint.x , y1 = beginPoint.y;
                    var x2 = endPoint.x, y2 = endPoint.y;
                }
                else{
                    document.getElementById('before-'+(i+1)).style.left = '60%';
                    var x1 = beginPoint.x, y1 = beginPoint.y;
                    var x2 = endPoint.x , y2 = endPoint.y;
                }
                if(i+1===length){
                    var radius = Math.atan((y1-y2+document.body.clientWidth*0.05)/(x2-x1));
                }else {
                    var radius = Math.atan((y1 - y2 - document.body.clientWidth * 0.05) / (x2 - x1));
                }console.log(x1,y1,x2,y2);
                document.getElementById('after-'+(i+1)).style.height = "calc(100% + 30px)";
                document.getElementById('after-'+(i+1)).style.transform = 'translate3d(0,15%,0) rotate('+radius+'rad)';
            }
        };
        /**
         * @return {boolean}
         */
        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }

        if(IsPC()) {
            fnLineChart();
            fnLineChart();
            window.addEventListener('resize',function () {
                fnLineChart();
            })
        }
    </script>
<?php

get_footer();

?>