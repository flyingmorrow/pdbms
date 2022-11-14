@extends('layouts.app')

@section('content')
<div class="main-wrapper">
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="./images/logo.png" alt="">
            <img class="logo-compact" src="./images/logo-text.png" alt="">
            <img class="brand-title" src="./images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">
                            <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                <i class="mdi mdi-magnify"></i>
                            </span>
                            <div class="dropdown-menu p-0 m-0">
                                <form>
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown ">
                            <a class="nav-link" href="{{route('home')}}" role="button" >
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                                To Short lists
                            </a>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="">
    <div class="container-fluid" style="margin-top:80px;">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Element</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Management</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Sign-up Date</th>
                                        <th>Role</th>
                                        <th>State</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user['id']}}</td>
                                        <td>{{$user['name']}}</td>
                                        <td>{{$user['email']}}</td>
                                        <td>{{$user['created_at']}}</td>
                                        <td class="form-group">
                                            <select class="form-control form-control" >
                                                <option value="2" @if($user['role']=='super') selected @endif>super</option>
                                                <option value="1" @if($user['role']=='normal') selected @endif>normal</option>
                                            </select>
                                        </td>
                                        <td class="form-group">
                                            <select class="form-control form-control" >
                                                <option value="1" @if($user['state']=='true') selected @endif>allowed</option>
                                                <option value="2" @if($user['state']=='false') selected @endif>Not allowed</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-rounded btn-primary save_btn" id="{{$user['id']}}">Save</button>
                                        </td>
                                    <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Import data from Excel or Export to Excel</h5>
                        <a href="{{ url('admin/downloadData/') }}"><button class="btn btn-success">Download Excel xls</button></a>

                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('admin/importData') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" />
                            <button class="btn btn-primary" type="submit">Import File</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function()
    {
        $('.save_btn').click(function()
        {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
            });
            var data={id:'',role:'',state:''}
            data.id=$(this).parent().siblings('td:nth-child(1)').text();
            data.role=$(this).parent().siblings('td:nth-child(5)').find('select').val();
            data.state=$(this).parent().siblings('td:nth-child(6)').find('select').val();
            console.log(data);
            jQuery.ajax({
                url: "{{ url('/admin/save') }}",
                method: 'post',
                data: {
                    data,
                    _token : $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result){
                    alert('Data saved successfully');
                    console.log(result);
                },
                error:function(err)
                {
                    console.log(err);
                }
            });
        });
    })
</script>
@endsection


@section('js_css')
<link href="{{asset('css/focus/style.css')}}" rel="stylesheet">
<script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('js/focus/quixnav-init.js')}}"></script>
    <script src="{{asset('js/focus/custom.min.js')}}"></script>
    <link href="{{asset('css/focus/style.css')}}" rel="stylesheet">
@endsection