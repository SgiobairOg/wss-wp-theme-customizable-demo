<html>
    <head>
        <style type="text/css">
            /* Critical and PHP managed styles */

            @font-face {
            font-family: BLOKK;
            src: url(<?php bloginfo ('stylesheet_directory');?>/assets/BLOKKNeue-Regular.woff);
            }

            * {
            font-family: "BLOKK" !important;
            }

            :root {
            --primary-color: #f4f4f4;
            --secondary-color: #c42d3e;    
            font-size: 16px;
            }

            html {
            margin: 0;
            padding: 0;
            }

            body {
            width: 100vw;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
            }

            .wrapper {
            width: 100vw;
            min-height: 100vh;
            background: var(--primary-color);
            margin: 0;
            }

            .header {
            background: var(--secondary-color);
            color: var(--primary-color);
            display: grid;
            grid-template-columns: 4rem 10rem auto 4rem;
            }
            
            .logo--header {
                border-radius: 50%;
                height: 10rem;
                width: 10rem;
                margin: 1rem 0;
                grid-column: 2 / span 1;
            }

            .nav {
                grid-column: 3 / span 1;
                align-self: end;
                padding-bottom: 2rem;
            }

            .nav__links {
                display: flex;
                flex-flow: row nowrap;
                justify-content: space-around;
                align-items: flex-end;
                list-style-type: none;

                height: 100%;
            }
            
            .nav__links__item {
                white-space: nowrap;
            }
        </style>
        <?php wp_head(); ?>

        <link href="https://blokkfont-losgordos.netdna-ssl.com/v2/blokkfont.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="wrapper"> 
            <header class="header">
                <img src="https://www.fillmurray.com/g/300/300" class="logo--header" />
                <nav class="nav">
                    <ul class="nav__links">
                        <li class="nav__links__item">
                            Home
                        </li>
                        <li class="nav__links__item">
                            Demonstrator
                        </li>
                        <li class="nav__links__item">
                            Inventory
                        </li>
                        <li class="nav__links__item">
                            About Us
                        </li>
                        <li class="nav__links__item">
                            Web Page
                        </li>
                    </ul>
                </nav>
            </header>
            
            <main class="hero">
                <figure class="hero__slide">
                    <h1 class="hero__text">Call all actors with the greatest call to action</p>
                    <button class="hero__button">Act Now</button>
                </figure>
            </main>
            <aside class="page-content">
                <!-- Page Content Area -->


