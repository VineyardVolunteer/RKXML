<?php
session_start();

$a = "SELECT html FROM xml_data WHERE id = '".$_POST['id']."'";
//$b = mysql_connect('jlphotographercom.ipagemysql.com','xmlcreate','KegKing2602359!');
$b = mysql_connect('localhost','xmlcreate','KegKing2602359!');
mysql_select_db('xml_data',$b);
$c = mysql_query($a,$b);
$d = mysql_fetch_assoc($c);
$_SESSION['html'] = $d['html'];
echo $_SESSION['html'];


if (isset($_POST['form1'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>1</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>1</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form2'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>2</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>2</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form3'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>3</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>3</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form4'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>4</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>4</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form5'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>5</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>5</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
<item hdImg="'.$_POST['image_5'].'">
<title>'.$_POST['title5'].'</title>
<contentId>'.$_POST['item5_contentid'].'</contentId>
<contentType>'.$_POST['item5_contenttype'].'</contentType>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item5_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_5'].'</synopsis>
<runtime>'.$_POST['runtime_5'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form6'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>6</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>6</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
<item hdImg="'.$_POST['image_5'].'">
<title>'.$_POST['title5'].'</title>
<contentId>'.$_POST['item5_contentid'].'</contentId>
<contentType>'.$_POST['item5_contenttype'].'</contentType>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item5_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_5'].'</synopsis>
<runtime>'.$_POST['runtime_5'].'</runtime>
</item>
<item hdImg="'.$_POST['image_6'].'">
<title>'.$_POST['title6'].'</title>
<contentId>'.$_POST['item6_contentid'].'</contentId>
<contentType>'.$_POST['item6_contenttype'].'</contentType>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item6_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_6'].'</synopsis>
<runtime>'.$_POST['runtime_6'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form7'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>7</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>7</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
<item hdImg="'.$_POST['image_5'].'">
<title>'.$_POST['title5'].'</title>
<contentId>'.$_POST['item5_contentid'].'</contentId>
<contentType>'.$_POST['item5_contenttype'].'</contentType>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item5_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_5'].'</synopsis>
<runtime>'.$_POST['runtime_5'].'</runtime>
</item>
<item hdImg="'.$_POST['image_6'].'">
<title>'.$_POST['title6'].'</title>
<contentId>'.$_POST['item6_contentid'].'</contentId>
<contentType>'.$_POST['item6_contenttype'].'</contentType>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item6_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_6'].'</synopsis>
<runtime>'.$_POST['runtime_6'].'</runtime>
</item>
<item hdImg="'.$_POST['image_7'].'">
<title>'.$_POST['title7'].'</title>
<contentId>'.$_POST['item7_contentid'].'</contentId>
<contentType>'.$_POST['item7_contenttype'].'</contentType>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item7_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_7'].'</synopsis>
<runtime>'.$_POST['runtime_7'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form8'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>8</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>8</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
<item hdImg="'.$_POST['image_5'].'">
<title>'.$_POST['title5'].'</title>
<contentId>'.$_POST['item5_contentid'].'</contentId>
<contentType>'.$_POST['item5_contenttype'].'</contentType>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item5_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_5'].'</synopsis>
<runtime>'.$_POST['runtime_5'].'</runtime>
</item>
<item hdImg="'.$_POST['image_6'].'">
<title>'.$_POST['title6'].'</title>
<contentId>'.$_POST['item6_contentid'].'</contentId>
<contentType>'.$_POST['item6_contenttype'].'</contentType>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item6_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_6'].'</synopsis>
<runtime>'.$_POST['runtime_6'].'</runtime>
</item>
<item hdImg="'.$_POST['image_7'].'">
<title>'.$_POST['title7'].'</title>
<contentId>'.$_POST['item7_contentid'].'</contentId>
<contentType>'.$_POST['item7_contenttype'].'</contentType>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item7_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_7'].'</synopsis>
<runtime>'.$_POST['runtime_7'].'</runtime>
</item>
<item hdImg="'.$_POST['image_8'].'">
<title>'.$_POST['title8'].'</title>
<contentId>'.$_POST['item8_contentid'].'</contentId>
<contentType>'.$_POST['item8_contenttype'].'</contentType>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item8_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_8'].'</synopsis>
<runtime>'.$_POST['runtime_8'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form9'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>9</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>9</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
<item hdImg="'.$_POST['image_5'].'">
<title>'.$_POST['title5'].'</title>
<contentId>'.$_POST['item5_contentid'].'</contentId>
<contentType>'.$_POST['item5_contenttype'].'</contentType>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item5_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_5'].'</synopsis>
<runtime>'.$_POST['runtime_5'].'</runtime>
</item>
<item hdImg="'.$_POST['image_6'].'">
<title>'.$_POST['title6'].'</title>
<contentId>'.$_POST['item6_contentid'].'</contentId>
<contentType>'.$_POST['item6_contenttype'].'</contentType>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item6_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_6'].'</synopsis>
<runtime>'.$_POST['runtime_6'].'</runtime>
</item>
<item hdImg="'.$_POST['image_7'].'">
<title>'.$_POST['title7'].'</title>
<contentId>'.$_POST['item7_contentid'].'</contentId>
<contentType>'.$_POST['item7_contenttype'].'</contentType>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item7_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_7'].'</synopsis>
<runtime>'.$_POST['runtime_7'].'</runtime>
</item>
<item hdImg="'.$_POST['image_8'].'">
<title>'.$_POST['title8'].'</title>
<contentId>'.$_POST['item8_contentid'].'</contentId>
<contentType>'.$_POST['item8_contenttype'].'</contentType>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item8_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_8'].'</synopsis>
<runtime>'.$_POST['runtime_8'].'</runtime>
</item>
<item hdImg="'.$_POST['image_9'].'">
<title>'.$_POST['title9'].'</title>
<contentId>'.$_POST['item9_contentid'].'</contentId>
<contentType>'.$_POST['item9_contenttype'].'</contentType>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item9_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item9_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item9_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item9_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item9_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item9_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item9_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_9'].'</synopsis>
<runtime>'.$_POST['runtime_9'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}

if (isset($_POST['form10'])) {
$file = $_POST['filename_1'].".xml";
$fd = fopen($file,'a');
$log = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<feed>
<!-- resultLength indicates the total number of results for this feed -->
<resultLength>10</resultLength>
<!-- endIndix  indicates the number of results for this *paged* section of the feed -->
<endIndex>10</endIndex>
<item hdImg="'.$_POST['image_1'].'">
<title>'.$_POST['title1'].'</title>
<contentId>'.$_POST['item1_contentid'].'</contentId>
<contentType>'.$_POST['item1_contenttype'].'</contentType>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item1_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item1_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item1_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item1_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_1'].'</synopsis>
<runtime>'.$_POST['runtime_1'].'</runtime>
</item>
<item hdImg="'.$_POST['image_2'].'">
<title>'.$_POST['title2'].'</title>
<contentId>'.$_POST['item2_contentid'].'</contentId>
<contentType>'.$_POST['item2_contenttype'].'</contentType>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item2_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item2_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item2_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item2_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_2'].'</synopsis>
<runtime>'.$_POST['runtime_2'].'</runtime>
</item>
<item hdImg="'.$_POST['image_3'].'">
<title>'.$_POST['title3'].'</title>
<contentId>'.$_POST['item3_contentid'].'</contentId>
<contentType>'.$_POST['item3_contenttype'].'</contentType>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item3_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item3_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item3_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item3_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_3'].'</synopsis>
<runtime>'.$_POST['runtime_3'].'</runtime>
</item>
<item hdImg="'.$_POST['image_4'].'">
<title>'.$_POST['title4'].'</title>
<contentId>'.$_POST['item4_contentid'].'</contentId>
<contentType>'.$_POST['item4_contenttype'].'</contentType>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item4_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item4_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item4_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item4_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_4'].'</synopsis>
<runtime>'.$_POST['runtime_4'].'</runtime>
</item>
<item hdImg="'.$_POST['image_5'].'">
<title>'.$_POST['title5'].'</title>
<contentId>'.$_POST['item5_contentid'].'</contentId>
<contentType>'.$_POST['item5_contenttype'].'</contentType>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item5_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item5_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item5_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item5_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_5'].'</synopsis>
<runtime>'.$_POST['runtime_5'].'</runtime>
</item>
<item hdImg="'.$_POST['image_6'].'">
<title>'.$_POST['title6'].'</title>
<contentId>'.$_POST['item6_contentid'].'</contentId>
<contentType>'.$_POST['item6_contenttype'].'</contentType>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item6_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item6_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item6_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item6_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_6'].'</synopsis>
<runtime>'.$_POST['runtime_6'].'</runtime>
</item>
<item hdImg="'.$_POST['image_7'].'">
<title>'.$_POST['title7'].'</title>
<contentId>'.$_POST['item7_contentid'].'</contentId>
<contentType>'.$_POST['item7_contenttype'].'</contentType>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item7_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item7_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item7_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item7_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_7'].'</synopsis>
<runtime>'.$_POST['runtime_7'].'</runtime>
</item>
<item hdImg="'.$_POST['image_8'].'">
<title>'.$_POST['title8'].'</title>
<contentId>'.$_POST['item8_contentid'].'</contentId>
<contentType>'.$_POST['item8_contenttype'].'</contentType>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item8_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item8_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item8_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item8_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_8'].'</synopsis>
<runtime>'.$_POST['runtime_8'].'</runtime>
</item>
<item hdImg="'.$_POST['image_9'].'">
<title>'.$_POST['title9'].'</title>
<contentId>'.$_POST['item9_contentid'].'</contentId>
<contentType>'.$_POST['item9_contenttype'].'</contentType>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item9_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item9_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item9_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item9_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item9_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item9_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item9_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item9_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_9'].'</synopsis>
<runtime>'.$_POST['runtime_9'].'</runtime>
</item>
<item hdImg="'.$_POST['image_10'].'">
<title>'.$_POST['title10'].'</title>
<contentId>'.$_POST['item10_contentid'].'</contentId>
<contentType>'.$_POST['item10_contenttype'].'</contentType>
<contentQuality>'.$_POST['item10_contentquality'].'</contentQuality>
<streamFormat>'.$_POST['item10_streamformat'].'</streamFormat>
<media>
<contentQuality>'.$_POST['item10_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item10_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item10_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item10_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item10_2_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item10_2_streamurl'].'</streamUrl>
</media>
<media>
<contentQuality>'.$_POST['item10_contentquality'].'</contentQuality>
<streamBitrate>'.$_POST['item10_3_streambitrate'].'</streamBitrate>
<streamUrl>'.$_POST['item10_3_streamurl'].'</streamUrl>
</media>
<synopsis>'.$_POST['synopsis_10'].'</synopsis>
<runtime>'.$_POST['runtime_10'].'</runtime>
</item>
</feed>
';
fwrite($fd,$log);
fclose($fd);
echo "Sucessfully created the file name:  ".$_POST['filename_1'].".xml";
echo '</br></br><a href="xmlgen.php">Back</a>';
}
?>
