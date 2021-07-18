@include('frontend.header')

<?php
$testimonials = get_fields_value_where('gs_testimonial',"status='1'",'rank','asc');
?>

<div class="home-slider">
  <div class="cycle-slideshow home-slideshow" data-cycle-slides="&gt; div" data-cycle-pager=".home-pager" data-cycle-timeout="5000" data-cycle-prev="#HomePrev" data-cycle-next="#HomeNext">
    <?php $count=0;?>
    @foreach($extra_data as $val)
    @if($val->type==1 && $val->image && File::exists(public_path('uploads/'.$val->image)))
    <div class="slide" style="background-image:url({{ asset('/uploads/'.$val->image) }});">
       <div class="caption">
          <div class="container">
              <div class="con">
                  @if($val->title)<h2>{!!$val->title!!}</h2>@endif
                  {!!$val->body!!}
                  @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom">{!!$val->btn_text?$val->btn_text:'contact Us'!!}</a>@endif
              </div>
          </div>
      </div>
  </div>
    <?php $count++; ?>
    @endif
    @endforeach
 </div>



</div>





<!-------About Us start  ------->
<div class="aboutus_area p-8">
  <div class="shape1">
    <img src="{{ asset('/frontend/images/affterimg3.png') }}" alt="">
  </div>
  <div class="shape2">
    <img src="{{ asset('/frontend/images/affterimg4.png') }}" alt="">
  </div>
  <div class="container">
    <div class="row">
        @foreach($extra_data as $val)

      @if($val->type==2)

      <div class="col-lg-6 col-md-6">
        <div class="aboutus_thumble">
          @if($val->image && File::exists(public_path('uploads/'.$val->image)) )<img src="{{ asset('/uploads/'.$val->image) }}" alt="" class="img-fluid img-rounded">@endif
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="aboutus_contantbox">
        <h3><span><small class="text">{!!$val->sub_title!!}</small></span>{!!$val->title!!}</h3>
            {!!$val->body!!}
            @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom"><span>{!!$val->btn_text?$val->btn_text:'Contact Us'!!} &nbsp; </span></a>@endif
        </div>
      </div>
    </div>
  

      @endif

      <?php

      if ($val->type==3) {

        $section_3_title = $val->title;

        $section_3_sub_title = $val->sub_title;

        $section_3_body = $val->body;

      }

      if ($val->type==5) {

        $section_5_title = $val->title;

        $section_5_sub_title = $val->sub_title;

        $section_5_body = $val->body;

        $section_5_image = $val->image;

      }

      if ($val->type==6) {

        $section_6_title = $val->title;

      }

      if ($val->type==7) {

        $section_7_title = $val->title;

        $section_7_sub_title = $val->sub_title;

        $section_7_body = $val->body;

      }

      if ($val->type==8) {

        $section_8_title = $val->title;

        $section_8_sub_title = $val->sub_title;

      }

      if ($val->type==10) {

        $section_10_title = $val->title;

        $section_10_sub_title = $val->sub_title;

        $section_10_body = $val->body;

        $section_10_image = $val->image;

        $section_10_btn_text = $val->btn_text;

        $section_10_btn_url = $val->btn_url;

      }

      if ($val->type==11) {

        $section_11_title = $val->title;

        $section_11_btn_text = $val->btn_text;

        $section_11_btn_url = $val->btn_url;

      }

      if ($val->type==12) {

        $section_12_title = $val->title;

      }

      ?>

    @endforeach

        </div>

    </div>



   

<!------- Our services start  ------->
<div class="ourservices_area p-8">
  <div class="shape1">
    <img src="{{ asset('/frontend/images/affterimg5.png') }}" alt="#">
  </div>
  <!-- <div class="shape2">{{ asset('/frontend/images/triangle-sm1.svg') }}
    <img src="images/affterimg5.png" alt="#">
  </div> -->
 <div class="container">
    @foreach($extra_data as $val)
      @if($val->type==3)
   <div class="d-flex justify-content-between">
    <div class="d-block">
      <h3><span><small class="text">{!!$val->sub_title!!}</small></span>{!!$val->title!!}</h3>
    </div>
    <p>{!!$val->body!!}</p>
   </div>
       @endif
    @endforeach

   <div class="owl-carousel service_carousel" id="servicecarousel">
     
