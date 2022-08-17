<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="//db.onlinewebfonts.com/c/76ff85e7fb271a670d76bbb8d691c97f?family=Italiana" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;500;800;900&display=swap" rel="stylesheet">
    <?php wp_head()?>
</head>
<body>
    <header class="header">
        <div class="container">
        <?php wp_nav_menu([
            'container' => 'nav',

        ]); ?>
            <button class="header__menu-btn">
                <span></span>
            </button>
        </div>
    </header>