@extends('layouts.app')


@section('content')
<!-- Main content -->

<section class="content p-2">
    <div class="container-fluid">
        <div class="row">
            <h3 class="p-2">Report</h3>
            <p class="card-title m-auto ">
            <h3 class="p-2">Date - <span>
                    <?php echo date("d.m.Y"); ?>
                </span></h3>
            </p>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <div class="form-group">

                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="date" class="form-control  shadow-sm bg-white rounded"
                                            data-target="#reservationdate" value="<?php echo date('Y-m-d');?>" />

                                        <button type="submit" class="btn btn-primary mx-3">Search</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary">Edit</button>
                                <div class="table-responsive">
                                    <table id="report_table"
                                        class="table table-bordered table-striped text-center border">
                                        <thead>
                                            <tr>
                                                <th>Line</th>
                                                <th>Buyer</th>
                                                <th>Style No.#</th>
                                                <th>Item</th>
                                                <th>Target</th>
                                                <th>Manpower</th>
                                                <th>Output</th>
                                                <th>%</th>
                                                <th>Q'ty</th>
                                                <th>Input</th>
                                                <th>Total</th>
                                                <th>Output</th>
                                                <th>Total</th>
                                                <th>CMP($)</th>
                                                <th style="width:300px;">Daily CMP income</th>
                                                <th>Accumulation</th>
                                                <th>Inline</th>
                                                <th>H/over</th>
                                                <th>Total</th>
                                                <th>H/over balance</th>
                                                <th>
                                                    <table>
                                                        <tr>
                                                            <td>S,L,Adm Op</td>
                                                            <td>HP</td>
                                                        </tr>
                                                    </table>
                                                </th>
                                                <th>Time</th>
                                                <th>CMP / hr</th>
                                                <th>CMP / hr / PS</th>
                                                <th>Remark</th>
                                            </tr>
                                        </thead>

                                        <tbody style="background-color: #F2F2F2">
                                            <tr>
                                                <td style="vertical-align: middle;">1</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                 border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                            border-right: 0;
                                                                                                                                                            border-bottom: 1px solid #E6E6E6;
                                                                                                                                                               border-left:">
                                                                NEXT</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                NEXT
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-top:0;
                                                                                                    border-right: 0;
                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                    border-left:">
                                                                U79044</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                Sample
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                Jacket</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                Jacket
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="vertical-align: middle;">300</td>
                                                <td></td>
                                                <td style="vertical-align: middle;">55</td>
                                                <td style="vertical-align: middle;">13%</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                55</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                55</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                0
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 0;border-bottom: 1px solid #DEE2E6;border-left:">
                                                                $ 8.35</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0; border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                $ 5
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                $ 4</td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;border-right: 1px solid #DEE2E6;border-bottom: 1px solid #DEE2E6;border-left:0;">
                                                                -
                                                            </td>
                                                            <td
                                                                style="border-top:0; border-right: 0;border-bottom: 1px solid #DEE2E6;border-left: 1px solid #DEE2E6;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle;">$ 459.25</td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td style="border-top:0;
                                                                                                                                                        border-right: 0;
                                                                                                                                                        border-bottom: 1px solid #DEE2E6;
                                                                                                                                                        border-left: 0;"> -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                border-right: 0;
                                                                                                                                                                                                                border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                border-left:">
                                                                1,832</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                1
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:">
                                                                -</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                -
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                    <table class="w-100 text-center m-0">
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                            border-right: 0;
                                                                                                                                                                                                            border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                            border-left: 0;">
                                                                -
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="border-top:0;
                                                                                                                                                                                                                                                                    border-right: 0;
                                                                                                                                                                                                                                                                    border-bottom: 1px solid #DEE2E6;
                                                                                                                                                                                                                                                                    border-left:">
                                                                1,832</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border: none;">
                                                                1
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td class="p-0">
                                                   <table class="m-auto text-center w-100 table table-bordered custom-table-border-color">

                                                        <tbody>

                                                            <tr>
                                                                <td>
                                                                        90
                                                                </td>
                                                                <td>
                                                                    8
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
98
                                                                </td>

                                                            </tr>
                                                        </tbody>

                                                        <tbody>
                                                            <tr >
                                                                <td >86</td>
                                                                <td>8</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">94</td>
                                                            </tr>
                                                            {{-- <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"></td>
                                                            </tr> --}}
                                                        </tbody>


                                                    </table>
                                                </td>
                                                <td style="vertical-align: middle">11</td>
                                                <td style="vertical-align: middle">$ 246.70</td>
                                                <td style="vertical-align: middle">$ 2.62</td>
                                                <td></td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
{{-- <script src="{{ asset('plugins/jquery/3.0.0-alpha1/jquery.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

    $("#report_table").DataTable({
        "searching": false,
        "ordering": false,
        "paging": false,
        "info": false,
        "responsive": false, "lengthChange": false, "autoWidth": false,
        "buttons": [ "excel", "pdf",]
        }).buttons().container().appendTo('.col-md-6:eq(1)');

     });

</script>
@endsection
