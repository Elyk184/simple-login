<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <style>
            /* Full-page flexbox for centering */
            body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('https://i.pinimg.com/originals/4e/4c/66/4e4c664a900a8d4fbccacc1e9830c253.gif') no-repeat center center fixed;
    background-size: cover;
    overflow: hidden;
}

            /* Center the well container */
            .well {
                padding: 20px;
                border-radius: 8px;
                background-color: rgba(255, 255, 255, 0.9); /* Light background with slight transparency */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 400px; /* Adjust width as needed */
                width: 100%;
            }

            .text-primary {
                text-align: center;
            }

            hr {
                margin: 15px 0;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://sourcecodester.com"></a>
            </div>
        </nav>
        <div class="well">
            <h3 class="text-primary">Registration</h3>
            <hr style="border-top:1px dotted #ccc;"/>
            <form action="register_query.php" method="POST">
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" />
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" />
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <br />
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="register">Register</button>
                </div>
                <a href="../index.php">Login</a>
            </form>
        </div>
    </body>
</html>
