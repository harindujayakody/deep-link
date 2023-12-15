<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Check if the user is on an iOS device
if (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
    // Redirect iOS users to a URL intended to be opened in Safari
    $urlForSafari = 'https://www.apple.com';
    header('Location: ' . $urlForSafari);
} elseif (strpos($userAgent, 'Android') !== false) {
    // Redirect Android users to a URL formatted to open in Chrome
    $urlForChrome = 'intent://www.android.com#Intent;package=com.android.chrome;S.browser_fallback_url=https://www.android.com;end';
    header('Location: ' . $urlForChrome);
} else {
    // Redirect all other users to a general URL
    $generalUrl = 'https://www.huawei.com';
    header('Location: ' . $generalUrl);
}
exit;
?>
