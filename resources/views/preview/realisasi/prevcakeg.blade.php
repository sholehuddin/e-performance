<html>
<head>
<script type="text/javascript" src="{{ asset('fusion/JS/jquery-1.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('fusion/JS/jquery.fusioncharts.js') }}"></script>
</head>
<body>
	<center>

	<table id="myHTMLTable" border="1" align="center">
		<tr> <th>Jenis</th> <th>Komposisi Jumlah Seluruh Pegawai</th> </tr>
		<tr> <td>Wanita</td> 
		  <td>69%</td> 
		</tr>
		<tr> <td>Laki-Laki</td> 
		  <td>30.39%</td> 
		</tr>
	</table>
	<script type="text/javascript">
	$('#myHTMLTable').convertToFusionCharts({
		swfPath: "Charts/",
		type: "MSColumn3D",
		data: "#myHTMLTable",
		dataFormat: "HTMLTable"
	});
	</script>
<p></p>
	<script type="text/javascript">
	$('#myHTMLTable').convertToFusionCharts({
		swfPath: "Charts/",
		type: "Pie3D",
		data: "#myHTMLTable",
		width: "400",
		height: "300",		
		dataFormat: "HTMLTable"
	});
	</script>

	</center>
</body>
</html>
