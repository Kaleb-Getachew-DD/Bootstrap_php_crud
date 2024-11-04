<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="assets/css/style.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Contact Form</h2>
        <?php if (isset($_GET['status'])): ?>
                    <div class="container mt-3">
                        <?php if ($_GET['status'] == 'success'): ?>
                            <div class="alert alert-success">
                                The record was added successfully!
                            </div>
                        <?php elseif ($_GET['status'] == 'error'): ?>
                            <div class="alert alert-danger">
                                There was an error adding the record. Please try again.
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
        <form action="save.php" method="post">
                    <div class="row">                  
                        <div class="col-md-6 col-lg-6 col-sm-12 mb-3">
                            <label for="" class="form-lable"></label>
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your full name">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 mb-3">
                            <label for="" class="form-lable"></label>
                            <input type="text" class="form-control" name = "email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12mb-3">
                            <label for="" class="form-lable"></label>
                            <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" name="save" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
    </div>

    <!-- Bootstrap 5.3 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoVz1K6pX2W4A4pHG7wrH06srM2v7Z3mubxtUHyWvqK13yn" crossorigin="anonymous"></script>
</body>
</html>