<?php $count=$counter=0; ?>
    @foreach($extra_data as $val)
      @if($val->type==4)
     <div class="ourservices_box">
        <a href="#">
         <div class="ourservices_thumble d-flex">
           <!-- <img src="{{ asset('/frontend/images/servesimg2.jpg') }}" alt="#"> -->
           @if($val->image && File::exists(public_path('uploads/'.$val->image)) )<img src="{{ asset('/uploads/'.$val->image) }}" alt="">@endif

           <div class="overbox">
             <div class="icon" style="background-image: url({{ asset('/uploads/'.$val->image2)}})">
                 
             </div>
             <h4>{!!$val->title!!}</h4>
             <p>{!!$val->body!!}</p>
           </div>
         </div>
         </a>
       </div>
       @endif
    @endforeach
      

   </div>
 </div> 
</div>

    <!------- how it work start  ------->
<div class="howitwork_area p-8" style="background-image: url({{ asset('/frontend/images/bg2.jpg') }});">
  <div class="container">
    @foreach($extra_data as $val)
      @if($val->type==5)
     <h2><span><small>{!!$val->sub_title!!}</small></span>{!!$val->title!!}</h2>
     <div class="p">{!!$val->body!!}</div>
       @endif
    @endforeach


     <div class="row row-8 howitworktotalbox">

<?php $count=$counter=0; ?>
    @foreach($extra_data as $val)
      @if($val->type==6)
       <div class="col-lg-3 col-md-6 col-sm-6 howitwork d-flex flex-wrap align-content-stretch">
         <div class="howitwork_box">
           <div class="howitwork_icon" style="background-image: url({{ asset('/uploads/'.$val->image)}});"></div>
           <h4>{!!$val->title!!}</h4>
           <p>{!!$val->body!!}</p>
         </div>
       </div>
    @endif
    @endforeach
     </div>
  </div>
</div>

<!------- global reach start  ------->

