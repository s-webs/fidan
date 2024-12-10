@extends('layout.master')
@section('content')
    <div class="content-block stick-to-footer">
        <div class="page-container container">
            <div class="row">
                <div class="col-md-12 entry-content">
                    <article>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_revslider_element wpb_content_element">
                                            <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background: transparent; padding: 0px;">
                                                <!-- START REVOLUTION SLIDER 5.4.5.1 fullscreen mode -->
                                                <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display: none;" data-version="5.4.5.1">
                                                    <ul>
                                                        <!-- SLIDE  -->
                                                        <li
                                                            data-index="rs-7"
                                                            data-transition="slidingoverlayright"
                                                            data-slotamount="default"
                                                            data-hideafterloop="0"
                                                            data-hideslideonmobile="off"
                                                            data-easein="default"
                                                            data-easeout="default"
                                                            data-masterspeed="default"
                                                            data-thumb="/images/pelmeni-home-01.jpg"
                                                            data-rotate="0"
                                                            data-saveperformance="off"
                                                            data-title="Welcome"
                                                            data-param1=""
                                                            data-param2=""
                                                            data-param3=""
                                                            data-param4=""
                                                            data-param5=""
                                                            data-param6=""
                                                            data-param7=""
                                                            data-param8=""
                                                            data-param9=""
                                                            data-param10=""
                                                            data-description=""
                                                        >
                                                            <!-- MAIN IMAGE -->
                                                            <img
                                                                src="/images/pelmeni-home-01.jpg"
                                                                alt=""
                                                                title="mussels-blacktable"
                                                                width="1600"
                                                                height="1067"
                                                                data-bgposition="center center"
                                                                data-bgfit="cover"
                                                                data-bgrepeat="no-repeat"
                                                                class="rev-slidebg"
                                                                data-no-retina
                                                            />
                                                            <!-- LAYERS -->

                                                            <!-- LAYER NR. 1 -->
                                                            <div
                                                                class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                                                                id="slide-7-layer-8"
                                                                data-x="['center','center','center','center']"
                                                                data-hoffset="['0','0','0','0']"
                                                                data-y="['middle','middle','middle','middle']"
                                                                data-voffset="['0','0','0','0']"
                                                                data-width="100%"
                                                                data-height="full"
                                                                data-whitespace="nowrap"
                                                                data-type="shape"
                                                                data-basealign="slide"
                                                                data-responsive_offset="on"
                                                                data-frames='[{"delay":20,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                data-paddingtop="[0,0,0,0]"
                                                                data-paddingright="[0,0,0,0]"
                                                                data-paddingbottom="[0,0,0,0]"
                                                                data-paddingleft="[0,0,0,0]"
                                                                style="z-index: 5; background-color: rgba(0, 0, 0, 0.5);"
                                                            ></div>

                                                            <!-- LAYER NR. 2 -->
                                                            <h1
                                                                class="tp-caption tp-resizeme"
                                                                id="slide-7-layer-1"
                                                                data-x="['center','center','center','center']"
                                                                data-hoffset="['0','0','0','0']"
                                                                data-y="['middle','middle','middle','middle']"
                                                                data-voffset="['0','0','0','-57']"
                                                                data-fontsize="['60','60','60','45']"
                                                                data-lineheight="['65','65','65','48']"
                                                                data-letterspacing="['-2','-2','-2','']"
                                                                data-width="['780','780','780','436']"
                                                                data-height="none"
                                                                data-whitespace="normal"
                                                                data-type="text"
                                                                data-responsive_offset="on"
                                                                data-frames='[{"delay":20,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                                                                data-textAlign="['center','center','center','center']"
                                                                data-paddingtop="[0,0,0,0]"
                                                                data-paddingright="[0,0,0,0]"
                                                                data-paddingbottom="[0,0,0,0]"
                                                                data-paddingleft="[0,0,0,0]"
                                                                style="
                                                                    z-index: 6;
                                                                    min-width: 780px;
                                                                    max-width: 780px;
                                                                    white-space: normal;
                                                                    font-size: 60px;
                                                                    line-height: 65px;
                                                                    font-weight: 400;
                                                                    color: rgba(255, 255, 255, 1);
                                                                    letter-spacing: -2px;
                                                                    font-family: Sorts Mill Goudy;
                                                                "
                                                            >
                                                                Домашняя кухня
                                                            </h1>

                                                            <!-- LAYER NR. 4 -->
                                                            <a
                                                                class="tp-caption rev-btn"
                                                                href="{{ route('products.index') }}"
                                                                target="_self"
                                                                id="slide-7-layer-14"
                                                                data-x="['center','center','center','center']"
                                                                data-hoffset="['0','0','0','0']"
                                                                data-y="['middle','middle','middle','middle']"
                                                                data-voffset="['184','184','184','145']"
                                                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgba(255,255,255,1)']"
                                                                data-width="none"
                                                                data-height="none"
                                                                data-whitespace="nowrap"
                                                                data-type="button"
                                                                data-actions=""
                                                                data-responsive_offset="on"
                                                                data-frames='[{"delay":20,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"},{"frame":"hover","speed":"500","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(25,18,13);bs:solid;bw:0 0 0 0;"}]'
                                                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                data-paddingtop="[20,20,20,20]"
                                                                data-paddingright="[50,50,50,50]"
                                                                data-paddingbottom="[20,20,20,20]"
                                                                data-paddingleft="[50,50,50,50]"
                                                                style="
                                                                    z-index: 8;
                                                                    white-space: nowrap;
                                                                    font-size: 18px;
                                                                    line-height: 17px;
                                                                    font-weight: 400;
                                                                    color: #ffffff;
                                                                    font-family: Cabin;
                                                                    background-color: rgb(198, 159, 124);
                                                                    border-color: rgba(0, 0, 0, 1);
                                                                    border-radius: 30px 30px 30px 30px;
                                                                    outline: none;
                                                                    box-shadow: none;
                                                                    box-sizing: border-box;
                                                                    -moz-box-sizing: border-box;
                                                                    -webkit-box-sizing: border-box;
                                                                    cursor: pointer;
                                                                    text-decoration: none;
                                                                "
                                                            >
                                                                Посмотреть цены
                                                            </a>

                                                            <!-- LAYER NR. 5 -->
                                                            <h1
                                                                class="tp-caption tp-resizeme"
                                                                id="slide-7-layer-16"
                                                                data-x="['center','center','center','center']"
                                                                data-hoffset="['0','0','0','0']"
                                                                data-y="['middle','middle','middle','middle']"
                                                                data-voffset="['-130','-130','-130','-188']"
                                                                data-fontsize="['120','120','120','60']"
                                                                data-lineheight="['65','65','65','50']"
                                                                data-width="['507','507','507','436']"
                                                                data-height="['82','82','82','none']"
                                                                data-whitespace="normal"
                                                                data-type="text"
                                                                data-responsive_offset="on"
                                                                data-frames='[{"delay":20,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power2.easeIn"}]'
                                                                data-textAlign="['center','center','center','center']"
                                                                data-paddingtop="[0,0,0,0]"
                                                                data-paddingright="[0,0,0,0]"
                                                                data-paddingbottom="[0,0,0,0]"
                                                                data-paddingleft="[0,0,0,0]"
                                                                style="
                                                                    z-index: 9;
                                                                    min-width: 507px;
                                                                    max-width: 507px;
                                                                    max-width: 82px;
                                                                    max-width: 82px;
                                                                    white-space: normal;
                                                                    font-size: 120px;
                                                                    line-height: 65px;
                                                                    font-weight: 400;
                                                                    color: #c69f7c;
                                                                    font-family: Alex Brush;
                                                                "
                                                            >
                                                                Fidan
                                                            </h1>
                                                        </li>
                                                        <!-- SLIDE  -->
                                                    </ul>
                                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                </div>

                                            </div>
                                            <!-- END REVOLUTION SLIDER -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
