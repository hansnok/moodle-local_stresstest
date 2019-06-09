<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");
global $DB, $PAGE;

$table6 = '';
if ($users = $DB->get_records('user', null, '', '*', 0, 200)) {
    $table6 .= html_writer::start_tag('table');
    $table6 .= html_writer::start_tag('tr');
    //HEADER
    $table6 .= html_writer::tag('td', 'id');
    $table6 .= html_writer::tag('td', 'auth');
    $table6 .= html_writer::tag('td', 'username');
    $table6 .= html_writer::tag('td', 'firstname');
    $table6 .= html_writer::tag('td', 'lastname');
    $table6 .= html_writer::tag('td', 'email');
    $table6 .= html_writer::tag('td', 'password');
    $table6 .= html_writer::tag('td', 'timezone');
    $table6 .= html_writer::end_tag('tr');
    foreach ($users as $row) {
        $table6 .= html_writer::start_tag('tr');
        $table6 .= html_writer::tag('td', $row->id);
        $table6 .= html_writer::tag('td', $row->auth);
        $table6 .= html_writer::tag('td', $row->username);
        $table6 .= html_writer::tag('td', $row->firstname);
        $table6 .= html_writer::tag('td', $row->lastname);
        $table6 .= html_writer::tag('td', $row->email);
        $table6 .= html_writer::tag('td', $row->password);
        $table6 .= html_writer::tag('td', $row->timezone);
        $table6 .= html_writer::end_tag('tr');
    }
    $table6 .= html_writer::end_tag('table');
}