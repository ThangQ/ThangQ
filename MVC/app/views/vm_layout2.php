<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://127.0.0.1/MVC/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/client/pages/st_signup-in.css">
    <link rel="stylesheet" href="public/css/st_gdecorate.css">
    <link rel="stylesheet" href="public/css/st_glayout.css">
    <title> <?php echo $data["page"] ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Codystar:wght@300&family=Euphoria+Script&family=Faster+One&family=Frijole&family=Black+Ops+One&family=Monoton&family=Rampart+One&display=swap');

        <?php if ($data["page"] == "signup") : ?>.form-ctn {
            background: #d3ffd5;
        }

        input[type='submit'] {
            color: #078107;
            background: #a3f1ba;
        }

        .form-ctn__input-ctn {
            color: #168b1d;
        }

        main {
            background-image: linear-gradient(to top left, #86b7d3, #a1d173);
        }

        <?php endif ?>
    </style>
</head>

<body>
    <?php
    require "client/pages/vd_" . $data["page"] . ".php";
    ?>
</body>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="public/js/client/ajax_signup.js"></script>
<script type="text/javascript" src="public/js/client/ac_signin.js"></script>

</html>