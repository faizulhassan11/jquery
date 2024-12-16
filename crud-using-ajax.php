<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="login-form">
        <h2>PHP CRUD USING AJAX</h2>
    <form action="">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <button type="button">Submit</button>
    </form>
    </div>

    <div class="data">
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

    <script>
        let username =document.getElementById('name');
        let password =document.getElementById('password');

        let btn = document.getElementById('btn-submit');
        btn.addEventListener("click",insertData);
    </script>
    
</body>
</html>