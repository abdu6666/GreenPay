@extends('layouts.adminlayout')

@section('contents')
    <div class="toast"id="copied_tost">
        <div class="toast-content">
            <i class="fas fa-solid fa-save check"></i>

            <div class="message">
                <span class="text text-1">Update Saved</span>
                <span class="text text-2"id="popup_des"></span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"id="copied_close"></i>

        <div class="progress"id="copied_progress"></div>
    </div>

    <div class="containeer_wrapper">
        <div class="filed_input_wrapper">
            <h3>My Wallet</h3>

            <div class="tag_menu">
                <li class="btn1s" id="active"onclick="show_this(1)">Bkash</li>
                <li class="btn2s" id=""onclick="show_this(2)">Nagad</li>
                <li class="btn3s" id=""onclick="show_this(3)">Rocket</li>
                <li class="btn4s" id=""onclick="show_this(4)">Upay</li>
                <li class="btn11s" id=""onclick="show_this(11)">Tap</li>
                <li class="btn12s" id=""onclick="show_this(12)">Cellfin</li>
                <li class="btn13s" id=""onclick="show_this(13)">OkWallet</li>
                <li class="btn14s" id=""onclick="show_this(14)">Ipay</li>
                <li class="btn5s" id=""onclick="show_this(5)">Perfect Money</li>
                <li class="btn7s" id=""onclick="show_this(7)">Other Methods</li>
                <li class="btn6s" id=""onclick="show_this(6)">Fees & Charge</li>
            </div>

            <form action=""method="POST"class="s1method_tab"style="display:">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="bkash_choosevalue"onchange="bkash_choose()">
                                        <option value="1"selected>Merchent Live Payment</option>
                                        <option value="3">Merchent Tokenized Checkout</option>
                                        <option value="0">Personal</option>
                                        <option value="2">Agent</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Bkash Number</p>
                        <span><input type="text"placeholder="Enter Your Bkash Number"id="bkash_number"value="$bkash_number?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_url_text"style="display:flex">
                    <div class="row">
                        <p id="nm">Bkash Payment URL</p>
                        <span><input type="text"placeholder="Enter Bkash Payment URL"id="bkash_url_payment"value="$bkash_merchent_link?>"></span>
                    </div>
                </div>

                <div class="flexs"id="bkash_tokenized_text_three"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Mode</p>
                        <span>
                                   <select id="bkash_pgw_mode">
                                               <option value="0"selected>Sandbox</option>
                                               <option value="1">Live</option>
                                               <option value="1"selected>Live</option>
                                               <option value="0">Sandbox</option>
                                   </select>
                                </span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_one"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Username</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Username"id="bkash_pgw_username"value="$bkash_pgw_username?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Password</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Password"id="bkash_pgw_password"value="$bkash_pgw_password?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_two"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Api Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Api Key"id="bkash_pgw_apiKey"value="$bkash_pgw_apiKey?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Secret Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Secret Key"id="bkash_pgw_secretKey"value="$bkash_pgw_secretKey?>"></span>
                    </div>
                </div>
                <br>

                <button id="bkash_savechange">Save Changes</button>
            </form>
            <form action=""method="POST"class="s1method_tab"style="display:">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                        <select name="" id="bkash_choosevalue"onchange="bkash_choose()">
                                            <option value="2"selected>Agent</option>
                                            <option value="0">Personal</option>
                                            <option value="1">Merchent Live Payment</option>
                                            <option value="3">Merchent Tokenized Checkout</option>
                                        </select>
                                    </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Bkash Number</p>
                        <span><input type="text"placeholder="Enter Your Bkash Number"id="bkash_number"value="$bkash_number?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_url_text"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash Payment URL</p>
                        <span><input type="text"placeholder="Enter Bkash Payment URL"id="bkash_url_payment"value="$bkash_merchent_link?>"></span>
                    </div>
                </div>

                <div class="flexs"id="bkash_tokenized_text_three"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Mode</p>
                        <span>
                                       <select id="bkash_pgw_mode">
                                                   <option value="0"selected>Sandbox</option>
                                                   <option value="1">Live</option>
                                                   <option value="1"selected>Live</option>
                                                   <option value="0">Sandbox</option>
                                       </select>
                                    </span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_one"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Username</p>
                        <span><input type="text"placeholder="Enter Bkash PGW UsernameL"id="bkash_pgw_username"value="$bkash_pgw_username?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Password</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Password"id="bkash_pgw_password"value="$bkash_pgw_password?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_two"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Api Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Api Key"id="bkash_pgw_apiKey"value="$bkash_pgw_apiKey?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Secret Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Secret Key"id="bkash_pgw_secretKey"value="$bkash_pgw_secretKey?>"></span>
                    </div>
                </div>

                <br>

                <button id="bkash_savechange">Save Changes</button>
            </form>
            <form action=""method="POST"class="s1method_tab"style="display:">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                            <select name="" id="bkash_choosevalue"onchange="bkash_choose()">
                                                <option value="3"selected>Merchent Tokenized Checkout</option>
                                                <option value="0">Personal</option>
                                                <option value="1">Merchent Live Payment</option>
                                                <option value="2">Agent</option>
                                            </select>
                                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Bkash Number</p>
                        <span><input type="text"placeholder="Enter Your Bkash Number"id="bkash_number"value="$bkash_number?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_url_text"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash Payment URL</p>
                        <span><input type="text"placeholder="Enter Bkash Payment URL"id="bkash_url_payment"value="$bkash_merchent_link?>"></span>
                    </div>
                </div>

                <div class="flexs"id="bkash_tokenized_text_three"style="display:">
                    <div class="row">
                        <p id="nm">Bkash PGW Mode</p>
                        <span>
                                           <select id="bkash_pgw_mode">
                                                       <option value="0"selected>Sandbox</option>
                                                       <option value="1">Live</option>
                                                       <option value="1"selected>Live</option>
                                                       <option value="0">Sandbox</option>
                                           </select>
                                        </span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_one"style="display:">
                    <div class="row">
                        <p id="nm">Bkash PGW Username</p>
                        <span><input type="text"placeholder="Enter Bkash PGW UsernameL"id="bkash_pgw_username"value="$bkash_pgw_username?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Password</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Password"id="bkash_pgw_password"value="$bkash_pgw_password?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_two"style="display:">
                    <div class="row">
                        <p id="nm">Bkash PGW App Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Api Key"id="bkash_pgw_apiKey"value="$bkash_pgw_apiKey?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW App Secret Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Secret Key"id="bkash_pgw_secretKey"value="$bkash_pgw_secretKey?>"></span>
                    </div>
                </div>

                <br>

                <button id="bkash_savechange">Save Changes</button>
            </form>
            <form action=""method="POST"class="s1method_tab"style="display:">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                            <select name="" id="bkash_choosevalue"onchange="bkash_choose()">
                                                <option value="0"selected>Personal</option>
                                                <option value="1">Merchent Live Payment</option>
                                                <option value="3">Merchent Tokenized Checkout</option>
                                                <option value="2">Agent</option>
                                            </select>
                                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Bkash Number</p>
                        <span><input type="text"placeholder="Enter Your Bkash Number"id="bkash_number"value="$bkash_number?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_url_text"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash Payment URL</p>
                        <span><input type="text"placeholder="Enter Bkash Payment URL"id="bkash_url_payment"value="$bkash_merchent_link?>"></span>
                    </div>
                </div>


                <div class="flexs"id="bkash_tokenized_text_three"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Mode</p>
                        <span>
                                           <select id="bkash_pgw_mode">
                                                       <option value="0"selected>Sandbox</option>
                                                       <option value="1">Live</option>
                                                       <option value="1"selected>Live</option>
                                                       <option value="0">Sandbox</option>
                                           </select>
                                        </span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_one"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Username</p>
                        <span><input type="text"placeholder="Enter Bkash PGW UsernameL"id="bkash_pgw_username"value="$bkash_pgw_username?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Password</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Password"id="bkash_pgw_password"value="$bkash_pgw_password?>"></span>
                    </div>
                </div>
                <div class="flexs"id="bkash_tokenized_text_two"style="display:none">
                    <div class="row">
                        <p id="nm">Bkash PGW Api Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Api Key"id="bkash_pgw_apiKey"value="$bkash_pgw_apiKey?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Bkash PGW Secret Key</p>
                        <span><input type="text"placeholder="Enter Bkash PGW Secret Key"id="bkash_pgw_secretKey"value="$bkash_pgw_secretKey?>"></span>
                    </div>
                </div>
                <br>

                <button id="bkash_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s2method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="nagad_choosevalue"onchange="nagad_choose()">
                                        <option value="1">Agent</option>
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Nagad Number</p>
                        <span><input type="text"placeholder="Enter Your Nagad Number"id="nagad_number"value="$nagad_number?>"></span>
                    </div>
                </div><br>

                <button id="nagad_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s2method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="nagad_choosevalue"onchange="nagad_choose()">
                                        <option value="0">Personal</option>
                                        <option value="1">Agent</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Nagad Number</p>
                        <span><input type="text"placeholder="Enter Your Nagad Number"id="nagad_number"value="$nagad_number?>"></span>
                    </div>
                </div><br>

                <button id="nagad_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s3method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="rocket_choosevalue">
                                        <option value="1">Agent</option>
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Rocket Number</p>
                        <span><input type="text"placeholder="Enter Your Rocket Number"id="rocket_number"value="$rocket_number?>"></span>
                    </div>
                </div><br>

                <button id="rocket_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s3method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="rocket_choosevalue">
                                        <option value="0">Personal</option>
                                        <option value="1">Agent</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Rocket Number</p>
                        <span><input type="text"placeholder="Enter Your Rocket Number"id="rocket_number"value="$rocket_number?>"></span>
                    </div>
                </div><br>

                <button id="rocket_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s4method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="upay_choosevalue">
                                        <option value="1">Agent</option>
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Upay Number</p>
                        <span><input type="text"placeholder="Enter Your Upay Number"id="upay_number"value="$upay_number?>"></span>
                    </div>
                </div><br>

                <button id="upay_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s4method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="upay_choosevalue">
                                        <option value="0">Personal</option>
                                        <option value="1">Agent</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Upay Number</p>
                        <span><input type="text"placeholder="Enter Your Upay Number"id="upay_number"value="$upay_number?>"></span>
                    </div>
                </div><br>

                <button id="upay_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s11method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="tap_choosevalue">
                                        <option value="1">Agent</option>
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Tap Number</p>
                        <span><input type="text"placeholder="Enter Your Tap Number"id="tap_number"value="$tap_number?>"></span>
                    </div>
                </div><br>

                <button id="tap_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s11method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="tap_choosevalue">
                                        <option value="0">Personal</option>
                                        <option value="1">Agent</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Tap Number</p>
                        <span><input type="text"placeholder="Enter Your Tap Number"id="tap_number"value="$tap_number?>"></span>
                    </div>
                </div><br>

                <button id="tap_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s12method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="cellfin_choosevalue">
                                        <option value="1">Agent</option>
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Cellfin Number</p>
                        <span><input type="text"placeholder="Enter Your Cellfin Number"id="cellfin_number"value="$cellfin_number?>"></span>
                    </div>
                </div><br>

                <button id="cellfin_savechange">Save Changes</button>
            </form>
            <form action=""method="POST"class="s12method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="cellfin_choosevalue">
                                        <option value="0">Personal</option>
                                        <!--<option value="1">Agent</option>!-->
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Cellfin Number</p>
                        <span><input type="text"placeholder="Enter Your Cellfin Number"id="cellfin_number"value="$cellfin_number?>"></span>
                    </div>
                </div><br>

                <button id="cellfin_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s13method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="okwallet_choosevalue">
                                        <option value="1">Agent</option>
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your OkWallet Number</p>
                        <span><input type="text"placeholder="Enter Your OkWallet Number"id="okwallet_number"value="$okwallet_number?>"></span>
                    </div>
                </div><br>

                <button id="okwallet_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s13method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="okwallet_choosevalue">
                                        <option value="0">Personal</option>
                                        <option value="1">Agent</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your OkWallet Number</p>
                        <span><input type="text"placeholder="Enter Your OkWallet Number"id="okwallet_number"value="$okwallet_number?>"></span>
                    </div>
                </div><br>

                <button id="okwallet_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s14method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="ipay_choosevalue">
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your iPay Number</p>
                        <span><input type="text"placeholder="Enter Your iPay Number"id="ipay_number"value="$ipay_number?>"></span>
                    </div>
                </div><br>

                <button id="ipay_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s14method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                                    <select name="" id="ipay_choosevalue">
                                        <option value="0">Personal</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your iPay Number</p>
                        <span><input type="text"placeholder="Enter Your iPay Number"id="ipay_number"value="$ipay_number?>"></span>
                    </div>
                </div><br>

                <button id="ipay_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s5method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Account Type</p>
                        <span>
                            <select name="" id="">
                                <option value="">US Dollars</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Your Perfect Money ID</p>
                        <span><input type="text"placeholder="Enter Your Perfect Money ID"id="perfect_number"value="$perfectmoney_uid?>"></span>
                    </div>
                </div><br>

                <button id="perfect_savechange">Save Changes</button>
            </form>


            <form action="../config/wallet_banks.php"method="POST"class="s7method_tab"style="display:none"id="bankmethod_from">
                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Islamic Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Islami Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="islamic_account_name" value="$bank_islamic_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Islami Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="islamic_account_number" value="$bank_islamic_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Islami Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="islamic_account_brance" value="$bank_islamic_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Islami Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="islamic_account_routing" value="$bank_islamic_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Brac Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Brac Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="bracbank_account_name" value="$bank_brac_bank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Brac Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="bracbank_account_number" value="$bank_brac_bank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Brac Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="bracbank_account_brance" value="$bank_brac_bank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Brac Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="bracbank_account_routing" value="$bank_brac_bank_account_routing?>"></span>
                    </div>
                </div>


                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Bank Asia</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Asia Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="bankasia_account_name" value="$bank_asia_bank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Asia Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="bankasia_account_number" value="$bank_asia_bank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Asia Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="bankasia_account_brance" value="$bank_asia_bank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Asia Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="bankasia_account_routing" value="$bank_asia_bank_account_routing?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">DBBL Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">DBBL Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="dutch_account_name" value="$bank_dutchbangla_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">DBBL Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="dutch_account_number" value="$bank_dutchbangla_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">DBBL Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="dutch_account_brance" value="$bank_dutchbangla_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">DBBL Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="dutch_account_routing" value="$bank_dutchbangla_routing_number?>"></span>
                    </div>
                </div>





                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Agrani Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Agrani Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="agrani_account_name" value="$bank_agrani_bank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Agrani Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="agrani_account_number" value="$bank_agrani_bank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Agrani Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="agrani_account_brance" value="$bank_agrani_bank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Agrani Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="agrani_account_routing" value="$bank_agrani_bank_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">EBL Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">EBL Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="ebl_account_name" value="$bank_estern_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">EBL Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="ebl_account_number" value="$bank_estern_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">EBL Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="ebl_account_brance" value="$bank_estern_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">EBL Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="ebl_account_routing" value="$bank_estern_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Basic Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Basic Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="basic_account_name" value="$bank_basicbank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Basic Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="basic_account_number" value="$bank_basicbank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Basic Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="basic_account_brance" value="$bank_basicbank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Basic Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="basic_account_routing" value="$bank_basicbank_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Jamuna Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Jamuna Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="jamuna_account_name" value="$bank_jamuna_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Jamuna Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="jamuna_account_number" value="$bank_jamuna_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Jamuna Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="jamuna_account_brance" value="$bank_jamuna_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Jamuna Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="jamuna_account_routing" value="$bank_jamuna_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">IFIC Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">IFIC Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="ific_account_name" value="$bank_ific_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">IFIC Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="ific_account_number" value="$bank_ific_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">IFIC Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="ific_account_brance" value="$bank_ific_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">IFIC Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="ific_account_routing" value="$bank_ific_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">SIBL Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">SIBL Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="sibl_account_name" value="$bank_sibl_bank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">SIBL Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="sibl_account_number" value="$bank_sibl_bank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">SIBL Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="sibl_account_brance" value="$bank_sibl_bank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">SIBL Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="sibl_account_routing" value="$bank_sibl_bank_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">SBI Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">SBI Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="sbi_account_name" value="$bank_sbi_bank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">SBI Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="sbi_account_number" value="$bank_sbi_bank_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">SBI Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="sbi_account_brance" value="$bank_sbi_bank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">SBI Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="sbi_account_routing" value="$bank_sbi_bank_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">HDFC Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">HDFC Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="hdfc_account_name" value="$bank_hdfc_bank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">HDFC Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="hdfc_account_number" value="$bank_hdfc_bank_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">HDFC Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="hdfc_account_brance" value="$bank_hdfc_bank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">HDFC Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="hdfc_account_routing" value="$bank_hdfc_bank_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">PayPal Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">PayPal Account Type</p>
                        <span>
                                    <select name="paypal_account_type">
                                        <option value="0"selected>Personal</option>
                                        <option value="1">Business</option>
                                    </select>
                                    <select name="paypal_account_type">
                                        <option value="1"selected>Business</option>
                                        <option value="0">Personal</option>
                                    </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">PayPal Account Email</p>
                        <span><input type="text"placeholder="Enter Account Email"name="paypal_account_mail" value="$bank_paypal_email?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Payeer Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Payeer Account Type</p>
                        <span>
                            <select>
                                <option>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Payeer Account No.</p>
                        <span><input type="text"placeholder="Enter Account No"name="payeer_account_number" value="$bank_payeer_email?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Skrill Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Skrill Account Type</p>
                        <span>
                            <select>
                                <option>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Skrill Account Email</p>
                        <span><input type="text"placeholder="Enter Account Email"name="skrill_account_number" value="$bank_payeer_email?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Payoneer Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Payoneer Account Type</p>
                        <span>
                            <select>
                                <option>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Payoneer Account Email</p>
                        <span><input type="text"placeholder="Enter Account Email"name="payoneer_account_number" value="$bank_payoneer_email?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Paytm Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Paytm Account Type</p>
                        <span>
                            <select>
                                <option>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Paytm Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="paytm_account_number" value="$paytm_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">PhonePe Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">PhonePe Account Type</p>
                        <span>
                            <select>
                                <option>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">PhonePe Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="phone_pe_account_number" value="$phone_pe_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">WebMoney Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">WebMoney Account Type</p>
                        <span>
                                    <select name="webmoney_account_type">
                                        <option value="0"selected>Personal</option>
                                        <option value="1">Marchent</option>
                                    </select>
                                    <select name="webmoney_account_type">
                                        <option value="1"selected>Marchent</option>
                                        <option value="0">Personal</option>
                                    </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">WebMoney Account ID</p>
                        <span><input type="text"placeholder="Enter Account ID"name="webmoney_account_mail" value="$webmoney_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">TransferWise Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">TransferWise Account Type</p>
                        <span>
                                    <select name="wise_account_type">
                                        <option value="0"selected>Personal</option>
                                    </select>
                                    <select name="wise_account_type">
                                        <option value="1"selected>Marchent</option>
                                    </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">TransferWise Account Email</p>
                        <span><input type="text"placeholder="Enter Account Email"name="wise_account_mail" value="$wise_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">TransferWise API KEY TOKEN READONLY</p>
                        <span><input type="text"placeholder="Enter API KEY TOKEN READONLY"name="api_key_readonly" value="$wise_number?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">TransferWise API KEY TOKEN FULL</p>
                        <span><input type="text"placeholder="Enter API KEY TOKEN FULL"name="api_key_readfull" value="$wise_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Pyypl Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Pyypl Account Type</p>
                        <span>
                                    <select name="pyypl_account_type">
                                        <option value="0"selected>Personal</option>
                                    </select>
                                    <select name="pyypl_account_type">
                                        <option value="1"selected>Marchent</option>
                                    </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Pyypl Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="pyypl_account_mail" value="$pyypl_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Binance Method</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Binance Account Type</p>
                        <span>
                                    <select name="binance_account_type">
                                        <option value="0"selected>Personal</option>
                                    </select>
                                    <select name="binance_account_type">
                                        <option value="1"selected>Marchent</option>
                                    </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Binance Account Email</p>
                        <span><input type="text"placeholder="Enter Account Email"name="binance_account_mail" value="$binance_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Visa Mastercard(2Checkout Method)</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">2Checkout Seller ID</p>
                        <span><input type="text"placeholder="Enter Seller ID"name="two_checkout_sellerid" value="$TWOCHECKOUT_SELLER_ID?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">2Checkout Publishing Key</p>
                        <span><input type="text"placeholder="Enter Publishing Key"name="two_checkout_publishing_id" value="$TWOCHECKOUT_PUBLISHABLE_KEY?>"></span>
                    </div>
                </div>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">2Checkout Private Key</p>
                        <span><input type="text"placeholder="Enter Private Key"name="two_checkout_private_id" value="$TWOCHECKOUT_PRIVATE_KEY?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Neteller</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Neteller Account Type</p>
                        <span>
                            <select name="neteller_account_type">
                                <option value="0"selected>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">Neteller Email Address</p>
                        <span><input type="text"placeholder="Enter Email Address"name="neteller_account_email" value="$neteller_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">EasyPaisa</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">EasyPaisa Account Type</p>
                        <span>
                            <select>
                                <option value="0"selected>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">EasyPaisa Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="easypaisa_account_number" value="$easypaisa_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">JazzCash</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">JazzCash Account Type</p>
                        <span>
                            <select>
                                <option value="0"selected>Personal</option>
                            </select>
                        </span>
                    </div>
                    <div class="row">
                        <p id="nm">JazzCash Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="jazzcash_account_number" value="$jazzcash_account_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">Maybank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Maybank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="mybank_account_name" value="$mybank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Maybank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="mybank_account_number" value="$mybank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Maybank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="mybank_account_brance" value="$mybank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">Maybank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="mybank_account_routing" value="$mybank_routing_number?>"></span>
                    </div>
                </div>

                <h2 style="margin-left: 20px;font-size: 20px;color: #333333;border-bottom: 1px solid #dddddd;padding-bottom: 15px;margin-right: 20px;">RHB Bank</h2>
                <div class="flexs">
                    <div class="row">
                        <p id="nm">RHB Bank Account Name</p>
                        <span><input type="text"placeholder="Enter Account name"name="rhbbank_account_name" value="$rhbbank_account_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">RHB Bank Account Number</p>
                        <span><input type="text"placeholder="Enter Account Number"name="rhbbank_account_number" value="$rhbbank_account_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">RHB Bank Brance Name</p>
                        <span><input type="text"placeholder="Enter Bank Brance Name"name="rhbbank_account_brance" value="$rhbbank_brance_name?>"></span>
                    </div>
                    <div class="row">
                        <p id="nm">RHB Bank Routing Number</p>
                        <span><input type="text"placeholder="Enter Routing Number"name="rhbbank_account_routing" value="$rhbbank_routing_number?>"></span>
                    </div>
                </div>

                <button id="bankmethod_savechange">Save Changes</button>
            </form>

            <form action=""method="POST"class="s6method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Fees Type</p>
                        <span>
                                    <select name="" id="fees_choosevalue">
                                        <option value="1">Percentage Fees</option>
                                        <option value="0">Fixed Fees</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Fees Amount</p>
                        <span><input type="text"placeholder="Enter Your Fees"id="feess_number"value="$fees_charge_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Dollar Rate (BDT/RS)</p>
                        <span><input type="text"placeholder="Enter Your Rate"id="dollar_rate_fixed"value="$site_dollar_rate?>"></span>
                    </div>
                </div><br>

                <button id="feescharge_savechange">Save Changes</button>
            </form>
            <form action=""method="POST"class="s6method_tab"style="display:none">
                <div class="flexs">
                    <div class="row">
                        <p id="nm">Fees Type</p>
                        <span>
                                    <select name="" id="fees_choosevalue">
                                        <option value="0">Fixed Fees</option>
                                        <option value="1">Percentage Fees</option>
                                    </select>
                                </span>
                    </div>
                    <div class="row">
                        <p id="nm">Fees Amount</p>
                        <span><input type="text"placeholder="Enter Your Fees"id="feess_number"value="$fees_charge_number?>"></span>
                    </div>
                </div>

                <div class="flexs">
                    <div class="row">
                        <p id="nm">Dollar Rate (BDT/RS)</p>
                        <span><input type="text"placeholder="Enter Your Rate"id="dollar_rate_fixed"value="$site_dollar_rate?>"></span>
                    </div>
                </div><br>

                <button id="feescharge_savechange">Save Changes</button>
            </form>
        </div>
    </div>


    <script>
        function show_this(divid){
            document.querySelector('.btn1s').id = "";
            document.querySelector('.btn2s').id = "";
            document.querySelector('.btn3s').id = "";
            document.querySelector('.btn4s').id = "";
            document.querySelector('.btn5s').id = "";
            document.querySelector('.btn6s').id = "";
            document.querySelector('.btn7s').id = "";
            document.querySelector('.btn11s').id = "";
            document.querySelector('.btn12s').id = "";
            document.querySelector('.btn13s').id = "";
            document.querySelector('.btn14s').id = "";

            document.querySelector('.btn'+divid+'s').id = "active";

            document.querySelector('.s1method_tab').style.display = "none";
            document.querySelector('.s3method_tab').style.display = "none";
            document.querySelector('.s4method_tab').style.display = "none";
            document.querySelector('.s5method_tab').style.display = "none";
            document.querySelector('.s6method_tab').style.display = "none";
            document.querySelector('.s2method_tab').style.display = "none";
            document.querySelector('.s7method_tab').style.display = "none";
            document.querySelector('.s11method_tab').style.display = "none";
            document.querySelector('.s12method_tab').style.display = "none";
            document.querySelector('.s13method_tab').style.display = "none";
            document.querySelector('.s14method_tab').style.display = "none";

            document.querySelector('.s'+divid+'method_tab').style.display = "block";
        }

        function bkash_choose(){
            var bkash_choosevalue = document.querySelector("#bkash_choosevalue").value;

            if(bkash_choosevalue == 0){
                document.querySelector('#bkash_url_text').style.display = "none";
                document.querySelector('#bkash_tokenized_text_one').style.display = "none";
                document.querySelector('#bkash_tokenized_text_two').style.display = "none";
                document.querySelector('#bkash_tokenized_text_three').style.display = "none";
            }
            if(bkash_choosevalue == 1){
                document.querySelector('#bkash_url_text').style.display = "flex";
                document.querySelector('#bkash_tokenized_text_one').style.display = "none";
                document.querySelector('#bkash_tokenized_text_two').style.display = "none";
                document.querySelector('#bkash_tokenized_text_three').style.display = "none";
            }
            if(bkash_choosevalue == 2){
                document.querySelector('#bkash_url_text').style.display = "none";
                document.querySelector('#bkash_tokenized_text_one').style.display = "none";
                document.querySelector('#bkash_tokenized_text_two').style.display = "none";
                document.querySelector('#bkash_tokenized_text_three').style.display = "none";
            }
            if(bkash_choosevalue == 3){
                document.querySelector('#bkash_url_text').style.display = "none";
                document.querySelector('#bkash_tokenized_text_one').style.display = "flex";
                document.querySelector('#bkash_tokenized_text_two').style.display = "flex";
                document.querySelector('#bkash_tokenized_text_three').style.display = "flex";
            }
        }

        $('#bankmethod_from').submit(function(){
            return false;
        });

        $('#bankmethod_savechange').click(function(){

            document.querySelector('#bankmethod_savechange').innerHTML = "Loading..";

            $.post(
                $('#bankmethod_from').attr('action'),
                $('#bankmethod_from :input').serializeArray(),
                function(result){
                    toast = document.querySelector("#copied_tost"),
                        closeIcon = document.querySelector("#copied_close"),
                        progress = document.querySelector("#copied_progress");

                    let timer1, timer2;

                    toast.classList.add("active");
                    progress.classList.add("active");

                    timer1 = setTimeout(() => {
                        toast.classList.remove("active");
                    }, 5000); //1s = 1000 milliseconds

                    timer2 = setTimeout(() => {
                        progress.classList.remove("active");
                    }, 5300);

                    document.querySelector('#popup_des').innerHTML = "Banks Payment Change Saved.";
                    document.querySelector('#bankmethod_savechange').innerHTML = "Save Changes";
                }
            );
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#bkash_savechange').click(function (e) {
                e.preventDefault();
                var bkash_choosevalue = $('#bkash_choosevalue').val();
                var bkash_number = $('#bkash_number').val();
                var bkash_url_payment = $('#bkash_url_payment').val();

                var bkash_pgw_username = $('#bkash_pgw_username').val();
                var bkash_pgw_password = $('#bkash_pgw_password').val();
                var bkash_pgw_apiKey = $('#bkash_pgw_apiKey').val();
                var bkash_pgw_secretKey = $('#bkash_pgw_secretKey').val();
                var bkash_pgw_mode = $('#bkash_pgw_mode').val();


                document.querySelector('#bkash_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_bkash.php",
                    data: { "bkash_choosevalue": bkash_choosevalue, "bkash_pgw_mode": bkash_pgw_mode, "bkash_number": bkash_number, "bkash_url_payment": bkash_url_payment, "bkash_pgw_username": bkash_pgw_username, "bkash_pgw_password": bkash_pgw_password, "bkash_pgw_apiKey": bkash_pgw_apiKey, "bkash_pgw_secretKey": bkash_pgw_secretKey },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Bkash Payment Change Saved.";
                        document.querySelector('#bkash_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#nagad_savechange').click(function (e) {
                e.preventDefault();
                var nagad_choosevalue = $('#nagad_choosevalue').val();
                var nagad_number = $('#nagad_number').val();

                document.querySelector('#nagad_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_nagad.php",
                    data: { "nagad_choosevalue": nagad_choosevalue, "nagad_number": nagad_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Nagad Payment Change Saved.";
                        document.querySelector('#nagad_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#rocket_savechange').click(function (e) {
                e.preventDefault();
                var rocket_choosevalue = $('#rocket_choosevalue').val();
                var rocket_number = $('#rocket_number').val();

                document.querySelector('#rocket_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_rocket.php",
                    data: { "rocket_choosevalue": rocket_choosevalue, "rocket_number": rocket_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Nagad Payment Change Saved.";
                        document.querySelector('#rocket_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#upay_savechange').click(function (e) {
                e.preventDefault();
                var upay_choosevalue = $('#upay_choosevalue').val();
                var upay_number = $('#upay_number').val();

                document.querySelector('#upay_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_upay.php",
                    data: { "upay_choosevalue": upay_choosevalue, "upay_number": upay_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Nagad Payment Change Saved.";
                        document.querySelector('#upay_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#perfect_savechange').click(function (e) {
                e.preventDefault();
                var perfect_number = $('#perfect_number').val();

                document.querySelector('#perfect_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_perfect.php",
                    data: { "perfect_number": perfect_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Nagad Payment Change Saved.";
                        document.querySelector('#perfect_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#feescharge_savechange').click(function (e) {
                e.preventDefault();
                var fees_choosevalue = $('#fees_choosevalue').val();
                var feess_number = $('#feess_number').val();
                var dollar_rate_fixed = $('#dollar_rate_fixed').val();

                document.querySelector('#feescharge_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_fees.php",
                    data: { "fees_choosevalue": fees_choosevalue, "feess_number": feess_number, "dollar_rate_fixed": dollar_rate_fixed },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Fees & Charge Saved.";
                        document.querySelector('#feescharge_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });



        $(document).ready(function () {
            $('#tap_savechange').click(function (e) {
                e.preventDefault();
                var tap_choosevalue = $('#tap_choosevalue').val();
                var tap_number = $('#tap_number').val();

                document.querySelector('#tap_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_tap.php",
                    data: { "tap_choosevalue": tap_choosevalue, "tap_number": tap_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Tap Payment Change Saved.";
                        document.querySelector('#tap_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#cellfin_savechange').click(function (e) {
                e.preventDefault();
                var cellfin_choosevalue = $('#cellfin_choosevalue').val();
                var cellfin_number = $('#cellfin_number').val();

                document.querySelector('#cellfin_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_cellfin.php",
                    data: { "cellfin_choosevalue": cellfin_choosevalue, "cellfin_number": cellfin_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "Cellfin Payment Change Saved.";
                        document.querySelector('#cellfin_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });














        $(document).ready(function () {
            $('#okwallet_savechange').click(function (e) {
                e.preventDefault();
                var okwallet_choosevalue = $('#okwallet_choosevalue').val();
                var okwallet_number = $('#okwallet_number').val();

                document.querySelector('#okwallet_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_okwallet.php",
                    data: { "okwallet_choosevalue": okwallet_choosevalue, "okwallet_number": okwallet_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "OkWallet Payment Change Saved.";
                        document.querySelector('#okwallet_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });










        $(document).ready(function () {
            $('#ipay_savechange').click(function (e) {
                e.preventDefault();
                var ipay_choosevalue = $('#ipay_choosevalue').val();
                var ipay_number = $('#ipay_number').val();

                document.querySelector('#ipay_savechange').innerHTML = "Loading..";

                $.ajax
                ({
                    type: "POST",
                    url: "../config/wallet_ipay.php",
                    data: { "ipay_choosevalue": ipay_choosevalue, "ipay_number": ipay_number },
                    success: function (data) {
                        toast = document.querySelector("#copied_tost"),
                            closeIcon = document.querySelector("#copied_close"),
                            progress = document.querySelector("#copied_progress");

                        let timer1, timer2;

                        toast.classList.add("active");
                        progress.classList.add("active");

                        timer1 = setTimeout(() => {
                            toast.classList.remove("active");
                        }, 5000); //1s = 1000 milliseconds

                        timer2 = setTimeout(() => {
                            progress.classList.remove("active");
                        }, 5300);

                        document.querySelector('#popup_des').innerHTML = "IPay Payment Change Saved.";
                        document.querySelector('#ipay_savechange').innerHTML = "Save Changes";
                    }
                });
            });
        });














        toast = document.querySelector("#copied_tost"),
            closeIcon = document.querySelector("#copied_close"),
            progress = document.querySelector("#copied_progress");

        closeIcon.addEventListener("click", () => {
            toast.classList.remove("active");

            setTimeout(() => {
                progress.classList.remove("active");
            }, 300);

            clearTimeout(timer1);
            clearTimeout(timer2);
        });
    </script>
@endsection
