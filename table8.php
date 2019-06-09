<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");

$table8 = '';

$table8 .= html_writer::start_tag('table');
$table8 .= html_writer::start_tag('tr');
//HEADER
$table8 .= html_writer::tag('td', 'id');
$table8 .= html_writer::tag('td', 'auth');
$table8 .= html_writer::tag('td', 'username');
$table8 .= html_writer::tag('td', 'firstname');
$table8 .= html_writer::tag('td', 'lastname');
$table8 .= html_writer::tag('td', 'email');
$table8 .= html_writer::tag('td', 'password');
$table8 .= html_writer::tag('td', 'timezone');
$table8 .= html_writer::end_tag('tr');
for ($i= 0; $i < 200; $i++) {
    $table8 .= html_writer::start_tag('tr');
    $table8 .= html_writer::tag('td', random_int(10000, 5000000));
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::tag('td', mt_rand());
    $table8 .= html_writer::end_tag('tr');
}
$table8 .= html_writer::end_tag('table');
