<?php
require(__DIR__ . "/../language.php");
require(__DIR__ . "/../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $config['website-name']; ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $config["website-description"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="picture.ccpcpc.icu/images/2019/10/04/16-16.png"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center" style="margin-top:3%;">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($error_msg)) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error_msg; ?></p>
                </div>
            <?php } ?>
            <div class="jumbotron">
                <h1 class="display-6"><?php echo $config['website-name']; ?></h1>
                <p class="lead"><?php echo $lang["slogan"]; ?></p>
                <div class="btn-group" role="group">
                    <a id="none" class="btn btn-success" href="/">Home</a>
                    <a id="startpage" class="btn btn-info" href="#">Startpage</a>
                    <a id="youtube" class="btn btn-danger" href="#">YouTube</a>
                    <a id="civicedu" class="btn btn-primary" href="#">CivicEdu</a>
                </div>
                <br>
                <br>
                <div class="btn-group" role="group">
                    <a id="vikipedi" class="btn btn-secondary" href="#"><?php echo $lang["wikipedia"]; ?></a>
                    <a id="pornhub" class="btn btn-success" href="#">Pornhub</a>
                    <a id="piratebay" class="btn btn-danger" href="#">PirateBay</a>
                    <a id="thinker" class="btn btn-info" href="#">Thinker</a>
                </div>
                <p class="lead">
                <form class="form-group" action="index.php" method="post">
                    <input id="url" name="url" type="url" class="form-control" autocomplete="on" placeholder="http://" value="http://"
                           autofocus required/>
                    <br>
                    <input class="btn btn-primary btn-lg" type="submit" value="<?php echo $lang["go"]; ?>"/>
                </form>
            </div>
            <div class="text-center">
                <p style="font-size:11px">
                    <small><?php echo $lang["agree"]; ?> <a
                                href="<?php echo $config['website-url']; ?>/?tos"><?php echo $lang["tos_2"]; ?></a>
                    </small>
                </p>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $('#startpage').click(function () {
            $('#url').val('https://www.startpage.com');
        });
        $('#youtube').click(function () {
            $('#url').val('https://www.youtube.com');
        });
        $('#civicedu').click(function () {
            $('#url').val('https://www.civicedu.org');
        });
        $('#pornhub').click(function () {
            $('#url').val('https://www.pornhub.com');
        });
        $('#vikipedi').click(function () {
            $('#url').val('https://zh.wikipedia.org');
        });
        $('#piratebay').click(function () {
            $('#url').val('https://thepiratebay.org');
        });
        $('#thinker').click(function () {
            $('#url').val('https://program-think.blogspot.com');
        });
    </script>
</div>
</body>
</html>
