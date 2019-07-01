<?php
/**
 * Template Name: Giới thiệu
 */
get_header();
?>
<script>
    function loadSubMenu1(page, cat) {
        var xmlhttp;
        if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('get_page' + cat).innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET.html", "ajaxpage1a54e.html?page=" + page + "&cat=" + cat, true);
        xmlhttp.send();
    }
</script>

<h1 class="hidden">Nội thất Kavila</h1>
<h3 class="hidden">Kiến trúc Kavila</h3>
<h2 class="hidden">Kiến trúc Kavila</h2>
<div class="container-fluid" style="min-height: 550px;">
    <div class="container">
        <?php
        //$cat   = get_queried_object_id();
        //echo '<pre>'; var_dump($cat); die;
        $service = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => '6',
            'orderby' => 'ID',
            'order' => 'DESC',
        ));
        ?>
        <?php if ($service->have_posts()) :  while ($service->have_posts()) : $service->the_post(); ?>
        <div style="background: #121212;margin-bottom: 5px;">
            <ul class="block-list-2 tab-title">
                <li class="sole"><a href="#<?= the_ID(); ?>"><?php the_title(); ?></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div>
            <div class="block-detail-2" id="<?php the_ID(); ?>">
                <div id="get_page<?= the_ID(); ?>">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                    <?php
                    $id   = get_the_ID();
                    $result = get_post_meta($id, 'vdw_gallery_id', true);
                    foreach ($result as $val) {
                        $img = wp_get_attachment_image_src($val, 'full');
                        
						?>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852212.jpg">
                                        <?= "<img src='$img[0]' class='img-responsive'"; ?>
                                    </a>
                                    <?= "<img src='$img[0]' class='andat img-responsive'"; ?>
                                </div> <!-- end detail -->
                            </div>
                        </li>
                    <?php } ?>
                        <li class="col-md-4 col-sm-6 col-xs-12 xem">
                            <div> <a href="javascript:;" onclick="loadSubMenu1(2,6)" class="next_xem">XEM THÊM...</a> </div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
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
