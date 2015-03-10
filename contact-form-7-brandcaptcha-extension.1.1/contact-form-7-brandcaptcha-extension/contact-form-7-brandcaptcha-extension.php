<?php
/*
Plugin Name: Contact Form 7 brandCAPTCHA extension
Plugin URI: http://www.pontamedia.com/
Description: Provides WP-brandCAPTCHA possibilities to the Contact Form 7 plugin. Requires both.
Version: 1.1.0
Author: Matias Dominoni, Zarego - Pontamedia 
Email: soporte@pontamedia.com
Author URI: http://www.zarego.com
License: GPL2

Copyright (c) 2014 by PontaMedia & Zarego

- Documentation and latest version http://www.pontamedia.com/

This code is based on code from, and copied, modified and distributed 
with permission in accordance with its terms:


Plugin Name: Contact Form 7 reCAPTCHA extension
Plugin URI: http://www.a-sd.de/
Description: Provides WP-reCAPTCHA possibilities to the Contact Form 7 plugin. Requires both.
Version: 0.1.0
Author: Andre Pietsch, Advicio (R) ServDesk GmbH
Email: andre.pietsch@a-sd.de
Author URI: http://www.a-sd.de
Text Domain: cf7recapext
Domain Path: /languages/
License: GPL2
*/

/*  Copyright 2011  Andre Pietsch, Advicio ServDesk GmbH (email: andre.pietsch@a-sd.de)
    
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.
    
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301
*/


// this is the 'driver' file that instantiates the objects and registers every hook

define('ALLOW_INCLUDE', true);

require_once('includes/CF7brandCAPTCHA.class.php');

define('ASD_PLUGIN_FILE', __FILE__ );

$cf7_brandcaptcha = new CF7brandCAPTCHA('cf7_brandcaptcha_options', 'cf7brandcapext');

register_activation_hook( __FILE__ , array($cf7_brandcaptcha, 'activate'));

?>