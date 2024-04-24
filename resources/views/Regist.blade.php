<div>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .register-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }
    .register-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    .register-container form label {
        display: block;
        margin-bottom: 10px;
    }
    .register-container form input[type="text"],
    .register-container form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    .register-container form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    .register-container form input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<body>
    <div class="register-container">
        <h2>Halaman Registrasi</h2>
        <form method="post" action="#">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Registrasi">
        </form>
    </div>
</body>
</div>
