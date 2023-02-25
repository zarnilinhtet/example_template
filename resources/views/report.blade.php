@extends('layouts.app')


@section('content')
    <!-- Main content -->

    <section class="content p-2">
        <div class="container-fluid">


            <div class="row">

                <h3 class="p-2">Report</h3>
                {{-- <h3 class="mx-auto" id='date-time'> <span> Date -</span> </h3> --}}
                <p class="card-title m-auto "> <h3 class="p-2" >Date - <span id='date-time'></span></h3></p>
                <div class="col-12">
                    <div class="card">

                        {{-- <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div> --}}
                        <!-- /.card-header -->
                        {{-- <div class="card-body ">
                            <div class="row">
                                <div class=" col-md-3 ">
                                    <div class="form-group">

                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="date" class="form-control  shadow-sm p-3  bg-white rounded"
                                                data-target="#reservationdate" />

                                            <button type="submit" class="btn btn-primary mx-3">Search</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div> --}}
                    <div class="card">
                        <div class="card-header">
                          {{-- <h3 class="card-title">DataTable with default features</h3> --}}
                          <div class="row">
                            <div class=" col-md-3 mt-3">
                                <div class="form-group">

                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="date" class="form-control  shadow-sm   bg-white rounded"
                                            data-target="#reservationdate" />

                                        <button type="submit" class="btn btn-primary mx-3">Search</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Rendering engine</th>
                              <th>Browser</th>
                              <th>Platform(s)</th>
                              <th>Engine version</th>
                              <th>CSS grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>Trident</td>
                              <td>Internet
                                Explorer 4.0
                              </td>
                              <td>Win 95+</td>
                              <td> 4</td>
                              <td>X</td>
                            </tr>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                  Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                              </tr> <tr>
                                <td>Trident</td>
                                <td>Internet
                                  Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                              </tr>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>

                </div>
            </div>
        </div>
    </section>
    </div>

    </body>

    </html>
@endsection
