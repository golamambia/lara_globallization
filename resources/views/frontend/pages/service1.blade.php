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
  <div class="about_single">
    <div class="container">
      <div class="text-center">
        @if($val->title || $val->sub_title)<h3>{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>@endif
        {!!$val->body!!}
      </div>
    </div>
  </div>
  @endif
@endforeach

  <div class="ourglobalreach_area p-8 pt-4">
    <div class="container">
      <div class="text-center">
@foreach($extra_data as $val)
  @if($val->type==3 && $val->title)
        <h3>{!!$val->title!!}</h3>
  @endif
@endforeach
       <div class="row howitworktotalbox servicesinner">
@foreach($extra_data as $val)
  @if($val->type==4 && ($val->title || $val->body))
         <div class="col-lg-4 col-md-6 col-sm-6 howitwork d-flex flex-wrap align-content-stretch">
           <div class="howitwork_box">
             <div class="howitwork_icon" style="background-image: url({{ asset('/uploads/'.$val->image) }});"></div>
             @if($val->title)<h4>{!!$val->title!!}</h4>@endif
             {!!$val->body!!}
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


   <div class="servicessigle_box pt-5">
    <div class="container">
@foreach($extra_data as $val)
  @if($val->type==6 && ($val->title || $val->body))
      <div class="text-center mb-5">
        @if($val->title)<h3>{!!$val->title!!}</h3>@endif
        {!!$val->body!!}
      </div>
  @endif
@endforeach

@foreach($extra_data as $val)
  @if($val->type==7 && ($val->title || $val->body))
       <div class="media">
        @if($val->image && File::exists(public_path('uploads/'.$val->image)) )<img class="align-self-start" src="{{ asset('/uploads/'.$val->image) }}" alt=""> @endif
        <div class="media-body">
          @if($val->title)<h5 class="mt-0">{!!$val->title!!}</h5>@endif
          {!!$val->body!!}
        </div>
      </div>
  @endif
@endforeach

@foreach($extra_data as $val)
  @if($val->type==8 && ($val->btn_url))
      <div class="text-center mt-3">
        <a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>
      </div>
  @endif
@endforeach

    </div>
  </div>
</div>






@section('more-scripts')

<script type="text/javascript">
$(window).ready (function () {
});
</script>

@stop



@include('frontend.footer')