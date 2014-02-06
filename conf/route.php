<?php

return array(
    array('GET', '/', 'blog:post:index', 'home'),
    array('GET', '/post/[*:slug]', 'blog:post:view', 'post-view'),
    array('POST', '/comment', 'blog:post:comment', 'post-comment'),
    array('GET', '/category/[a:name]', 'blog:post:category', 'post-category'),
);