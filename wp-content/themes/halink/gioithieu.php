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
        <div style="background: #121212;margin-bottom: 5px;">
            <ul class="block-list-2 tab-title">
                <li class="sole"><a class="active" href="#6">Văn phòng thiết kế</a></li>
                <li class="sole"><a href="#21">Xưởng nội thất</a></li>
                <li class="sole"><a href="#23">Nhân sự</a></li>
                <li class="sole"><a href="#25">Hoạt động</a></li>
                <li class="sole"><a href="#35">Cơ cấu - Chức năng</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div>
            <div class="block-detail-2" id="6">
                <div id="get_page6">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852212.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852212.jpg" alt="1" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852212.jpg" alt="1" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852223.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852223.jpg" alt="2" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852223.jpg" alt="2" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852232.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852232.jpg" alt="3" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852232.jpg" alt="3" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852243.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852243.jpg" alt="4" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852243.jpg" alt="4" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852253.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852253.jpg" alt="5" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852253.jpg" alt="5" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852262.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852262.jpg" alt="6" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852262.jpg" alt="6" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852273.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852273.jpg" alt="7" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852273.jpg" alt="7" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group6" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852283.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852283.jpg" alt="8" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553852283.jpg" alt="8" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 xem">
                            <div> <a href="javascript:;" onclick="loadSubMenu1(2,6)" class="next_xem">XEM THÊM...</a> </div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
            <div class="block-detail-2" id="21">
                <div id="get_page21">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445919695.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445919695.jpg" alt="Xưởng nội thất" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445919695.jpg" alt="Xưởng nội thất" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445919366.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445919366.jpg" alt="Xưởng nội thất" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445919366.jpg" alt="Xưởng nội thất" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445841988.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445841988.jpg" alt="f" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445841988.jpg" alt="f" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920915.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920915.jpg" alt="b" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920915.jpg" alt="b" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920402.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920402.jpg" alt="c" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920402.jpg" alt="c" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920411.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920411.jpg" alt="b" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920411.jpg" alt="b" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920937.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920937.jpg" alt="d" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445920937.jpg" alt="d" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group21" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445842021.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445842021.jpg" alt="xưởng" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1445842021.jpg" alt="xưởng" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
            <div class="block-detail-2" id="23">
                <div id="get_page23">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1554112610.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1554112610.jpg" alt="nhân sự" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1554112610.jpg" alt="nhân sự" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1554702424.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1554702424.jpg" alt="nhân sự" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1554702424.jpg" alt="nhân sự" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553939166.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553939166.jpg" alt="nhân sự" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553939166.jpg" alt="nhân sự" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553939921.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553939921.jpg" alt="nhân sự" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553939921.jpg" alt="nhân sự" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485237.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485237.jpg" alt="Hanh - Lan" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485237.jpg" alt="Hanh - Lan" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553940245.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553940245.jpg" alt="8" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553940245.jpg" alt="8" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553938929.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553938929.jpg" alt="2" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553938929.jpg" alt="2" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group23" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553938333.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553938333.jpg" alt="8" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553938333.jpg" alt="8" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
            <div class="block-detail-2" id="25">
                <div id="get_page25">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485475.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485475.jpg" alt="15" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485475.jpg" alt="15" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485485.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485485.jpg" alt="n1" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485485.jpg" alt="n1" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485496.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485496.jpg" alt="n2" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553485496.jpg" alt="n2" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1519900389.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1519900389.jpg" alt="Kavila Football 2018" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1519900389.jpg" alt="Kavila Football 2018" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1540431530.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1540431530.jpg" alt="abcd" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1540431530.jpg" alt="abcd" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1529119437.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1529119437.jpg" alt="An Banh Canh" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1529119437.jpg" alt="An Banh Canh" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1498720578.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1498720578.jpg" alt="2" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1498720578.jpg" alt="2" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group25" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497413216.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497413216.jpg" alt="ö" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497413216.jpg" alt="ö" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 xem">
                            <div><a href="javascript:;" onclick="loadSubMenu1(2,25)" class="next_xem">XEM THÊM...</a></div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
            <div class="block-detail-2" id="26">
                <div id="get_page26">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group26" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1475832529.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1475832529.jpg" alt="thi cong chu minh" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1475832529.jpg" alt="thi cong chu minh" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group26" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429236.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429236.jpg" alt="1" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429236.jpg" alt="1" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group26" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429266.html">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429266.html" alt="2" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429266.html" alt="2" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group26" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429305.html">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429305.html" alt="3" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429305.html" alt="3" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group26" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429348.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429348.jpg" alt="4" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1497429348.jpg" alt="4" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
            <div class="block-detail-2" id="35">
                <div id="get_page35">
                    <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group35" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553934690.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553934690.jpg" alt="1" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553934690.jpg" alt="1" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group35" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1555040807.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1555040807.jpg" alt="2" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1555040807.jpg" alt="2" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                        <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                            <div class="row">
                                <div class="detail">
                                    <a class="fancybox hiendat" rel="example_group35" href="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1555040504.jpg">
                                        <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1555040504.jpg" alt="3" class="img-responsive" />
                                    </a>
                                    <img class="andat img-responsive" src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1555040504.jpg" alt="3" />
                                </div> <!-- end detail -->
                            </div>
                        </li>
                    </ul>
                </div> <!-- end content-detail -->
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
