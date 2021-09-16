<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.logo_img{
    width: 250px;
    display: flex;
    justify-content: center;
}

.logo_img img{
    width: 100%;
}

   /* site report  */


.job_details span{
    font-weight: 600;
}

.img-box{
    width: 100%;
    text-align: center;
}

.img-box img{
    width: 100%;
}

table{
    width: 100%;
    background-color: #e6e6e6;
    font-size: 16px;
}
table, th, td{
    border: 1px solid black;
    text-align: center;
    padding: 5px;
}

.notice span{
    font-weight: 600;
}

.notice p{
    font-size: 19px;
}
        </style>
</head>
<body>

        <!-- header section  -->
        <div class="container">
               <div class="row">
                <div class="col-md-6">
                    <p>38/42 Swan Avenue Strathfield NSW 2135 <br>
                    Phone: 02 90 90 2800 <br>
                Email: info@acses.com.au</p>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <div class="logo_img text-center">
                   
            </div>
            </div> 
        </div>




        <!-- site report section  -->

        <div class="container">
            <h3 class="text-center mt-5">SITE REPORT</h3>

            <div class="job_details mt-5">
                <p>
                    <span>Job Number:</span> 1234</p>

                   <p> <span>Address:</span> 6 Test st, Sydney 2000 </p>
                    <p><span>Inspection of:</span> Concrete Slab,Level 2 </p>
                    <p><span>Inspection Date:</span> 0/9/2021 11:00 PM</p>
                    <p><span>Building Company:</span> Home Builder Pty Ltd</p>
                    <p><span>Publication:</span> Version 3</p>
            </div>
        </div>

        <!-- sign off section  -->
        <div class="container">
            <h3 class="mt-5">Sign Off</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                      
                        <h4>George Khalil | Chief Engineer</h4>
                        <p>0456 123 123 | george@acses.com.au</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                
                        <h4>George Khalil | Chief Engineer</h4>
                        <p>0456 123 123 | george@acses.com.au</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- version control  -->

        <div class="container">
            <h3 class="mt-3">Version Control</h3>
            <table class="mt-5">
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


            <div class="notice mt-5">
                <p>
                    <span>Notice:</span>
                    These directions shall not constitute permission to carry out work that may be deemed to constitute a <br> variation under any existing contractual arrangement between the builder and client. Clints approval must be <br> sought if the builder believes that this direction constitute such variation.
                </p>

                <div class="d-flex justify-content-between">
                    <p>121998.SIR.08092021_1100AM_V2.pdf</p>
                <p>1 of 2</p>
                </div>
            </div>

        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>