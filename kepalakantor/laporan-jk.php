<?php
  include 'koneksi.php';
  $query = "SELECT COUNT(jenis_kelamin) FROM peserta WHERE jenis_kelamin = 'pria'";
  $hasil = mysqli_query($koneksi,$query);
  $pria = mysqli_num_rows($hasil);

  $query1 = "SELECT COUNT(jenis_kelamin) FROM peserta WHERE jenis_kelamin = 'wanita'";
  $hasil1 = mysqli_query($koneksi,$query1);
  $wanita = mysqli_fetch_assoc($hasil1);

  echo $pria;


?>
<!DOCTYPE html>
<html>
<head>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {

	animationEnabled: true,
	title:{
		text: "Jumlah Pendaftaran Menurut Jenis Kelamin"
	},
	subtitles: [{
		text: "DINAS Tenanga Kerja ESDM "
	}],
	axisX: {
		title: "Jenis Kelamin"
	},
	axisY: {
		title: "Jumlah Data",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},

	toolTip: {
		shared: true
	},

	data: [{
		type: "column",
		name: "Pria",
		showInLegend: true,
		yValueFormatString: "#,##0.# Orang",
		dataPoints: [

			{ label: "2017",  y: 1 },
			{ label: "2018", y: 49 },
			{ label: "2019", y: 35 },
			{ label: "2020",  y: 50 },
		]
	},
	{
		type: "column",
		name: "Wanita",

		showInLegend: true,
		yValueFormatString: "#,##0.# Orang",
		dataPoints: [
			{ label: "2017", y: 1 },
			{ label: "2018", y: 19 },
			{ label: "2019", y: 20 },
			{ label: "2020", y: 23 },
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
<?php
  include 'bawah.php';
 ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
