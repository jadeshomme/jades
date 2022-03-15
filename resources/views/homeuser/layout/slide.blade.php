<section class="home-section home-fade home-full-height" id="home">
    <div class="hero-slider">
      <ul class="slides">
        @foreach ($get_slider as $slider)
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image: url({{asset('/uploads/images/'.$slider->slider_img.'')}});">
                <div class="titan-caption">
                    <div class="caption-content">
                    <div class="font-alt mb-30 titan-title-size-1">{{$slider->name}}</div>
                    <div class="font-alt mb-30 titan-title-size-4"> {{$slider->content}}</div>
                    {{-- <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a> --}}
                    </div>
                </div>
            </li>
        @endforeach
      </ul>
    </div>
</section>
