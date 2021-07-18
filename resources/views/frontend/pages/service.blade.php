@include('frontend.header')


@foreach($extra_data as $val)
  @if($val->type==1)
<!------- inner banner area start ------->
<section class="inner_banner_area" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
  <div class="container">
    <div class="inner_banner_contain">
      @if($val->title)<h1>{!!$val->title!!}</h1>@endif
      {!!$val->body!!}
      @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
    </div>
  </div>
</section>
  @endif
@endforeach

<div class="mainbox p-8">
@foreach($extra_data as $val)
  @if($val->type==2 && ($val->title || $val->body))
  <div class="innerabout_us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="innerabout_thumble pt-4 pr-4">
            @if($val->image && File::exists(public_path('uploads/'.$val->image)) )<img src="{{ asset('/uploads/'.$val->image) }}"> @endif
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="innerabout_contantbox">
            @if($val->title || $val->sub_title)<h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>@endif
            {!!$val->body!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
@endforeach

  <div class="ourglobalreach_area p-8">
    <div class="container">
      <div class="text-center">
@foreach($extra_data as $val)
  @if($val->type==3)
        @if($val->title || $val->sub_title)<h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>@endif
            {!!$val->body!!}
  @endif
@endforeach
        <div class="row">
@foreach($extra_data as $val)
  @if($val->type==4 && ($val->title || $val->body))
          <div class="col-lg-4 col-md-4 d-flex align-content-stretch">
            <div class="serviceslist_box">
             <div class="services_icon" style="background-image: url({{ asset('/uploads/'.$val->image) }});"></div>
              @if($val->title)<h4>{!!$val->title!!}</h4>@endif
              {!!$val->body!!}
              @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom">{!!$val->btn_text?$val->btn_text:'read more'!!}</a>@endif
             <div class="shap">
              <img src="{{asset('/frontend/images/workaffterbg.png')}}" alt="">
             </div>
             </div>
          </div>
  @endif
@endforeach
       </div>
     </div>
   </div>
 </div>

<div class="Whatwedo_area opportunityarea p-8 pt-0">
   <div class="container">
@foreach($extra_data as $val)
  @if($val->type==5 && ($val->title || $val->body))
    <div class="Whatwedo_box row">
     <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
       <div class="Whatwedo_thumble d-flex">
         @if($val->image && File::exists(public_path('uploads/'.$val->image)) )<img src="{{ asset('/uploads/'.$val->image) }}"> @endif
       </div>
     </div>
     <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
       <div class="Whatwedo_textbox">
        @if($val->title || $val->sub_title)<h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>@endif
        {!!$val->body!!}
      </div>
    </div>
  </div>
  @endif
@endforeach

     </div>
   </div>


@foreach($extra_data as $val)
  @if($val->type==6 && ($val->title || $val->body))
<div class="Workwithus_area inneradd">
  <div class="container">
    <div class="Workwithus_box" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
      <div class="Workwithus_innerbox pt-4 pb-4">
        
        @if($val->title || $val->sub_title)<h4>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h4>@endif
        <div class="custom_div p-0">{!!$val->body!!}</div>
           
      </div>
    </div>
  </div>
</div>
  @endif
@endforeach


</div>






@section('more-scripts')

<script type="text/javascript">
$(window).ready (function () {
});
</script>

@stop



@include('frontend.footer')