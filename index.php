<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fibonacci Numbers</title>
    <link rel="stylesheet" href="page.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <p style="position:fixed; width: 100%; top: 0; left: 0;">FIBONACCI</p>
        <hr class="px40">
        <?php
            $stop = true;

            $step = 1;
            $store1 = 1;
            $store2 = 1;
            $store = 0;
            
            echo '<p>'.$store1.'</p>';
            echo '<p>'.$store2.'</p>';
            for ($i=0; $i < 5000; $i++) { 
                $store = $store1 + $store2;
                $store1 = $store2;
                $store2 = $store;
                echo '<p>'.$store2.'</p>';
            }
        ?>
    </main>
</body>
</html>