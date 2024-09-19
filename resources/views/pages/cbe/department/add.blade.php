{{--  @extends('pages.cbe.inc.app')

@section('header')
    @include('layout.header', ['title' => 'CBE | Department | Add'])
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Department</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Department</li>
                        <li class="breadcrumb-item active">Add</li>
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

                        </div>

                         <form method="POST" action="{{ route('cbe.department.store') }}">
                            @csrf
                            <div class="card-body">
                                <div>

                                </div>

                            <div class="card-footer ">

                            </div>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection  --}}
