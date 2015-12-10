=== Plugin Name ===
Plugin Name: WP-BrandCaptcha
Plugin URI: http://www.pontamedia.com/
Description: Integrates PontaMedia's BandCaptcha anti-spam solutions with wordpress
Version: 1.1.0
Author: Matias Dominoni, Zarego - Pontamedia 
Email: soporte@pontamedia.com
Author URI: http://www.zarego.com
License: GPL2

Copyright (c) 2014 by PontaMedia & Zarego

This is a WordPress Plugin that handles calling BrandCaptcha.
- Documentation and latest version http://www.pontamedia.com/

This code is based on code from, and copied, modified and distributed 
with permission in accordance with its terms:

Copyright (c) 2008 reCAPTCHA -- http://recaptcha.net
AUTHORS:
  Mike Crawford
  Ben Maurer
  Jorge Pe�a

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
 *
The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.
 *
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Requires at least: 2.7
Tested up to: 2.9.1
Stable tag: 1.1.0

Integrates brandCAPTCHA anti-spam methods with WordPress including comment, registration, and email spam protection.

== Installation ==

To install in regular WordPress and [WordPress MultiSite](http://codex.wordpress.org/Create_A_Network):

1. Upload the `wp-brandcaptcha` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the `Plugins` menu in WordPress
1. Get the brandCAPTCHA keys [here](http://www.pontamedia.com "brandCAPTCHA API keys") 

== Requirements ==

* You need the brandCAPTCHA keys [here](http://www.pontamedia.com "brandCAPTCHA API keys") 
* Your theme must have a `do_action('comment_form', $post->ID);` call right before the end of your form (*Right before the closing form tag*). Most themes do.

== Frequently Asked Questions ==

= Why am I getting Warning: pack() [function.pack]: Type H: illegal hex digit?
You have the keys in the wrong place. Remember, the brandCAPTCHA keys are different from the MailHide keys. And the Public keys are different from the Private keys as well. You can't mix them around. Go through your keys and make sure you have them each in the correct box.

= Are CAPTCHAs secure? I heard spammers are using porn sites to solve them: the CAPTCHAs are sent to a porn site, and the porn site users are asked to solve the CAPTCHA before being able to see a pornographic image. =

CAPTCHAs offer great protection against abuse from automated programs. While it might be the case that some spammers have started using porn sites to attack CAPTCHAs (although there is no recorded evidence of this), the amount of damage this can inflict is tiny (so tiny that we haven't even seen this happen!). Whereas it is trivial to write a bot that abuses an unprotected site millions of times a day, redirecting CAPTCHAs to be solved by humans viewing pornography would only allow spammers to abuse systems a few thousand times per day. The economics of this attack just don't add up: every time a porn site shows a CAPTCHA before a porn image, they risk losing a customer to another site that doesn't do this.

== Screenshots ==

1. The brandCAPTCHA Settings
