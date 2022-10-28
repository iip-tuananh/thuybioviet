<header class="rel">
   <div class="wrap-top" >
      <div class="container rel">
         <div class='flex_row row_top'>
            <div class="logo-header ">
               <div class="effect-run ">
                  <a href="{{route('home')}}" title="Home"><img class="header img-responsive "  src="{{$setting->logo}}" loading="lazy" /><span class="star star1 animation"></span></a>
                  <div class="clearfix"></div>
               </div>
            </div>
            <div class="top_center " >
               <div class="banner-header">
                  <h2>Thuốc thú y - thủy sản BioViet</h2>
               </div>
               <div class="xsearch">
                  <form id="form-xsearch" action="{{route('search_result')}}" method="POST">
                     @csrf
                     <div class="search-box">
                        <input type="text" name="keyword" class="keyword" placeholder="Nhập từ khóa ..." value="" required>
                        <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="top_right">
               <div id="social">
                  <a href="{{$setting->facebook}}" title="Facebook" data-toggle="tooltip" target="_blank">
                  <img src="{{url('frontend/images/icon-fb.png')}}" alt="" />
                  </a>
                  <a href="{{route('home')}}" title="Google" data-toggle="tooltip" target="_blank">
                  <img src="{{url('frontend/images/icon-gg.png')}}" alt="" />
                  </a>
                  <a href="" title="Twitter" data-toggle="tooltip" target="_blank">
                  <img src="{{url('frontend/images/icon-tw.png')}}" alt="" />
                  </a>
                  <a href="" title="Youtube" data-toggle="tooltip" target="_blank">
                  <img src="{{url('frontend/images/icon-yt.png')}}" alt="" />
                  </a>
               </div>
               <div class="hotline">
                  <p>
                     Hỗ trợ khách hàng 24/7							<span>{{$setting->phone1}}</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <nav class="">
      <div class="container">
         <div class="flex_row row_menu">
            <div class="col-menu">
               <ul id="main-nav" class="">
                  <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
                  <li class="{{ Route::currentRouteName() == 'aboutUs' ? 'active' : '' }} ">
                     <a href="{{route('aboutUs')}}" title="Giới thiệu">Giới thiệu</a>
                  </li>
                  <li class="{{ Route::currentRouteName() == 'allProduct' || Route::currentRouteName() == 'allListProCate' || Route::currentRouteName() == 'allListProType' || Route::currentRouteName() == 'allListTypeTwo' || Route::currentRouteName() == 'detailProduct' ? 'active' : '' }} ">
                     <a href="{{route('allProduct')}}" title="Sản phẩm">Sản phẩm</a>
                     <ul class="">
                        @foreach ($categoryhome as $cate)
                        <li class="f">
                           <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
                           <div class="clearfix"></div>
                           @if (count($cate->typeCate) > 0)
                           <ul>
                              @foreach ($cate->typeCate as $typeCate)
                              <li class="t">
                                 <a href="{{route('allListProType', ['cate'=>$typeCate->cate_slug, 'typeCate'=>$typeCate->slug])}}" title="{{languageName($typeCate->name)}}">{{languageName($typeCate->name)}}</a>
                                 <div class="clearfix"></div>
                                 @if (count($typeCate->typetwo) > 0)
                                 <ul>
                                    @foreach ($typeCate->typetwo as $typeTwo)
                                    <li class="f">
                                       <a href="{{route('allListTypeTwo', ['cate'=>$typeTwo->cate_slug, 'typeCate'=>$typeTwo->type_slug, 'typeTwo'=>$typeTwo->slug])}}" title="{{languageName($typeTwo->name)}}">{{languageName($typeTwo->name)}}</a>
                                       <div class="clearfix"></div>
                                    </li>
                                    @endforeach
                                 </ul>
                                 @endif
                              </li>
                              @endforeach
                           </ul>
                           @endif
                        </li>
                        @endforeach
                     </ul>
                  </li>
                  <li class="{{ Route::currentRouteName() == 'allListBlog' || Route::currentRouteName() == 'listCateBlog' || Route::currentRouteName() == 'detailBlog' ? 'active' : '' }} ">
                     <a href="{{route('allListBlog')}}" title="Tin tức">Tin tức</a>
                     @if (count($blogCate) > 0)
                     <ul>
                        @foreach ($blogCate as $cate)
                        <li class="f">
                           <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}">{{languageName($cate->name)}}</a>
                           <div class="clearfix"></div>
                        </li>
                        @endforeach
                     </ul>
                     @endif
                  </li>
                  <li  class="{{ Route::currentRouteName() == 'lienHe' ? 'active' : '' }} "><a href="{{route('lienHe')}}" title="Liên hệ">Liên hệ</a></li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
