<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");
global $DB, $PAGE;

$table5 = '';
if ($users = $DB->get_records('user', null, '', '*', 0, 200)) {
    $table5 .= html_writer::start_tag('table');
    $table5 .= html_writer::start_tag('tr');
    //HEADER
    $table5 .= html_writer::tag('td', 'id');
    $table5 .= html_writer::tag('td', 'auth');
    $table5 .= html_writer::tag('td', 'username');
    $table5 .= html_writer::tag('td', 'firstname');
    $table5 .= html_writer::tag('td', 'lastname');
    $table5 .= html_writer::tag('td', 'email');
    $table5 .= html_writer::tag('td', 'password');
    $table5 .= html_writer::tag('td', 'timezone');
    $table5 .= html_writer::end_tag('tr');
    foreach ($users as $row) {
        $table5 .= html_writer::start_tag('tr');
        $table5 .= html_writer::tag('td', $row->id);
        $table5 .= html_writer::tag('td', $row->auth);
        $table5 .= html_writer::tag('td', $row->username);
        $table5 .= html_writer::tag('td', $row->firstname);
        $table5 .= html_writer::tag('td', $row->lastname);
        $table5 .= html_writer::tag('td', $row->email);
        $table5 .= html_writer::tag('td', $row->password);
        $table5 .= html_writer::tag('td', $row->timezone);
        $table5 .= html_writer::end_tag('tr');
    }
    $table5 .= html_writer::end_tag('table');
}