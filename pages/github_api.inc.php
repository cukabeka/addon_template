<?php
/**
* Addon_Template
*
* @author http://rexdev.de
* @link   https://github.com/jdlx/addon_template
*
* @package redaxo4.3
* @version 0.2.0
*/

global $REX;

// GET PARAMS
////////////////////////////////////////////////////////////////////////////////
$mypage  = rex_request('page',    'string');
$subpage = rex_request('subpage', 'string');
$chapter = rex_request('chapter', 'string');
$func    = rex_request('func',    'string');

$myroot = $REX['INCLUDE_PATH'].'/addons/'.$mypage;


// CONNECT GITHUB API
////////////////////////////////////////////////////////////////////////////////
$gc = new github_connect('jdlx','addon_template');
echo $gc->getList(rex_request('chapter', 'string'));
