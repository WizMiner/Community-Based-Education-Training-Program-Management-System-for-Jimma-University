@extends('pages.cbe.inc.app')

@section('header')
    @include('layout.header', ['title' => 'CBE | Add Student Training | Add'])
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Student Training</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Add Student Training</li>
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

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Add Student Training Information</h3>
                        </div>
                        <form method="POST" action="{{ route('cbe.student-training.store') }}">
                            @csrf
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
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Training Type</label>
                                            <select name="training_type_id" id="training_type_id"
                                                class="form-control @error('training_type_id') is-invalid @enderror select2"
                                                autofocus required>
                                                <option {{ old('training_type_id') == '' ? 'selected' : '' }} value="" disabled>Select</option>
                                                @foreach ($trainingTypes as $type)
                                                    <option {{ old('training_type_id') == $type->id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('training_type_id')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Select Department</label>
                                            <select name="department" id="department"
                                                class="form-control @error('department') is-invalid @enderror select2"
                                                autofocus required>
                                                <option {{ old('department') == '' ? 'selected' : '' }} value="" disabled>Select</option>
                                                @foreach ($departments as $dept)
                                                    <option {{ old('department') == $dept->id ? 'selected' : '' }} value="{{ $dept->id }}">{{ $dept->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('program')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Select Institution</label>
                                            <select name="institution_id" id="institution"
                                                class="form-control @error('institution_id') is-invalid @enderror select2"
                                                autofocus required>
                                                <option {{ old('institution_id') == '' ? 'selected' : '' }} value="" disabled>Select</option>
                                                @foreach ($institutions as $inst)
                                                    <option {{ old('institution') == $inst->id ? 'selected' : '' }} value="{{ $inst->id }}">{{ $inst->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('institution_id')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Select Supervisor</label>
                                            <select name="supervisor_id" id="supervisor"
                                                class="form-control @error('supervisor_id') is-invalid @enderror select2"
                                                autofocus required>
                                                <option {{ old('supervisor') == '' ? 'selected' : '' }} value="" disabled>Select</option>
                                                @foreach ($supervisors as $sup)
                                                    <option {{ old('supervisor_id') == $sup->user_id ? 'selected' : '' }} value="{{ $sup->user_id }}">{{ $sup->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('supervisor_id')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date</label> <i class="text-danger font-weight-bold">*</i>
                                            <input id="start_date" placeholder="Enter Start date" type="date"
                                                class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                                                value="{{ old('start_date') }}" required autocomplete="start_date">
                                            @error('start_date')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>End Date</label> <i class="text-danger font-weight-bold">*</i>
                                            <input id="start_date" placeholder="Enter End date" type="date"
                                                class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                                                value="{{ old('end_date') }}" required autocomplete="end_date">
                                            @error('end_date')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Student List</label>
                                            <br>
                                            <input type="file" class="form-control" name="student_list" required>
                                            @error('student_list')
                                                <span class="text-danger" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer ">
                                <p class=" float-left"><i class="text-danger font-weight-bold">*</i> are
                                    required fields</p>
                                <button type="submit" class="btn btn-primary float-right">Add</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
