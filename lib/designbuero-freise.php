<?php

/* Login */

function my_login_logo() { ?>
<style type="text/css">
    #login h1 a,
    .login h1 a {
        background-color: transparent;
        background-image: url(<?php
            if( @file_exists( get_template_directory_uri()."/images/Customer-Logo.png" ) ) {
            echo get_template_directory_uri()."/images/Logo.png";
            } else {
            echo get_template_directory_uri()."/images/Designbuero-Freise.png";
            }
        ?>);
        padding-bottom: 30px;
        width: 310px;
        height: 75px;
        background-size: contain;
        background-position: center bottom;
    }
</style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function df_dashboard_information() {

	wp_add_dashboard_widget(
                 'df_dashboard_information',
                 'Designbüro Freise Bielefeld',
                 'wp_add_dashboard_widget_cb'
        );
}
add_action( 'wp_dashboard_setup', 'df_dashboard_information' );

function df_dashboard_information_enq() {

	wp_enqueue_style ( "df_dashboard_information", plugins_url()."/designbuerofreise/styles.css");

}

add_action( 'admin_init', 'df_dashboard_information_enq' );

function wp_add_dashboard_widget_cb() {

	?>
<div id="df_dashboard_information">
    <p><img src="<?php echo get_template_directory_uri();?>/images/Designbuero-Freise.png" alt="Designbüro Freise"></p>
    <p><strong>Vielen Dank, dass Sie sich für das Designbüro Freise entschieden haben. Bei Fragen rund um Ihr Wordpress und Ihre Website freuen wir uns über einen Anruf oder über eine E-Mail.</strong></p>
    <h2>So erreichen Sie uns:</h2>
    <p><strong>Telefon: <a href="tel:+4952199997860">+49 (0) 521 . 9999786-0</a></strong><br>
        <strong>E-Mail: <a href="mailto:info@designbuero-freise.de">info@designbuero-freise.de</a></strong></p>
    <h3><strong>Aktuelle Informationen</strong></h3>
    <p>Verfolgen Sie <a href="http://www.designbuero-freise.de/">unser Weblog</a> oder <a href="https://www.facebook.com/designbuero.freise">unsere Facebook-Seite</a>. Regelmäßig informieren wir dort über aktuelle Trends, unsere Arbeit und Dinge, die glücklich machen.</p>
</div>
<?php

}

/* Dashboard */

/* SVG Upload */

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

?>
