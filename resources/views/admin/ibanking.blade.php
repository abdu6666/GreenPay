@extends('layouts.adminlayout')

@section('contents')
    <div class="containeer_wrapper">
        <div class="dashboard">
            <div class="flex_some">
                <div class="left_tr">
                    <h2>International Transactions</h2>

                    <div class="conver">
                        <table id="transaction">
                            <tr>
                                <th>Method</th>
                                <th>Transaction ID</th>
                                <th>Amount</th>
                                <th>DateTime</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td><img src="file/image/$methods?>" alt=""></td>
                                <td>$transaction_id ?></td>
                                <td>$dollar_amount ?>$</td>
                                <td>20$date_time ?></td>
                                <td>
                                    <span style="background-color:#0fc977">Active</span>
                                    <span>Pending</span>
                                </td>
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
