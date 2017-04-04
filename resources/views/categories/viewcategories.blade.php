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

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
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


            </ul>
     </div>
</div>
        
<div class="container pull-right">
   <div class="col-md-10 col-md-offset-1">
        <div class="table-responsive" >
                   @if(Session::has('flash_message'))
                    <div class="alert alert-danger">
                        {{ Session::get('flash_message') }}
                    </div>
                  @endif
                    <center>
                        <form id="h2">
                             <table class="table table-striped">
                                    <br/><tr>
                                        
                                        <th>categories</th>
                                        <th>sub categories</th>
                                        
                                        
                                    </tr>
                                   @foreach($cat as $value)
                                    <tr width="80%">
                                        
                                        <td width="30%" >{{ $value->catname }}   
                                          <a href="edit/{{ $value->id }}"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                          <a href="deletecat/{{ $value->id }}"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>  
                                        @foreach($scat as $value1)
                                            @if($value1->sub_id == $value->id)
                                              <td class="list-group-item">{{ $value1->subcatname}}
                                              <a href="edit/{{ $value1->id }}"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                              <a href="deletescat/{{ $value1->id }}"><span class="glyphicon glyphicon-trash"></span></a>
                                              </td>
                                                    
                                                   @foreach($bname as $value2)
                                                      @if($value2->b_id == $value1->id)
                                                        <td class="list-group-item" style="background-color:#F6F4F4; padding-left:2em; ">{{ $value2->brandname}}
                                                          <a href="edit/{{ $value2->id }}"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;
                                                          <a href="deletescat/{{ $value2->id }}"><span class="glyphicon glyphicon-trash"></span></a>
                                                        </td>        
                                                      @endif        
                                                   @endforeach  
                                            @endif
                                         @endforeach  


                                         
                                     
                                     </tr>

                                 @endforeach
                            </table>
                        </form>
                          
                     </center>     
              </div>     
                       

        </div>
</div>

@endsection

