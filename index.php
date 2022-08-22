<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="my-5">Contact Us</h1>
                <form action="submit.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Type your name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Type your e-mail" class="form-control">
                    </div>
                    <div class="mb-3">
                    <textarea rows="3" name="mensagem" placeholder="Digite sua mensagem" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>