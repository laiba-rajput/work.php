<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-6">
               <form method="get" action="page1.php">
                <h1>Insert your Data:</h1>
                <input placeholder="Enter Your Name" class="form-control mb-2" name="name">
                <input placeholder="Enter Your Email" class="form-control mb-2" name="email">
                <input placeholder="Enter Your Phone" class="form-control mb-2" name="phone">
                <button class="btn btn-dark" name="submit">Submit</button>
               </form>
            </div>
        </div>
  </section>
</body>
</html>

<?php
    if(isset($_GET['submit'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];

        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phone;
        }
?>