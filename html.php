<?php
$initialtime = microtime();
echo 'Fecha de inicio '.date('d/m/Y H:i:s', time()).'<br>';

$timetable1 = microtime();
include_once('table1.php');
echo '<br> <h3> Tiempo de carga tabla 1 <b>'.(microtime() - $timetable1).'<b/></h3> <br>';

$timetable2 = microtime();
include_once('table2.php');
echo '<br> <h3> Tiempo de carga tabla 2 <b>'.(microtime() - $timetable2).'<b/></h3> <br>';

$timetable3 = microtime();
include_once('table3.php');
echo '<br> <h3> Tiempo de carga tabla 3 <b>'.(microtime() - $timetable3).'<b/></h3> <br>';

echo '<br><h1> Tiempo total de carga <b>'.(microtime() - $initialtime).'</b></h1><br>';
echo 'Fecha de terminino'.date('d/m/Y H:i:s', time()).'<br>';