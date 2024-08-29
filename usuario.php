<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            display:flex;
            list-style: none;
            background-color: black;
        }

        li{
            padding: 5px;
        }

        *{
            margin:0;
        }

        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            background-color: white;
            color: black;
            padding: 8px;
            transition: 250ms;
        }

        main{
            display: flex;
            margin: 10px;

        }

        img{
            width: 70px;
        
        }

      

        #dados{
            width: "80%";
            height: "80%";
            color: green;
            border: 2px solid;
            border-radius: 10px;
            background-color: red;
            padding: 10px;
        }

        span{
            color: black;
            font-weight: bold;
        }

        p{
            background-color: palegreen;
            border: 1px dashed;
        }
    </style>
</head>
<body>
    <header>

        <nav>
            <ul>
                <li><a href="">Home:</li>
                <li><a href="">Contatos:</li>
                <li><a href="">Sobre:</li>
                <li><a href="">Login:</li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="imagem">
            <img src="imagem.png">
        </div>
        <div id="dados">
        

            <P>
            <?php
            include "conecta.php";
                
                $sql = "SELECT id, nome, senha, email FROM usuario";
                $resultado = mysqli_query($conexao, $sql);
                echo "<br>";
  
                if (mysqli_num_rows($resultado) > 0){
                while($registro = mysqli_fetch_assoc($resultado)) {
                    echo "<span> ID: </span> ". $registro["id"];
                    echo "<span> Nome: </span> ". $registro["nome"];
                    echo "<span> E-mail: </span> ". $registro["email"];
                    echo "<br>";
                }

            }
            ?>
            </p>
        </div>
    </main>
</body>
</html>