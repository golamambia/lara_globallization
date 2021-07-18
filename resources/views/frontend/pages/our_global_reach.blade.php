 
@include('frontend.header')

 <!------- inner banner area start ------->
  @foreach($extra_data as $val)

      @if($val->type==1)
    <section class="inner_banner_area" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
        <div class="container">
            <div class="inner_banner_contain">
                <h1>{!!$val->sub_title!!}<strong>{!!$val->title!!}</strong></h1>
                {!!$val->body!!}
                @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
            </div>
        </div>
 </section>
    @endif

    @endforeach


<div class="mainbox p-8">
    @foreach($extra_data as $val)

      @if($val->type==2)
  <div class="innerabout_us globaltop">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="innerabout_thumble pt-0">
            @if($val->image && File::exists(public_path('uploads/'.$val->image)) )
            <img src="{{ asset('/uploads/'.$val->image) }}" alt="#">@endif
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="innerabout_contantbox p-3">
            <h3>{!!$val->title!!}<br> 
              <strong>{!!$val->sub_title!!}</strong></h3>
            {!!$val->body!!}
          </div>
        </div>
      </div>
    </div>
  </div>
      @endif

    @endforeach


  <div class="global_reacharea p-8 pb-0">
    <div class="container">
      <div class="search_area d-flex justify-content-between align-items-center">
        @foreach($extra_data as $val)

        @if($val->type==3)
         <h5>{!!$val->title!!}</h5>
           @endif

          @endforeach


          <select class="form-control">
            <option>Which regions do you need help in?</option>
            @foreach($country as $val)
            <option>{!!$val->country_name!!}</option>
            @endforeach
            <!-- <option>America</option>
            <option>Asia</option>
            <option>Europe</option>
            <option>Oceania</option> -->
          </select>
       </div>

      <div class="global_listbox">
       <div class="row row-8">
        @foreach($country as $val)
         <div class="col-lg-3 col-md-3 col-sm-4 col-6">
           <div class="citybox">
            <a href="#">
             <div class="city_thumble d-flex">
               @if($val->image && File::exists(public_path('uploads/'.$val->image)) )
                <img src="{{ asset('/uploads/'.$val->image) }}" alt="">@endif
               <div class="overname">
                 {!!$val->country_name!!}
               </div>
             </div>
             </a>
           </div>
         </div>
         @endforeach
        
       </div>
     </div>
    </div>
  </div>

</div>
@include('frontend.footer')