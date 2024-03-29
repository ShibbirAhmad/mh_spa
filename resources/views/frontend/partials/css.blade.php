<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/js/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/stylesheet.css')}}" />
{{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}" /> --}}
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.transitions.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/stylesheet-skin3.css')}}"/>
<link href='//fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/scrol.css')}}"/>
<link rel="stylesheet" href="{{ asset('admin/css/sweetalert2.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/customize.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/header.css')}}"/>


{{-- <script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.1.min.js')}}"></script> --}}
<script src="{{asset('admin/js/objectToFormData.js')}}"></script>


{{-- <script type="text/javascript" src="{{asset('frontend/js/custome.js')}}"></script> --}}
<script src="{{ asset('admin/js/sweetalert2.all.js') }}"></script>


<style>
    
    
ul, ol {
    margin-top: 0;
    margin-bottom: 0px;
}

.tab-content {
    display: block !important;

}

.list-group .active {
    background: #FF4D03 !important;
}

.caption {
    text-align: center;
}

.product {
    height: 100%;

    border: 1px solid #ddd;
    margin-bottom: 20px;
}

.product-content {
    margin-top: 7px;
}

.single-product.mt-2 {
    margin-top: 20px;
}

span.outstcok {
    background: yellow;
    color: #000;
}

.product-side-category {
    margin-left: 8px;
    margin-top: 7px;
}

.toasted.toasted-primary.success {
    width: 400px;
    height: 55px;
    font-size: 18px;
}

.toasted.toasted-primary.error {
    width: 400px;
    height: 55px;
    font-size: 18px;
    font-weight: bolder;
}

.image img {
    max-width: 200px;
    max-height: 200px;
}

table img.img-thumbnail {
    width: 50px;
    height: 50px;
}

.product-content .product-thumb {
    border: 2px solid #DDD !important;
    margin-bottom: 12px;
}

.quantityUpdat {
    font-size: 20px;
    cursor: pointer;
}

.cart-empy {
    text-align: center;
    padding: 0;
    margin: 0;
    border: 1px solid #eeeeee;
}

.cart-empy p {
    margin-top: 0px;
    font-size: 20px;
}

.cart-empy img {
    margin-bottom: 0px;
    margin-top: 0;
}

.custom-box {
   
    width: 100%;
    height: auto !important;
    background: #fff !important;
    padding: 25px 40px !important;
    margin: auto;
    border-radius: 10px !important;
    box-shadow: 3px 3px 3px #ddd !important;

}



.custom-box .title {
    text-align: center;
    text-transform: uppercase;
}

.is-invalid {
    border: 1px solid red;
}

.invalid-feedback {
    color: red;
}

.cart-total {
    background: #fff;
    width: 100%;
    padding: 5px;
    font-size: 20px;
}

span.badge-danger {
    background: red;
}

span.badge-success {
    background: #FF4D03;
}

span.badge-warning {
    background: #f39c12;
    color: #000 !important;
}

span.badge-primary {
    background: #3c8dbc;
}




.related_products .sub-title {
    text-align: center;
    border-bottom: 2px solid #ddd;
    margin-bottom: 45px;
}

.search-content {
    position: absolute;
    z-index: 1000;
    top: 55%;
    width: 520px;
    max-height: 300px;
    overflow-y: scroll;
}

.search-content li:hover {

    background: #FF4D03;
    color: #fff;

}

.search-content li .search-router-link:hover {

    color: #fff;

}

.search-content li .search-router-link {

    color: #000;

}



@media only screen and (max-width: 600px) {

    .container{
        margin: 5px;
    }
    .search-content {
        text-align: left;
    }
}

.product-image-viewe {
    width: 85% ;
    margin-bottom: 60px !important;

}

img.responsive-image.preview-box {
    width: 85%;
    margin-bottom: 25px !important;
}

/* starte the custome nav css*/



header.main-menu {
    position: relative;
    left: 0;
    top: 0;


}

nav.menu {
    display: flex;
    width: 100%;
}

ul.nav-list {
    display: flex;
    width: 100%;
    height: 40px;
    width: 100%;
    background-color: #FF4D03;

}

ul.nav-list li {
    line-height: 2.5rem;
    position: relative;
    text-align: center;
    top: 9px;
    left: 9rem;


}

ul.nav-list li .nav-item {
    color: #fff;
    padding: 0 12px;
}

.menu-icons {
    color: #FF4D03;
    font-size: 4rem;
    position: absolute;
    top: -40px;
    z-index: 1500;
    right: 2rem;
    transform: translateY(50%);
    display: none;
}

.sub-menu {
    background-color: #fff;
    color: #fff;
    top: 29px;
    left: 12px;
    width: 170px;
    z-index: 100000000;
    position: absolute;
    border-top: 3px solid #FF4D03;
    font-size: 12px;
    text-align: left;
    display: none;
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-left: 1px solid #ddd;


}

.sub-menu .sub-menu {

    top: 0px;
    left: 162px;
    border-top: none;
    border-top: 2px solid #FF4D03
}

.sub-menu::before {
    content: "";
    position: absolute;
    top: -16px;
    left: 0;
    border: 7px solid transparent;
    border-bottom-color: #fff;
}

.sub-menu .sub-menu::before {

    top: -4px;
    left: -14px;
    border: 7px solid transparent;
    border-right-color: #fff;
}

.nav-list li:hover>.sub-menu {
    display: block;
}

ul.sub-menu li {
    text-align: left;
    padding: 5px 0 0;
    border-bottom: 1px solid #ddd;
    background: #fff;
    margin-left: 5px;
    left: 0px;
}

.nav-router {
    color: #000;
}

/* responsive menu */


@media only screen and (max-width: 850px) {


    .nav-list {
        width: 100% !important;
        height: 100vh !important;
        width: 100% !important;
        background-color: #FF4D03 !important;
        flex-direction: column !important;
        display: none !important;


    }

    .nav-list li {
        font-size: 16px;
        left: 0px !important;
        border-bottom: 1px solid #fff;
        color: #000000;
    }

    .nav-list li .nav-router {
        text-align: left !important;
        color: #000000;
    }

    .nav-list li:hover>.sub-menu {
        display: none;
    }

    .menu-icons {
        display: block;

        top: -203px;
    }

    body {
        overflow-x: hidden;
    }
}

.product-header {
    position: relative;
    padding: 0px;
    margin: 0px 0px 20px 0px;
    line-height: normal;
    font-size: 20px;
    color: #000000;
    border-bottom: 2px solid #ddd;
    padding-bottom: 3px;
}

nav#top li a {
    color: #fff !important;
}

#header .htop {
    background-color: #FF4D03;
}

