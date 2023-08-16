<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRMD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="loader">
        <div class="spinner-wrapper">
            <div class="spinner-container">
                <div class="spinner">
                    <div class="spinner">
                        <div class="spinner">
                            <div class="spinner">
                                <div class="spinner">
                                    <div class="spinner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex row">
        <?php
        include 'header.html';
        ?>

        <?php
        include 'hero.html';
        ?>

        <?php
        include 'about.html';
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
    <script>
        (function() {
            const locomotiveScroll = new LocomotiveScroll();
        })();
    </script>

    <script>
        // add "hide-loader" once loaded
        window.addEventListener("load", function() {
            const loader = document.querySelector(".loader");
            loader.className += "-hidden";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" async defer></script>
</body>

</html>