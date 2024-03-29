<?php
	echo '</div>', // end of .container
    // FOOTER
         '<footer class="container-fluid">',
         '<div class="content clearfix">';
    // dynamic sidebar
    if ( is_active_sidebar( 'footer-left' ) ) :
        echo '<div class="col-md-4 dynamic-sidebar-footer-left">';
        dynamic_sidebar( 'footer-left' );
        echo '</div>';
    endif;

    if ( is_active_sidebar( 'footer-mid' ) ) :
        echo '<div class="col-md-4 dynamic-sidebar-footer-middle">';
        dynamic_sidebar( 'footer-mid' );
        echo '</div>';
    endif;

    if ( is_active_sidebar( 'footer-right' ) ) :
        echo '<div class="col-md-4 dynamic-sidebar-footer-right">';
        dynamic_sidebar( 'footer-right' );
        echo '</div>';
    endif;

    // COPYRIGHT
    echo '<div class="col-md-12 copyright">',
         '<p>',
		 '<strong>&copy;&nbsp;';
	echo '&nbsp;<a href="'.esc_url( home_url() ).'">'.get_bloginfo('name').'</a></strong>',
		 '&nbsp;&nbsp;|&nbsp;&nbsp;',
		 'powered by the&nbsp;',
         '<a href="http://apper.tech" title="ApperTech">Apper Tech</a> ',
         ' <a class="footer-rss-link" href="'.get_bloginfo('rss2_url').'" title="RSS Feed">RSS</a>',
	     '</p>',
         '</div>',
         '</div>', // End of .content
		 '</footer>';
 	wp_footer();
	echo '</body></html>';