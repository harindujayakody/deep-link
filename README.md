# User-Agent Redirect

This PHP script selects a configured destination using the request's User-Agent: iPhone/iPad/iPod, Android, or a fallback for all other visitors. User-Agent detection is approximate; for example, some iPads report a desktop User-Agent.

This is a redirect, not an implementation of iOS Universal Links or Android App Links. Those require separate association files, domain hosting, and app configuration. A configured target may point to an already configured Universal Link, App Link, app store, or Android intent.

## Setup

Install PHP 7.4 or newer, clone this repository, and configure these environment variables on your PHP server:

- `DEEPLINK_IOS_URL`: iOS destination.
- `DEEPLINK_ANDROID_URL`: Android destination, such as an HTTPS URL or intent URL.
- `DEEPLINK_FALLBACK_URL`: destination for other visitors.

Set all three to destinations you control or trust. Missing values cause a 500 response rather than redirecting to a demo site. Configure variables in your web server or hosting provider; PHP must receive them in its process environment. Do not use untrusted request input as a destination.

For a local Windows PowerShell test:

```powershell
git clone https://github.com/harindujayakody/deep-link.git
cd deep-link
$env:DEEPLINK_IOS_URL = 'https://example.com/ios'
$env:DEEPLINK_ANDROID_URL = 'https://example.com/android'
$env:DEEPLINK_FALLBACK_URL = 'https://example.com/'
php -S localhost:8000
```

Open `http://localhost:8000/sample.php` in a browser. Use device emulation with an appropriate User-Agent or a real device to test each branch. Stop the development server with Ctrl+C. For deployment, use a PHP-enabled web host and configure the variables there; the built-in server is for development only.

Licensed under the [MIT License](LICENSE).
