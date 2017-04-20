@extends('layouts.front')
 @section('front_content')


                <!--initiate accordion-->

        <script type="text/javascript">
            $(function() {
                var menu_ul = $('.menu > li > ul'),
                       menu_a  = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function(e) {
                    e.preventDefault();
                    if(!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true,true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true,true).slideUp('normal');
                    }
                });
            
            });
        </script>


                    <div class=" chain-grid menu-chain">
                        <a href="single.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>                     
                        <div class="grid-chain-bottom chain-watch">
                            <span class="actual dolor-left-grid">300$</span>
                            <span class="reducedfrom">500$</span>  
                            <h6><a href="single.html">Lorem ipsum dolor</a></h6>                                                                            
                        </div>
                    </div>
                     <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>    
            </div>
            
                <div class="clearfix"> </div>  

        </div>

    
    <!---->
    <div class="footer">
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
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        
    </div>
@endsection
