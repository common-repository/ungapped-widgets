=== Ungapped Widgets ===
Contributors: oscaruribe
Tags: Forms, Surveys, E-mail marketing, Sms Marketing, Marketing Automation
Requires at least: 4.6
Tested up to: 5.1.1
Stable tag: trunk
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Easily add Ungapped widgets such as forms and surveys to your content using short codes.

== Description ==

By installing this plug-in you can inject any Ungapped form into your content anywhere by using short codes.
Soon we will add triggers for popups, banners, injecting user data for mail merge and more.

If you have a form/survey at ui.ungapped.com/Surveys/GUID all you need to do to inject it into your content 
(once the plugin is installed) is add the shortcode:

[ungapped-form surveyid="GUID"]

If you have questions that have value parameters from the query string you can override those by adding the 
prefillvalues property formatted as JSON. E.g. if your question has the value parameter "school" then you can
prefill that question with:

[ungapped-form surveyid="GUID" prefillvalues="{ school: 'Some school'}"]


== Installation ==
To install the Ungapped Widgets plugin:

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Add your Ungapped content by using the short codes as described above

== Screenshots ==
1. Create the form in Ungapped
2. Publish and copy the SurveyId
3. Enter the shortcode using the SurveyId

== Frequently Asked Questions ==

= Do I need an Ungapped account to use this plug-in =

Yes. In order to create forms you need an account with Ungapped. Register at [Ungapped.com](https://ungapped.com/ "Ungapped" ).


== Changelog ==

= 1.0 =
* First version supports forms with prefill

= 1.0.0.1 =
* Quick fix to ensure widgets load after jquery

= 1.0.0.2 =
* Added param offsetTop to shortcode

= 1.0.0.3 =
* Tiny bugfix

`<?php code(); // goes in backticks ?>`