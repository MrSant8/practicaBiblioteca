<!DOCTYPE html>
<html>
<head>
    <title>Crear libro</title>
</head>
<body>
    <h1>Crear libro</h1>
    <form method="POST" action="/books">
        
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn"><br>

        <label for="title">Título:</label>
        <input type="text" id="title" name="title"><br>

        <label for="author">Autor:</label>
        <input type="text" id="author" name="author"><br>

        <label for="publish_date">Fecha de publicación:</label>
        <input type="date" id="publish_date" name="publish_date"><br>

        <label for="description">Descripción:</label>
        <textarea id="description" name="description"></textarea><br>

        <label for="price">Precio:</label>
        <input type="number" step="0.01" id="price" name="price"><br>

        <button type="submit">Crear</button>
    </form>
</body>
</html>
