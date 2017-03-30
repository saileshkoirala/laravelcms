<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="css/style.css" rel="stylesheet">
      

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

 
    
</head>
<body >
   


<!--script-->


    <div class="container">
        <h3>Cart Items</h3>


        <table class="table-striped table-hover table-bordered" width="100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>	
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr >
                    <td>{{ $cartItem->prodname }}</td>
                    <td>{{ $cartItem->price }}</td>

                    <td>
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">


                    </td>
                  

                    <td>
                        <input type="submit" class="pull-right btn btn-primary btn-sm" value="Update" style="float:left;">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="pull-right btn btn-danger btn-sm" type="submit" value="Delete">
                         </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    
                    Total: Rs {{Cart::subtotal()}} 
                   
                </td>
                <td>Items: {{Cart::count()}}

                </td>
                <td class="btn btn-primary btn-sm"><a href="/" style="text-decoration:none; color:#ffffff;" >Continue Shopping</a></td>
                <td class="pull-right btn btn-success btn-sm">Checkout</td>

            </tr>
            </tbody>
        </table>

    </div>

</body>
</html>

