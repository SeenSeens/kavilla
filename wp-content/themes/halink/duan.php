<?php
/**
 * Template Name: Dự án
 */
get_header(); ?>

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
				<ul  class="block-list-1 tab-title">
					<li ><a class="active2" href="#2">Biệt thự</a></li>
					<li ><a  href="#1">Bar, nhà hàng, cafe</a></li>
					<li ><a  href="#3">Nhà phố</a></li>
					<li ><a  href="#5">Homestay, hotel</a></li>	    
				</ul>
				<div class="clear"></div>
			</div>
			<div>
				<div class="block-detail-1 active1" id="2">
					<div id="get_page2">
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/589/nguyen-hoai-nam.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194687.jpg" alt="NGUYỄN HOÀI NAM" class="img-responsive"/></a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">		
										<a href="../../view/589/nguyen-hoai-nam.html"><h2 class="product_title">NGUYỄN HOÀI NAM</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->    
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/589/nguyen-hoai-nam.html"></a>    
								</div>
							</li>
                     		<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/542/le-hau.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194702.jpg" alt="Lê Hậu" class="img-responsive"/></a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">	
										<a href="../../view/542/le-hau.html"><h2 class="product_title">Lê Hậu</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                    
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/542/le-hau.html"></a>      
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/517/hoang-thi-hoa.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194712.jpg" alt="Hoàng Thị Hoa" class="img-responsive"/></a>
									</div> <!-- end detail -->  
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/517/hoang-thi-hoa.html"><h2 class="product_title">Hoàng Thị Hoa</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                       
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/517/hoang-thi-hoa.html"></a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/539/ocean-villa.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1542077673.jpg" alt="Ocean Villa" class="img-responsive"/></a>
									</div> <!-- end detail -->                      
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/539/ocean-villa.html"><h2 class="product_title">Ocean Villa</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/539/ocean-villa.html"></a>
								</div>
							</li>
                     		<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/506/trinh-thai-hoang.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194758.jpg" alt="Trịnh Thái Hoàng" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/506/trinh-thai-hoang.html"><h2 class="product_title">Trịnh Thái Hoàng</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                       
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/506/trinh-thai-hoang.html">                        
									</a>     
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/515/pham-thi-ngoc-ha.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194800.jpg" alt="Phạm Thị Ngọc Hà" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/515/pham-thi-ngoc-ha.html"><h2 class="product_title">Phạm Thị Ngọc Hà</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                       
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/515/pham-thi-ngoc-ha.html"></a> 
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/516/huynh-thi-kim-trang.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194814.jpg" alt="Huỳnh Thị Kim Trang" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/516/huynh-thi-kim-trang.html"><h2 class="product_title">Huỳnh Thị Kim Trang</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/516/huynh-thi-kim-trang.html"></a>                       
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/507/nguyen-viet-thuong.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1557194835.jpg" alt="Nguyễn Viết Thương" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/507/nguyen-viet-thuong.html"><h2 class="product_title">Nguyễn Viết Thương</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                       
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/507/nguyen-viet-thuong.html"></a>                       
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 xem">
								<div><a href="javascript:;" onclick="loadSubMenu1(2,2)" class="next_xem">XEM THÊM...</a></div>
							</li>
						</ul>
					</div> <!-- end content-detail -->
				</div>
				<div class="block-detail-1 " id="1">
					<div id="get_page1">
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/518/jade-lounge.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553484581.jpg" alt="Jade Lounge" class="img-responsive"/></a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/518/jade-lounge.html"><h2 class="product_title">Jade Lounge</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->  
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/518/jade-lounge.html"></a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/439/babylon-coffee.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1485154723.jpg" alt="BABYLON COFFEE" class="img-responsive"/></a>
									</div> <!-- end detail -->
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/439/babylon-coffee.html"><h2 class="product_title">BABYLON COFFEE</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                       
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/439/babylon-coffee.html"></a>
                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/408/cabene-coffee.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1474338144.jpg" alt="CABENE COFFEE" class="img-responsive"/></a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/408/cabene-coffee.html"><h2 class="product_title">CABENE COFFEE</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/408/cabene-coffee.html"></a>    
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/391/liferia-coffee-3.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1463710086.jpg" alt="Liferia coffee 3" class="img-responsive"/></a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/391/liferia-coffee-3.html"><h2 class="product_title">Liferia coffee 3</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/391/liferia-coffee-3.html"></a>    
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/393/thap-beer.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1466497284.jpg" alt="Tháp beer" class="img-responsive"/></a>
									</div> <!-- end detail -->
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/393/thap-beer.html"><h2 class="product_title">Tháp beer</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/393/thap-beer.html"></a>   
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/373/liferia-coffee.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1461920525.jpg" alt="Liferia coffee" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/373/liferia-coffee.html"><h2 class="product_title">Liferia coffee</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/373/liferia-coffee.html"></a>     
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/519/jbk-coffee--bakery.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1540375764.jpg" alt="JBK Coffee & Bakery" class="img-responsive"/></a>
									</div> <!-- end detail -->                       
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/519/jbk-coffee--bakery.html"><h2 class="product_title">JBK Coffee & Bakery</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/519/jbk-coffee--bakery.html"></a>                       
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/521/liferia--spa.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1540433715.jpg" alt="Liferia & Spa" class="img-responsive"/></a>
									</div> <!-- end detail -->      
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/521/liferia--spa.html"><h2 class="product_title">Liferia & Spa</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/521/liferia--spa.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 xem">
								<div><a href="javascript:;" onclick="loadSubMenu1(2,1)" class="next_xem">XEM THÊM...</a></div>
							</li>
						</ul>
					</div> <!-- end content-detail -->
				</div>
				<div class="block-detail-1 " id="3">
					<div id="get_page3">
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
									<a href="../../view/541/le-thanh-binh.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1553484116.jpg" alt="Lê Thanh Bình" class="img-responsive"/></a>
								</div> <!-- end detail -->                       
								<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
									<a href="../../view/541/le-thanh-binh.html"><h2 class="product_title">Lê Thanh Bình</h2></a>
									<div class="thanhngang"></div>
									<p class="intro"></p>
								</div> <!-- end tooltip-detail -->                       
								<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/541/le-thanh-binh.html"></a>     
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/537/trinh-thi-kim-quy.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1541236323.jpg" alt="Trịnh Thị Kim Quy" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/537/trinh-thi-kim-quy.html"><h2 class="product_title">Trịnh Thị Kim Quy</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->  
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/537/trinh-thi-kim-quy.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/513/pham-hoai-thuong.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1527558723.jpg" alt="Phạm Hoài Thương" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/513/pham-hoai-thuong.html"><h2 class="product_title">Phạm Hoài Thương</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/513/pham-hoai-thuong.html"></a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/491/hoang-gia-tuyen.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1516608765.jpg" alt="Hoàng Gia Tuyên" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/491/hoang-gia-tuyen.html"><h2 class="product_title">Hoàng Gia Tuyên</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/491/hoang-gia-tuyen.html"></a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/478/pham-hong-phuong.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1505786898.jpg" alt="Phạm Hồng Phượng" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/478/pham-hong-phuong.html"><h2 class="product_title">Phạm Hồng Phượng</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/478/pham-hong-phuong.html"></a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/476/le-thi-mong-van.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1505533201.jpg" alt="Lê Thị Mộng Vân" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/476/le-thi-mong-van.html"><h2 class="product_title">Lê Thị Mộng Vân</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/476/le-thi-mong-van.html">                        
									</a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/477/vo-thi-kim-lien.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1505548186.jpg" alt="Võ Thị Kim Liên" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/477/vo-thi-kim-lien.html"><h2 class="product_title">Võ Thị Kim Liên</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/477/vo-thi-kim-lien.html"></a>    
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/459/phan-quy.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1490243041.jpg" alt="Phan Quý" class="img-responsive"/></a>
									</div> <!-- end detail -->
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/459/phan-quy.html"><h2 class="product_title">Phan Quý</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/459/phan-quy.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 xem">
								<div><a href="javascript:;" onclick="loadSubMenu1(2,3)" class="next_xem">XEM THÊM...</a></div>
							</li>
						</ul>
					</div> <!-- end content-detail -->
				</div>
				<div class="block-detail-1 " id="5">
					<div id="get_page5">
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/694/apartment.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1559873263.jpg" alt="APARTMENT" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/694/apartment.html"><h2 class="product_title">APARTMENT</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/694/apartment.html"></a>
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/692/jpk-apartment.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1559795682.jpg" alt="JPK APARTMENT" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/692/jpk-apartment.html"><h2 class="product_title">JPK APARTMENT</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/692/jpk-apartment.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/449/khach-san-viet-phat-huy.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1485158871.jpg" alt="Khách sạn Việt Phát Huy" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/449/khach-san-viet-phat-huy.html"><h2 class="product_title">Khách sạn Việt Phát Huy</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/449/khach-san-viet-phat-huy.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/540/chuong-vang-apartment.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1542080968.jpg" alt="Chuông Vàng Apartment" class="img-responsive"/></a>
									</div> <!-- end detail -->   
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/540/chuong-vang-apartment.html"><h2 class="product_title">Chuông Vàng Apartment</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail --> 
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/540/chuong-vang-apartment.html"></a>          
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/392/homestay-hoi-an.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1540373922.jpg" alt="Homestay Hội An" class="img-responsive"/></a>
									</div> <!-- end detail -->
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/392/homestay-hoi-an.html"><h2 class="product_title">Homestay Hội An</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/392/homestay-hoi-an.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/82/tp-camranh-hotel.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1444824645.jpg" alt="TP CamRanh Hotel" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/82/tp-camranh-hotel.html"><h2 class="product_title">TP CamRanh Hotel</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail --> 
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/82/tp-camranh-hotel.html"></a>                        
								</div>
							</li>
						</ul>
					</div> <!-- end content-detail -->
				</div>
				<div class="block-detail-1 " id="27">
					<div id="get_page27">
						<ul class="ga" style="margin: 0;padding: 0;list-style: none;">
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/546/jade-lounge.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1550022914.jpg" alt="Jade Lounge" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/546/jade-lounge.html"><h2 class="product_title">Jade Lounge</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->  
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/546/jade-lounge.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/545/hoang-thi-hoa.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1550030640.jpg" alt="Hoàng Thị Hoa" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/545/hoang-thi-hoa.html"><h2 class="product_title">Hoàng Thị Hoa</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->      
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/545/hoang-thi-hoa.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/547/nguyen-van-nga.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1550030329.jpg" alt="Nguyễn Văn Ngà" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;bottom: -101%;z-index: 99;">
										<a href="../../view/547/nguyen-van-nga.html"><h2 class="product_title">Nguyễn Văn Ngà</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/547/nguyen-van-nga.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/538/tran-lich.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1541393168.jpg" alt="Trần Lịch" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/538/tran-lich.html"><h2 class="product_title">Trần Lịch</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/538/tran-lich.html"></a>    
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/482/duy-phuong.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1520216923.jpg" alt="Duy Phương" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/482/duy-phuong.html"><h2 class="product_title">Duy Phương</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/482/duy-phuong.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/493/le-thi-mong-van.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1519702215.jpg" alt="Lê Thị Mộng Vân" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/493/le-thi-mong-van.html"><h2 class="product_title">Lê Thị Mộng Vân</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/493/le-thi-mong-van.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/492/pham-dac-quang.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1519702906.jpg" alt="Phạm Đắc Quang" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/492/pham-dac-quang.html"><h2 class="product_title">Phạm Đắc Quang</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/492/pham-dac-quang.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 giat" style="position: relative;">
								<div class="row">
									<div class="detail">
										<a href="../../view/480/nguyen-manh-thang.html"><img src="<?php bloginfo('template_directory'); ?>/uploads/product/tmp_1520218498.jpg" alt="Nguyễn Mạnh Thắng" class="img-responsive"/></a>
									</div> <!-- end detail -->                        
									<div class="tooltip-detail" style="position: absolute;top: -101%;z-index: 99;">
										<a href="../../view/480/nguyen-manh-thang.html"><h2 class="product_title">Nguyễn Mạnh Thắng</h2></a>
										<div class="thanhngang"></div>
										<p class="intro"></p>
									</div> <!-- end tooltip-detail -->                        
									<a class="an" style="display: block;width: 100%;height: 100%;position: absolute;top: 0;z-index: 999;" href="../../view/480/nguyen-manh-thang.html"></a>                        
								</div>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12 xem">
								<div><a href="javascript:;" onclick="loadSubMenu1(2,27)" class="next_xem">XEM THÊM...</a></div>
							</li>
						</ul>
					</div> <!-- end content-detail -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
