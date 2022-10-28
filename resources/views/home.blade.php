@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="slider" >
   <div id="jssor_1" >
      <div data-u="loading" class="jssor_1_u_loadding" >
         <div class="jssor_1_u_loadding_div1" ></div>
         <div class="jssor_1_u_loadding_div2" ></div>
      </div>
      <div data-u="slides" class="jssor_1_u_slides" >
         @foreach ($banners as $banner)
         <div  data-p="112.50" class="jssor_1_u_slides_dvp" >
            <a target="_blank" href="{{$banner->link}}"> <img data-u="image" src="{{$banner->image}}" loading="lazy" /></a>
         </div>
         @endforeach
      </div>
      <div data-u="navigator" class="jssorb05"  data-autocenter="1">
         <div data-u="prototype" class="jssorb05_prototype" ></div>
      </div>
      <span data-u="arrowleft" class="jssora12l"  data-autocenter="2"></span>
      <span data-u="arrowright" class="jssora12r"  data-autocenter="2"></span>
   </div>
</div>
<div class="clearfix"></div>
<div id="page-wrapper">
   <div id="page">
      <div id="content-center" class="">
         <div class="about-us">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="sublist sublist-1">
                        <a href="{{route('aboutUs')}}" target="" class="subtitle list-subtitle nb-color-m4" title="Về chúng tôi">
                           <h2 class="rs">Về chúng tôi</h2>
                        </a>
                        <a href="{{route('aboutUs')}}" target="" class="title sublist-title fSize-38 fSize-md-30 nb-color-m3">{{$setting->company}}</a>
                        <div class="text-justify">
                           {!!$aboutUs->description!!}
                        </div>
                        <div class="list-links">
                           <a href="{{route('aboutUs')}}" target="" class="link" title="Xem thêm">
                           <span>Xem thêm</span>
                           <i class="fa fa-arrow-right" aria-hidden="true"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="sublist sublist-2">
                        <div class="list-body video-control">
                           <div class="imgc">
                              <img src="{{$aboutUs->image}}" class=" lazyloaded" alt="Về chúng tôi" loading="lazy">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="giaychungnhan_index">
            <div class="container">
               <div class="title-main">Hình ảnh thực tế</div>
               <div class="owl-giaychungnhan owl-carousel" >
                  @foreach ($prizes as $item)
                  <div class="" >
                     <div class="giaychungnhan_item" >
                        <a data-fancybox="images" class="album-img album-text hover flexbox-center" href="{{$item->image}}"> 
                        <img data-u="image" src="{{$item->image}}" loading="lazy" />
                        </a>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
         {{-- <div class="sanpham_index">
            <div class="container-fluid">
               <div class="title-main">Bạn đang tìm kiếm sản phẩm gì ?</div>
               <div class="owl-productnb owl-carousel" >
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/b-complex-c-31.html" title="B COMPLEX + C"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/b-complex-c-610.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/b-complex-c-31.html" title="B COMPLEX + C"> 
                           B COMPLEX + C							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/dolin-33.html" title="DOLIN"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/dolin-253.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/dolin-33.html" title="DOLIN"> 
                           DOLIN							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/tiamulin-150.html" title="Tiamulin"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/tiamulin-780.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/tiamulin-150.html" title="Tiamulin"> 
                           Tiamulin							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/brom-extra-inj-30.html" title="Brom Extra Inj"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/brom-extra-inj-588.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/brom-extra-inj-30.html" title="Brom Extra Inj"> 
                           Brom Extra Inj							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/oxylin-149.html" title="OXYLIN"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/oxylin-575.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/oxylin-149.html" title="OXYLIN"> 
                           OXYLIN							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/ceftifen-75-la-20.html" title="Ceftifen 75 LA"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/ceftifen-75-la-211.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/ceftifen-75-la-20.html" title="Ceftifen 75 LA"> 
                           Ceftifen 75 LA							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/monosep-148.html" title="MONOSEP"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/monosep-494.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/monosep-148.html" title="MONOSEP"> 
                           MONOSEP							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/flor-500-147.html" title="FLOR 500"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/flor-500-977.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/flor-500-147.html" title="FLOR 500"> 
                           FLOR 500							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/ceftro-top-la-19.html" title="Ceftro Top LA"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/ceftro-top-la-29.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/ceftro-top-la-19.html" title="Ceftro Top LA"> 
                           Ceftro Top LA							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/flormax-146.html" title="FLORMAX"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/flormax-279.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/flormax-146.html" title="FLORMAX"> 
                           FLORMAX							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/penistrep-9.html" title="Penistrep"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/penistrep-35.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/penistrep-9.html" title="Penistrep"> 
                           Penistrep							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/flodoc-145.html" title="Flodoc"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/flodoc-467.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/flodoc-145.html" title="Flodoc"> 
                           Flodoc							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/fenbensol-144.html" title="FENBENSOL"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/fenbensol-342.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/fenbensol-144.html" title="FENBENSOL"> 
                           FENBENSOL							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/lincotin-32.html" title="LINCOTIN"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/lincotin-46.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/lincotin-32.html" title="LINCOTIN"> 
                           LINCOTIN							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/amquicoc-143.html" title="AMQUICOC"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/amquicoc-692.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/amquicoc-143.html" title="AMQUICOC"> 
                           AMQUICOC							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/ampicoli-142.html" title="AMPICOLI"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/ampicoli-299.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/ampicoli-142.html" title="AMPICOLI"> 
                           AMPICOLI							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/ampicoli-24h-141.html" title="AMPICOLI 24H   "> 
                           <img data-u="image" src="upload/sanpham/205x175x1/ampicoli-24h-809.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/ampicoli-24h-141.html" title="AMPICOLI 24H   "> 
                           AMPICOLI 24H   							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/amox-500-140.html" title="AMOX 500"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/amox-500-793.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/amox-500-140.html" title="AMOX 500"> 
                           AMOX 500							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/amoxcol-200-139.html" title="AMOXCOL 200"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/amoxcol-200.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/amoxcol-200-139.html" title="AMOXCOL 200"> 
                           AMOXCOL 200							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/amoxcol-138.html" title="AMOXCOL"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/amoxcol-973.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/amoxcol-138.html" title="AMOXCOL"> 
                           AMOXCOL							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/ampisep-137.html" title="AMPISEP"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/ampisep-125.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/ampisep-137.html" title="AMPISEP"> 
                           AMPISEP							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/zuril-coc-136.html" title="Zuril Coc"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/zuril-coc-45.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/zuril-coc-136.html" title="Zuril Coc"> 
                           Zuril Coc							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/tilmisin-135.html" title="Tilmisin"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/tilmisin-814.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/tilmisin-135.html" title="Tilmisin"> 
                           Tilmisin							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/flosol-230-134.html" title="FLOSOL 230"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/flosol-230-749.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/flosol-230-134.html" title="FLOSOL 230"> 
                           FLOSOL 230							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/enrotril-132.html" title="ENROTRIL"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/enrotril-617.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/enrotril-132.html" title="ENROTRIL"> 
                           ENROTRIL							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/diclasol-127.html" title="DICLASOL"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/diclasol-434.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/diclasol-127.html" title="DICLASOL"> 
                           DICLASOL							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/gentamox-la-23.html" title="GENTAMOX LA"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/gentamox-la-878.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/gentamox-la-23.html" title="GENTAMOX LA"> 
                           GENTAMOX LA							</a>
                        </div>
                     </div>
                  </div>
                  <div class="" >
                     <div class="productnb_item" >
                        <div class="productnb_img" >
                           <a target="_blank" href="san-pham/ceftiofur-21.html" title="Ceftiofur"> 
                           <img data-u="image" src="upload/sanpham/205x175x1/ceftiofur-73.png" />
                           </a>
                        </div>
                        <div class="productnb_name" >
                           <a target="_blank" href="san-pham/ceftiofur-21.html" title="Ceftiofur"> 
                           Ceftiofur							</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <div class="product_danhmuc">
            <div class="container">
               @foreach ($categoryhome as $cate)
               @if (count($cate->product) > 0)
               <div class="padding_danhmuc">
                  <div class="title-main">{{languageName($cate->name)}}</div>
                  @if (count($cate->typeCate) > 0)
                  <div class="choose_cat hidden-xs" data-url="{{route('getProductTypeTab')}}">
                     @foreach ($cate->typeCate as $key=>$type)
                        @if ($key == 0)
                        <span class="tab-type-cate-product active" data-id="{{$type->id}}" data-cate_id="{{$cate->id}}">{{languageName($type->name)}}</span>
                        @else
                        <span class="tab-type-cate-product" data-id="{{$type->id}}" data-cate_id="{{$cate->id}}">{{languageName($type->name)}}</span>
                        @endif
                     @endforeach
                  </div>
                  <div class="show_product show_product_tab_{{$cate->id}}">
                     <div class="row">
                        @foreach ($cate->product as $product)
                           <div class="col-md-3 col-sm-6">
                              @include('layouts.product.item', ['product'=>$product])
                           </div>
                        @endforeach
                     </div>
                  </div>
                  @else
                  <div class="show_product">
                     <div class="row">
                        @foreach ($cate->product as $product)
                           <div class="col-md-3">
                              @include('layouts.product.item', ['product'=>$product])
                           </div>
                        @endforeach
                     </div>
                  </div>
                  @endif
               </div>
               @endif
               @endforeach
            </div>
            <script>
               $('.tab-type-cate-product').click(function(e) {
                  e.preventDefault();
                  $('.tab-type-cate-product').removeClass('active');
                  $(this).addClass('active');
                  var type_id = $(this).data('id');
                  var cate_id = $(this).data('cate_id');
                  var url = $('.choose_cat').data('url');
                  $.ajax({
                     type: 'post',
                     url : url,
                     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                     data:{id: type_id},
                     success: function(data) {
                        $('.show_product_tab_'+cate_id).html(data.html);
                     }
                  })
               })
            </script>
         </div>
         <div class="album_index">
            <div class="container">
               <div class="row">
                  <div class="title-main">Tin tức</div>
                  <div class="row">
                     @foreach ($homeBlog as $blog)
                     <div class="col-md-4" style="margin-bottom: 20px;">
                        <article class="blog-item">
                           <div class="blog-item-thumbnail">								
                              <a href="{{route('detailBlog',['slug'=>$blog->slug])}}">
                              <img src="{{$blog->image}}" alt="{{languageName($blog->title)}}">							
                              </a>
                           </div>
                           <h3 class="blog-item-name margin-top-10"><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                           <p class="blog-item-summary margin-bottom-5 desc">   
                              {{languageName($blog->description)}}
                           </p>
                           <div class="blog-date clearfix">
                              <div class="post-time">
                                 <i class="ion ion-md-time"></i> {{date('d/m/Y', strtotime($blog->created_at))}}
                              </div>
                              <div class="post-author">
                                 <i class="ion ion-md-brush"></i> {{languageName($blog->cate->name)}}
                              </div>
                           </div>
                        </article>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
@endsection