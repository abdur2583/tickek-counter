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
                <div class="header"><h4>Add User</h4></div>
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('message') }}
                    </div>
                    
                @endif

                <div class="form">
                    <form class="form" action="{{ route('store_user') }}" method="POST">
                        @csrf
                        <div>
                            <label class="form-label form" for="">User Name</label>
                            @error('user_name')
                                <p>{{ $message }}</p>
                            @enderror
                            <input class="form-control" type="text" name="user_name">
                        </div>
                        <div>
                            <label class="form-label" for="">Email</label>
                            @error('email')
                            {{ $message }}
                            @enderror
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div> 
                        <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>