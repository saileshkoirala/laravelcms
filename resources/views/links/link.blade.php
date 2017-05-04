@extends('layouts.app')

@section('content')

<div class="nav-side-menu">
    
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
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

                <li data-toggle="collapse" data-target="#appeareance" class="collapsed">
                  <a href="#"><i class="fa fa-file-image-o fa-lg"></i> Appeareance <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="appeareance">
                    <li><a href="{{ url('/logo') }}"><i></i>Change Logo</a></li> 
                    <li><a href="{{ url('/color') }}"><i></i>Change color</a></li>                    
                </ul>
                <li data-toggle="collapse" data-target="#link" class="collapsed">
                  <a href="#"><i class="fa fa-external-link"></i> Links <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="link">
                    <li><a href="{{ url('/logo') }}"><i></i>Add Social Links</a></li> 
                                    
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
                           
                          <form method="POST" id="h1" action="/insertflink" class="form-group">
                            {{ csrf_field() }}
                            
                            <table class="table">
                                
                                    
                                    <tr >
                                        <td>
                                            <input type="text" name="f" placeholder="facebook" class="col-md-10 form-control input-sm" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="fa" class="col-md-10 form-control input-sm" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="submit" name="submit" value="Add"  class="btn btn-primary col-md-10 form-control input-sm"></td>
                                    </tr>

                                
                                
                            </table>
                            </form>  
                            <form method="POST" id="h1" action="/inserttlink" class="form-group">
                            {{ csrf_field() }}
                               <table class="table">
                                
                                    
                                    <tr >
                                        <td>
                                            <input type="text" name="f" placeholder="twitter" class="col-md-10 form-control input-sm" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="tw" class="col-md-10 form-control input-sm" required></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><input type="submit" name="submit" value="Add"  class="btn btn-primary col-md-10 form-control input-sm"></td>
                                    </tr>
                                   
                                
                                
                            </table>
                            </form>    
                            <h2>Existing Links</h2>
                              <table class="table">
                              <th>Facebook</th>
                              @foreach($flink as $value)
                               <tr >
                                    
                                    <td>
                                        {{$value->flink}}
                                        <a href="deleteface/{{ $value->id }}" class="btn btn-danger pull-right" >Delete</a>
                                    </td> 

                                    
                              </tr>
                               @endforeach
                              </table> 
                            <table class="table">
                            <th>Twitter</th>
                              @foreach($tlink as $value)
                               <tr >
                                    
                                    <td>
                                        {{$value->tlink}}
                                        <a href="deletetwit/{{ $value->id }}" class="btn btn-danger pull-right" >Delete</a>
                                    </td>    
                                   
                              </tr> 
                               @endforeach
                              </table> 
                                    <p style="color:red;">Please delete the existing links before adding new links</p>
                              </div>
        </div>               

    </div>
</div>



@endsection

