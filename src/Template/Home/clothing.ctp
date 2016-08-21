<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Fashionology PH</title>


    <!-- Core CSS -->

   <?php include LAYOUT_DIR . 'front-css.ctp'; ?>


    <!--scripts-->

   <?php include LAYOUT_DIR . 'front-script.ctp'; ?>


    <style>
        a:hover{
            text-decoration: none;
        }
    </style>

</head>
<body class="index-page " ng-controller="testController"  ng-app="SampleApp">

    <div class='prod-index-page'>
        <div>



           <header class="masthead" > <!--background: #232323;-->  
            <img src="/front/public/img/logo1.png" class="logo">

            <nav class="nav-a">
                <ul>
                   <a style="color:#fff;" href="/"><li>home </li></a>
                   <a style="color:#a8a8a8;" href="#"><li>clothing <i class="fa fa-angle-down" aria-hidden="true"></i></li></a>
                   <a style="color:#fff;" href="#"><li>mix n match</li></a>
                   <a  style="color:#fff;" href="#"><li>contact</li></a>
               </ul>
           </nav>

           <nav class="nav-b">
            <ul>
               <a style="color:#fff;" href="/user/login"><li>login</li></a>
               <a style="color:#fff;" href="/register" class="sign-up" ><li>sign up</li></a>
               <a style="color:#fff;" href="#"><li><i class="fa fa-search" aria-hidden="true"></i></li></a>
               <a style="color:#fff;" href="#"><li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li></a>

               <a class="count-cart" style="position:absolute;
               font-size:8px;
               padding: 4px 8px;
               margin-top: -18px;
               margin-left: 240px;
               border-radius:50%;
               background: #e74c3c;"
               ><li>{{cart_items_count}}</li></a>


           </ul>
       </nav>
   </header>






   <main class="container_14" style="border:none;"
   ng-app="SampleApp">

   <script src="/front/public/js/jquery17.js"></script>
   <script>

    jQuery(function($) {
      function fixDiv() {
        var $cache = $('#getFixed');
        if ($(window).scrollTop() > 374)
          $cache.css({
            'position': 'fixed',
            'top': '0px',
            'background':'#fff',
            'z-index':'1',
            'height':'54px'
        });
      else
          $cache.css({
            'position': 'relative',
            'top': 'auto',
            'border-bottom':'none'
        });
  }
  $(window).scroll(fixDiv);
  fixDiv();
});

</script>



<section class="top-header-disp" >
    <p class="header-p" style="opacity: 1;">Shop by Category</p>
</section>




<div class="content-group">

    <section class="group-filter-recent" >
        <p class="indicator-by">Filter By <i class="fa fa-filter" aria-hidden="true"></i></p>

        <div class="filter-group">
            <ul>
                <li><div class="filter-group-div">
                    <p class="label-tag">Gender</p>

                    <ul class="gender-group" style="margin-top: -34px;">
                        <a href="#"><li>M</li></a>
                        <a href="#"><li>F </li></a>
                        <a href="#"><li>All </li></a>
                    </ul>

                </div></li>
                <li><div class="filter-group-div" style="height:90px;">
                    <p class="label-tag">Color</p>

                    <ul class="color-group">
                        <li>
                           <div class="radio" data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
                            <label>
                                <input type="radio" name="optionsRadios"  checked="true" >

                            </label>
                        </div>
                    </li>
                    <li>

                       <div class="radio">
                        <label data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
                            <input type="radio" name="optionsRadios" checked="true">
                        </label>
                    </div>
                </li>

                <li>

                   <div class="radio">
                    <label data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
                        <input type="radio" name="optionsRadios" checked="true">

                    </label>
                </div>
            </li>


            <li>
               <div class="radio">
                <label data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
                    <input type="radio" name="optionsRadios" >

                </label>
            </div>
        </li>
        <li>

           <div class="radio">
            <label data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
                <input type="radio" name="optionsRadios" >

            </label>
        </div>
    </li>

    <li>

       <div class="radio">
        <label data-toggle="tooltip" data-placement="top" title="Pink" data-container="body">
            <input type="radio" name="optionsRadios" checked="true">

        </label>
    </div>
</li>
</ul>

</div></li>
<li><div class="filter-group-div">
    <p class="label-tag" style="margin-top:-30px;">Size</p>

    <ul class="size-group" style="height:10px;" > <!--size group-->
        <a><li>S</li></a>
        <a><li>M</li></a>
        <a><li>L</li></a>
        <a><li>X</li></a>
        <a><li>XXL</li></a>

    </ul>

</div></li>
<li><div class="filter-group-div">
    <p class="label-tag">Price</p></div></li>
</ul>
</div>

