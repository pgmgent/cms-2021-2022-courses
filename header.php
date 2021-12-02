<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <nav>
        <?php
            if (has_custom_logo()) {
                the_custom_logo(); // Sizing werkt wel, was door een PHP error tijdens de les.
            }

            wp_nav_menu([
                'theme_location' => 'primary_menu'
            ])
        ?>
    </nav>

