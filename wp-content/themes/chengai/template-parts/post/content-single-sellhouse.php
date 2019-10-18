<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

$abc = new FilterInfo();
$exchangeRate = get_field('exchange_rate', 'option');

?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<div class="single-sellhouse-content">
		<div class="single-sellhouse-block">
			<div class="sellhouse-content-top single-content-block">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="top-content-imgs">
							<div class="swiper-container gallery-top">
								<div class="swiper-wrapper">
									<?php
										$photo_data_house = get_field('house_pictures', get_the_ID());
										foreach ($photo_data_house as $i) {
											?>
									<div class="swiper-slide"
										style="background:url(<?php echo $i['url'] ?>) no-repeat center center; background-size: cover;"
										alt="<?php echo $i['title'] ?>"></div>
									<?php
										}
										?>
								</div>
								<div class="swiper-button-next swiper-button-white"></div>
								<div class="swiper-button-prev swiper-button-white"></div>
							</div>
							<div class="swiper-container gallery-thumbs">
								<div class="swiper-wrapper">
									<?php
									$photo_data_house = get_field('house_pictures', get_the_ID());
									foreach ($photo_data_house as $i) {
											?>
									<div class="swiper-slide" style="background:url(<?php echo $i['url'] ?>) no-repeat center center; background-size: cover;" alt="<?php echo $i['title'] ?>"></div>
									<?php
										}
										?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="top-content-info">
							<div class="content-info-lists">
								<div class="content-info-list sign-content-price">
									<div class="house-price">
										<span class="content-title">
											<?php _e('价格', 'esone')?>
										</span>
										<div class="content-dec">
											<?php $price_num = (int) get_field('total_price', get_the_ID()); echo $abc->house_price_num($price_num);?><?php _e('日元', 'esone')?>
											<em>(<?php _e('约合', 'esone')?><?php echo $abc->house_price_num($price_num / $exchangeRate) ?><?php _e('人民币', 'esone')?>)</em>
										</div>
									</div>
									<div class="house-annual">
										<span class="content-title"><?php _e('收益率', 'esone')?></span>
										<div class="content-dec"><?php the_field('annual_return', get_the_ID())?>%</div>
									</div>
								</div>

								<div class="content-info-list">
									<div class="house-type content-list-block">
										<span class="content-title"><?php _e('房型', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('door_model', get_the_ID()) ? the_field('door_model', get_the_ID()) : print_r('---');?>
										</div>
									</div>
									<div class="content-list-block">
										<span class="content-title"><?php _e('租金回报率', 'esone')?>：</span>
										<div class="content-dec">
											<?php
											$rent_num = get_field('rent_money', get_the_ID());

											$rent_num ? print_r(($rent_num / $price_num) . '%') : print_r('---');

											?>
										</div>
									</div>
								</div>
								<div class="content-info-list">
									<div class="content-list-block">
										<span class="content-title"><?php _e('建筑年代', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('building_age', get_the_ID()) ? the_field('building_age', get_the_ID()) . _e('年', 'esone') : print_r('---');?>
										</div>
									</div>
									<div class="content-list-block">
										<span class="content-title"><?php _e('楼层', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('house_floor', get_the_ID()) ? the_field('house_floor', get_the_ID()) . _e('层', 'esone') : print_r('---');?>/<?php _e('共', 'esone')?><?php get_field('total_floor', get_the_ID()) ? the_field('total_floor', get_the_ID()) . _e('层', 'esone') : print_r('---');?>
										</div>
									</div>
								</div>
								<div class="content-info-list">
									<div class="content-list-block">
										<span class="content-title"><?php _e('房产面积', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('house_area', get_the_ID()) ? the_field('house_area', get_the_ID()) . _e('m<sup>2</sup>', 'esone') : print_r('---');?>
										</div>
									</div>
									<div class="content-list-block">
										<span class="content-title"><?php _e('土地面积', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('area_land', get_the_ID()) ? the_field('area_land', get_the_ID()) . 'm<sup>2</sup>' : print_r('---');?>
										</div>
									</div>
								</div>

								<div class="content-info-list">
									<div class="content-list-block">
										<span class="content-title"><?php _e('地址', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('house_address', get_the_ID()) ? the_field('house_address', get_the_ID()) : print_r('---');?>
										</div>
									</div>
								</div>

								<div class="content-info-list">
									<div class="content-list-block">
										<span class="content-title"><?php _e('交通', 'esone')?>：</span>
										<div class="content-dec">
											<?php get_field('traffic', get_the_ID()) ? the_field('traffic', get_the_ID()) : print_r('---');?>
										</div>
									</div>
								</div>
							</div>
							<div class="contact-house-block">
								<div class="contact-info-btn">
									<button
										class="button button-rounded button-reveal button-large button-red tright contact-btn"
										data-toggle="modal"
										data-target=".form-example-modal-lg"><?php _e('在线咨询', 'esone')?></button>

									<div class="modal fade form-example-modal-lg" tabindex="-1" role="dialog"
										aria-labelledby="houseContactForm" aria-hidden="true">
										<div class="modal-dialog modal-lg house-form-moxb">
											<div class="modal-body">
												<div class="modal-content">
													<div class="modal-header">
														<h3 class="modal-title" id="houseContactForm">
															<?php _e('联系置业顾问', 'esone')?></h3>
														<button type="button" class="close" data-dismiss="modal"
															aria-hidden="true">&times;</button>
													</div>
													<div class="modal-body row">
														<div class="col-12 col-md-4">
															<div class="contact-block-dec">
																<?php 
																	  $contactInfoDate = get_field('contact_info', 'option');
																	  foreach($contactInfoDate as $value) {
												  
																	  
																	?>
																<div class="contact-dec-phone">
																	<h5><?php _e('电话咨询', 'esone');?></h5>
																	<p><?php echo $value['contact_us_phone'] ?></p>
																</div>
																<div class="contact-dec-wechat">
																	<h5><?php _e('微信联系我们', 'esone');?></h5>
																	<?php 
																		foreach($value['contact_us_time'] as $time) {
												  
																		
																	  ?>
																	<span><?php _e('工作日', 'esone');?>：<?php echo $time['contact_us_workday'] ?></span>
																	<span><?php _e('双休日', 'esone');?>：<?php echo $time['contact_us_two-day_dayoffs'] ?></span>
																	<img src="<?php the_field('weixin_img', 'option')?>"
																		alt="wechat">
																</div>
																<?php 
																  }
																}
															  ?>
															</div>
														</div>
														<div class="col-12 col-md-8">
															<div class="house-form-content">
																<?php echo do_shortcode("[gravityform id='". get_field("house_single_form", "option")."' title='false' description='false' ajax='true']"); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="contact-info-text">
									<div class="contact-info-dec">
										<div class="phone-icon-block">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.png" alt="">
										</div>
										<div class="contact-dec-text">
											<p class="contact-dec-title">
												<?php get_field('contact_company_name', get_the_ID()) ? the_field('contact_company_name', get_the_ID()) : print_r('---');?>
											</p>
											<p class="phone-number">
												<?php get_field('contact_company_phone', get_the_ID()) ? the_field('contact_company_phone', get_the_ID()) : print_r('---');?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sellhouse-content-info single-content-block">
				<div class="page-content-title">
					<h3><?php _e('房屋介绍', 'esone')?></h3>
				</div>
				<div class="house-info-text page-content-info">
					<?php get_field('house_description', get_the_ID()) ? the_field('house_description', get_the_ID()) : print_r('---');?></span>
				</div>
			</div>
			<div class="sellhouse-content-dec single-content-block">
				<div class="page-content-title">
					<h3><?php _e('详细信息', 'esone')?></h3>
				</div>
				<div class="sellhouse-info-text page-content-info">
					<div class="sellhouse-info-lists">
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('价格', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php echo $abc->house_price_num($price_num); ?><?php _e('日元', 'esone')?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('收益率', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('annual_return', get_the_ID()) ? the_field('annual_return', get_the_ID()) . '%' : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('建筑年代', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('building_age', get_the_ID()) ? the_field('building_age', get_the_ID()) . _e('年', 'esone') : print_r('---');?><?php ?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('建筑结构', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('building_structure', get_the_ID()) ? the_field('building_structure', get_the_ID()) : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('房产面积', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('house_area', get_the_ID()) ? the_field('house_area', get_the_ID()) . _e('m<sup>2</sup>', 'esone') : print_r('---');?>

								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('土地面积', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('area_land', get_the_ID()) ? the_field('area_land', get_the_ID()) . _e('m<sup>2</sup>', 'esone') : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('阳台面积', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('balcony_area', get_the_ID()) ? the_field('balcony_area', get_the_ID()) . _e('m<sup>2</sup>', 'esone') : print_r('---');?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('车库面积', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('garage_area', get_the_ID()) ? the_field('garage_area', get_the_ID()) . _e('m<sup>2</sup>', 'esone') : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('总楼层', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('total_floor', get_the_ID()) ? the_field('total_floor', get_the_ID()) . _e('层', 'esone') : print_r('---');?><?php ?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('所在层', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('house_floor', get_the_ID()) ? the_field('house_floor', get_the_ID()) . _e('层', 'esone') : print_r('---');?><?php ?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('房型', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('door_model', get_the_ID()) ? the_field('door_model', get_the_ID()) : print_r('---');?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('朝向', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('house_orientation', get_the_ID()) ? the_field('house_orientation', get_the_ID()) : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('租赁情况', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('circumstances_tenancy', get_the_ID()) ? the_field('circumstances_tenancy', get_the_ID()) : print_r('---');?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('租金', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('rent_money', get_the_ID()) ? the_field('rent_money', get_the_ID()) . _e('日元', 'esone') : print_r('---');?><?php ?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('每月管理费', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('monthly_management_fee', get_the_ID()) ? the_field('monthly_management_fee', get_the_ID()) . _e('日元', 'esone') : print_r('---');?><?php ?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('修缮费', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('repair_charge', get_the_ID()) ? the_field('repair_charge', get_the_ID()) . _e('日元', 'esone') : print_r('---');?><?php ?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('建蔽率', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('coverage_rate', get_the_ID()) ? the_field('coverage_rate', get_the_ID()) . '%' : print_r('---');?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('容积率', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('plot_ratio', get_the_ID()) ? the_field('plot_ratio', get_the_ID()) . '%' : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('用途地域', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('use_regional', get_the_ID()) ? the_field('use_regional', get_the_ID()) : print_r('---');?>
								</div>
							</div>
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('土地权利', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('land_right', get_the_ID()) ? the_field('land_right', get_the_ID()) : print_r('---');?>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('地址', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('house_address', get_the_ID()) ? the_field('house_address', get_the_ID()) : print_r('---');?></span>
								</div>
							</div>
						</div>
						<div class="sellhouse-info-list">
							<div class="sellhouse-list-content list-content">
								<span class="sellhouse-list-title list-title"><?php _e('交通', 'esone')?></span>
								<div class="sellhouse-list-text list-text">
									<?php get_field('traffic', get_the_ID()) ? the_field('traffic', get_the_ID()) : print_r('---');?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sellhouse-content-cost single-content-block">
				<div class="page-content-title">
					<h3><?php _e('购房相关费用', 'esone')?></h3>
				</div>
				<div class="cost-content-block page-content-info">
					<div class="cost-info-lists">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="cost-transaction-list">
									<div class="list-content-title">
										<?php _e('交易费用', 'esone')?>
									</div>
									<div class="list-content-block">
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('中介手续费', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('intermediary_fee', get_the_ID()) ? the_field('intermediary_fee', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>
												</div>
											</div>
										</div>
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('不动产取得税', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('acquisition_tax', get_the_ID()) ? the_field('acquisition_tax', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>

												</div>
											</div>
										</div>
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('消费税', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('consumption_tax', get_the_ID()) ? the_field('consumption_tax', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>

												</div>
											</div>
										</div>
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('印花税', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('stamp_tax', get_the_ID()) ? the_field('stamp_tax', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="cost-holding-list">
									<div class="list-content-title">
										<?php _e('持有费用', 'esone')?>
									</div>
									<div class="list-content-block">
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('固定资产税', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('fixed_asset_tax', get_the_ID()) ? the_field('fixed_asset_tax', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>

												</div>
											</div>
										</div>
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('都市计划税', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('urban_planning_tax', get_the_ID()) ? the_field('urban_planning_tax', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="cost-rentout-list">
									<div class="list-content-title">
										<?php _e('出租管理公司费用', 'esone')?>
									</div>
									<div class="list-content-block">
										<div class="cost-info-list">
											<div class="cost-list-content list-content">
												<span class="cost-list-title list-title"><?php _e('每月管理费', 'esone')?></span>
												<div class="cost-list-text list-text">
													<?php get_field('monthly_management_fee', get_the_ID()) ? the_field('monthly_management_fee', get_the_ID()) . _e('日元', 'esone') : print_r('---');?>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sellhouse-file-download single-content-block">
				<div class="page-content-title">
					<h3><?php _e('文件下载', 'esone')?></h3>
				</div>
				<div class="file-download-text page-content-info">
					<?php $fileData = get_field('file_down', get_the_ID());
						if(!$fileData) {
							echo "<div class='file-down-link'>"._e('没有文件可下载', 'esone')."</div>";
						}
            			foreach ($fileData as $value) {
							
						?>
					<?php if($value['file_down_local']) { 
							foreach($value['file_down_local'] as $local) {
							?>
					<div class="file-down-block">

						<div class="file-down-title">
							<?php echo $local['file_down_local_content']['title'] ?>
						</div>
						<div class="file-down-link">
							<?php if (is_user_logged_in()) {
													echo "<a download href=". $local['file_down_local_content']['url']." >".__('文件下载', 'esone')."</a>";
												}else {
													echo "<a href='#' data-toggle='modal' data-target='#fileDoenLogin'>".__('文件下载', 'esone')."</a>";
												}
								?>

						</div>
					</div>
					<?php }}?>
					<?php 
									if($value['file_down_other']) {
										foreach($value['file_down_other'] as $other) {
								?>
					<div class="file-down-block">


						<div class="file-down-title">
							<?php echo $other['file_down_other_title'] ?>
						</div>
						<div class="file-down-link">
							<?php if (is_user_logged_in()) {
												echo "<a download href=". $other['file_down_other_link']." >".__('文件下载', 'esone')."</a>";
											}else {
												echo "<a href='#' data-toggle='modal' data-target='#fileDoenLogin'>".__('文件下载', 'esone')."</a>";
											}
											?>

						</div>
					</div>
					<?php 
								}
									}
								?>
					<?php
							}
						?>
				</div>
			</div>
			<div class="sellhouse-content-loan single-content-block">
				<div class="page-content-title">
					<h3><?php _e('贷款工具', 'esone')?></h3>
				</div>
				<div class="loan-info-text page-content-info">
					<div class="loan-content-lists">
						<div class="loan-content-list">
							<div class="form-group row">
								<label class="loan-list-title col-sm-2 col-form-label"
									for="inlineFormInputGroupPrice"><?php _e('房价总额', 'esone')?></label>
<!--								<div class="col-sm-10 row">-->
									<div class="col-6 col-sm-6">
										<div class="input-group">
											<input type="number" class="form-control" id="inlineFormInputGroupPrice"
												value="<?php echo $price_num ?>">
											<div class="input-group-prepend">
												<div class="input-group-text" style="padding: 0 10px"><?php _e('元', 'esone')?></div>
											</div>
										</div>

									</div>
									<div class="col-2 col-sm-2">
										<select class="form-control currency-list" style="background-color: #585858;color: white; border: none">
											<option><?php _e('人民币', 'esone')?></option>
											<option><?php _e('日元', 'esone')?></option>
										</select>
									</div>
<!--								</div>-->
							</div>
						</div>
						<div class="loan-content-list">
							<div class="form-group row">
								<label class="loan-list-title col-sm-2 col-form-label"
									for="inlineFormInputGroupRofit"><?php _e('贷款利率', 'esone')?></label>
<!--								<div class="col-sm-10 row" >-->
									<div class="col-6 col-sm-6">
										<div class="input-group">
											<input type="number" step="0.01" class="form-control"
												id="inlineFormInputGroupRofit" value="3.0" placeholder="3.0">
											<div class="input-group-prepend">
												<div class="input-group-text" style="padding: 0 10px">%</div>
											</div>
										</div>
									</div>
<!--								</div>-->
							</div>
						</div>
						<div class="loan-content-list">

							<div class="form-group row">
								<label class="loan-list-title col-sm-2 col-form-label"><?php _e('首付比例', 'esone')?></label>
<!--								<div class="col-sm-10 row">-->
									<div class="col-8 col-sm-8">
										<input class="down-payment-input" />
									</div>
<!--								</div>-->
							</div>

						</div>
						<div class="loan-content-list">

							<div class="form-group row">
								<label class="loan-list-title col-sm-2 col-form-label"><?php _e('贷款期限', 'esone')?></label>
<!--								<div class="col-sm-10 row">-->
									<div class="col-8 col-sm-8">
										<input class="terms-loan-input" />
									</div>
<!--								</div>-->
							</div>

						</div>
						<div class="loan-content-list">

							<div class="form-group row">
								<label class="loan-list-title col-sm-2 col-form-label"><?php _e('首付金额', 'esone')?></label>
<!--								<div class="col-sm-10 row">-->
									<div class="col-6">
										<p class="payment-amount-text">

										</p>
									</div>
<!--								</div>-->
							</div>

						</div>
						<div class="loan-content-list" style="margin: 0">
							<button class="btn btn-primary calculate-btn" data-toggle="modal"
								data-target=".bs-example-modal-lg"><?php _e('开始计算', 'esone')?></button>
							<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
								aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-body">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myModalLabel"><?php _e('计算结果', 'esone')?></h4>
												<button type="button" class="close" data-dismiss="modal"
													aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">
												<div class="loan-details-block">
													<div class="loan-details-content">
														<div class="loan-details-list">
															<p class="details-list-title"><?php _e('贷款总额', 'esone')?></p>
															<p class="details-list-text loan-rental-js"></p>
														</div>
														<div class="loan-details-list">
															<p class="details-list-title"><?php _e('还款月数', 'esone')?></p>
															<p class="details-list-text repayment-months-js">
															</p><span><?php echo _e('月', 'esone'); ?></span>
														</div>
														<div class="loan-details-list">
															<p class="details-list-title"><?php _e('每月还款', 'esone')?></p>
															<p class="details-list-text monthly-payments-js"></p>
														</div>
														<div class="loan-details-list">
															<p class="details-list-title"><?php _e('总支付利息', 'esone')?></p>
															<p class="details-list-text gross-interest"></p>
														</div>
														<div class="loan-details-list">
															<p class="details-list-title"><?php _e('本息合计', 'esone')?></p>
															<p class="details-list-text loan-interest-js"></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sellhouse-content-map single-content-block">
				<div class="page-content-title">
					<h3><?php _e('周边情况', 'esone')?></h3>
				</div>
				<div class="map-content-block page-content-info">
					<div class="house-map-content">
						<div class="house-map-add house-info-content">
							<span class="house-info-title"><?php _e('地址', 'esone')?></span>
							<div class="house-info-text">
								<?php get_field('house_address', get_the_ID()) ? the_field('house_address', get_the_ID()) : print_r('---');?></span>
							</div>
						</div>
						<div class="house-map-traffic house-info-content">
							<span class="house-info-title"><?php _e('交通', 'esone')?></span>
							<div class="house-info-text">
								<?php get_field('traffic', get_the_ID()) ? the_field('traffic', get_the_ID()) : print_r('---');?>
							</div>
						</div>
					</div>
					<style>
						#houseMap {
							height: 450px;
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
					<div class="map" id="houseMap"></div>
					<script>
						function initMap() {
							var map = new google.maps.Map(document.getElementById('houseMap'), {
								zoom: 20,
								center: { lat: 35.6693863, lng: 139.6012968 },
							});
							var geocoder = new google.maps.Geocoder();

							geocodeAddress(geocoder, map);
						}

						function geocodeAddress(geocoder, resultsMap) {
							var address = "<?php get_field('house_address', get_the_ID()) ? the_field('house_address', get_the_ID()) : print_r('东京');?>";
							geocoder.geocode({ 'address': address }, function (results, status) {
								if (status === 'OK') {
									resultsMap.setCenter(results[0].geometry.location);
									var marker = new google.maps.Marker({
										map: resultsMap,
										position: results[0].geometry.location
									});
								} else {
									alert('Geocode was not successful for the following reason: ' + status);
								}
							});
						}

					</script>
					<script async defer
						src="https://maps.google.cn/maps/api/js?key=AIzaSyDDgh5YT3wLv6RwWSGKbVuEG3_xpvW3OyY&callback=initMap"></script>
				</div>
			</div>

			<div class="sellhouse-content-simil single-content-block">
				<div class="page-content-title">
					<h3><?php _e('周边相似房源', 'esone')?></h3>
				</div>

				<div class="simil-content-block page-content-info">
					<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin carousel-widget"
						data-margin="1" data-nav="false" data-pagi="false" data-autoplay="3000" data-items-xs="1"
						data-items-sm="2" data-items-md="3" data-items-xl="4">
						<?php
$catId = get_the_terms(get_the_ID(), 'city')[0]->term_id;
$postArray = array(
    'post_type' => 'sellhouse',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',

    'tax_query' => array(
        array(
            'taxonomy' => 'city',
            'field' => 'term_id',
            'terms' => array($catId),
        ),
    ),
);

$tag_query = new WP_Query($postArray);
// var_dump($tag_query);
if ($tag_query->have_posts()) {
    while ($tag_query->have_posts()) {
        $tag_query->the_post()
        ?>
						<div class="oc-item">
							<div class="simil-post-content">
								<a href="<?php the_permalink();?>">
									<div class="house-img-content">
										<img src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
        echo $img_data[0]?>" alt="abc">
									</div>
									<div class="house-dec-content">
										<div class="dec-text-lists">

											<div class="dec-text-title">
												<span>
													<?php echo get_the_title(); ?>
												</span>
											</div>
<!--											<div class="dec-text-module">-->
<!--												<span>-->
<!--													--><?php //get_field('door_model', get_the_ID()) ? the_field('door_model', get_the_ID()) : print_r('---');?>
<!--												</span>-->
<!--											</div>-->
											<div class="dec-text-price">
												<span>
													<?php echo $abc->house_price_num($price_num) ?><?php _e('日元', 'esone')?>
												</span>
											</div>

										</div>
									</div>
								</a>
							</div>
						</div>
						<?php
}
}
?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="fileDoenLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo _e('下载错误', 'esone'); ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo _e('请登录之后进行文件下载', 'esone') ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo _e('关闭', 'esone') ?></button>
				</div>
			</div>
		</div>
	</div>
</article>
<!-- #post-## -->