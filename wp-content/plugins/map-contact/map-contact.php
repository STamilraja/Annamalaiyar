<?php
/*
	Plugin Name: Map Contact
	Description: Instantly create stylish and professional Contact Us Page with Map for any WordPress Theme!
	Author: Ryan Smith
    Plugin URI: http://wordpress.org/plugins/map-contact/
    Author URI: http://xantoo.com/
	Version: 3.0.3
 */

include(plugin_dir_path( __FILE__ )."includes/maps.php");

function shortcodeManagment($attributes){
    global $wpdb;

    $code = "<style>#map-contact h2 {margin-bottom:5px;} #map-contact h2,#map-contact div{font-family:Arial,Helvetica,sans-serif;}</style>";

    if ($attributes["addressbook"]=="true" || !isset($attributes["addressbook"])) {
        $options = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."map_settings");
        $code .= '<link rel="stylesheet" type="text/css" href="'.plugins_url( 'map-contact/includes/stylesheet.css' , dirname(__FILE__) ) .'" />';
        $code .= "<div id='addressBook' class='container-fluid spaced'><div class='row'>";
        $addresses = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."map_addresses");

        foreach ($addresses as $address) {
            $address = get_object_vars($address);
            $contact = "";
            if (!empty($address["image"])) { $address["infoWindow"] = preg_replace("/".preg_quote("[IMAGE_URL]")."/i",$address["image"],$address["infoWindow"]); }

            if (!empty($address["email"])){
                //$contact = '<button type="button" onclick="document.getElementById(\''.$address["id"].'_lightbox\').style.display=\'inline\';" >Contact by email</button>';

                //if (strpos($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"],"http")!==true) { $URL = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; } else { $URL = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; }

                $form = "
                    <div class='row'>
                        <form action='".get_admin_url()."admin-post.php' method='POST' id='contactForm' data-toggle='validator'>
                            <input type='hidden' name='to' value='".$address["email"]."'>
                            <input type='hidden' name='action' value='email'>
                            <input type='hidden' name='return_url' value='".get_permalink()."'>
                            <div class='col-sm-offset-2 col-sm-8 col-xs-12 spaced-bottom contact-inp'>
                                <input type='text' name='name' placeholder='Your Name' class='schedule_input' data-parsley-required data-parsley-error-message='Enter your name'>
                            </div>
                            <div class='col-sm-offset-2 col-sm-8 col-xs-12 spaced-bottom contact-inp'>
                                <input type='text' name='subject' placeholder='Name of your organization' class='schedule_input' data-parsley-required data-parsley-error-message='Enter your organization's name'>
                            </div>
                            <div class='col-sm-offset-2 col-sm-8 col-xs-12 spaced-bottom contact-inp'>
                                <input type='email' name='email' placeholder='Email address' class='schedule_input' data-parsley-required data-parsley-error-message='Enter your email address' data-parsley-type='email'>
                            </div>
                            <div class='col-sm-offset-2 col-sm-8 col-xs-12 spaced-bottom contact-inp'>
                                <textarea name='message' placeholder='How can we help you?' class='schedule_input' data-parsley-required data-parsley-error-message='Enter your name'></textarea>
                            </div>
                            <div class='col-sm-offset-2 col-sm-8 col-xs-12 spaced-bottom contact-inp'>
                                <button class='btn btn-primary bluebtn' style='min-width:150px;'>SEND</button>
                            </div>
                        </form>
                    </div>";
            }
            $code .=
                    "<div class='row-height'>
                        <div class='col-sm-6 col-height col-middle col-xs-12 contact-from spaced-bottom'>".$form."</div>
                        <div class='col-sm-6 col-height col-xs-12 person_entry col-middle spaced-bottom' id='".$address["id"]."_person'>
                            <div class='row'>
                                <div class='col-sm-offset-2 col-sm-8 col-xs-12 pipecandy-contact-add card spaced'>
                                    <div class='row spaced-bottom'>
                                        <div class='col-xs-12'>
                                            <span class='spaced-bottom'>".$address["infoWindow"].$contact."</span>
                                        </div>";
            //********** Call Us Content
            if(get_object_vars($options[15])["value"] || get_object_vars($options[16])["value"]){
                if(get_object_vars($options[15])["value"] && get_object_vars($options[16])["value"]){
                    $code .=
                            "<div class='col-xs-12 half-spaced'>
                                <h2>CALL US</h2>
                                <span class='call-us'>".get_object_vars($options[15])["value"]."</span>
                            </div>
                            <div class='col-xs-12 half-spaced'>
                                <h2>EMAIL US</h2>
                                <span class='email-us'>
                                    <a href='mailto:".get_object_vars($options[16])["value"]."' target='_top'>".get_object_vars($options[16])["value"]."</a>
                                </span>
                            </div>";    
                }
                else if(get_object_vars($options[15])["value"]){
                    $code .=
                            "<div class='col-xs-12 half-spaced'>
                                <h2>CALL US</h2>
                                <span class='call-us'>".get_object_vars($options[15])["value"]."</p>
                            </div>
                            <div clsaanss='col-xs-12 half-spaced'>
                                <h2>EMAIL US</h2>
                                <span class='email-us'>
                                    <a href='mailto:".get_object_vars($options[16])["value"]."' target='_top'>".get_object_vars($options[16])["value"]."</a>
                                </span>
                            </div>";
                }
                //********** Email Content
                else if(get_object_vars($options[16])["value"]){
                    $code .=
                            "<div class='col-xs-12 half-spaced'>
                                <h2>EMAIL US</h2>
                                <span class='email-us'>
                                    <a href='mailto:".get_object_vars($options[16])["value"]."' target='_top'>".get_object_vars($options[16])["value"]."</a>
                                </span>
                            </div>";
                }
            }
            $code .= "</div></div></div></div>";
        }
        $code .= "</div></div></div>";
    }
    
    if ($attributes["map"]=="true" || !isset($attributes["map"])) {
        $options = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."map_settings");
        $map = new MapsAPI("map-canvas",get_object_vars($options[0])["value"]);

        $contact_banner=get_object_vars($options[14])["value"];
        $imgUploadedUrl = wp_upload_dir();
        foreach ($options as $option) {
            $option = get_object_vars($option);
            if (@unserialize($option["value"])!==false) { $option["value"] = unserialize($option["value"]); }
            $map->changeMapOptions($option["setting"],$option["value"]);
        }
        $addresses = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."map_addresses");

        $pins = array();
        foreach ($addresses as $address) {
            $address = get_object_vars($address);
            $loc = $map->convertAddress($address["address"]);

            if (!empty($loc["lat"]) && !empty($loc["lng"]))
            {
                foreach ($pins as $pin)
                {
                    if ($pin["lat"]==$loc["lat"] && $pin["lng"]==$loc["lng"])
                    {
                        if (rand(1,2)==1) { $loc["lat"] = $loc["lat"] + rand(1,100)/500; } else { $loc["lat"] = $loc["lat"] - rand(1,100)/500; }

                        if (rand(1,2)==1) { $loc["lng"] = $loc["lng"] - rand(1,100)/500; } else { $loc["lng"] = $loc["lng"] + rand(1,100)/500; }
                    }
                }

                $pins[] = array("lat" => $loc["lat"],"lng" => $loc["lng"]);

                $address["infoWindow"] = trim(preg_replace('/\s\s+/', ' ', $address["infoWindow"]));
                $iw = preg_replace("/<img[^>]+\>/i", "", $address["infoWindow"]);
                $map->addLocationPin($loc["lat"],$loc["lng"],$address["name"],"<div style='max-width:250px; padding-bottom:10px;'>".$iw."</div>");
            }
        }

        if (isset($attributes["width"])) { $width = $attributes["width"]; } else { $width = "500px"; }
        if (isset($attributes["height"])) { $height = $attributes["height"]; } else { $height = "500px"; }

        $code .= $map->generateMap();
        //<img src='".get_stylesheet_directory_uri()."/img/india-flag.png'> <img src='".$imgUploadedUrl['baseurl'].$contact_banner."'>
        $code .=
            "<div class='row'>
                <div class='row-height'>
                    <div class='col-xs-12 col-md-6 col-height col-middle nopadding contact-banner hidden-xs hidden-sm'>
                        <img class='img-responsive hidden-xs hidden-sm' src='".get_stylesheet_directory_uri()."/img/bitmap.jpg' style='width:100%; height:".$height.";'>
                    </div>
                    <div class='col-xs-12 col-md-6 col-height col-middle nopadding contact-banner' id='wrapper'>
                        <div id='map-canvas' class='contact-map' style='width:100%; height:".$height.";'></div>
                    </div>
                </div>
            </div>";
    }
                
    return "<div id='map-contact'>".$code."</div>";
}

