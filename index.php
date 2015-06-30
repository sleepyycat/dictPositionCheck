<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../../css-base/jquery-ui.min.css" type="text/css" media="all" />

<script src="../../../js-base/jquery.min.js"></script>
<script src="../../../js-base/jquery-ui.min.js"></script>
<script src="../../../js-base/json.min.js"></script>

<!--script type="text/javascript">
      var youdao_channelid=1;
      var youdao_imei='94a02b02ac56015fdae6bd50a86f2f5a';
      var youdao_keyfrom='mdict.4.3.0.iphonepro';
      var youdao_model='iPodTouch4G';
     </script>
<script type="text/javascript" src="http://impservice.dictvista.youdao.com/imp/dict_req_vista.js"></script-->


<?php
    $host   = get_value("host", "qt101x");   
    $port   = get_value("port", "11111");
    $parameter   = get_value("parameter", "ip=27.16.0.0");
    function get_value($key, $def_value) {
        global $_POST; 
        if (array_key_exists($key, $_POST))
            return $_POST[$key];
        return $def_value;
    }
?>
</head>

<body>
<h2>信息流广告测试<h2>
<!--script type="text/javascript" id="yd_slot_id_1">
        var yd_slot_id = "yd_slot_id_1"; // ??一?碌?d一?拢卢?4
        var youdao_channelid=2;
        var youdao_imei='94a02b02ac56015fdae6bd50a86f2f5a';
        var youdao_keyfrom='mdict.4.3.0.iphonepro';
        var youdao_model='iPodTouch4G';
        var youdao_username='a';
       </script>
<script type="text/javascript" src="http://impservice.dictvista.youdao.com/imp/dict_req_vista.js"></script-->
<script type="text/javascript" id="yd_slot_id_1">
        var yd_slot_id = "yd_slot_id_1";
        var youdao_style="雅思讲堂";
        var youdao_imei='94a02b02ac56015fdae6bd50a86f2f5a';
        var youdao_keyfrom='mdict.4.3.0.iphonepro';
        var youdao_model='iPodTouch4G';
        var youdao_username='a';
       </script>
       <script type="text/javascript" src="http://impservice.dictvista.youdao.com/imp/dict_req_vista.js"></script>
<!--script type="text/javascript" src="http://qt101x.corp.youdao.com:11112/imp/dict_req_vista.js"></script-->
<h3>词典所有广告展示</h3>
<form action="" method="POST" width = 100%>
    <p>resin Host:<input type="text" name="host" value="<?php echo $host ?>"/> (eg:qt101x) </p>
    <p>请求端口：<input type="text" name="port" value="<?php echo $port ?>"> (eg:11111)</p>
    <p>附加参数：<input type="text" name=" parameter" value="<?php echo $parameter ?>"> (eg:ip=27.16.0.0)</p>
	<input type="submit" name="start" value="开始请求" />
