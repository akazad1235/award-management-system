<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WE JOYEE Award</title>
    <!-- Bootstrap -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">

</head>

<body>




<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="row justify-content-md-center">
        <div class="col col-lg-7">
            <div class="card card-4">
                <div class="panel" style="margin-top: 20px">
                    <div class="fadeIn first">
                        <img src="{{asset('frontend/images/logo.png')}}" id="icon" alt="User Icon">
                        <!-- <h1>Aditya News</h1> -->
                    </div>
                    <!--  <h2>User Login</h2>
                     <p>Please enter your email and password</p> -->
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @elseif(session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                        @endif
                    <h2 class="title">JOYEE Award Registration Form</h2>
                    <form method="post" action="{{route('award.register')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <!--  -->
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                        </li>
                                        <!-- <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Step 5</i></a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                              <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>Step 6</i></a>
                                          </li> -->


                                    </ul>
                                </div>
                            </div>


                            <div class="tab-content" id="main_form">
                                <!-- step 1 -->
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <!-- <h4 class="text-center">Personal Information</h4> -->
                                    <div class="row">
                                        <fieldset class="col-lg-12 border border-primary p-3 mb-3">
                                            <legend class="w-50 text-center main-title"><small class="text-uppercase font-weight-bold "> Personal Information</small></legend>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Business Name </label>
                                                    <span class="requierd-star"></span>
                                                        <input type="text" class="form-control" name="business_name" id="bName"  >
                                                        <p class="text-danger" class="error"></p>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Business Owner Name </label>
                                                    <span class="requierd-star"></span>
                                                    <input type="text" class="form-control" id="bOwner" name="business_owner_name">
                                                    <p class="text-danger" class="error"></p>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Year of establishment</label>
                                                    <span class="requierd-star"></span>
                                                    <input type="text" class="form-control" id="establish"  name="establishment">
                                                    <p class="text-danger" class="error"></p>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Award Category</label>
                                                    <span class="requierd-star"></span>
                                                    <select id="inputState" class="form-control" name="award_category">
                                                        <option selected>Select Product Category</option>
                                                        <option>Organic</option>
                                                        <option>Handycraft</option>
                                                        <option>etc.</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Signature Item</label>
                                                    <span class="requierd-star"></span>
                                                    <input type="text" class="form-control" name="signature_item">
                                                </div>

                                                <!-- <div class="col-md-6 mb-6">
                                                   <label class="control-label">Date Of Birth</label>
                                                       <div class="input-group date">
                                                           <input class="form-control" type="text" />
                                                          <span class="input-group-append">
                                                               <button class="btn btn-outline-secondary" type="button">
                                                                   <i class="fa fa-calendar"></i>
                                                               </button></span>
                                                       </div>
                                                </div> -->

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Are You subscriber of WE? </label>
                                                    <span class="requierd-star"></span>
                                                    <!-- <div class="custom-control custom-radio">
                                                       <input type="radio"  id="chkPassport-m-4" class="custom-control-input"  name="groupOfDefaultRadios">
                                                       <label class="custom-control-label" for="defaultGroupExample1">Yes</label>
                                                     </div> -->

                                                    <div class="radio">
                                                        <label><input type="radio" id="chkPassport-m-4" name="yes"  value="yes" > Yes </label>
                                                    </div>

                                                    <div id="yes-we" style="display: none">
                                                        <div class="wt-mb-xs-2">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Subscriber Number" name="subscribers" class="form-control"
                                                                       >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="radio">
                                                        <label><input type="radio" name="yes" value="no" > No </label>
                                                    </div>

                                                </div>




                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Website link</label>

                                                    <input type="text" class="form-control" name="website_url">
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Major Breakthrough </label>
                                                    <span class="requierd-star" name=""></span>

                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chkPassport-m-1" type="checkbox" value="news" name="major_breakthrough[]" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            News
                                                        </label>
                                                    </div>

                                                    <div id="news" style="display: none">
                                                        <div class="wt-mb-xs-2">
                                                            <div class="form-group">
                                                                <textarea class="form-control" placeholder="Details Information" name="news_info" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chkPassport-m-2" name="major_breakthrough[]" type="checkbox" value="award" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Award
                                                        </label>
                                                    </div>

                                                    <div id="award" style="display: none">
                                                        <div class="wt-mb-xs-2">
                                                            <div class="form-group">
                                                                <textarea class="form-control" placeholder="Details Information" name="award_info" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" id="chkPassport-m-3" type="checkbox" name="major_breakthrough[]" value="others" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Others
                                                        </label>
                                                    </div>

                                                    <div id="others" style="display: none">
                                                        <div class="wt-mb-xs-2">
                                                            <div class="form-group">
                                                                <textarea class="form-control" placeholder="Details Information" name="others_info" id="exampleFormControlTextarea1" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Country </label>
                                                    <span class="requierd-star"></span>
                                                    <select id="dd"  name="country" class="form-control">
                                                        <option value="">Select Country</option>
                                                        <option value="bangladesh">bangladesh</option>
                                                        <option value="india">India</option>
                                                        <option value="canada">Canada</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <div id="district">
                                                        <label for="validationServer013">District </label>
                                                        <select  class="form-control" name="district">
                                                            <option value="">Select District</option>
                                                            <option value="barguna">Barguna</option>
                                                            <option value="Bandarban">Bandarban</option>
                                                            <option value="barisal">Barisal</option>
                                                            <option value="jhalokati">Jhalokati </option>
                                                            <option value="patuakhali">Patuakhali</option>
                                                            <option value="pirojpur">Pirojpur</option>
                                                            <option value="brahmanbaria">Brahmanbaria</option>
                                                            <option value="chandpur">Chandpur</option>
                                                            <option value="chittagong">Chittagong</option>
                                                            <option value="comilla">Comilla</option>
                                                            <option value="cox's bazar">Cox's Bazar </option>
                                                            <option value="feni">Feni</option>
                                                            <option value="khagrachhari">Khagrachhari</option>
                                                            <option value="lakshmipur">Lakshmipur</option>
                                                            <option value="noakhali">Noakhali</option>
                                                            <option value="rangamati">Rangamati</option>
                                                            <option value="dhaka">Dhaka</option>
                                                            <option value="faridpur">Faridpur</option>
                                                            <option value="gazipur ">Gazipur</option>
                                                            <option value="gopalganj">Gopalganj</option>
                                                            <option value="kishoreganj">Kishoreganj</option>
                                                            <option value="madaripur ">Madaripur</option>
                                                            <option value="manikganj">Manikganj</option>
                                                            <option value="munshiganj">Munshiganj</option>
                                                            <option value="narayanganj">Narayanganj</option>
                                                            <option value="narsingdi">Narsingdi</option>
                                                            <option value="rajbari">Rajbari</option>
                                                            <option value="shariatpur ">Shariatpur</option>
                                                            <option value="tangail">Tangail</option>
                                                            <option value="bagerhat">Bagerhat</option>
                                                            <option value="chuadanga">Chuadanga</option>
                                                            <option value="jessore">Jessore</option>
                                                            <option value="jhenaidah">Jhenaidah</option>
                                                            <option value="khulna">Khulna</option>
                                                            <option value="kushtia">Kushtia</option>
                                                            <option value="magura">Magura</option>
                                                            <option value="meherpur">Meherpur</option>
                                                            <option value="narail">Narail</option>
                                                            <option value="satkhira">Satkhira</option>
                                                            <option value="jamalpur">Jamalpur</option>
                                                            <option value="mymensingh">Mymensingh</option>
                                                            <option value="netrokona">Netrokona</option>
                                                            <option value="sherpur">Sherpur</option>
                                                            <option value="bogra">Bogra</option>
                                                            <option value="joypurhat">Joypurhat</option>
                                                            <option value="naogaon">Naogaon</option>
                                                            <option value="natore">Natore</option>
                                                            <option value="chapainawabganj">Chapainawabganj</option>
                                                            <option value="pabna">Pabna</option>
                                                            <option value="rajshahi">Rajshahi</option>
                                                            <option value="sirajganj">Sirajganj</option>
                                                            <option value="dinajpur">Dinajpur</option>
                                                            <option value="gaibandha">Gaibandha</option>
                                                            <option value="kurigram">Kurigram</option>
                                                            <option value="lalmonirhat">Lalmonirhat</option>
                                                            <option value="nilphamari">Nilphamari</option>
                                                            <option value="panchagarh">Panchagarh</option>
                                                            <option value="rangpur">Rangpur</option>
                                                            <option value="thakurgaon">Thakurgaon</option>
                                                            <option value="habiganj">Habiganj</option>
                                                            <option value="moulvibazar">Moulvibazar</option>
                                                            <option value="sunamganj">Sunamganj</option>
                                                            <option value="sylhet">Sylhet</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Contact</label>
                                                    <span class="requierd-star" ></span>
                                                    <input type="number" class="form-control" name="contact">
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">E-mail Address  </label>
                                                    <span class="requierd-star"></span>
                                                    <input type="text" class="form-control" name="email"
                                                           >
                                                </div>

                                            </div>
                                        </fieldset>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                    </ul>
                                </div>



                                <!-- step 2 -->
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="row">
                                        <fieldset class="col-lg-12 border border-primary p-3 mb-3">
                                            <legend class="w-25 text-center main-title"><small class="text-uppercase font-weight-bold ">Joining ...... </small></legend>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013">Joining Date of We Group</label>
                                                    <span class="requierd-star"></span>
                                                    <input type="date" class="form-control" name="join_date"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label style="font-size: 12px" for="validationServer013"> Review achieved from We Group (oct 2020 – Aug 2021)</label>
                                                    <span class="requierd-star"></span>
                                                    <input type="number" class="form-control" name="review_achieved"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013"> Number of post (Oct 2020 – Aug 2021) </label>
                                                    <span class="requierd-star"></span>
                                                    <input type="number" class="form-control" name="number_of_post"
                                                           required>
                                                </div>
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013"> Total Revenue of WE (Oct 2020 – Aug 2021) </label>
                                                    <span class="requierd-star"></span>
                                                    <input type="number" class="form-control" name="revenue"
                                                           required>
                                                </div>

                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013"> Product Innovation </label>
                                                    <span class="requierd-star"></span>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" required name="product_innovation" rows="2"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013"> Trade License  </label>
                                                    <input id="file-upload1" type="file" name="file"/>
                                                </div>



                                                <div class="col-md-6 mb-6">
                                                    <label for="validationServer013"> Team Size</label>
                                                    <span class="requierd-star"></span>
                                                    <select id="inputState" class="form-control" name="team_size" required>
                                                        <option value="" selected>Select Team Size</option>
                                                        <option value="1-5">(1-5)</option>
                                                        <option value="5-10">(6-10)</option>
                                                        <option value="10-20">(10-20)</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </fieldset>

                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <!-- <li><button type="button" class="default-btn next-step skip-btn">Drafts</button></li> -->
                                        <li><button type="submit" class="default-btn next-step">Submit</button></li>
                                    </ul>
                                </div>

                                                </div>

{{--                                                <div class="col-md-6 mb-6">--}}
{{--                                                    <!-- step 3 -->--}}

{{--                                                    <div class="tab-pane" role="tabpanel" id="step3">--}}
{{--                                                        <!-- <h4 class="text-center">Step 3</h4> -->--}}
{{--                                                        <div class="row">--}}
{{--                                                            <!--  Detail of Income & Income Tax -->--}}

{{--                                                            <fieldset class="col-lg-12 border border-primary p-3 mb-3">--}}
{{--                                                                <legend class="w-75 text-center main-title"><small class="text-uppercase font-weight-bold ">Detail of Income & Income Tax</small></legend>--}}

{{--                                                                <div class="form-row">--}}
{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Average Annual Income </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </fieldset>--}}