function addSettingsPages() {
    add_menu_page("Map Settings", "Map Settings", 'manage_options', 'map_settings', "settingsPage");
    add_submenu_page("map_settings",'Address Book','Address Book','manage_options','map_addressess',"addressBook");
    add_submenu_page("map_settings",'Add New Address','Add New Contact','manage_options','add_new_address',"newAddress");
}

function settingsPage()
{
    include(plugin_dir_path( __FILE__ )."admin/map_settings.php");
}

function addressBook()
{
    include(plugin_dir_path( __FILE__ )."admin/map_addresses.php");
}

function newAddress()
{
    include(plugin_dir_path( __FILE__ )."admin/add_new_address.php");
}

function sendEmailContact()
{
    global $wpdb;

    if (isset($_POST["send_email"]) && isset($_POST["to"]) && isset($_POST["message"]))
    {
        $returnEm = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."map_addresses WHERE id='".$_POST["to"]."'");
        $returnEm = get_object_vars($returnEm[0]);

        $to      = $returnEm["email"];
        $subject = $_POST["subject"]." - Map Contact";
        $message = $_POST["message"];
        $headers = 'From: '.$_POST["email"] . "\r\n";

        mail($to, $subject, $message, $headers);

        echo "Sending Email...";
        sleep(2);
        echo '<meta http-equiv="refresh" content="0; url='.base64_decode($_GET["return"]).'">';
    }
}

