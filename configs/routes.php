<?php
$routes['default_controller'] = 'home';
/**
 * virtual ruote => Real ruote
 */
$routes['san-pham'] = 'product/index';
$routes['trang-chu'] = 'home';
$routes['tin-tuc/.+-(\d+).html'] = 'news/category/$1';