{{--                                                        </div>--}}
{{--                                                        <ul class="list-inline pull-right">--}}
{{--                                                            <li><button type="button" class="default-btn prev-step">Back</button></li>--}}
{{--                                                            <li><button type="button" class="default-btn next-step Drafts-btn">Drafts</button></li>--}}
{{--                                                            <li><button type="button" class="default-btn next-step">Continue</button></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}



{{--                                                    <!-- step 4 -->--}}

{{--                                                    <div class="tab-pane" role="tabpanel" id="step4">--}}
{{--                                                        <!-- <h4 class="text-center">Step 4</h4> -->--}}
{{--                                                        <div class="row">--}}
{{--                                                            <!--  Company Information -->--}}

{{--                                                            <fieldset class="col-lg-12 border border-primary p-3 mb-3">--}}
{{--                                                                <legend class="w-50 text-center main-title"><small class="text-uppercase font-weight-bold ">Company Information</small></legend>--}}

{{--                                                                <div class="form-row">--}}

{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Name  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}



{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Office Address  </label>--}}

{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                        >--}}
{{--                                                                    </div>--}}



{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> District </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Postal Code  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Phone No. (Office) </label>--}}

{{--                                                                        <input type="text" class="form-control">--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Mobile </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Email ID </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Website (If any) </label>--}}

