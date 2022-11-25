<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container ">
    <h1 class="my-5 text-primary">PHP Form</h1>
    <form action="results.php" method="get">
        <div class="mb-3">
            <label for="paragraph" class="form-label fw-semibold">Insert some text</label>
            <input type="text" name="paragraph" id="paragraph" class="form-control" >
        </div>
        <div class="mb-4">
            <label for="badword" class="form-label fw-semibold">Insert your Badword</label>
            <input type="text" name="badword" id="badword" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>
</html>