<!DOCTYPE html>
<html lang="en">
<head>
    <title> Products </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center pb-4 font-weight-bold"> Order </h3>
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <form method="post" action="">

        @csrf

        <div class="row">
            <div class="col">
                <p><b>Product Name:</b> {{$product->name}}</p>
            </div>
            <div class="col">
                <p><b>Brand:</b> {{$product->brand->name}}</p>
            </div>
            <div class="col">
                <p><b>Price:</b> {{$product->price}}</p>
            </div>
        </div>
        <div class="form-group">
            <label for="client_name">Client Name:</label>
            <input type="text" class="form-control {{ $errors->has('client_name') ? 'error' : '' }}" name="client_name" id="client_name">

            <!-- Error -->
            @if ($errors->has('client_name'))
                <div class="error">
                    {{ $errors->first('client_name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="client_address">Client Address:</label>
            <input type="text" class="form-control {{ $errors->has('client_address') ? 'error' : '' }}" name="client_address"
                   id="client_address">

            @if ($errors->has('client_address'))
                <div class="error">
                    {{ $errors->first('client_address') }}
                </div>
            @endif
        </div>

        <fieldset class="form-group row">
            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Shipping:</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="shipping" id="shipping1" value="0" checked>
                    <label class="form-check-label" for="shipping1">
                        Free Standard Shipping
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="shipping" id="shipping2" value="10">
                    <label class="form-check-label" for="shipping2">
                        Express Shipping - 10 EUR
                    </label>
                </div>
            </div>
        </fieldset>

        <input type="submit" name="order" value="SUBMIT ORDER" class="btn btn-dark btn-block">
    </form>
</div>
</body>
</html>