{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Facebook Page Name</label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013">Company Facebook Page Link  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Facebook Group Name: (if any)</label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Facebook Group Link: (if any)  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Linked-in Link : (if any)  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Product Category </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013">Product Name  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Company Establishment Year  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Annual Average Turnover *  </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Monthly Average Order </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}




{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013">Business Channel</label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}

{{--                                                                        <div class="form-check">--}}
{{--                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                                            <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                                                Online--}}
{{--                                                                            </label>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="form-check">--}}
{{--                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                                            <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                                                Offline--}}
{{--                                                                            </label>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="form-check">--}}
{{--                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                                            <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                                                Both--}}
{{--                                                                            </label>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="form-check">--}}
{{--                                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                                            <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                                                Others--}}
{{--                                                                            </label>--}}
{{--                                                                        </div>--}}

{{--                                                                    </div>--}}

{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Are you interested in Export? </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}

{{--                                                                        <div class="custom-control custom-radio">--}}
{{--                                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample77" name="groupOfDefaultRadios" checked>--}}
{{--                                                                            <label class="custom-control-label" for="defaultGroupExample2">Yes</label>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="custom-control custom-radio">--}}
{{--                                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample88" name="groupOfDefaultRadios" checked>--}}
{{--                                                                            <label class="custom-control-label" for="defaultGroupExample2">No</label>--}}
{{--                                                                        </div>--}}

{{--                                                                        <div class="custom-control custom-radio">--}}
{{--                                                                            <input type="radio" class="custom-control-input" id="defaultGroupExample99" name="groupOfDefaultRadios" checked>--}}
{{--                                                                            <label class="custom-control-label" for="defaultGroupExample2">may be</label>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> WE Involvement (Short Details) * </label>--}}
{{--                                                                        <span class="requierd-star"></span>--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               required>--}}
{{--                                                                    </div>--}}


{{--                                                                    <div class="col-md-6 mb-6">--}}
{{--                                                                        <label for="validationServer013"> Joining Date </label>--}}

{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                        >--}}

{{--                                                                        <label for="validationServer013"> Total Sale from WE</label>--}}
{{--                                                    <span class="requierd-star"></span>--}}
{{--                                                    <input type="text" class="form-control"--}}
{{--                                                           required>--}}
{{--                                                </div>--}}


{{--                                                <div class="col-md-6 mb-6">--}}
{{--                                                    <label for="validationServer013">Monthly Sale from WE</label>--}}
{{--                                                    <span class="requierd-star"></span>--}}
{{--                                                    <input type="text" class="form-control"--}}
{{--                                                           required>--}}
{{--                                                </div>--}}


{{--                                                <div class="col-md-6 mb-6">--}}
{{--                                                    <label for="validationServer013">Total Post in WE: *</label>--}}
{{--                                                    <span class="requierd-star"></span>--}}

{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                        <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                            1 to 100--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                        <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                            101 to 200--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                        <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                            201 to 300--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                        <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                            301 to 400--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                        <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                            401 to 500--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                                        <label class="form-check-label" for="defaultCheck1">--}}
{{--                                                            More than 500--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <ul class="list-inline pull-right">--}}
{{--                                        <li><button type="button" class="default-btn prev-step">Back</button></li>--}}
{{--                                        <li><button type="button" class="default-btn next-step Drafts-btn">Drafts</button></li>--}}
{{--                                        <li><button type="button" class="default-btn next-step">Continue</button></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <!-- step 5 -->--}}

{{--                                <div class="tab-pane" role="tabpanel" id="step5">--}}
{{--                                    <!-- <h4 class="text-center">Step 5</h4> -->--}}
{{--                                    <div class="row">--}}
{{--                                        <!--  Reference -->--}}

{{--                                        <fieldset class="col-lg-12 border border-primary p-3 mb-3">--}}
{{--                                            <legend class="w-50 text-center main-title"><small class="text-uppercase font-weight-bold ">Reference Number</small></legend>--}}

{{--                                            <div class="form-row">--}}
{{--                                                <div class="col-md-6 mb-6">--}}
{{--                                                    <label for="validationServer013">Name of Reference 1 </label>--}}
{{--                                                    <span class="requierd-star"></span>--}}
{{--                                                    <input type="text" class="form-control"--}}
{{--                                                           required>--}}
{{--                                                </div>--}}

{{--                                                <div class="col-md-6 mb-6">--}}
{{--                                                    <label for="validationServer013">Name of Reference 2 </label>--}}
{{--                                                    <input type="text" class="form-control">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}


{{--                                        <!--   Acceptance Declaration -->--}}
{{--                                    </div>--}}
{{--                                    <ul class="list-inline pull-right">--}}
{{--                                        <li><button type="button" class="default-btn prev-step">Back</button></li>--}}
{{--                                        <li><button type="button" class="default-btn next-step Drafts-btn">Drafts</button></li>--}}
{{--                                        <li><button type="button" class="default-btn next-step">Continue</button></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}




{{--                                <!-- step 6 -->--}}

{{--                                <div class="tab-pane" role="tabpanel" id="step6">--}}
{{--                                    <!-- <h4 class="text-center">Step 6</h4> -->--}}
{{--                                    <div class="row">--}}
{{--                                        <fieldset class="col-lg-12 border border-primary p-3 mb-3">--}}
{{--                                            <legend class="w-50 text-center main-title"><small class="text-uppercase font-weight-bold "> Acceptance Declaration</small></legend>--}}
{{--                                            <p style="font-size: 13px; text-align: justify; line-height: 20px;">I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately. In case any of the above information is found to be false or untrue or misleading or misrepresentation, I am aware that I may be held liable for it. I hereby authorize WE to use it for internal usage and member information updating purposes.</p>--}}
{{--                                            <div class="form-row">--}}
{{--                                                <div class="col-md-6 mb-6">--}}
{{--                                                    <label for=""> Please Accept * </label>--}}
{{--                                                    <span class="requierd-star"></span>--}}

{{--                                                    <div class="custom-control custom-radio">--}}
{{--                                                        <input type="radio" class="custom-control-input" id="" name="groupOfDefaultRadios" checked>--}}
{{--                                                        <label class="custom-control-label" for="defaultGroupExample2">I Agree</label>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="custom-control custom-radio">--}}
{{--                                                        <input type="radio" class="custom-control-input" id="" name="groupOfDefaultRadios" checked>--}}
{{--                                                        <label class="custom-control-label" for="defaultGroupExample2">I Do Not Agree</label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <ul class="list-inline pull-right">--}}
{{--                                        <li><button type="button" class="default-btn prev-step">Back</button></li>--}}
{{--                                        <li><button type="button" class="default-btn next-step Drafts-btn">Drafts</button></li>--}}
{{--                                        <li><button type="button" class="default-btn next-step">Continue</button></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                            </div>--}}


                        </div>
                        <!--  -->


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script>

    $(function () {
        $(".date").datepicker({
            autoclose: true,
            todayHighlight: true
        });
    });
</script>

<script>
    // ------------step-wizard-------------
    var aaz = document.getElementById("dd");
    var dis = document.getElementById("district");
    aaz.addEventListener("change", myFunction);
    function myFunction() {
        if(aaz.value == "bangladesh"){
            dis.style.display = "block";
        }else{
            dis.style.display = "none";
        }
    }
    $(document).ready(function () {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {
           // let bName = document.getElementById('bName')
           // let bOwner = document.getElementById('bOwner')
           // let establish = document.getElementById('establish')
           // var y = document.getElementsByTagName("input");
           //  for (var i = 0; i < y.length; i++) {
           //      if (y[i].value == "") {
           //          // add an "invalid" class to the field:
           //         // y[i].className += " invalid";
           //          console.log('ok');
           //          // and set the current valid status to false
           //         // valid = false;
           //          document.getElementsByClassName('error').innerText='error'
           //      }
           //  }
           //
           //      if(bName.value.length == 0){
           //          document.getElementById('bError').innerText ='Business name is required'
           //          document.getElementById('bOwnerError').innerText =''
           //          document.getElementById('establishError').innerText=''
           //
           //      }else if(bOwner.value.length == 0){
           //          document.getElementById('bOwnerError').innerText ='Business owner name in required'
           //          document.getElementById('bError').innerText =''
           //          document.getElementById('establishError').innerText=''
           //      }else if(establish.value.length == 0){
           //          document.getElementById('establishError').innerText ='establishError'
           //          document.getElementById('bOwnerError').innerText=""
           //          document.getElementById('bError').innerText=''
           //      }else{
           //
           //      }
            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);



        });
        $(".prev-step").click(function (e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });



</script>


<script type="text/javascript">

    $(function () {
        $("#chkPassport-m-1").click(function () {
            if ($(this).is(":checked")) {
                $("#news").show();
            } else {
                $("#news").hide();
            }
        });

        $("#chkPassport-m-2").click(function () {
            if ($(this).is(":checked")) {
                $("#award").show();
            } else {
                $("#award").hide();
            }
        });


        $("#chkPassport-m-3").click(function () {
            if ($(this).is(":checked")) {
                $("#others").show();
            } else {
                $("#other").hide();
            }
        });

        $("#chkPassport-m-4").click(function () {
            if ($(this).is(":checked")) {
                $("#yes-we").show();
            } else {
                $("#yes-we").hide();
            }
        });




    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


{{--<script src="{{asset('frontend/js/global.js')}}"></script>--}}
<!-- <script src="js/bootstrap.min.js"></script> -->
</body>
</html>

