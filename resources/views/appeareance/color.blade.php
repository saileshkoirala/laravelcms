@extends('layouts.app')

@section('content')
<div class="nav-side-menu">
    <!--<div class="brand">Menu</div>-->
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
                    
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
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

                <li data-toggle="collapse" data-target="#appeareance" class="collapsed active">
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
        <div class="table-responsive">
         @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
         @endif
                           
                        <form method="POST" id="h1" action="/updatecolor" class="form-group">
                            {{ csrf_field() }}
                            
                            <table class="table">
                                
                                    
                                   
                                    <tr>
                                        <td>Color<input type="text" name="colorname" class="col-md-10 form-control input-sm jscolor {hash:true}" onchange="update(this.jscolor)" value="cc66ff" required></td>
                                    </tr>
                                    <tr>
                                  
                                        <td><input type="submit" name="submit" value="Update"  class="btn btn-primary col-md-10 form-control input-sm"></td>
                                       
                                    </tr>
                                    <p id="rect" style="border:1px solid gray; width:161px; height:100px;">
                                
                                
                            </table>
                        </form>                      
                     
                   
        </div>               

    </div>
</div>  
<script src="{{ URL::asset('js/jscolor.js') }}"></script>
 <script type="text/javascript">
    function update(jscolor) {
        // 'jscolor' instance can be used as a string
        document.getElementById('rect').style.backgroundColor = '#' + jscolor;
    }
</script>

@endsection('content')