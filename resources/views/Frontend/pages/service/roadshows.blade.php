@extends('Frontend.layout.carmain')


@section('content')

<div id="sisf-page-outer">

    <div
        class="sisf-page-title sisf-m sisf-title--standard sisf-alignment--center sisf-vertical-alignment--header-bottom sisf--has-image">
        <div class="sisf-m-inner">
            <div class="sisf-m-content sisf-content-grid ">
                <h1 class="sisf-m-title entry-title">
                    @lang('service.roadshows') </h1>
            </div>
        </div>
    </div>

    <div id="sisf-page-inner" class="sisf-content-grid">

        <main id="sisf-page-content" class="sisf-grid sisf-layout--template " role="main">
            <div class="sisf-grid-inner clear">
                <div class="sisf-grid-item sisf-page-content-section sisf-col--12">
                    <div class="sisf-services sisf-m  sisf-services-single sisf-item-layout--default">
                        <article
                            class="sisf-services-list-item sisf-e post-3320 services type-services status-publish has-post-thumbnail hentry services-category-services">
                            <div class="sisf-services-single-top">
                                <div class="sisf-content-grid">
                                    <div class="sisf-e-inner">
                                        <div class="sisf-e-media">
                                            <div class="sisf-e-image">
                                                <a itemprop="url" href="#">
                                                    <img loading="lazy" width="300" height="100"
                                                        src="{{ asset('img/service/roadshows.png') }}"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="" decoding="async"
                                                        srcset="{{ asset('img/service/roadshows.png') }} 1300w, {{ asset('img/service/roadshows.png') }} 600w, {{ asset('img/service/roadshows.png') }} 768w"
                                                        sizes="(max-width: 1300px) 100vw, 1300px" /> </a>
                                            </div>
                                        </div>
                                        <div class="sisf-e-content">

                                            <div class="sisf-e-text">
                                                <h4 itemprop="name"
                                                    class="sisf-e-title entry-title sisf-services-title">
                                                    <a itemprop="url" class="sisf-e-title-link"
                                                        href="#">@lang('service.roadshowstitle')</a>
                                                </h4>
                                                <p itemprop="description" class="sisf-e-description">@lang('service.roadshowsdec')
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </main>
    </div><!-- close #sisf-page-inner div from header.php -->

</div><!-- close #sisf-page-outer div from header.php -->

@endsection