.left-top {
    background-color: #FF4D03!important;
}

#header .button-search {
    width: 69px !important;

    color: #fff;
    background: #FF4D03;
}

/* 
start left sideb bar css */
ul.side-nav {
    width: 267px;
    height: 450px;
    list-style: none;
    background: #c2eaaa;
    box-shadow: 3px 4px 7px 1px #ddd;
    border-radius: 4px
}

ul.side-nav li {
    line-height: 4rem;
    border-bottom: 1px solid #f6f6f6;

    position: relative;
    left: -23px;
    vertical-align: middle;
    cursor: pointer;
    transition: 3ms;
}

ul.side-nav .nav-main-item {
    color: #000;
    font-size: 14px;
    margin-left: 14px;
    transition: 3ms;

}

.side-nav li:hover {
    background-color: #fff;
}

.nav-main-item:hover {
    color: #FF4D03;


}

ul.left-sub-menu {
    position: fixed;
    box-shadow: 3px 4px 7px 1px #ddd;
    background: #c2eaaa;
    width: 195px;
    z-index: 100;
    list-style: none;
    top: 120px;
    max-height: 420px;
    display: none;
    left: 350px;
    overflow-y: scroll;
    overflow-x: hidden;
    height: 420px;
}

ul.left-sub-menu .last-sider-bar {
    border: 1px solid #ddd;
    border-left: none;
    border-top: none;
    left: 52rem;
    position: fixed;
    background: #c2eaaa;
    list-style: none;
    top: 130px;
    max-height: 420px;
    display: none;

    overflow-y: scroll;
    overflow-x: hidden;
    height: 420px;
    width: 195px;
}

ul.left-sub-menu .last-sider-bar li {
    border: none;
    left: -15px;
}

ul.side-nav li:hover>.left-sub-menu {
    display: block;
}

.left-sub-menu li:hover>.last-sider-bar {
    display: block;
}

.show-sub {
    display: none;
    float: right;
    margin-top: 17px
}

/* start responsieve side menu css  */


