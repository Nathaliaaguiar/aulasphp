<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="gravar.php" method="post" class="form">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <label for="estado">Estado civil:</label>
            <select id="estado" name="estado" required>
                <option value="">Selecione --</option>
                <option value="solteiro">Solteiro</option>
                <option value="casado">Casado</option>
                <option value="viuvo">Viúvo</option>
                <option value="divorciado">Divorciado</option>
            </select>

            <div class="button-group">
                <input type="submit" value="Cadastrar Cliente" class="btn">
                <input type="reset" value="Limpar Campos" class="btn">
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-message"></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
