<?php
    require("yahoo_weather.php");

    $foo = file_get_contents("php://input");
    $jsonObj = json_decode($foo, true);

	// ================================== Parser Aligenie Skill JSON
    $utterance = $jsonObj['utterance'];
    $original = "";
    foreach($jsonObj['slotEntities'] as $k=>$v){
        if ($v['intentParameterName']=== 'city'){
            $original = $v['originalValue'];
            break;
        }
    }
    $reply = "无法查询该城市天气";
    // ================================== query Weather from yahoo
    if (!empty($original)){
        $woeid = getWoeId($original); 
        if (!empty($woeid)){
            $data = file_get_contents('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20woeid="' . $woeid . '")&format=json&env=store://datatables.org/alltableswithkeys');
            $jsonObj = json_decode($data, true);
            $code  = $jsonObj['query']['results']['channel']['item']['forecast']['0']['code'];
            $fH  = $jsonObj['query']['results']['channel']['item']['forecast']['0']['high'];
            $fL  = $jsonObj['query']['results']['channel']['item']['forecast']['0']['low'];
            $cH = round(($fH-32)*5/9, 1);
            $cL = round(($fL-32)*5/9, 1);
            $codeName = getCodeName($code);        
            $reply = $original . "今天氣溫最高" . $cH . "度最低" . $cL . "度天氣狀況" . $codeName;
        }
    }
	// ================================== Echo Result for Aligenie
    $resultObj->returnCode = "0";
    $resultObj->returnErrorSolution = "";
    $resultObj->returnMessage = "";
        $returnValue->reply= $reply;
        $returnValue->resultType= "RESULT";
    $resultObj->returnValue=$returnValue;
    $resultObj->executeCode="SUCCESS";
    $resultObj->msgInfo="";
    $resultJSON = json_encode($resultObj);
    echo $resultJSON;

    
?>
