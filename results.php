<?php

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-5 text-primary">Results</h1>

        <div class="paragraph_result py-3">
            <h2 class="text-secondary mb-3">Paragraph:</h2>
            <p><?php echo $paragraph; ?></p>
            <div class="paragraph_length">
                <p class="fw-semibold">Paragraph length is <?php echo strlen($paragraph); ?></p>
            </div>
        </div>

        <div class="paragraph_censored py-3">
            <h2 class="text-secondary mb-3">Censored paragraph:</h2>
            <p><?php echo str_ireplace($badword, '***', $paragraph); ?></p>
            <div class="paragraph_length">
                <p class="fw-semibold">Paragraph length is <?php echo strlen($paragraph); ?></p>
            </div>
        </div>

        <div class="back">
            <a href="index.php" class="btn btn-danger" role="button">Back</a>
        </div>



        

    </div>
   
</body>
</html>