<?php
get_header();
$categories   = get_queried_object_id();
$taxonomy     = 'category';
$orderby      = 'name';
$show_count   = 0;
$pad_counts   = 0;  
$hierarchical = 1;
$title        = '';
$empty        = 0;
$parent       = $categories;
$args = array(
	'taxonomy'     => $taxonomy,
	'orderby'      => $orderby,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title,
	'hide_empty'   => $empty,
	'parent'       => $parent,
);
$all_categories = get_categories($args);
?>
<script>
	function loadSubMenu1(page,cat)
	{
		var xmlhttp;
		if (window.XMLHttpRequest)
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById('get_page'+cat).innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("duan.php","../../ajaxpagea54e.html?page=" + page +"&cat="+cat,true);
		xmlhttp.send();
	}
</script>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div style="background: #121212;margin-bottom: 5px;">
				<ul class="block-list-1 tab-title">
				<?php if($all_categories) : foreach($all_categories as $cat) : ?>
					<li><a href="#<?= $cat->term_id; ?>"><?= $cat->name; ?></a></li>
					<?php endforeach; wp_reset_query(); endif; ?> 
				</ul>
				<div class="clear"></div>
			</div>	
			<div>
			<?php if($all_categories) : foreach($all_categories as $cat) : ?>
				<div class="block-detail-1" id="<?= $cat->term_id; ?>">
					<div id="get_page<?= $cat->term_id; ?>">
					<?php 
					$id = $cat->term_id;
					$service = new WP_Query(array(
						'post_type' =>  'post',
						'post_status' => 'publish',
						'orderby' => 'ID',
						'order' => 'DESC',
						'cat' => $id,
						'posts_per_page'    =>  4
					)); ?>
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
						<?php if ($service->have_posts()) :  while ($service->have_posts()) : $service->the_post();
							$max_post_count = $service->post_count;
						?>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="<?php the_permalink(); ?>">
										<?php
										the_post_thumbnail('post_thumbnail', [
											'class' => 'img-responsive',
											'style' => 'max-height: 366px'
										])
										?>
										</a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;">		
										<a href="<?php the_permalink(); ?>"><h2 class="product_title"><?php the_title(); ?></h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->    
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="<?php the_permalink(); ?>"></a>    
								</div>
							</li>
							<?php if($stt == 1 || $stt == $max_post_count):?></div><?php endif;?>
							<?php $stt++; endwhile;?>
							<?php devvn_corenavi_ajax($service);?>
							<li class="col-md-4 col-sm-6 col-xs-12 xem">
								<div>
								<?php
$news = new WP_Query(array(
    'post_type'         =>  'post',
    'posts_per_page'    =>  4
));
if($news->have_posts()):
    $max_post_count = $news->post_count;
    ?>
    <div class="home_tintuc">
    <div class="container">
        <div class="home_news_main">
            <div class="home_news_wrap">	
                <?php $stt = 1; while ($news->have_posts()):$news->the_post();?>
            <?php if($stt == 1):?><div class="home_news_col1"><?php endif;?>
                    <?php if($stt == 2):?><div class="home_news_col2"><?php endif;?>
                        <?php
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
                        $urlThumb = $thumb['0'];
                        ?>
                        <div class="tintuc_box <?php if(has_post_thumbnail()):?>has_post_thumbnail<?php endif;?>">
                            <?php if(has_post_thumbnail()):?>
                                <div class="tintuc_box_thumb"><a href="<?php the_permalink();?>" title="<?php the_title()?>" style="background: url(<?php echo $urlThumb;?>) no-repeat center center"><?php the_post_thumbnail('thumbnail');?></a></div>
                            <?php endif;?>
                            <div class="tintuc_box_infor">
                                <h3><a href="<?php the_permalink();?>" title="<?php the_title()?>"><?php the_title();?></a></h3>
                                <div class="news_infor_cat"><?php the_category(', ');?></div>
                                <div class="news_date"><?php echo get_the_date();?></div>
                                <div class="news_excerpt"><?php the_excerpt();?></div>
                                <a href="<?php echo get_the_permalink();?>" title="<?php the_title();?>" rel="nofollow" class="news_readmore"><?php _e('Xem thêm >>','devvn')?></a>
                            </div>
                        </div>
                        <?php if($stt == 1 || $stt == $max_post_count):?></div><?php endif;?>
                    <?php $stt++; endwhile;?>
                </div>
                <?php devvn_corenavi_ajax($news);?>
            </div>
        </div>
    </div>
<?php endif; wp_reset_query();//End news?>
								</div>
							</li>					
							<?php endif; ?>
							
						</ul>
						<div class="clear"></div>
					</div> <!-- end content-detail -->
				</div>
				<?php endforeach; wp_reset_query(); endif; ?> 
			</div>
		</div>
	</div>
</div>

<?php get_footer();
