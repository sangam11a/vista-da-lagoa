=== Currency Converter Calculator ===
Contributors: falselight
Tags: currency converter, currency conversion, currency calculator, foreign exchange conversion, fx rate converter, bitcoin
Donate link: http://currencyrate.today/converter-widget
Tested up to: 5.8
Requires at least: 3.1
Requires PHP: 5.3
Stable tag: 1.3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple and powerful real-time currency converter widget for your website or blog. Included 195+ world currencies with popular cryptocurrencies. Automatically update exchange rates. Multi Language support: English, Русский, Italiano, Français, Español, Deutsch, 中国, Português, 日本語, Bahasa Indonesia, हिन्दी.

== Description ==
Simple and powerful real-time currency converter widget for your website or blog. Included 195+ world currencies with popular cryptocurrencies. Automatically update exchange rates. Multi Language support: English, Русский, Italiano, Français, Español, Deutsch, 中国, Português, 日本語, Bahasa Indonesia, हिन्दी.
The main goal of the plugin: the currency converter as a widget, while not loading your site or blog with unnecessary calculations. All calculations take place on the third-party server. Thus, you use a iframe on your website with a ready working program.

= Features =
1. 195+ currencies and popular cryptocurrencies;
2. You can use the plugin on any page using shortcode;
3. Does not create a load on the site, all data is processed on a third-party server;
4. Updates automatically;
5. Multi languages and SSL support;
6. Responsive design.

== Installation ==
= From your WordPress dashboard =
1. Visit "Plugins > Add New"
2. Search for "Exchange Rates Widget"
3. Activate Exchange Rates Widget from your Plugins page.
4. Add widgets on yourdomain.com/wp-admin/widgets.php page.

= From WordPress.org =
1. Download Exchange Rates Widget.
2. Upload the "Exchange Rates Widget" directory to your "/wp-content/plugins/" directory, using your favorite method (ftp, sftp, scp, etc...).
3. Activate Exchange Rates Widget from your Plugins page.
4. Add widgets on yourdomain.com/wp-admin/widgets.php page.

= From WordPress "Add Plugins" =
1. Download Exchange Rates Widget.
2. Go to yourdomain.com/wp-admin/plugin-install.php
3. Press button "Upload Plugin"
3. Choise "Exchange Rates Widget" zip archive and press button "Install Now".
4. Add widgets on yourdomain.com/wp-admin/widgets.php page.

== Frequently Asked Questions ==
= How to install a widget on an arbitrary page? =
1. You can generate a shortcode manual
Example:
[currency_converter_calculator lg="ru" tz="0" fm="EUR" to="USD" st="info" bg="FFFFFF" lr="1" rd="0"][/currency_converter_calculator]
Params:
lg="ru" - languages, use: en, ru, it, fr, es, de, cn, pt, ja, id, hi
tz="0" - timezone
fm="EUR" - currency code from (list of currency codes: http://currencyrate.today/different-currencies)
to="USD" - currency code to (list of currency codes: http://currencyrate.today/different-currencies)
st="info" - theme (color scheme) primary, info, danger, warning, gray, success (used bootstrap3 color classes)
bg="FFFFFF" - background color of iframe, if you use param: rd = "0"
lr="1" - large widget
rd="0" - 1 - straight corners, 0 - rounded corners
2. You can generate a shortcode automatic
a. Go to yourdomain.com/wp-admin/widgets.php page;
b. Add widget "Currency Converter Calculator";
c. Select options, click save;
d. Copy shortcode from textarea.
3. Languages
en - English
ru - Русский
it - Italiano
fr - Français
es - Español
de - Deutsch
cn - 中国
pt - Português
ja - 日本語
id - Bahasa Indonesia
hi - हिन्दी

== Screenshots ==
1. screanshot-1.jpg - Widget settings
3. screanshot-2.jpg - Gray theme
4. screanshot-3.jpg - Red theme
5. screanshot-4.jpg - Yellow theme
6. screanshot-5.jpg - Blue theme
7. screanshot-6.jpg - Dark blue theme
8. screanshot-7.jpg - Green theme

== Changelog ==
= 1.3.0 =
* Minor bug fixes
* Add accessibility
= 1.2.2 =
* Important fixes
* Minor fix
= 1.2.0 =
* Minor bug fixes
= 1.1.0 =
* Add new languages: Português, 日本語, Bahasa Indonesia, हिन्दी
= 1.0.2 =
* Minor bug fixes
= 1.0.1 =
* Fix bug (generated shortcode $params with empty value)
= 1.0.0 =
* First release