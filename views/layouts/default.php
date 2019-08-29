<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="/web/css/bootstrap.min.css">
<!--     <link rel="stylesheet" href="/web/css/style.css">
    <link rel="stylesheet" href="/web/css/header.css">
    <link rel="stylesheet" href="/web/css/menu_outside.css"> -->
    <link rel="stylesheet" href="/web/css/jquery-ui.css">
    <script src="/web/js/jquery-3.3.1.min.js"></script>

</head>
<body>
<div id="body" class="container-fluid px-0">
    <!-- topnav -->
    <? include '/views/total/topnav.php'; ?>

    <!-- main -->
    <main>
       <? include ($content) ?> 
    </main>

    <!-- footer -->
<? //include_once('./views/total/footer.php'); ?>
</div>
        
<!-- script -->

<script src="/web/js/jquery-ui.js"></script>
<script src="/web/js/bootstrap.js"></script>
</body>
</html>