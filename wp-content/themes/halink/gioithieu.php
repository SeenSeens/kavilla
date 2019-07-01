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
        $cat   = get_queried_object_id();
        $service = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => $cat,
            'orderby' => 'ID',
            'order' => 'DESC',
        ));
        ?>
        <?php if ($service->have_posts()) : ?>
        <div style="background: #121212;margin-bottom: 5px;">
            <ul class="block-list-2 tab-title">
                <?php while ($service->have_posts()) : $service->the_post(); ?>
                <li class="sole"><a href="#<?= the_ID(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; //wp_reset_query(); ?>
            </ul>
            <div class="clear"></div>
        </div>
        <div>
        <?php while ($service->have_posts()) : $service->the_post(); ?>
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
                                        <?= "<img src='$img[0]' class='img-responsive'"; ?>
                                        <?= "<img src='$img[0]' class='andat img-responsive'"; ?>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
        <?php endwhile; wp_reset_query(); ?>
        </div>       
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