</form>
<?php
$host="";
$port="";
$parameter="";
$url_head="";
$url=array();

    //词典客户端首页
    $url_body[0]="/imp/request.s?req=YoudaoDict5.0&uid=testuser&syndid=50&posid=101&rnd=123456";
    $url_body[1]="/imp/request.s?req=-&adnum=1&syndid=998&doctype=xml&rnd=1352105333953&query=what&uid=5ddb4cdcf927aa20"; //4.4之前版本
    //词典客户端结果页
    $url_body[2]="/imp/request.s?req=-&adnum=1&syndid=52&posid=102&doctype=xml&rnd=1338530582656&query=fuck&uid=adc57ed3ea08f89e1&offers=ead_dictr_top%20ead_dictr_right%20ead_dictr_1%20ead_dictr_2%20ead_dictr_3%20ead_dictr_4%20ead_dictr_5%20ead_dictr_result_bottom%20&appVer=5.0.34.1193";
    $url_body[3]="/imp/request.s?req=-&adnum=1&syndid=998&doctype=xml&rnd=1352105333953&query=what&uid=5ddb4cdcf927aa20&offers=ead_dictr_top%20ead_dictr_right%20ead_dictr_1%20ead_dictr_2%20ead_dictr_3%20ead_dictr_5";//4.之前版本
    //词典底部通栏V1
    $url_body[4]="/imp/request.s?req=deskdict.main5.0.34.1193&uid=adc57ed3ea08f89e1&syndid=54&posid=105&doctype=db&op=r&rnd=4&appVer=5.0.34.1193";
    //词典底部通栏V2
    $url_body[5]="/imp/request.s?req=deskdict.main5.0.35.9705&uid=***&syndid=56&memberid=108&op=r&strategy=brand&tn=text_560_30&width=560&height=30&appVer=5.0.35.9705";
    $url_body[6]="/imp/request.s?req=deskdict.main5.0.35.9705&uid=***&syndid=56&memberid=108&op=r&strategy=brand&tn=text_560_30&width=560&height=30&appVer=5.0.35.9705&callback=fun123";
    $url_body[7]="/imp/request.s?req=deskdict.main5.0.35.9705&uid=***&syndid=56&memberid=108&op=r&strategy=cpc&tn=text_560_30&width=560&height=30&appVer=5.0.35.9705&callback=fun123";
    //allinone弹窗广告
    $url_body[8]="/imp/request.s?req=popup&syndid=59&memberid=120&tn=text_150_100&width=150&height=100&uid=xxx";
    $url_body[9]="/imp/request.s?req=popup&syndid=59&memberid=121&tn=text_150_210&width=150&height=210&uid=xxx";
    $url_body[10]="";
    //右下角弹窗
    $url_body[11]="/imp/request.s?req=http%3A%2F%2Fdict.youdao.com&syndid=59&memberid=130&tn=text_250_50&width=250&height=50&layout=0";
    //取词广告
    $url_body[12]="/imp/request.s?type=image&op=r&posid=103&k=&advType=&query=x&pos=0&uid=adc57ed3ea08f89e1&appVer=5.0.33.3225&req=-&syndid=53&doctype=xml&adnum=1";//图片
    $url_body[13]="/imp/request.s?type=text&op=r&posid=104&k=&advType=&query=x&pos=0&uid=adc57ed3ea08f89e1&appVer=5.0.33.3225&req=-&syndid=53&doctype=xml&adnum=1";//文字
    //词典web端
    $url_body[14]="/imp/request.s?req=http%3A%2F%2Fdict.youdao.com&doctype=dw&memberid=110636&tn=text_960_75&width=960&height=75&posid=201&ref2=http://dict.youdao.com&syndid=57&rnd=654";//网页端->首页-> 底部通栏 960*75
    $url_body[15]="/imp/request.s?req=http%3A%2F%2Fdict.youdao.com&doctype=dw&memberid=110636&tn=text_960_60&width=960&height=60&posid=202&ref2=http://dict.youdao.com&syndid=57&time=1338177126990";//网页端-->结果页-->顶部通栏 960x60
    $url_body[16]="/imp/request.s?req=http%3A%2F%2Fdict.youdao.com&doctype=dw&memberid=110636&tn=text_250_250&width=250&height=250&posid=203&ref2=http://dict.youdao.com&syndid=57&time=1338177126296";//网页端-->结果页-->右侧中部 250x250
    $url_body[17]="/imp/request.s?req=http%3A%2F%2Fdict.youdao.com&doctype=dws&syndid=57&posid=0&memberid=110636&tn=text_250_320&width=250&height=320&ref2=http://dict.youdao.com/&time=1338177127308";//网页端-->结果页-->右侧中部 4条效果文字
    $url_body[18]="/imp/request.s?req=http%3A%2F%2Ffanyi.youdao.com%2F%3Fkeyfrom%3Dnavindex.product&rnd=20&doctype=dw&syndid=58&posid=301&memberid=107861&tn=text_960_75&width=960&height=60";//翻译端-->结果页-->底部通栏 960x75
    $url_body[19]="/imp/request.s?req=http%3A%2F%2Ffanyi.youdao.com%2Ftranslate&rnd=539&doctype=dws&syndid=58&posid=0&memberid=107861&tn=text_960_25&width=960&height=25";//翻译端-->结果页-->底部通栏 4条效果文字
    $url_body[20]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=420&&strategy=preAd&width=320&height=460&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->iphone开机画面（320*380）
    $url_body[21]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=420&&strategy=preAd&width=640&height=780&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->iphone开机画面（640*780）
    $url_body[22]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=420&&strategy=preAd&width=640&height=1136&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->iphone开机画面（640*960）
    $url_body[23]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=440&&strategy=newAd&width=640&height=100&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->iphone底部通栏（640*100）
    $url_body[24]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=410&&strategy=preAd&width=320&height=400&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->andriod开机画面（320*400）
    $url_body[25]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=410&&strategy=preAd&width=480&height=680&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->andriod开机画面（480*680）
    $url_body[26]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=410&&strategy=preAd&width=720&height=1280&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->andriod开机画面（720*1080）
    $url_body[27]="/imp/request.s?req=xxxx&uid=******&syndid=55&memberid=430&&strategy=newAd&width=720&height=112&appVer=4.4.x&vendor=xx&model=***&abtest=x";//手机端-->andriod底部通栏（720*112）

