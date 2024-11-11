<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Register</title>
    <style>
        /* Custom CSS to center the form */
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Full-height for vertical centering */
            
        }
        .form-container {
            width: 100%;
            max-width: 500px; /* Adjust the max-width as needed */
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
        }
          /* Full-screen centering */
          body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to bottom, #2bd02e 0%, #ff99cc 100%);
        }
        
        /* Form container styling */
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        
        /* Header and form element styling */
        .form-container h4 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .form-container .form-control {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        
        .form-container .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        /* Hover effect for the button */
        .form-container .btn-primary:hover {
            background-color: pink;
        }
        
        /* Link styling */
        .form-container .text-center a {
            color: #007bff;
            text-decoration: none;
        }
        
        .form-container .text-center a:hover {
            text-decoration: underline;
        }
    </style>
    </style>
</head>
<body>
    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://sourcecodester.com"></a>
        </div>
    </nav>
    
    <!-- Center the form within the viewport -->
    <div class="container centered-container">
        <div class="form-container">
            <h3 class="text-primary text-center">Register</h3>
            <hr style="border-top:1px dotted #ccc;"/>
            <form action="register_query.php" method="POST">       
                <h4 class="text-success text-center"></h4>
                <hr style="border-top:1px solid #000;">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" required />
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" required />
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" required />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="register">Register</button>
                </div>
                <p class="text-center"><a href="../index.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