function editorButtons()
{
    if (wp_script_is('quicktags')){
        echo "<script type=\"text/javascript\">
            QTags.addButton( 'mc_shortcode', 'Map Contact Shortcode', '[map-contact map=\"true\" addressbook=\"true\" width=\"500px\" height=\"500px\"]', '', 'mc_shortcode', 'Map Contact Shortcode',  999);
        </script>";
    }
}

function pluginActivated() {
    global $wpdb; require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    if (!$wpdb->get_var( "SELECT * FROM ".$wpdb->prefix."map_settings" ))
    {
        $query = dbDelta( "CREATE TABLE ".$wpdb->prefix."map_settings (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `setting` text NOT NULL,
        `value` text NOT NULL,
         PRIMARY KEY (`id`))"
        );

        if ($wpdb->get_var("SHOW TABLES LIKE '".$wpdb->prefix."map_settings'") != $wpdb->prefix."map_settings")
        {
            echo "Unable to create table '".$wpdb->prefix."map_settings"."'!";
            exit;
        }
        else
        {
            $maps = new MapsAPI("");
            $wpdb->get_var("INSERT INTO ".$wpdb->prefix."map_settings"." VALUES('','API Key','')");

            foreach ($maps->mapOptions as $option => $value)
            {
                if (is_array($value)) { $value = serialize($value); }
                if (is_bool($value)) { $value = ($value) ? 'true' : 'false'; }

                $wpdb->get_var("INSERT INTO ".$wpdb->prefix."map_settings"." VALUES('','".$option."','".$value."')");
            }
        }

    }

    if (!$wpdb->get_var( "SELECT * FROM ".$wpdb->prefix."map_addresses" ))
    {
        dbDelta( "CREATE TABLE ".$wpdb->prefix."map_addresses (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `image` text NOT NULL,
        `name` text NOT NULL,
        `infoWindow` text NOT NULL,
        `email` text NOT NULL,
        `address` text NOT NULL,
        PRIMARY KEY (`id`))"
        );

        if ($wpdb->get_var("SHOW TABLES LIKE '".$wpdb->prefix."map_addresses'") != $wpdb->prefix."map_addresses")
        {
            echo "Unable to create table '".$wpdb->prefix."map_addresses"."'!";
            exit;
        }
        else
        {
            $wpdb->get_var("INSERT INTO ".$wpdb->prefix."map_addresses"." VALUES('','http://www.w3.org/html/logo/downloads/HTML5_Logo_256.png','Ryan Smith',\"<h2>Ryan Smith</h2><img src='[IMAGE_URL]'><div>Ryan, our lead developer on Map Contact is located in Greater London!</div>\",'ryan@xantoo.com','London')");
            $wpdb->get_var("INSERT INTO ".$wpdb->prefix."map_addresses"." VALUES('','http://a1.res.cloudinary.com/hvqqwrowv/image/asset/css3-65bdc13faee51df7f05b91f44414a80d.png','James Smith',\"<h2>James Smith</h2><img src='[IMAGE_URL]'><div>James, our lead marketer on Map Contact is located in Greater London!</div>\",'james@xantoo.com','London')");
        }
    }
}

function updatePlugin()
{
    global $wpdb;

    $result = $wpdb->get_var("SHOW COLUMNS FROM `wp_map_addresses` LIKE 'image'");

    if (!$result) { $wpdb->query("ALTER TABLE wp_map_addresses ADD COLUMN `image` text NOT NULL AFTER `ID`"); }
}

add_action("admin_post_email","sendEmailContact");
add_action( 'admin_print_footer_scripts', 'editorButtons' );
add_action( 'admin_menu', "addSettingsPages" );
add_shortcode( 'map-contact', 'shortcodeManagment' );
register_activation_hook( __FILE__, "pluginActivated");
add_action( 'admin_init', 'updatePlugin' );
?>