<?php
// SETTINGS
$domain = "yourdomain.com"; // The money site that you want to redirect to

// END OF SETTINGS - do not edit below this line
$q = $_GET['q'];
$qs = [];
foreach ($_GET as $key => $value) {
    if($key != 'q') $qs[$key] = $value;
}
echo "<html><head><title>Loading...</title></head><body><script>document.location.href = \"http://{$domain}/{$q}?".http_build_query($qs)."\";</script></body></html>";
exit;
