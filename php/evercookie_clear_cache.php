<?php
$url = $_GET['url'];

// Only allow urls from this domain
$isSameDomain = strpos($url, $_SERVER['SERVER_NAME']);
$isSameDomain = $isSameDomain && $isSameDomain <= strlen("https://");

if(!$isSameDomain)
{
    header('HTTP/1.0 403 Forbidden');
    die('403 Forbidden. URL is not part of this domain "' . $_SERVER['SERVER_NAME'] . '"');
}
?>
<script type="text/javascript">var a=0;function c(b){if(a==0){a=1;b.contentWindow.location.reload()}}</script><iframe src="<?php echo $url; ?>" onload="c(this)"></iframe>