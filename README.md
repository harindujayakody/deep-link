# 🚀 Smart Mobile Deep Linker

> A simple, lightweight PHP script that acts like a **smart traffic cop** for your website links! It automatically sends iPhone users, Android users, and computer users to the right app store, app link, or webpage.

---

## 🎯 What Does This Script Do?

Imagine you have a single link to share on social media or in an email. 
When someone clicks that link:
- 📱 **iPhone / iPad users** get sent to your iOS App Store page or Universal Link.
- 🤖 **Android users** get sent to your Google Play Store page or Chrome Intent Link.
- 💻 **Laptop / Desktop users** get sent to your regular website.

Instead of creating 3 different links for different phones, **you only share ONE link**, and this script handles the rest!

---

## 🧰 What You Need Before You Start

To run this script, you need **PHP** installed on your computer or web host. PHP is a language that web servers use to run code before sending a webpage to your screen.

### Do I have PHP?
Open your terminal (Command Prompt on Windows, or Terminal on Mac) and type:
```bash
php -v
```
If you see a version number (like `PHP 8.2` or `PHP 8.5`), you are ready to go!

If you **don't** have PHP yet:
- 🪟 **Windows**: Download and install [XAMPP](https://www.apachefriends.org/) (an all-in-one web server tool) or download PHP from [windows.php.net](https://windows.php.net/download/).
- 🍏 **Mac**: Install Homebrew and run `brew install php`, or download [MAMP](https://www.mamp.info/).
- 🐧 **Linux (Ubuntu/Debian)**: Run `sudo apt update && sudo apt install php-cli`.

---

## 📂 Project Files

Here is what is inside this repository:

| File | What It Does |
| :--- | :--- |
| `sample.php` | The main PHP script that checks the visitor's device and redirects them. |
| `README.md` | This help guide! |
| `LICENSE` | The open-source license for this project. |

---

## 🛠️ How to Set It Up (Step-by-Step)

### Step 1: Download or Clone this Project
Download the project as a `.zip` file from GitHub and unzip it, or run:
```bash
git clone https://github.com/your-username/deep-link.git
```

### Step 2: Open `sample.php` and Change the Links
Open `sample.php` in your favorite code editor (like VS Code, Notepad++, or Sublime Text).

At the top of the file, you will see three link variables:

```php
// 1. Put your iOS app or App Store link here
$iosUrl = 'https://www.apple.com';

// 2. Put your Android app or Play Store link here
$androidUrl = 'intent://www.android.com#Intent;package=com.android.chrome;S.browser_fallback_url=https://www.android.com;end';

// 3. Put your fallback web page here (for computers or tablets)
$fallbackUrl = 'https://www.huawei.com';
```

Replace those example URLs with your own links, and save the file!

---

## 🧪 How to Run and Test It on Your Computer

You don't need a paid website server just to test this! PHP comes with a built-in test server.

### 1. Start the Local Server
Open your terminal inside the folder containing `sample.php` and run:

```bash
php -S localhost:8000
```

You will see a message like:
```text
Development Server (http://localhost:8000) started
```

### 2. Test in Your Web Browser
Open your browser and visit:
```text
http://localhost:8000/sample.php
```

- If you visit from a **Windows/Mac computer**, it will redirect you to your `$fallbackUrl` (`https://www.huawei.com`).
- If you want to test how an iPhone or Android sees it without a real phone:
  1. Press `F12` in Chrome/Edge to open **Developer Tools**.
  2. Click the **Toggle Device Toolbar** icon (or press `Ctrl + Shift + M`).
  3. Select **iPhone 12** or **Pixel 7** from the top drop-down menu.
  4. Reload `http://localhost:8000/sample.php`!

---

## 🌐 How to Put This Live on the Internet

When you are ready for real users to use your deep link:

1. Upload `sample.php` to your web hosting account (cPanel, Hostinger, Bluehost, AWS, etc.).
2. You can rename `sample.php` to `index.php` inside a subfolder (like `https://yourwebsite.com/link/`).
3. Now whenever someone visits `https://yourwebsite.com/link/`, they will instantly be redirected to the right app store or page!

---

## ❓ Frequently Asked Questions (FAQ)

<details>
<summary><b>Q: What is a User-Agent?</b></summary>
<p>A <code>User-Agent</code> is a text label that your web browser sends to every website you visit. It tells the website what kind of browser and operating system you are using (e.g., <i>"Hi! I'm an iPhone running Safari"</i> or <i>"Hi! I'm a Windows PC running Chrome"</i>).</p>
</details>

<details>
<summary><b>Q: Why does the script use HTTP 302 redirect?</b></summary>
<p>An HTTP <code>302 Found</code> status tells browsers <i>"Redirect the user right now, but don't memorize this forever."</i> This allows you to update your app links in <code>sample.php</code> anytime, and users will immediately get sent to the new link!</p>
</details>

<details>
<summary><b>Q: Can I link directly into my app instead of the App Store?</b></summary>
<p>Yes! If your app supports custom URI schemes (like <code>myapp://profile/123</code>) or iOS Universal Links / Android App Links (like <code>https://myapp.com/open</code>), you can put those directly into <code>$iosUrl</code> or <code>$androidUrl</code>.</p>
</details>

---

## 🤝 Need Help?
If you run into any issues, feel free to open an **Issue** on GitHub!
