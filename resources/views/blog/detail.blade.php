@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="page-wrapper">
	<div class="container">
	<div class="">
		<div id="page">
			<div id="content-center" class="">
				<div class="row">
				<div class="box_containerlienhe">
					<div class="title-global">
						<h2>{{languageName($blog_detail->title)}}</h2>
						<div class="clearfix"></div>
					</div>
					<div class="wrap-box-news">
						<div class="row rowrp text-justify">
							{!!languageName($blog_detail->content)!!}
						</div>
					</div>
					<div class='clearfix'></div>
					<div class="phantrang" ></div>
					<div class="clear"></div>
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