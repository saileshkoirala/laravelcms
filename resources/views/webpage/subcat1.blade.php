@extends('layouts.front')

 @section('front_content1')

    <!-- start content -->
    <div class="container">
        <div class="women-product">
                <div class=" w_content">
                    <div class="women">
                     @foreach($brand as $value)
                        @foreach($prod as $value1)
                           @if($value1->p_id == $value->id)  
                            <a href="#"><h4>{{ $value->brandname }}<span></span></h4></a>
                           @endif 
                        @endforeach
                     @endforeach       
                        <ul class="w_nav">
                            <li>Sort : </li>
                            <li><a class="active" href="#">popular</a></li> |
                            <li><a href="#">new </a></li> |
                            <li><a href="#">discount</a></li> |
                            <li><a href="#">price: Low High </a></li> 
                         <div class="clearfix"> </div>  
                         </ul>
                         <div class="clearfix"> </div>  
                    </div>
                </div>
              <div class="grid-product">
               @foreach($brand as $value)
                 @foreach($prod as $value1)
                 
                      @if($value1->p_id == $value->id)                  
                       <div class="product-grid">
                            <div class="content_box"><a href="single.html">
                                <div class="left-grid-view">
                                     <img src="{{ URL::asset($value1->image) }}" class="img-responsive watch-right"   width="40"  alt=""/>
                                        <div class="mask">
                                            <div class="info">Quick View</div>
                                        </div>
                                      </a>


                            </div>
                                    <h4><a href="/single/{{ $value1->id }}"> {{ $value1->prodname }}</a></h4>
                                        Rs. {{ $value1->price }}
                                     <p></p>
                                     
                       </div>  
                          </div>
                       @endif
                    @endforeach
                @endforeach
                 </div> 
    </div>
   
   
@endsection

@section('front_content')

<!---->
   <!-- <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6>NEWS-LETTER</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                            <input type="submit" value="SUBSCRIBE" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latter-right">
                    <p>FOLLOW US</p>
                    <ul class="face-in-to">
                        <li><a href="#"><span> </span></a></li>
                        <li><a href="#"><span class="facebook-in"> </span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-cate">
                    <h6>CATEGORIES</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li ><a href="#">Dignissim neque</a></li>
                        <li ><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                        <li ><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li ><a href="#">Eget nisi laoreet</a></li>
                        <li ><a href="#">Faciisis ornare</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate bottom-grid-cat">
                    <h6>FEATURE PROJECTS</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li ><a href="#">Dignissim neque</a></li>
                        <li ><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate">
                    <h6>TOP BRANDS</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li ><a href="#">Dignissim neque</a></li>
                        <li ><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                        <li ><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li ><a href="#">Eget nisi laoreet</a></li>
                        <li ><a href="#">Faciisis ornare</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate cate-bottom">
                    <h6>OUR ADDERSS</h6>
                    <ul>
                        <li>Aliquam metus  dui. </li>
                        <li>orci, ornareidquet</li>
                        <li> ut,DUI.</li>
                        <li >nisi, dignissim</li>
                        <li >gravida at.</li>
                        <li class="phone">PH : 6985792466</li>
                        <li class="temp"> <p class="footer-class">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p></li>
                    </ul>
                </div>-->
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    
@endsection