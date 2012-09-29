#Linker

Find errors in your application by simulating users clicking through your site.
While Linker is checking for errors automatically, you can continue working.

##Installation

Install using artisan for Laravel :

	php artisan bundle:install linker

Now simply add linker to your `application/bundles.php` with auto start enabled :

    'linker' => array(
        'auto' => true,
        'handles' => 'linker',
    ),

Finally, add Linker to your View master template, or individual views with :

    {{ Linker::render(); }}
    // or
	<?php Linker::render(); ?>

just after your closing `body` tag!

Go to: http://mywebsite.local/linker/main/dashboard

Find them errors!

##How to use
Open a different browser or an incognito tab.
Login to your app or not.
Activate Linker to test your application's links.
Open the testing tab, and let it run while you work in your primary browser.
Keep this tab open so you can deactivate Linker when you want.

##Config

    // Click a link every XXXX milliseconds
    'refresh_interval' => 1000,

    // Dont follow links containing these strings
    'dont_follows' => array(
        'facebook',
        'twitter',
        '#',
        'logout',
        'mailto:',
        'callto:',
        'javascript:',
    ),


---

Enjoy using Linker, and please report any glitches!
