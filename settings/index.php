<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Settings | Python</title>
        <?php
            $check_cookies = true;
            $theme = "light";
            $other_theme = "dark";
            $theme_css = "";
            $vscode_theme = "vs";
            if(isset($_GET["theme"])) {
                if($_GET["theme"] == "light") {
                    $theme = "light";
                    $other_theme = "dark";
                    $check_cookies = false;
                    setcookie("theme", "light", null, "/");
                } else if($_GET["theme"] == "dark") {
                    $theme = "dark";
                    $other_theme = "light";
                    $check_cookies = false;
                    setcookie("theme", "dark", null, "/");
                }
            }
            if($check_cookies && isset($_COOKIE["theme"])) {
                if($_COOKIE["theme"] == "light") {
                    $theme = "light";
                    $other_theme = "dark";
                } else if($_COOKIE["theme"] == "dark") {
                    $theme = "dark";
                    $other_theme = "light";
                } else {
                    $theme = "light";
                    $other_theme = "dark";
                }
            } else {
                setcookie("theme", "light", null, "/");
            }
            if($theme == "light") {
                $theme_css = "https://libs.digitalpiloten.org/bootstrap/4.3.1/css/bootstrap.min.css";
                $vscode_theme = "vs";
            } else if($theme == "dark") {
                $theme_css = "https://libs.digitalpiloten.org/bootswatch/darkly/1.0.0/bootstrap.min.css";
                $vscode_theme = "vs-dark";
            }
        ?>
        <link rel="stylesheet" type="text/css" href="<?= $theme_css ?>">
    </head>
    <body style="height:100% !important;">
        <div class="container">
            <h1>Settings</h1>
            <a
                class="btn btn-primary"
                href="?theme=<?= $other_theme ?>"
            >
                Change theme to <?= ucfirst($other_theme) ?>
            </a>
        </div>
        <script type="application/javascript" src="https://libs.digitalpiloten.org/jquery/3.4.1/jquery.min.js"></script>
        <script type="application/javascript" src="https://libs.digitalpiloten.org/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>