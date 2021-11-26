@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.categories')</h1>

            <ol class="breadcrumb">
                <li class=""><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class=""><a href="{{ route('dashboard.categories.index') }}"> @lang('site.categories')</a></li>
                <li class="active"><i class="fa fa-dashboard"></i> @lang('site.add')</li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div>

                <div class="box-body">

                    @include('partials._errors')
                    <form action="{{ route('dashboard.categories.store') }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>@lang('site.' . $locale . '.name')</label>
                                <input class="form-control" type="text" name="{{ $locale }}[name]" value="{{ old($locale . '.name') }}">
                            </div>
                        @endforeach

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                @lang('site.add')
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </section>

    </div><!-- end of content wrapper -->

@push('scripts')
    <script>
        // image preview
        $(".image").change(function () {

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.image-preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }

        });
    </script>
@endpush
@endsection
