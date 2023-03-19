<!DOCTYPE html>
<html>
<head>
    <title>Editar libro</title>
</head>
<body>
    <h1>Editar libro</h1>
    <form method="POST" action="/books/{{ $book->isbn }}">
    @csrf
    @method('PUT')       
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}"><br>

        <label for="author">Autor:</label>
        <input type="text" id="author" name="author" value="{{ $book->author }}"><br>

        <label for="publish_date">Fecha de publicación:</label>
        <input type="date" id="publish_date" name="publish_date" value="{{ $book->publish_date }}"><br>

        <label for="description">Descripción:</label>
        <textarea id="description" name="description">{{ $book->description }}</textarea><br>

        <label for="price">Precio:</label>
        <input type="number" step="0.01" id="price" name="price" value="{{ $book->price }}"><br>

        <button type="submit">Actualizar Libro</button>
    </form>
</body>
</html>
