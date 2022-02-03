@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection
@section('javacript')
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"> </script>
    <script>
        $(document).ready( function () {
           $('#myTable').DataTable();
        } );
    </script>
@endsection
@section('content')
{{-- <div class="col-xl-4">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p class="font-size-16">Orders</p>
                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                            <span class="avatar-title rounded-circle bg-soft-primary">
                                <i
                                    class="mdi mdi-cart-outline text-primary font-size-20"></i>
                            </span>
                        </div>
                        <h5 class="font-size-22">58</h5>

                        <p class="text-muted">70% Target</p>

                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar progress-bar bg-primary"
                                role="progressbar" style="width: 70%" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="70">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p class="font-size-16">Users</p>
                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                            <span class="avatar-title rounded-circle bg-soft-success">
                                <i
                                    class="mdi mdi-account-outline text-success font-size-20"></i>
                            </span>
                        </div>
                        <h5 class="font-size-22">136</h5>
                        <p class="text-muted">80% Target</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar progress-bar bg-success"
                                role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="80">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="main-content">
    <div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>DashBoard</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                             </ol>
                     </div>
                 </div>
                 {{-- <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="#" class="btn btn-success">Add Widget</a>
                    </div>
                 </div> --}}
             </div>
            </div>
         </div>
       <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Total Users</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-account-multiple-outline text-primary font-size-20"></i>
                                                    </span>
                                            </div>
                                            <h5 class="font-size-22">{{$users->count()}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Total Users</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                    </span>
                                            </div>
                                            <h5 class="font-size-22">{{$teams->count()}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="font-size-16">Total Users</p>
                                            <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                <span class="avatar-title rounded-circle bg-soft-primary">
                                                        <i class="mdi mdi-cart-outline text-primary font-size-20"></i>
                                                    </span>
                                            </div>
                                            <h5 class="font-size-22">58</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Users</h4>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $users->where('is_admin','!=','1') as $user)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->phone}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
