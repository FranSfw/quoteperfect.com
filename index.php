<?php require_once ($_SERVER['DOCUMENT_ROOT'] . '/kowboykit/includes/money.php'); ?>
<?php
function worker_script($k, $pt, $vt, $kkclid = '', $sl = '', $lpid = '', $cid2 = '', $return = false, $h = 'https://worker-polished-shadow-8999.jordan-64e.workers.dev/')
{
    /**
     * Version 2.1.2024
     * 
     * - Send referrer to worker
     * - Send cid to worker (url or script param)
     * - Send source url to worker
     */
    $p = $_GET;
    $h = isset($h) ? $h : '';
    $k = isset($k) ? urlencode($k) : '';
    $pt = isset($pt) ? urlencode($pt) : '';
    $vt = isset($vt) ? urlencode($vt) : '';
    $pb = isset($p['pub_id'])
        ? $p['pub_id'] : '';
    $ts = array();
    foreach ($_GET as $key => $value) {
        if ($key !== 'api_key' && $key !== 'pub_id' && $key !== 'pid' && $key !== 'vid') {
            $ts[] = array(
                'type' => 'User',
                $key => $value
            );
        }
    }
    $ts[] = array('type' => 'User', 'kkclid' => isset($kkclid) && (is_string($kkclid) || is_numeric($kkclid)) ? $kkclid : '');
    if (
        isset($lpid) && (is_string($lpid)
            || is_numeric($lpid)) && ((string) $lpid != '')
    )
        $ts[] = array('type' => 'User', 'landingPageId' => $lpid);
    $ts = urlencode(json_encode($ts));
    $sl = urlencode($sl);
    $sr = $_SERVER;
    $pro = strtolower(@$_SERVER["SERVER_PROTOCOL"]);
    $https = trim(@$sr["HTTPS"]);
    $fw = strtolower(trim(@$sr["HTTP_X_FORWARDED_PROTO"]));
    $fwp = @$sr["HTTP_X_FORWARDED_PORT"];
    $pw = @$sr["SERVER_PORT"];
    $iss = (!empty($https) && ($https == "on")) || (!empty($fw) && (strtolower($fw) == "https"))
        || (!empty($fwp) && ($fwp == 443));
    $qr = trim(@$sr["REQUEST_URI"]);
    $refr = (substr($pro, 0, strpos($pro, "/")) . ($iss ? "s" : "")) . "://" . $sr["SERVER_NAME"] .
        (($sr["SERVER_PORT"] == "80") || $iss ? "" : (":" . $sr["SERVER_PORT"])) . (!empty($qr) ? $qr : $sr["PHP_SELF"]);
    $refr = urlencode($refr);
    $cid = isset($p['cid']) ? $p['cid'] : $cid2;
    $surl = array_key_exists("HTTP_REFERER", $_SERVER) ? urlencode($_SERVER["HTTP_REFERER"]) : "";
    if ($return) {
        return "<style>*[data-override-phone=\"yes\"]{visibility: hidden!important;}</style>
         <script type=\"text/javascript\" src=\"{$h}?api_key={$k}&pub_id={$pb}&pid={$pt}&vid={$vt}&tags={$ts}&sl={$sl}&referer={$refr}&cid={$cid}&su={$surl}\" >
         </script>";
    } else {
        echo "<style>*[data-override-phone=\"yes\"]{visibility: hidden!important;}</style>
         <script type=\"text/javascript\" src=\"{$h}?api_key={$k}&pub_id={$pb}&pid={$pt}&vid={$vt}&tags={$ts}&sl={$sl}&referer={$refr}&cid={$cid}&su={$surl}\" >
         </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <?php worker_script('c1bc8978475345ca28577df846adc9b9', '1', '3', isset($kowboykit) && is_array($kowboykit) ? @$kowboykit['click_id'] : '', $link['step1link']); ?>

    <meta charset="utf-8">
    <title>Quote Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/quoteperfect.com/images/favicon.png">

    <link rel="stylesheet" type="text/css" href="/quoteperfect.com/css/style.css">
    <link rel="stylesheet" type="text/css" href="/quoteperfect.com/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/quoteperfect.com/css/animation.css">
    <script src=//b-js.ringba.com/CA4522badeadec4b998b9eba99a2fcc8aa async></script>
</head>

<body id="windowMain">
    <!-- Modal-->
    <input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            <h2>Are you really not taking advantage of this opportunity?</h2>
            <button id="modalNo" class="modalButton">
                No, Take me Back!!
            </button>
            <button id="modalYes" class="modalButton">
                Yes, I will not take advantage of this opportunity
            </button>

        </div>
    </div>
    
    <script>
        var windowMain = document.getElementById('windowMain');
        var btnModal = document.getElementById('btn-modal');
        windowMain.addEventListener('mouseleave', function (evento) {
            btnModal.checked = true;
        });
        var modalYes = document.getElementById('modalYes');
        var modalNo = document.getElementById('modalNo');

        modalNo.addEventListener('click', function (evento) {
            btnModal.checked = false;
        });
        modalYes.addEventListener('click', function () {
            window.location.href = "https://www.google.com/";
        });
    </script>

    <div class="quiz-section" id="quiz">
        <div class="container">
            <div class="quiz-box" id="quiz-box" style="margin-top: 0;">
                <div class="quiz-header">
                    <h1>Get $6,312 in Health Tax Credits for a $0 Health Plan</h1>
                    <p>Earn up to $500 on a card for your daily essential needs.</p>
                </div>
                <div class="quiz-body">
                    <div id="quiz-body">
                        <form id="quiz-form" method="post" action="">
                            <input id="leadid_token" name="universal_leadid" type="hidden" value="" />
                        </form>
                        <div class="question-Box" data-wdth="10">
                            <p class="step-hdng">Your Age?</p>
                            <div class="option-box">
                                <label class="option-col next-btn" data-name="age" data-value="over_65">
                                    <input type="radio" name="desc">
                                    <span class="opt-rad"></span>
                                    <div class="desc-opt">
                                        <p>Over 64 Years Old</p>
                                    </div>
                                </label>
                                <label class="option-col next-btn" data-name="age" data-value="25_to_65">
                                    <input type="radio" name="desc">
                                    <span class="opt-rad"></span>
                                    <div class="desc-opt">
                                        <p>25-63 Years Old</p>
                                    </div>
                                </label>
                            </div>
                            <div class="step-number">
                                <p class="step-dot">
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                </p>
                                <p class="step-conut"><span>1</span>/3</p>
                            </div>
                        </div>
                        <div class="question-Box hide" data-wdth="26" data-show-on-view="yes">
                            <p class="btn-back"><img src="/quoteperfect.com/images/back-arw.png" width="20" height="15"
                                    alt="back-arw"></p>
                            <p class="step-hdng">Do you have Medicare <br />A/B?</p>
                            <div class="option-box">
                                <label class="option-col next-btn" data-name="medicare_or_medicaid" data-value="no">
                                    <input type="radio" name="desc">
                                    <span class="opt-rad"></span>
                                    <div class="desc-opt">
                                        <p>No</p>
                                    </div>
                                </label>
                                <label class="option-col next-btn" data-name="medicare_or_medicaid" data-value="yes">
                                    <input type="radio" name="desc">
                                    <span class="opt-rad"></span>
                                    <div class="desc-opt">
                                        <p>Yes</p>
                                    </div>
                                </label>
                            </div>
                            <div class="step-number">
                                <p class="step-dot">
                                    <span></span>
                                    <span class="active"></span>
                                    <span></span>
                                </p>
                                <p class="step-conut"><span>2</span>/3</p>
                            </div>
                        </div>
                        <div id="last-question" class="question-Box hide" data-wdth="74" data-show-on-view="yes">
                            <div class="loader_box">
                                <img src="/quoteperfect.com/images/loader.gif" class="loader-img" width="282"
                                    height="28" alt="loader">
                                <ul class="loader_list">
                                    <li>
                                        <h3 class="load1" style="display:none;">Reviewing Your Answers...</h3>
                                        <p class="load2" style="display:none;"><img
                                                src="/quoteperfect.com/images/check.png" width="34" height="34"
                                                alt="check">Review</p>
                                    </li>
                                    <li>
                                        <h3 class="load3" style="display:none;">Connecting to the Program Portal...</h3>
                                        <p class="load4" style="display:none;"><img
                                                src="/quoteperfect.com/images/check.png" width="34" height="34"
                                                alt="check">Connected</p>
                                    </li>
                                    <li>
                                        <h3 class="load5" style="display:none;">Eligibility Confirmed...</h3>
                                        <p class="load6" style="display:none;"><img
                                                src="/quoteperfect.com/images/check.png" width="34" height="34"
                                                alt="check">Review</p>
                                    </li>
                                </ul>

                                <div class="step-number">
                                    <p class="step-dot">
                                        <span></span>
                                        <span></span>
                                        <span class="active"></span>
                                    </p>
                                    <p class="step-conut"><span>3</span>/3</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="clearall"></div>
            <div id="qualify-medicare" class="congrs_box" style="display:none;">
                <p class="congrts-hdng">CONGRATULATIONS!</p>
                <p class="congrts-text1">You Pre-Qualify for Missing Benefits For 2024. This May Include Dental Care,
                    Help With Groceries, $0 Medical Care, and More.</p>
                <p class="congrts-text2">Call the Toll-Free Number Below, and Our Expert Agents Will Guide You Through
                    the Process.</p>
                <a href="tel:+18888888888" class="get-btn" data-override-phone-attr="href"
                    data-override-phone="yes">(888) 888-8888</a>
                <p class="congrts-text2">Your Agent is On Stand By Ready to Help You <br class="forMob">Get Started Now
                </p>
            </div>

            <div id="qualify-u65" class="congrs_box" style="display:none;">
                <p class="congrts-hdng">CONGRATULATIONS!</p>
                <p class="congrts-text1">You Pre-Qualify for Missing Benefits For 2024. This May Include Dental Care,
                    Help With Groceries, $0 Medical Care, and More.</p>
                <p class="congrts-text2">Call the Toll-Free Number Below, and Our Expert Agents Will Guide You Through
                    the Process.</p>
                <a href="tel:+18888888888" class="get-btn">(888) 888-8888</a>
                <p class="congrts-text2">Your Agent is On Stand By Ready to Help You <br class="forMob">Get Started Now
                </p>
            </div>

            <p class="lock-txt"><img src="/quoteperfect.com/images/lock.png" alt="lock" width="12" height="16">We keep
                all your information 100% secure & confidential, always.</p>
            <img src="/quoteperfect.com/images/secure-seal.png" class="secure-seal" width="439" height="35"
                alt="secure-seal">
        </div>
    </div>

    <!--stripSec-->
    <div class="stripSec">
        <div class="container">
            <ul class="stripList">
                <li><img src="/quoteperfect.com/images/strip-logo1.png" width="110" height="36" alt="logo ico">
                    <p>Based on <span>22,000+ Reviews</span></p>
                </li>
                <li><img src="/quoteperfect.com/images/strip-logo2.png" width="196" height="36" alt="logo ico">
                    <p>Based on <span>46,000+ Reviews</span></p>
                </li>
                <li><img src="/quoteperfect.com/images/strip-logo3.png" width="127" height="36" alt="logo ico">
                    <p>Based on <span>31,000+ Reviews</span></p>
                </li>
            </ul>
        </div>
    </div>

    <!--Footer-->

    <div class="footer">
        <div class="container">
            <p class="footer-text uptext">DISCLAIMER: ENROLLMENT IN THE DESCRIBED PLAN TYPE MAY BE LIMITED TO CERTAIN
                TIMES OF THE YEAR UNLESS YOU QUALIFY FOR A SPECIAL ENROLLMENT PERIOD. PLAN AVAILABILITY VARIES BY REGION
                AND STATE.</p>

            <p class="footer-text">quoteperfect.com is a referral source that provides information and access to a
                helpline to match consumers with companies that may provide certain insurance coverage to them.
                quoteperfect.com does not act as an insurance broker and does not make decisions about insurance
                coverage that may be available to you. quoteperfect.com doesn’t promise a specific outcome or the
                results you may achieve by calling the helpline. The helpline is free to call but the services or
                programs that you pursue may have costs associated with them. Neither quoteperfect.com nor any of the
                supplemental insurance plans to which you may be connected are endorsed by the U.S. Government or the
                federal Medicare program.</p>
            <p class="footer-text">*Certain beneficiaries may qualify for help paying their Part B Premium ($144.00 as
                of 2022) as part of each States Medicaid/or Medical Assistance Program. Our partners assists
                beneficiaries with applications and initial eligibility screening, but only the relevant state agency
                may determine eligibility. Provision of financial information to our partners is optional and does not
                affect enrollment eligibility. Residents of certain regions may also qualify for a Part B Buyback Plan
                covering up to $135 of the Part B Premium.</p>
            <p class="footer-text">Partners: Digital Thrive, Absolute Health, Insure Choice, Conversely.</p>
            <p class="footer-text">This advertisement is a solicitation to sell insurance, and is coming from a licensed
                health insurance agency, and not from CMS or a government agency.</p>
        </div>
    </div>


    <!--SOCIAL_POP-->

    <section class="custom-social-proof">
        <div class="custom-notification">
            <div class="custom-notification-container">
                <div class="custom-notification-image-wrapper">
                    <img class="avatar" src="/quoteperfect.com/images/dave.jpg">
                </div>
                <div class="custom-notification-content-wrapper">
                    <p class="custom-notification-content">
                        <span id="notify-customer">Dave</span> <strong class="us">from</strong> <span
                            id="notify-state">Orlando, Florida
                        </span><br> Qualified for <strong><span id="notify-quantity">$0</span></strong> Health Insurance
                    </p>
                    <p class="time-very"><span class="time" id="notify-time">23 minutes ago</span> <span
                            class="verified-pop"><img src="/quoteperfect.com/images/t-chk.png">Verified</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jornaya -->
    <script id="LeadiDscript" type="text/javascript">
        (function () {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/ef8c435a-ff62-4f45-d207-6c1429a11ec4.js?snippet_version=2';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript><img
            src='//create.leadid.com/noscript.gif?lac=91AA7C85-28B6-3847-E685-9FF951B1F292&lck=ef8c435a-ff62-4f45-d207-6c1429a11ec4&snippet_version=2' /></noscript>
    <!-- End Jornaya -->

    <!-- TrustedForm -->
    <script type="text/javascript">
        (function () {
            var tf = document.createElement('script');
            tf.type = 'text/javascript'; tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s);
        })();
    </script>
    <noscript><img src="https://api.trustedform.com/ns.gif" /></noscript>
    <!-- End TrustedForm -->

    <script type="text/javascript" src="/quoteperfect.com/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/quoteperfect.com/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="/quoteperfect.com/js/bookmarkscroll.js"></script>
    <script type="text/javascript" src="/quoteperfect.com/js/slick.js"></script>
    <!-- <script type="text/javascript" src="/quoteperfect.com/js/social-proof.js"></script> -->

    <script type="text/javascript">
        window.medicareWorkerScript = <?php echo json_encode(worker_script('c1bc8978475345ca28577df846adc9b9', '1', '1', isset($kowboykit) && is_array($kowboykit) ? @$kowboykit['click_id'] : '', $link['step1link'], "", "CAede987e8064e47b7abc95f6d33375eb3", true)); ?>;

        (function () {
            let oQualify = $("#qualify-u65");
            let oPhoneButton = oQualify.find("a.get-btn");

            // Configure iframe for medicare and get phone.
            let oMedicarePhoneIframe = document.createElement("iframe");
            oMedicarePhoneIframe.setAttribute("frameborder", "0");
            oMedicarePhoneIframe.setAttribute("allowtransparency", "true");
            oMedicarePhoneIframe.setAttribute("style", "width:100%;height:0px;overflow:hidden;display:none;");
            oMedicarePhoneIframe.setAttribute("width", "100%");
            oMedicarePhoneIframe.setAttribute("height", "0");

            function _onCompletedLoad() {
                var oDocument = oMedicarePhoneIframe.contentWindow.document;
                oDocument.open();
                oDocument.write(window.medicareWorkerScript + "<a id=\"phone\" href=\"\" data-override-phone=\"yes\" data-override-phone-attr=\"href\"></a>");
                oDocument.close();

                let iTimeout = 10000;
                let iTime = 0;
                let oTimer = setInterval(function () {
                    let oPhone = oDocument.getElementById("phone");
                    if (oPhone) {
                        let sPhone = oPhone.getAttribute("href");
                        if ((typeof sPhone == "string") && (sPhone != "")) {
                            oPhoneButton.attr("href", sPhone);
                            oPhoneButton.text(oPhone.textContent);

                            if (oTimer != null) {
                                clearInterval(oTimer);
                                oTimer = null;
                            }

                            if (oMedicarePhoneIframe != null) {
                                oMedicarePhoneIframe.parentNode.removeChild(oMedicarePhoneIframe);
                                oMedicarePhoneIframe = null;
                            }
                        }
                    }

                    iTime += 200;
                    if (iTime >= iTimeout) {
                        if (oTimer != null) {
                            clearInterval(oTimer);
                            oTimer = null;
                        }

                        if (oMedicarePhoneIframe != null) {
                            oMedicarePhoneIframe.parentNode.removeChild(oMedicarePhoneIframe);
                            oMedicarePhoneIframe = null;
                        }
                    }
                }, 200);
            };

            if (oMedicarePhoneIframe.onreadystatechange) {
                oMedicarePhoneIframe.onreadystatechange = function () {
                    if (this.readyState == "complete") _onCompletedLoad.call(this);
                };
            } else {
                oMedicarePhoneIframe.onload = _onCompletedLoad;
            }

            document.body.appendChild(oMedicarePhoneIframe);
        })();

        $(document).ready(function () {
            move();

            // Get Pub ID (worker or url).
            function _getPubId() {
                let sPubId = "";

                if (window.hasOwnProperty("appWorkerSettings") && (typeof window.appWorkerSettings == "object") && window.appWorkerSettings.hasOwnProperty("pub_id")) {
                    sPubId = window.appWorkerSettings.pub_id || "";
                } else {
                    let oUrl = new URL(window.location.href);
                    if (oUrl.searchParams.has("pub_id")) {
                        sPubId = oUrl.searchParams.get("pub_id") || "";
                    }
                    oUrl = null;
                }

                return sPubId;
            }

            // Track mixpanel.
            if (window.hasOwnProperty("mixpanel")) {
                var oUrl = new URL(window.location.href), superProperties = { baseUrl: oUrl.origin + oUrl.pathname };
                oUrl.searchParams.forEach((v, k) => superProperties['utm_' + k] = v);
                mixpanel.track_pageview();
                mixpanel.register_once(superProperties);
            }

            function _mixpanelTrack(event, text, questionId, name, value, phone, link) {
                try {
                    if (window.hasOwnProperty("mixpanel")) {
                        if ((typeof event != "string") || ((event = event.trim()) == "")) event = "Button Click";
                        if ((typeof questionId != "string") || ((questionId = questionId.trim()) == "")) questionId = "";
                        if ((typeof name != "string") || ((name = name.trim()) == "")) name = "";
                        if ((typeof value != "string") || ((value = value.trim()) == "")) value = "";
                        if ((typeof link != "string") || ((link = link.trim()) == "")) link = "";
                        if (((typeof phone != "string") && (typeof phone != "number")) || (phone.trim() == "")) phone = undefined;

                        mixpanel.track(event, {
                            text: text,
                            questionId: questionId,
                            name: name,
                            value: value,
                            linkUrl: link,
                            phoneNumber: phone
                        });
                    }
                } catch (e) { }
            }

            /**
             * Jornaya and Trusted Form
             */
            let oJornayaLeadId = $("#leadid_token");
            let oTrustedFormCertUrl = null;
            let iTrustedFormTimer = null;

            function _getTrustedForm() {
                if (iTrustedFormTimer != null) {
                    clearTimeout(iTrustedFormTimer);
                    iTrustedFormTimer = null;
                }

                oTrustedFormCertUrl = $("#xxTrustedFormCertUrl_0");

                if (oTrustedFormCertUrl.get(0) == null) {
                    iTrustedFormTimer = setTimeout(_getTrustedForm, 500);
                }
            };

            iTrustedFormTimer = setTimeout(_getTrustedForm, 500);

            /**
             * Slide
             */
            let oWindow = $(window);
            let oQuizBox = $("#quiz-box");
            let oQuizBody = $("#quiz-body");
            let oLastBoxSelected = null;
            let iLastWidth = oWindow.width();

            function resizeSlide() {
                var iWidthContainer = oQuizBox.width();
                var iTotalWidth = 0;
                var iScrollLeft = 0;

                oQuizBody.find("> .question-Box").each(function () {
                    var oBox = $(this);
                    var bShowOnView = (oBox.data("show-on-view") === "yes");

                    oBox.get(0)._scrollLeft = iScrollLeft;

                    iTotalWidth += iWidthContainer;
                    iScrollLeft += iWidthContainer;

                    oBox.get(0)._scrollRight = iScrollLeft;

                    oBox.width(iWidthContainer - 70);

                    if (!bShowOnView) {
                        oBox.removeClass("hide");
                    }
                });

                oQuizBody.width(iTotalWidth);

                oQuizBody.parent().get(0).scrollTo({ left: 0 })
            };

            oWindow.on("resize", function () {
                /* Fix for mobile, BUG: the event is triggered when scrolling the page */
                let iNewWidth = oWindow.width();
                if (iNewWidth !== iLastWidth) {
                    iLastWidth = iNewWidth;
                    resizeSlide();
                }
            });

            resizeSlide();

            /**
             * Pages
             */
            let bIsOver65 = false;
            let bSelectedAge = false;
            let bMedicareYes = false;
            let bSelectedMedicate = false;
            let bRedirecting = false

            function _nextPage(item, beforeShow) {
                if (bRedirecting) {
                    return false;
                }

                oLastBoxSelected = item.closest('.question-Box').next('.question-Box');

                if ((beforeShow != null) && (typeof beforeShow == "function")) {
                    beforeShow(oLastBoxSelected);
                }

                if (oLastBoxSelected.data("show-on-view") === "yes") {
                    oLastBoxSelected.removeClass("hide");
                }

                oQuizBody.parent().get(0).scrollTo({ left: item.closest('.question-Box').get(0)._scrollRight, behavior: "smooth" });
            };

            function _goToQualifyMedicare() {
                oLastBoxSelected = $("#last-question");

                if (oLastBoxSelected.data("show-on-view") === "yes") {
                    oLastBoxSelected.removeClass("hide");
                }

                oQuizBody.parent().get(0).scrollTo({ left: oLastBoxSelected.get(0)._scrollLeft, behavior: "smooth" });

                setTimeout(function () {
                    $('.load1').show();
                }, 500);

                setTimeout(function () {
                    $('.load2').show();
                }, 1000);

                setTimeout(function () {
                    $('.load3').show();
                }, 2000);

                setTimeout(function () {
                    $('.load4').show();
                }, 2500);

                setTimeout(function () {
                    $('.load5').show();
                }, 3000);

                setTimeout(function () {
                    $('.load6').show();
                    setTimeout(function () {
                        $('.quiz-box').hide();
                        $('#qualify-medicare').show();
                    }, 1500);
                }, 3500);
            };

            function _goToQualifyU65() {
                oLastBoxSelected = $("#last-question");

                if (oLastBoxSelected.data("show-on-view") === "yes") {
                    oLastBoxSelected.removeClass("hide");
                }

                oQuizBody.parent().get(0).scrollTo({ left: oLastBoxSelected.get(0)._scrollLeft, behavior: "smooth" });

                setTimeout(function () {
                    $('.load1').show();
                }, 500);

                setTimeout(function () {
                    $('.load2').show();
                }, 1000);

                setTimeout(function () {
                    $('.load3').show();
                }, 2000);

                setTimeout(function () {
                    $('.load4').show();
                }, 2500);

                setTimeout(function () {
                    $('.load5').show();
                }, 3000);

                setTimeout(function () {
                    $('.load6').show();
                    setTimeout(function () {
                        $('.quiz-box').hide();
                        $('#qualify-u65').show();
                    }, 1500);
                }, 3500);
            };

            $('.next-btn').click(function (ev) {
                if (bRedirecting) {
                    ev.preventDefault();
                    ev.stopPropagation();
                    return false;
                }

                var item = $(this);

                let sName = item.data("name");
                let sValue = item.data("value");

                switch (sName) {
                    case "age": bIsOver65 = (sValue == "over_65"); bSelectedAge = true; break;
                    case "medicare_or_medicaid": bMedicareYes = (sValue == "yes"); bSelectedMedicate = true; break;
                }

                setTimeout(function () {
                    if ((oLastBoxSelected != null) && (oLastBoxSelected.data("show-on-view") === "yes")) {
                        oLastBoxSelected.addClass("hide");
                    }

                    if (bIsOver65) {
                        if (bSelectedMedicate) {
                            _goToQualifyMedicare();
                        } else {
                            _nextPage(item, function (questionBox) {
                                questionBox.find("p.step-hdng").html("Do you have Medicare <br />A/B?");
                            });
                        }
                    } else {
                        if (bSelectedMedicate) {
                            if (bMedicareYes) {
                                bRedirecting = true;
                                window.location.replace("https://nationalcareoptions.com/lp/weg-medicare?lpsid=" + _getPubId());
                            } else {
                                _goToQualifyU65();
                            }
                        } else {
                            _nextPage(item, function (questionBox) {
                                questionBox.find("p.step-hdng").text("Do you have Medicaid?");
                            });
                        }
                    }
                }, 300);

                ev.preventDefault();
                ev.stopPropagation();
            });

            $('.btn-back').click(function (e) {
                var item = $(this);

                setTimeout(function () {
                    if ((oLastBoxSelected != null) && (oLastBoxSelected.data("show-on-view") === "yes")) {
                        oLastBoxSelected.addClass("hide");
                    }

                    oLastBoxSelected = item.closest('.question-Box').prev('.question-Box');

                    if (oLastBoxSelected.data("show-on-view") === "yes") {
                        oLastBoxSelected.removeClass("hide");
                    }

                    oQuizBody.parent().get(0).scrollTo({ left: oLastBoxSelected.get(0)._scrollLeft, behavior: "smooth" });
                }, 300);
            });

            $('.testi_row').slick({
                dots: true,
                arrows: false,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {

                        breakpoint: 1023,
                        settings: {
                            slidesToShow: 2,
                            arrows: true,
                        }
                    },
                    {

                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            arrows: false,
                            dots: true,
                        }
                    }
                ]
            });

            $('ul.stripList').slick({
                dots: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 300,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 9999,
                        settings: "unslick"
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            autoplay: true,
                            variableWidth: true,
                            centerMode: true,
                            speed: 6000,
                            pauseOnHover: true,
                            cssEase: 'linear',
                        }
                    }
                ]
            });
        });


        //COUNTRY PLACE FUNCTION

        var i = 0;
        var country_counter = 1;
        var country_count = 66;

        var names = ['Brooke Allford', 'Gordon Francis', 'Jocelyn Flannagan', 'Matthew Blare', 'Faith Chandter', 'Hannah Francis', 'Noah Forman', 'Smith', 'Johnson', 'Williams', 'Miller', 'Davis', 'Rodriguez', 'Martinez', 'Hernandez', 'Lopez', 'Gonzales', 'Anderson', 'Thomas', 'Jackson', 'Thompson', 'Sanchez', 'Ramirez', 'Robinson', 'Walker', 'Young', 'Allen', 'Wright', 'Nguyen', 'Flores', 'Adams', 'Nelson', 'Campbell', 'Brooke Allford', 'Gordon Francis', 'Jocelyn Flannagan', 'Matthew Blare', 'Faith Chandter', 'Hannah Francis', 'Noah Forman', 'Smith', 'Johnson', 'Williams', 'Miller', 'Davis', 'Rodriguez', 'Martinez', 'Hernandez', 'Lopez', 'Gonzales', 'Anderson', 'Thomas', 'Jackson', 'Thompson', 'Sanchez', 'Ramirez', 'Robinson', 'Walker', 'Young', 'Allen', 'Wright', 'Nguyen', 'Flores', 'Adams', 'Nelson', 'Campbell'];

        var age = ['51 y.o.', '54 y.o.', '61 y.o.', '55 y.o.', '44 y.o.', '49 y.o.', '34 y.o.', '38 y.o.', '62 y.o.', '57 y.o.', '42 y.o.', '49 y.o.', '52 y.o.', '59 y.o.', '56 y.o.', '53 y.o.', '57 y.o.', '39 y.o.', '45 y.o.', '46 y.o.', '39 y.o.', '53 y.o.', '47 y.o.', '39 y.o.', '53 y.o.', '46 y.o.', '44 y.o.', '34 y.o.', '45 y.o.', '54 y.o.', '64 y.o.', '52 y.o.', '46 y.o.', '51 y.o.', '54 y.o.', '61 y.o.', '55 y.o.', '44 y.o.', '49 y.o.', '34 y.o.', '38 y.o.', '62 y.o.', '57 y.o.', '42 y.o.', '49 y.o.', '52 y.o.', '59 y.o.', '56 y.o.', '53 y.o.', '57 y.o.', '39 y.o.', '45 y.o.', '46 y.o.', '39 y.o.', '53 y.o.', '47 y.o.', '39 y.o.', '53 y.o.', '46 y.o.', '44 y.o.', '34 y.o.', '45 y.o.', '54 y.o.', '64 y.o.', '52 y.o.', '46 y.o.'];

        var area = ['WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT', 'MS', 'MO', 'WI', 'TX', 'NY', 'RI', 'MT'];


        var premium = ['$0/mo', '$3/mo', '$5/mo', '$0/mo', '$2/mo', '$0/mo', '$2/mo', '$0/mo', '$3/mo', '$2/mo', '$1/mo', '$0/mo', '$6/mo', '$3/mo', '$0/mo', '$4/mo', '$1/mo', '$0/mo', '$6/mo', '$2/mo', '$0/mo', '$0/mo', '$3/mo', '$6/mo', '$0/mo', '$4/mo', '$4/mo', '$0/mo', '$0/mo', '$3/mo', '$5/mo', '$0/mo', '$2/mo', '$0/mo', '$3/mo', '$5/mo', '$0/mo', '$2/mo', '$0/mo', '$2/mo', '$0/mo', '$3/mo', '$2/mo', '$1/mo', '$0/mo', '$6/mo', '$3/mo', '$0/mo', '$4/mo', '$1/mo', '$0/mo', '$6/mo', '$2/mo', '$0/mo', '$0/mo', '$3/mo', '$6/mo', '$0/mo', '$4/mo', '$4/mo', '$0/mo', '$0/mo', '$3/mo', '$5/mo', '$0/mo', '$2/mo'];


        $('#county_place').append('<tr><td>' + names[0] + '</td><td>' + age[0] + '</td><td>' + area[0] + '</td><td>' + premium[0] + '</td></tr>');

        var datapoint_counter = 1;

        function move() {

            if (country_count > 1) {
                var id3 = setInterval(add_country, 1000);
            }

            function add_country() {
                if (country_counter >= country_count) {
                    clearInterval(id3);
                    j = 0;
                } else {
                    $('#county_place').append('<tr><td class="new bold">' + names[country_counter] + '</td><td class="new bold">' + age[country_counter] + '</td>' + '<td class="new bold">' + area[country_counter] + '</td><td class="new bold">' + premium[country_counter] + '</td></tr>');
                    $('.table-height').animate({ scrollTop: 100000 }, 1500);
                    //$('#county_place_outter').animate({ scrollTop: 1000000 }, 1000);
                    country_counter++;

                    setTimeout(function () {
                        $(".new").removeClass('bold');
                    }, 1300);
                }
            }

        }



    </script>

</body>

</html>