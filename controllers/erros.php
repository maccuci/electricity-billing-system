<?php
if (count($errors) > 0) : ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Cebra</title>
    </head>

    <body>
        <div id="titles">
            <div class="title">
                <h1>CE<span style="color: #509e11;">BR</span>A</h1>
            </div>
            <div class="sub-title">
                <h3>Companhia Energética do Brasil!</h3>
            </div>
        </div>

        <div class="btn-center">
            <a href="../index.php" class="btn" id="home"><span>Início</span></a>

            <?php foreach ($errors as $error) : ?>
                <p><?php echo $error ?></p>
            <?php endforeach ?>
        </div>
    </body>

    </html>
    <div class="error">
    </div>
<?php endif ?>