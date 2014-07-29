== Installation ==

1. Upload the `wp-recaptcha` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the `Plugins` menu in WordPress


== Requirements ==

* Your theme must have a `do_action('comment_form', $post->ID);` call right before the end of your form (*Right before the closing form tag*). Most themes do.

