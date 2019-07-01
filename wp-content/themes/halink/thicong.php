<?php
/**
 * Template Name: Thi công
 */
get_header();
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
<h1 class="hidden">Thi công Kavila</h1>
<h3 class="hidden">Kiến trúc Kavila</h3>
<h2 class="hidden">Kiến trúc Kavila</h2>
<div class="container-fluid" style="min-height: 550px;">
    <div class="container">
        <div class="row">
        <?php
        $cat   = get_queried_object_id();
        $service = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => $cat,
            'orderby' => 'ID',
            'order' => 'DESC',
        ));
        ?>
        <?php if ($service->have_posts()) :  while ($service->have_posts()) : $service->the_post(); ?>
            <div style="background: #121212;margin-bottom: 5px;">
                <ul style="display:none" class="block-list-1 tab-title">
                    <li class="sole"><a class="active" href="#<?= the_ID(); ?>"><?php the_title(); ?><</a></li>  
                </ul>
                <div class="clear"></div>
            </div>
            <div>
                <div class="block-detail-1 active1" id="30">
                    <div id="get_page30">
                        <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <?php
                        /* $id   = get_the_ID();
                        $result = get_post_meta($id, 'vdw_gallery_id', true);
                        foreach ($result as $val) {
                            $img = wp_get_attachment_image_src($val, 'full');  */                       
						?>
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
                                        <a href="<?php the_permalink(); ?>"
                                            ><h2 class="product_title"><?php the_title(); ?></h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="<?php the_permalink(); ?>"></a>                        
                                </div>
                            </li>
                        <?php //} ?>
                        </ul>
                    </div> <!-- end content-detail -->
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_query();
        else : get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div>
</div>
<?php
get_footer();