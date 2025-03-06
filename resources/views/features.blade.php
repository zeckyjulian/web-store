@extends('layouts.main')
@section('container')
<section class="bg0 p-t-23 p-b-10">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
            Categories
            </h3>
        </div>
    </div>
</section>

<div class="sec-banner bg0 p-t-10 p-b-50">
    <div class="container">
      <div class="row">
        @foreach($categories as $category)
        <div class="col-md-6 col-xl-4 p-b-30">
          <!-- Block1 -->
          <div class="block1 wrap-pic-w">
            <img src="images/{{ $category->image }}" alt="IMG-BANNER">
  
            <a href="/product?category={{ $category->slug }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
              <div class="block1-txt-child1 flex-col-l">
                <span class="block1-name ltext-102 trans-04 p-b-8">
                  {{ $category->category_name }}
                </span>
  
                <span class="block1-info stext-102 trans-04">
                  New Trend
                </span>
              </div>
  
              <div class="block1-txt-child2 p-b-4 trans-05">
                <div class="block1-link stext-101 cl0 trans-09">
                  Shop Now
                </div>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection