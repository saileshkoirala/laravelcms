

@extends('layouts.app')

@section('content')
<div class="nav-side-menu">
    
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="{{ url('/home') }}">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class="fa fa-shopping-bag fa-lg"></i> Categories <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="{{ url('/viewcategories')}}"><i></i>viewCategories</a></li>
                    <li><a href="{{ url('/addcategories') }}"><i></i>Add Categories</a></li>
                    <li><a href="{{ url('/subcategories') }}"><i></i>Add Sub Categories</a></li>
                    <li><a href="{{ url('/brand') }}"><i></i>Add brand</a></li>
                    
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed active">
                  <a href="#"><i class="fa fa-shopping-basket fa-lg"></i> Products <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="{{ url('/addproduct') }}"><i></i>New</a></li>
                  <li><a href="{{ url('/viewproduct') }}"><i></i>View Products</a></li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-users  fa-lg"></i> Customer <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>Customer List</li>
                  <li>Orders</li>
                  <li>Transaction Logs</li>
                </ul>

                <li data-toggle="collapse" data-target="#appeareance" class="collapsed">
                  <a href="#"><i class="fa fa-file-image-o fa-lg"></i> Appeareance <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="appeareance">
                    <li><a href="{{ url('/logo') }}"><i></i>Change Logo</a></li>  
                    <li><a href="{{ url('/color') }}"><i></i>Change color</a></li>                   
                </ul>


            </ul>
     </div>
</div>
<div class="container pull-right">
   <div class="col-md-10 col-md-offset-1">
    @if(Session::has('flash_message'))
      <div class="alert alert-danger">
         {{ Session::get('flash_message') }}
      </div>            
    @endif
        <div class="table-responsive">
        		     
                          <form method="POST" id="h1" action="/insertprod" class="form-group">
                            {{ csrf_field() }}
                            
                            <table class="table table-striped">
                                <th></th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th></th>
                            @foreach($pro as $value)
                                <tr width="80%">
                                    
                                    <td><img src="{{ $value->image }}"  width="80"></td>  
                                    <td>{{ $value->prodname }} </td>  
                                    <td>{{ $value->prodesc }}</td>
                                    <td>{{ $value->price }}</td>

                                    <td width="20%">
                                      <a href="edit/{{ $value->id }}" class="btn btn-primary ">Edit</a>&nbsp;
                                      <a href="delete/{{ $value->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>    
                            @endforeach

                                    
                              
                                
                            </table>   
                        </form>                      
                     
                  
        </div> 
    </div>
</div>  
@endsection('content')