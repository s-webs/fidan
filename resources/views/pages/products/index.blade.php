@extends('layout.master')
@section('content')
    <div class="content-block stick-to-footer">
        <div class="page-container container">
            <div class="row">
                <div class="col-md-12 entry-content">
                    <article>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
                             class="vc_row wpb_row vc_row-fluid vc_custom_1502041619088 vc_row-no-padding"
                             style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px; padding-top: 0 !important;">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="mgt-portfolio-grid wpb_content_element"
                                             style="margin-bottom: 0 !important;">
                                            <div
                                                class="portfolio-list portfolio-columns-4 portfolio-grid-layout-3 clearfix"
                                                id="portfolio-list-65714619">
                                                @foreach($products as $product)
                                                    <div
                                                        class="portfolio-item-block text-left portfolio-item-animation-5 mix desert events fish meat"
                                                        data-item="1" data-name="Beef Brisket Poutine"
                                                        style="display: inline-block;">
                                                        <div class="portfolio-item-block-inside">
                                                            <a href="{{ $product['image'] }}" target="_self" rel="lightbox">
                                                                <div class="portfolio-item-image"
                                                                     data-style="background-image: url({{ $product['image']  }});"
                                                                     style="background-image: url({{ $product['image']  }});"></div>
                                                                <div class="portfolio-item-bg"></div>

                                                                <div class="info">
                                                                    <h4 class="title" style="background-color:#fff; color: #000000; padding: 2px 4px; box-sizing: border-box; text-align: center">{{ $product['name'] }}</h4>
                                                                    <div class="project-description" style="background-color:#fff; color: #0F9E5E; font-weight: bold; padding: 2px 4px; text-align: center">{{ $product['price'] }}</div>
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
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