@media only screen and (min-width: 950px) {
    .width-20 {
        width: 20% !important;
    }
}
@media only screen and (max-width: 950px) {


    ul.side-nav {
        left: 0;
        width: 100%;
        position: absolute;


        z-index: 100;
        display: none;
        top: -200px;
    }

    ul.left-sub-menu {
        display: none;
        left: 0;
        width: 100%;
        position: absolute;
        left: 7px;
        top: 44px;
        border: 1px solid #eee;
    }

    .left-top {
        display: none !important;
    }

    #header #logo a img {
        display: inline-block;
        position: absolute;
        top: -84px;
        left: 8rem;
        background: #fff;
        padding: 0px;
        height: 53px;
    }

    #header #top-links>ul>li>a {

        padding: 10px 10px;
    }

    i.fa-align-justify {
        font-size: 35px;
        position: absolute;
        left: 28px;
        top: 12px;
        color: #fff;
    }

    .show-sub {
        display: block;
    }

    ul.side-nav li:hover>.left-sub-menu {
        display: none;
        position: absolute;
    }

    .left-sub-menu li:hover>.last-sider-bar {
        display: none;
    }
    .chat-icon {
       
        left: 80% !important;
        border: none !important;
        
    }
.user-content{
    display: flex;
   
}
.user-side-bar{
    display: flex;
    flex-direction: column;
    width: 200px;
}
.d-sm-none{
    display: none;
}
.prodict-card-body img {
    width: 150px !important;
    height: 150px !important;
   padding: 18px 20px !important;

    
}



}

.menu-show {
    display: block;
}

.category_icon_image {
    max-width: 20px;
    max-height: 20px;
}

.pull-right {
    background: #FF4D03 !important;
} 

.chat-icon {
    float: right !important;
    position: fixed;
    text-align: right;
    left: 93%;
    z-index: 10000;
    top: 283px;
    vertical-align: middle;
  
    width: 75px;
    height: 120px;
    text-align: center;
    
    background: transparent;
    padding: 30px 0px;
    border: 2px solid #FF4D03
}

.product_carousel.flash_sale h3 {
    font-weight: bold;
    text-transform: uppercase;
    color: #FF4D03;
   
}
.flash_sale{
    border: 5px solid #ff4d03;
    margin-bottom: 40px;
    margin-top: 40px;
    text-align: center;
    padding: 0px;
    box-shadow: 3px 3px 6px #ddd;
    background-color: #fff;

}
.wrapper-wide{
    background-color: #F7F8FA;
}
.container{
    padding-left: 0;
    padding-right: 0;
}
.product-card {
    width: 100%;
    height: 290px; 
    background: #fff;
    text-align: center;
    margin-bottom: 10px;
    box-shadow: 2px 2px 2px #ddd;
    border-radius: 6px;
}
.best-selling .product-card img{
    border-radius: 40px;;
}

.product-card:hover>.product-card-footer{
    display: block;
    margin-top: -45px;
    animation: fly 1s ease 1;   
}

@keyframes fly {
    0% {
      transform: translateY(0%);
    }
  
    50% {
      transform: translateY(100%);
    }
  
    100% {
      transform: translateY(0);
    }
  }

.prodict-card-body img {
    padding: 10px;
    width: 200px;
    height: 200px;
    transition: .3s;
}
.prodict-card-body img:hover {
   transform: scale(1.5);
}

.product-detail h4 {
    font-size: 12px;
    padding: 5px;
}
.product-card-footer {
    display: none;
    background: #ff4d03;
    padding: 5px;
    transition: .5s;
}
.detls_prodcut{
    color:#fff ;
    background:transparent;
}
.best-selling .product-card {
    width: 220px;
}
.poster img{
    max-width: 165px;
    max-height: 165px;
     border: 1px solid #eee;
     border-radius: 5px;
}
.product-link{
    color: #000;
    transition: .3s;
}
.product-link:hover {
    color: #ff4d03;
}
.category-heading{
    display: inline;
}
.category-heading {
    display: inline;
}
.s-category{
    display: inline;
    float: right;
}

.sub-category-name:hover {
    color: #FF4D03;
   
}
.c-v-all {
    background: #000;
    color: #fff;
    padding: 5px 18px;
    width: 22px;
    height: 38px;
    display: inline;
    border-radius: 4px;
    transition: .5s;
}
.c-v-all:hover {
   
    border-radius:0px;
    color: #fff;
    background: #FF4D03;

}

