<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body>

<!-- nav section  -->


<section class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img src="img/Logo.png" alt=""> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">George Khalil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>


<!-- details section  -->


<section class="job_details">
    <div class="container">
        <div class="main_div">
            <div class="details">
                <i class="far fa-edit"></i>
                <p>
                    <span>Job No:</span> 123
                </p>

                <p><span>Job Address:</span> 6 Test st, Sydney </p>
                <p><span>Inspection of:</span> Concrete Slab </p>
                <p><span>Inspection Date / Time:</span> 30/8/2021 12:30 PM</p>
                <p><span>Building Company:</span> Home Builder Pty Ltd</p>
            </div>
            <div>
                <button class="custom_btn">PREVIEW</button>
            </div>
        </div>
    </div>
</section>


<!-- drag and drop section -->


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 newclass" id="effect" style="transition: 0.2s">
                <div class="row">
                    <div class="col-md-12">
                        <p class="icon_link">
                            <a href=""><i class="far fa-file-pdf"></i> &nbsp;Version 1 - Published on 06-09-2021 1:00 PM</a>
                        </p>

                        <p class="icon_link"><a href=""><i class="far fa-file-pdf"></i>&nbsp; Version 2 - Published on
                                08-09-2021
                                2:00 PM</a>
                        </p>

                    </div>
                </div>

                <ul class="row" id="sortable">

                    <li class="col-md-3">
                        <div class="item_box" style="border: 1px dashed grey;" onclick="newItem()" id="additem"
                             role="button">
                            <i class="fas fa-plus"></i>
                            <div class="item_no">
                                <p class="m-0">NEW ITEM
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="col-md-4">
                <div class="editing" id="editing">
                    <div class="row">
                        <div class="col-md-12 dlt_icon">
                            <h3>Editing #00001</h3>
                            <i class="far fa-trash-alt dlt_btn" onclick="del()"></i>
                        </div>
                    </div>


                    <div class="row" id="tnails">
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="my-2 custom_btn4">CAMERA / UPLOAD</button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <textarea placeholder="REQUIRED" id="descValue" class="req_textarea"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex mt-2 justify-content-between flex-wrap">
                                <button class="custom_btn2" onclick="del()">Cancel</button>
                                <button class="custom_btn3" onclick="save()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<input id="file-input" type="file" name="file" style="display: none;"/>


<!-- img modal  -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/img1.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/img1.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="img/img1.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video src="videoplayback.mp4" controls muted></video>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>

    var item_id = -1;


    $(function () {

        $(".custom_btn4").click(function () {
            $('#file-input').trigger('click');
        });

        $("#sortable").sortable({
            revert: true,
            update: function (event, ui) {
                var num = 1;
                $('#sortable li .item_no p').each(function () {
                    if (!$(this).text().includes("NEW")) {
                        $(this).text("Item #:" + padDigits(num, 4));
                        $(this).attr("pos", num);

                        $(this).click(function () {
                            alert($(this).attr("id"));
                        });

                        num += 1;
                    }
                })

                reOrder();

            }
        });

        $("ul, li").disableSelection();
    });


    function reOrder() {
        var items = [];

        $('#sortable li .item_no p').each(function () {
            if (!$(this).text().includes("NEW")) {
                var id = $(this).attr("id");
                var pos = $(this).attr("pos");

                items.push({"id": id, "pos": pos});
            }

        });

        console.log(items);

        var form_data = new FormData();

        form_data.append('items', JSON.stringify(items));


        $.ajax("api/report/reOrder/", {
            method: "POST",
            beforeSend: function (xhr) {
                // xhr.setRequestHeader("Content-Type", "application/json");
                xhr.setRequestHeader('Authorization', 'Bearer ' + jwtoken);
            },

            data: form_data,
            success: function (r) {
                console.log(r);
                reload(r);
                del();
            },

            contentType: false,
            cache: false,
            processData: false
        });

    }


</script>


