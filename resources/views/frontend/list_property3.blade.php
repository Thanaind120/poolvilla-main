<!doctype html>
<html lang="th">
<head>      
    <title>หน้าแรก</title>
    <?php require('inc_header.php'); ?> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script src="js/owl.carousel.min.js"></script>
</head>
<body >
    <?php require('inc_navbar_hotel.php'); ?> 
    <div class="bg-grey">
    <div class="container">
        <div class="box-hotel">
            <div class="text-filter text-grey text-start text-bold">PROPERTY DETAIL</div>
            <div class="vl-filter-hotel">
                <div class="text-medium text-grey text-bold mt-3">Bedroom</div>
                <div class="d-flex f-m align-items-start">
              <div class="nav flex-column col-sm-4 nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link hotel active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Master Bedroom<br><span class="text-tiny text-light-grey">0 beds</span></button>
                <button class="nav-link hotel" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Second Bedroom<br><span class="text-tiny text-light-grey">0 beds</span></button>
                  <button class="btn-clear"><i class="fas fa-plus-circle me-2"></i>Add more bedroom</button>
              </div>
              <div class="tab-content col-xl-5 cols-m-85 ms-sm-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="text-medium text-grey  mt-3">Which beds are available in this room?</div>  
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">Twin bed(s)</div> 
                            <div class="text-tiny text-light-grey">35 - 51 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">Full bed(s)</div> 
                            <div class="text-tiny text-light-grey">52 - 59 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">Queen bed(s)</div> 
                            <div class="text-tiny text-light-grey">60 - 70 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">King bed(s)</div> 
                            <div class="text-tiny text-light-grey">71 - 81 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="text-medium text-grey mt-3">Which beds are available in this room?</div>  
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">Twin bed(s)</div> 
                            <div class="text-tiny text-light-grey">35 - 51 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">Full bed(s)</div> 
                            <div class="text-tiny text-light-grey">52 - 59 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">Queen bed(s)</div> 
                            <div class="text-tiny text-light-grey">60 - 70 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                            <div class="text-tiny text-grey text-bold">King bed(s)</div> 
                            <div class="text-tiny text-light-grey">71 - 81 inches wide</div>
                        </div>
                        <div class="col-sm-7">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
            <div class="vl-filter-hotel">
                <div class="text-medium text-grey text-bold mt-3">Bathroom</div>
                <div class="mb-3">
                    <div class="col-sm-4 ">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vl-filter-hotel">
                <div class="text-medium text-grey text-bold mt-3">How many guests can stay?</div>
                <div class="mb-3">
                    <div class="text-tiny text-grey text-bold">Adult</div> 
                    <div class="col-sm-4 ">
                        <div class="boxincrease">
                            <div class="">
                                <button data-decrease class="butincre minus">-   </button>
                                <input data-value class="butincre value" value="0" />
                                <button data-increase class="butincre plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                <div class="text-tiny text-grey text-bold">Kids</div> 
                <div class="col-sm-4 ">
                    <div class="boxincrease">
                        <div class="">
                            <button data-decrease class="butincre minus">-   </button>
                            <input data-value class="butincre value" value="0" />
                            <button data-increase class="butincre plus">+</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="vl-filter-hotel">
            <div class="text-medium text-grey text-bold mt-3">How big is this villa?</div>
                <div class="col-sm-4 mt-3">
                    <div class="text-tiny text-grey text-bold">Villa size (square meters) – optional</div>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="vl-filter-hotel">
            <div class="text-medium text-grey text-bold mt-3">More about villas</div>
                <div class="col-12 mt-3">
                   <textarea rows="3" class="form-control mb-3" type="text"></textarea>
                </div>
            </div>
            <div class="mb-3">
            <div class="text-medium text-grey text-bold mt-3">Frequently asked questions</div>
                <div class="col-12 mt-3">
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="text-tiny text-bold">Questions</div>
                             <input class="form-control mb-3" type="text" >
                        </div>
                        <div class="col-sm-6">
                            <div class="text-tiny text-bold">Answer</div>
                             <textarea rows="3" class="form-control mb-3" type="text" ></textarea>
                        </div>
                    </div>
                    <button class="btn-clear"><i class="fas fa-plus-circle me-2"></i>Add more </button>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                 <div class="col-sm-4 ">
                      <a href="list_property2.php"><div class="btn-grey mt-3">Back</div></a>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="list_property4.php"><div class="btn-orange mt-3">Next</div></a>
                    </div>
            </div>
    </div>
        </div>
        <div class="space-footer"></div>
    </div>
   <?php require('inc_footer_hotel.php'); ?> 
</body>
</html>

<script>
    $(function() {
	$('[data-decrease]').click(decrease);
	$('[data-increase]').click(increase);
	$('[data-value]').change(valueChange);
});

function decrease() {
	var value = $(this).parent().find('[data-value]').val();
	if(value > 0) {
		value--;
		$(this).parent().find('[data-value]').val(value);
	}
}

function increase() {
	var value = $(this).parent().find('[data-value]').val();
	if(value < 100) {
		value++;
		$(this).parent().find('[data-value]').val(value);
	}
}

function valueChange() {
	var value = $(this).val();
	if(value == undefined || isNaN(value) == true || value <= 0) {
		$(this).val(1);
	} else if(value >= 101) {
		$(this).val(100);
	}
}
</script>