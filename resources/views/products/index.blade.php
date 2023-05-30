<html>

<head>
    <title>HOMEPAGE</title>
</head>

<body>
    <a href="{{ route('products.create') }}">Add New Product</a><br /><br />
    <table width='80%' border=1>
        <tr>
            <th>Buku</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Penulis</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->buku }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->jumlah }}</td>
                <td>{{ $product->penulis ?? 'N/A' }}</td>
                <td>
                    <button onclick="window.location.href='{{ route('products.edit', $product->id) }}'">Edit</button>
                    <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
