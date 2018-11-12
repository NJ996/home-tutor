<?php
    require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Logo</a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <?=
                        $username;
                    ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>

                </div>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="text-center display-4">Welcome</h1>
            <h1 class="text-center display-2">
                <?= $name; ?>
            </h1>
            <h2 class="text-center">Email:
                <?=$email; ?>
            </h2>
            <h2 class="text-center">Registered On:
                <?= $created; ?>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem enim ipsum laboriosam fugiat tempore
                consequuntur, ab magnam ducimus commodi recusandae temporibus omnis, tenetur vel veritatis consequatur
                eius quibusdam quisquam soluta!
                Nulla nam ipsa dicta error dolor, quam aut ipsum voluptatibus eum. Voluptatum delectus quasi quam
                accusantium, ad voluptate accusamus in? Laborum, iure. Aut placeat quod accusantium ducimus, a impedit
                commodi.
                Aperiam facilis quaerat, doloremque dolore quod alias temporibus doloribus fugiat id voluptas dolores
                laboriosam velit odio, itaque nisi blanditiis. Rerum quam magnam adipisci ipsam consequuntur velit
                totam, laudantium placeat quisquam.
                Architecto, dolore ullam. Harum adipisci quis, amet qui provident necessitatibus corporis debitis, odit
                quos accusantium vitae id aspernatur impedit sit fugiat reprehenderit, labore minus natus suscipit quam
                saepe facilis ab.</p>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>