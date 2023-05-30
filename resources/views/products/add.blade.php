<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <a href="{{ route('products.index') }}">Go to Home</a>
    <br /><br />
    <form action="{{ route('products.store') }}" method="post" name="form1">
        @csrf
        <table width="25%" border="0">
            <tr>
                <td>Buku</td>
                <td><input type="text" name="buku"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah"></td>
            <tr>
                <td>Penulis</td>
                <td>
                    <textarea class="form-control" id="penulis" name="penulis"></textarea>
                </td>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>

</html>
