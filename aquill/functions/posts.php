<?php

function get_posts() {
    return Registry::get('posts');
}

function has_posts() {
    return count(Registry::get('posts'));
}

function post_author() {
    $author = Registry::prop('post', 'author');
    
    return sprintf('<a class="post-author" href="%s">%s</a>',
        $author->link(),
        $author->real_name);
}

function post_id() {
    return Registry::prop('post', 'id');
}

function post_title() {
    return apply_filters('post_title', Registry::prop('post', 'title'));
}

function post_date() {
    return Registry::prop('post', 'created');
}

function post_content() {
    return apply_filters('post_content', Registry::prop('post', 'html'));
}

function post_excerpt() {
    return Registry::prop('post', 'html');
}

function post_text() {
    return Registry::prop('post', 'html');
}

function post_link() {
    return Registry::prop('post', 'link');
}

function post_previous() {
    return Registry::prop('post', 'prev');
}

function post_next() {
    return Registry::prop('post', 'next');
}

function posts_paging() {
    return apply_filters('posts_paging', Registry::get('posts_paging'));
}

function the_post() {
    $posts = Registry::get('posts');
    $post = array_shift($posts);

    Registry::set('posts', $posts);
    Registry::set('post', $post);
}