.c-product {
    margin-top: 10px;
}
.c-product-header {
    margin-bottom: 8px;
    padding: 6px 0px;
    border-bottom: 1px solid #ddd;
}
.single-product-box {
    background: #fff;
    padding: 15px 25px;
   box-shadow: 3px 3px 3px #ddd;
   border-radius: 5px;
   height: auto;
}
.product-description{
      background: #fff;
      padding: 15px 25px;
      box-shadow: 3px 3px 3px #ddd;
      border-radius: 5px;
      height: auto;
      margin-top: 20px;
}
.realted-producs{
    margin-top: 20px;
}
.realted-producs h3{
    margin-left: 15px;
}
.bg-white{
    background: #fff;
}
.shadow{
     box-shadow: 3px 3px 3px #ddd;
}
.c-box{
    padding: 20px 25px;
}
.cart-dropdown {
    position: absolute;
    width: 350px;
    right: 0;
    height: 400px;
  
    z-index: 999;
}
.cart {
    position: fixed;
    z-index: 999999999999999999;
    right: 0;
    background: #fff;
    bottom: 0;
    height: 100%;
    width: 0px;
    transition:.5s;
}
.colapse-cart{
    width: 400px;
}
.cart-header {
    padding: 15px 15px;
    background: #000;
   text-transform: uppercase;
    font-weight: bold;
    color: #FF4D03;
}
.cart-body {
    padding: 15px 15px;
    max-height: 500px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.placebtn{
    text-transform: uppercase;
    color: #FF4D03;
    font-size: 18px;
}
.placebtn:hover{
    color: #FF4D03;
}
.cart-footer{
    position:absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #000000;
}
.cart-fiiter{
    padding: 15px 15px ;
}
 #exitcart {
   
    cursor: pointer;
}

.cart-open {
    position: fixed;
    right: 0;
    z-index: 999;

    top: 50%;

    width: 80px;
   background: #FF4D03;
    text-align: center;
    height: 120px;
    cursor: pointer;
}
.cart-open i {
    font-size: 25px;
}
.cart-item-total {
    color: #fff;
}
.user-side-bar {
    padding: 10px 10px;
    margin-bottom: 30px;
}
.profile.clearfix {
    text-align: center;
}
.order-histrory {
    padding: 10px 20px;
    margin-left: 25px;
}   
.overlaw-offer {
  
    opacity: 0;
    position: absolute;
    top: 49%;
    left: 49%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background: #FF4D03;
    transition:  .5s;
    width: 165px;
    height: 165px;
    
}
.overlaw-offer:hover{
       
 width: 100px;
 opacity: .7;
}
.overlaw-offer-height:hover{
  height: 80px;
   width: 165px;
}
.sub-category-name {
    border-bottom: 1px solid #ff4d03;
    margin-right: 8px;
    background: #fff;
    padding: 5px 4px;
    font-size: 13px;
    font-weight: bold;
}

.product-details-tabe {
    background: #fff;
    margin-top: 25px;
    padding: px;
    box-shadow: 3px 3px 3px #ddd;
    border-radius: 10px;
}
ul.details-tab-menu-list {
    width: 100%;
    display: flex;
    text-transform: uppercase;
    background: #ddd;
    border-radius: 2px;
}

.details-tab-menu-item {
    padding: 10px;
    color: #000;
    font-weight: bolder;
   
    cursor: pointer;
}


.tab-menu-item-active {
    border-bottom: 4px solid #ff4d03;
}
.product-tab-content {
    padding: 15px 15px;
    min-height: 250px;
}
.product-details{
    display: none;
}
.how-to-buy{
    display: none;
}
.block{
    display: block;
}
li.h-b-li {
    list-style-type: square;
    padding: 2px;
 
}
.product-thumb .image:hover {
    transform: scaleX(-1);
}

.poster .row{
 background: #fff;
 padding: 12px 12px;
 box-shadow: 0 0 10px 5px #ddd;
 border-radius: 10px
}

  