if($_POST["host"] && $_POST["port"] && $_POST["parameter"]) {
	$host=$_POST["host"];
    $port=$_POST["port"];
    $parameter=$_POST["parameter"];
    $url_head="http://$host.corp.youdao.com:$port";

    for($i=0;$i<=27;$i++){
    	$url[$i]= $url_head.$url_body[$i]."&".$parameter;
    }
}
elseif ($_POST["host"] && $_POST["port"]) {
 	$host=$_POST["host"];
    $port=$_POST["port"];
    $url_head="http://$host.corp.youdao.com:$port";

    for($i=0;$i<=27;$i++){
    	$url[$i]= $url_head.$url_body[$i];
    }
 } 



    /*
    $url=array($url_head.$url_body_1,
                $url_head.$url_body_2,
                $url_head.$url_body_3,
                $url_head.$url_body_4,
                $url_head.$url_body_5,
                $url_head.$url_body_6,
                $url_head.$url_body_7,
                $url_head.$url_body_7_1,
                $url_head.$url_body_8,
                $url_head.$url_body_9,
                $url_head.$url_body_10,
                $url_head.$url_body_11,
                $url_head.$url_body_12,
                $url_head.$url_body_13,
                $url_head.$url_body_14,
                $url_head.$url_body_15,
                $url_head.$url_body_16,
                $url_head.$url_body_17,
                $url_head.$url_body_18,
                $url_head.$url_body_19,
                $url_head.$url_body_20,
                $url_head.$url_body_21,
                $url_head.$url_body_22,
                $url_head.$url_body_23,
                $url_head.$url_body_24,
                $url_head.$url_body_25,
                $url_head.$url_body_26,
                $url_head.$url_body_27);
                */
    $detail=array("词典客户端-首页（4.4之后版本）",
                  "词典客户端-首页（4.4之前版本）",
                  "词典客户端-结果页（4.4之后版本）",
                  "词典客户端-结果页（4.4之前版本）",
                  "词典底部通栏V1",
                  "词典底部通栏V2-客户端请求广告的url",
                  "词典底部通栏V2-带callback参数的请求（品牌广告）",
                  "词典底部通栏V2-带callback参数的请求（效果广告）",
                  "allinone弹窗-右上角150*100",
                  "allinone弹窗-右下角150*210", 
                  "allinone弹窗-浮层广告",
                  "客户端右下角弹窗",
                  "取词广告-图片",
                  "取词广告-文字",
                  "网页端->首页-> 底部通栏 960*75",
                  "网页端-->结果页-->顶部通栏 960x60",
                  "网页端-->结果页-->右侧中部 250x250",
                  "网页端-->结果页-->右侧中部 4条效果文字",
                  "翻译端-->结果页-->底部通栏 960x75",
                  "翻译端-->结果页-->底部通栏 4条效果文字",
                  "手机端-->iphone开机画面（320*380）",
                  "手机端-->iphone开机画面（640*780）",
                  "手机端-->iphone开机画面（640*960）",
                  "手机端-->iphone底部通栏（640*100）",
                  "手机端-->andriod开机画面（320*400）",
                  "手机端-->andriod开机画面（480*680）",
                  "手机端-->andriod开机画面（720*1080）",
                  "手机端-->andriod底部通栏（720*112）"


);
  
    for($i=0;$i<=27;$i++)
    {
       // echo "<hr/>";
        $m=$i+1;
        echo "<h2>$m.$detail[$i]</h2>";
        //$contents = file_get_contents($url[$i]);
        //echo $contents;
        echo "<a href=$url[$i] target=\"_blank\">$url[$i]</a>";
        echo ("<iframe width=\"100%\" height=\"500\" src=\"$url[$i]\" frameborder=\"0\"  ></iframe>");

    }


/*
        $contents = file_get_contents($url[0]);
        echo $contents;
        echo "<hr/>"; 
*/
	//如果出现中文乱码使用下面代码  
	//$getcontent = iconv("gb2312", "utf-8",$contents); 
   

?>
</body>
</html>
