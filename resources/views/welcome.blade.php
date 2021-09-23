<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .container {
            max-width: 960px;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #b2b2b2;
            padding: 30px;
        }

        .header {
            width: 100%;
            height: 80px;
            position: relative;
        }

        .header .navbar {
            width: 100%;
            height: 80px;
            position: absolute;
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .logo img {
            width: 250px;
        }

        .txt {
            text-align: center;
            margin: 30px 0;
            font-size: 25px;
        }

        .job_details span {
            font-weight: 600;
        }

        .job_details p {
            line-height: 2;
        }

        .txt_1 {
            font-size: 25px;
            margin: 30px 0;
        }

        .signature_box {
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }

        .img-box {
            width: 100%;
            text-align: center;
        }

        .img-box img {
            width: 50%;
        }

        .txt_2 {
            font-size: 25px;
            margin: 30px 0;
        }


        table {
            width: 100%;
            background-color: #e6e6e6;
            font-size: 16px;
            border-spacing: 0;
            border: none;
        }

        th,
        td {
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }

        .notice span {
            font-weight: 600;
        }

        .notice p {
            font-size: 20px;
            margin: 30px 0;
        }

        .page_no {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>



    <div class="container">
        <div class="header">
            <div class="navbar">
                <div class="nav_txt">
                    <p>38/42 Swan Avenue Strathfield NSW 2135 <br>
                        Phone: 02 90 90 2800 <br>
                        Email: info@acses.com.au</p>
                </div>
                <div class="logo">
                    <img src="images/logo.png" alt="image here">
                </div>
            </div>
        </div>

        <h3 class="txt">SITE REPORT</h3>


        <div class="job_details">
            <p>
                <span>Job Number:</span> 1234
            </p>

            <p> <span>Address:</span> 6 Test st, Sydney 2000 </p>
            <p><span>Inspection of:</span> Concrete Slab,Level 2 </p>
            <p><span>Inspection Date:</span> 0/9/2021 11:00 PM</p>
            <p><span>Building Company:</span> Home Builder Pty Ltd</p>
            <p><span>Publication:</span> Version 3</p>
        </div>


        <h3 class="txt_1">Sign Off</h3>


        <table>
            <tr>
                <td>
                    <img src="images/signatur.png" alt="">
                    <h4>George Khalil | Chief Engineer</h4>
                    <p>0456 123 123 | george@acses.com.au</p>
                </td>
                <td>
                    <img src="images/signatur.png" alt="">
                    <h4>George Khalil | Chief Engineer</h4>
                    <p>0456 123 123 | george@acses.com.au</p>
                </td>
            </tr>
        </table>

        <h3 class="txt_2">Version Control</h3>

        <table>
            <tr>
                <th>Version</th>
                <th>Published Date</th>
                <th>Engineer</th>
                <th>Site Representative</th>
                <th>Avilable From</th>
            </tr>
            <tr>
                <td>1</td>
                <td>5/9/2021 4:00 PM</td>
                <td>George Khalil</td>
                <td>Thomas Neilson- Site Foreman</td>
                <td> <a href="#">OPEN</a> </td>
            </tr>
            <tr>
                <td>2</td>
                <td>6/9/2021 6:00 PM</td>
                <td>Mark Henderson</td>
                <td>James Rudd- OHS Officer</td>
                <td> <a href="#">OPEN</a> </td>
            </tr>
            <tr>
                <td>3</td>
                <td>9/9/2021 11:00 AM</td>
                <td>George Khalil</td>
                <td>James Rudd- OHS Officer</td>
                <td><a href="#">OPEN</a> </td>
            </tr>
        </table>



        <div class="notice">
            <p>
                <span>Notice:</span>
                These directions shall not constitute permission to carry out work that may be deemed to constitute a <br> variation under any existing contractual arrangement between the builder and client. Clints approval must be <br> sought if the builder believes that this direction constitute such variation.
            </p>

            <div class="page_no">
                <h6>121998.SIR.08092021_1100AM_V2.pdf</h6>
                <h6>1 of 2</h6>
            </div>
        </div>
    </div>


</body>

</html>