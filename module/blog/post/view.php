<?php
$slug = $_GET['slug'];

$tpl->post = ORM::for_table('post')->where('slug', $slug)->find_one();

if(!$tpl->post){
	require 'common/template/404.php';
    exit();
}

$tpl->content = $tpl->fetch('view.tpl.php');

$tpl->display('frontend_layout.tpl.php');