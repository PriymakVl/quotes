<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <link rel="stylesheet" href="/web/css/style.css">
    <link rel="stylesheet" href="/web/css/header.css">
    <link rel="stylesheet" href="/web/css/menu_outside.css">
    <link rel="stylesheet" href="/web/css/jquery-ui.css">
    <script src="/web/js/jquery-3.3.1.min.js"></script>
    <script src="/web/js/jquery-ui.js"></script>
</head>
<body>
    <div id="container">
        <!-- header -->
        <? include_once('./views/total/header.php'); ?>

        <!-- content -->
        <div id="content">
            <? include_once($content) ;?>
        </div>

        <!-- footer -->
        <? //include_once('./views/total/footer.php'); ?>
    </div>
</body>
</html>