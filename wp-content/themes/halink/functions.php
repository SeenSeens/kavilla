<?php
/**
 * halink functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package halink
 */

if ( ! function_exists( 'halink_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function halink_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on halink, use a find and replace
		 * to change 'halink' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'halink', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
			// file does not exist... return an error.
			return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
		} else {
			// file exists... require it.
			require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		}

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'halink' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'halink_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'halink_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function halink_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'halink_content_width', 640 );
}
add_action( 'after_setup_theme', 'halink_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function halink_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'halink' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'halink' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(
		array(
			'name'	=> __('Liên hệ', 'halink'),
			'id'	=> 'contact',
			'description'	=> __('Đây là trang liên hệ', 'halink'),
			'before_widget'	=> '<div class="%1$s">',
			'after_widget'	=> '</div>',
		)
	);
	register_sidebar(
		array(
			'name'	=> __('Chân trang', 'halink'),
			'id'	=> 'footer',
			'description'	=> __('Đây là chân trang', 'halink'),
		)
	);
}
add_action( 'widgets_init', 'halink_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function halink_scripts() {
	wp_enqueue_style( 'halink-style', get_stylesheet_uri() );
	?><link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700,600,400&amp;subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'><?php
	wp_enqueue_style('bootstrap-style', get_template_directory_uri(). '/css/bootstrap.css', 'all');
	wp_enqueue_style('common-style', get_template_directory_uri(). '/css/common.css', 'all');
	wp_enqueue_style('phan_trang-style', get_template_directory_uri(). '/css/phan_trang.css', 'all');
	wp_enqueue_style('animate-style', get_template_directory_uri(). '/css/animate.css', 'all');
	wp_enqueue_style('carousel-style', get_template_directory_uri(). '/css/owl.carousel.css', 'all');
	wp_enqueue_style('flexslider-style', get_template_directory_uri(). '/css/flexslider.css', 'all');
	wp_enqueue_style('slick-style', get_template_directory_uri(). '/css/slick.css', 'all');
	wp_enqueue_style('slick-theme-style', get_template_directory_uri(). '/css/slick-theme.css', 'all');
	wp_enqueue_style('mostslider-style', get_template_directory_uri(). '/js/mostslider/default.css', 'all' );
	wp_enqueue_style('mmenu-style', get_template_directory_uri(). '/menureponsive/jquery.mmenu.all.css', 'all' );
	wp_enqueue_style('demo-style', get_template_directory_uri(). '/menureponsive/demo.css', 'all');

	wp_enqueue_script( 'halink-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'halink-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//wp_enqueue_script('', get_template_directory_uri(). '/js/jquery-1.8.2.min.js', array('jquery'));
	wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array('jquery'));
	wp_enqueue_script('bootstrap.min', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('npm', get_template_directory_uri(). '/js/npm.js', array('jquery'));
	wp_enqueue_script('mmenu', get_template_directory_uri(). '/menureponsive/jquery.mmenu.min.all.js', array('jquery'));
	wp_enqueue_script('modernizr-2.6.2', get_template_directory_uri(). '/js/mostslider/modernizr-2.6.2.min.js', array('jquery'));
	wp_enqueue_script('awesome', get_template_directory_uri(). '/js/awesome-grid-1.0.2.min.html', array('jquery'));
	wp_enqueue_script('mostslider', get_template_directory_uri(). '/js/mostslider/mostslider.js', array('jquery'));
	wp_enqueue_script('carousel', get_template_directory_uri(). '/js/owl.carousel.min.js', array('jquery'));
	wp_enqueue_script('wow', get_template_directory_uri(). '/js/wow.min.js', array('jquery'));
	wp_enqueue_script('flexslider', get_template_directory_uri(). '/js/jquery.flexslider.js', array('jquery'));
	wp_enqueue_script('slick', get_template_directory_uri(). '/js/slick.js', array('jquery'));

	wp_enqueue_script('jquery-1.100.1', get_template_directory_uri(). '/lib/jquery-1.100.1.min.html', array('jquery'));
	wp_enqueue_script('jquery-ui', get_template_directory_uri(). '/source/jquery-ui.min.js.js', array('jquery'));
	wp_enqueue_script('mousewheel', get_template_directory_uri(). '/lib/jquery.mousewheel-3.0.6.pack.js', array('jquery'));
	wp_enqueue_script('fancybox8cbb', get_template_directory_uri(). '/source/jquery.fancybox8cbb.js', array('jquery'));

	wp_enqueue_style('fancybox-buttons3447', get_template_directory_uri(). '/source/helpers/jquery.fancybox-buttons3447.css', 'all');
	wp_enqueue_script('fancybox-buttons3447', get_template_directory_uri(). '/source/helpers/jquery.fancybox-buttons3447.js', array('jquery'));

	wp_enqueue_style('fancybox-thumbsf2ad', get_template_directory_uri(). '/source/helpers/jquery.fancybox-thumbsf2ad.css', 'all');
	wp_enqueue_script('fancybox-thumbsf2ad', get_template_directory_uri(). '/source/helpers/jquery.fancybox-thumbsf2ad.js', array('jquery'));
	
	wp_enqueue_script('ancybox-mediac924', get_template_directory_uri(). '/source/helpers/jquery.fancybox-mediac924.js', array('jquery'));
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox({
		    padding : 0,
		    onUpdate:function(){
			    $('#fancybox-thumbs ul').draggable({
				    axis: "x"
			    });
			    var posXY = '';
			    $('.fancybox-skin').draggable({
				    axis: "x",
				    drag: function(event,ui){
					    // get position
                        posXY = ui.position.left;
                        // if drag distance bigger than +- 100px: cancel drag function..
                        if(posXY > 100){return false;}
					    if(posXY < -100){return false;}
				    },
				    stop: function(){
                        // ... and get next oder previous image
					    if(posXY > 95){$.fancybox.prev();}
					    if(posXY < -95){$.fancybox.next();}
				    }
			    });
		    }
		});

		// Change title type, overlay closing speed
		$(".fancybox-effects-a").fancybox({
			helpers: {
				title : {
					type : 'outside'
				},
				overlay : {
					speedOut : 0
				}
			}
		});

		// Disable opening and closing animations, change title type
		$(".fancybox-effects-b").fancybox({
			openEffect  : 'none',
			closeEffect	: 'none',
			helpers : {
				title : {
					type : 'over'
				}
			}
		});

		// Set custom style, close if clicked, change title type and overlay color
		$(".fancybox-effects-c").fancybox({
			wrapCSS    : 'fancybox-custom',
			closeClick : true,
			openEffect : 'none',
			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					css : {
						'background' : 'rgba(238,238,238,0.85)'
					}
				}
			}
		});

		// Remove padding, set opening and closing animations, close if clicked and disable overlay
		$(".fancybox-effects-d").fancybox({
			padding: 0,
			openEffect : 'elastic',
			openSpeed  : 150,
			closeEffect : 'elastic',
			closeSpeed  : 150,
			closeClick : true,
			helpers : {
				overlay : null
			}
		});

		$('.fancybox-buttons').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',
			closeBtn  : false,
			helpers : {
				title : {
					type : 'inside'
				},
				buttons	: {}
			},
			afterLoad : function() {
				this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
			}
		});

		$('.fancybox-thumbs').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',
			closeBtn  : false,
			arrows    : false,
			nextClick : true,
			helpers : {
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});

		$('.fancybox-media')
			.attr('rel', 'media-gallery')
			.fancybox({
				openEffect : 'none',
				closeEffect : 'none',
				prevEffect : 'none',
				nextEffect : 'none',
				arrows : false,
				helpers : {
					media : {},
					buttons : {}
				}
			});

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.html');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});
		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	<script>
	$(document).ready(function(){
    	$('nav#menu').mmenu();
    	$('.slick1').slick({});
    	$('.slick2').slick({});
    	$('.slick3').slick({});
    	$('.slick4').slick({});
    	$('.slick5').slick({});
        
		var slider = $("#slider11").mostSlider({
			aniSpeed: 1000,
			aniMethod: 'auto',
			pauseTime: 6000,
			autoPlay:false,
			transparancy: true,
			metrics: {
				width: 960,
				height: 533
			},
			contentClass: "content",
			sbsContent: true,
			contentAniDelay: 1000,
		});
     
		$(".various").fancybox({
			maxWidth	: 800,
			maxHeight	: 600,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
    
		$(".active1").show();
		$(".block-list-1 li a").click(function () {
			$(".block-list-1 li a").removeClass("active");
			$(this).addClass("active");
			var activeTab = $(this).attr("href");
			$(".block-detail-1").hide();
			$(activeTab).fadeIn();
			return false;
		});

		$(".block-detail-2:first").show();
		$(".block-list-2 li a").click(function () {
			$(".block-list-2 li a").removeClass("active");
			$(this).addClass("active");
			var activeTab = $(this).attr("href");
			$(".block-detail-2").hide();
			$(activeTab).fadeIn();
			return false;
		});

		$("a.tru").hide();
		$("a.cong").click(function () {
			$("a.cong").hide();
			$(".noidung").slideDown();
			$("a.tru").show();
			return false;
		});

		$("a.tru").click(function () {
			$("a.cong").show();
			$(".noidung").slideUp();
			$("a.tru").hide();
			return false;
		});
     
		var spkmslider = $("#spkm-slider");
			spkmslider.owlCarousel({
				items : 1,
				itemsCustom : false,
				itemsDesktop : [1199,1],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsTabletSmall: false,
				itemsMobile : [479,1],
				pagination: false,
				scrollPerPage: 1,
				autoPlay : false,
				stopOnHover : true,
				loop:true,
			});
			$(".spkmsliderNext").click(function (e) {
				e.preventDefault()
				spkmslider.trigger('owl.next');
			})
			$(".spkmsliderPrev").click(function (e) {
				e.preventDefault()
				spkmslider.trigger('owl.prev');

			})
		});
	</script>
	<script>
		new WOW().init();
	</script>
	<?php
}
add_action( 'wp_enqueue_scripts', 'halink_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Widget
 */
require_once get_parent_theme_file_path( '/widget/widget-contact.php' );
require_once get_parent_theme_file_path( '/widget/widget-footer.php' );
if(!function_exists('contact_widget')) {
	function contact_widget() {
		register_widget( 'Widget_Contact' );
		register_widget( 'Widget_Footer' );
	}
	add_action('widgets_init', 'contact_widget');
}

/**
 * Thêm class cho thẻ a phân trang
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="next_xem"';
}