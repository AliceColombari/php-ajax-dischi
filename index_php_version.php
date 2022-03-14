<?php
    // INCLUDO FILE DATABASE - ARRAY
 include __DIR__ . '/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCHI PHP</title>
    <!-- link style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <img class="logo" src="./logo.png" alt="logo spoty">
    </header>

    <main>
        <div class="container">
            <div class="content">
                <?php foreach($database as $disc) { ?>
                        <!-- DISCO SINGOLO CARD -->
                        <div class="single-disc">
                            <!-- IMAGE -->
                            <div class="single-disc-image">
                                <img src="<?php echo $disc['poster'] ?>">
                            </div>
                            <!-- TITLE -->
                            <div class="single-disc-title">
                                <h2><?php echo $disc['title'] ?></h2>
                            </div>
                            <!-- AUTHOR -->
                            <div class="single-disc-author">
                                <?php echo $disc['author'] ?>
                            </div>
                            <!-- YEAR -->
                            <div class="single-disc-year">
                                <?php echo $disc['year'] ?>
                            </div>
                        </div>
                    <?php }; ?>
            </div>
        </div>
    </main>

</body>
</html>