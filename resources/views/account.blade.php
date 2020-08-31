@extends('layouts.app')

@section('content')
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                    <center><h4><b>ACCOUNT OPENINIG FORM</b></h4></center>
                    </div>
                    <div class="card-body">

                            <div class="row">
<!-- FORM STARTS HERE-->
                                <!-- <form action="submit" method="post" accept-charset="UTF-8"> -->
                                <form method="post" enctype="multipart/form-data" action="{{ url('account')}}">
                                    @csrf
                                    <div class="col-md-12 ">
                                        <label>Please select branch from the drop down:<br></label>

                                    </div>
                                    <div class="col-md-4 col-sm-4 ">
                                        <div class="form-group">
                                            <select class="form-control" style="text-transform: capitalize;"
                                                            name="bank_branch_id">
                                                        <option value="1" selected="selected">Naxal Branch</option>
                                                        <option value="2">Damak</option>
                                                        <option value="3">New Road</option>
                                                        <option value="4">Dhadingbesi</option>
                                                        <option value="5">Kumaripati</option>
                                                        <option value="6">Pokhara</option>
                                                        <option value="7">Narayangarh</option>
                                                        <option value="8">Suryabinayak</option>
                                                        <option value="9">Chuchchepati</option>
                                                        <option value="10">Inaruwa</option>
                                                        <option value="11">Belbari</option>
                                                        <option value="12">Bhandara</option>
                                                        <option value="13">Gongabu</option>
                                                        <option value="14">Satdobato
                                                        </option>
                                                        <option value="15">Kalanki</option>
                                                        <option value="16">Myanglung</option>
                                                        <option value="17">Nepalgunj</option>
                                                        <option value="18">Biratnagar</option>
                                                        <option value="19">Khandbari</option>
                                                        <option value="20">Naubise</option>
                                                        <option value="21">Birgunj</option>
                                                        <option value="22">Butwal</option>
                                                        <option value="23">New Baneshwor</option>
                                                        <option value="24">Teku</option>
                                                        <option value="25">Hetauda</option>
                                                        <option value="26">Dhangadi</option>
                                                        <option value="27">Ghorahi</option>
                                                        <option value="28">Ekantakuna</option>
                                                        <option value="29">Mahendranagar</option>
                                                        <option value="30">Surkhet</option>
                                                        <option value="31">Bhairahawa</option>
                                                        <option value="32">Kalaiya</option>
                                                        <option value="33">Janakpur</option>
                                                        <option value="34">Lahan</option>
                                                        <option value="35">Dharan</option>
                                                        <option value="36">Itahari</option>
                                                        <option value="37">Birtamod</option>
                                                        <option value="38">Nayabazar</option>
                                                        <option value="39">Banepa</option>
                                                        <option value="40">Damauli</option>
                                                        <option value="41">Bidur</option>
                                                        <option value="42">Hariwan</option>
                                                        <option value="43">Lalbandi</option>
                                                        <option value="44">Manma</option>
                                                        <option value="45">Timure</option>
                                                        <option value="46">Maharajgunj</option>
                                                        <option value="47">Gaushala</option>
                                                        <option value="48">Amarsingh</option>
                                                        <option value="49">Birauta</option>
                                                        <option value="50">Bagar</option>
                                                        <option value="51">Tulsipur</option>
                                                        <option value="52">Mai</option>
                                                        <option value="53">Gaighat</option>
                                                        <option value="54">Amargadhi</option>
                                                        <option value="55">Tikapur</option>
                                                        <option value="56">Tansen</option>
                                                        <option value="57">Ilam</option>
                                                        <option value="58">Rajbiraj</option>
                                                        <option value="59">Kispang</option>
                                                        <option value="60">Dungeshwor</option>
                                                        <option value="61">Shivapuri</option>
                                                        <option value="62">Bagmati</option>
                                                        <option value="63">Parsagadhi</option>
                                                        <option value="64">Paterwasugauli</option>
                                                        <option value="65">Kailash</option>
                                                        <option value="66">Konjyosom</option>
                                                        <option value="67">Udayapurgadhi</option>
                                                        <option value="68">Phakphokthum</option>
                                                        <option value="69">Chingaad</option>
                                                        <option value="70">Bhageshwor</option>
                                                        <option value="71">Diprung</option>
                                                        <option value="72">Melung</option>
                                                        <option value="73">Sannitriveni</option>
                                                        <option value="74">Himali</option>
                                                        <option value="75">Kantipath</option>
                                                        <option value="76">Gatthaghar</option>
                                                        <option value="77">Putalisadak</option>
                                                        <option value="78">Jorpati</option>
                                                        <option value="79">Bahuniya</option>
                                                        <option value="80">Sundarbasti Extension</option>
                                                        <option value="81">Head Office</option>
                                                        <option value="82">Kamalbinayak EC</option>
                                                        <option value="83">Belkotgadhi EC</option>
                                                        <option value="84">Faika EC</option>
                                                        <option value="85">Anamnagar EC</option>
                                                        <option value="86">Kuleshwor EC</option>
                                                        <option value="87">Manmohan Memorial College and Teaching
                                                            Hospital EC
                                                        </option>
                                                        <option value="88">Kageshwori Manohara EC</option>
                                                        <option value="89">Maitidevi EC</option>
                                                        <option value="90">Koteshwor EC</option>
                                                        <option value="91">Budhanilkantha EC</option>
                                                        <option value="92">thasikhel extension counter</option>
                                                    </select>
                                                </div>
                                            </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Salutation : </label>

                                                <input name="Salutation" type="radio" value="Mr"><span>&nbsp;</span>Mr &nbsp;

                                                <input name="Salutation" type="radio" value="Mrs"><span>&nbsp;</span>Mrs &nbsp;

                                                <input name="Salutation" type="radio" value="Miss"><span>&nbsp;</span>Miss &nbsp;

                                        </div>
                                    </div>


                                <div class="row col-md-12">
                                    <div class="col">
                                        <input class="form-control" name="first_name" type="text">
                                            <label class="fg-label">First Name <span class="astrick">*</span></label>
                                     </div>
                                    <div class="col">
                                         <input class="form-control" name="middle_name" type="text">
                                        <label class="fg-label">Middle Name</label>
                                        </div>
                                    <div class="col">
                                        <input class="form-control" name="last_name" type="text">
                                        <label class="fg-label">Last Name <span class="astrick">*</span></label>
                                    </div>
                                </div>

                                <div class="row col-md-8">
                                    <div class="col">
                                        <input class="form-control" name="tel_no" type="text">
                                        <label class="fg-label">Tel No.</label>

                                    </div>
                                    <div class="col">
                                        <input class="form-control fg-input" name="mobile_no" type="text">
                                        <label class="fg-label">Mobile No. <span class="astrick">*</span></label>
                                    </div>
                                </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Gender : </label>

                                            <input name="gender" type="radio" value="M">
                                            <span>&nbsp;</span> Male &nbsp;

                                            <input name="gender" type="radio" value="F">
                                            <span>&nbsp;</span>Female &nbsp;

                                            <input name="gender" type="radio" value="O">
                                                <span>&nbsp;</span> Other &nbsp;
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row col-md-8">
                                        <div class="col">
                                            <input class="form-control" name="citizenship_passport_no"
                                                           type="text">
                                            <label class="fg-label">Citizenship/Passport No. <span class="astrick">*</span></label>
                                        </div>

                                        <div class="col">
                                            <input class="form-control fg-input" name="place_of_issue" type="text">
                                            <label class="fg-label">Place of Issue: <span
                                                        class="astrick">*</span></label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row col-md-5">
                                        <div class="col">
                                            <input class="form-control" name="date_of_issue"
                                                   type="text">
                                            <label class="fg-label">Date of Issue (DD/MM/YYYY)&nbsp;<span
                                                    class="astrick">*</span></label>
                                        </div>
                                    </div>

                                    <hr/>

                                    <!--- DATE OF BIRTH STARTS HERE-->
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label class="fg-label">Date of Birth <span class="astrick">*</span></label>
                                            <label class="radio radio-inline m-r-20">
                                                <input type="radio" name="date_type" value="AD" checked="checked"
                                                       class="valid" aria-invalid="false">
                                                <i class="input-helper"></i>
                                                AD
                                            </label>

                                            <label class="radio radio-inline m-r-20">
                                                <input type="radio" name="date_type" value="BS" aria-invalid="false"
                                                       class="valid">
                                                <i class="input-helper"></i>
                                                BS
                                            </label>
                                        </div>
                                        <input type="hidden" id="date_type_val" value="AD">
                                    </div>

                                    <div class="row col-md-5">
                                        <div class="col">
                                            <input class="form-control" name="date_of_birth"
                                                   type="text">
                                            <label class="fg-label">(DD/MM/YYYY) format<span
                                                    class="astrick">*</span></label>
                                        </div>
                                    </div>

                                    <!--Date of Birth ends here-->
                                    <br>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label class="fg-label">Nationality <span class="astrick">*</span></label>

                                            <div class="fg-line">
                                                <input type="text" class="form-control" name="birth_country" value="Nepali"
                                                       >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Marital Status : </label>

                                            <input name="marital_status" type="radio" value="S"><span>&nbsp;</span>Single &nbsp;

                                            <input name="marital_status" type="radio" value="M"><span>&nbsp;</span>Married &nbsp;

                                            <input name="marital_status" type="radio" value="O"><span>&nbsp;Other</span> &nbsp;

                                        </div>
                                    </div>
                                    <hr/>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Occupation : </label>

                                            <input name="occupation" type="radio" value="Sal"><span>&nbsp;</span>Salaried &nbsp;

                                            <input name="occupation" type="radio" value="SelfE"><span>&nbsp;</span>Self employed &nbsp;

                                            <input name="occupation" type="radio" value="Prof"><span>&nbsp;Professional</span> &nbsp;
                                            <input name="occupation" type="radio" value="Other"><span>&nbsp;</span>Other &nbsp;
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                    <div class="col">
                                        <input class="form-control fg-input" name="organization_name"
                                                       type="text">
                                        <label class="fg-label">Organization Name</label>

                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="organization_address"
                                                       type="text">

                                        <label class="fg-label">Address</label>
                                        </div>


                                    <div class="col">
                                        <input class="form-control fg-input" name="designation" type="text">
                                        <label class="fg-label">Designation</label>
                                    </div>
                                    </div>

                                    <div class="row col-md-8">

                                    <div class="col">
                                        <input class="form-control fg-input" name="estimated_annual_income"
                                                       type="text">
                                        <label class="fg-label">Estimated Annual Income</label>
                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="organization_tel_no"
                                                       type="text">
                                        <label class="fg-label">Tel No.</label>
                                    </div>
                                    </div>
                                    <hr/>

                                    <div class="col-md-12"> Family information</div>
                                    <br>
                                    <div class="row col-md-12">
                                    <div class="col">
                                        <input class="form-control fg-input" name="grand_father_name"
                                                       type="text">
                                        <label class="fg-label">Grandfather's Name <span
                                                    class="astrick">*</span></label>
                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="father_name" type="text">
                                        <label class="fg-label">Father's Name <span class="astrick">*</span></label>
                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="mother_name" type="text">
                                        <label class="fg-label">Mother's Name <span class="astrick">*</span></label>
                                    </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12 ac_head">Permanent Address </div><br>
                                    <div class="row col-md-12">
                                    <div class="col">
                                        <input class="form-control fg-input" id="p_house_no"
                                                       name="permanent_house_no" type="text">
                                        <label class="fg-label">House No.</label>

                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="permanent_street"
                                                       type="text">
                                        <label class="fg-label">Street</label>
                                    </div>

                                    <div class="col col-md-2">
                                        <input class="form-control fg-input" name="permanent_ward_no"
                                                       type="text">
                                        <label class="fg-label">Ward No. <span class="astrick">*</span></label>
                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="permanent_vdc_mc"
                                                       type="text">
                                            <label class="fg-label">VDC/MC <span class="astrick">*</span></label>
                                    </div>
                                </div>

                                    <div class="col-md-3">
                                        <input class="form-control fg-input" name="permanent_city" type="text">
                                        <label class="fg-label">City <span class="astrick">*</span></label>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="form-control fg-input"
                                                       name="permanent_country_name" type="text" value="Nepal">
                                        <label class="fg-label">Country <span class="astrick">*</span></label>
                                    </div>

                                    <hr/>
                                    <div class="col-md-12">Current Address
                                    </div>
                                    <br>


                                        <div class="row col-md-12">
                                            <div class="col">
                                            <input class="form-control fg-input" name="current_house_no"
                                                           type="text">
                                                <label class="fg-label">House No.</label>
                                            </div>

                                            <div class="col">
                                                <input class="form-control fg-input" name="current_address"
                                                           type="text">
                                                <label class="fg-label">Address <span class="astrick">*</span></label>
                                            </div>

                                            <div class="col">
                                                <input class="form-control fg-input" name="current_city"
                                                           type="text">
                                                <label class="fg-label">City <span class="astrick">*</span></label>
                                            </div>
                                        </div>

                                    <div class="col-md-3">
                                        <input class="form-control fg-input"
                                               name="current_country_name" type="text" value="Nepal">
                                        <label class="fg-label">Country <span class="astrick">*</span></label>
                                    </div>

                                    <hr/>
                                    <div class="col-md-12">Source of fund : </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group">

                                            <input name="source_of_fund" type="radio" value="src_saving"><span>&nbsp;</span>Saving &nbsp;

                                            <input name="source_of_fund" type="radio" value="src_salary"><span>&nbsp;</span>Salary &nbsp;

                                            <input name="source_of_fund" type="radio" value="src_investment"><span>&nbsp;</span>Investment &nbsp;
                                            <input name="source_of_fund" type="radio" value="src_business_income"><span>&nbsp;</span>Business Income &nbsp;
                                            <input name="source_of_fund" type="radio" value="src_remittance"><span>&nbsp;</span>Remittance &nbsp;
                                        </div>
                                    </div>


                                    <div class="col-md-12">Average Expected Transaction per month : </div>
                                    <div class="row col-md-12">
                                    <div class="col-md-2">
                                                <input class="form-control fg-input"
                                                       name="expected_transaction_currency" type="text" value="NPR">
                                            <label class="fg-label">Currency <span class="astrick">*</span></label>
                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="expected_transaction_amount"
                                                       type="text">
                                        <label class="fg-label">Amount <span class="astrick">*</span></label>
                                    </div>

                                    <div class="col">
                                        <input class="form-control fg-input" name="expected_transaction_no"
                                                       type="text">
                                        <label class="fg-label">No. of transaction <span
                                                    class="astrick">*</span></label>
                                    </div>
                                </div>


                                    <br>

                                    <div class="col-md-12 ">Nature of Transaction : </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <label>
                                                    <input type="checkbox" value="Cash" name="nature_of_transaction"
                                                           id="transaction_c">&nbsp;Cash&nbsp;
                                                </label>
                                                <label>
                                                    <input type="checkbox" value="Cheque" name="nature_of_transaction"
                                                           id="transaction_ch">&nbsp;Cheque&nbsp;
                                                </label>
                                                <label>
                                                    <input type="checkbox" value="Remittance" name="nature_of_transaction"
                                                           id="transaction_r">&nbsp;
                                                    Remittance&nbsp;
                                                </label>

                                        </div>
                                    </div>




                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Do you want Internet Banking Facility?</label> <br>

                                                <input checked="checked" name="internet_banking" type="radio" value="0">
                                                <i class="input-helper"></i>
                                                No

                                                <input name="internet_banking" type="radio" value="1">
                                                <i class="input-helper"></i>
                                                Yes
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="upload_file" class="control-label col-sm-12 ac_head">Upload Citizenship or Passport (must be PDF): </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" accept="application/pdf" name="uploaded_doc" id="upload_file" required>
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <button class="btn btn-primary">Submit
                                        </button>

                                    </div>

                                </form>
                                <!-- END FORM-->
                            </div>
                        </div> <!--connect form wrap end-->

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
