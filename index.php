<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login - Painel Biblioteca</title>
</head>
<body>
<form action="titulos.php" method="post">
    <div class="Login">
        <div style="width:100%; text-align:center; margin-bottom:10px;"><div class="Logo"></div></div>
        <font>LoginxD</font><br> <input type="text" class="Input"> <br>
        <font>Senha</font><br> <input type="password" class="Input"> <br>
        <input type="submit" value="Acessar" style="margin-top:10px;">
    </div>
</form>


<style>
*{box-sizing: border-box;}
.Login{text-align:center; position:absolute; height:300px; width:320px; left:calc(50% - 160px); top: calc(50% - 150px); display:block;}
.Logo{width:150px; height:150px; border:1px solid #8a8a8a; display:inline-block; border-radius:100%;}

</style>

</body>
</html>