<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Quadrados</title>
</head>
<body>
    <h1>Cadastro de Quadrados</h1>
    <form action="processar.php" method="post">
        <label for="medida">Medida do Lado:</label>
        <input type="number" step="0.01" name="medida" required><br><br>

        <label for="unidade">Unidade:</label>
        <select name="unidade" required>
            <option value="centímetros">Centímetros</option>
            <option value="milímetros">Milímetros</option>
            <option value="metros">Metros</option>
        </select><br><br>

        <label for="cor">Cor:</label>
        <input type="color" name="cor" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <h2>Quadrados Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Medida</th>
            <th>Unidade</th>
            <th>Cor</th>
            <th>Lado</th>
            <th>Desenho</th>
        </tr>

        <?php
        include 'db_connect.php';

        $sql = "SELECT * FROM quadrados";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["medida"] . "</td>";
                echo "<td>" . $row["unidade"] . "</td>";
                echo "<td><div style='width: 20px; height: 20px; background-color:" . $row["cor"] . ";'></div></td>";
                echo "<td>" . $row["medida"] . " " . $row["unidade"] . "</td>";
                echo "<td><div style='width:" . $row["medida"] . "px; height:" . $row["medida"] . "px; background-color:" . $row["cor"] . ";'></div></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum quadrado cadastrado</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
