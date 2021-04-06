<?php
    function pdo_connect_mysql(){
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'phpcrud';
        
        try{
            return new PDO('mysql:host='. $DATABASE_HOST .';dbname ='. $DATABASE_NAME .'; charset=utf8',$DATABASE_USER,$DATABASE_PASS);
        }catch(PDOException $exception){

            exit('Connection Failed');

        }
    }
    function template_header($title){
        echo <<<EOT
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset = "utf8">
                <title>$title</title>
                <link href="style.css" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            </head>
            <body>
                <nav class = "navtop">
                    <div>
                        <h1>PhoneBook</h1>
                        <a href="index.php"><i class ="fas fa-home"></i>Home</a>
                        <a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
                    </div>
                </nav>
        EOT;
    }
    function template_footer(){
        echo <<<EOT
            </body>
        </html>
        EOT;
    }
?>