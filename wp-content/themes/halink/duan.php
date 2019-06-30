<?php
/**
 * Template Name: Dự án
 */
get_header(); ?>
<?php
//$categories   = get_queried_object_id();
//echo '<pre>'; var_dump($categories); die;
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
	'parent'       => '3',
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
		xmlhttp.open("GET.html","../../ajaxpagea54e.html?page=" + page +"&cat="+cat,true);
		xmlhttp.send();
	}
</script>
<h1 class="hidden">Dự án Kavila</h1>
<h3 class="hidden">Kiến trúc Kavila</h3>
<h2 class="hidden">Kiến trúc Kavila</h2>
<div class="container-fluid" style="min-height: 550px;">
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
					//echo '<pre>'; print_r($id); die;
					$service = new WP_Query(array(
						'post_type' =>  'post',
						'post_status' => 'publish',
						'orderby' => 'ID',
						'order' => 'DESC',
						'cat' => $id
					)); ?>
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
						<?php if ($service->have_posts()) :  while ($service->have_posts()) : $service->the_post(); ?>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="<?php the_permalink(); ?>">
										<?php
										the_post_thumbnail('post_thumbnail', [
											'class' => 'img-responsive'
										])
										?>
										</a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">		
										<a href="<?php the_permalink(); ?>"><h2 class="product_title"><?php the_title(); ?></h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->    
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="<?php the_permalink(); ?>"></a>    
								</div>
							</li>
							<?php endwhile; wp_reset_query();
								else : get_template_part('template-parts/content', 'none');
                                endif;
                                ?>
							<li class="col-md-4 col-sm-6 col-xs-12 xem">
								<div><a href="javascript:;" onclick="loadSubMenu1(2,2)" class="next_xem">XEM THÊM...</a></div>
							</li>
						</ul>
					</div> <!-- end content-detail -->
				</div>
				<?php endforeach; wp_reset_query(); endif; ?> 
			</div>
		</div>
	</div>
</div>

<?php get_footer();
