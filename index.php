<?php $filename = "data.txt" ; 
$data_json = file_get_contents($filename);
 $data = json_decode($data_json); 
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta charset="utf-8">
	<title>Thermomètre</title>
</head>
<body>
	<h1>Températures</h1>
	 <p>Il fait <?php echo $data->temperature ; ?>°C avec <?php echo $data->humidite ; ?>% d'humidité.</p></br>


<div id="thermometer">
  <div id="bargraph"></div>
</div>
</body>
</html>

