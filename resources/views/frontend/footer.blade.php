@php
$footer_menu_page = get_fields_value_where('pages',"(display_in='2' or display_in='3') and posttype='page'",'menu_order','asc');
$footer_menu_service = get_fields_value_where('pages',"(display_in='2' or display_in='3') and posttype='service'",'menu_order','asc');
@endphp

    <!------- footer main area start ------->
    <footer class="footer_main_area" style="background-image: url({{asset('/frontend/images/footerbg.jpg')}});">
      <div class="footer_body" >
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
               <div class="row">
                <div class="col-lg-6">
                  <div class="footer_box">
                   <div class="footerlogo">
                     <a href="{{ url('/') }}"><img src="{!! ( config('site.footer_logo') && File::exists(public_path('uploads/'.config('site.footer_logo'))) ) ? asset('/uploads/'.config('site.footer_logo')) : asset('/frontend/images/logofooter.png') !!}" alt=""></a>
                   </div>
                   <div class="socallink">
                     <ul>
                      @if(config('site.facebook_link'))<li><a href="{!!config('site.facebook_link')!!}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>@endif
                      @if(config('site.twitter_link'))<li><a href="{!!config('site.twitter_link')!!}" target="_blank"><i class="fab fa-twitter"></i></a></li>@endif
                      @if(config('site.instagram_link'))<li><a href="{!!config('site.instagram_link')!!}" target="_blank"><i class="fab fa-instagram"></i></a></li>@endif
                      @if(config('site.youtube_link'))<li><a href="{!!config('site.youtube_link')!!}" target="_blank"><i class="fab fa-youtube"></i></a></li>@endif
                     </ul>
                   </div>
                  </div>
                </div>
                <div class="col-lg-6">
                   <div class="footer_box">
                    @if(config('site.footer2_title'))<h3>{!!config('site.footer2_title')!!}Quick <span>Links</span></h3>@endif
                    <ul class="footer-link">
                      @foreach($footer_menu_page as $menu)
                      <?php
                      $slug = $menu->slug;
                      if ($menu->menu_link>0) {
                        $slug = get_field_value('pages',"slug",'id',$menu->menu_link);
                      }
                      $slug = ($menu->id==1) ? '' : $slug ;
                      ?>
                      <li><a href="{{url('/'.$slug)}}"><i class="fas fa-angle-double-right"></i>{!!$menu->page_name!!}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="row">
                <div class="col-lg-7">
                   <div class="footer_box">
                    @if(config('site.footer3_title'))<h3>{!!config('site.footer3_title')!!}Our <span>Services</span></h3>@endif
                    <ul class="footer-link">
                      @foreach($footer_menu_service as $menu)
                      <?php
                      $slug = $menu->slug;
                      if ($menu->menu_link>0) {
                        $slug = get_field_value('pages',"slug",'id',$menu->menu_link);
                      }
                      $slug = ($menu->id==1) ? '' : $slug ;
                      ?>
                      <li><a href="{{url('/'.$slug)}}"><i class="fas fa-angle-double-right"></i>{!!$menu->page_name!!}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="footer_box">
                    @if(config('site.footer4_title'))<h3>{!!config('site.footer4_title')!!}Contact <span>Us</span></h3>@endif
                    <div class="footer_address">
                      <h4>Location :</h4>
                      <p>{!!nl2br(config('site.address'))!!}</p>
                    </div>
                    <div class="footer_address">
                      <h4>Phone :</h4>
                      <a href="tel:{!!preg_replace('/\D+/', '', config('site.phone'))!!}">{!!config('site.phone')!!}</a>
                    </div>
                    <div class="footer_address">
                      <h4>Email :</h4>
                      <a href="mailto:{!!config('site.email')!!}">{!!config('site.email')!!}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_area">
        <div class="container">
          <p>Copyright © {{ date('Y') }} <a href="{{ url('/') }}">{!!config('site.title')!!}.</a> | All rights reserved </p>
        </div>
      </div>
    </footer>
    <!------- footer main area stop ------->



<div id="loading"><div class="loader"></div></div>

<!-- Alert Message Modal -->
<div class="modal" id="alertMessage" tabindex="-1" role="dialog" aria-labelledby="alertMessage" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content" style="max-width: 610px;">
      <div class="modal-body">
        <h5 class="modal-title title">Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <div class="clearfix"></div>
        <div class="content"></div>
      </div>
    </div>
  </div>
</div>

<!-- Confirm Modal -->
<div id="deleteModal" class="modal" role="dialog">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">      
      <div class="modal-body">
        <h4 class="title"></h4>   
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <div class="clearfix"></div>
        <div class="content text-center">
          
        </div>
        <div class="modal-footer">
          <button class="btn btnTxt" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <a class="btn" id="dataConfirmOK">Delete</a>
        </div>
      </div>      
    </div>
  </div>
</div>


<script src="{{ asset("/frontend/js/jquery.min.js") }}"></script>
<script src="{{ asset("/frontend/js/popper.min.js") }}"></script>
<script src="{{ asset("/frontend/js/bootstrap.min.js") }}"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>

<script src="{{ asset("/frontend/js/jquery.extra.js") }}"></script>
<!-- <script src='{{ asset("/frontend/js/tippy.all.min.js") }}' id='tippy-js'></script> -->
<!-- <script src="{{ asset("/frontend/js/map.js") }}"></script> -->

<script>
jQuery(function(){        
  jQuery('.circle').click(function(){
    jQuery('.targetDiv').hide();
    $('.targetDiv').addClass('active');
    jQuery('#div'+$(this).attr('target')).show();
  });
});
</script>

<!-- Validation JS -->
<script src="{{ asset("/frontend/js/jquery.validationEngine.min.js") }}"></script>
<script src="{{ asset("/frontend/js/jquery.validationEngine-en.js") }}"></script>
<script>
  function customvalidation()
  {
    jQuery(".customvalidation").validationEngine('attach', {
      relative: true,
      overflownDIV:"#divOverflown",
      promptPosition:"topLeft"
    });
    jQuery(".customvalidation_bottom").validationEngine('attach', {
      relative: true,
      overflownDIV:"#divOverflown",
      promptPosition:"bottomLeft"
    });
  }
  customvalidation();

  var confirmModal = function(){
    $('#deleteModal .modal-body .content').html($(this).attr('data-confirm'));
    $('#deleteModal .title').html($(this).attr('data-title'));
    $('#dataConfirmOK').attr('href',$(this).attr('href'));
    $('#deleteModal').modal('show');
    return false;
  };

  $('body').on('click', 'a[data-confirm]', confirmModal);
//alert('eee');
// $("#alertMessage").modal('show');
</script>

@if(Session::has('message')) 
<script>
 $(window).on('load', function () {

    $("#alertMessage .title").hide();
    $("#alertMessage .content").empty().html('{!! Session::get('message')!!}');
    // $("#alertMessage").fadeIn();
    $("#alertMessage").modal('show');
    setTimeout(function() { $('#alertMessage').fadeOut(); }, {!! config('site.message_show_time')*1000 !!});
  });
</script>
@endif


@yield('more-scripts')

</body>
</html>