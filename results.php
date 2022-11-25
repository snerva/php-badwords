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
</head>
<body>
    <div class="container">
        <h2>Results</h2>

        <div class="paragraph_result">
            <h2>Paragraph:</h2>
            <p><?php echo $paragraph; ?></p>
            <div class="paragraph_length">
                <p>Paragraph length is <?php echo strlen($paragraph); ?></p>
            </div>
        </div>

        <div class="paragraph_censored">
            <h2>Censored paragraph:</h2>
            <p><?php echo str_ireplace($badword, '***', $paragraph); ?></p>
            <div class="paragraph_length">
                <p>Paragraph length is <?php echo strlen($paragraph); ?></p>
            </div>
        </div>



        

    </div>
   
</body>
</html>