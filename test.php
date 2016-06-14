<?php
    session_start();
    date_default_timezone_set('PRC');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <title>ks8</title>
    <style>
    body { 
        font: 13px 'Lucida sans', Arial, Helvetica;
        color: #eee;
        text-align: center;
    }
    
    a {
        color: #ccc;
    }
    
    /*-------------------------------------*/
    
    .cf:before, .cf:after{
      content:"";
      display:table;
    }
    
    .cf:after{
      clear:both;
    }

    .cf{
      zoom:1;
    }

    /*-------------------------------------*/	
    
    .form-wrapper {
        width: 450px;
        padding: 15px;
        margin: 10px auto 50px auto;
        background: #444;
        background: rgba(0,0,0,.2);
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }
    
    .form-wrapper input {
        width: 330px;
        height: 20px;
        padding: 10px 5px;
        float: left;    
        font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
        border: 0;
        background: #eee;
        -moz-border-radius: 3px 0 0 3px;
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;      
    }
    
    .form-wrapper input:focus {
        outline: 0;
        background: #fff;
        -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
    }
    
    .form-wrapper input::-webkit-input-placeholder {
       color: #999;
       font-weight: normal;
       font-style: italic;
    }
    
    .form-wrapper input:-moz-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }
    
    .form-wrapper input:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }    
    
    .form-wrapper button {
		overflow: visible;
        position: relative;
        float: right;
        border: 0;
        padding: 0;
        cursor: pointer;
        height: 40px;
        width: 110px;
        font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
        color: #fff;
        text-transform: uppercase;
        background: #d83c3c;
        -moz-border-radius: 0 3px 3px 0;
        -webkit-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;      
        text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
    }   
      
    .form-wrapper button:hover{		
        background: #e54040;
    }	
      
    .form-wrapper button:active,
    .form-wrapper button:focus{   
        background: #c42f2f;    
    }
    
    .form-wrapper button:before {
        content: '';
        position: absolute;
        border-width: 8px 8px 8px 0;
        border-style: solid solid solid none;
        border-color: transparent #d83c3c transparent;
        top: 12px;
        left: -6px;
    }
    
    .form-wrapper button:hover:before{
        border-right-color: #e54040;
    }
    
    .form-wrapper button:focus:before{
        border-right-color: #c42f2f;
    }    
    
    .form-wrapper button::-moz-focus-inner {
        border: 0;
        padding: 0;
    }
 
 	 #show{display: none; position: absolute; top: 25%; left: 22%; width: 53%; height: 49%; padding: 8px; border: 8px solid #E8E9F7; background-color: white; z-index:1002; overflow: auto;}
 
    </style>
    <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 20.0px; font: 14.0px 'Songti SC'; color: #000000; -webkit-text-stroke: #000000}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 16.0px; font: 14.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 20.0px; font: 14.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 16.0px; font: 14.0px 'Songti SC'; color: #000000; -webkit-text-stroke: #000000}
    p.p5 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 17.0px; font: 14.0px 'Songti SC'; color: #000000; -webkit-text-stroke: #000000}
    p.p6 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 17.0px; font: 14.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000}
    p.p7 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 16.0px; font: 14.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000; min-height: 16.0px}
    p.p8 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 15.0px; font: 12.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000; min-height: 15.0px}
    p.p9 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 15.0px; font: 12.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000}
    p.p10 {margin: 0.0px 0.0px 0.0px 0.0px; line-height: 17.0px; font: 12.0px 'Songti SC'; color: #000000; -webkit-text-stroke: #000000; min-height: 17.0px}
    p.p11 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 16.0px; font: 14.0px 'Times New Roman'; color: #000000; -webkit-text-stroke: #000000; min-height: 16.0px}
    p.p12 {margin: 0.0px 0.0px 0.0px 0.0px; text-align: justify; line-height: 20.0px; font: 14.0px Times; color: #000000; -webkit-text-stroke: #000000}
    span.s1 {font-kerning: none}
    span.s2 {font: 14.0px 'Songti SC'; font-kerning: none}
    span.s3 {font: 14.0px 'Times New Roman'; font-kerning: none}
    span.s4 {font-kerning: none; background-color: #ffff00}
    span.s5 {font: 14.0px 'Times New Roman'; font-kerning: none; background-color: #ffff00}
    span.s6 {font: 14.0px 'Songti SC'; font-kerning: none; background-color: #ffff00}
    span.s7 {font: 14.0px Times; font-kerning: none}
    span.s8 {font: 14.0px 'Times New Roman'; font-kerning: none; background-color: #ff0000}
    span.s9 {font-kerning: none; background-color: #ff0000}
    span.s10 {font: 14.0px Times; font-kerning: none; background-color: #ffff00}
    span.s11 {font: 14.0px 'Hiragino Mincho ProN'; font-kerning: none}
    span.s12 {font-kerning: none; background-color: #ffffff}
    span.s13 {font: 14.0px 'Times New Roman'; font-kerning: none; background-color: #ffffff}
    span.s14 {font: 14.0px 'Songti SC'; font-kerning: none; background-color: #ffffff}
    span.s15 {font-kerning: none; background-color: #d3d3d3}
    table.t1 {width: 753.0px; margin: 0.0px 0.0px 0.0px 20.0px; border-collapse: collapse}
    table.t2 {width: 753.0px; border-collapse: collapse}
    table.t3 {width: 760.0px; margin: 0.0px 0.0px 0.0px 20.0px; border-collapse: collapse}
    table.t4 {border-collapse: collapse}
    table.t5 {width: 457.0px; margin: 0.0px 0.0px 0.0px 29.0px; border-collapse: collapse}
    table.t6 {margin: 0.0px 0.0px 0.0px 3.9px; border-collapse: collapse}
    table.t7 {margin: 0.0px 0.0px 0.0px 7.2px; border-collapse: collapse}
    table.t8 {margin: 0.0px 0.0px 0.0px 10.0px; border-collapse: collapse}
    table.t9 {width: 449.0px; border-collapse: collapse}
    table.t10 {width: 769.0px; background-color: #ffffff; border-collapse: collapse}
    table.t11 {width: 769.0px; background-color: #ffffff}
    table.t12 {margin: 0.0px 0.0px 0.0px 16.7px; border-collapse: collapse}
    table.t13 {margin: 0.0px 0.0px 0.0px 20.0px; border-collapse: collapse}
    table.t14 {width: 753.0px; margin: 0.0px 0.0px 0.0px 16.7px; border-collapse: collapse}
    table.t15 {width: 769.0px; border-collapse: collapse}
    table.t16 {background-color: #3a86c4}
    table.t17 {margin: 0.0px 0.0px 0.0px 18.1px; border-collapse: collapse}
    td.td1 {width: 745.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td2 {width: 752.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td3 {width: 746.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 0.0px 0.0px 0.0px 7.0px}
    td.td4 {width: 383.6px; border-style: solid; border-width: 1.3px 1.3px 1.3px 1.3px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td5 {width: 91.6px; border-style: solid; border-width: 1.3px 1.3px 1.3px 1.3px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td6 {width: 269.6px; border-style: solid; border-width: 1.3px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td7 {width: 49.6px; border-style: solid; border-width: 1.3px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td8 {width: 91.6px; border-style: solid; border-width: 0.0px 1.3px 1.3px 1.3px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td9 {width: 58.6px; border-style: solid; border-width: 0.0px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td10 {width: 52.6px; border-style: solid; border-width: 0.0px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td11 {width: 55.6px; border-style: solid; border-width: 0.0px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td12 {width: 56.6px; border-style: solid; border-width: 0.0px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td13 {width: 49.6px; border-style: solid; border-width: 0.0px 1.3px 1.3px 0.0px; border-color: #000000 #000000 #000000 #000000; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td14 {width: 26.0px}
    td.td15 {width: 362.0px}
    td.td16 {width: 18.0px}
    td.td17 {width: 553.2px; background-color: #ffffff; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 0.0px 3.9px 0.0px 3.9px}
    td.td18 {width: 550.2px; background-color: #ffffff; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 0.0px 3.9px 0.0px 3.9px}
    td.td19 {width: 21.0px}
    td.td20 {width: 540.0px}
    td.td21 {width: 224.6px; background-color: #ffffff; padding: 0.0px 7.2px 0.0px 7.2px}
    td.td22 {width: 574.0px; background-color: #ffffff; padding: 0.0px 10.0px 0.0px 10.0px}
    td.td23 {width: 594.0px; background-color: #ffffff}
    td.td24 {width: 6.0px}
    td.td25 {width: 415.0px; background-color: #ffffff; padding: 0.0px 10.0px 0.0px 10.0px}
    td.td26 {width: 8.0px}
    td.td27 {width: 435.0px; background-color: #ffffff}
    td.td28 {width: 395.0px; background-color: #ffffff; padding: 0.0px 10.0px 0.0px 10.0px}
    td.td29 {width: 415.0px; background-color: #ffffff}
    td.td30 {width: 426.8px; background-color: #ffffff; padding: 0.0px 11.1px 0.0px 11.1px}
    td.td31 {width: 449.0px; background-color: #ffffff}
    td.td32 {width: 435.0px}
    td.td33 {width: 746.8px; padding: 0.0px 11.1px 0.0px 11.1px}
    td.td34 {width: 769.0px}
    td.td35 {width: 740.3px; padding: 0.0px 14.3px 0.0px 14.3px}
    td.td36 {width: 549.1px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 5.9px}
    td.td37 {width: 551.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td38 {width: 556.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td39 {width: 550.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 0.0px 0.0px 0.0px 7.0px}
    td.td40 {width: 562.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td41 {width: 746.1px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 5.9px}
    td.td42 {width: 761.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td43 {width: 556.0px; padding: 1.0px 1.0px 1.0px 1.0px}
    td.td44 {width: 554.0px; padding: 1.0px 1.0px 1.0px 1.0px}
    td.td45 {width: 552.0px; background-color: #cccccc}
    td.td46 {width: 552.0px; background-color: #ffffff}
    td.td47 {width: 552.0px}
    td.td48 {width: 4.0px}
    td.td49 {width: 522.0px}
    td.td50 {width: 30.0px}
    td.td51 {width: 645.1px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 5.9px}
    td.td52 {width: 647.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td53 {width: 653.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td54 {width: 646.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 0.0px 0.0px 0.0px 7.0px}
    td.td55 {width: 660.0px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 7.0px}
    td.td56 {width: 646.7px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 1.0px 1.0px 1.0px 6.3px}
    td.td57 {width: 645.7px; border-style: solid; border-width: 0.0px 0.0px 1.3px 0.0px; border-color: #000000 #000000 #cee7f1 #000000; padding: 0.0px 0.0px 0.0px 6.3px}
  </style>
</head>

<body>
<div id="show">检索中....
 <input id="btnclose" type="button" value="Close" onclick="hidediv();"/>
</div>

<form class="form-wrapper cf"  method="post" onsubmit="return checkStr()">
	<input name="keyWord" type="text" placeholder="请输入关键字..." required ／>
	<button type="submit" >Search</button>
</form>

<div style="font: 13px; color: black; text-align: left;">
	<?php

    $access_ip=$_SERVER["REMOTE_ADDR"];
    $log_cont = file_get_contents('keyword.log');
    $access_count = mb_substr_count($log_cont, $access_ip, "UTF-8");
    $info="<u style='font-size:1.2em;color:red'>{$access_ip}您已成功查询:({$access_count})次</u><br/>";
     echo $info;

    if(isset($_POST["keyWord"])){
        $key_word=$_POST["keyWord"];
        if($key_word==""){
            echo '请输入关键字!';
            exit;
        }
        $seach_type= get_string_type($key_word);

        //$ip = $_SERVER["REMOTE_ADDR"];
        $log_str=date("Y-m-d H:i:s").",{$access_ip},{$seach_type},".$key_word."\n";
        file_put_contents('keyword.log',$log_str,FILE_APPEND);

         if($seach_type==3){
             echo "<h2><em>({$key_word})</em>  请输入文本或者拼音数字！请不要混合查询</h2>";
             echo "<h3>例1:windows servet2008</h3>";
             echo "<h3>例2:下列关于工程变更监控的表述正确的有</h3>";
             // seach_doc($key_word,$conts);
         }else{
             //小于20次就执行
             read_all_dir(dirname(__FILE__).'/zh',$key_word,$seach_type);
//             seach_str($conts,$key_word,0,0);
         }
        //查询

	}

    //获取文本类型
    function get_string_type($key_word){
        $strA= trim($key_word);   
        $lenA= strlen($strA); //检测字符串实际长度
        $lenB= mb_strlen($strA, "utf-8"); //文件的编码方式要是UTF8     
        if($lenA=== $lenB) {    
            return"1";//全英文    
        }else {
           if($lenA% $lenB== 0) {    
               return"2";//全中文    
           }else {    
               return"3";//中英混合    
           }  
        }  
    }


    /**
     * 遍历文件夹
     * @param $dir
     * @param $key_word
     * @param $seach_type
     * @return array
     */
	function read_all_dir($dir,$key_word,$seach_type)
    {
        $result = array();
        $handle = opendir($dir);
        if($handle)
        {
            while ( ( $file = readdir ( $handle ) ) !== false )
            {
                if ( $file != '.' && $file != '..')
                {
                    $cur_path = $dir . DIRECTORY_SEPARATOR . $file;
                    if ( is_dir ( $cur_path ) )
                    {
                        $result['dir'][$cur_path] = read_all_dir($cur_path,$key_word,$seach_type);
                    }
                    else
                    {
                        $pathinfo = pathinfo($cur_path);
                        $file_name=$pathinfo['filename'];
                        if($file_name) {
                            if ($file_name{0} <> "~") {
                                if ($pathinfo['extension'] == 'html') {
                                    $runtime = new runtime;
                                    $runtime->start();
                                    $conts = file_get_contents($cur_path);
                                    $sum = mb_substr_count($conts, $key_word, "UTF-8");

                                    echo "<u style='font-size:1.3em;color:royalblue'>{$file_name}--{$key_word}->(匹配结果：{$sum}个)</u>";

                                    if ($sum) {
                                        if ($sum < 200) {
                                            seach_str($conts,$key_word, 0, 0,$seach_type);

                                        } else {
                                            echo "匹配结果超过100个请重新查询!";
                                            exit;
                                        }

                                    }
                                    $runtime->stop();

                                    $spent_time =round(($runtime->spent())/1000,2,PHP_ROUND_HALF_DOWN);

                                    echo "<u style='font-size:1.2em;color:red'>查询耗时:{$spent_time}秒</u><hr/>";
                                    //

                                    //$result['file'][] = $cur_path;
                                }
                            }
                        }
                   }
                }
            }
            closedir($handle);
        }
        return $result;
    }

    /**
     *字符串匹配
     * @param $str 字符串
     * @param $find 匹配条件
     * @param $n 开始查找的位置
     * @param $count_id 总序号
     */
  function seach_str($str,$find,$n,$count_id,$seach_tpye){

        $pos = strpos($str,$find,$n);
        if($pos>0){
            $pos= $pos+strlen($find);
            $count_id=$count_id+1;
            echo '<br/>'.$count_id.':'.$pos.':<hr>';
            //echo $count_id.':'.$pos.':<br>';
            //$str =  $str{$pos};
             $puls_arr=array();

           // $result_str="";

            for($f=900;$f>0;$f--)
            {
                array_push($puls_arr,$str[$pos-$f]);
                //$result_str.=$str[$pos-$f];
                if(($f-1)==strlen($find)){

                     array_push($puls_arr,"<u style='font-size:1.2em;color:red'>");
                     //array_push($puls_arr,$str[$pos-4]);
                }
            }


            array_push($puls_arr,"</u>");
           
            for($i=0;$i<1000;$i++)
            {
                 array_push($puls_arr,$str[$pos+$i]);
               // $result_str.=$str[$pos-$i];
            }

             $puls_str=join($puls_arr);

            echo $puls_str;

            seach_str($str,$find,$pos,$count_id,$seach_tpye);
        }
 }

  function seach_doc($str='PMP',$conts){
 
	$sum=substr_count($conts,$str);
	$arr=explode("</p>",$conts);
	$length= count($arr).'<br>';
	
	echo $length.'<br>';
	echo $sum.'<hr>';
	$id=0;
	foreach($arr as $k=>$v){
		if(stripos($v,$str)){
		 	//echo $v.'<br>';
		 	$id++;
		 	echo  $id.':<hr>';
		 	if(!empty($arr[$k-5])){
		 		echo $arr[$k-5];
			 	echo $arr[$k-4];
			 	echo $arr[$k-3];
			 	echo $arr[$k-2];
			 	echo $arr[$k-1];
		 	}
		 	 
		   $str_arr = explode($str,$v);
		 	// echo $str_arr[0];
		   $str_tmp='';
		 	foreach ($str_arr as $k1 => $v1) { 
		 		$str_tmp=$str_tmp.'<u style="font-size:1.2em;color:red">('.$str.')</u>'.$v1; 
		 	}
		 	
	 		echo  $str_tmp;
	 		
	 		
	 		if(!empty($arr[$k+5])){
		 		echo $arr[$k+1];
		 		echo $arr[$k+2];
		 		echo $arr[$k+3];
		 		echo $arr[$k+4];
		 		echo $arr[$k+5];
		 	}
	 		echo  '<hr>';

			
	 	 }
	}
}


    class runtime
    {
        var $StartTime = 0;
        var $StopTime = 0;

        function get_microtime()
        {
            list($usec, $sec) = explode(' ', microtime());
            return ((float)$usec + (float)$sec);
        }

        function start()
        {
            $this->StartTime = $this->get_microtime();
        }

        function stop()
        {
            $this->StopTime = $this->get_microtime();
        }

        function spent()
        {
            return round(($this->StopTime - $this->StartTime) * 1000, 1);
        }

    }

    ?>

</div>
</body>
<script>
	function checkStr(){
		//alert(1);
		return true;
	}
</script>
</html>
