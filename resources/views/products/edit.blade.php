<html>

<head>
    <title>Edit Product Data</title>
</head>

<body>
    <a href="{{ route('products.index') }}">Home</a>
    <br /><br />
    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <table width="25%" border="0">
            <tr>
                <td>Buku</td>
                <td><input type="text" name="buku" value="{{ $product->buku }}"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="{{ $product->harga }}"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah" value="{{ $product->jumlah }}"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>
                    <textarea class="form-control" id="penulis" name="penulis">{{ $product->penulis ?? '' }}</textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
