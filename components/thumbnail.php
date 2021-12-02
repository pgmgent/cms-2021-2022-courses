<?php
    if (has_post_thumbnail()) {
        the_post_thumbnail($args['size']);
    } else {
        echo "<img src='jouw-fallback-image' />"; // Use get_theme_file_uri.
    }