@media screen and (max-width: 400px) {

    /* in small view device quick view button won't display */

    .btnQuick{
         
         display: none ;
    }

    
    /* frontend common responsive issue is start from here  */

    img.responsive-image.preview-box 
    {
     width: 85%;
     margin-left: 20px;
    }


    /* landing responsive code is start from here  */

    .container{
      margin:5px;
    }
    .banner_container{
      margin-left:-13px;
    }
    .banner_heading{
      margin-left: 3px;
    }
   .poster img {
      max-width: 120px;
      max-height: 130px;
      border: 1px solid #eee;
      border-radius: 5px;
    }
  
   
    .top-product-card-small {
      height: 202px;
      width: 200px;
    }
  
    .top-product-card-small img {
      width: 160px !important ;
      height: 160px !important;
    }
  
    .top-product-card-small p {
      font-size: 13px;
      line-height: 2px;
    }
  
    .top-product-card-small h4 {
      font-size: 13px;
      padding-bottom: 3px;
      margin-top: -5px;
    }


    .c-product-header{

        display:none ;
    }
 
    
    .product-card {
      width: 184px;
      height: auto;
      background: #fff;
      border: 1px solid #ddd;
      text-align: center;
      padding-top: 5px;
      margin-bottom: 15px;
    }


    .product-card:hover>.product-card-footer{
        display: none;
    }
  
    .product-card p {
      font-size: 13px;
      margin-top: -15px;
   
    }
  
    .product-detail h4 {
      font-size: 13px;
      padding-bottom: 10px;
      margin-top: -10px;
    }
  
    .prodict-card-body img {
        width: 150px !important;
        height: 150px !important;
        padding: 5px 0px !important;
    }
  

   

   /* contact us responsive code is here  */
   .address_container {
    margin-top: 30px;
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 20px !important;
  }
  .contact_row {
    margin-top: -15px !important;
  }
  p {
    position: relative;
    font-size: 13px !important;
    line-height: 15px !important;
  }
  .box {
    margin: 10px;
  }



  /* single display product responsive isssue is start from here ; */

  
 
  .product-details{
    margin-left: -16px;
  } 

 .product-details ul {

  list-style: none;
  margin-left: -16px;
  margin-right: 3px;
  
  }

  .r_title {
      margin-left:20px;
  }

  .single_product_heading h4 { font-size: 16px ; }

 .list-unstyled h2 { font-size: 20px ; }



 .details-tab-menu-list li{

     font-size: 11px !important;

 }


   

  /* cart responsive is start from here */

  .cart_row{
      padding-bottom: 25px;
  }

  .cart_responsive_item {

        margin-left: 250px;
        margin-top: -54px;
    
  }

   .cart_responsive_price{
    margin-left: 270px;
    margin-top: -44px;

   }  


   .cart_responsive_total{

    margin-left: 310px;
    margin-top: -24px;
   }

  .cart_responsive_remove{

    cursor: pointer;
    margin-left: 350px;
    margin-top: -24px;
  }


  
  /* blog responsive issue is start from here */

  .desc_info p {
    font-size: 12px;
    line-height: 24px;
    font-style: normal;
  }
  .feature_image {
    width: 311px !important;
    height: 230px !important;
    margin-top: 18px !important;
    border: 3px dashed;
  }


  /* carrier details page responsive is here */
  
  .carrier_description {
    font-size: 14px;
    line-height: 24px;
 } 


.carrier_feature_image {
  width: 205px;
  height: 132px;
  border-radius: 10px;
 }

 /* cart responsive is start from here */

 .cart-open {

    height: 70px;

}

.cart-open i {
	font-size: 18px;
}

.cart-total {
	background: #fff;
	width: 100%;
    padding: 0px;
    border: 1px solid #ddd ;
	font-size: 14px;
}


.cart-total h5 {
    margin-top: 2px !important;
    font-size: 14px;
}


  /* footer responsive code is start from  here */
  .quick_link{
    margin-left:25px;
  }

  .news_letter{
    margin-left: 25px;
  }

 .subscribe_input{
   width:300px;
   margin-left: 18px;
   
 }

 .email_icon_container {
   margin-right: 40px;
 }

 
.short_desc{
  font-size: 14px; line-height: 24px ;
  padding-right: 10px; 
}

.end_footer {
	background: #ff4d03;
	height: 60px !important;
	width: 100%;
	margin-top: -10px;
}



.f_info_left {
   font-size: 14px;
}

.f_info_right {
	margin-top: 30px !important;
	margin-left: -40px !important;
	padding-right: 58px !important;
}



  
}

img.responsive-image.choosed-thumb {
    max-width: 60px !important;
}

img.zoomer-control.responsive-image {
    max-width: 40px !important;
}






</style>