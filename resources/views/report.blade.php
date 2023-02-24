@extends('layouts.app')
{{--
@extends('home') --}}

@section('content')
    {{--
<div class="container">
    <div class="row">
        <div class=" col-md-9 mx-auto my-5">


          <input type="date" class="form-control">
          <div class="">

            <div class="mt-3">

                <button type="submit" class="btn btn-primary ">Search</button>

            </div>

        </div>
        </div>
    </div>
</div> --}}
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div> --}}

                        <div class="card container-fluid">
                            <div class="card-header">
                                <h2 class="card-title">Report</h2>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class=" col-md-6 ">


                                        <input type="date" class="form-control">
                                        <div class="">

                                            <div class="mt-3">

                                                <button type="submit" class="btn btn-primary ">Search</button>

                                            </div>

                                            <button onclick="exportTableToExcel('tblData')">Export Table Data To Excel File</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
