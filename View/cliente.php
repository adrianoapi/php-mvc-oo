<html>
    <head>
        <title>Cliente info</title>
    </head>

    <body>

        <?php
        echo "nome: " . utf8_encode($cliente[0]['nome']) . "<br/>";
        echo "email: {$cliente[0]['email']}<br/>";
        echo "senha: {$cliente[0]['senha']}<br/>";
        ?>

    </body>
</html>