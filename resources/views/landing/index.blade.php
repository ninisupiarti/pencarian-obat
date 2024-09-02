@extends('landing.template.base')

@section('content')
    <div class="landing-bg-picture" style="background-image:url('images/bg-landing.jpg')">
        <span class="picture-bg-overlay"></span>
        <!-- overlay -->
        <div class="container-fluid">
            <div class="row z-10">
                <div class="col-12 mt-5">
                    <div class="d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" name="search" class="form-control form-control-lg"
                                    placeholder="@lang('user/index.search-placeholder')" value="{{ request('search') }}">

                                <button class="btn btn-primary">@lang('user/index.search')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="mt-2">
                <x-alert></x-alert>
            </div>
            <div class="col-12 mb-3">
                <div class="page-title-box">
                    <h3 class="page-title text-dark">
                        {{ request()->has('search') && request('search') != null ? Lang::get('user/index.search-result') : Lang::get('user/index.newest-articles') }}
                    </h3>
                </div>

                <div class="row">
                    @forelse ($drugs as $drug)
                        <div class="col-12 col-sm-4 col-lg-3">
                            <div class="card">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset(empty($drug->image) ? 'images/auth-bg-dark.jpg' : $drug->image) }}"
                                        class="img-fluid">
                                </div>
                                <div class="p-2">
                                    <a href="{{ url('drugs/detail', $drug->id) }}">
                                        <strong class="fs-15 text-dark d-block mb-1">{{ $drug->name }}</strong>
                                    </a>

                                    <img src="{{ asset($drug->drugClassification->image) }}" class="float-end"
                                        alt="{{ $drug->drugClassification->name }}" height="20" width="35">

                                    <div class="text-ellipsis fs-10 w-100 mt-2">
                                        {!! $drug->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        @if (request()->has('search'))
                            <p class="text-center">
                                @lang('user/drugs.empty')
                            </p>
                        @endif
                    @endforelse
                </div>

                @if ($articles->isNotEmpty())
                    <div class="page-title-box">
                        <h3 class="page-title text-dark">
                            {{ request()->has('search') && request('search') != null && $drugs->isNotEmpty() ? Lang::get('user/index.related-articles') : null }}
                        </h3>
                    </div>
                @endif

                <div class="row">
                    @forelse ($articles as $article)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset(empty($article->image) ? 'images/auth-bg-dark.jpg' : $article->image) }}"
                                        class="img-fluid">
                                </div>
                                <div class="p-2">
                                    <a href="{{ empty($article->source_url) ? url($article->slug) : $article->source_url }}"
                                        target="_blank">
                                        <strong class="fs-13 d-block mb-1">{{ $article->title }}</strong>
                                    </a>

                                    <div class="text-ellipsis fs-10 w-100 mt-2">
                                        {!! $article->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        {{-- @endif --}}
    </div>
@endsection
