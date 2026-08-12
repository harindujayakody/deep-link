<?php
/**
 * Smart Deep Link & Mobile Redirect Script
 * 
 * Automatically detects the user's mobile device (iOS, Android, or Desktop/Other)
 * and redirects them to the appropriate deep link, app URL, or fallback website.
 */

// ==========================================
// CONFIGURATION: Set your custom links here
// ==========================================

// iOS Target URL (App Link, Universal Link, or App Store page)
$iosUrl = 'https://www.apple.com';

// Android Target URL (Android Intent URL, Play Store page, or Web Link)
$androidUrl = 'intent://www.android.com#Intent;package=com.android.chrome;S.browser_fallback_url=https://www.android.com;end';

// General Fallback URL (for Desktop, Laptops, or unrecognized devices)
$fallbackUrl = 'https://www.huawei.com';

// ==========================================
// DEVICE DETECTION & REDIRECT LOGIC
// ==========================================

// Safely get the User-Agent header (defaults to empty string if not present)
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

// 1. Check for iOS devices (iPhone, iPad, or iPod)
if (stripos($userAgent, 'iPhone') !== false || stripos($userAgent, 'iPad') !== false || stripos($userAgent, 'iPod') !== false) {
    header('Location: ' . $iosUrl, true, 302);
    exit;
}

// 2. Check for Android devices
if (stripos($userAgent, 'Android') !== false) {
    header('Location: ' . $androidUrl, true, 302);
    exit;
}

// 3. Fallback for all other devices (Windows, Mac, Linux, etc.)
header('Location: ' . $fallbackUrl, true, 302);
exit;

