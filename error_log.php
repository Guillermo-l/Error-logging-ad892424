<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    $log_file = "./error.log";
    $error_message = "Er is iets fout gegaan" . PHP_EOL;

    try {   $uitkomst = 5 % 0;
        echo $uitkomst;
    } catch (DivisionByZeroError $exception){
        error_log($error_message, 3, $log_file );
            }
    ?>

</body>

</html>