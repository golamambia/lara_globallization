@include('frontend.header')


<!------- inner banner area start ------->
@foreach($extra_data as $val)
    @if($val->type==1)
<section class="inner_banner_area" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
        <div class="container">
            <div class="inner_banner_contain">
                <h1><strong>{!!$val->title!!}</strong></h1>
                {!!$val->body!!}
            </div>
        </div>
 </section>
    @endif
    @endforeach

    
<div class="mainbox p-8">

  <div class="contact_us_area">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_heading">
  @foreach($extra_data as $val)
      @if($val->type==2)
                        <h3>{!!$val->title!!}</h3>
                        {!!$val->body!!}
   @endif
  @endforeach
                    </div>
                    <div class="contact_address">
                        <div class="address_icon"><i class="zmdi zmdi-phone"></i></div>
  @foreach($extra_data as $val)
      @if($val->type==3 && $val->title)
                        <h4>{!!$val->title!!}</h4>
   @endif
  @endforeach
                        <a href="tel:{!!preg_replace('/\D+/', '', config('site.phone'))!!}">{!!config('site.phone')!!}</a>
                    </div>
                    <div class="contact_address">
                        <div class="address_icon"><i class="zmdi zmdi-email"></i></div>
  @foreach($extra_data as $val)
      @if($val->type==4 && $val->title)
                        <h4>{!!$val->title!!}</h4>
   @endif
  @endforeach                        
                        <a href="mailto:{!!config('site.email')!!}">{!!config('site.email')!!}</a>
                        

  @foreach($extra_data as $val)
      @if($val->type==5 && $val->title)
                        <h4 class="mt-3">{!!$val->title!!}</h4>
   @endif
  @endforeach   
                        <a href="mailto:{!!config('site.support_email')!!}">{!!config('site.support_email')!!}</a>
                    </div>
                    <div class="contact_address">
                        <div class="address_icon"><i class="zmdi zmdi-pin"></i></div>
  @foreach($extra_data as $val)
      @if($val->type==6 && $val->title)
                        <h4>{!!$val->title!!}</h4>
   @endif
  @endforeach  
                        <p>{!!config('site.address')!!}</p>
                        <div class="social_link">
  @foreach($extra_data as $val)
      @if($val->type==7 && $val->title)
                        <h4>{!!$val->title!!}</h4>
   @endif
  @endforeach 
                            <ul>
                      @if(config('site.facebook_link'))<li><a href="{!!config('site.facebook_link')!!}" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>@endif
                      @if(config('site.twitter_link'))<li><a href="{!!config('site.twitter_link')!!}" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>@endif
                      @if(config('site.instagram_link'))<li><a href="{!!config('site.instagram_link')!!}" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>@endif
                      @if(config('site.youtube_link'))<li><a href="{!!config('site.youtube_link')!!}" target="_blank"><i class="zmdi zmdi-youtube"></i></a></li>@endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact_heading">
  @foreach($extra_data as $val)
      @if($val->type==8)
                        <h3>{!!$val->title!!}</h3>
                        {!!$val->body!!}
   @endif
  @endforeach
            @if($errors->any())   
            <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
            </div>
            @endif
        <form method="POST" action="{{ url('contact') }}" class="customvalidation">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name*" data-validation-engine="validate[required]" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Business Email*" data-validation-engine="validate[required,custom[email]]" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company Name" name="company">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Which Country You area Looking for Services*" name="service">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Where are you located?*" name="located">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="What can we help you with?*" name="help">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Add Remarks" name="remark"></textarea>
                        </div>
                        <button class="btn btn-custom" type="submit">
  @foreach($extra_data as $val)
      @if($val->type==9)
                        {!!$val->btn_text?$val->btn_text:'Submit'!!}
   @endif
  @endforeach
                        </button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="location_area">
  @foreach($extra_data as $val)
      @if($val->type==10 && $val->title)
                        <h2 class="page-title">{!!$val->title!!}</h2>
   @endif
  @endforeach 
                <div class="row">
                    @foreach($extra_data as $val)

                    @if($val->type==11)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch">
                        <div class="card2">
                            <h4 class="mb-2">{!!$val->title!!}</h4>
                            {!!$val->body!!}
                        </div>
                    </div>

                    @endif
                    @endforeach
                    
                </div>


  @foreach($extra_data as $val)
      @if($val->type==12 && $val->title)
                        <h2 class="page-title">{!!$val->title!!}</h2>
   @endif
  @endforeach 
                <div class="row">
                    @foreach($extra_data as $val)

                    @if($val->type==13)
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch">
                        <div class="card2">
                            <h4 class="mb-2">{!!$val->title!!}</h4>
                            {!!$val->body!!}
                        </div>
                    </div>

                    @endif
                    @endforeach
                    

                </div>


            </div>
        </div>
    </div>

</div>


@include('frontend.footer')