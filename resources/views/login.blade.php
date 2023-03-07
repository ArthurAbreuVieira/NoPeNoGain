<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/67cdbd520c.js" crossorigin="anonymous"></script>
    <script src="js/fetch.js" defer ></script>
    <title>No pé No Gain</title>

    <style>
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    
<main>
    <div class="logo">
        <span>No</span>
        <div>
            <span>pé</span>
            <span>gain LTDA.</span>
        </div>
    </div>

    <form method="post" action="{{ route('login')}}" class="login-form">
        @if(isset($msg))
            <span class="form-msg">{{$msg}}</span>
        @endif
        @csrf   
        <label>Usuario:</label>
        <input type="text" name="username" value="" placeholder="Insira seu usuario..." />
        <label>Senha:</label>
        <input type="password" name="password" value="" placeholder="Insira sua senha..." />
        <button type="submit">Fazer login</button>
    </section>
</main>

</body>
</html>