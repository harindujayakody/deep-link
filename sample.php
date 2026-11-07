<?php
/** Redirect according to the User-Agent using deployment-configured targets. */
$iosUrl = getenv('DEEPLINK_IOS_URL');
$androidUrl = getenv('DEEPLINK_ANDROID_URL');
$fallbackUrl = getenv('DEEPLINK_FALLBACK_URL');

// Fail closed if configuration is incomplete or contains header injection.
foreach ([$iosUrl, $androidUrl, $fallbackUrl] as $url) {
    if (!$url || preg_match('/[\r\n]/', $url)) {
        http_response_code(500);
        exit('Redirect targets are not configured.');
    }
}

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
if (stripos($userAgent, 'iPhone') !== false || stripos($userAgent, 'iPad') !== false || stripos($userAgent, 'iPod') !== false) {
    $target = $iosUrl;
} elseif (stripos($userAgent, 'Android') !== false) {
    $target = $androidUrl;
} else {
    $target = $fallbackUrl;
}
header('Location: ' . $target, true, 302);
exit;
