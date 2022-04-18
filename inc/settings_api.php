<?php 

    // Settings API Packaging Function 
    function zboom_random_settings_api(){
        add_settings_section( 'sec_id', 'Author Name', 'sec_func', 'setting_slug' );
        add_settings_field( 'copyright_text', 'Copyright Text', 'copyright_input', 'setting_slug', 'sec_id' );
        register_setting( 'sec_id', 'copyright_text' );

        add_settings_field( 'author_name', 'Author Name', 'author_input', 'setting_slug', 'sec_id' );
        register_setting( 'sec_id', 'author_name' );


    }
    add_action( 'admin_init', 'zboom_random_settings_api' );


    // Setting API Function
    function zboom_api_theme_option(){
        add_theme_page( 'Settings API', 'Theme Options', 'publish_pages', 'setting_slug', 'api_options_design_func' );
        add_menu_page( 'Setting API Menu Setup', 'Options', 'publish_pages', 'setting_slug', 'api_options_design_func', 'dashicons-businessman', 55 );

    }
    add_action( 'admin_menu', 'zboom_api_theme_option' );

    // Settings API Function Design
    function copyright_input(){
        echo '<input type="text" name="copyright_text" value="'. get_option( 'copyright_text' ) .'" placeholder="Copyright Text" class="widefat"/> ';
    }

    function author_input(){
        echo '<input type="text" name="author_name" value="'. get_option( 'author_name' ) .'" placeholder="Author Name" class="widefat"/> ';
    }

    function api_options_design_func(){ ?>
        <h1>Theme Options:</h1>
        <form action="options.php" method="post">
            <?php do_settings_sections( 'setting_slug' );?>
            <?php settings_fields( 'sec_id' ); ?>
            <?php submit_button(); ?>
        </form>
    <?php
    }

    function sec_func(){
        echo '<p> You may add or change all options here...cheers!!..</p>';
    }
?>





