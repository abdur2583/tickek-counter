
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Store Keeper Admin Page</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="header"><h4>Update Product</h4></div>
                @if (session('update'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('update') }}
                    </div>
                    
                @endif
                <div class="form">
                    <form action="{{ route('update_product') }}" method="POST">
                        @csrf
                        <div>
                            <label class="form-label form"  for="" >Product Name</label>
                            @error('product_name')
                                <p>{{ $message }}</p>
                            @enderror
                            <input class="form-control" type="text" name="product_name" value="{{ old('product_name') }}">
                        </div>
                        <div>
                            <label class="form-label form" for="">Product stock</label>
                            <input class="form-control"  type="text" name="product_stock" value="{{ old('product_stock') }}">
                            @error('product_stock')
                                {{ $message }}
                            @enderror
                        </div>
                        <div>
                            <label class="form-label form" for="">Product price</label>
                            @error('product_price')
                                {{ $message }}
                            @enderror
                            <input class="form-control"  type="text" name="product_price" value="{{ old('product_price') }}">
                        </div>
                         <div>
                            <label for="">Product Category</label>
                            <input class="form-control"  type="text" name="product_category" value="{{ old('product_category') }}">
                        </div>
                        <input type="hidden" name="product_id" value="{{ request('product_id') }}"> 
                        <input type="hidden" name="user_id" value="1"> 
                        <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>