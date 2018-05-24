<div class="thongtin-title">Thông tin doanh nghiệp</div>
<div class="thongtin-content">
    <script type="text/javascript" src="jquery-slider-master/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="jquery-slider-master/js/jssor.core.js"></script>
    <script type="text/javascript" src="jquery-slider-master/js/jssor.utils.js"></script>
    <script type="text/javascript" src="jquery-slider-master/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,
                $AutoPlaySteps: 4,                                  
                $AutoPlayInterval: 4000,
                $PauseOnHover: 1,
                $ArrowKeyNavigation: true,
                $SlideDuration: 300,  
                $MinDragOffsetToSlide: 20,
                $SlideWidth: 200,
                $SlideSpacing: 3,
                $DisplayPieces: 4, 
                $ParkingPosition: 0, 
                $UISearchMode: 1, 
                $PlayOrientation: 1, 
                $DragOrientation: 1,
                $BulletNavigatorOptions: { 
                    $Class: $JssorBulletNavigator$,
                    $ChanceToShow: 0,            
                    $AutoCenter: 0,       
                    $Steps: 1,
                    $Lanes: 1, 
                    $SpacingX: 0,
                    $SpacingY: 0, 
                    $Orientation: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$, 
                    $ChanceToShow: 1,         
                    $AutoCenter: 2,   
                    $Steps: 4  
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();
            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }
        });
    </script>
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1000px; height: 150px; overflow: hidden;">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(jquery-slider-master/img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px; height: 150px; overflow: hidden;">
            @foreach($adverbottom as $at)
                <div><a href="{{$at->url}}"><img u="image" src="upload/quangcao/{{$at->urlImage}}" /></a></div>
            @endforeach
            
        </div>
        <style>
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
            {
                background: url(jquery-slider-master/img/b03.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 4px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 21px; height: 21px; text-align:center; line-height:21px; color:white; font-size:12px;">
                <NumberTemplate></NumberTemplate>
            </div>
        </div>
        <style>
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
                position: absolute;
                cursor: pointer;
                display: block;
                background: url(jquery-slider-master/img/a03.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -3px -33px; }
            .jssora03r { background-position: -63px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">javascript</a>
    </div>
</div>