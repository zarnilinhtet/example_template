@extends('layouts.app')


@section('content')
    <!-- Main content -->

    <section class="content p-2">
        <div class="container-fluid">


            <div class="row">

                <h3 class="p-2">Report</h3>
                {{-- <h3 class="mx-auto" id='date-time'> <span> Date -</span> </h3> --}}
                <p class="card-title m-auto ">
                <h3 class="p-2">Date - <span id='date-time'></span></h3>
                </p>
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
                            <div>

                            </div>
                            <div>
                                <div class="card-body table-responsive">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <table id="example1" class="table table-bordered table-striped">

                                        <thead>
                                            <tr class="report_table">
                                                <th scope="col">Line</th>
                                                <th>Buyer</th>
                                                <th>Style No.#</th>
                                                <th>Item</th>

                                                <th>Target</th>
                                                <th>Manpower</th>
                                                <th>Output </th>
                                                <th>%</th>
                                                <th>Q'ty</th>
                                                <th>Input</th>
                                                <th>Total</th>
                                                <th>Output</th>
                                                <th>Total</th>
                                                <th>CMP($)</th>
                                                <th>Daily CMP income</th>
                                                <th> Inline</th>
                                                <th> H/over</th>

                                                <th> Total</th>
                                                <th> H/over balance</th>
                                                <th>
                                                    <table class="table table-bordered text-white m-0 ">
                                                        <thead>
                                                            <th scope="col">S,L,Adm Op</th>
                                                            <th scope="col">Hp</th>
                                                        </thead>
                                                    </table>
                                                </th>
                                                <th> Time</th>
                                                <th> CMP / hr</th>
                                                <th> CMP / hr / PS</th>
                                                <th> Remark</th>




                                            </tr>


                                        </thead>

                                                {{-- Buyer --}}

                                      <tbody class=" ">
                                          <tr class="text-center">
                                                <th scope="row " rowspan="2" class="">1</th>
                                                <td id="table_border1">-</td>
                                                <td id="table_border2">-</td>
                                                <td id="table_border3">-</td>
                                                <td>200</td>
                                                <td>
                                                    Test
                                                </td>
                                                 <td>20</td>
                                                  <td>10%</td>

                                            </tr>
                                            <tr>

                                                <td id="table_border4">Next</td>
                                                <td id="table_border5">2011C</td>
                                                <td id="table_border6">Vest</td>
                                            </tr>

                                        </tbody>


                                    </table>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </div>
    <script>
        var dt = new Date().toLocaleDateString("de-DE");
        document.getElementById('date-time').innerHTML = dt;
    </script>
    </body>

    </html>
@endsection
