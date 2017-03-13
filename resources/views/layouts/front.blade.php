<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />

<!--theme-style-->
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>


<!--script-->
<style type="text/css">

    .top-header{
    
    padding: 0.7em 0;
}
</style>
</head>
<body> 

	<!--header-->

	<div class="header">
    @foreach($col as $col1)    
		<div style="background: {{ ($col1->colname) }}" class="top-header">
    @endforeach
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
				 
					<div class="down-top top-down">
						  <select class="in-drop">
						  
						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div>
					 <!---->
					<div class="clearfix"> </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
                  @foreach($img as $limg)
					<div class="logo">
                  
						<a href="index.html"><img src="{{ ($limg->image) }}" alt=" " height="50" width="100" /></a>
                          
					</div>
                  @endforeach
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.html"><span> </span>LOGIN</a></li> |
								<li ><a href="register.html">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	@yield('front_content1')
	
               <div class="sub-cate">
                <div class=" top-nav rsidebar span_1_of_left">
                 <h3 class="cate">CATEGORIES</h3>
                    @foreach($pro as $value)  
                    <ul class="menu">
                        <li class="item1"><a href="">{{ $value->catname }}<img class="arrow-img" src="{{ URL::asset('images/arrow1.png') }}" alt=""/> </a>
                            <ul class="cute">
                                @foreach($sub as $value1) 
                                      @if($value1->sub_id == $value->id)  
                                        <li class="subitem1"><a href="{{ url('product') }}">{{ $value1->subcatname }}</a></li>  
                                             @foreach($prod as $value2)
                                                @if($value2->p_id == $value1->id)
                                                    <li class="subitem1"><a href="{{ url('single') }}" style="font-size:11px; color:#696969;">{{ $value2->prodname }}</a></li> 
                                                @endif 
                                             @endforeach
                                      @endif
                                @endforeach   
                            </ul>   
                        </li>
                    </ul> 
                   @endforeach 
                </div>
	<!---->
@yield('front_content')


	
</body>
</html>
