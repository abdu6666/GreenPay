@extends('layouts.adminlayout')

@section('contents')
    <div class="containeer_wrapper">
        <div class="dashboard">
            <div class="flex_some">
                <div class="left_tr">
                    <h2 style="display: flex;align-items: center;white-space: nowrap;">All Transactions <div style="width:100%"></div><button id="submit_open_btn"onclick="show_search_by_date()" style="display: flex; align-items: center; justify-content: space-evenly;height: 35px;color: #FFFFFF;background-color: #3a7dff;cursor: pointer;border-radius: 5px;border: transparent;font-size: 13px;font-weight: 600;font-family: 'Poppins', sans-serif;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 20l-4.05-4.05m0 0a7 7 0 1 0-9.9-9.9a7 7 0 0 0 9.9 9.9z"/></svg> <span id="textsssssssss">Search By Date</span></button></h2>


                    <form action=""method="GET"class="analitcs_bydate_from_to"style="display:$extra_code_search_value_style">
                        <div class="flexs">
                            <div class="row">
                                <p id="nm">From Date:</p>
                                <span><input type="date"name="fdate"required value="$extra_code_search_value_fdate"></span>
                            </div>

                            <div class="row">
                                <p id="nm">To Date</p>
                                <span><input type="date"name="tdate"required value="$extra_code_search_value_tdate"></span>
                            </div>
                        </div>

                        <button id="bkash_savechange">Search</button>
                    </form>

                    <script>
                        function show_search_by_date(){
                            var analitcs_bydate_from_to = document.querySelector(".analitcs_bydate_from_to");

                            if(analitcs_bydate_from_to.style.display == "none"){
                                analitcs_bydate_from_to.style.display = "block";
                            }else{
                                analitcs_bydate_from_to.style.display = "none";
                            }
                        }
                    </script>

                    <div class="conver">
                        <table id="transaction">
                            <tr>
                                <th>Method</th>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>DateTime</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td><img src="file/image/$methods" alt=""></td>
                                <td> $transaction_id ?></td>
                                <td> $amount $currency_symbol?></td>
                                <td>20 $date_time ?></td>
                                <td>
                                    <span style="background-color:#0fc977">Active</span>
                                    <span>Pending</span>
                                </td>
                                <td><span onclick="location.href='banview?ref= $transaction_id ?>'"style="color: #FFFFFF;background-color: #3a7dff;cursor:pointer">View</span></td>
                            </tr>
                        </table>

                        <div style="margin-top: 90px;text-align: center;font-size: 15px;font-weight: 600;color: #0b235d;margin-bottom: 50px;">No Data Found</div>
                    </div>
                </div>

                <div class="right_chart">
                    <h2>Method Usage Chart</h2>

                    <div id="method_usage_chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
