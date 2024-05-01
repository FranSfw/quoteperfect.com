<?php

require_once("utils.php");

$sKey = "5002e12b8afa0eef3ef871839976527fd663a49275a8fc8bdb16ef557a333d5d";

$arRequiredFields = array("key","firstname","lastname","phone","email","jornaya_leadid","trustedform_cert_url","age","annual_income","medicare_or_medicaid");

$arResult = array(
    "success" => false,
    "errors" => array()
);

/* Validate fields */
$arErrors = array();
$arData = array();

foreach($arRequiredFields as $sField){
    if (!array_key_exists($sField, $_POST)){
        $arErrors[$sField] = "The field is required";
    } else {
        switch($sField){
            case "key":
                if ($_POST[$sField] != $sKey){
                    $arErrors[$sField] = "The value is invalid";
                }
                break;
        }
    }

    if (!array_key_exists($sField, $arErrors) && array_key_exists($sField, $_POST)){
        $sAPIField = "";

        switch($sField){
            case "firstname": $sAPIField = "first_name"; break;
            case "lastname": $sAPIField = "last_name"; break;
            case "phone": $sAPIField = "phone"; break;
            case "email": $sAPIField = "email"; break;
            case "jornaya_leadid": $sAPIField = "jornaya_leadid"; break;
	    case "trustedform_cert_url": $sAPIField = "trustedform_cert_url"; break;
	    case "age": $sAPIField = "age"; break;
	    case "annual_income": $sAPIField = "annual_income"; break;
	    case "medicare_or_medicaid": $sAPIField = "medicare_or_medicaid"; break;
        }

        if ($sAPIField != ""){
            $arData[$sAPIField] = $_POST[$sField];
        }
    }

    unset($sField);
}

/* Save errors */
$arResult["errors"] = $arErrors;

/* Send lead */
if ((count($arErrors) == 0) && (count($arData) > 0)){
    $arData["lp_campaign_id"] = "19998";
    $arData["lp_supplier_id"] = "47171";
    $arData["lp_key"] = "rl5lhm63ranyq1";
    //$arData["lp_action"] = "test";
    $arData["ip_address"] = Utils::getRemoteIP();
    $arData["user_agent"] = Utils::getUserAgent();

    error_log(">> Data: ");
    error_log(print_r($arData, true));

    $oHandler = curl_init();
    curl_setopt($oHandler, CURLOPT_URL, "https://api.leadprosper.io/ingest");
    curl_setopt($oHandler, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($oHandler, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($oHandler, CURLOPT_HEADER, false);
    curl_setopt($oHandler, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($oHandler, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($oHandler, CURLOPT_POST, true);
    curl_setopt($oHandler, CURLOPT_POSTFIELDS, http_build_query($arData));

    $sResponse = curl_exec($oHandler);
    curl_close($oHandler);

    error_log(">> Response: " . $sResponse);
}

/* Response */
header("Content-Type: application/json");
echo json_encode($arResult);
