<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");

$table9 = '';

$table9 .= html_writer::start_tag('table');
$table9 .= html_writer::start_tag('tr');
//HEADER
$table9 .= html_writer::tag('td', 'id');
$table9 .= html_writer::tag('td', 'auth');
$table9 .= html_writer::tag('td', 'username');
$table9 .= html_writer::tag('td', 'firstname');
$table9 .= html_writer::tag('td', 'lastname');
$table9 .= html_writer::tag('td', 'email');
$table9 .= html_writer::tag('td', 'password');
$table9 .= html_writer::tag('td', 'timezone');
$table9 .= html_writer::end_tag('tr');
for ($i= 0; $i < 200; $i++) {
    $table9 .= html_writer::start_tag('tr');
    $table9 .= html_writer::tag('td', random_int(10000, 5000000));
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::tag('td', mt_rand());
    $table9 .= html_writer::end_tag('tr');
}
$table9 .= html_writer::end_tag('table');
