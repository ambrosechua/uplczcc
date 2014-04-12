<?php
require_once "config.php";
if ($_FILES["file"]["error"] > 0) {
echo "error: " . $_FILES["file"]["error"] . ". <br />";
}
else if (!isset($_FILES["file"])) {
echo "<h4>upload a file</h4>";
echo "<span class='small'>simple file upload for fun. files are public and <b>original</b> works are under <a href='http://creativecommons.org/licenses/by/3.0/deed.en_GB'><img src='http://mirrors.creativecommons.org/presskit/buttons/80x15/svg/by.svg' /></a> unless otherwise. upload system by ambc. includes scrollfix and others. <a href='http://github.com/ambrosechua/uplczcc/'>github</a></span>";
}
else {
echo "<h4>uploaded! </h4>";
$md=md5_file($_FILES["file"]["tmp_name"]);
$hash=$md;
if (isset($_POST["gian"]) && $_POST["gian"] != "") {
$name=str_replace(array(".", "/", "\\"), "_", $_POST["gian"]);
$hash=$name;
}
$filename=str_replace(array(".php", ".cgi"), ".txt", $_FILES["file"]["name"]);
echo '<input type="button" value="extreme details" id="opde" /><div id="de">';
echo "upload: " . $_FILES["file"]["name"] . " as " . $filename . ". <br />";
echo "type: " . $_FILES["file"]["type"] . ". <br />";
echo "size: " . ($_FILES["file"]["size"] / 1024) . " kB. <br />";
echo "temp file: " . $_FILES["file"]["tmp_name"] . ". <br />";
echo "stored in: " . $updir . $hash . "-" . $filename . ". <br />";
if (file_exists($updir . $hash . "-" . $filename)) {
if ($name) {
echo $hash . "-" . $filename . " already exists. <br />";
$hash=$name . "-" . $md;
echo "giving new name " . $updir . $hash . "-" . $filename . " <br />";
if (file_exists($updir . $hash . "-" . $filename)) {
echo $hash . "-" . $filename . " already exists. <br />";
$hash=$md;
echo "giving new name " . $updir . $hash . "-" . $filename . " <br />";
if (file_exists($updir . $hash . "-" . $filename)) {
echo $hash . "-" . $filename . " already exists. give it another name. <br />";
}
}
} else {
echo $hash . "-" . $filename . " already exists. <br />";
$hash=$md;
echo "giving new name " . $updir . $hash . "-" . $filename . " <br />";
if (file_exists($updir . $hash . "-" . $filename)) {
echo $hash . "-" . $filename . " already exists. give it another name. <br />";
}
}
}
echo "</div>";
if (!file_exists($updir . $hash . "-" . $filename)) {
if ($hash != $name && $name != "") {
echo "file exists. gave it another name. <br />";
}
move_uploaded_file($_FILES["file"]["tmp_name"], $updir . $hash . "-" . $filename);
$ch = curl_init("https://api-ssl.bitly.com/v3/shorten?login=ambrosechua&apiKey=R_a7774f040b3cc870c629986b4e8c1521&longUrl=" . urlencode($fdir . $hash . "-" . $filename));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
$outp=json_decode($output, true);
$fuplbit=$outp["data"]["url"];
echo "<h4>share this: </h4>";
echo "<a href='" . $fuplbit . "'>Short URL: " . $fuplbit . " Short URLs are down. Sorry. </a><br />";
echo "<a href='" . $fdir . $hash . "-" . $filename . "'>Long URL: " . $fdir . $hash . "-" . $filename . "</a><br />";
}
else {
echo "<h4>file exists! give it another name. </h4>";
}
}
?>