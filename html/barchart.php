<?php
$data = array(
    array('년도', '취업률'),
    array('2014년도', 76.3),
    array('2015년도', 68.3),
    array('2016년도', 67.2),
    array('2017년도', 75.0),
    array('2018년도', 61.1),
    array('2019년도', 54.0),
    array('2020년도', 68.3),   
);

$options = array(
    'title' => '연도별 취업률 통계',
    'titleTextStyle' => array('fontSize' => 20),
   'hAxis' => array('title' => '단위 : %'),
    'vAxis'  => array('minValue' => 0, 'maxValue' => 100),
   'width' => 600, 'height' => 400,
    'colors' => array('#0B3D92'),
    'legend' => 'none'
);

?>
<script src="//www.google.com/jsapi"></script>
<script>
var data = <?= json_encode($data) ?>;
var options = <?= json_encode($options) ?>;
google.load('visualization', '1.0', {'packages':['corechart']});
google.setOnLoadCallback(function() {
  var chart = new google.visualization.ColumnChart(document.querySelector('#chart_div'));
  chart.draw(google.visualization.arrayToDataTable(data), options);
});
</script>
<div id="chart_div"></div>


