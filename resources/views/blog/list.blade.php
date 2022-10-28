@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="page-wrapper" style="background-color: #f8f8f8">
   <div class="container">
      <div class="">
         <div id="page">
            <div id="content-center" class="">
               <div class="row">
                  <div class="box_containerlienhe">
                     <div class="title-global">
                        <h2>{{$title_page}}</h2>
                        <div class="clearfix"></div>
                     </div>
                     <div class="wrap-box-news">
                        <div class="row rowrp">
                           @foreach ($blogs as $blog)
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
                     <div class='clearfix'></div>
                     <div class="phantrang" >
                        {{$blogs->links()}}
                     </div>
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