<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
if (!file_exists("ID")) {
$g = readline("id >>>: ");
file_put_contents("ID", $g);
}
if (!file_exists("ch")) {
file_put_contents("ch", "Chekr Max");
}
if (!file_exists("token")) {
$g = readline("Token >>>: ");
file_put_contents("token", $g);
}
if (!file_exists("type")) {
file_put_contents("type", "a");
}
if (!file_exists("type2")) {
file_put_contents("type2", "a");
}
if (!file_exists("type3")) {
file_put_contents("type3", "a");
}
file_put_contents("type1", "a");
file_put_contents("xba", "0");
file_put_contents("type2", "a");
file_put_contents("type4", "a");
file_put_contents("type5", "a");
file_put_contents("type6", "a");
file_put_contents("type7", "a");
file_put_contents("type8", "a");
file_put_contents("type9", "a");
file_put_contents("type10", "a");
file_put_contents("type11", "a");
file_put_contents("type12", "a");
file_put_contents("type13", "a");
file_put_contents("type14", "a");
file_put_contents("type15", "a");
file_put_contents("step", "");
file_put_contents("step2", "");
file_put_contents("step3", "");
file_put_contents("step4", "");
file_put_contents("step5", "");
file_put_contents("step6", "");
file_put_contents("step7", "");
file_put_contents("step8", "");
file_put_contents("step9", "");
file_put_contents("step10", "");
file_put_contents("step11", "");
file_put_contents("step12", "");
file_put_contents("step13", "");
file_put_contents("step14", "");
file_put_contents("step15", "");
file_put_contents("phone1", "-No number");
file_put_contents("phone2", "-No number");
file_put_contents("phone3", "-No number");
file_put_contents("phone4", "-No number");
file_put_contents("phone5", "-No number");
file_put_contents("phone6", "-No number");
file_put_contents("phone7", "-No number");
file_put_contents("phone8", "-No number");
file_put_contents("phone9", "-No number");
file_put_contents("phone10", "-No number");
file_put_contents("phone11", "-No number");
file_put_contents("phone12", "-No number");
file_put_contents("phone13", "-No number");
file_put_contents("phone14", "-No number");
file_put_contents("phone15", "-No number");
if (!file_exists("in.json")) {
file_put_contents("in.json", "");
}
if (!file_exists("info.json")) {
file_put_contents("info.json", "");
}
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number2"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number3"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number4"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number5"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number6"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number7"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number8"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number9"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number10"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number11"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number12"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number13"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number14"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info["number15"] = "-No number";
file_put_contents('info.json', json_encode($info));
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num6"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num7"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num8"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num9"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num10"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num11"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num12"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num13"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num14"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num15"] = "off";
file_put_contents('info.json', json_encode($info));
echo "Running Bot...\n";
shell_exec("screen -dmS bot php7.4 bot.php");
echo "Account Bot...\n";
echo "Done\n\n\n\n";