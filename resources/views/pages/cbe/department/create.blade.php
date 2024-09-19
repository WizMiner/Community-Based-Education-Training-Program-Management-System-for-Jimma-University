@extends('pages.cbe.inc.app')

@section('header')
    @include('layout.header', ['title' => 'CBE | Department | Create'])
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-3 p-8">Add Department</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Department</li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">
                    @if (session('status'))
                    <div class="alert alert-success">{{ session('status')}}</div>
                    @endif
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Department Information</h3>
                        </div>
                        <form method="POST" action="{{ route('cbe.department.store') }}">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>

                                          <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                                    </div>

                                    <div class="form-group">
                                        <label >College ID</label>
                                        <input type="text" name="coll_id" class="form-control" value="{{ old('coll_id') }}">
                                    </div>
                                    <div class="mb-10">
                                          <button type="submit" class="btn btn-primary float-end">Add Department</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
