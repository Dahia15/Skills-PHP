<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>


    
    <article class="card">
        <figure class="card__figure">
            <img src="./img/update.png" alt="update graphic">
        </figure>
        <section class="card__body">
            <header>
                <h2 class="card__heading">Update Log-in<h2>
            </header>
            <ul class="card__categories">
                <form action="repassword.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>
            
                    <label for="username">Old password:</label>
                    <input type="password" id="password" name="password" required><br>
            
                    <label for="newPassword">New Password:</label>
                    <input type="password" id="newPassword" name="newPassword" required><br>
            
                    <input type="submit" value="Update">
                </form>
            </ul>
   
</body>
</html>