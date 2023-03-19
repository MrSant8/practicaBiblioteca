<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4B86E3;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td {
  font-size: 12px;
}

    </style>
<div>
    <center><h1>ISBN {{ $book->isbn }}</h1></center>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Publish Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->publish_date }}</td>
            </tr>
        </tbody>
    </table>

    <form method="POST" action="{{ route('books.destroy', $book->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este libro?')">Confirmar Eliminación</button>
    </form>
</div>
