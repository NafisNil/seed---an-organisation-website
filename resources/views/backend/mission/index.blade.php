@extends('backend.layouts.master')
@section('title')
    Mission - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Mission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mission</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mission</h3>

                @if ($missionCount < 1)
                       <a href="{{route('mission.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                @endif
           
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>About</th>
             

                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>






                    @if ($missionCount > 0)



                  <tr>
                    <td>1</td>
                    <td>{!!$mission->desc!!}</td>
               
                
                   <td>

                      <a href="{{route('mission.edit',[$mission->id])}}" title="Edit"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>



                      @if ($missionCount > 0 )

                      <form action="{{route('mission.destroy',[$mission])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm" title="Delete"><i class="fas fa-trash"></i></button>
                      </form>
                      @endif


                    </td>

                  </tr>

                 @endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Mission</th>
           
                    <th>Action</th>

                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection