<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://127.0.0.1/MVC/" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/css/st_glayout.css">
    <link rel="stylesheet" type="text/css" href="./public/css/st_gdecorate.css">
    <link rel="stylesheet" type="text/css" href="./public/css/client/fixed/st_header.css">
    <link rel="stylesheet" type="text/css" href="./public/css/client/fixed/st_footer.css">
    <link rel="stylesheet" type="text/css" href="./public/css/client/pages/st_<?php echo $data['page'] ?>.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Codystar:wght@300&family=Euphoria+Script&family=Faster+One&family=Frijole&family=Black+Ops+One&family=Monoton&family=Rampart+One&display=swap');
    </style>
    <title><?php echo $data['page'] ?></title>
</head>

<body class='row'>
    <?php
    require_once "client/fixed/vd_header.php";
    require_once "client/pages/vd_" . $data['page'] . ".php";
    require_once "client/fixed/vd_footer.php";
    ?>
</body>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="./public/js/client/ac_header.js"></script>
<script type="text/javascript" src="./public/js/client/ac_acc_manager.js"></script>

</html>