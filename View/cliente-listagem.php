<html>
    <head>
        <title>Cliente listagem</title>
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
                . '<td><a href="cliente/visualizar/' . $key . '">' . $cliente['nome'] . '</a></td>'
                . '<td>' . $cliente['email'] . '</td>'
                . '<td>' . $cliente['senha'] . '</td>'
                . '</tr>';
            }
            ?>
        </table>

    </body>
</html>