@extends('layouts.app')

@section('content')
<div class="container pull-left">		
    <div class="row">
        <div class="col-md-3 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading"> <span class="glyphicon glyphicon-home"></span> Dashboard</div>
               
                <div class="panel-heading"> <span class="glyphicon glyphicon-shopping-cart"></span> Inventory</div>
                
                <div class="panel-body">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Categories<span class="caret"></span>
                            </a>
                             <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/viewcategories')}}"><i></i>viewCategories</a></li>
                                <li><a href="{{ url('/addcategories') }}"><i></i>Add Categories</a></li>
                            </ul>
                             
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Products<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i></i>New</a></li>
                                <li><a href="#"><i></i>Products</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Reviews<span class="caret"></span>
                            </a>
                        </li> 
                           
                </div>      

                <div class="panel-heading"><span class="glyphicon glyphicon-user">Customer</span></div>

                <div class="panel-body">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Customer List<span class="caret"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Orders<span class="caret"></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Transcation Logs<span class="caret"></span>
                            </a> 
                        </li>  
                 
                </div>
                      
            </div>
            
        </div>
        <div class="table-responsive">
        		     
                          <form method="POST" id="h1" action="/insertprod" class="form-group">
                            {{ csrf_field() }}
                            
                            <table class="table">
                                
                            @foreach($pro as $value)
                                <tr width="80%">
                                    
                                    <td width="60%"><img src="{{ $value->image }}"  height="100" width="100"></td>  
                                    <td>
                                    <a href="edit/{{ $value->id }}" class="btn btn-primary ">Edit</a>&nbsp;
                                    <a href="delete/{{ $value->ID }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>  
                             @endforeach
                                    
                                
                                
                            </table>
                        </form>                      
                     
                   
        </div> 
        </div>
</div>  
@endsection('content')