<div class="row">
	<div style="background: #121212;margin-bottom: 5px;line-height: 40px;" class="hihihehe">
		<!-- <a href="../../du-an/1/index.html"></a>&nbsp; / &nbsp;<span><a href="../../du-an/2/index.html"><?php //$id; ?></a></span>&nbsp; / &nbsp;<span><?php //the_title(); ?></span> -->
		<?php
		// if ( function_exists('yoast_breadcrumb') ) {
		// 	yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		// }
		?>
		<?php the_breadcrumb(); ?>
	</div>
	<div>
		<h1 class="hidden">NGUYỄN HOÀI NAM</h1>
		<h3 class="hidden">Biệt thự</h3>
		<h2 class="hidden">Dự án</h2>
		<?php
		$id   = get_queried_object_id();
		$result = get_post_meta($id, 'vdw_gallery_id', true);
		?>
		<div class="hahh" style="position: relative;padding-bottom: 15px;">
			<div class="slider re_album_slider">
				<div id="spkm-slider" class="owl-carousel owl-theme">
					<?php
					foreach ($result as $val) {
						$img = wp_get_attachment_image_src($val, 'full');
						?>
						<div>
							<div>
								<?= "<img src='$img[0]' class='img-responsive post-image' style='display: block;width:100%;height:auto;' />"; ?>
							</div>
							<div class='cc'>
								<div class='noidung' style='padding: 10px 0 10px 0;'>
									<div>
										<p><?php the_field('chu_dau_tu'); ?></p>
										<p><?php the_field('dia_chi'); ?></p>
										<p><?php the_field('dien_tich'); ?></p>
										<p><?php the_field('huong'); ?></p>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					echo $r;
					?>
					<div>
						<div>
							<img src="<?php bloginfo('template_directory'); ?>/uploads/albumsp/tmp_1557139238.jpg" alt="NGUYỄN HOÀI NAM" style="display: block;width:100%;height:auto;" />
						</div>
						<div class="cc">
							<div class="noidung" style="padding: 10px 0 10px 0;">
								<div>
									<p>Chủ đầu tư: Nguyễn Ho&agrave;i Nam</p>
									<p>Địa chỉ: P H&ograve;a Xu&acirc;n, tp Đ&agrave; Nẵng</p>
									<p>Diện t&iacute;ch: 20 x 25</p>
									<p>Hướng: T&acirc;y Bắc</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="slider-nav prev spkmsliderNext"><img src="<?php bloginfo('template_directory'); ?>/images/r.png" /></a>
				<a href="#" class="slider-nav next spkmsliderPrev"><img src="<?php bloginfo('template_directory'); ?>/images/l.png" /></a>
				<div class="clear"></div>
			</div>
		</div>
		<div class="an" style="margin-bottom: 10px;">	
			<div>
				<div>
					
					<?php foreach ($result as $val) {
						$img = wp_get_attachment_image_src($val, 'full');
						?>
						<div>
							<div style="margin-bottom: 4px;">
								<?= "<img src='$img[0]' class='img-responsive post-image' style='display: block;width:100%;height:auto;' />"; ?>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
		<div class="an">
			<div>
				<div class="noidung">
					<div style="color: #636363;font-size: 12px;">
						<p><?php the_field('chu_dau_tu'); ?></p>
						<p><?php the_field('dia_chi'); ?></p>
						<p><?php the_field('dien_tich'); ?></p>
							<p><?php the_field('huong'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>