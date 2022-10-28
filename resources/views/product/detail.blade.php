@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/product_detail.css')}}" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<style>
   .swiper {
      width: 100%;
      margin-left: auto;
      margin-right: auto;
   }

   .swiper-slide {
      background-size: cover;
      background-position: center;
   }

   .mySwiper2 {
      height: 80%;
      width: 100%;
   }
   .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
   }

   .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
      border-radius: 10px;
   }
   .mySwiper .swiper-slide img{
      border-radius: 10px;
   }

   .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
   }

   .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
   }

   .swiper-slide img {
      display: block;
      width: 100%;
      /* height: 100%; */
      object-fit: cover;
   }
</style>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
   var swiper = new Swiper(".mySwiper", {
   spaceBetween: 10,
   slidesPerView: 5,
   freeMode: true,
   watchSlidesProgress: true,
   });
   var swiper2 = new Swiper(".mySwiper2", {
   spaceBetween: 10,
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
   thumbs: {
      swiper: swiper
   },
   });
</script>
@endsection
@section('content')
<div id="page-wrapper">
   <div class="container">
      <div class="">
         <div id="page">
            <div id="content-center" class="">
               <div class="row">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{route('allProduct')}}" title="Sản phẩm">Sản phẩm</a></li>
                        <li class="breadcrumb-item item-bread"><a href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}" title="{{languageName($product->cate->name)}}">{{languageName($product->cate->name)}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{languageName($product->name)}}</li>
                     </ol>
                  </nav>
                  <div class="" id="product-detail">
                     <div id="detail">
                        <div class="col-xs-12 col-md-5 col-sm-5" id="main-detail">
                           <div class="row">
                              <div class="relative product-image-block">
                                 <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                       @foreach ($imgs as $img)
                                          <div class="swiper-slide">
                                             <img src="{{$img}}" loading="lazy" />
                                          </div>
                                       @endforeach
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                 </div>
                                 <div thumbsSlider="" class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                       @foreach ($imgs as $img)
                                          <div class="swiper-slide">
                                             <img src="{{$img}}" loading="lazy" />
                                          </div>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--zoom-section end-->
                        </div>
                        <div class="col-xs-12 col-md-7 col-sm-7  main-product-detail">
                           <div class="row-xs">
                              <div class="title">
                                 <h1>{{languageName($product->name)}}</h1>
                              </div>
                              <div class="clearfix"></div>
                              <div class="content">
                                 <ul class="ul-list-product-detail">
                                    @if ($product->price > 0 && $product->discount > 0)
                                    <li>Giá: 
                                       <span>{{number_format($priceDiscount,0,'','.')}}₫</span>
                                       <span class="old-price">{{number_format($product->price,0,'','.')}}₫</span>
                                       <style>
                                          #product-detail .ul-list-product-detail li span.old-price {
                                             text-decoration: line-through;
                                             margin-left: 20px;
                                             font-size: 14px;
                                             color: #6d6d6d;
                                          }
                                       </style>
                                    </li>
                                    @elseif($product->price > 0 && $product->discount == 0)
                                    <li>Giá: 
                                       <span>{{number_format($product->price,0,'','.')}}₫</span>
                                    </li>
                                    @else
                                    <li>Giá: <span><a href="tel:{{$setting->phone1}}">Liên hệ</a></span></li>
                                    @endif
                                 </ul>
                                 <div class="product-desc">
                                    {!!languageName($product->description)!!}
                                 </div>
                                 <div style="max-height:50px;overflow:hidde">
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53a83dd63e4b5e75"></script>
                                    <div class="addthis_native_toolbox"></div>
                                 </div>
                              </div>
                           </div>
                           <!-- end main-product-detail -->
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="tab-category">
                        <!-- Nav tabs -->
                        <ul class="tab-nav">
                           <li class="active">
                              <a href="#thongso-kt">Công dụng chính</a>
                           </li>
                           <li class="">
                              <a href="#desc-kt">Thành phần</a>
                           </li>
                           {{-- <li class="">
                              <a href="#mota-ng">Mô tả</a>
                           </li>
                           <li>
                              <a href="#comment">Đánh giá</a>
                           </li> --}}
                        </ul>
                        <script>
                           $().ready(function(){
                           	$("#qty").change(function(){
                           		if(!parseInt($(this).val(), 10)){
                           			$(this).val(1);									
                           		}
                           		if(parseInt($(this).val()) < 1){
                           			$(this).val(1);
                           		}
                           	})
                           	$(".tab-category li a").click(function(){
                           		$(".tab-category li").removeClass("active");
                           		$id = $(this).attr("href");
                           		$(this).parent().addClass("active");
                           		$(".tab-category .tab").fadeOut(function(){
                           			$(".tab-category .tab").removeClass("active");
                           			$(".tab-category .tab"+$id).fadeIn().addClass("active");
                           		})
                           		return false;
                           	})
                           })
                        </script>
                        <div class='clearfix'></div>
                        <div class="tab-content">
                           <div class="tab active" id="thongso-kt">
                              {!!languageName($product->content)!!}
                           </div>
                           <div class="tab" id="desc-kt">
                              {!!languageName($product->description)!!}
                           </div>
                           {{-- <div class="tab" id="mota-ng">
                              <p><strong>Tăng lự, kích thích thèm ăn, phục hồi sức khỏe</strong></p>
                           </div>
                           <div class="tab" id="comment">
                              <div id="fb-root"></div>
                              <script>(function(d, s, id) {
                                 var js, fjs = d.getElementsByTagName(s)[0];
                                 if (d.getElementById(id)) return;
                                 js = d.createElement(s); js.id = id;
                                 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=580130358671180&version=v2.3";
                                 fjs.parentNode.insertBefore(js, fjs);
                                 }(document, 'script', 'facebook-jssdk'));
                              </script>
                              <div class="fb-comments" data-href="http://oliver.vn/san-pham/b-complex-c-31.html" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
                           </div> --}}
                        </div>
                     </div>
                     <!-- nav-tabs-->
                     <div class="clearfix">
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="wrap-all-product">
                     <div class="global-title">
                        <h2>Sản phẩm cùng loại</h2>
                        <div class='clearfix'></div>
                     </div>
                     <div class="clearfix"></div>
                     <div id="product-wrap">
                        <div class=''>
                           <div class="row">
                              @foreach ($productlq as $pro)
                              @if ($product->id != $pro->id)
                              <div class="col-sm-4 col-md-3 item-product fadeInUp wow" >
                                 @include('layouts.product.item',['product'=>$pro])
                              </div>
                              @endif
                              @endforeach
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <!-- end col-xs-12-->
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
@endsection