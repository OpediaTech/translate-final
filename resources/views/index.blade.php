<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form - Queliz Translations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('checkout-form/style.css')}}">

</head>

<body>
   
    @if (Session::has('success'))
        <div class="alert alert-primary text-center">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    <!--PEN CONTENT     -->
    
     <!-- header section start here -->
    <div class="header__section">
        <div class="container">
            <div class="header__inner text-start mt-3">
                <img src="{{asset('checkout-form/logo.png')}}" alt="header__logo">
            </div>
        </div>
    </div>
    <!-- header section end here -->
    
     <div class="content">
        <!--content inner-->
        <div class="content__inner">
            <div class="container">
            </div>
            <div class="container overflow-hidden">
                <!--multisteps-form-->
                <div class="multisteps-form mt-5">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12  mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Contact</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">Documents & Options</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Payment</button>
                                <!-- <button class="multisteps-form__progress-btn" type="button" title="Comments"> </button> -->
                            </div>
                        </div>
                    </div>
                    <!--form panels-->
                    <div class="row">
                        <div class="col-12 ">
                            <form id="form" class="multisteps-form__form" style="height:612px;" enctype="multipart/form-data">
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">

                                    <div class="multisteps-form__content">

                                        <div class="guest__checkout  pb-5 border-bottom">
                                            <div class="container">
                                                <div class="guest__checkout__inner">
                                                    <div class="row gx-5">
                                                        <div class="col-md-7">
                                                            <div class="common__title">
                                                                <h1>Guest Checkout</h1>
                                                                <!--<p><a href="#">Sign in</a> if you have an account or continue as a guest</p>-->
                                                                <p>If you have an account or continue as a guest</p>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" id="fName" placeholder="First Name*">
                                                                    <p id="fName-error" style="margin-top:-18px;color:red;display: none;">Input Field is required</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="text" id="lName" placeholder="Last Name*">
                                                                    <p id="lName-error" style="margin-top:-18px;color:red;display: none;">Input Field is required</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <input type="email" id="email" placeholder="Email*">
                                                                    <p id="email-error" style="margin-top:-18px;color:red;display: none;">Input Field is required</p>
                                                                </div>
                                                            </div>

                                                            <div class="row guest__check-box">
                                                                <div class="col-md-12">
                                                                    <input type="checkbox" id="createAccount">
                                                                    <label for="createAccount">I want to create an account</label>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="createaccount" style="display:none">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="password" id="password" placeholder="Password">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <input type="password" placeholder="Confirm Password">
                                                                        </div>
                                                                    </div>
                                                                    <span>Creating an account allows you to access your quote and
                                                                        order history, saved addresses, payment methods, and site
                                                                         preferences anytime.
                                                                   </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="security__system">
                                                                <p><i class="fas fa-lock"></i>Secure and Private</p>
                                                                <span class="ps-4 d-block">All data processed by our site, including uploaded files, is encrypted. Only essential staff with signed NDAs can access your information.</span>
                                                                <img src="{{asset('checkout-form/trust-icons.png')}}" width="100" alt="lock" class="ps-4 mt-5 d-block" width="154" height="39">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4 common__btn"><button class="common__btn js-btn-next" type="button" title="Next">Continue to Document &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button></div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">

                                    <div class="multisteps-form__content">
                                        <!-- type translate section start here -->
                                        <div class="type__translate border-bottom">
                                            <div class="container">
                                                <div class="type__translate__inner">
                                                    <div class="row gx-5">
                                                        <div class="col-md-7">
                                                            <div class="common__title">
                                                                <h1>What type of translation do you need?</h1>
                                                            </div>
                                                            <div class="certified__type mb-4">
                                                                <div class="certified__content">
                                                                    <h3>{{$data->t1}}</h3>
                                                                    <p>Word-for-word human translation of documents with certification for official use.</p>
                                                                </div>
                                                                <div class="common__btn">
                                                                    <span type="submit" data-value="{{$data->t1}}" class="btn__certified text-end">
                                                                        Selected
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="certified__type mb-5">
                                                                <div class="certified__content">
                                                                    <h3>{{$data->t2}}</h3>
                                                                    <p>Human translation of documents and text-based content for business or personal use.</p>
                                                                </div>
                                                                <div class="common__btn">
                                                                    <span type="submit" data-value="{{$data->t2}}" class=" text-end">
                                                                        Select
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="certified__type mb-5">
                                                                <div class="certified__content">
                                                                    <h3>{{$data->t3}}</h3>
                                                                    <p>Human translation of documents and text-based content for business or personal use.</p>
                                                                </div>
                                                                <div class="common__btn">
                                                                    <span type="submit" data-value="{{$data->t3}}" class=" text-end">
                                                                        Select
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="common__title">
                                                                <h1>What language pair do you need translated?</h1>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                  <select name="" id="translateFrom">
                                                                        <option value="" >Translate From*</option>
                                                                              <option value="English">English</option>
                                                                     <option value="Albanian">Albanian</option>
                                                                  
                                                                    <option  value="Amharic">Amharic</option>
                                                                    <option  value="Arabic">Arabic</option>
                                                                    <option value="Armenian">Armenian</option>
                                                                        <option  value="Belarusian">Belarusian</option>
                                                                        <option  value="Bengaoption">Bengaoption</option>
                                                                        <option  value="Bosnian">Bosnian</option>
                                                                        <option  value="8">Bulgarian</option>
                                                                        <option  value="Burmese">Burmese</option>
                                                                        <option  value="Catalan">Catalan</option>
                                                                        <option  value="Chinese (Simpoptionfied)">Chinese (Simpoptionfied)</option>
                                                                        <option  value="Chinese (Traditional)">Chinese (Traditional)</option>
                                                                        <option  value="Creole">Creole</option>
                                                                        <option  value="Croatian">Croatian</option>
                                                                        <option  value="Czech">Czech</option>
                                                                        <option  value="Danish">Danish</option>
                                                                        <option  value="Dutch">Dutch</option>
                                                                        <option  value="Engoptionsh">Engoptionsh</option>
                                                                        <option  value="Farsi">Farsi</option>
                                                                        <option  value="Finnish">Finnish</option>
                                                                        <option  value="French">French</option>
                                                                        <option  value="French (Canadian)">French (Canadian)</option>
                                                                        <option  value="Georgian">Georgian</option>
                                                                        <option  value="German">German</option>
                                                                        <option  value="Greek">Greek</option>
                                                                        <option  value="Gujarati">Gujarati</option>
                                                                        <option  value="Hebrew">Hebrew</option>
                                                                        <option  value="Hindi">Hindi</option>
                                                                        <option  value="Hungarian">Hungarian</option>
                                                                        <option  value="Indonesian">Indonesian</option>
                                                                        <option  value="Itaoptionan">Itaoptionan</option>
                                                                        <option  value="Japanese">Japanese</option>
                                                                        <option  value="Kannada">Kannada</option>
                                                                        <option  value="Korean">Korean</option>
                                                                        <option  value="Latin">Latin</option>
                                                                        <option  value="Latvian">Latvian</option>
                                                                        <option  value="optionthuanian">optionthuanian</option>
                                                                        <option  value="Macedonian">Macedonian</option>
                                                                        <option  value="Malay">Malay</option>
                                                                        <option  value="Marathi">Marathi</option>
                                                                        <option  value="Marathi">Marathi</option>
                                                                        <option  value="Nepaoption">Nepaoption</option>
                                                                        <option  value="Norwegian">Norwegian</option>
                                                                        <option  value="Pashto">Pashto</option>
                                                                        <option  value="Persian">Persian</option>
                                                                        <option  value="Pooptionsh">Pooptionsh</option>
                                                                        <option  value="Portuguese (Brazil)">Portuguese (Brazil)</option>
                                                                        <option  value="Portuguese (Portugal)">Portuguese (Portugal)</option>
                                                                        <option  value="Punjabi">Punjabi</option>
                                                                        <option  value="Romanian">Romanian</option>
                                                                        <option  value="Russian">Russian</option>
                                                                        <option  value="Serbian">Serbian</option>
                                                                        <option  value="Slovak">Slovak</option>
                                                                        <option  value="Slovenian">Slovenian</option>
                                                                        <option  value="Somaoption">Somaoption</option>
                                                                        <option  value="Spanish">Spanish</option>
                                                                        <option  value="Swahioption">Swahioption</option>
                                                                        <option  value="Swedish">Swedish</option>
                                                                        <option  value="Tagalog">Tagalog</option>
                                                                        <option  value="Tamil">Tamil</option>
                                                                        <option  value="Telugu">Telugu</option>
                                                                        <option  value="Thai">Thai</option>
                                                                        <option  value="Turkish">Turkish</option>
                                                                        <option  value="Ukrainian">Ukrainian</option>
                                                                        <option  value="Urdu">Urdu</option>
                                                                        <option  value="Uzbek">Uzbek</option>
                                                                        <option  value="Vietnamese">Vietnamese</option>
                                                                    </select>
                                                                    <p id="translateFrom-error" style="margin-top:-18px;color:red;display: none;">Select a language please</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                               <select name="" id="translateTo">
                                    <option value="" >Translate From*</option>
                                     <option value="English">English</option>
                                   <option value="Albanian">Albanian</option>
                                  
                                   <option  value="Amharic">Amharic</option>
                                   <option  value="Arabic">Arabic</option>
                                   <option value="Armenian">Armenian</option>
                                    <option  value="Belarusian">Belarusian</option>
                                    <option  value="Bengaoption">Bengaoption</option>
                                    <option  value="Bosnian">Bosnian</option>
                                    <option  value="8">Bulgarian</option>
                                    <option  value="Burmese">Burmese</option>
                                    <option  value="Catalan">Catalan</option>
                                    <option  value="Chinese (Simpoptionfied)">Chinese (Simpoptionfied)</option>
                                    <option  value="Chinese (Traditional)">Chinese (Traditional)</option>
                                    <option  value="Creole">Creole</option>
                                    <option  value="Croatian">Croatian</option>
                                    <option  value="Czech">Czech</option>
                                    <option  value="Danish">Danish</option>
                                    <option  value="Dutch">Dutch</option>
                                    <option  value="Engoptionsh">Engoptionsh</option>
                                    <option  value="Farsi">Farsi</option>
                                    <option  value="Finnish">Finnish</option>
                                    <option  value="French">French</option>
                                    <option  value="French (Canadian)">French (Canadian)</option>
                                    <option  value="Georgian">Georgian</option>
                                    <option  value="German">German</option>
                                    <option  value="Greek">Greek</option>
                                    <option  value="Gujarati">Gujarati</option>
                                    <option  value="Hebrew">Hebrew</option>
                                    <option  value="Hindi">Hindi</option>
                                    <option  value="Hungarian">Hungarian</option>
                                    <option  value="Indonesian">Indonesian</option>
                                    <option  value="Itaoptionan">Itaoptionan</option>
                                    <option  value="Japanese">Japanese</option>
                                    <option  value="Kannada">Kannada</option>
                                    <option  value="Korean">Korean</option>
                                    <option  value="Latin">Latin</option>
                                    <option  value="Latvian">Latvian</option>
                                    <option  value="optionthuanian">optionthuanian</option>
                                    <option  value="Macedonian">Macedonian</option>
                                    <option  value="Malay">Malay</option>
                                    <option  value="Marathi">Marathi</option>
                                    <option  value="Marathi">Marathi</option>
                                    <option  value="Nepaoption">Nepaoption</option>
                                    <option  value="Norwegian">Norwegian</option>
                                    <option  value="Pashto">Pashto</option>
                                    <option  value="Persian">Persian</option>
                                    <option  value="Pooptionsh">Pooptionsh</option>
                                    <option  value="Portuguese (Brazil)">Portuguese (Brazil)</option>
                                    <option  value="Portuguese (Portugal)">Portuguese (Portugal)</option>
                                    <option  value="Punjabi">Punjabi</option>
                                    <option  value="Romanian">Romanian</option>
                                    <option  value="Russian">Russian</option>
                                    <option  value="Serbian">Serbian</option>
                                    <option  value="Slovak">Slovak</option>
                                    <option  value="Slovenian">Slovenian</option>
                                    <option  value="Somaoption">Somaoption</option>
                                    <option  value="Spanish">Spanish</option>
                                    <option  value="Swahioption">Swahioption</option>
                                    <option  value="Swedish">Swedish</option>
                                    <option  value="Tagalog">Tagalog</option>
                                    <option  value="Tamil">Tamil</option>
                                    <option  value="Telugu">Telugu</option>
                                    <option  value="Thai">Thai</option>
                                    <option  value="Turkish">Turkish</option>
                                    <option  value="Ukrainian">Ukrainian</option>
                                    <option  value="Urdu">Urdu</option>
                                    <option  value="Uzbek">Uzbek</option>
                                    <option  value="Vietnamese">Vietnamese</option>
                                </select>
                                 <p id="translateTo-error" style="margin-top:-18px;color:red;display: none;">Select a language please</p>
                                                                </div>
                                                            </div>
                                                            <div class="alert alert-warning alert-dismissible fade alert-toggle" role="alert">
                                                                **Either the source or target language must include English. Please contact us if you need a language pair that doesn’t include English.**
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                                            <div class="common__title mt-5">
                                                                <h1>How many <span class="page_words_translate">pages</span> do you need translated?</h1>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="page__count" id="pageCount">
                                                                        <input type="number" min="0" value="0" placeholder="Page Count*">
                                                                    </div>
                                                                    <p id="pageCount-error" style="margin-top:-18px;color:red;display: none;">Minumum value should be 1</p>
                                                                    <div class="page__count" id="wordCount" style="display: none">
                                                                        <input type="number" min="0" value="0" placeholder="Word Count*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p id="pageIdText" >A page is 250 words or fewer including numbers. Unsure of your page count? <a href="https://queliztranslations.com/free-quote/">Request a quote.</a></p>
                                                                    <p id="wordIdText" style='display:none;' >Enter the total word count from all of your documents. Unsure of your word count? <a href="https://queliztranslations.com/free-quote/">Request a quote.</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="common__title mt-5">
                                                                <h1>Upload the files you need translated</h1>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <!--<div class="chose__docs">-->
                                                                    <!--    <input type="file" id="translate_file" placeholder="Choose File*">-->
                                                                    <!--</div>-->
                                                                    
                                                                 <!-- (A) PROGRESS BAR -->
                                                                     <div id="update_progressbar" style="display: none;">
                                                                        <div id="up-progress" >
                                                                            <div id="up-bar"></div>
                                                                            <div id="up-percent">0%</div>
                                                                          </div>
                                                                     </div>
                                                                     
                                                                      <!-- (B) FILE PICKER -->
                                                                    
                                                                        <input type="file" name="translate_file" id="up-file" class="translate_file" disabled/>
                                                                      <label for="up-file" id="up-label">
                                                                        Choose Files
                                                                      </label>
                                                                     
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p>Drag and drop or choose files to upload to your order</p>
                                                                </div>
                                                            </div>

                                                            <!-- extra service -->
                                                            <div class="common__title mt-5">
                                                                <h1>Which optional services do you need?</h1>
                                                            </div>
                                                            <div class="certified_extra_service">
                                                                <div class="certified__type pb-4 pt-4 border-bottom">
                                                                    <div class="certified__content">
                                                                        <h3>{{$data->t1Ex1}}</h3>
                                                                        <p>Stamp and signature authenticating the signer of the translation certification. Valid in all 50 states.<strong>One time Payment</strong></p>
                                                                    </div>
                                                                    <div class="option__right">
                                                                        <h3>$ <span class="extra_price">{{$data->t1Ex1_price}}</span></h3>
                                                                        <span class="add">Add</span>

                                                                    </div>
                                                                    <span class="remove">Remove</span>
                                                                </div>
                                                                <div class="certified__type pb-4 pt-4 border-bottom">
                                                                    <div class="certified__content">
                                                                        <h3>{{$data->t1Ex2}}</h3>
                                                                        <p>Stamp and signature authenticating the signer of the translation certification. Valid in all 50 states.<strong>Per Page</strong> </p>
                                                                    </div>
                                                                    <div class="option__right">
                                                                        <h3>$<span class="extra_price">{{$data->t1Ex2_price}}  </span></h3>
                                                                        <span class="add">Add  </span>
                                                                    </div>
                                                                    <span class="remove">Remove</span>
                                                                </div>
                                                            </div>

                                                            <div class="standerd_extra_service">
                                                                <div class="certified__type pb-4 pt-4 border-bottom">
                                                                    <div class="certified__content">
                                                                        <h3>{{$data->t2Ex}}</h3>
                                                                        <p>Your order will be put in first priority and be delivered in half the time</p>
                                                                    </div>
                                                                    <div class="option__right">
                                                                        <h3>$ <span class="extra_price">{{$data->t2Ex_price}}</span></h3>
                                                                        <span class="add">Add</span>

                                                                    </div>
                                                                    <span class="remove">Remove</span>
                                                                </div>
                                                            </div>
                                                            <div class="premium_extra_service">
                                                                <div class="certified__type pb-4 pt-4 border-bottom">
                                                                    <div class="certified__content">
                                                                        <h3>{{$data->t3Ex}}</h3>
                                                                        <p>Your order will be put in first priority and be delivered in half the time</p>
                                                                    </div>
                                                                    <div class="option__right">
                                                                        <h3>$ <span class="extra_price">{{$data->t3Ex_price}}</span></h3>
                                                                        <span class="add">Add</span>
                                                                    </div>
                                                                    <span class="remove">Remove</span>
                                                                </div>
                                                            </div>

                                                            <!-- extra service -->
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="security__system">
                                                                <div class="security__summery">
                                                                    <div class="common__title">
                                                                        <h1>SUMMARY</h1>
                                                                    </div>
                                                                    <div class="summery">
                                                                        <div class="summery_items d-flex justify-content-between w-100 mb-3">
                                                                            <div class="pay__dets">
                                                                                <p>Certified Translation</p>
                                                                                <span class="ceritified_page"> <span class="pageCount_certified">0</span> pages (<span class="wordCount_certified">0</span> words max)</span>
                                                                                <!-- for standers -->
                                                                                <span class="standerd_word_wrapping"><span class="standerd_word" style="display:none">0 </span> <span>words</span></span>
                                                                                <span class="premium_word_wrapping"> <span class="premium_word" style="display:none">0 </span> <span>words</span></span>
                                                                            </div>
                                                                            <div class="payment">
                                                                                <p class="certified_payment_wrap">$ <span class="certified_payment">0.00</span></p>
                                                                                <p class="standerd_payment_wrap">$ <span class="standerd_payment">0.00</span></p>
                                                                                <p class="premium_payment_wrap">$ <span class="premium_payment">0.00</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="total__summery">
                                                                        <h3>Total</h3>
                                                                        <h3>$ <span class="grand_total">0.00</span></h3>
                                                                    </div>
                                                                    <div class="security__contaxt days_estimate mb-5">
                                                                        <p><i class="far fa-clock"></i> <span class="est_days">NaN-NaN</span> est. turnaround</p>
                                                                        <span class="ps-4 d-block">This is an estimate to deliver the digital copy based on the current order information you've provided.</span>
                                                                    </div>
                                                                    <div class="security__contaxt language-select mb-5">
                                                                        <p><i class="fas fa-globe-asia"></i><span class="from_translate">from</span> to <span class="to_translate">To</span> Translation
                                                                        </p>
                                                                        <span class="ps-4 d-block">We'll pair you with a professional translator and a project manager from our support team.</span>
                                                                    </div>
                                                                </div>
                                                                <p><i class="fas fa-lock"></i>Secure and Private</p>
                                                                <span class="ps-4 d-block">All data processed by our site, including uploaded files, is encrypted. Only essential staff with signed NDAs can access your information.</span>
                                                                <img src="{{asset('checkout-form/trust-icons.png')}}" width="100" alt="lock" class="ps-4 mt-5 d-block" width="154" height="39">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- type translate section end here -->
                                        <div class="button-group d-flex justify-content-between">
                                            <div class="button-row d-flex mt-4">
                                                <span class="js-btn-prev" type="button" title="Prev"> <i class="fas fa-long-arrow-alt-left"></i> &nbsp;Prev</span>
                                            </div>
                                            <div class="button-row d-flex mt-4 common__btn"> <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Continue to Option &nbsp; <i class="fas fa-long-arrow-alt-right"></i></button></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Additional Comments</h3>
                                    <div class="multisteps-form__content">
                                        <div class="form-row mt-4">
                                            <textarea class="multisteps-form__textarea form-control" placeholder="Additional Comments and Requirements" id="notes"></textarea>
                                        </div>
                                                <div class="form-check mt-4">
                                                    <input class="form-check-input paymentInput" type="radio" checked name="payment_type"  value="paypal" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Pay with paypal
                                                    </label>
                                                </div>
                                                {{-- <div class="form-check">
                                                    <input class="form-check-input paymentInput" type="radio" name="payment_type" value="stripe" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Pay with Credit Card
                                                    </label>
                                                </div> --}}

                                                {{-- <div  id="stripePayment" class="mt-5">
                                                    <form role="form" action="{{ route('make-payment') }}" method="post" class="stripe-payment"
                                                    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                   >
                                                    @csrf
                                                    <div class='form-row row mb-2'>
                                                        <div class='col-xs-12 form-group required'>
                                                            <label class='control-label'>Name on Card</label> <input class='form-control'
                                                                size='4' type='text'>
                                                        </div>
                                                    </div>

                                                    <div class='form-row row mb-2'>
                                                        <div class='col-xs-12 form-group  required'>
                                                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                                                class='form-control card-num' size='20' type='text'>
                                                        </div>
                                                    </div>

                                                    <div class='form-row row '>
                                                        <div class='col-xs-12 col-md-12 form-group cvc required mb-2'>
                                                            <label class='control-label'>CVC</label>
                                                            <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 595'
                                                                size='4' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-6 form-group expiration required mb-2'>
                                                            <label class='control-label'>Expiration Month</label> <input
                                                                class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                        </div>
                                                        <div class='col-xs-12 col-md-6 form-group expiration required mb-2'>
                                                            <label class='control-label'>Expiration Year</label> <input
                                                                class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                        </div>
                                                    </div>

                                                    <div class='form-row row d-none erro'>
                                                        
                                                        <div class='col-md-12 hide error form-group'>
                                                            <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                   
                                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay</button>
                                                    </div>

                                                </form>
                                                </div> --}}
                                                <div class="paypalPayment mt-5"> <div id="smart-button-container">
                                                    <div style="text-align: center;">
                                                    <div id="paypal-button-container"></div>
                                                    </div>
                                                </div></div>
                                        
                                        
                                        
                                        
                                        <div class="button-group d-flex justify-content-between">
                                            <div class="button-row d-flex mt-4">
                                                <span class="js-btn-prev" type="button" title="Prev"> <i class="fas fa-long-arrow-alt-left"></i> &nbsp;Prev</span>
                                            </div>
                                          {{-- <div class="button-row d-flex mt-4 common__btn"> <button class="btn btn-primary ml-auto saveItems" type="button" title="Next">Save &nbsp; <i class="fas fa-save"></i></button></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      <!-- footer section  start here-->
    <div class="footer__section p-4">
        <div class="container">
            <div class="footer__inner">
                <div class="footer">
                    <div class="row justify-content-center justify-content-md-between">
                <div class="col-md-6">
                      <div class="footer__left">
                        <img src="{{asset('checkout-form/logo.png')}}" alt="footer__logo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer__right mt-4 mt-md-0">
                        <div class="footer__menu">
                            <ul class="d-flex flex-wrap justify-content-center justify-content-md-end  mb-1 p-0" >
                                <li class="list-style-none"><a class="text-decoration-none" style="color:#289EFE" href="#">Privacy Policy</a></li>
                                <li class="list-style-none ms-2"><a class="text-decoration-none" style="color:#289EFE" href="#">Terms of Service</a></li>
                                <li class="list-style-none ms-2"><a class="text-decoration-none" style="color:#289EFE" href="#">Refund Policy</a></li>
                            </ul>
                        </div>
                        <div class="copyright">
                            <p class="mb-0 text-center text-md-end">© 2022 All Rights Reserved to QuelizTranslations.com</p>
                        </div>
                    </div>
                </div>
            </div>
                 
                    
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.paypalPayment').hide();
        $('#stripePayment').hide();
        $('.paymentInput').on('click',function(e){
            if(e.target.value == 'stripe'){
                $('.paypalPayment').show(100);
                $('#stripePayment').hide(100);
            }else{
                $('#stripePayment').hide(100);
                $('.paypalPayment').show(100);
            }
        })

        $('.multisteps-form__progress-btn').on('click',function(){
            $('.paypalPayment').hide(100);
        })
    </script>
   

 
    
    {{-- STRIPE INTEGRATION --}}
    
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>



    
    
    {{-- PAYPAL INTEGRATION --}}
    
    <script src="https://www.paypal.com/sdk/js?client-id=AY29qcLLjWKqD3Yj7xYj-f6rB84oA9hWwFE4yOxuxEwShgNZDRE7_V2LygtgmX_GNENrRR9ac2gbjCPF&currency=USD" data-sdk-integration-source="button-factory"></script>
 
 <script src="{{asset('checkout-form/script.js')}}"></script>
 
<script>
        
    //   Hide show
    $('#createAccount').on('change', function(e) {
        if ($('#createAccount').is(":checked")) {
            $('.createaccount').show(200);
        } else {
            $('.createaccount').hide(200);
        }
    })
    $('.standerd_payment_wrap').hide()
    $('.premium_payment_wrap').hide()

   $('.standerd_word_wrapping').hide()
            $('.premium_word_wrapping').hide()

    // service type


    $('.common__btn span').on('click', function(e) {
        $('.common__btn span').removeClass('btn__certified');
        $('.common__btn span').html('Select');
        $(this).addClass('btn__certified');
        $(this).html('Selected');
        let serviceType = $(this).data("value")

        $('.pay__dets p').html(serviceType)

        if (serviceType == '{{$data->t1}}') {
            $('#pageCount').show()
            $('#wordCount').hide()
            $('.page_words_translate').html('pages')
            $('.ceritified_page').show()
            $('.standerd_word').hide()
            $('.premium_word').hide()
            $('.standerd_word_wrapping').hide()
            $('.premium_word_wrapping').hide()
            $('.standerd_payment_wrap').hide()
            $('.certified_payment_wrap').show()
            $('.premium_payment_wrap').hide()

            let certified_price = $('.certified_payment').html()
            $('.grand_total').html(Number(certified_price).toFixed(2))

            // removing extra cost items
            let summery = document.querySelectorAll('.summery_items');
            summery.forEach((e, index) => {
                if (index != 0) {
                    e.remove()
                    $('.remove').hide();
                    $('.option__right').show()
                }
            })

        } else if (serviceType == '{{$data->t3}}') {
            $('#pageCount').hide()
            $('#wordCount').show()
            $('.page_words_translate').html('words')
            $('.ceritified_page').hide()
            $('.standerd_word').hide()
            $('.premium_word').show()
              $('.standerd_word_wrapping').hide()
            $('.premium_word_wrapping').show()
            
            $('.standerd_payment_wrap').hide()
            $('.premium_payment_wrap').show()
            $('.certified_payment_wrap').hide()
            // removing extra cost items
            let summery = document.querySelectorAll('.summery_items');
            summery.forEach((e, index) => {
                if (index != 0) {
                    e.remove()
                    $('.remove').hide();
                    $('.option__right').show()
                }
            })
            let premiumPrice = $('.premium_payment').html()
            $('.grand_total').html(Number(premiumPrice).toFixed(2))
        } else {
            $('#pageCount').hide()
            $('#wordCount').show()
            $('.page_words_translate').html('words')
            $('.ceritified_page').hide()
            $('.premium_word').hide()
            $('.standerd_word').show()
              $('.standerd_word_wrapping').show()
            $('.premium_word_wrapping').hide()
            $('.standerd_payment_wrap').show()
            $('.certified_payment_wrap').hide()
            $('.premium_payment_wrap').hide()

            // removing extra cost items
            let summery = document.querySelectorAll('.summery_items');
            summery.forEach((e, index) => {
                if (index != 0) {
                    e.remove()
                    $('.remove').hide();
                    $('.option__right').show()
                }
            })
            let standardPrice = $('.standerd_payment').html()
            $('.grand_total').html(Number(standardPrice).toFixed(2))
        }
    })


    // Translated Language Selection

    $('.language-select').hide();
    $('#translateFrom').on('change', function(e) {
        $('.from_translate').html($(this).val())
        $('.language-select').show(100);
    })
    $('#translateTo').on('change', function(e) {
        $('.to_translate').html($(this).val())
        $('.language-select').show(100);
    })



    // Page/Word price count - finding the cost of prizes based on price rate 
    let per_page_word = 250 //words
    let page_price = '{{$data->t1_price}}' //price- usd
    $('.days_estimate').hide()
    $('#pageCount input').on('change', function() {
        $('.pageCount_certified').html($(this).val())
        let words = $(this).val() * per_page_word
        let price = $(this).val() * page_price
        $('.wordCount_certified').html(words)
        $('.certified_payment').html(Number(price).toFixed(2))
        $('.grand_total').html(Number(price).toFixed(2))


        if ($(this).val() >= 1) {
            $('.days_estimate').show(100)
        } else {
            $('.days_estimate').hide(100)
        }


        if ($(this).val() <= 4) {
            $('.est_days').html('24 Hours')
        } else if ($(this).val() <= 9) {
            $('.est_days').html('48 Hours')
        } else if ($(this).val() <= 14) {
            $('.est_days').html('3-4 Days')
        } else if ($(this).val() <= 19) {
            $('.est_days').html('4-5 Days')
        } else if ($(this).val() <= 29) {
            $('.est_days').html('5-6 Days')
        } else if ($(this).val() <= 39) {
            $('.est_days').html('6-7 Days')
        } else if ($(this).val() <= 49) {
            $('.est_days').html('7-8 Days')
        }else if ($(this).val() <= 59) {
            $('.est_days').html('8-9 Days')
        }
        else if ($(this).val() <= 75) {
            $('.est_days').html('9-10 Days')
        } else {
            $('.est_days').html('75 pages Please request a free quote')
        }
    })





    //Standerd &  premium word count
    let pservice


    $('#pageCount input').on('click', function() {
        let total = Number($('.grand_total').html())
        let certifiedNCost = localStorage.getItem("certifiedNCost");
        let certifiedEXCost = localStorage.getItem("certifiedEXCost");
        let extra_total = Number(certifiedNCost) + Number(certifiedEXCost)
        $('.grand_total').html(Number(total + extra_total).toFixed(2))
    })


        // getting the service type
    $('.common__btn span').on('click', function(e) {
        pservice = e.target.getAttribute('data-value');
        if(pservice == '{{$data->t1}}' || pservice == undefined){
        $('#pageIdText').show()
        $('#wordIdText').hide()
    }else{
        $('#pageIdText').hide()
        $('#wordIdText').show()
    }
    })

    $('.common__btn span').on('click', function(e) {
        if (pservice == '{{$data->t3}}') {
            $input_value = $('#wordCount input').val()
            $('.premium_payment').html(Number(.13 * $input_value).toFixed(2))
            let word_price = "{{$data->t3_price}}";
            $('.days_estimate').hide()
            $('#wordCount input').on('change', function() {
                let words = $(this).val()
                let price = words * word_price

                // Premium price rate
                $('.premium_payment').html(Number(price).toFixed(2))
                $('.grand_total').html(Number(price).toFixed(2))

                // getting data from local storage

                let primiumCost = localStorage.getItem("primiumCost");
                let total = Number($('.grand_total').html())
                $('.grand_total').html(Number(total + Number(primiumCost)).toFixed(2))

                $('.premium_word').html(words)


                // cost calculation based on word price rate
                if ($(this).val() >= 1) {
                    $('.days_estimate').show(100)
                } else {
                    $('.days_estimate').hide(100)
                }
                if ($(this).val() <= 750) {
                    $('.est_days').html('24 Hours')
                } else if ($(this).val() <= 2000) {
                    $('.est_days').html('48 Hours')
                } else if ($(this).val() <= 3500) {
                    $('.est_days').html('3-4 Days')
                } else if ($(this).val() <= 5500) {
                    $('.est_days').html('4-5 Days')

                } else if ($(this).val() <= 8000) {
                    $('.est_days').html('6-7 Days')
                } else if ($(this).val() <= 11000) {
                    $('.est_days').html('7-8 Days')
                } else if ($(this).val() <= 14000) {
                    $('.est_days').html('8-9 Days')
                } else if ($(this).val() <= 17000) {
                    $('.est_days').html('9-10 Days')
                } else if ($(this).val() <= 23000) {
                    $('.est_days').html('10-11 Days')
                } else if ($(this).val() <= 30000) {
                    $('.est_days').html('11-12 Days')
                } else if ($(this).val() <= 38000) {
                    $('.est_days').html('12-13 Days')
                } else if ($(this).val() <= 46000) {
                    $('.est_days').html('13-14 Days')
                } else if ($(this).val() <= 55000) {
                    $('.est_days').html('14-15 Days')
                } else if ($(this).val() <= 65000) {
                    $('.est_days').html('15-16 Days')
                } else if ($(this).val() <= 75000) {
                    $('.est_days').html('16-17 Days')
                } else {
                    $('.est_days').html('Please request a quote.')
                }
            })
        } else if (pservice == '{{$data->t2}}') {
            // Page/Word price count
            $input_value = $('#wordCount input').val()
            $wordPrice_t2 = "{{$data->t2_price}}"
            $('.standerd_payment').html(Number($wordPrice_t2 * $input_value).toFixed(2))
            let word_price = '{{$data->t2_price}}';
            $('.days_estimate').hide()
            $('#wordCount input').on('change', function() {
                $('.pageCount_certified').html($(this).val())
                let words = $(this).val()
                let price = $(this).val() * word_price

                $('.standerd_payment').html(Number(price).toFixed(2))
                $('.grand_total').html(Number(price).toFixed(2))

                // getting data from local storage

                let standerdCost = localStorage.getItem("standardCost");
                let total = Number($('.grand_total').html())
                $('.grand_total').html(Number(total + Number(standerdCost)).toFixed(2))

                $('.standerd_word').html(words)
                $('.premium_word').html(words)

                // cost calculation based on word price rate

                if ($(this).val() >= 1) {
                    $('.days_estimate').show(100)
                } else {
                    $('.days_estimate').hide(100)
                }
                if ($(this).val() <= 1000) {
                    $('.est_days').html('24 Hours')
                } else if ($(this).val() <= 2500) {
                    $('.est_days').html('48 Hours')
                } else if ($(this).val() <= 4000) {
                    $('.est_days').html('3-4 Days')
                } else if ($(this).val() <= 7000) {
                    $('.est_days').html('4-5 Days')

                } else if ($(this).val() <= 10000) {
                    $('.est_days').html('6-7 Days')
                } else if ($(this).val() <= 15000) {
                    $('.est_days').html('7-8 Days')
                } else if ($(this).val() <= 20000) {
                    $('.est_days').html('8-9 Days')
                } else if ($(this).val() <= 30000) {
                    $('.est_days').html('9-10 Days')
                } else if ($(this).val() <= 40000) {
                    $('.est_days').html('10-11 Days')
                } else if ($(this).val() <= 50000) {
                    $('.est_days').html('11-12 Days')
                } else if ($(this).val() <= 60000) {
                    $('.est_days').html('12-13 Days')
                } else if ($(this).val() <= 75000) {
                    $('.est_days').html('13-14 Days')
                } else {
                    $('.est_days').html('Please request a quote.')
                }

            })

        }
    })


    // extra service trigger
    $('.standerd_extra_service').hide()
    $('.premium_extra_service').hide()

    // finding service type 
    $('.common__btn span').on('click', function(e) {
        if (pservice == '{{$data->t2}}') {
            $('.standerd_extra_service').show()
            $('.certified_extra_service').hide()
            $('.premium_extra_service').hide()
        } else if (pservice == '{{$data->t3}}') {
            $('.standerd_extra_service').hide()
            $('.certified_extra_service').hide()
            $('.premium_extra_service').show()
        } else {
            $('.standerd_extra_service').hide()
            $('.premium_extra_service').hide()
            $('.certified_extra_service').show()
        }
    })




    let extra_service = []
    $('.remove').hide();

    let extra_total_price;

    // removing local storage data at beggening
    localStorage.removeItem("standardCost");
    localStorage.removeItem("primiumCost");
    localStorage.removeItem("certifiedNCost");
    localStorage.removeItem("certifiedEXCost");

    $('.remove').on('click', function(e) {

        $(this).prev().show()
        $(this).hide()

        // removing local storage data
        localStorage.removeItem("standardCost");
        localStorage.removeItem("primiumCost");
        localStorage.removeItem("certifiedNCost");
        localStorage.removeItem("certifiedEXCost");

        // $('.grand_total').html(Number(total - Number(primiumCost)).toFixed(2))

        // console.log($(this).prev().children().first().children().last().html())
        let summery = document.querySelectorAll('.summery_items');
        summery.forEach(e => {
            // console.log(e.childNodes[1].className)
            let parentClass = e.childNodes[1]
                // console.log(parentClass.firstChild.nextSibling.innerHTML)
                // console.log($(this).prev().prev().children().first().html())

            if (parentClass.firstChild.nextSibling.innerHTML == $(this).prev().prev().children().first().html()) {
                if (pservice == '{{$data->t1}}' || pservice == undefined) {
                    let total = Number($('.grand_total').html())
                    if($(this).prev().prev().children().first().html() == "{{$data->t1Ex1}}"){
                        let t = Number($(this).prev().children().first().children().last().html());
                    let getTotal = total - t;
                    $('.grand_total').html(Number(getTotal).toFixed(2))
                    e.remove()
                    return false;
                    }else{
                        let t = Number($(this).prev().children().first().children().last().html()) * $('#pageCount input').val()
                        let getTotal = total - t;
                        $('.grand_total').html(Number(getTotal).toFixed(2))
                        e.remove()
                        return false;
                    }
                   
                }
                let total = Number($('.grand_total').html())
                let t = Number($(this).prev().children().first().children().last().html()) * $('#wordCount input').val()
                $('.grand_total').html(Number(total - t).toFixed(2))
                e.remove()
            }
        })
    })


    // Adding extra cost items

    $('.add').on('click', function(e) {

        let parentClass = e.target.parentNode;
        $(parentClass).next().show();
        $(parentClass).hide()

        extra_service.push($(parentClass).prev().children().first().html())
        let itemName = $(parentClass).prev().children().first().html();
        let p = Number($(this).prev().children().html())
        let total = Number($('.grand_total').html())

        if (pservice == '{{$data->t1}}' || pservice == undefined) {
            if(itemName == '{{$data->t1Ex1}}'){
                let p = Number($(this).prev().children().html())
                $('.grand_total').html(Number(total + p).toFixed(2))
            }else{
                p = p * $('#pageCount input').val()
              $('.grand_total').html(Number(total + p).toFixed(2))
            }
        } else if (pservice == '{{$data->t2}}' || pservice == '{{$data->t3}}') {
            p = p * $('#wordCount input').val()
            $('.grand_total').html(Number(total + p).toFixed(2))
        }

        // Appending data 
        $('.summery').append(`
        <div class="summery_items d-flex justify-content-between w-100 mb-3">
        <div class="pay__dets">
            <p>${$(parentClass).prev().children().first().html()}</p>
        </div>
        <div class="payment">
            <p> <span> $</span> <span> ${Number(p).toFixed(2)}</span></p>
        </div>
    </div>
        `)
    })

    // updating data based on input value

    $('.page__count input').on('change', function() {
        let summery = document.querySelectorAll('.summery_items');
        let x = $(this).val()

        summery.forEach((s, i) => {
            // console.log(pservice)
            if (i >= 1) {
                let Item_name = s.childNodes[1].childNodes[1].innerHTML.trim()
                    // let item_value = s.childNodes[3].childNodes[1].childNodes[3].innerHTML
                if (Item_name == '{{$data->t1Ex1}}') {
                    let t1Ex1_price = "{{$data->t1Ex1_price}}"
                    s.childNodes[3].childNodes[1].childNodes[3].innerHTML = Number(t1Ex1_price).toFixed(2)
                }
                else if(Item_name == '{{$data->t1Ex2}}'){
                    let t1Ex2_price = "{{$data->t1Ex2_price}}"
                   s.childNodes[3].childNodes[1].childNodes[3].innerHTML = Number(t1Ex2_price * x).toFixed(2)
                }
                else if(Item_name == '{{$data->t2Ex}}'){
                    let t2Ex_price = "{{$data->t2Ex_price}}"
                    s.childNodes[3].childNodes[1].childNodes[3].innerHTML = Number(t2Ex_price * x).toFixed(2)
                }
                else if(Item_name == '{{$data->t3Ex}}'){
                    let t3Ex_price = "{{$data->t3Ex_price}}"
                    s.childNodes[3].childNodes[1].childNodes[3].innerHTML = Number(t3Ex_price * x).toFixed(2)
                }
                 
                //storing data
            
                if (pservice == "{{$data->t2}}") {
                    let v = s.childNodes[3].childNodes[1].childNodes[3].innerHTML
                    window.localStorage.setItem("standardCost", v);
                } else if (pservice == '{{$data->t3}}') {
                    let p = s.childNodes[3].childNodes[1].childNodes[3].innerHTML
                    window.localStorage.setItem("primiumCost", p);
                } else {
                    if (Item_name == '{{$data->t1Ex1}}') {
                        let n = s.childNodes[3].childNodes[1].childNodes[3].innerHTML
                        window.localStorage.setItem("certifiedNCost", n);
                    } else {
                        let ex = s.childNodes[3].childNodes[1].childNodes[3].innerHTML
                        window.localStorage.setItem("certifiedEXCost", ex);
                    }
                }
            }
        })
    })

    
  
    

    // Translation warning shows

    $('#translateFrom').on('change', function() {
        if ($(this).val() != 'English') {
            $('.alert-toggle').addClass('show')
        }
        if($(this).val()){
            $('#translateFrom-error').hide()
        }
    })

    $('#translateTo').on('change', function() {
        if ($(this).val() != 'English') {
            $('.alert-toggle').addClass('show')
        }
    })
    


let fileName;

$('#up-file').change(function(e){
    fileName = e.target.files[0].name;
});



// $('#up-file').change(function() {
// //    alert($(this).val()); 
// fileName = $(this).val();
// });
    // Stripe integration
    // var $form = $(".stripe-payment");

    // var $form = $(".stripe-payment");
    
    // $('form.stripe-payment').bind('submit', function(e) {
    //     e.preventDefault();
    //     var $form = $(".stripe-payment"),
    //         inputVal = ['input[type=text]', 'input[type=file]',
    //             'textarea'
    //         ].join(', '),
    //         $inputs = $form.find('.required').find(inputVal),
    //         $errorStatus = $form.find('div.error'),
    //         valid = true;
    //     $errorStatus.addClass('hide');

    //     $('.has-error').removeClass('has-error');
    //     $inputs.each(function(i, el) {
    //         var $input = $(el);
    //         if ($input.val() === '') {
    //             $input.parent().addClass('has-error');
    //             $errorStatus.removeClass('hide');
    //             e.preventDefault();
    //         }
    //     });

    //     if (!$form.data('cc-on-file')) {
    //         e.preventDefault();
    //         Stripe.setPublishableKey($form.data('stripe-publishable-key'));
    //         Stripe.createToken({
    //             number: $('.card-num').val(),
    //             cvc: $('.card-cvc').val(),
    //             exp_month: $('.card-expiry-month').val(),
    //             exp_year: $('.card-expiry-year').val()
    //         }, stripeRes);
    //     }

    // });

    // function stripeRes(status, response) {
    //     if (response.error) {
    //         $('.error')
    //             .removeClass('hide')
    //             .find('.alert')
    //             .text(response.error.message);
    //     } else {
    //         var token = response['id'];
    //         let fname = $('#fName').val()
    //         let lname = $('#lName').val()
    //         let email = $('#email').val()
    //         let password = $('#password').val()
    //         let page_count = $('#pageCount input').val()
    //         let word_count = $('#wordCount input').val()
    //         let translate_from = $('#translateFrom').val()
    //         let translate_to = $('#translateTo').val()
    //         let serviceType;
    //         let days = $('.est_days').html()
    //         let types = document.querySelectorAll('.common__btn span');
    //         types.forEach(e => {

    //             if (e.innerHTML.trim() == 'Selected') {
    //                 serviceType = e.getAttribute('data-value')
    //             }
    //         })
    //         extra_service
    //         let grand_total = $('.grand_total').html()
    //         let notes = $('#notes').val()
    //         var payment_type = "Stripe";
        
           

    //         $form.find('input[type=text]').empty();
    //         $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
    //         $form.append("<input type='hidden' name='grand_total' value='" + grand_total + "'/>");
    //         $form.append("<input type='hidden' name='fname' value='" + fname + "'/>");
    //         $form.append("<input type='hidden' name='lname' value='" + lname + "'/>");
    //         $form.append("<input type='hidden' name='email' value='" + email + "'/>");
    //         $form.append("<input type='hidden' name='password' value='" + password + "'/>");
    //         $form.append("<input type='hidden' name='translate_type' value='" + serviceType + "'/>");
    //         $form.append("<input type='hidden' name='translate_from' value='" + translate_from + "'/>");
    //         $form.append("<input type='hidden' name='translate_to' value='" + translate_to + "'/>");
    //         $form.append("<input type='hidden' name='page_count' value='" + page_count + "'/>");
    //         $form.append("<input type='hidden' name='word_count' value='" + word_count + "'/>");
    //         $form.append("<input type='hidden' name='translated_file' value='" + fileName + "'/>");
    //         $form.append("<input type='hidden' name='days' value='" + days + "'/>");
    //         $form.append("<input type='hidden' name='extra_service' value='" + extra_service + "'/>");
    //         $form.append("<input type='hidden' name='payment_type' value='" + payment_type + "'/>");
    //         $form.append("<input type='hidden' name='Notes' value='" + notes + "'/>");
    //         $form.get(0).submit();
    //     }
    // }



    // PAYPAL iNTEGRATION
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'rect',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',
            },
            createOrder: function(data, actions) {
                let grand_total = $('.grand_total').html()
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: Number(grand_total).toFixed(2)
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {

                    var payer = orderData.payer;
                    var transaction_id = orderData.id;
                    var amount = orderData.purchase_units[0].amount;

                    let serviceType;
                    let types = document.querySelectorAll('.common__btn span');
                    types.forEach(e => {
                        if (e.innerHTML.trim() == 'Selected') {
                            serviceType = e.getAttribute('data-value')
                        }
                    })

                    var formData = {}
                    formData['fname'] = $('#fName').val()
                    formData['lname'] = $('#lName').val()
                    formData['email'] = $('#email').val();
                    formData['password'] = $('#password').val();
                    formData['translate_type'] = serviceType
                    formData['translate_from'] = $('#translateFrom').val()
                    formData['translate_to'] = $('#translateTo').val()
                    formData['page_count'] = $('#pageCount input').val()
                    formData['word_count'] = $('#wordCount input').val()
                    formData['translated_file'] = fileName;
                    formData['days'] = $('.est_days').html()
                    formData['extra_service'] = extra_service
                    formData['payment_type'] = 'Paypal';
                    formData['Notes'] = $('#notes').val()
             
                    $.ajax({
                        url:  "{{ url('/paypal-order') }}",
                        type: 'GET',
                        data: {
                            data: data,
                            formData: formData,
                            payer: payer,
                            transaction_id: transaction_id,
                            amount: amount
                        },
                        success: function(res) {
                            window.location = "/thank-you";
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    })
                });
            },
            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();


    $('.saveItems').on('click', function() {
    let fname = $('#fName').val()
    let lname = $('#lName').val()
    let email = $('#email').val()
    let password = $('#password').val()
    let page_count = $('#pageCount input').val()
    let word_count = $('#wordCount input').val()
    let translate_from = $('#translateFrom').val()
    let translate_to = $('#translateTo').val()
    let translated_file = $('#translate_file').val()
    let serviceType;
    let days = $('.est_days').html()
    let types = document.querySelectorAll('.common__btn span');
    types.forEach(e => {
        if (e.innerHTML.trim() == 'Selected') {
            serviceType = e.getAttribute('data-value')
        }
    })
    extra_service
    let grand_total = $('.grand_total').html()
    let notes = $('#notes').val()
    console.log(fname,lname,email,password,page_count,word_count,translate_from,translate_to,fileName,serviceType,days,grand_total,notes)
})



    </script>

</body>
</html>