@extends('pages.student.inc.app')

@section('header')
    @include('layout.header', ['title' => 'Student | Training | List'])
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Training List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Training</li>
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

            <div class="row">


                <div class="col-md-12">

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Training List</h3>
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
                                        <th>Name</th>
                                        <th>Program</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($trainings as $key => $list)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $list->Student?->f_name.' '.$list->Student?->l_name ?? '-' }}</td>
                                            <td>{{ $list->Student?->Program?->name ?? '-' }}</td>
                                            <td>
                                                <a href="{{ route('student.questionnaire.index', $list->id) }}" class="btn btn-primary">Fill questionnaire</a>
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
