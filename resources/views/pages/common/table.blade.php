@extends('layouts.admin-layout')
@section('content-style')
    <link href="{{asset('plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
@endsection

@section('custom-style')
    <style>
        table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table td a:hover {
            color: #2196F3;
        }

        table td:last-child i {
            opacity: 0.9;
            margin: 0 5px;
        }

        table td:last-child {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        td a.edit {
            color: #FFC107;
        }

        td a.delete {
            color: #F44336;
        }

        table td i {
            font-size: 20px;
        }
    </style>
@endsection
@section('dashboard-content')
    @yield('table-content')
@endsection

@section('content-js')
    <script src="{{asset('plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatable/datatable.js')}}"></script>
    <script src="{{asset('plugins/datatable/datatable-2.js')}}"></script>
    <script src="{{asset('plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection
