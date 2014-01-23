<html>
<head>
<title>Vineyard Cincinnati XML Creater</title>
<link rel="stylesheet" type="text/css" href="xmlgen.css"/>
<script type="text/javascript" src="js_lib/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
function select_weeks(id)
{
var httpreq = new XMLHttpRequest();
var url = "xmlcreate.php";
var selectid = document.getElementById(id);
var id = selectid.options[selectid.selectedIndex].value;
var status = document.getElementById("output");
httpreq.open("post",url,true);
httpreq.setRequestHeader("Content-type","application/x-www-form-urlencoded");
httpreq.send("id="+id);
httpreq.onreadystatechange = function() {
if (httpreq.readyState == 4 && httpreq.status == 200) {
status.innerHTML = httpreq.responseText;
}
}
}
</script>
</head>
<body>
<div id="main_body">
<center><img src="xml_images/vineyard_logo.jpg"/></center>
<div id="title">Vineyard Cincinnati XML Creator</div>

<div id="weeks">
How many weeks in the series ?
<select id="week_series" onchange="select_weeks('week_series')">
<option>Please Select</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>

<div id="output">
<?php
echo $_SESSION['html'];
?>
</div>

</div>
</body>
</html>
