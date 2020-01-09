<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>formulario</title>
</head>
<body>
    <form action="gravar.php"method="post">
 Nome..:
<br>
<input type="text" name = "nome"/>
<br><br>
E-mail..:
<br>
<input type="text" name = "email"/>
<br><br>
Idade..:
<br>
<input type="text" name = "idade"/>
<br><br>
Estado civil..:
<select name ="estado">
<option value = "">Selecione --</option>
<option value = "solteiro">Solteiro</option>
<option value = "solteiro">Casado</option>
<option value = "solteiro">Viuvo</option>
<option value = "solteiro">Divorciado</option>
</select>
<br><br><br>
<input type="submit" value="Cadastrar Cliente">
<input type="reset" value="Limpar Campos">

</form>

</body>
</html>