<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1>Edit Page</h1>
            </div>
            <div class="card-body">
                
                <form action="{{ route('update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label><br /><br />
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" />
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label><br /><br />
                        <input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty:</label><br /><br />
                        <input type="text" class="form-control" name="qty" value="{{ $product->qty }}"/>
                        @error('qty')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label><br /><br />
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <br />
                    <button type="submit" class="btn-btn">update</button>
                </form>
            </div>
        </div>

    </div>
    </div>
</body>

</html>