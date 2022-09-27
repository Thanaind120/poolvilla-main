<!doctype html>
<html lang="th">

<head>
    <title>หน้าแรก</title>
    @include('frontend/inc_header')
    <link rel="stylesheet" href="{{asset('assets_frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_frontend/css/owl.theme.default.min.css')}}">
    <script src="{{asset('assets_frontend/js/owl.carousel.min.js')}}"></script>
</head>

<body>
    @include('frontend/inc_navbar')
    <div class="bg-orange">
        <div class="clearfix">
            <div class="float-end width-search">
                <input class="form-control empty orange" type="text" id="iconified"
                    placeholder="&#xF002;  Where  are  you  looking for ?" aria-label="default input example">
            </div>
        </div>
    </div>
    <div class="bg-grey-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="none-mobile">
                        @include('frontend/inc_account')
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="mt-4"></div>
                    <div class="row">
                        <div>
                            <a style="cursor:pointer" class="btn-booking btn_show active">Ready to reviews</a>
                            <a style="cursor:pointer" class="btn-booking btn_show">Published</a>
                        </div>
                        <div>
                            <div class="boxshow">
                                @foreach ($review as $key => $val)
                                @if ($val->status == 0)
                                <form action="{{ url('/review/id='.$val->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card booking my-3" href="#">
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="{{asset('assets_frontend/images/'.$val->img_hotel)}}"
                                                        class="img-fluid" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body">
                                                    <div class="name-text">{{ $val->name_hotel }}</div>
                                                    <div class="text-orange text-review mt-3 mb-2">On a scale of 0 -
                                                        10,How
                                                        likely is it that you would recommend?</div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio1" value="1">
                                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio2" value="2">
                                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio3" value="3">
                                                        <label class="form-check-label" for="inlineRadio3">3 </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio4" value="4">
                                                        <label class="form-check-label" for="inlineRadio4">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio5" value="5">
                                                        <label class="form-check-label" for="inlineRadio5">5</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio6" value="6">
                                                        <label class="form-check-label" for="inlineRadio6">6</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio7" value="7">
                                                        <label class="form-check-label" for="inlineRadio7">7</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio8" value="8">
                                                        <label class="form-check-label" for="inlineRadio8">8</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio9" value="9">
                                                        <label class="form-check-label" for="inlineRadio9">9</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="recommend_rate" id="inlineRadio10" value="10">
                                                        <label class="form-check-label" for="inlineRadio10">10</label>
                                                    </div>
                                                    <div class="mt-3">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            name="write_review" rows="3"
                                                            placeholder="write a review..."></textarea>
                                                    </div>
                                                    <div class="row" id="hidden_one" style="display: none;">
                                                        <div class="col">
                                                            {{-- <form action="{{ url('/review/'.$val->id) }}"
                                                            method="POST" enctype="multipart/form-data"
                                                            id="form-upload"> --}}
                                                            {{-- @csrf --}}
                                                            <div class="form-group mt-3">
                                                                <label for="">Upload Images</label>
                                                                <input type="file" class="form-control"
                                                                    name="img_review[]" multiple accept="image/*"
                                                                    id="upload-img" />
                                                            </div>
                                                            <div class="img-thumbs img-thumbs-hidden" id="img-preview">
                                                            </div>
                                                            {{-- <button type="submit"
                                                                    class=" btn-upload-img mt-1">Upload</button> --}}
                                                            {{-- </form> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vl-top-book">
                                            <div class="row">
                                                <div class="col-sm-9" style="text-align: right;">
                                                    <font color="orange">* หลังจากที่รีวิวแล้วจะไม่สามารถแก้ไขรีวิวได้อีก</font>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn-blue">Review</button>
                                                    {{-- <button type="submit" class="btn-blue" data-bs-toggle="modal"
                                                        data-bs-target="#review">Review</button> --}}
                                                </div>
                                                {{-- <div class="modal fade" id="review" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-icon-re">
                                                                    <i class="fas fa-glass-cheers"></i>
                                                                </div>
                                                                <div class="text-head-sign text-orange">Thank you for
                                                                    review
                                                                    us!</div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @else
                                @endif
                                @endforeach
                                @if($check == 0 && $check != 1)
                                @php
                                $message = "ข้อมูลได้รับการเผยแพร่แล้ว";
                                echo "<script type='text/javascript'>
                                    alert('$message');

                                </script>";
                                @endphp
                                <br>
                                <br>
                                <h4>ข้อมูลได้รับการเผยแพร่แล้ว</h4>
                                @endif
                            </div>
                            <div class="boxshow">
                                @foreach ($reviews as $key => $val)
                                <div class="card booking my-3" href="#">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img src="{{asset('assets_frontend/images/'.$val->img_hotel)}}"
                                                    class="img-fluid" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-10 col-8">
                                                        <div class="name-text">{{$val->name_hotel}}</div>
                                                    </div>
                                                    <div class="col-sm-2 col-4">
                                                        <div class="point-badge">{{$val->recommend_rate}}</div>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="text-tiny text-grey">{{$val->write_review}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vl-top-book">
                                        <div class="row">
                                            <div class="col-sm-9"></div>
                                            <div class="col-sm-3">
                                                <a type="submit" class="btn-blue" href="{{url('/select-rooms')}}">See
                                                    room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend/inc_footer')
</body>

</html>

<script>
    $("#inlineRadio1").change(function () {
        var x = document.getElementById("inlineRadio1").value;
        console.log(x);
        if (x == 1) {
            $('#hidden_one').hide();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio2").change(function () {
        var x = document.getElementById("inlineRadio2").value;
        console.log(x);
        if (x == 2) {
            $('#hidden_one').hide();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio3").change(function () {
        var x = document.getElementById("inlineRadio3").value;
        console.log(x);
        if (x == 3) {
            $('#hidden_one').hide();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio4").change(function () {
        var x = document.getElementById("inlineRadio4").value;
        console.log(x);
        if (x == 4) {
            $('#hidden_one').hide();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio5").change(function () {
        var x = document.getElementById("inlineRadio5").value;
        console.log(x);
        if (x == 5) {
            $('#hidden_one').show();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio6").change(function () {
        var x = document.getElementById("inlineRadio6").value;
        console.log(x);
        if (x == 6) {
            $('#hidden_one').show();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio7").change(function () {
        var x = document.getElementById("inlineRadio7").value;
        console.log(x);
        if (x == 7) {
            $('#hidden_one').show();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio8").change(function () {
        var x = document.getElementById("inlineRadio8").value;
        console.log(x);
        if (x == 8) {
            $('#hidden_one').show();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio9").change(function () {
        var x = document.getElementById("inlineRadio9").value;
        console.log(x);
        if (x == 9) {
            $('#hidden_one').show();
        } else {
            $('#hidden_one').hide();
        }
    });
    $("#inlineRadio10").change(function () {
        var x = document.getElementById("inlineRadio10").value;
        console.log(x);
        if (x == 10) {
            $('#hidden_one').show();
        } else {
            $('#hidden_one').hide();
        }
    });

    $('.btn_show').click(function (event) {
        var rsnum = $(this).index();
        if ($(".boxshow").eq(rsnum).is(":hidden")) {
            $(".boxshow").hide();
            $(".boxshow").eq(rsnum).fadeIn();

        } else {}
        event.stopPropagation();
    });

    $(function () {
        $('.btn_show').click(function () {
            $('.btn_show').removeClass('active');
            $(this).addClass('active');
        });
    });

    var imgUpload = document.getElementById('upload-img'),
        imgPreview = document.getElementById('img-preview'),
        imgUploadForm = document.getElementById('form-upload'),
        totalFiles, previewTitle, previewTitleText, img;

    imgUpload.addEventListener('change', previewImgs, true);

    function previewImgs(event) {
        totalFiles = imgUpload.files.length;

        if (!!totalFiles) {
            imgPreview.classList.remove('img-thumbs-hidden');
        }

        for (var i = 0; i < totalFiles; i++) {
            wrapper = document.createElement('div');
            wrapper.classList.add('wrapper-thumb');
            removeBtn = document.createElement("span");
            nodeRemove = document.createTextNode('x');
            removeBtn.classList.add('remove-btn');
            removeBtn.appendChild(nodeRemove);
            img = document.createElement('img');
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add('img-preview-thumb');
            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            imgPreview.appendChild(wrapper);

            $('.remove-btn').click(function () {
                $(this).parent('.wrapper-thumb').remove();
            });

        }


    }

</script>
