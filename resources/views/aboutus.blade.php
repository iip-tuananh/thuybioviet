@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
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
                        <h2>Giới thiệu</h2>
                        <div class="clearfix"></div>
                     </div>
                     <div class="wrap-box-news">
                        <div class="row rowrp text-justify">
                           {!!$pageContent->content!!}
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