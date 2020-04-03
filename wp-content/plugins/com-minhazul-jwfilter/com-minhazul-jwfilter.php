<?php

/*
Plugin Name: JW Filter
Plugin URI: minhazul.com
Description: Wordpress Essencial Tutorial
Author: Minhazul Hayat Khan
Author URI: minhazul.com
*/

add_filter('the_title', function ($content) {
    $content = ucwords($content);
    return $content;
});

add_filter('the_content', function ($content) {
    return $content . ' ' . time();
});


add_action('wp_footer', function () {
    echo "HELLO FROM THE FOOTER";
});


add_action('comment_post', function () {
    $email = get_bloginfo('admin_email');
    wp_mail(
        $email,
        'New comment posted',
        'A new comment has been left on your blog'
    );
});

add_filter('the_content', function ($content) {
    $id = get_the_id();
    if (!is_singular('post')) {
        return $content;
    }

    $terms = get_the_terms($id, 'category');
    $cats = array();
    foreach ($terms as $term) {
        $cats[] = $term->term_id;
    }

    // print_r($terms);
    // print_r($terms);
    $loop = new WP_Query(
        array(
            'posts_per_page' => 3,
            'category__in' => $cats,
            'order_by' => 'rand',
            'post__not_in' => array($id),
        )
    );
    // print_r($loop);
    if ($loop->have_posts()) {
        print("IT IS IN");
        $content .= '
        <h2>You might also like... </h2>
        <ul class="related-categoy-posts">
        ';
        while ($loop->have_posts()) {
            $loop->the_post();
            $content .= '
                <li>
                <a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        $content .= '</ul>';
        wp_reset_query();
    }
    return $content;
});
