<footer class="">
   <div class="container">
      <div class="row">
         <div class="flex_row row_footer">
            <div class="footer1">
               <div class="noidung_footer">
                  <p><span style="font-size:26px"><span style="color:#FF8C00">{{$setting->company}}</span></span></p>
                  <p><span style="font-size:18px"><strong>Địa chỉ:</strong> {{$setting->address1}}</span></p>
                  <p><span style="font-size:18px"><strong>Điện thoại:</strong>&nbsp;{{$setting->phone1}}</span></p>
                  <p><span style="font-size:18px"><strong>Email:</strong>&nbsp;&nbsp;{{$setting->email}}</span></p>
                  <p><span style="font-size:18px"><strong>Website: </strong>{{route('home')}}</span></p>
               </div>
               <div id="social_footer" >
                  <a href="{{$setting->facebook}}" title="Facebook" data-toggle="tooltip" target="_blank" >
                  <img src="{{url('frontend/images/icon-fb-medium.png')}}" alt="" loading="lazy" />
                  </a>
                  <a href="{{route('home')}}" title="Google" data-toggle="tooltip" target="_blank" >
                  <img src="{{url('frontend/images/icon-gg-medium.png')}}" alt="" loading="lazy"/>
                  </a>
                  <a href="" title="Twitter" data-toggle="tooltip" target="_blank" >
                  <img src="{{url('frontend/images/icon-tw-medium.png')}}" alt="" loading="lazy"/>
                  </a>
                  <a href="" title="YouTube" data-toggle="tooltip" target="_blank" >
                  <img src="{{url('frontend/images/icon-yt-medium.png')}}" alt="" loading="lazy"/>
                  </a>
               </div>
            </div>
            <div class="footer2">
               <div class="title_footer">đăng ký nhận tin</div>
               <div class="slogan_form">Đăng ký nhận tin từ công ty chúng tôi hàng tuần</div>
               <div class="formdknt">
                  <form method="post" action="{{route('postcontact')}}" >
                     @csrf
                     <input type="text" name="name"  placeholder="Họ và tên ... " value="" />
                     <input type="email" name="email"  placeholder="Email ... " value="" />
                     <input type="text" name="phone"  placeholder="Điện thoại ... " value="" />
                     <button type="submit" class=" guidi" name="btn">Gửi</button>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
            <div class="footer3">
               <div class="iframe_bando">
                  {!!$setting->iframe_map!!}
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<div class="coppyright">
   <div class="container">
      <div class="row">
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 text-uppercase">
               Copyright © 2020 Thuốc thú y - thủy sản BioViet | Design by <a href="https://sbtsoftware.vn/" style="color: #fff">SBT</a>
            </div>
         </div>
      </div>
   </div>
</div>