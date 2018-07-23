<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Render chart according to value selected from dropDown  - CanvasJS JavaScript Charts</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.1.1.js"

  ></script>

    <link rel="stylesheet" type="text/css" href="/css/result-light.css">

      <script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <style type="text/css">

  </style>
  <!-- TODO: Missing CoffeeScript 2 -->

  <script type="text/javascript">


    window.onload=function(){

var jsonData = {
"2017": [
    { "x": "Umur < 20", "y": 10.22 },
    { "x": "Umur < 20", "y": 11.14 },
    { "x": "Umur < 20", "y": 13.58 },
    { "x": "Umur < 20", "y": 15.25 },
    { "x": "Umur < 20", "y": 17.25 },
],
"2018": [
     { "x": "Umur < 20", "y": 19.99 },
     { "x": "Umur < 20", "y": 21.78 },
     { "x": "Umur < 20", "y": 23.45 },
     { "x": "Umur < 20", "y": 24.73 },
     { "x": "Umur < 20", "y": 26.58 }
],
"2019": [
    { "x": "Umur < 20", "y": 27.66 },
    { "x": "2016-7-25 13:33:23", "y": 28.68 },
    { "x": "2016-8-25 13:49:18", "y": 30.73 },
    { "x": "2016-9-25 13:55:01", "y": 32.46 },
    { "x": "2016-10-25 14:00:15", "y": 34.79 }
],
"2020": [
    { "x": "2016-6-25 12:58:52", "y": 10.22 },
    { "x": "2016-7-25 13:33:23", "y": 11.14 },
    { "x": "2016-8-25 13:49:18", "y": 15.25 },
    { "x": "2016-9-25 13:55:01", "y": 19.99 },
    { "x": "2016-10-25 14:00:15", "y": 21.78 }
],
"2021": [
    { "x": "2016-6-25 12:58:52", "y": 24.73 },
    { "x": "2016-7-25 13:33:23", "y": 26.58 },
    { "x": "2016-8-25 13:49:18", "y": 27.66 },
    { "x": "2016-9-25 13:55:01", "y": 28.68 },
    { "x": "2016-10-25 14:00:15", "y": 32.46 }
]}
var dataPoints = [];
var chart = new CanvasJS.Chart("chartContainer",
{
	axisX: {
  	valueFormatString: "Umur",
  },
	data: [{
    showInLegend: true,
    type: 'column',
    xValueType: 'string',
    showInLegend: true,
    name: "series1",
    legendText: "EnergykWh",
    dataPoints: dataPoints // this should contain only specific serial number data

	}]
});

$( ".dropdown" ).change(function() {
	chart.options.data[0].dataPoints = [];
  var e = document.getElementById("dd");
	var selected = e.options[e.selectedIndex].value;
  dps = jsonData[selected];
  for(var i in dps) {
  	var xVal = dps[i].x;
    chart.options.data[0].dataPoints.push({x: new date(xVal), y: dps[i].y});
  }
  chart.render();
});


    }

</script>

</head>
<body>
  <br/><!-- Just so that JSFiddle's Result label doesn't overlap the Chart -->
<select class="dropdown" id="dd">
    <option value="" selected="selected">Select Serial Number</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select>
<div id="chartContainer" style="height: 360px; width: 100%;"></div>

  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height
      }], "*")
    }
  </script>
</body>
</html>
