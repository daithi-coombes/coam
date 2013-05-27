<?php

//hide sidebars
function coam_hide_sidebars(){
	foreach(array(
		'sidebar-1',
		'sidebar-2',
		'sidebar-3'
	) as $sidebar)
		unregister_sidebar($sidebar);
}
add_action('widgets_init', 'coam_hide_sidebars',10);