<div class="globalreach_area">
  <div class="shape1">
    <img src="{{ asset('/frontend/images/affterimg4.png') }}" alt="#">
  </div>
  <div class="container">
    <div class="globalreach_box">
    @foreach($extra_data as $val)
      @if($val->type==7)
      <h2><span><small class="text">{!!$val->sub_title!!}</small></span>{!!$val->title!!}</h2>
        <div class="para">{!!$val->body!!}</div>
    @endif
    @endforeach

       <div class="maparea">
         <div class="row">
           <div class="col-lg-8">
            <div class="mappoint">
             <img src="{{ asset('/frontend/images/map1.png') }}" alt="">
             <div class="pointarea">
                <div class="circle north_america" target="1"></div>
                <div class="circle central_america" target="2" ></div>
                <div class="circle south_america" target="3"></div>
                <div class="circle middle_east" target="4"></div>
                <div class="circle africa" target="5"></div>
                <div class="circle asia" target="6"></div>
                <div class="circle oceania" target="7"></div>
             </div>
           </div>
           </div>
           <div class="col-lg-4">
             <div class="cuntry_box targetDiv active" id="div1">
               <h4>North America</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Canada.png') }}">Canada</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Jamaica.png') }}">Jamaica</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Mexico.png') }}">Mexico</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Puerto_Rico.png') }}">Puerto Rico</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/United_States_of_America.png') }}">United States</a></li>
                   
                  </ul>
               </div>
             </div>
             <div class="cuntry_box targetDiv" id="div2">
               <h4>central america</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Bahamas.png') }}">Bhamas</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Barbados.png') }}">Barbados</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Brazil.png') }}">Belize</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Bermuda.png') }}">Bermuda</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Cayman_Islands.png') }}">Cayman Island</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Costa_Rica.png') }}">Costa Rica</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Dominican_Republic.png') }}">Dominican Republic</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/El_Salvador.png') }}">El Salvador</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Grenada.png') }}">Grenada</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Guatemala.png') }}">Guatemala</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Honduras.png') }}">Honduras</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Nicaragua.png') }}">Nicaragua</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Panama.png') }}">Panama</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Trinidad_and_Tobago.png') }}">Trinidad and Tobago</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Saint_Lucia.png') }}">St Lucia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Saint_Vicent_and_the_Grenadines.png') }}">St. Vincent and the Grenadines</a></li>
                  </ul>
               </div>
             </div>
             <div class="cuntry_box targetDiv" id="div3">
               <h4>south america</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Argentina.png') }}">Argentina</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Bolivia.png') }}">Bolivia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Brazil.png') }}">Brasil</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Chile.png') }}">Chile</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Colombia.png') }}">Colombia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Ecuador.png') }}">Ecuador</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Guyana.png') }}">Guyana</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Paraguay.png') }}">Paraguay</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Peru.png') }}">Peru</a></li>
                  </ul>
               </div>
             </div>
             <div class="cuntry_box targetDiv" id="div3">
               <h4>south america</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Argentina.png') }}">Argentina</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Bolivia.png') }}">Bolivia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Brazil.png') }}">Brasil</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Chile.png') }}">Chile</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Colombia.png') }}">Colombia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Ecuador.png') }}">Ecuador</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Guyana.png') }}">Guyana</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Paraguay.png') }}">Paraguay</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Peru.png') }}">Peru</a></li>
                  </ul>
               </div>
             </div>
             <div class="cuntry_box targetDiv" id="div4">
               <h4>middle east</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Afghanistan.png') }}">Afghanistan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Azerbaijan.png') }}">Azerbaijan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Bahrain.png') }}">Bahrain</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Georgia.png') }}">Georgia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Israel.png') }}">Israel</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Jordan.png') }}">Jordan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Kazakhstan.png') }}">Kazakhstan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Kuwait.png') }}">Kuwait</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Kyrgyzstan.png') }}">Kyrgyzstan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Lebanon.png') }}">Lebanon</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Oman.png') }}">Oman</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Palestine.png') }}">Palestine</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Pakistan.png') }}">Pakistan</a></li>
                  </ul>
               </div>
             </div>
             <div class="cuntry_box targetDiv" id="div5">
               <h4>africa</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Algeria.png') }}">Algeria</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Angola.png') }}">Angola</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Benin.png') }}">Benin</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Botswana.png') }}">Botswana</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Burkina_Faso.png') }}">Burkina Faso</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Burundi.png') }}">Burundi</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Cameroon.png') }}">Cameroon</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Central_African_Republic.png') }}">Central Africa Republic</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Chad.png') }}">Chad</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Democratic_Republic_of_the_Congo.png') }}">Dem. Rep. of Congo</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Egypt.png') }}">Egypt</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Equatorial_Guinea.png') }}">Equatorial Guinea</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Eritrea.png') }}">Eritrea</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Ethiopia.png') }}">Ethiopia</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Gabon.png') }}">Gabon</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Ghana.png') }}">Ghana</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Guinea.png') }}">Guinea Conakry</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Ivory_coast.png') }}">Ivory Coast</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Kenya.png') }}">Kenya</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Lesotho.png') }}">Lesotho</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Liberia.png') }}">Liberia</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Malawi.png') }}">Malawi</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Mali.png') }}">Mali</a></li>
                     <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Mauritania.png') }}">Mauritania</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Mauritius.png') }}">Mauritius</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Morocco.png') }}">Morocco</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Mozambique.png') }}">Mozambique</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Namibia.png') }}">Nambia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Niger.png') }}">Niger</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Nigeria.png') }}">Nigeria</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Senegal.png') }}">Senegal</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Seychelles.png') }}">Seychelles</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Sierra_Leone.png') }}">Sierra Leone</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/South_Africa.png') }}">South Africa</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Sudan.png') }}">Sudan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Swaziland.png') }}">Swaziland</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Tanzania.png') }}">Tanzania</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Togo.png') }}">Togo</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Tunisia.png') }}">Tunisia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Uganda.png') }}">Uganda</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Zambia.png') }}">Zambia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Zimbabwe.png') }}">Zimbabwe</a></li>
                  </ul>
               </div>
             </div>

             <div class="cuntry_box targetDiv" id="div6">
               <h4>ASIA</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Bangladesh.png') }}">Bangladesh</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Brunei.png') }}">Brunei</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Cambodia.png') }}">Cambodia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/China.png') }}">China</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Hong_Kong.png') }}">Hong Kong</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/India.png') }}">India</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Indonesia.png') }}">Indonesia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Japan.png') }}">Japan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Malaysia.png') }}">Malaysia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Maldives.png') }}">Maldives</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Mongolia.png') }}">Mongolia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Myanmar.png') }}">Myanmar</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Philippines.png') }}">Philippines</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Singapore.png') }}">Singapore</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/South_Korea.png') }}">South Korea</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Sri_Lanka.png') }}">Sri Lanka</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Taiwan.png') }}">Taiwan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Thailand.png') }}">Thailand</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Uzbekistan.png') }}">Uzbekistan</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Vietnam.png') }}">Vietnam</a></li>
                  </ul>
               </div>
             </div>

             <div class="cuntry_box targetDiv" id="div7">
               <h4>oceania</h4>
               <p>View Our Full Coverage</p>

               <div class="cuntry_listbox">
                  <ul>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Australia.png') }}">Australia</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Fiji.png') }}">Fiji</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Guam.png') }}">Guam</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/New_Zealand.png') }}">New Zealanad</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Papua_New_Guinea.png') }}">Papua New Guinea</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/Samoa.png') }}">Samoa</a></li>
                    <li><a href=""><img src="{{ asset('/frontend/assets/img/country/New-Caledonia.png') }}">New Caledonia</a></li>
                    
                  </ul>
               </div>
             </div>
             </div>

         </div>
       </div>
    </div>
  </div>
