joomla-foxycart-hmac-validation
===============================

A system plugin to apply HMAC validation to FoxyCart links in Joomla 3+ - find out more in the [FoxyCart docs](https://wiki.foxycart.com/v/2.0/hmac_validation).

* Uses Foxycart HMAC include to process all links and forms
* Change the store URL without touching code

Installation
------------
1. Download the zip archive.
2. Login to Joomla administrator area, then click **Extensions** > **Extensions Manager**.
4. Select **Upload Package File**, browse to the zip, then click **Upload and Install**.
5. And you're done.

Configuration
------- 
1. Enable HMAC verification in your Foxycart store admin
2. Take a note of your API key to enter as the secret in the plugin options
3. Make sure any product links / forms you want processed have a **code** query string parameter (e.g. 'mysite.foxycart.com/cart?code=MYPRODUCT001&name=...')
4. Set the plugin options listed below in  **Extensions** > **Plugin Manager** > **System - Foxycart HMAC Validation**.

Options
------- 
* **Cart URL**: Your FoxyCart URL, typically 'https://YOURSTORE.foxycart.com/cart' or 'https://checkout.YOURDOMAIN.com/cart'
* **Foxycart Secret**: Your Foxycart store secret (API key)
* **Debug**: Whether or not Foxycart link-signing debug mode should be enabled (useful for testing, should be disabled in production)

Gotchas / FAQ
-------
* Make sure that this plugin runs last - i.e in Joomla, set the order of this plugin to be after all other system plugins.

Credits
-------
Joomla plugin skeleton from [cppl](https://github.com/cppl/Skeleton-Plugin-for-Joomla).

Foxycart HMAC verfication script from [FoxyCart](https://github.com/FoxyCart/FoxyCart-Cart-Validation--PHP).

Developed by [Mucky Puddle](http://www.muckypuddle.com).
