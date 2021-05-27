@extends('layouts.admin-layout')
@section('content-style')
    <!-- FILE UPLODE CSS -->
    <link href="{{asset('plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!-- MULTI SELECT CSS -->
    <link rel="stylesheet" href="{{asset('plugins/multipleselect/multiple-select.css')}}">
@endsection
@section('dashboard-content')
    @yield('form-content')
@endsection
@section('content-js')
    <!-- FILE UPLOADES JS -->
    <script src="{{asset('plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('plugins/fileuploads/js/file-upload.js')}}"></script>

    <!-- MULTI SELECT JS-->
    <script src="{{asset('plugins/multipleselect/multiple-select.js')}}"></script>
    <script src="{{asset('plugins/multipleselect/multi-select.js')}}"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{asset('js/form-elements.js')}}"></script>
@endsection
