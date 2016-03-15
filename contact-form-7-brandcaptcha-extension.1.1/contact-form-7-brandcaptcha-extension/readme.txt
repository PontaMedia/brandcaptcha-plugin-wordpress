=== Contact Form 7 brandCAPTCHA Extension ===

Plugin Name: Contact Form 7 brandCAPTCHA extension
Plugin URI: https://github.com/PontaMedia/brandcaptcha-plugin-wordpress/tree/master/contact-form-7-brandcaptcha-extension.1.1
Description: Provides WP-brandCAPTCHA possibilities to the Contact Form 7 plugin. Requires both.
Version: 1.1.0
Author: Pontamedia 
Email: soporte@pontamedia.com
Author URI: http://www.pontamedia.com/
License: GPL2

Copyright (c) 2014 by PontaMedia & Zarego

- Documentation and latest version https://github.com/PontaMedia/brandcaptcha-plugin-wordpress/tree/master/contact-form-7-brandcaptcha-extension.1.1

This plugin provides the *brandCAPTCHA* tag for the Contact Form 7 Plugin. It allows the usage of a brandCAPTCHA field provided by a 3rd party brandCAPTCHA Plugin.

== Description ==

Contact Form 7 is an excellent WordPress plugin and the CF7 brandCAPTCHA Plugin makes it even more awesome by adding brandCAPTCHA capabilities.
In the past this functionality has been provided by a recaptcha module offered by the developer of CF7 which this plugin is based on. 

The problem with the module was that it had to be copied into the modules directory every time the Contact Form 7 plugin was updated. 
That was not possible to manage on multiple WordPress instances. 

Therefore we decided that it would be nice to have a plugin that can be installed and mantained independedly from the CF7 plugin and its modules.

You can use your brandCAPTCHA API keys with Better WordPress brandCAPTCHA. 
Copy your keys from the WP-brandCAPTCHA plugin settings and paste them into the Better WordPress brandCAPTCHA plugin.


= Requirements =

* You need the [Contact Form 7](http://wordpress.org/extend/plugins/contact-form-7/ "Contact Form 7 Plugin") plugin to be installed and activated.
* You need at least one of the following plugins to be installed and activated:
** [WP-brandCAPTCHA](http://wordpress.org/extend/plugins/wp-recaptcha/ "WP-brandCAPTCHA Plugin")

= Settings = 

The settings of the installed brandCAPTCHA plugin are used by default.

You can change that behaviour on the settings page of the plugin under:

*Settings* -> *CF7-brandCAP Extension*

== Installation ==
1. Make a backup of your current installation
2. Make sure you fit the requirements
3. Download and unpack the download package
4. Upload the `contact-form-7-recaptcha-extension` folder to the '/wp-content/plugins/' directory
5. Activate the plugin through the 'Plugins' menu in WordPress
6. You will now have a "brandCAPTCHA" tag option in the Contact Form 7 tag generator

= Usage =
1. On the actual Contact Form 7 configuration page, next to the "Form Box" with code in it, use the drop down click on Generate Tag
2. Choose *brandCAPTCHA* (**not** CAPTCHA) 
3. copy the code that it gives you
4. past it into the "Form Box" where the existing code is

If you like the plugin **please rate** it. If you don't like it, **please contact us** so we can address the problem or feature request.


== Screenshots ==

1. The new brandCAPTCHA option.
2. The property form for the brandCAPTCHA field.
3. The brandCAPTCHA tag in the form editor.
4. The brandCAPTCHA in the finished form.
5. The configuration page under *Settings* -> *CF7-reCAP Extension* (version 0.0.8) 


== Changelog ==

= Known Issues = 
* at the moment it is only possible to have ONE brandCAPTCHA per page. 
So if you activated brandCAPTCHA for comments or some other stuff on the page there
will be problems. Found some possibilities to fix this but have to test and
implement them. 
* there could be a problem with the hint for the administrator. Could not 
confirm that on 4 test instances but will check the code for that. 

= 1.0.0 (20140619) =
* FIX: compatibility with WordPress 3.8
