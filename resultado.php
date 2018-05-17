<?php 
require ("conexao.php");

function parseToXML($htmlStr)
{
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

$result_markers = "SELECT * FROM markers";
$resultado_markers = mysqli_query($conn, $result_markers);

header("Content-type: text/xml");
echo '<markers>';

while ($row_markers= mysqli_fetch_assoc($resultado_markers)){
	echo '<marker ';
	echo 'name="' . parseToXML($row_markers['name']) . '" ';
	echo 'address="' . parseToXML($row_markers['address']) . '" ';
	echo 'diasemana="' . $row_markers['diasemana'] . '" ';
	echo 'horariosaida="' . $row_markers['horariosaida'] . '" ';
	echo 'horariovolta="' . $row_markers['horariovolta'] . '" ';
	echo 'destino="' . $row_markers['destino'] . '" ';
	echo '/>';
}

echo '</markers>';
?>