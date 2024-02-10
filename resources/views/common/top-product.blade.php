<section class="section-padding wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title left-align">
                    <p class="subtitle mb-4">
                        <i class="fal fa-book"></i>
                        Top Selling Models
                    </p>
                    <h5 class="title mb-0">Top Selling Models People Love</h4>
                </div>
            </div>
        </div>
        <div class="model_slider wow fadeInUp">
            @foreach ($tobSellingProducts as $value)
            <!-- Feature Box Start -->
            <div class="slide-item col-12">
                <div class="features_box product_image_box">
                    <div class="icon">
                        <a href="{{ url('view-product') }}/{{ $value->slug }}" >
                            <img src="https://administrator.bikriworld.com/public/images/{{ $value->image }}" alt="img">
                        </a>
                    </div>
                    <h6 class="text-center">
                        <a href="{{ url('view-product') }}/{{ $value->slug }}"> {{ $value->name }} </a> 
                    </h6>
                </div>
            </div>
            <!-- Feature Box End -->
            @endforeach     
        </div>
    </div>
</section>