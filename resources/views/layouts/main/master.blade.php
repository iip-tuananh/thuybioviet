<!DOCTYPE html>
<html lang="vi|en">
   <head itemscope itemtype="http://schema.org/WebSite">
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>@yield('title')</title>
      <meta name="description" content="">
      <meta name="keywords" content="@yield('title')"/>
      <meta name="robots" content="noodp,index,follow" />
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="description" content="@yield('description')" />
      <link rel="canonical" href="{{url()->current()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{url()->current()}}" />
      <meta property="og:site_name" content="ahometh.vn" />
      <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="598" />
      <meta property="og:image:height" content="333" />
      <meta property="og:image:alt" content="ahome-noi-that" />
      <meta property="og:image:type" content="image/jpeg" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!-- Fav Icon -->
      <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
      <script src="{{asset('frontend/js/jquery-1.11.2.min.js')}}" type="text/javascript" ></script>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
      <link href="{{asset('frontend/css/normalize.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/jquery.fancybox.min.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/animate.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/owl.carousel.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/owl.theme.css')}}" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('frontend/css/jquery.simplyscroll.css')}}" type="text/css">
      <link href="{{asset('frontend/css/style.css')}}" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slick-theme.css')}}"/>
      <link href="{{asset('frontend/css/product.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/news.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/index.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/map.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/jquery.bxslider.css')}}" type="text/css" rel="stylesheet" />
      <link href="{{asset('frontend/css/responsive.css')}}" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      @yield('css')
   </head>
   <body  class="status js-status index"  itemscope itemtype="http://schema.org/WebPage">
      <a href="" class="back-to-top"><img src="{{url('frontend/images/top.png')}}"></a>
      <div id="xmenx">
         @include('layouts.header.index')
         @yield('content')
         @include('layouts.footer.index')
         <div id='arcontactus'>
            <input type="text" class="hidden" name="phone_number" value="{{$setting->phone1}}">
            <input type="text" class="hidden" name="email_address" value="{{$setting->email}}">
            <input type="text" class="hidden" name="address" value="{{$setting->address1}}">
            <input type="text" class="hidden" name="icon_address" value="<img src='{{url('frontend/images/worldwide-location--v2.png/')}}'>">
            <input type="text" class="hidden" name="facebook" value="{{$setting->facebook}}">
         </div>
      </div>
      <script src="{{asset('frontend/js/less-1.7.3.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('frontend/js/script.js')}}" type="text/javascript" ></script>
      <script type="text/javascript" src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('frontend/js/plugins-scroll.js')}}" type="text/javascript" ></script>
      <script type="text/javascript" src="{{asset('frontend/js/slick.min.js')}}"></script>
      <script src="{{asset('frontend/js/wow.min.js')}}" type="text/javascript" ></script>
      <script type="text/javascript" src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script> 
      <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.simplyscroll.min.js')}}" type="text/javascript"></script>
      <!-- <script src="/js/jquery.pixelentity.shiner.min.js" type="text/javascript"></script> -->
      <script src="{{asset('frontend/js/jquery.lettering.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.textillate.js')}}"></script>
      @yield('js')
      <script>
         new WOW().init();
         $().ready(function(){
         
            $('.banner-header h2').textillate({
               in:{
                  effect: 'bounceIn'
               },
               out: {
                  effect: 'bounceOut'
               },
               loop: true
            });
         
            $('img').each(function(index, element) {
               if(!$(this).attr('alt') || $(this).attr('alt')=='')
               {
                  $(this).attr('alt','Dược Thú y Bio');
               }
            });
            $(window).scroll(function(){
               if($(window).scrollTop()>175){
                  $('nav').addClass("fixed");
               }else{
                  $('nav').removeClass("fixed");
               }
            })
         
            var owl = $('.owl-giaychungnhan');
            owl.owlCarousel({
               margin: 30,
               loop: false,
               autoplay:true,
               nav:true,
               dots:false,
               navText:"",
               responsive: {
                  0: {
                     margin: 10,
                     items: 2
                  },
                  768: {
                     items: 3
                  },
                  992: {
                     items: 4	
                  },
                  1200: {
                     items: 5	
                  }
               }
            })
         
            var owl = $('.owl-productnb');
            owl.owlCarousel({
               margin: 30,
               loop: true,
               autoplay:true,
               nav:false,
               dots:false,
               navText:"",
               responsive: {
                  0: {
                     margin: 10,
                     items: 2
                  },
                  768: {
                     items: 4
                  },
                  992: {
                     items: 5	
                  },
                  1200: {
                     items: 6	
                  }
               }
            })
         
         })	
      </script>
      <script type="text/javascript" src="{{asset('frontend/js/jssor.slider.min.js')}}"></script>
      <script>
         $().ready(function(){
            var jssor_1_SlideshowTransitions = [{
               $Duration: 800,
               $Opacity: 2
            }, {
               $Duration: 800,
               x: 0.3,
               $During: {
                  $Left: [0.3, 0.7]
               },
               $Easing: {
                  $Left: $Jease$.$InCubic,
                  $Opacity: $Jease$.$Linear
               },
               $Opacity: 2
            }, {
               $Duration: 800,
               x: -0.3,
               $Rows: 2,
               $SlideOut: true,
               $ChessMode: {
                  $Row: 3
               },
               $Easing: {
                  $Left: $Jease$.$InCubic,
                  $Opacity: $Jease$.$Linear
               },
               $Opacity: 2
            }, {
               $Duration: 800,
               x: -0.2,
               $Delay: 40,
               $Cols: 12,
               $During: {
                  $Left: [0.4, 0.6]
               },
               $SlideOut: true,
               $Formation: $JssorSlideshowFormations$.$FormationStraight,
               $Assembly: 260,
               $Easing: {
                  $Left: $Jease$.$InOutExpo,
                  $Opacity: $Jease$.$InOutQuad
               },
               $Opacity: 2,
               $Outside: true,
               $Round: {
                  $Top: 0.5
               },
               $Brother: {
                  $Duration: 800,
                  x: 0.2,
                  $Delay: 40,
                  $Cols: 12,
                  $Formation: $JssorSlideshowFormations$.$FormationStraight,
                  $Assembly: 1028,
                  $Easing: {
                     $Left: $Jease$.$InOutExpo,
                     $Opacity: $Jease$.$InOutQuad
                  },
                  $Opacity: 2,
                  $Round: {
                     $Top: 0.5
                  },
                  $Shift: -200
               }
            }, {
               $Duration: 500,
               $Delay: 12,
               $Cols: 10,
               $Rows: 5,
               $Opacity: 2,
               $Clip: 15,
               $SlideOut: true,
               $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
               $Assembly: 2049,
               $Easing: $Jease$.$OutQuad
            }, {
               $Duration: 500,
               $Delay: 12,
               $Cols: 10,
               $Rows: 5,
               $Opacity: 2,
               $Clip: 15,
               $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
               $Assembly: 2050,
               $Easing: {
                  $Clip: $Jease$.$InSine
               }
            }, {
               $Duration: 500,
               x: 1,
               $Delay: 40,
               $Cols: 10,
               $Rows: 5,
               $Easing: {
                  $Left: $Jease$.$InCubic,
                  $Opacity: $Jease$.$OutQuad
               },
               $Opacity: 2
            }, {
               $Duration: 1500,
               x: 0.3,
               y: -0.3,
               $Delay: 20,
               $Cols: 10,
               $Rows: 5,
               $Opacity: 2,
               $Clip: 15,
               $During: {
                  $Left: [0.2, 0.8],
                  $Top: [0.2, 0.8]
               },
               $Formation: $JssorSlideshowFormations$.$FormationStraightStairs,
               $Assembly: 260,
               $Easing: {
                  $Left: $Jease$.$InJump,
                  $Top: $Jease$.$InJump,
                  $Clip: $Jease$.$OutQuad
               },
               $Round: {
                  $Left: 0.8,
                  $Top: 2.5
               }
            }];
            var jssor_1_options = {
               $Idle: 3000,
               $AutoPlay: 1,
               $SlideshowOptions: {
                  $Class: $JssorSlideshowRunner$,
                  $Transitions: jssor_1_SlideshowTransitions,
                  $TransitionsOrder: 1
               },
               $ArrowNavigatorOptions: {
                  $Class: $JssorArrowNavigator$
               },
               $BulletNavigatorOptions: {
                  $Class: $JssorBulletNavigator$
               }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            var MAX_WIDTH = 10000;
            function ScaleSlider() {
               var containerElement = jssor_1_slider.$Elmt.parentNode;
               var containerWidth = containerElement.clientWidth;
               if (containerWidth) {
                  var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                  jssor_1_slider.$ScaleWidth(expectedWidth);
               } else {
                  window.setTimeout(ScaleSlider, 30);
               }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
         })
      </script>
      <script type="text/javascript">
         function owl(){
            var owl = $('.owl-product_ajax');
            owl.owlCarousel({
               margin: 30,
               loop: true,
               autoplay:true,
               nav:true,
               dots:false,
               navText:"",
               responsive: {
                  0: {
                     margin: 10,
                     items: 2
                  },
                  768: {
                     items: 3
                  },
                  992: {
                     items: 4	
                  },
                  1200: {
                     items: 4	
                  }
               }
            })
         }
         function news_scroller(){
            $(".scroller").simplyScroll({orientation:'vertical'});
         }
         $(document).ready(function(){
            $(".choose_news span").click(function(){  
               if ($('.choose_news span').hasClass('active')) {
                  $('.choose_news span').removeClass('active');
               }
               $(this).addClass('active');
         
               var type = $(this).attr("data-type");
               var ten = $(this).attr("data-ten");
               var link = $(this).attr("data-link");
               $(".choose_news a").attr("href",link);
               $(".choose_news a").html(ten);
         
               $(".show_news").attr("data-type",type);
               loadData_News(type);
               return false;
            })
         });
      </script>
      <script>//<![CDATA[
         var arCuMessages = [];
         var arCuLoop = false;
         var arCuCloseLastMessage = false;
         var arCuPromptClosed = false;
         var _arCuTimeOut = null;
         var arCuDelayFirst = 2000;
         var arCuTypingTime = 2000;
         var arCuMessageTime = 4000;
         var arCuClosedCookie = 0;
         var address = $('#arcontactus').find('input[name=address]').val();
         var phone = $('#arcontactus').find('input[name=phone_number]').val();
         var email = $('#arcontactus').find('input[name=email_address]').val();
         var facebook = $('#arcontactus').find('input[name=facebook]').val();
         var iconAddress = $('#arcontactus').find('input[name=icon_address]').val();
         var arcItems = [];
         window.addEventListener('load', function() {
         // arCuClosedCookie = arCuGetCookie('arcu-closed');
         jQuery('#arcontactus').on('arcontactus.init', function() {
            if (arCuClosedCookie) {
               return false;
         }
         arCuShowMessages();
         
         });
         jQuery('#arcontactus').on('arcontactus.openMenu', function() {
            clearTimeout(_arCuTimeOut);
            arCuPromptClosed = true;
            jQuery('#contact').contactUs('hidePrompt');
            arCuCreateCookie('arcu-closed', 1, 30);
         });
         jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
            clearTimeout(_arCuTimeOut);
            arCuPromptClosed = true;
            arCuCreateCookie('arcu-closed', 1, 30);
         });
         var arcItem = {};
         arcItem.id = 'msg-item-1';
         arcItem.class = 'msg-item-facebook-messenger';
         arcItem.title = 'Messenger';
         arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
         arcItem.href = facebook;
         arcItem.color = '#02a2ff';
         arcItems.push(arcItem);
         var arcItem = {};
         arcItem.id = 'msg-item-9';
         arcItem.class = 'msg-item-telegram-plane';
         arcItem.title = 'Zalo Chat';
         arcItem.icon = "<svg id='Layer_1' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 460.1 436.6'><path fill='currentColor' class='st0' d='M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z'></path></svg>";
         arcItem.href = 'https://zalo.me/'+phone;
         arcItem.color = '#0180c7';
         arcItems.push(arcItem);
         
         var arcItem = {};
         arcItem.id = 'msg-item-7';
         arcItem.class = 'msg-item-envelope';
         arcItem.title = 'Gửi Email';
         arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
         arcItem.href = 'mailto:'+email;
         arcItem.color = '#d7473b';
         arcItems.push(arcItem);
         var arcItem = {};
         arcItem.id = 'msg-item-8';
         arcItem.class = 'msg-item-phone';
         arcItem.title = 'Call ';
         arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
         arcItem.href = 'tel:'+phone;
         arcItem.color = '#4EB625';
         arcItems.push(arcItem);
         var arcItem = {};
         arcItem.id = 'msg-item-8';
         arcItem.class = 'msg-item-phone';
         arcItem.title = 'Chỉ đường';
         arcItem.icon = iconAddress;
         arcItem.href = 'https://www.google.com/maps/dir/?api=1&amp;origin=&amp;destination='+address;
         arcItem.color = '#02a2ff';
         arcItems.push(arcItem);
         jQuery('#arcontactus').contactUs({
            items: arcItems
         });
         });
         //]]>
      </script>
      <!-- end arcontactus widget --><!-- Bootstrap -->
      <script src="{{asset('frontend/js/arcontactus.js')}}"></script>
   </body>
</html>