<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['num_links'] = 2;
$config['use_page_numbers'] = TRUE;
$config['page_query_string'] = TRUE;
$config['query_string_segment'] = 'page';
$config['first_link'] = '&laquo';
$config['last_link'] = '&raquo';

$config['full_tag_open'] = "<ul class='pagination'>";
$config['full_tag_close'] = "</ul>";
$config['num_tag_open'] = "<li class='page-num'><button type='button' class='btn btn-sm btn-flat-primary round waves-effect me-50'>";
$config['num_tag_close'] = "</button></li>";
$config['cur_tag_open'] = "<li class='disabled'><li class='active page-num'><a href='#'><button type='button' class='btn btn-sm btn-outline-primary round waves-effect me-50'>";
$config['cur_tag_close'] = "<span class='sr-only'></span> </button></a></li>";

$config['next_link'] = '&rsaquo;';
$config['next_tag_open'] = "<li class='next'><button type='button' class='btn btn-sm btn-outline-primary round waves-effect me-50'>";
$config['next_tagl_close'] = "</button></li>";

$config['prev_link'] = '&lsaquo;';
$config['prev_tag_open'] = "<li class='prev'><button type='button' class='btn btn-sm btn-outline-primary round waves-effect me-50'>";
$config['prev_tagl_close'] = "</button></li>";

$config['first_tag_open'] = "<button type='button' class='btn btn-sm btn-outline-primary round waves-effect me-50'><li class='page-first'>";
$config['first_tagl_close'] = "</li></button>";
$config['last_tag_open'] = "<button type='button' class='btn btn-sm btn-outline-primary round waves-effect me-50'><li class='page-last'>";
$config['last_tagl_close'] = "</li></button>";