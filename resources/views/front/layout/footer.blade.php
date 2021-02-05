<footer class="text-center">
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <div class="box-tob">
                        <img class="footer-logo" src="{{asset('assests/front/images/logo2.png')}}">
                        <p>
                            @if($settings){{$settings->Description_on_footer}}           @endif             </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tob">
                        <ul class="footer-liks">
                            <li>
                                <p></p>
                            </li>
                            <li>
                                <a href="#index">@lang('footer.home')</a>
                            </li>
                              <li>
                                <a href="#about">@lang('footer.about us')</a>
                            </li>
                              <li>
                                <a href="#our-work">@lang('footer.services')</a>
                            </li>
                               <li>
                                <a href="#supports">@lang('footer.contact us')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tob ">
{{--                        <h5 class="footer-title text-center">@lang('footer.contact us on social media')</h5>--}}
{{--                        <div class="row" >--}}
{{--                            <div class="col-md-12">--}}
{{--                                <a class="social-icons" target="_blank" href="@if($settings){{$settings->facebook_link}}@endif">--}}
{{--                                    <i class="fab fa-facebook-f fa-2x"></i>--}}
{{--                                </a>--}}
{{--                                <a class="social-icons" target="_blank" href="@if($settings){{$settings->twitter_link}}@endif">--}}
{{--                                    <i class="fab fa-twitter fa-3x"></i>--}}
{{--                                </a>--}}
{{--                                <a class="social-icons" target="_blank" href="@if($settings){{$settings->insta_link}}@endif">--}}
{{--                                  <i class="fab fa-instagram fa-3x"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="clearfix"></div>
                        <div class="row">
                            <dov class="col-md-12">
                                <h4 style="color:#d3c6c6; margin-bottom: 20px">فروعنا</h4>
                                <div class="row">
                                    <div class="col-md-3"><i style="color: #007bff" class="fa fa-map-marker"></i></div>
                                    <div class="col-md-9">
                                        <p class="text-right">
                                          مؤسسة فنون البرمجة لتقنية نظم المعلومات
                                          جازان، حي المطار، شارع المطار بجوار مكتبة الهندسة
                                      </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <i style="color: #007bff"  class="fa fa-phone"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="text-right">
                                          0555299782
                                      </p>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3"><i style="color: #007bff" class="fa fa-map-marker"></i></div>
                                    <div class="col-md-9">
                                      <p class="text-right">
                                          القاهرة، 114 زهراء مدينة نصر، القاهرة
                                      </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <i style="color: #007bff"  class="fa fa-phone"></i>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="text-right">
                                            01000900534
                                        </p>
                                    </div>
                                </div>
                            </dov>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <p class="text-center">
        @lang('footer.all rights are save') &copy;  Devest
    </p>
</footer>
<script src="{{asset('assests/front/js/particles.min.js')}}"></script>
<script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', '{{asset('assests/front/js/particles.json')}}', function() {
        console.log('callback - particles.js config loaded');
    });
</script>