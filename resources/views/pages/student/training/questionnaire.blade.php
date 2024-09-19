@extends('pages.student.inc.app')

@section('header')
    @include('layout.header', ['title' => 'Student | Questionnaire | View'])
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Questionnaire Detail</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Questionnaire</li>
                        <li class="breadcrumb-item active">View</li>
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
                            <h3 class="card-title">Questionnaire Detail</h3>
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
                            @if ($questionnaire && $questionnaire->status == false)
                                <h3 class="text-danger">Sorry, but you can not access the questionnaire now!</h3>
                            @else
                                <div class="row">
                                    <div class="col-12">
                                        <h4>Questionnaire form content here</h4>
                                    </div>
                                    <!-- Add other sections -->

           <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1> <h1>JIMMA UNIVERSITY</h1>
            <h2>Community based training program</h2>
            <h3>A. Data collection formats</h3>
            <h4>A.1. General Information collection format</h4>
            </h1>
          </div>
          <form action="{{ route('student.questionnaire.store') }}">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Community based training program</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form>
                <div class="card-body">
                    <h2>I. General </h2>
                 <ol type="1">

                    <div class="col-md-6">
                        <label><li> Geographical location of the study community</li></label><br>
                        <label>Region</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>Woreda</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>Kebele</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>Zone</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <div class="col-md-6">
                        <label><li> Geographical boundaries of the selected study community </li></label><br>
                        <label>East</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>North</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>West</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        <label>South</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <div class="col-md-6">
                        <label><li> Distance of the study community from the university in Km </li></label><br>
                        <input type="text" class="form-control" placeholder="Enter ...">

                      </div>

                       <div class="col-md-6">
                            <label><li> Status of the kebele </li></label><br>
                            <label>Urban</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Rural</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                                       <!-- radio -->
                          <div class="form-check">
                            <label for=""><li>Climatic zone of the Kebele</li></label><br>
                            <input class="form-check-input" type="radio" name="radio1">
                            <label class="form-check-label">dega</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" >
                            <label class="form-check-label">woyina dega</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio1" >
                            <label class="form-check-label">kolla</label>
                          </div>

                          <div class="col-md-6">
                            <label><li> Range of estimated altitude in meters </li></label><br>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>

                          <div class="col-md-6">
                            <label><li> Description of physical features </li></label><br>
                            <label>Hilly</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Plain</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Swampy</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Forested</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Other(specify)</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                          <div class="col-md-6">
                            <label><li> Number of: </li></label><br>
                            <label>Streams</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Ponds</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                          <div class="col-md-6">
                            <label><li> Do people use irrigation? </li></label><br>
                            <label>Yes</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>No</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                          <div class="col-md-6">
                            <label><li>  If people use irrigation, what is the estimated area? </li></label><br>
                            <label>In Gasha</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>In hectars</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                          <div class="col-md-6">
                            <label><li>  Total population </li><input type="text" class="form-control" placeholder="Enter ..."></label> <br>

                            <label>Male</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            <label>Female</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                          </div>
                        </ol>
                      </div>
              <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>

     </div>

    </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
                                </div>
                            @endif

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
