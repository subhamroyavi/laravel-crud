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
                <h1>Create Page</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label><br /><br />
                        <input type="text" class="form-control" name="name" />
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description:</label><br /><br />
                        <input type="text" class="form-control" name="description" />
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty:</label><br /><br />
                        <input type="text" class="form-control" name="qty" />
                        @error('qty')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label><br /><br />
                        <input type="text" class="form-control" name="price" />
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror<br /><br />
                    </div>

                    <br />
                    <button type="submit" class="btn-btn">Insert</button>
                </form>
            </div>
        </div>

    </div>
    </div>
</body>

</html>