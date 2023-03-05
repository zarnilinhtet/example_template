@extends('layouts.app')


@section('content')
 <div class="container-fluid mt-2 ">
        <div class="card border-0">
            <div class="mt-5">
                <p id="time" class="clock_oneline ml-5 mt-2"></p>
                <p class="line">Line-1S</p>
                <p class="rank">Rank 5</p>
                <div class="row">
                    <div class="col-md-6 ml-5">

                        <table>
                            <thead>
                                <tr>
                                    <th class="main_table "></th>
                                    <th style="width:20px;"></th>
                                    <th class=" main_table title_pd "> Present </th>
                                    <th style="width:20px;">
                                    </th>
                                    <th class=" main_table title_pd ">
                                        Daily</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <tr>
                                    <td class="border-0 " style="height:20px"></td>
                                </tr>
                                <td class="main_table tp_title " style="font-size: 40px;padding-left: 90px">
                                    Target
                                </td>
                                <td class="border-0 "></td>

                                <td class="tp_title">319</td>
                                <td class=" border-0 "></td>

                                <td class="tp_title">314</td>
                                </tr>
                                <tr class=" tp_oneline">
                                <tr>
                                    <td style="height:20px"></td>
                                </tr>
                                <td class="main_table tp_title text-center" style="font-size: 40px">Production</td>
                                <td class=" border-0 "></td>
                                <td class="tp_title">245</td>
                                <td class=" "></td>
                                <td class="tp_title">245</td>

                                </tr>
                                <tr>
                                <tr>
                                    <td style="height:20px"></td>
                                </tr>
                                <td class="main_table text-center percent">
                                    Percentage</td>
                                <td class=" border-0"></td>
                                <td class="percent">76%</td>
                                <td class="border-0"></td>
                                <td class="percent">78%</td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-5 mb-5">
                        <div class="right_percent">
                            <p class=' text-light'> 76%</p>
                        </div>
                        <div class='row bottom_rank'>
                            <div class="col-md-4">
                                <h4 class="r_rank" >
                                Rank 3


                                </h4>

                            </div>

                            <div class="col-md-4">
                                <h4 class="r_line" >
                                    Line 1


                                </h4>

                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="r_diff" >
                                            +3%
                                        </h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="rs_percentage">
                                            79%
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                       <div class='row bottom_rank'>
                            <div class="col-md-4">
                                <h4 class="r_rank" >
                                    Rank 4

                                </h4>

                            </div>

                            <div class="col-md-4">
                                <h4 class="r_line">
                                    Line 5

                                </h4>

                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="r_diff">
                                        +1%
                                        </h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="rs_percentage">
                                            77%
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class='row bottom_rank'>
                            <div class="col-md-4">
                                <h4 class="r_rank">
                                    Rank 6


                                </h4>

                            </div>

                            <div class="col-md-4">
                                <h4 class="r_line">
                                    Line 8


                                </h4>

                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="r_diff" style="color: #ED3334">
                                            -2%
                                        </h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="rs_percentage " style="background-color: #ED3334">
                                        74%
                                        </h4>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script>
            function showTime() {
                var date = new Date().toLocaleTimeString(
                    "en-US", {
                        hour: "2-digit",
                        minute: "2-digit",
                        second: "2-digit"
                    },
                    Intl.DateTimeFormat().resolvedOptions().timeZone
                );
                document.getElementById("time").innerHTML = date;
            }
            setInterval(showTime, 1000);
        </script>







    @endsection
