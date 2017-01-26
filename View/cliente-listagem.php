<html>
    <head>
        <title>Cliente listagem</title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>

    <body>

        <table>
            <tr>
                <td>nome</td>
                <td>e-mail</td>
                <td>senha</td>
            </tr>
            <?php
            foreach ($clientes as $key => $cliente) {
                echo '<tr>'
                . '<td><a href="cliente/visualizar/' . $cliente['id']. '">' . utf8_encode($cliente['nome'])  . '</a></td>'
                . '<td>' . $cliente['email'] . '</td>'
                . '<td>' . $cliente['senha'] . '</td>'
                . '</tr>';
            }
            ?>
        </table>

    </body>
</html>