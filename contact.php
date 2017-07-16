<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact | Ankrd Media</title>

        <meta name="description"
              content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and creative formats." />

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Ankrd Media">
        <meta itemprop="description" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and creative formats.">
        <meta itemprop="image" content="https://ankrdmedia.com/images/logo_black.png">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and creative formats.">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Ankrd Media">
        <meta name="twitter:description" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and creative formats.">
        <meta name="twitter:creator" content="@author_handle">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="https://ankrdmedia.com/images/logo_black.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="Ankrd Media" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://ankrdmedia.com" />
        <meta property="og:image" content="https://ankrdmedia.com/images/logo_black.png" />
        <meta property="og:description" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and creative formats." />
        <meta property="og:site_name" content="Ankrd Media" />
        <meta property="fb:app_id" content="327091514370832" />

        <link rel="canonical" href="https://ankrdmedia.com/contact.php" />

        <meta name=viewport content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/images/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
        <link rel="manifest" href="/images/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">

        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>

        <div class="container container-about">

            <div class="left">

                <ul class="menu">

                    <li class="menu-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="about.html">About</a>
                    </li>
                    <li class="menu-item">
                        <a href="ankrd.html">Ankrd</a>
                    </li>
                    <li class="menu-item">
                        <a href="contact.php" class="active">Contact</a>
                    </li>

                </ul>

            </div>

            <div class="right">

                <div class="text">

                    <p class="contact-text">
                        We've always got an open ear for you:
                    </p>

                    <form method="post" action="mail.php" class="contact-form" id="contact-form">

                        <input type="email" placeholder="Email" class="input" name="email">
                        <input type="text" placeholder="Phone" class="input" name="phone">
                        <textarea class="input" name="text" rows="5" placeholder="Inquiries"></textarea>

                        <button class="button g-recaptcha"
                                data-sitekey="6LcxOSkUAAAAACTuMXSnvZbV-sn-Qjaqu6CLNQ-g"
                                data-callback="onSubmit" type="submit">
                            Submit
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <div class="footer">
            &copy; 2017 Ankrd Media, LLC. All rights reserved.
        </div>

        <script type="text/javascript">
            if('serviceWorker' in navigator) {
                navigator.serviceWorker
                    .register('/sw.js')
                    .then(function() { console.log("Service Worker Registered"); });
            }

            function onSubmit(token) {
                document.getElementById("contact-form").submit();
            }
        </script>

    </body>
</html>