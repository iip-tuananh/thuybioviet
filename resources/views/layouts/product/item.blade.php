
@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
<div class="product_item">
   <div class="product_img">
      <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}"> 
         <img data-u="image" src="{{$img[0]}}" loading="lazy" style="width:100%; height:260px;"> 
      </a>
   </div>
   <div class="product_name">
      <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}"> 
         {{languageName($product->name)}}
      </a>
   </div>
</div>
