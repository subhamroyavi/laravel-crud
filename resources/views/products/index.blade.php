<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <a href="{{ route('products.create') }}">Create Product</a>
    <table border="1">
        <tr>
            <th>Sl no.</th>
            <th>Name</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Create Date</th>
            <th>Operation</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->qty }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <form action="{{ route('delete', $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>   

                </form>
                <!-- <form action="{{ route('edit', $product->id) }}" method="get">
                    @csrf
                    <button type="submit">Edit</button>   

                </form> -->
                <a href="{{ route('edit', $product->id) }}">Edit</a>
                <a href="{{ route('product.view', $product->id) }}">View</a>

            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>