<div class="recent-group" >
    <p class="indicator-by" style="top:16px;width:190px;">Recent Products</p>

    <div class="recent-added-group">
        <ul class="recent-ul-added" >
            <li><div class="recent-each-item" style='width:96%;'>
                <img src="/front/public/img/a.jpg">
                <p class="product-recent-name">Product Name</p>
                <p class="product-recent-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper pulvinar erat eget auctor. Pellentesque facilisis sed massa nec gravida. Integer semper maximus metus at fringilla.</p>
            </div>
        </li>

        <li><div class="recent-each-item" style='width:96%;'>
            <img src="/front/public/img/a.jpg">
            <p class="product-recent-name">Product Name</p>
            <p class="product-recent-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper pulvinar erat eget auctor. Pellentesque facilisis sed massa nec gravida. Integer semper maximus metus at fringilla.</p>
        </div>
    </li>

    <li><div class="recent-each-item" style='width:96%;'>
        <img src="/front/public/img/a.jpg">
        <p class="product-recent-name">Product Name</p>
        <p class="product-recent-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper pulvinar erat eget auctor. Pellentesque facilisis sed massa nec gravida. Integer semper maximus metus at fringilla.</p>
    </div>
</li>



</ul>
</div>
</div>


</section>

<section class="group-products">
    <div class="top-bar-menu" id='getFixed'>


        <p class="found-count"><span style="color:#a60400;">1230</span> PRODUCTS FOUND.</p>


        <select class="form-control select-sort" style="width:110px;margin-top: -24px;
        margin-left: 20px;" >
        <option value="one">sort by</option>
        <option value="two">Popularity</option>
        <option value="three">Most liked</option>
        <option value="four">A-Z</option>
        <option value="five">Z-A</option>
    </select>


    <!---->
    <div class="item-page">


        <ul class="pagination pagination-info">
            <li><a href="javascript:void(0);"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp; prev</a></li>
            <li><a href="javascript:void(0);">1</a></li>
            <li><a href="javascript:void(0);">2</a></li>
            <li class="active"><a href="javascript:void(0);">3</a></li>
            <li><a href="javascript:void(0);">4</a></li>
            <li><a href="javascript:void(0);">5</a></li>
            <li><a href="javascript:void(0);">next &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>



    </div>


</div>

<div class="product-list">
    <ul class="product-ul-list" ng-app='routerApp'>

        <li ng-repeat="item in items">

           <a  href='/clothing/item?item_id={{item.item.item_id}}'><div class="product-div" >

            <figure class="prod-figure"><img src="{{item.img_path}}"></figure>
            <p class="product-desc">{{item.item.item_name}}</p>
            <p class="product-price">{{item.item.item_srp}}.00</p>
            <div class="group-menu" ng-app="app">
                <ul class="group-menu-ul" bs-popover>
                    <a href ng:click="addtowish()" data-toggle="tooltip" data-placement="top" title="Add to Wishlist" data-container="body"
                    tooltip ><li class="wlist-add"
                    ><i class="fa fa-heart-o" aria-hidden="true"></i>
                </li></a>
                <a  href  ng:click="addItem(item.item.item_id)"  data-toggle="tooltip" data-placement="top" title="Add to Cart" data-container="body"><li class="cart-add"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
</li></a>

</ul>
</div>



</section>

</div>

<section >
</section>




</main>






</div>




<div class='sidebar' >

    <div class='sidebar-content' >



        <div class='sidebar-content-b' >

            <div class='sidebar-lbl'>
                <p>My Cart</p>
            </div>

            <div class='sidebar-content-item'>

                <ul>
                    <li ng-repeat='item in itemis'>
                        <div class='each-item'>
                            <div class='each-item-sub'
                            style='width:295px;'>

                            <div class='close-each'>
                              <p><i class="fa fa-times-circle" aria-hidden="true"></i></p>
                          </div>


                          <div class='each-item-final'>
                            <img src='{{item.img_path}}' />

                            <div class='cart-detail'>
                                <p class='cart-name'>{{item.item.item_name}}</p>
                                <p class='cart-price'>{{item.item.item_srp}}.00</p>
                                <p class='cart-price'><b>QTY:</b>10</p>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class='sidebar-content-c'>
    <div class='sub-total'>
        <p>SUBTOTAL: <span>PHP 120.00</span></p>
    </div>

    <div class='group-chck'>
        <button type='submit' class='view-cart'>VIEW CART</button>
    </div>


    <div class='group-chck'>
        <button ng-click='checkout()'  class='view-cart checkout'>CHECKOUT</button>
    </div>

</div>

</div>

</div>
</div>
</body>





<!--   Core JS Files   -->
<script src="/front/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/front/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/front/assets/js/material.min.js"></script>


<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="/front/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="/front/assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">

    $().ready(function(){
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>





    </html>

