@php
$title = 'Home';
@endphp
@extends('layouts.fontend')
@section('main_content')
    <section>
        <div class="w-100">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="notgeneric125"
                data-source="gallery" style="background-color:transparent;padding:0px;">
                <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="{{ asset('assets') }}/images/resources/slide-bg2.jpg" alt="Slide Background 2"
                                class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption img-layer img-layer tp-resizeme rs-parallaxlevel-1" id="slide2-layer-1"
                                data-x="['right','right','right','right']" data-hoffset="['-170','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['90','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                <img height="450" width="779" src="{{ asset('assets') }}/images/slide2-shp1.png"
                                    alt="Slide 2 Shape 1">
                            </div>

                            <!-- Layer NR. 2 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1" id="slide2-layer-2"
                                data-x="['right','right','right','right']" data-hoffset="['20','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['90','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                <img height="236" width="415" src="{{ asset('assets') }}/images/slide2-shp2.png"
                                    alt="Slide 2 Shape 2">
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide2-layer-3"
                                data-x="['right','right','right','right']" data-hoffset="['60','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['150','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 4;"><img height="73" width="35"
                                    src="{{ asset('assets') }}/images/slide2-mckp1.png" alt="Slide 2 Mockup 1">
                            </div>

                            <!-- Layer NR. 4 -->
                            <div class="tp-caption img-layer tp-resizeme" id="slide2-layer-4"
                                data-x="['right','right','right','right']" data-hoffset="['100','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-20','80','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="82" width="41"
                                    src="{{ asset('assets') }}/images/slide2-mckp2.png" alt="Slide 2 Mockup 2">
                            </div>

                            <!-- Layer NR. 5 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide2-layer-5"
                                data-x="['right','right','right','right']" data-hoffset="['256','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-22','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="92" width="43"
                                    src="{{ asset('assets') }}/images/slide2-mckp3.png" alt="Slide 2 Mockup 3">
                            </div>

                            <!-- Layer NR. 6 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1" id="slide2-layer-6"
                                data-x="['right','right','right','right']" data-hoffset="['160','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="100" width="45"
                                    src="{{ asset('assets') }}/images/slide2-mckp4.png" alt="Slide 2 Mockup 4">
                            </div>

                            <!-- Layer NR. 7 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide2-layer-7"
                                data-x="['right','right','right','right']" data-hoffset="['110','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['130','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="216" width="57"
                                    src="{{ asset('assets') }}/images/slide2-mckp5.png" alt="Slide 2 Mockup 5">
                            </div>

                            <!-- Layer NR. 8 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide2-layer-8"
                                data-x="['right','right','right','right']" data-hoffset="['-135','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['270','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="322" width="230"
                                    src="{{ asset('assets') }}/images/slide2-mckp6.png" alt="Slide 2 Mockup 6">
                            </div>

                            <!-- Layer NR. 9 -->
                            <div class="tp-caption img-layer tp-resizeme" id="slide2-layer-9"
                                data-x="['right','right','right','right']" data-hoffset="['-70','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['65','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 2;"><img height="256" width="352"
                                    src="{{ asset('assets') }}/images/slide2-mckp7.png" alt="Slide 2 Mockup 7">
                            </div>

                            <!-- Layer NR. 10 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide2-layer-10"
                                data-x="['right','right','right','right']" data-hoffset="['130','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-65','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                <img height="389" width="256" src="{{ asset('assets') }}/images/slide2-mckp8.png"
                                    alt="Slide 2 Mockup 8">
                            </div>

                            <!-- Layer NR. 11 -->
                            <div class="tp-caption tp-resizeme" id="slide2-layer-11"
                                data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                data-fontsize="['50','45','40','35']" data-lineheight="['60','55','50','45']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#3e4a59;">
                                আপনাকে Welkin Moon <br> Company Website<br> এ স্বাগতম...!!
                            </div>

                            <!-- Layer NR. 12 -->
                            <div class="tp-caption" id="slide2-layer-12" data-x="['left','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['40','40','40','30']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #3e4a59;opacity: .8;">
                                বেকারত্বের চিন্তা দূর করে অনলাইনে সুনিশ্চিত ক্যারিয়ার গড়
                            </div>

                            <!-- Layer NR. 13 -->
                            <div class="tp-caption rev-btn thm-btn" id="slide2-layer-13"
                                data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "about.html"}]'
                                data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[20,17,14,12]"
                                data-paddingright="[55,40,35,30]" data-paddingbottom="[20,17,14,12]"
                                data-paddingleft="[55,40,35,30]"
                                style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                বিস্তারিত
                            </div>
                        </li>
                        <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-title="Slide Title" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"
                            data-fstransition="random" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <img src="{{ asset('assets') }}/images/resources/slide-bg3.png" alt="Slide Background 3"
                                class="rev-slidebg img-fluid" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat">

                            <!-- Layer NR. 1 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1" id="slide3-layer-1"
                                data-x="['right','right','right','right']" data-hoffset="['-90','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                <img height="700" width="760" src="{{ asset('assets') }}/images/slide3-shp1.png"
                                    alt="Slide 3 Shape 1">
                            </div>
                            <!-- Layer NR. 2 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide3-layer-2"
                                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['30','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;"><img height="367" width="367"
                                    src="{{ asset('assets') }}/images/slide3-mckp1.png" alt="Slide 3 Mockup 1">
                            </div>

                            <!-- Layer NR. 3 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide3-layer-3"
                                data-x="['right','right','right','right']" data-hoffset="['20','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['100','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:0;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="379" width="534"
                                    src="{{ asset('assets') }}/images/slide3-mckp2.png" alt="Slide 3 Mockup 2">
                            </div>

                            <!-- Layer NR. 4 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide3-layer-4"
                                data-x="['right','right','right','right']" data-hoffset="['170','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-55','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 4;"><img height="314" width="287"
                                    src="{{ asset('assets') }}/images/slide3-mckp3.png" alt="Slide 3 Mockup 3">
                            </div>

                            <!-- Layer NR. 5 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-1" id="slide3-layer-5"
                                data-x="['right','right','right','right']" data-hoffset="['200','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 4;"><img height="305" width="330"
                                    src="{{ asset('assets') }}/images/slide3-mckp4.png" alt="Slide 3 Mockup 4">
                            </div>

                            <!-- Layer NR. 6 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide3-layer-6"
                                data-x="['right','right','right','right']" data-hoffset="['220','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-170','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="437" width="412"
                                    src="{{ asset('assets') }}/images/slide3-mckp5.png" alt="Slide 3 Mockup 5">
                            </div>

                            <!-- Layer NR. 7 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide3-layer-7"
                                data-x="['right','right','right','right']" data-hoffset="['60','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-170','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":200,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 1;"><img height="313" width="133"
                                    src="{{ asset('assets') }}/images/slide3-mckp6.png" alt="Slide 3 Mockup 6">
                            </div>

                            <!-- Layer NR. 8 -->
                            <div class="tp-caption img-layer tp-resizeme rs-parallaxlevel-2" id="slide3-layer-8"
                                data-x="['right','right','right','right']" data-hoffset="['470','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['200','0','0','0']"
                                data-fontsize="['60','60','50','40']" data-lineheight="['70','70','60','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:top;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 3;"><img height="213" width="122"
                                    src="{{ asset('assets') }}/images/slide3-mckp7.png" alt="Slide 3 Mockup 7">
                            </div>

                            <!-- Layer NR. 9 -->
                            <div class="tp-caption tp-resizeme" id="slide3-layer-9"
                                data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-70,'-50']"
                                data-fontsize="['50','45','40','35']" data-lineheight="['60','55','50','45']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="letter-spacing: 0;font-weight:700;font-family: Open Sans;color:#3e4a59;">
                                Join Our Team
                            </div>

                            <!-- Layer NR. 10 -->
                            <div class="tp-caption" id="slide3-layer-10" data-x="['left','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['40','40','40','30']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="line-height: 1.625rem;font-family: Nunito Sans;font-size: 1.0625rem;letter-spacing: 0;font-weight: 400;color: #3e4a59;opacity: .8;">
                                ফ্রি, পেইড/এডমিন দের জন্য সহজলোভ্য অফার...!!
                            </div>

                            <!-- Layer NR. 11 -->
                            <div class="tp-caption rev-btn thm-btn" id="slide3-layer-11"
                                data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['140','150','120','120']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"simplelink","slide":"next","delay":"","target": "_self", "url": "contact.html"}]'
                                data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"from":"y:-[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":100,"ease":"Power4.easeInOut"},{"delay":"wait","speed":100,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[20,17,14,12]"
                                data-paddingright="[55,40,35,30]" data-paddingbottom="[20,17,14,12]"
                                data-paddingleft="[55,40,35,30]"
                                style="cursor:pointer;line-height: 1.125rem;display: inline-block;font-family: Nunito Sans;font-size: 1.125rem;letter-spacing: 0;font-weight: 900;border-radius: 2.5rem;">
                                জানতে ক্লিক করুন
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Faq Section --}}
    <section>
        <div class="w-100 pt-50 pb-120 position-relative">
            <div class="container">
                <div class="crtv-chlng-psn-wrap position-relative w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6 ">
                            <div class="mckp-img text-center tilt w-100" data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img class="img-fluid" src="{{ asset('assets') }}/images/resources/market-fact-mckp.png" alt="Creative Challenges Passion Mockup" height="473" width="523"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0">Frequently Asked  <br> Questions</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div>
                                <div class="toggle schm-14 w-100" id="toggle">
                                    @foreach ($faqs as $faq )
                                        <div class="toggle-item position-relative w-100">
                                            <h4 class="mb-0 position-relative"><i></i>{{$faq->question}}</h4>
                                            <div class="toggle-content w-100">
                                                <p class="mb-0">{{$faq->answear}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CCD Message and Projects  -->
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-2.png);"></div>
            <div class="container">
                <div class="structure-wrap w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-6"
                            style=" display: flex;justify-content: center;flex-wrap: wrap;">
                            <div class="mckp-img text-center tilt shadow-sm p-3 mb-5 bg-body rounded" style="height: 600px; width: auto; overflow: hidden;"
                                data-max_tilt="10" data-perspective="1000" data-scale="1" data-speed="700"><img
                                    class="img-fluid " src="{{ asset('assets/images/teams') }}/{{ $ceo->img }}"
                                    alt="Structure Mockup" style="width: 100%; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="text-box w-100">
                                <div class="sec-title w-100 position-relative">
                                    <h2 class="mb-0"><span>CCD</span> Message</h2>
                                    <i class="btm-ln bg-color3"></i>
                                </div><!-- Sec Title -->
                                <h5 class="mb-0">{{ $ceo->name }}</h5>
                                <p class="mb-0">{!! $ceo->description !!}</p>
                                <div class="social-links2 d-flex flex-wrap align-items-left justify-content-left w-100">
                                    <a href="{{ $ceo->facebook }}" title="Facebook" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                </path>
                                            </g>
                                        </svg>
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                    <a href="{{ $ceo->twitter }}" title="Twitter" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                </path>
                                            </g>
                                        </svg>
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                    <a href="{{ $ceo->linkedin }}" title="Linkedin" target="_blank">
                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                </path>
                                            </g>
                                        </svg>
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Structure Wrap -->
                <div class="extended-serv-wrap mt-60 text-center w-100">
                    <div class="row mrg30 align-items-center">
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="extend-serv-box text-center w-100 position-relative">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                                <div class="extend-serv-box-inner">
                                    <i class="icon-015-target text-color8"></i>
                                    <h4 class="mb-0 text-uppercase">Welkin Moon  <br> Social Media</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="extend-serv-box text-center w-100 position-relative">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                                <div class="extend-serv-box-inner">
                                    <i class="icon-022-analysis-1 text-color8"></i>
                                    <h4 class="mb-0 text-uppercase">Welkin Moon  <br> Restaurants</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="extend-serv-box text-center w-100 position-relative">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                                <div class="extend-serv-box-inner">
                                    <i class="icon-016-customer-review text-color8"></i>
                                    <h4 class="mb-0 text-uppercase">Welkin Moon <br> Freelancing Marketplace</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="extend-serv-box text-center w-100 position-relative">
                                <span>
                                    <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                                <div class="extend-serv-box-inner">
                                    <i class="icon-038-digital-marketing text-color8"></i>
                                    <h4 class="mb-0 text-uppercase">Copywriter</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="w-100 pt-110 pb-100 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-9.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-2" class="particles-js w-100" data-color="#3E4A59" data-size="70" data-count="1"
                    data-speed="2" data-hide="767" data-shape="image" data-mode="bounce"
                    data-image-url="assets/images/particle-7.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"> Teams</h2>
                    <i class="btm-ln bg-color17"></i>
                </div><!-- Sec Title -->
                <div class="testi-wrap position-relative w-100">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12 col-sm-12 col-lg-10">
                            <div class="testi-inner schm-17 w-100">
                                <div class="row testi-caro3">
                                    @forelse ( $teams->where('is_featured',1) as $team)
                                        <div class="blog-wrap list-view d-inline-block position-relative w-100">
                                            <div class="post-box schm-14 brd-rd15 w-100">
                                                <div class="post-img overflow-hidden position-relative w-100">
                                                    <a href="javascript:void(0)" title=""><img class=" w-100"
                                                            src="{{ asset('assets/images/teams') }}/{{ $team->img }}"
                                                            alt="Image not found" height="329"></a>
                                                </div>
                                                <div class=" w-100">
                                                    <h3 class="mt-3" style="color: var(--color17)">
                                                        {{ $team->name }}</h3>
                                                    <span class="post-cate d-block text-uppercase"><a
                                                            href="javascript:void(0);">{{ $team->post }}</a></span>

                                                    <p class="mt-2 mb-0 px-2">{!! $team->description !!}</p>
                                                    <div
                                                        class="social-links2 d-flex flex-wrap align-items-left justify-content-left w-100">
                                                        <a href="{{ $team->facebook }}" title="Facebook" target="_blank">
                                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <i class="flaticon-facebook"></i>
                                                        </a>
                                                        <a href="{{ $team->twitter }}" title="Twitter" target="_blank">
                                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <i class="flaticon-twitter"></i>
                                                        </a>
                                                        <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank">
                                                            <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            <i class="flaticon-linkedin"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap -->
            </div>
        </div>
    </section> --}}
    <!-- Teams Slider -->
    <section>
        <div class="w-100 pt-80 pb-110 position-relative">
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-2" class="particles-js top_left mx-w50 w-100" data-color="#4f66db" data-size="15"
                    data-count="3" data-speed="2" data-hide="767" data-shape="circle" data-mode="bounce">
                    <canvas></canvas>
                </div>
            </div><!-- Particles Wrap -->
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><br> Our Team</h2>
                    <i class="btm-ln bg-color14"></i>
                </div>
                <div class="testi-wrap position-relative w-100">
                    <div class="row justify-content-center align-items-center">
                        <div class="testi-inner schm-17 w-100">
                            <div class="row testi-caro3">
                                @forelse ( $teams->where('is_featured',1) as $team)
                                    <div class="blog-wrap list-view d-inline-block position-relative w-100">
                                        <div class="post-box schm-14 brd-rd15 w-100">
                                            <div class="post-img  position-relative"
                                                style=" display: flex;justify-content: center;flex-wrap: wrap;">
                                                <a href="javascript:void(0)"
                                                    style="height: 550px; width: auto; overflow: hidden;"><img
                                                        class=" w-100"
                                                        src="{{ asset('assets/images/teams') }}/{{ $team->img }}"
                                                        alt="Image not found"
                                                        style="width: 100%; object-fit: cover;"></a>
                                            </div>
                                            <div class=" w-100">
                                                <h3 class="mt-3" style="color: var(--color17)">
                                                    {{ $team->name }}</h3>
                                                <span class="post-cate d-block text-uppercase"><a
                                                        href="javascript:void(0);">{{ $team->post }}</a></span>

                                                <p class="mt-2 mb-0 px-2">{!! $team->description !!}</p>
                                                <div
                                                    class="social-links2 d-flex flex-wrap align-items-left justify-content-left w-100">
                                                    <a href="{{ $team->facebook }}" title="Facebook" target="_blank">
                                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <i class="flaticon-facebook"></i>
                                                    </a>
                                                    <a href="{{ $team->twitter }}" title="Twitter" target="_blank">
                                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <i class="flaticon-twitter"></i>
                                                    </a>
                                                    <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank">
                                                        <svg class="svg_shape" xmlns="http://www.w3.org/2000/svg">
                                                            <g>
                                                                <path
                                                                    d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                        <i class="flaticon-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($teams->where('in_home', 1)->count()>1)
    <section>
        <div class="w-100 pt-135 gry pb-90 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/bg-shp-9.png);"></div>
            <div class="particles-wrap position-absolute w-100">
                <div id="particle-3" class="particles-js top_right w-100" data-color="#3E4A59" data-size="50" data-count="1" data-speed="3" data-hide="767" data-shape="image" data-mode="bounce" data-image-url="assets/images/particle-6.png" data-image-width="150" data-image-height="150">
                    <canvas></canvas>
                </div>
            </div>
            <div class="container">
                <div class="sec-title text-center w-100 position-relative">
                    <h2 class="mb-0"><span>What's Our Clients Say</span> <br> About Us</h2>
                    <i class="btm-ln bg-color14"></i>
                </div>
                <div class="testi-wrap position-relative w-100">
                    <div class="row schm-14 testi-caro2">
                        @foreach ($teams->where('in_home', 1) as $team)
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="testi-box schm-14 position-relative text-center w-100">
                                <div class="testi-img d-inline-block overflow-hidden rounded-circle"><img
                                        class="img-fluid d-inline-block rounded-circle"
                                        style="height: 120px;width:150px"
                                        src="{{ asset('assets/images/teams') . '/' . $team->img }}"
                                        alt="not found">
                                </div>
                                <div class="testi-info w-100">
                                    <h5 class="mb-0">{{ $team->name }}</h5>
                                    <span class="d-block">{{ $team->post }}</span>
                                </div>
                                <div style="text-align: left!important">
                                    <p class=" mb-0">{!! Str::substr($team->description, 0, 100)  !!}</p>
                                </div>
                                <div class="social-links v2 d-inline-flex flex-wrap">
                                    <a href="{{ $team->facebook }}" title="Facebook" target="_blank"><i
                                            class="flaticon-facebook"></i></a>
                                    <a href="{{ $team->twitter }}" title="Twitter" target="_blank"><i
                                            class="flaticon-twitter-letter-logo"></i></a>
                                    <a href="{{ $team->linkedin }}" title="Linkedin" target="_blank"><i
                                            class="flaticon-telegram"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection
