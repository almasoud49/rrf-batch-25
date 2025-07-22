<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="bg-[#FFFCE4] sticky top-[-28px] z-10">
        <div class="container mx-auto">
            <div class="flex items-center py-[36px] pb-2">
                <img src="https://moudud-hoq.github.io/rrf-landing-page-with-tailwindcss/src/img/logo.svg" alt="Lesson.">

                <nav class="ml-auto rrf-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary'
                )) ?>
                </nav>
            </div>
        </div>
    </header>