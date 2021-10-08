<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://127.0.0.1/MVC/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/st_glayout.css">
    <link rel="stylesheet" type="text/css" href="./public/css/st_gdecorate.css">
    <link rel="stylesheet" type="text/css" href="./public/css/admin/st_admin.css">
    <link rel="stylesheet" type="text/css" href="./public/css/admin/fixed/st_query_writearea.css">
    <link rel="stylesheet" type="text/css" href="./public/css/admin/fixed/st_sidebar.css">
    <link rel="stylesheet" type="text/css" href="./public/css/admin/pages/st_<?php echo $data["page"] ?>.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Codystar:wght@300&family=Euphoria+Script&family=Faster+One&family=Frijole&family=Black+Ops+One&family=Monoton&family=Rampart+One&display=swap');
    </style>
    <title>Home-Admin</title>
</head>

<body class="row">
    <?php
    require "admin/fixed/vd_sidebar.php";
    ?>
    <div class=" col-s9 col-m9 col-l10 workspace">
        <?php require "admin/pages/vd_" . $data["page"] . ".php" ?>
        <?php require "admin/fixed/vd_query_writearea.php"; ?>
    </div>
    <div class="notify" id="notify">
        <p id="notify_content"></p>
        <button class="btn-close-notify" id="btn_close_notify"><i class="fas fa-times"></i></button>
    </div>
</body>
<script type="text/javascript">
    document.getElementById("btn_close_notify").onclick = function() {
        document.getElementById("notify").style.display = "none";
    }
</script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</script>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script type="text/javascript" src="public/js/node_modules/jquery/dist/jquery.js"></script>
<script type="text/javascript" src="public/js/admin/ac_change_style.js"></script>
<script type="text/javascript" src="public/js/admin/fixed/ac_query_writearea.js"></script>
<script type="text/javascript" src="public/js/admin/fixed/ajax_query_writearea.js"></script>

</html>