</header>
<div class="visible-xs">
   <link href="{{asset('frontend/css/rp-menu.css')}}" rel="stylesheet" type="text/css" />
   <div class="title-rpmenu">
      <div class="wrap">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <div class="clearfix"></div>
      </div>
   </div>
   <div id="responsive-menu">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <div class="clearfix"></div>
      <div class="content">
      </div>
      <div class="clearfix"></div>
   </div>
   <script>
      $().ready(function(){
         $menu = $("#main-nav").clone();
         $menu.removeAttr("id");
         $menu.find(".no-index").remove();
         $("#responsive-menu .content").append($menu);
         $("#responsive-menu .content").append('<div class="clearfix"></div>');
         $menu = $("#responsive-menu .content ul");
         $menu.find("li").each(function(){
            if($(this).find("ul").length){
               $(this).addClass("has-child");
               $(this).find("a").first().append("<span class='toggle-menu'><i class='glyphicon glyphicon-menu-down'></i></span>");
            }
         })
         $("#responsive-menu .toggle-menu").click(function(){
            $(this).find("i").toggleClass("glyphicon-menu-down");
            $(this).find("i").toggleClass("glyphicon-menu-up");
            if(!$(this).hasClass("active")){
               $(this).parent().parent().find("ul").first().slideDown();
               $(this).addClass("active");
            }else{
               $(this).parent().parent().find("ul").first().slideUp();
               $(this).removeClass("active");
            }
            return false;
         })
         $("#responsive-menu .title").click(function(){
            $list = $(this).next().next().find("ul").first();
            console.log($list.is(":visible"));
            if($list.is(":visible")){
               $list.slideUp();
            }else{
               $list.slideDown();
            }
         })
         $("#responsive-menu").attr("data-top",$("#responsive-menu").offset().top);
         $(window).scroll(function(){
            $top = $(window).scrollTop();
            $ele = $("#responsive-menu").attr("data-top");
            if($top > $ele){
               //$("#responsive-menu").css({position:"fixed"});
            }else{
            //	$("#responsive-menu").css({position:"relative"});
         }
      })
         $(".title-rpmenu").click(function(){
            $("body").css({
               "overflow-x":"hidden"
            })
            $("#responsive-menu,#xmen").css({'transition' : 'all 0.7s ease-in-out',
               'transform' : 'translateX(300px)'});
            //$(".title-rpmenu").fadeOut();
            return false;
         })
         $("#responsive-menu button.close,#nav-page-wrapper,#xmen").click(function(){
            $("#responsive-menu,#xmen").css({
               'transform' : 'translateX(0px)'});
            setTimeout(function(){
               $(".title-rpmenu").fadeIn();
               $("body").css({
                  "overflow-x":"auto"
               })
            },1000)
         })
         $(window).scroll(function(){  
            if($(window).scrollTop()>105){
               $('.title-rpmenu').addClass('fixed fadeInDown animated');
               $('#responsive-menu').addClass('ctop ');
            }else{
               $('.title-rpmenu').removeClass('fixed fadeInDown animated');
               $('#responsive-menu').removeClass('ctop');
            }
         })  
      })
   </script>
</div>