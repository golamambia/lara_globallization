
@include('frontend.header')

<!------- inner banner area start ------->
<?php $count=0;?>

    @foreach($extra_data as $val)

    @if($val->type==1)
<section class="inner_banner_area" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
        <div class="container">
            <div class="inner_banner_contain">
                <h1>{!!$val->sub_title!!} <strong>{!!$val->title!!}</strong></h1>
                {!!$val->body!!}
                @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
            </div>
        </div>
 </section>
    @endif

    @endforeach



<div class="mainbox p-8">

  <div class="about_single">
    <div class="container">
      <div class="text-center">
  @foreach($extra_data as $val)
      @if($val->type==2)
        <h3 class="mb-4">{!!$val->title!!} <strong>{!!$val->sub_title!!}</strong></h3>
        <div class="mb-5">{!!$val->body!!}</div>
   @endif
  @endforeach

      @foreach($extra_data as $val)
      @if($val->type==3)
        <h3 class="mt-5 mb-4">{!!$val->title!!}</h3>
        {!!$val->body!!}
        @if($val->btn_url)<a href="{!!$val->btn_url!!}" data-toggle="modal" data-target="#modal-subscribe" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'Apply Job'!!}</a>@endif
       @endif
      @endforeach
      </div>
    </div>
  </div>


  <div class="ourglobalreach_area p-8 ">
    <div class="container">
      <div class="text-center">
        @foreach($extra_data as $val)
        @if($val->type==4)
          <h3>{!!$val->title!!}</h3>
          {!!$val->body!!}
         @endif
        @endforeach
      </div>

      <div class="text-center">
       <div class="row howitworktotalbox servicesinner">
      
        @foreach($extra_data as $val)

          @if($val->type==5)

       <div class="col-lg-4 col-md-6 col-sm-6 howitwork d-flex flex-wrap align-content-stretch">
         <div class="howitwork_box">
           <div class="howitwork_icon"><i class="{!!$val->sub_title!!}"></i></div>
           <h4>{!!$val->title!!}</h4>
           {!!$val->body!!}
         </div>
       </div>

       @endif

    @endforeach

     </div>
     @foreach($extra_data as $val)

          @if($val->type==6)
     <div class="text-center">
       @if($val->btn_url)<a href="{!!$val->btn_url!!}" data-toggle="modal" data-target="#modal-subscribe" class="btn btn-custom mt-5">{!!$val->btn_text?$val->btn_text:'Apply Job'!!}</a>@endif
     </div>
           @endif

    @endforeach

      </div>
    </div>
  </div>


@foreach($extra_data as $val)

@if($val->type==7)

<div class="Workwithus_area inneradd">
  <div class="container">
    <div class="Workwithus_box" style="background-image: url({{ asset('/uploads/'.$val->image) }});">
      <div class="Workwithus_innerbox">
        
        <h4>{!!$val->title!!}</h4>
           {!!$val->body!!}
            <!-- <a href="#" class="btn btn-custom mt-4">contact us</a> -->
             @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
         
      </div>
    </div>
  </div>
</div>
           @endif

    @endforeach
</div>



<!-- Modal -->
<div class="modal fade modal-center" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="far fa-times-circle" aria-hidden="true"></i></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="#">
         
         <div class="d-flex">
          <div class="modalleftbox">
           
            <div class="about_thumlbe"> <img src="images/geatbg.jpg" alt="#"> </div>
          </div>
          <div class="flex-grow-1 modalrightbox">
            <h4><strong> SUBMIT RESUME</strong></h4>
            <div class="row row-5">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Your Name <span class="check">*</span></label>
                  <div class="form-group">
                    <input type="text" class="form-control" value="" placeholder="Full Name" name="fullname" data-validation-engine="validate[required]">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Email Address <span class="check">*</span></label>
                  <div class="form-group">
                    <input type="email" class="form-control" value="" placeholder="Email Address" name="" >
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Phone Number</label>
                  <div class="form-group">
                    <input type="text" class="form-control" value="" placeholder="Phone Number" name="" >
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Position Applying For</label>
                  <div class="form-group">
                    <input type="text" class="form-control" value="" placeholder="Position Applying For" name="" >
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Experience in Years</label>
                  <div class="form-group">
                    <input type="number" class="form-control" value="" placeholder="Experience in Years" name="" >
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Preferred Job Location</label>
                  <div class="form-group">
                    <input type="text" class="form-control" value="" placeholder="Preferred Job Location" name="" >
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Select Region/Country <span class="check">*</span></label>
                  <div class="form-group">
                    <select id="inputState" class="form-control">
                      <option selected>USA</option>
                      <option>CANADA</option>
                      <option>INDIA</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Upload Your Resume <span class="check">*</span></label>
                  <div class="form-group">
                    
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile04">
                      <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                    

                  </div>
                </div>
              </div>
              
              
             <!--  <div class="col-12">
                <div class="form-group">
                  <label>Massage</label>
                  <div class="form-group">
                    <textarea class="form-control" placeholder="massage" ></textarea>
                  </div>
                </div>
              </div> -->
              <div class="col-lg-12">
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                     By filling this form you authorize us to contact you via Email, Phone or any other mode of communication for processing your application.
                   </label>
                 </div>
               </div>
             </div>
             
             <div class="col-sm-12">
              <div class="form-group">
                <input type="submit" name="submit" value="submit" class=" btn btn-custom ">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<!-- End Modal -->

@include('frontend.footer')