<?php
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',

];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>
    







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>"  id="login-form">
            <form action="login_register.php" method="post">
                <h2>Login</h2>
                <?php showError($errors['login']); ?>
                <div class="textbox" >
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')" >Register</a></p>
            </form>

        </div>
    </div>



    <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <form action="login_register.php" method="post">
            <h2>Register</h2>
            <?php showError($errors['register']); ?>
            <div class="textbox">
                <input type="text" placeholder="Name" name="name" required>
            </div>
            <div class="textbox">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <select name="role" required id="">
                <option value="">Select Role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" class="btn" name="register">Register</button>
            <p>Already have an account? <a href="#"  onclick="showForm('login-form')" >Login  </a></p>
        </form>

    </div>

</div>
    
</body>
<script src="script.js"></script>
</html>