<script>

    function newItem() {
        document.getElementById("editing").style.display = "block";
        remcls();
    }

    function del() {
        document.getElementById("editing").style.display = "none";
        addcls();
    }

    function remcls() {
        document.getElementById("effect").classList.remove("newclass");
    }

    function addcls() {
        document.getElementById("effect").classList.add("newclass");
    }

    $("#file-input").change(function () {
        send1();
    });


    function save() {

        var form_data = new FormData();

        form_data.append('item_id', item_id);
        form_data.append('description', $("#descValue").val());

        $.ajax("api/report/1/", {
            method: "POST",
            beforeSend: function (xhr) {
                // xhr.setRequestHeader("Content-Type", "application/json");
                xhr.setRequestHeader('Authorization', 'Bearer ' + jwtoken);
            },

            data: form_data,
            success: function (r) {
                console.log(r);
                reload(r);
                del();
            },

            contentType: false,
            cache: false,
            processData: false
        });

    }


    function load() {

        var form_data = new FormData();

        form_data.append('existing', 0);

        $.ajax("api/report/1/", {
            method: "POST",
            beforeSend: function (xhr) {
                // xhr.setRequestHeader("Content-Type", "application/json");
                xhr.setRequestHeader('Authorization', 'Bearer ' + jwtoken);
            },

            data: form_data,
            success: function (r) {
                reload(r);
            },

            contentType: false,
            cache: false,
            processData: false
        });

    }


    function padDigits(number, digits) {
        return Array(Math.max(digits - String(number).length + 1, 0)).join(0) + number;
    }


    function reload(r) {

        var htm = "";

        for (var i = 0; i < r.message.length; i++) {

            if (r.message[i].thumbnail.length > 0) {

                var rp = r.message[i].thumbnail[0].realPath;

                if (rp.includes(".mp4")) {
                    //
                    htm += '<li class="col-md-3"><div class="item_box"><div class="img_box"><img src="' + r.message[i].thumbnail[0].thumbnail + '" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"><div class="play_btn"><i class="far fa-play-circle"></i></div></div><p >' + r.message[i].desc + '</p><div class="item_no"><p id="' + r.message[i].item_id + '">Item #: ' + padDigits(i + 1, 4) + '</p></div></div></li>';


                } else {
                    htm += '<li class="col-md-3"><div class="item_box"><div class="img_box"><img src="' + r.message[i].thumbnail[0].thumbnail + '" alt="" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"></div><p >' + r.message[i].desc + '</p><div class="item_no"><p id="' + r.message[i].item_id + '">Item #: ' + padDigits(i + 1, 4) + '</p> </div></div></li>';
                }


            }

        }


        htm += ' <li class="col-md-3"><div class="item_box" style="border: 1px dashed grey;" onclick="newItem()" id="additem" role="button"><i class="fas fa-plus" ></i><div class="item_no"><p class="m-0">NEW ITEM</p></div></div> </li>';


        $("#sortable").html(htm);


    }

    var jwtoken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTYzMTYyNTQ1OSwiZXhwIjoxNjMxNjI5MDU5LCJuYmYiOjE2MzE2MjU0NTksImp0aSI6Imw0d3l0SXBpQU9tNG1keTIiLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.yUosi1vUri_IQApUTkCMvXhTro0-zBsMHiWk3VBkGGc";

    $.post("api/login", {"email": "a@a.com", "password": "asdasd"}, function (r) {
        jwtoken = r.token;
        load();
    });


    function send1() {

        var count = $('.ddimg').length;


        var form_data = new FormData();

        form_data.append('file', $('#file-input').prop('files')[0]);
        form_data.append('existing', count);
        form_data.append('item_id', item_id);

        $.ajax("api/report/1/item/create", {
            method: "POST",
            beforeSend: function (xhr) {
                // xhr.setRequestHeader("Content-Type", "application/json");
                xhr.setRequestHeader('Authorization', 'Bearer ' + jwtoken);
            },

            data: form_data,
            success: function (r) {

                console.log(r.message);

                var htm = "";
                var tn = "";

                item_id = r.message.item_id;

                for (var i = 0; i < r.message.items.length; i++) {
                    //     htm+= '<li class="col-md-3"><div class="item_box"><img src="'+r.message[i].thumbnail+'" alt=""><p>This is a picture of a lounge room</p><div class="item_no"><p>Item #: 00001</p> </div></div></li>';

                    tn += '<div class="col-md-6"><div class="ddimg"><img src="' + r.message.items[i].thumbnail + '" alt=""><i class="far fa-trash-alt del_btn"></i></div></div>';
                }


                htm += ' <li class="col-md-3"><div class="item_box" style="border: 1px dashed grey;" onclick="newItem()" id="additem" role="button"><i class="fas fa-plus" ></i><div class="item_no"><p class="m-0">NEW ITEM</p></div></div> </li>';


                //$("#sortable").html(htm);
                $("#tnails").html(tn);

            },

            contentType: false,
            cache: false,
            processData: false
        });

    }


</script>
<!--
<script>
  $( function() {
    $( "#additem").on( "click", function() {
      $( "#effect" ).removeClass( "newclass");
    })});
  </script>  -->
</body>

</html>
