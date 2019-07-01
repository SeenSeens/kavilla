<?php
get_header();
?>
<?php
if(get_field('chuyen_muc','category_'.get_queried_object_id()) == '1') {
	require_once get_parent_theme_file_path( 'gioithieu.php' );
}
if(get_field('chuyen_muc','category_'.get_queried_object_id()) == '2') {
	require_once get_parent_theme_file_path( 'duan.php' );
}
if(get_field('chuyen_muc','category_'.get_queried_object_id()) == '3') {
	require_once get_parent_theme_file_path( 'vatlieu.php' );
}
if(get_field('chuyen_muc','category_'.get_queried_object_id()) == '4') {
	require_once get_parent_theme_file_path( 'thicong.php' );
}
?>
<?php
get_footer();
