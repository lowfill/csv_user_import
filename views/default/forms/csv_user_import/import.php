<?php
/**
 * The import form body
 */

$file_title = elgg_echo('csvimport:title:file');
$file = elgg_view('input/file', array('name' => 'csvimport'));

$header_title = elgg_echo('csvimport:title:header');
$first_line = elgg_view('input/radio', array(
	'name' => 'first_line',
	'options' => array(
		elgg_echo('csvimport:label:skipfirstline') => 'skip',
		elgg_echo('csvimport:label:noheader') => 'none',
		elgg_echo('csvimport:label:useheader') => 'header',
	),
	'value' => 'skip',
));

$separator_title = elgg_echo('csvimport:title:separator');
$separator = elgg_view('input/radio', array(
	'name' => 'separator',
	'options' => array(
		elgg_echo('csvimport:label:comma') => 'comma',
		elgg_echo('csvimport:label:tab') => 'tab',
	),
	'value' => 'comma',
));

$notify_title = elgg_echo('csvimport:title:notify');
$notify = elgg_view('input/radio', array(
	'name' => 'notify',
	'options' => array(
		elgg_echo('csvimport:label:yes') => 1,
		elgg_echo('csvimport:label:no') => 0,
	),
	'value' => true,
));

$button = elgg_view('input/submit', array('value' => elgg_echo('import')));

echo <<<HTML
	<div><h3>$file_title</h3> $file</div>
	<div><h3>$header_title</h3> $first_line</div>
	<div><h3>$separator_title</h3> $separator</div>
	<div><h3>$notify_title</h3> $notify</div>
	<div class='elgg-foot'>$button</div>
HTML;
