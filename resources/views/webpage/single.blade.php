@extends('layouts.front')

 @section('front_content1')


        <div class="container"> 
         @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                  </div>
                @endif
        
        <div class=" single_top">
          <div class="single_grid">
                <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                            
                                @foreach($prod as $value)
                                   
                                    <img class="etalage_thumb_image" src="{{ URL::asset( $value->image ) }}" class="img-responsive" width="50%" />
                            
                                </a>
                            </li>
                           
                        </ul>
                         <div class="clearfix"> </div>      
                  </div> 
                  <div class="desc1 span_3_of_2">
                  
                    
                    <h4>{{ $value->prodname }}</h4>
                <div class="cart-b">
                    <div class="left-n ">Rs.{{ $value->price }}</div>
                    <a class="now-get get-cart-in" href="{{ route('cart.edit',$value->id) }}">ADD TO CART</a> 
                    <div class="clearfix"></div>
                 </div>
                 <h6>100 items in stock</h6>
                <p>{{ $value->prodesc }}</p>
                <div class="share">
                            <h5>Share Product :</h5>
                            <ul class="share_nav">
                                <li><a href="#"><img src="{{ URL::asset('images/facebook.png') }}" title="facebook"></a></li>
                                <li><a href="#"><img src="{{ URL::asset('images/twitter.png') }}" title="Twiiter"></a></li>
                                <li><a href="#"><img src="{{ URL::asset('images/rss.png') }}" title="Rss"></a></li>
                                <li><a href="#"><img src="{{ URL::asset('images/gpluse.png') }}" title="Google+"></a></li>
                            </ul>
                        </div>
                        
                            @endforeach
                </div>   
                <div class="clearfix"> </div>
               </div>
        <ul id="flexiselDemo1">
               @foreach($prod as $value)

                 <li><img src=src="{{ URL::asset( $value->image ) }}" height="80" /><div class="grid-flex"><a href="#">{{ $value->prodname }}</a><p>Rs {{ $value->price }}</p></div></li>
               @endforeach   
           
        </ul>
        <script type="text/javascript">
         $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>

                   <!-- <div class="toogle">
                        <h3 class="m_3">Product Details</h3>
                        @foreach($prod as $value)
                         <p class="m_text">{{ $value->prodesc }}</p>
                        @endforeach
                     </div> -->
               </div>
   
   
@endsection

@section('front_content')

<!---->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6>NEWS-LETTER</h6>
                    <div class="sub-left-right">
                      
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
                        @foreach($pro as $value)
                        <li><a href="#">{{ $value->catname }}</a></li>
                        @endforeach
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
                       @foreach($brand as $value)
                        <li><a href="#">{{ $value->brandname }}</a></li>
                       @endforeach 
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
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    
@endsection