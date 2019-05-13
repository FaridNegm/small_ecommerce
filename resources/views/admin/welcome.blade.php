@extends('admin.layouts.app')

@section('title')
    {{ trans('app.home') }}
@endsection

@section('header')

@endsection

@section('content')

<router-view></router-view>

@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
