@extends('layouts.adminlayout')

@section('contents')
    <div class="containeer_wrapper">
        <div class="dashboard">
            <div class="flex_some">
                <div class="left_tr">
                    <h2 style="display: flex;align-items: center;white-space: nowrap;">All Invoice <div style="width:100%"></div><button onclick="location.href='pubinv'" style="margin-right:10px;height: 35px;min-width: 100px;color: #FFFFFF;background-color: #3a7dff;cursor: pointer;border-radius: 5px;border: transparent;font-size: 13px;font-weight: 600;font-family: 'Poppins', sans-serif;margin-bottom: -13px;">Invoice Link</button><button onclick="location.href='newvoice'" style="height: 35px;min-width: 100px;color: #FFFFFF;background-color: #3a7dff;cursor: pointer;border-radius: 5px;border: transparent;font-size: 13px;font-weight: 600;font-family: 'Poppins', sans-serif;margin-bottom: -13px;">Create New</button></h2>

                    <div class="conver">
                        <table id="transaction">
                            <tr>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>Amount</th>
                                <th>DateTime</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td> $customer_name ?></td>
                                <td> $customer_email ?></td>
                                <td> $customer_amount ?>৳</td>
                                <td>20 $customer_date ?></td>
                                <td>
                                    <span style="background-color:#0fc977">Active</span>
                                    <span>Pending</span>
                                </td>
                                <td><span onclick="location.href='inview?ref= $unique_id ?>'"style="color: #FFFFFF;background-color: #3a7dff;cursor:pointer">View</span></td>
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
