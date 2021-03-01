<!DOCTYPE html>
<html lang="en">
<head>
    <title> Products </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
    <h3 class="text-center pb-4 font-weight-bold"> Products </h3>

    <table class="table">
        <thead class="thead-light">
            <th> Id </th>
            <th> Name </th>
            <th> Brand </th>
            <th> Price </th>
            <th> </th>
        </thead>

        <tbody>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id}} </td>
                <td> {{$product->name}} </td>
                <td> {{$product->brand->name}} </td>
                <td> {{$product->price}} </td>
                <td><a href="{{ url('checkout/' . $product->id) }}"><button type="button" class="btn btn-dark btn-sm">Buy</button></a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$products->links()}}
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
