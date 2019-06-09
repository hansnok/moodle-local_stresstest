<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");

$table7 = '';

$table7 .= html_writer::start_tag('table');
$table7 .= html_writer::start_tag('tr');
//HEADER
$table7 .= html_writer::tag('td', 'id');
$table7 .= html_writer::tag('td', 'auth');
$table7 .= html_writer::tag('td', 'username');
$table7 .= html_writer::tag('td', 'firstname');
$table7 .= html_writer::tag('td', 'lastname');
$table7 .= html_writer::tag('td', 'email');
$table7 .= html_writer::tag('td', 'password');
$table7 .= html_writer::tag('td', 'timezone');
$table7 .= html_writer::end_tag('tr');
for ($i= 0; $i < 200; $i++) {
    $table7 .= html_writer::start_tag('tr');
    $table7 .= html_writer::tag('td', random_int(10000, 5000000));
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::tag('td', mt_rand());
    $table7 .= html_writer::end_tag('tr');
}
$table7 .= html_writer::end_tag('table');
