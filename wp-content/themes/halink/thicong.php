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
            <div style="background: #121212;margin-bottom: 5px;">
                <ul style="display:none" class="block-list-1 tab-title">
                    <li class="sole"><a class="active" href="#30">Thi Công</a></li>        
                </ul>
                <div class="clear"></div>
            </div>
            <div>
                <div class="block-detail-1 active1" id="30">
                    <div id="get_page30">
                        <ul class="ga" style="margin: 0;padding: 0;list-style: none;">
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/559/jade-lounge.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551752871.jpg" alt="Jade Lounge" class="img-responsive"/>
                                        </a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;"> 
                                        <a href="../../view-detail/559/jade-lounge.html"><h2 class="product_title">Jade Lounge</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/559/jade-lounge.html"></a>                        
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/560/hoang-thi-hoa.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551753062.jpg" alt="Hoàng Thị Hoa" class="img-responsive"/>
                                        </a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
                                        <a href="../../view-detail/560/hoang-thi-hoa.html"><h2 class="product_title">Hoàng Thị Hoa</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/560/hoang-thi-hoa.html"></a>                        
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/561/nguyen-van-nga.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551753423.jpg" alt="Nguyễn Văn Ngà" class="img-responsive"/>
                                        </a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
                                        <a href="../../view-detail/561/nguyen-van-nga.html"><h2 class="product_title">Nguyễn Văn Ngà</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/561/nguyen-van-nga.html"></a>                        
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/562/tran-lich.html">
                                            <img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551753642.jpg" alt="Trần Lịch" class="img-responsive"/>
                                        </a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
                                        <a href="../../view-detail/562/tran-lich.html"><h2 class="product_title">Trần Lịch</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/562/tran-lich.html"></a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/558/le-thi-mong-van.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551752377.jpg" alt="Lê Thị Mộng Vân" class="img-responsive"/></a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
                                        <a href="../../view-detail/558/le-thi-mong-van.html"><h2 class="product_title">Lê Thị Mộng Vân</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/558/le-thi-mong-van.html"></a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/563/duy-phuong.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551754400.jpg" alt="Duy Phương" class="img-responsive"/></a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
                                        <a href="../../view-detail/563/duy-phuong.html"><h2 class="product_title">Duy Phương</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->
                                        <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/563/duy-phuong.html"></a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/564/pham-dac-quang.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551755014.jpg" alt="Phạm Đắc Quang" class="img-responsive"/></a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
                                        <a href="../../view-detail/564/pham-dac-quang.html"><h2 class="product_title">Phạm Đắc Quang</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/564/pham-dac-quang.html"></a>                        
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
                                <div class="row">
                                    <div class="detail">
                                        <a href="../../view-detail/565/nguyen-manh-thang.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1551755177.jpg" alt="Nguyễn Mạnh Thắng" class="img-responsive"/></a>
                                    </div> <!-- end detail -->                        
                                    <div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;"> 
                                        <a href="../../view-detail/565/nguyen-manh-thang.html"><h2 class="product_title">Nguyễn Mạnh Thắng</h2></a>
                                        <div class="thanhngang"></div>
                                        <p class="intro"></p>
                                    </div> <!-- end tooltip-detail -->                        
                                    <a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view-detail/565/nguyen-manh-thang.html"></a>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12 xem">
                                <div><a href="javascript:;" onclick="loadSubMenu1(2,30)" class="next_xem">XEM THÊM...</a></div>
                            </li>
                        </ul>
                    </div> <!-- end content-detail -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
