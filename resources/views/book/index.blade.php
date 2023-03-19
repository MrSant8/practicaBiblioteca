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

<center><h1>Lista de libros</h1></center>
<table>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>Title</th>
            <th>Category</th>
            <th>Author</th>
            <th>Publish Date</th>
            <th>Description</th>
            <th>Price</th>
            <th>Editar</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->isbn }}</td>
            <td>{{ $book->title }}</td>
            @foreach ($book->categories as $category)
    @if ($category)
    <td>{{ $category->name }}</td>
    @endif
@endforeach

            <td>{{ $book->author }}</td>
            <td>{{ $book->publish_date }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->price}}€ </td>
            <td>
                <a href="/books/{{ $book->isbn }}/edit">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
