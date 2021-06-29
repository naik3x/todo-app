<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Just do it!</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Just do it!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
    <br>
    <div class="container">
        <div class="add-section">
            <form action="controller/add.php" method="POST" autocomplete="off">
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="What do you want to achieve and when?">
                    <input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Describe your task here">
                </div>
                <button type="button" class="btn btn-secondary btn-sm btn-block bg-dark" style="margin-top: 1%;">Add task &nbsp; &#43;</button>
            </form>
        </div>
        <div class="show-section">
            <div class="task-item">

            </div>
        </div>
    </div>
    <footer class="bg-dark text-center text-white fixed-bottom">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Technische Berufsschule Zürich
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>