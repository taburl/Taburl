<?php
$userInfo = $_POST;
//把获取的用户信息数组编码成json字符串
$data =array('respData'=>$userInfo);
$json = json_encode($data);
//打开json文件,如果没有json文件则自动创建json文件
$file = fopen('form.json','w+');
//把json字符串$json写入json文件form.json
fwrite($file,$json);
//关闭文件
fclose($file);
?>
