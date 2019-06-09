<?php
$initialtime = microtime(true);

require_once(dirname(dirname(dirname(__FILE__))) . "/config.php");
global $OUTPUT, $DB, $PAGE;

$url = new moodle_url("/local/stresstest/phpmysql.php");
$context = context_system::instance();
$PAGE->set_url($url);
$PAGE->set_context($context);
$PAGE->set_context($context);
$PAGE->set_pagelayout('standard');
$PAGE->set_title('PHP+MYSQL TIME TEST');
$PAGE->set_heading('PHP+MYSQL TIME TEST');
echo $OUTPUT->header();
echo '<h3>Fecha de inicio '.date('d/m/Y H:i:s', time()).'</h3><br><br>';

$time1 = microtime(true);
include_once('table4.php');
echo $table4;
echo '<br> <h3> Tiempo de carga tabla 1 <b>'.(microtime(true) - $time1).'</b></h3> <br>';

$time2 = microtime(true);
include_once('table5.php');
echo $table5;
echo '<br> <h3> Tiempo de carga tabla 2 <b>'.(microtime(true) - $time2).'</b></h3> <br>';

$time3 = microtime(true);
include_once('table6.php');
echo $table6;
echo '<br> <h3> Tiempo de carga tabla 3 <b>'.(microtime(true) - $time3).'</b></h3> <br>';

echo '<br><h1> Tiempo total de carga <b>'.(microtime(true) - $initialtime).'</b></h1><br>';
echo '<h3>Fecha de terminino'.date('d/m/Y H:i:s', time()).'</h3><br>';

echo $OUTPUT->footer();