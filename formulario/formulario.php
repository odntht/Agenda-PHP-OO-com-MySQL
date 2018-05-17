<html>
    <head>
        <title>Formulário</title>
    </head>
    <body align="center">
        <img width="10%" src="http://2.bp.blogspot.com/-yVl67yeihHs/UkO47ij0PQI/AAAAAAAAYf8/4vbvjXQ5224/s1600/Caneta-em-png-queroiamgem-Cei%C3%A7a-Crispim+(1).png">
        <br>
        <h1>Formulário de Cadastro</h1>
        <br>
        <form method="post" action="../db/db.php">
            <table align="center">
                <tr  height="30px">
                    <td><strong>Nome: </strong></td>
                    <td align="center"><input type="text" name="usuario" required="required" maxlength="200"></td>
                </tr>
                <tr  height="30px">
                    <td><strong>Email: </strong></td>
                    <td align="center"><input type="email" name="email" maxlength="200" required="required"></td>
                </tr>    
                <tr  height="30px">
                    <td><strong>Senha: </strong></td>
                    <td align="center"><input type="password" name="senha" maxlength="8" required="required"></td>
                </tr>    
                <tr  height="30px">
                    <td colspan="2" align="center">
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>