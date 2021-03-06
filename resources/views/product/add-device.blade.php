@extends('layouts.main')
    @section('content')
    
     <!-- Section Start -->
    <div class="section-padding">
        <div class="container">
            <form class="form-horizontal" id="adddevice" method="post" action="{{ url('submit-sell-request') }}" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message)
                <div class="alert alert-success">
                    {{$message}}
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-6 mb-md-80">
                        <h5> Seller Information </h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Your Name<span class="required">*</span></label>
                                    <input type="text" name="username" class="form-control" autocomplete="off" value="" placeholder="Please Enter Your Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Mobile Number<span class="required">*</span></label>
                                    <input type="text" name="mobile" class="form-control" autocomplete="off" value="" placeholder="Please Enter Your Mobile No" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Email Address<span class="required">*</span></label>
                                    <input type="text" name="email" class="form-control" autocomplete="off" value="" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Alternative Number<span class="required">*</span></label>
                                    <input type="text" name="alt_mobile" class="form-control" autocomplete="off" value="" placeholder="Please Enter Alternative Number" required="">
                                </div>
                            </div>
                        </div>
                        <h5> Device Information </h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Category<span class="required">*</span></label>
                                    <select name="category_id" class="form-control add-device-category" required="">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" > {{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Brand<span class="required">*</span></label>
                                    <select name="brand_id" id="brand_id" class="form-control" required="">
                                        <option value="">Select Brand</option>
                                        @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" > {{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Device Name<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control" autocomplete="off" value="" placeholder="Device Name" required="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Ram Memory<span class="required">*</span></label>
                                    <input type="text" name="ram" class="form-control" autocomplete="off" value="" placeholder="Ram Memory" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group custom_form_style">
                                    <label class="padding-30px-left-right">Storage Memory<span class="required">*</span></label>
                                    <input type="text" name="storage" class="form-control" autocomplete="off" value="" placeholder="Storage Memory" required="">
                                </div>
                            </div>
                            
                        </div>
                    </div> 
                    <div class="col-lg-6 mb-md-80 question-content_wrap" >           
                        <h5> Device Conditions </h5>
                    </div> 
                    <div class="col-lg-12">
                        <button type="submit" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Submit Sell Request <i class="fal fa-calculator ml-2"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Section End -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection