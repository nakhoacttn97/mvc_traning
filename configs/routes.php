<?php
$routes['default_controller'] = 'home';
/**
 * Virtual ruote => Real ruote
 */
$routes['san-pham'] = 'product/index';
$routes['trang-chu'] = 'home';
$routes['tin-tuc/.+-(\d+).html'] = 'news/category/$1';
