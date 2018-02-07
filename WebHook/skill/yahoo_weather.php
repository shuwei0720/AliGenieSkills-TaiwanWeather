<?php

function getWoeId($city){
    $tmpWoeId = "";

    $cityArray = array("新北市" => "2306211O", "淡水" => "2306211", 
        "台北" => "2306179", "台北市" => "2306179", "内湖" => "2306179",
        "桃园" => "2306209", "大园" => "2306209", 
        "新竹" => "2306185", "竹东" => "2306185",        
        "苗栗" => "2306197", "三义" => "2306197", "铜锣" => "2306221",
        "台中" => "2306210", "大甲" => "2306210",
        "彰化" => "2306183", "彰化市" => "2306183", "二林" => "2306195", "鹿港" => "2306201",
        "南投" => "2306204", "南投市" => "2306204", "埔里" => "2306205",
        "云林" => "2306212", "斗六" => "2306212", "斗南" => "2306212",
        "嘉义" => "2306206", "布袋" => "2306206",
        "台南" => "2306182", "安平" => "2306182",
        "高雄" => "2306180", "左营" => "2306180",
        "屏东" => "2306189", "屏东市" => "2306189", "东港" => "2306213", "高树" => "2306215", "枋寮" => "2306220", "枋山" => "2306224",
        "台东" => "2306190", "台东市" => "2306190", "关山" => "2306227",
        "花莲" => "2306187", "花莲市" => "2306187", "玉里" => "2306222", "丰滨" => "2306225",
        "宜兰" => "2306198", "宜兰市" => "2306198",
        "苏澳" => "2306208",
        "基隆" => "2306188", "七堵" => "2306188",
    );

    foreach ($cityArray as $k=>$v) {
        if ($k == $city){
            $tmpWoeId = $v;
            break; 
        }
    }
    return $tmpWoeId;
}

function getCodeName($codeNum){
    $tmpCodeName = "";
    switch ($codeNum) {
            case 0: $tmpCodeName ="龙卷风";break;
            case 1: $tmpCodeName ="热带风暴";break;
            case 2: $tmpCodeName ="飓风";break;
            case 3: $tmpCodeName ="严重雷暴";break;
            case 4: $tmpCodeName ="雷暴";break;
            case 5: $tmpCodeName ="下雨下雪";break;
            case 6: $tmpCodeName ="下雨和雨夹雪";break;
            case 7: $tmpCodeName ="下雪和雨夹雪";break;
            case 8: $tmpCodeName ="冻毛毛雨";break;
            case 9: $tmpCodeName ="细雨";break;
            case 10: $tmpCodeName ="冻雨";break;
            case 11: $tmpCodeName ="阵雨";break;
            case 12: $tmpCodeName ="阵雨";break;
            case 13: $tmpCodeName ="雪花纷飞";break;
            case 14: $tmpCodeName ="小雪阵雨";break;
            case 15: $tmpCodeName ="吹雪";break;
            case 16: $tmpCodeName ="雪";break;
            case 17: $tmpCodeName ="冰雹";break;
            case 18: $tmpCodeName ="霰";break;
            case 19: $tmpCodeName ="灰尘";break;
            case 20: $tmpCodeName ="有雾";break;
            case 21: $tmpCodeName ="阴霾";break;
            case 22: $tmpCodeName ="烟雾";break;
            case 23: $tmpCodeName ="大风";break;
            case 24: $tmpCodeName ="有风";break;
            case 25: $tmpCodeName ="冷";break;
            case 26: $tmpCodeName ="多云";break;
            case 27: $tmpCodeName ="夜间云层厚";break;
            case 28: $tmpCodeName ="白天多云";break;
            case 29: $tmpCodeName ="夜间部分多云";break;
            case 30: $tmpCodeName ="白天部分阴天";break;
            case 31: $tmpCodeName ="夜间无云";break;
            case 32: $tmpCodeName ="晴朗";break;
            case 33: $tmpCodeName ="夜间炎热";break;
            case 34: $tmpCodeName ="白天炎热";break;
            case 35: $tmpCodeName ="下雨和冰雹";break;
            case 36: $tmpCodeName ="热";break;
            case 37: $tmpCodeName ="孤立的雷暴";break;
            case 38: $tmpCodeName ="散射雷暴";break;
            case 39: $tmpCodeName ="散射雷暴";break;
            case 40: $tmpCodeName ="散射";break;
            case 41: $tmpCodeName ="大雪";break;
            case 42: $tmpCodeName ="散落的阵雨";break;
            case 43: $tmpCodeName ="大雪";break;
            case 44: $tmpCodeName ="部分多云";break;
            case 45: $tmpCodeName ="雷阵雨";break;
            case 46: $tmpCodeName ="阵雨";break;
            case 47: $tmpCodeName ="间歇性雷阵雨";break;
            case 3200: $tmpCodeName ="无法预测";break;
    }
    return $codeNam;
}

?>