</div>


<!------- What we do start  ------->

<div class="Whatwedo_area p-8">
  <div class="container">
    @foreach($extra_data as $val)
      @if($val->type==8)
      <h2><span><small class="text">{!!$val->sub_title!!}</small></span>{!!$val->title!!}</h2>{!!$val->body!!}
    @endif
    @endforeach
<?php $count=$counter=0; ?>
    @foreach($extra_data as $val)
      @if($val->type==9)
      @if($count % 2 == 0)
   <div class="Whatwedo_box row">
     <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
         <div class="Whatwedo_thumble d-flex">
           <img src="{{ asset('/uploads/'.$val->image)}}">
           <div class="triangle">
             <img src="{{ asset('/frontend/images/bg2.png') }}" alt="#">
           </div>
         </div>
       </div>
       <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
         <div class="Whatwedo_textbox">
          <span class="text">{!! $val->sub_title!!}</span>
           <h3>{!! $val->title!!}</h3>
           <p>{!!$val->body!!}</p>
         </div>
       </div>
   </div>
    @else

   <div class="Whatwedo_box row">
     <div class="col-lg-6 col-md-6 Whatwedoimg d-flex flex-wrap align-content-stretch">
         <div class="Whatwedo_thumble d-flex">
           <img src="{{ asset('/uploads/'.$val->image)}}">
           <div class="triangle">
             <img src="{{ asset('/frontend/images/bg2.png') }}" alt="#">
           </div>
         </div>
       </div>
       <div class="col-lg-6 col-md-6 Whatwedocontent d-flex flex-wrap align-content-stretch align-items-center">
         <div class="Whatwedo_textbox">
          <span class="text">{!! $val->sub_title!!}</span>
           <h3>{!!$val->title!!}</h3>
           <p>{!!$val->body!!}</p>
         </div>
       </div>
   </div>
    @endif
    @endif

    @endforeach


  
  </div>
</div>
 

    @foreach($extra_data as $val)
      @if($val->type==10)
<!------- Why Work with Us start  ------->
<div class="Workwithus_area p-8">
  <div class="container">
    <div class="Workwithus_box" style="background-image: url({{ asset('/uploads/'.$val->image)}});">
      <div class="Workwithus_innerbox">
        <h3>{!!$val->title!!}</h3>
        <h4>{!!$val->sub_title!!}</h4>
        {!!$val->body!!}
      </div>
    </div>
  </div>
</div>
    @endif
    @endforeach

    @foreach($extra_data as $val)
      @if($val->type==11)
<!------- add area start  ------->
<div class="add_area" style="background-image: url({{ asset('/frontend/images/bg1.jpg') }});">
  <div class="container">
    <h2>{!!$val->title!!}</h2>
     @if($val->btn_url)<a href="{!!$val->btn_url!!}" class="btn btn-custom mt-4">{!!$val->btn_text!!}</a>@endif
  </div>
</div>
    @endif
    @endforeach


@if($testimonials->count() > 0)
<!------- Clients Say start ------->
  <div class="clientsay_area p-8">
    <div class="container">
      <div class="shape1"><img src="{{ asset('/frontend/images/clientshape1.png') }}"></div>
      <div class="shape2"><img src="{{ asset('/frontend/images/clientshape2.png') }}"></div>
      <div class="shape3"><img src="{{ asset('/frontend/images/clientshape3.png') }}"></div>

      <div class="row">
        <div class="col-lg-5 col-md-6">
         <div class="clientsay_thumble">
           <img src="{{ asset('/frontend/images/clientbg.png') }}">
         </div> 
        </div>
         <div class="col-lg-7 col-md-6">
          <div class="client_rightbox">
    @foreach($extra_data as $val)
      @if($val->type==12)
             <h3><span><small class="text">{!!$val->sub_title!!}</small></span>{!!$val->title!!}</h3>
    @endif
    @endforeach
             <div class="owl-carousel client-carousel" id="clientslider">
    @foreach($testimonials as $val)
                <div class="clientbox">

                    {!!$val->body!!}
                    <div class="name">{!!$val->name!!}<small>{!!$val->designation!!}</small></div>
                </div>
    @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!------- Clients Say stop ------->
@endif

@section('more-scripts')

<script>
$(document).ready(function() { 
});
</script>
@stop

@include('frontend.footer')

