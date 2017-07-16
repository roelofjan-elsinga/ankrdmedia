<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact | Ankrd Media</title>

        <meta name="description"
              content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and created formats." />

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Ankrd Media">
        <meta itemprop="description" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and created formats.">
        <meta itemprop="image" content="https://ankrdmedia.com/images/logo.png">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and created formats.">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Ankrd Media">
        <meta name="twitter:description" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and created formats.">
        <meta name="twitter:creator" content="@author_handle">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="https://ankrdmedia.com/images/logo.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="Ankrd Media" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://ankrdmedia.com" />
        <meta property="og:image" content="https://ankrdmedia.com/images/logo.png" />
        <meta property="og:description" content="Ankrd Media is a startup seeking to help shape the future of communication and how we share information in balanced and created formats." />
        <meta property="og:site_name" content="Ankrd Media" />
        <meta property="fb:app_id" content="327091514370832" />

        <link rel="canonical" href="https://ankrdmedia.com/contact.php" />

        <meta name=viewport content="width=device-width, initial-scale=1">

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