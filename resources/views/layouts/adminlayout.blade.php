<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Panel - Dashboard</title>
    <link rel="stylesheet" href="/admin/file/css/style.css">
    <link rel="icon" href="/admin/file/image/favicon.png" type="image/gif">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <style>
        .analitcs_bydate_from_to .flexs {
            margin: 30px;
            display: flex;
            gap: 20px;
        }
        #submit_open_btn{
            min-width: 140px;
            margin-bottom: -13px;
        }
        .analitcs_bydate_from_to .flexs .row {
            width: 100%;
            max-width: 773px;
        }
        .analitcs_bydate_from_to .flexs .row #nm {
            margin: 0;
            margin-bottom: 0px;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 600;
            color: #333333;
        }
        .analitcs_bydate_from_to  .flexs .row span {
            display: flex;
        }
        .analitcs_bydate_from_to  .flexs .row span input {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #dddddd;
            outline: none;
            padding-left: 14px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
        }
        .analitcs_bydate_from_to  button {
            margin-top: -10px;
            height: 40px;
            margin-left: 30px;
            width: 140px;
            color: #FFFFFF;
            background-color: #3a7dff;
            cursor: pointer;
            border-radius: 5px;
            border: transparent;
            font-size: 13px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }

        @media screen and (max-width: 600px) {

            .analitcs_bydate_from_to .flexs {
                margin: 30px;
                display: block;
                gap: 20px;
            }
            .analitcs_bydate_from_to .flexs .row {
                width: 100%;
                max-width: 773px;
                margin-bottom:16px;
            }
            .analitcs_bydate_from_to .flexs .row #nm {
                margin: 0;
                margin-bottom: 0px;
                margin-bottom: 8px;
                font-size: 15px;
                font-weight: 600;
                color: #333333;
            }
            .analitcs_bydate_from_to  .flexs .row span {
                display: flex;
            }
            .analitcs_bydate_from_to  .flexs .row span input {
                width: 100%;
                height: 40px;
                border-radius: 5px;
                border: 1px solid #dddddd;
                outline: none;
                padding-left: 14px;
                font-family: 'Poppins', sans-serif;
                font-size: 15px;
            }
            .analitcs_bydate_from_to  button {
                margin-top: -10px;
                height: 40px;
                margin-left: 30px;
                width: 140px;
                color: #FFFFFF;
                background-color: #3a7dff;
                cursor: pointer;
                border-radius: 5px;
                border: transparent;
                font-size: 13px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
            }

            #textsssssssss{
                display:none;
            }
            #submit_open_btn{
                min-width: 60px;
                margin-bottom: 0px;
            }
        }


    </style>
</head>
<body style="overflow-x: hidden;">
@include('admin.includes.sidebar')

@yield('contents')

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
        window.onload = function() {

        var chart = new CanvasJS.Chart("method_usage_chart", {
            animationEnabled: true,
            title: {
                text: ""
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                    {y: "$calculate_bkash", label: "Bkash"},
                    {y: "$calculate_NAGAD", label: "Nagad"},
                    {y: "$calculate_rocket", label: "Rocket"},
                    {y: "$calculate_upay", label: "Upay"},
                    {y: 0, label: "Others"}
                ]
            }]
        });
        chart.render();

    }
</script>


</body>
</html>
