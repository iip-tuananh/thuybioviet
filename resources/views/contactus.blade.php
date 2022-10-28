@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/lienhe.css')}}" type="text/css" rel="stylesheet" />
@endsection
@section('js')
@endsection
@section('content')
<div id="page-wrapper">
	<div id="page">
	<div id="content-center" class="">
		<div class="box_containerlienhe" style="">
			<div class="content container">
				<div class="">
				<div class="title-global">
					<h2>Liên hệ</h2>
					<div class="clearfix"></div>
				</div>
				<div class="iframe_bando_contact">
					{!!$setting->iframe_map!!}
				</div>
				</div>
			</div>
			<section id="contact" style="background:#F5F4F7;padding:20px 0">
				<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<div class="title-global">
							<h2>Thông tin công ty</h2>
							<div class="clearfix"></div>
						</div>
						<div class="fix-title">
							<h1><span style="font-size:20px"><strong>{{$setting->company}}</strong></span></h1>
							<p><strong>Địa chỉ :</strong>{{$setting->address1}}</p>
							<p><strong>Số Điện Thoại :</strong> {{$setting->phone1}}</p>
							<p><strong>Email :&nbsp;</strong> {{$setting->email}}</p>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-7">
						<div class="title-global">
							<h2>Form liên hệ</h2>
							<div class="clearfix"></div>
						</div>
						<form method="post" name="frm" action="{{route('postcontact')}}">
							@csrf
							<div class="row">
							<div class="col-xs-6 col-md-4 inputx">
								<input name="name" type="text" required class="form-control" id="tenlienhe" placeholder="Họ tên" size="40" />
							</div>
							<div class="col-xs-6 col-md-4 inputx">
								<input name="email" id="email" required type="text" class="form-control" placeholder="Email" size="40"  />
							</div>
							<div class="col-xs-12 col-md-4 inputx">
								<input name="phone" required type="text" class="form-control" id="dienthoai" placeholder="Điện Thoại " size="40"/>
							</div>
							<div class="col-xs-12 inputx">
								<textarea name="mess" cols="35" required  class="form-control" rows="5" placeholder="Nội dung"  id="noidung" style="background-color:#FFFFFF; color:#666666;"></textarea>
								<input class="button" type="submit" value="Gửi tin" />
							</div>
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
@endsection