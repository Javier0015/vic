<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stilologin.css">
  <title>Spotyshop</title>
  <meta charset="UTF-8">
</head>
<body>
    
    <section>
        <h1>Spotysongs ㅤ</h1>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="post">
                    <h2>Cuenta</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Correo</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Contraseña</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Recordar contraseña  <a href="#">Olvide mi Contraseña</a></label>
                      
                    </div>
                    <button>Entrar</button>
                    <div class="register">
                        <p>No tengo una cuenta <a href="registro.html">Registrate</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>