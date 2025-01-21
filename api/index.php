<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP VERCEL</title>
</head>
<body>
    <h2>Response Headers :</h2>
    <pre>
        <?php
        $headers = headers_list();
        
        foreach ($headers as $header) {
            echo $header . "<br>";
        }
        ?>
    </pre>
</body>
</html>