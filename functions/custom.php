<?php 

function echo_args($args, $name, $tag = null, $class = null) {
    if (isset($args[$name])) {
        echo !empty($tag) ? "<$tag class='$class'> $args[$name] </$tag>" : $args[$name];
    }
}

function the_breadcrumbs() {
    if (!is_front_page()) {
        echo "<nav aria-label='breadcrumb'>
        <ol class='breadcrumb'>
            <li class='breadcrumb-item'>
                <a href='" . get_post_type_archive_link(get_post_type()) . "'>" . get_post_type_object(get_post_type())->labels->name . "</a></li>";
	
        if (is_category() || is_single() ){
            $categories = get_the_category();

            foreach($categories as $category) {
                echo "<li class='breadcrumb-item'><a href='" . get_category_link($category->cat_ID) . "'>" . $category->cat_name . "</li>";
            }
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                echo "<li class='breadcrumb-item'>" . get_the_date() . "</li>";
            } elseif ( is_month() ) {
                echo "<li class='breadcrumb-item'>" . get_the_date('F Y') . "</li>";
            } elseif ( is_year() ) {
                echo "<li class='breadcrumb-item'>" . get_the_date('Y') . "</li>";
            } else {
                echo "Archive";
            }
        }
	
        if (is_single() || is_page()) {
            echo "<li class='breadcrumb-item'>" . get_the_title() . "</li>";
        }

        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');

            if ( $page_for_posts_id ) { 
                $post = get_post($page_for_posts_id);

                setup_postdata($post);
                
                echo "<li class='breadcrumb-item'>" . get_the_title() . "</li>";
                rewind_posts();
            }
        }

        echo '</ol></nav>';
    }
}