joomla-foxycart-hmac-validation
===============================

A system plugin to apply HMAC validation to FoxyCart links in Joomla 3+ - find out more in the [FoxyCart docs](https://wiki.foxycart.com/v/2.0/hmac_validation).

* Filter content by one or more tags
* Filter content by one or more content types (article, category, weblink...)
* Limit max number of content items shown
* Choose between matching all or any of the selected tags
* Order results by title, creation or modification date, in either direction

Installation
------------
1. Download the zip archive.
2. Login to Joomla administrator area, then click **Extensions** > **Extensions Manager**.
4. Select **Upload Package File**, browse to the zip, then click **Upload and Install**.
5. And you're done.

Options
------- 
* **Cart URL**: Your FoxyCart URL, typically 'https://YOURSTORE.foxycart.com' or 'https://checkout.YOURDOMAIN.com'
* **Foxycart Secret**: Your Foxycart store secret (API key)
* **Debug**: Whether or not Foxycart link-signing debug mode should be enabled (useful for testing, should be disabled in production)

Credits
-------
Joomla plugin skeleton from [cppl](https://github.com/cppl/Skeleton-Plugin-for-Joomla).

Foxycart HMAC verfication script from [FoxyCart](https://github.com/FoxyCart/FoxyCart-Cart-Validation--PHP).

Developed by [Mucky Puddle](http://www.muckypuddle.com).
