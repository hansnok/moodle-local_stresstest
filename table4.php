<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");
global $DB, $PAGE;

$table4 = '';
if ($users = $DB->get_records('user', null, '', '*', 0, 200)) {
    $table4 .= html_writer::start_tag('table');
    $table4 .= html_writer::start_tag('tr');
    //HEADER
    $table4 .= html_writer::tag('td', 'id');
    $table4 .= html_writer::tag('td', 'auth');
    $table4 .= html_writer::tag('td', 'username');
    $table4 .= html_writer::tag('td', 'firstname');
    $table4 .= html_writer::tag('td', 'lastname');
    $table4 .= html_writer::tag('td', 'email');
    $table4 .= html_writer::tag('td', 'password');
    $table4 .= html_writer::tag('td', 'timezone');
    $table4 .= html_writer::end_tag('tr');
    foreach ($users as $row) {
        $table4 .= html_writer::start_tag('tr');
        $table4 .= html_writer::tag('td', $row->id);
        $table4 .= html_writer::tag('td', $row->auth);
        $table4 .= html_writer::tag('td', $row->username);
        $table4 .= html_writer::tag('td', $row->firstname);
        $table4 .= html_writer::tag('td', $row->lastname);
        $table4 .= html_writer::tag('td', $row->email);
        $table4 .= html_writer::tag('td', $row->password);
        $table4 .= html_writer::tag('td', $row->timezone);
        $table4 .= html_writer::end_tag('tr');
    }
    $table4 .= html_writer::end_tag('table');
}