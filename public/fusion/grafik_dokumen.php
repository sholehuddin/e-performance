<? 
include ("./include/db.php");
connect_db();
?>
<html>
<head>
<script type="text/javascript" src="fusion/JS/jquery-1.4.js"></script>
<script type="text/javascript" src="fusion/JS/jquery.fusioncharts.js"></script>
<style type="text/css">
<!--
.style8 {font-family: Arial, Helvetica, sans-serif}
.style9 {color: #FFFFFF}
-->
</style>
</head>
<body>
	<center>
	  <form name="form1" method="post" action="" target=""><font color="#000000"><select name="ed_tahun" size="1" id="ed_tahun">
  <option value="">-- All --</option>
  <?
				
				 $Sql = " select tahun from t_trn_penyampaian ";  
				
					$Hasil = mysql_query($Sql); 
                   while ($rs = mysql_fetch_row($Hasil))
				  						{
				if ($ed_tahun == $rs[0]) { ?>
  <option value="<? echo($rs[0]); ?>" selected="selected"><? echo ($rs[0]); ?></option>
  <? } else { ?>
  <option value="<? echo($rs[0]); ?>" ><? echo ($rs[0]); ?></option>
  <? }} ?>
</select>
      </font>
      <input name="BtnCetak" type="submit" id="BtnCetak" value="Tampilkan" class="button" onMouseOver="this.className='buttonon'" onMouseOut="this.className='button'">
	</form> 
      <span class="title">
KOMPOSISI DOKUMEN RB</span><br>
<? if (!empty($ed_tahun)) { ?><span class="title">TAHUN : <? echo $ed_tahun; ?></span><? } ?>
      <br>
      <table id="myHTMLTable" border="0" align="center" cellpadding="2">
	<tr bgcolor="#FFFFFF"> <th><span class="style9">Dokumen</span></th> 
	<th><span class="style9">Total</span></th>
	</tr>
<?php

$strSQL1="select count(a.jenis_dokumen),(select c.jenis_dokumen from t_par_jenis_dokumen c where c.nomor=a.jenis_dokumen) as nama_jenis from t_trn_penyampaian_detail a
left join t_trn_penyampaian b on b.no_urut=a.no_urut_penyampaian where b.tahun is not null ";

if (!empty($ed_tahun)) {
$strSQL1 = $strSQL1 ."and b.tahun='$ed_tahun' ";
}

$strSQL1 = $strSQL1 ."group by  a.jenis_dokumen ";

$result = @mysql_query($strSQL1)
	or die ("Query salah");
//	echo $strSQL1;

      while ($data = mysql_fetch_array($result)) {

	       echo "<tr bgcolor='#FFFFFF'>
              <td><font color='#ffffff'>$data[1]</font></td>
              <td align='center'><font color='#ffffff'>$data[0]</font></td>
              </tr>";
      }
?>
	</table>
	
	<script type="text/javascript">
	$('#myHTMLTable').convertToFusionCharts({
		swfPath: "fusion/Charts/",
		type: "MSColumn3D",
		data: "#myHTMLTable",
		width: "700",
		height: "350",			
		dataFormat: "HTMLTable"
	});
	</script>

	</center>
</body>
</html>

