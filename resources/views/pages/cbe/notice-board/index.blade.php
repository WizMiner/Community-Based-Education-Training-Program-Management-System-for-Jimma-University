@extends('pages.cbe.inc.app')

@section('header')
    @include('layout.header', ['title' => 'CBE | Notice Board | List'])
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Notice Board List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Notice Board</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <a href="{{ route('cbe.notice-board.create') }}" class="btn btn-primary">
                <i class="fas fa-plus nav-icon"></i>
                Create New</a>
            <div class="row">


                <div class="col-md-12">

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Notice Board List</h3>
                        </div>
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <i class="icon fas fa-ban"></i>
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <i class="icon fas fa-check"></i>
                                    {!! session('success') !!}
                                </div>
                            @endif
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Attachment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($noticeBoard as $key => $notice)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $notice->title ?? '-' }}</td>
                                            <td>{{ $notice->description ?? '-' }}</td>
                                            <td>{{ $notice->attachment ?? '-' }}</td>
                                            <td>
                                                <span class="badge {{ $notice->status == true ? 'badge-success' : 'badge-danger' }}">
                                                    {{ $notice->status == true ? 'active' : 'inactive' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('cbe.notice-board.update') }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('cbe.notice-board.store') }}" method="post" class="d-inline">
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
