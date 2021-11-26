@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li class=""><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class=""><a href="{{ route('dashboard.users.index') }}"> @lang('site.users')</a></li>
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
                    <form action="{{ route('dashboard.users.store') }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        @php
                            $labels = [
                                'site.first_name',
                                'site.last_name',
                                'site.email',
                                'site.image',
                                'site.password',
                                'site.password_confirmation'
                            ];
                            $value =  "{{old('first_name')}}" ;
                            $input = [
                                '<input class="form-control" type="text" name="first_name" value="{$value}">',
                            ];
                        @endphp

                        @foreach ($labels as $index => $label)
                            <div class="form-group">
                                <label>@lang($label)</label>
                                @php
                                    echo $input[0];
                                @endphp
                            </div>
                        @endforeach



                    </form>

                </div>

            </div>
        </section>

    </div><!-- end of content wrapper -->

@endsection
