@include('header')
<!-- GetButton.io widget -->
- <script type="text/javascript">
    (function () {
        var options = {
            facebook: "https://www.facebook.com/abbas.n.alashkar", // Facebook page ID
            whatsapp: "+963993529246", // WhatsApp number
            call_to_action: "تواصلوا معنا", // Call to action
            button_color: "#E74339", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<!-- Slider main container-->
@if($ban['data'] != null  )

<div class=" home-slider1 home-slider swiper-container home-slider  " >
    <!-- Additional required wrapper-->
    <div class=" swiper-wrapper">
        <!-- Slides-->
        @foreach($ban['data'] as $x)
        <div class=" swiper-slide bg-cover bg-cover-right"
           style="background-image: url('http://deepblue-001-site1.gtempurl.com/{{$x['path']}}'); ">
           <div class="container-fluid px-lg-6 px-xl-7 h-100">
               <div class="row h-100 align-items-center" data-swiper-parallax="-500">
                   <!-- <div class="col-lg-12">
                       <a class="btn  btn-light">{{$x['text']}}</a>
                   </div>-->
               </div>
           </div>
       </div>
       @endforeach


    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-nav d-none d-lg-block">
        <div class="swiper-button-prev" id="homePrev"></div>
        <div class="swiper-button-next" id="homeNext"></div>
    </div>
</div>
@else
<div class="mt-6"></div>

@endif



<!-- Categories big-->
<div class=" position-relative">
    <div class="container py-6">
        <div class="row">
            <div class="col-sm-6 mb-5 mb-sm-0">

                <div class="  card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center">
                    <img class=" card-img img-scale" src="{{asset('assets/img/las/hlol3.png')}}" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h3 class="ar1 display-3 font-weight-bold mb-0"
                            style="color:white"; >
                          غسيل سجاد
                        </h3><a class="stretched-link"
                                href="{{url('/')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-5 mb-sm-0">
                <div class="card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center">
                    <img class="  card-img img-scale" src="{{asset('assets/img/las/hlol4.png')}}" alt="Card image">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="ar1 display-3 font-weight-bold mb-0"> غسيل مفروشات </h2><a class="stretched-link"
         href="{{url('/')}}"></a>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div  class="container-fluid container-fluid-px py-6">
    <div class="row">
        <div class="col-lg-10 col-xl-8 text-center mx-auto">
            <h2 class="ar1 display-3 mb-5">  خدمات حلول الغد </h2>
            <hr>

        </div>
    </div>
  <!--  <div  class="ar row justify-content-between align-items-center mb-4">
        <div class="col-12 col-sm">
              <select class="ar1 selcet1 selectpicker" name="sort" id="form_sort" data-style="btn-selectpicker border-1" title="">
                 <option class="ar" value="sortBy_0">جميع المتجات </option>
                 <option class="ar" value="sortBy_1"> الأحذية  </option>
                 <option class="ar" value="sortBy_2"> الحقائب</option>

              </select>
              <span class="ar d-inline-block mr-2"> فرز حسب</span>

         </div>
     </div>-->
    <div dir="rtl" class=" ">
        <div class="row">
            @foreach($coll['data'] as $x)
             <!-- product-->
             {{-- من هون المسافة يلي تحت كلمة السعر ورقم الموديل  --}}
            <div dir="rtl" class="col-xl-4 col-lg-3 col-md-4 col-sm-12 mb-6">

                {{-- <div class="  hm-zoom card card-scale shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center "> --}}
                <div class="product" data-aos="zoom-in" >
                    <div class="product-image mr-3">
                        <div class="text-dark font-weight-blod badge10 ar product-badge badge badge-secondary">{{$x['isNew'] ? 'جديـد' : '' }}</div>
                        <div class="product-swap-image">
                        <a href="{{url('sinp' , ['id'=>$x['id']])}}">
                            <div class="  card card-scale  hm-zoom hoverable shadow-0 border-0 text-white text-hover-gray-900 overlay-hover-light text-center ">

                            <img class=" card card-scale img-fluid product-swap-image-front "
                                src="{{asset('assets/img/las/hlolo.png')}}" alt="product" />
                                <img class="img-fluid card card-scale hm-zoom" src="{{asset('assets/img/las/hlolo.png')}}"
                                alt="product" /></a>
                        </div>
                        </a>
                    </div>
                        <div class="product-hover-overlay hm-zoom"><a class="text-dark text-sm" href="#">
                                <svg class="svg-icon   ">
                                    <use xlink:href="#retail-bag-1"> </use>
                                </svg>
                            </a>
                            <div>

                                <a class="text-dark text-hover-primary text-decoration-none" href="#"
                                    data-toggle="modal" data-target="#{{$x['id']}}">
                                    <svg class="svg-icon svg-icon-heavy">test
                                        <use xlink:href="#expand-1"> </use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative font-weight-blod  " style="margin-bottom: 25px;";>
                        <div class="row">
                        <div class="dropdown1 mr-4 mb-1 pr-1">
                            <button class=" dropdown1 btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                للاستفسار

                                <i class="fa fa-whatsapp" style="font-size:20px"></i>
                            </button>

                            <div class="dropdown-menu mr-4" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item mr-3" href="#"> <a href=" https://wa.me/963993529246/?text=ممكن استفسر عن هذا المنتج {{asset('assets/img/las/6.jpg')}} "style="color:gray"; >فرع مكة</a></a>
                                <a class="dropdown-item mr-3" href="#"><a href="https://wa.me/963993529246/?text=ممكن استفسر عن هذا المنتج{{asset('assets/img/las/6.jpg')}}"style="color:gray"; >فرع الرياض </a></a>
                                <a class="dropdown-item mr-3" href="#"><a href="https://wa.me/963993529246/?text=ممكن استفسر عن هذا المنتج {{asset('assets/img/las/6.jpg')}}"style="color:gray"; >فرع الدمام </a></a>
                                <a class="dropdown-item mr-3" href="#"> <a href="https://wa.me/963993529246/?text=ممكن استفسر عن هذا المنتج {{asset('assets/img/las/6.jpg')}}"style="color:gray"; >فرع جدة  </a></a>
                            </div>


                          </div>

                          <div class="dropdown1  mb-1 pr-5">
                            <button class=" dropdown1 btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                اطلبها أون لاين

                                <i class="fa fa-whatsapp" style="font-size:20px"></i>
                            </button>

                            <div class="dropdown-menu mr-3" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item mr-3" href="#"> <a href=" https://wa.me/963993529246/?text=ممكن اطلب  هذا المنتج{{asset('assets/img/las/6.jpg')}}"style="color:gray"; >خدمة الشحن</a></a>
                    <a class="dropdown-item mr-3" href="#"><a href="https://wa.me/963993529246/?text=ممكن اطلب  هذا المنتج {{asset('assets/img/las/6.jpg')}}"style="color:gray"; >خدمة التوصيل  </a></a>

                            </div>


                          </div>
                        </div>

                          <h3 class="text-base mb-1 mr-3"><span class="name ar text-center text-dark"
                                 ">اسم المنتج :
                                 <span class="text-gray-500" >{{$x['name']}}</span> </h3>
                                 <h3 class="text-base mb-1 mr-3"><span class="name ar text-center text-dark"
                                    ">رقم المنتج  :
                                    <span class="text-gray-500" >{{$x['name']}}</span> </h3>
                         @if($x['offerPrice'] != 0 )
                         <span class="offer1 font-weight-blod ar1  mr-3 mb-3">  السعر </span> <del> <span class=" font-weight-blod ar text-gray-500 del ">{{$x['price']}}ل.س</span><br></del>
                         <span class=" font-weight-bold ar text-gray-500  mr-3"><span class="offer"> عرض خاص </span>{{$x['offerPrice']}} ل.س</span>
                         @else

                         <span class=" font-weight-bold ar text-gray-500  mr-3"><span class="offer1">  السعر   </span>{{$x['price']}} ل.س</span>
                         @endif
                         {{-- <hr style =" border: 0.2px solid #b05f6d;"> --}}

                     </div>
                </div>
            </div>


            <div class="modal fade quickview" id="{{$x['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close close-absolute close-rotate" type="button" data-dismiss="modal"
                            aria-label="Close">
                            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                                <use xlink:href="#close-1"> </use>
                            </svg>
                        </button>
                        <div class="modal-body quickview-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-carousel">
                                        <div class="product-badge badge badge-primary">Fresh</div>
                                        <div class="product-badge badge badge-dark">Sale</div>
                                        <div class="swiper-container quickview-slider" id="quickView">
                                            <!-- Additional required wrapper-->
                                            <div class="swiper-wrapper">
                                                <!-- Slides-->
                                                <div class="swiper-slide"><img class="img-fluid"
                                                        src="{{asset('assets/img/las/6.jpg')}}"
                                                        alt="--"></div>

                                            </div>
                                        </div>
                                        <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                                            <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img
                                                    class="img-fluid"
                                                    src="{{asset('assets/img/las/6.jpg')}}"
                                                    alt="Modern Jacket 0"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-lg-5">
                                    <h2 class="mb-4 mt-4 mt-lg-1">{{$x['name']}}</h2>
                                    <div
                                        class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                                        <ul class="list-inline mb-2 mb-sm-0">
                                            @if($x['offerPrice'] != 0 )

                                            <del>
                                                <li class="ar list-inline-item h4 font-weight-light mb-0 del">
                                                    {{$x['price']}}ل.س</li><br>
                                            </del>
                                            <li class="ar list-inline-item h4 font-weight-light mb-0">
                                                {{$x['offerPrice']}}ل.س</li>
                                            @else
                                            <li class="ar list-inline-item h4 font-weight-light mb-0">{{$x['price']}}ل.س
                                            </li>
                                            @endif

                                        </ul>
                                        <div class="d-flex align-items-center text-sm">
                                            <ul class="list-inline mr-2 mb-0">
                                                <li class="list-inline-item mr-0"><i
                                                        class="fa fa-star text-primary"></i></li>
                                                <li class="list-inline-item mr-0"><i
                                                        class="fa fa-star text-primary"></i></li>
                                                <li class="list-inline-item mr-0"><i
                                                        class="fa fa-star text-primary"></i></li>
                                                <li class="list-inline-item mr-0"><i
                                                        class="fa fa-star text-primary"></i></li>
                                                <li class="list-inline-item mr-0"><i
                                                        class="fa fa-star text-gray-300"></i></li>
                                            </ul><span class="text-muted text-uppercase">25 reviews</span>
                                        </div>
                                    </div>
                                    <form id="buyForm_modal" action="#">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-12 detail-option mb-5">
                                                <label class="btn btn-sm btn-outline-primary detail-option-btn-label"
                                                    for="material_1_modal"> {{$x['isNew'] ? 'isNew' : '' }}
                                                    <input class="input-invisible" type="radio" name="material"
                                                        value="value_1" id="material_1_modal" required>
                                                </label>

                                                <label class="btn btn-sm btn-outline-primary detail-option-btn-label"
                                                    for="material_1_modal">
                                                    {{$x['hasOffer'] ? 'hasOffer' : 'Without OFFer ' }}
                                                    <input class="input-invisible" type="radio" name="material"
                                                        value="value_1" id="material_1_modal" required>
                                                </label>


                                                <label class="btn btn-sm btn-outline-primary detail-option-btn-label"
                                                    for="material_1_modal">
                                                    {{$x['isAvailable'] ? 'isAvailable' : 'NotAvailable' }}
                                                    <input class="input-invisible" type="radio" name="material"
                                                        value="value_1" id="material_1_modal" required>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-6 text-right">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-2"><a
                                                            class="text-dark text-hover-primary" href="#"><i
                                                                class="fab fa-facebook-f"> </i></a></li>
                                                    <li class="list-inline-item"><a class="text-dark text-hover-primary"
                                                            href="#"><i class="fab fa-twitter"> </i></a></li>
                                                </ul>

                                                <ul class="ar list-unstyled">
                                                    <li><strong>التصنيف:</strong> <a class="text-muted"
                                                            href="#">{{$x['category']['name']}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- /product   -->
        </div>
    </div>

    <!-- Brands Section-->



</div>
</div>



    @include('footer')
