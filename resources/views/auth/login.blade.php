<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/stilologin.css">
  <title>Spotyshop</title>
  <meta charset="UTF-8">
  @extends('layouts.app')
  @section('content')
</head>
<body>

    <section>
        <h1 style="color: #292AEB;">Spotysongs  ㅤㅤ</h1>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <h2>Cuenta</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" class="form-control border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="">Correo</label>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" class="form-control border-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for="">Contraseña</label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="forget">
                       
                      
                    </div>
                    <button type="submit" >Entrar</button>
                   
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
@endsection  
</html>