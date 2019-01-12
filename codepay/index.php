<?php
/**
 * 充值示范页面
 * Created by codepay.
 * Date: 2017/8/2
 * Time: 15:03
 */
error_reporting(E_ALL & ~E_NOTICE);
session_start(); //开启session
require_once("codepay_config.php"); //导入配置文件


//print_r($_SESSION);// 打印全部SESSION  需要先开启session
//print_r($_COOKIE);// 打印全部cookie


$username = trim($_GET['user']); //   http://域名/codepay/?user=admin 访问则自动填写了账户信息
$user = $username ? $username : $codepay_config['user'];  //传入默认用户 默认为admin

//$user =strip_tags($user); //将HTML标签去掉 可以防止XSS跨站


//$user可以从$_SESSION或者$_COOKIE里取出当前登录的用户。 不同网站未必都有保存 也许保存的用户ID

//比如session中数组名为username取到了当前登录的用户名  则为 $user = $_SESSION['username'];


//$_SESSION["uuid"]=guid();//生成UUID 添加到网页表单 防止使用部分软件恶意提交订单
//$salt=md5($_SESSION["uuid"]); //这是用于表单防跨站提交

if ((int)$codepay_config['id'] <= 1) { //未修改配置文件
    exit('<h3>您需要修改配置文件：codepay_config.php 或者安装码支付接口 才能显示该页面。 <a href="install.php">点击安装</a></h3>');
} ?>
<!DOCTYPE html>
<html>
<head><title>
        会员在线充值房卡
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $codepay_config['chart'] ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <meta content="yes" name="apple-mobile-web-app-capable"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <link rel="stylesheet" type="text/css" href="css/userPay.css">

    <style>
        a:link {
            text-decoration: none;
        }

        　　 a:active {
            text-decoration: blink
        }

        　　 a:hover {
            text-decoration: underline;
        }

        　　 a:visited {
            text-decoration: none;
        }

        *, :after, :before {
            /* -webkit-box-sizing: border-box; */
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        button, html input[type=button], input[type=reset], input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="loadingPicBlock" style="max-width: 720px;margin:0 auto;" class="pay">
    <header class="g-header">

        <div class="head-r">
            <a href="/dt/" class="z-HReturn" data-dismiss="modal" aria-hidden="true"><s></s><b>大厅首页</b></a>
        </div>
    </header>

    <div class="g-Total gray9">请选择充值金额（10元=100张房卡）<span style="color:red">请选择支付宝充值</span></div>
 
    <section class="clearfix g-member">
        <div class="g-Recharge">
            <ul id="ulOption">
                <!--注意修改金额 需要同时修改前面的值 money="10" -->
                <li money="10"><a href="javascript:;">10元=100房卡<s></s></a></li>
                <li money="20"><a href="javascript:;">20元=200房卡<s></s></a></li>
                <li money="50"><a href="javascript:;"class="z-sel">50元=500房卡<s></s></a></li> <!--class="z-sel" 表示默认选中50元-->
                <li money="100"><a href="javascript:;">100元=1000房卡<s></s></a></li>
                <li money="200"><a href="javascript:;">200元=2500房卡<s></s></a></li>
                <li money="400"><a href="javascript:;">400元=5000房卡<s></s></a></li>
               <li money="500"><a href="javascript:;">500元=6000房卡<s></s></a></li>
                <li money="1200"><a href="javascript:;">1200元=包月房卡<s></s></a></li>
            </ul>
        </div>
        <form action="codepay.php" method="post">
            <article class="clearfix mt10 m-round g-pay-ment g-bank-ct">
                <ul id="ulBankList">
                    <li class="gray6" style="width: 100%;padding: 5px 0px 0px 10px;height: 50px;">您选择充值：<label
                            class="input" style="border: 1px solid #EAEAEA;height: 35px;font-size:30px;">
                            <input type="text" name="price" readonly="readonly" id="price" placeholder="如：50" value="50"
                                   style="width: 170px;color: red;font-size:20px;">   <!--默认输入金额值50-->
                        </label> 元
                    </li>
                    <li class="gray6"
                        style="width: 100%;padding: 5px 0px 0px 10px;display: <?php echo $codepay_config['userOff'] && $user ? 'none' : 'inline'; ?>;height: 50px;">
                       您充值的id号：<font size="5">【<font color="#0000f0"><?php echo  $_SESSION['uid'] ?></font>】</font><label class="input" style="border: 0px solid #EAEAEA;height: 30px;font-size: 30px;">
                            <input type="hidden" name="user" id="id" placeholder="平台会员id" value="<?php echo  $_SESSION['uid'] ?>"  style="width: 180px;font-size: 16px;">
                        </label>
                      </li>

                    </li>
                    <li paytype="1" class="gray9" type="codePay" style="width: 33%">
                        <a href="javascript:;"><img src="img/alipay.jpg"><s></s></a>

                    </li>
                </ul>
            </article>
            <input type="hidden" id="pay_type" value="3" name="type"> <!--值1表示支付宝默认-->
            <input type="hidden" value="<?php echo $salt; ?>" name="salt">

            <div class="mt10 f-Recharge-btn">

                <button id="btnSubmit" type="submit" href="javascript:;" class="orgBtn">确认支付</button>
            </div>
        </form>
    </section>
  <div> <span style="color:red"><font size="5"><b>最近微信充值异常，无法充值的请使用支付宝充值。<br>支付宝充值方法：保存二维码到手机相册，再打开支付宝客户端扫描即可。</b></font></span></div><br>
  <div class="g-Total gray9" style="text-align: center;"><font color="#0000f0"><b><font size="5">---</font></b></font></div>
 <!-- <div><img src="/img/111.png" /></div><br>-->
   <div><font size="3">注意:用户充值10元 如果同一时间2人或多人一起充值10元,为了区分是谁付款,系统会要求支付10.01或10.02,实际支付可能跟原价会有出入,一般是几分的范围。<br>
          请务必按照系统给出的金额进行充值，不能更改，否则不能实时到帐。<br>充值完成3秒后会自动跳转到大厅首页。</font></div><br>
  <!-- <div><b><font size="4">如未到帐联系客服</font></b></div> -->
  <br>
    <input id="hidIsHttps" type="hidden" value="0"/>
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">

        $(function () {
            var c;
            var g = false;
            var a = null;
            var e = function () {
                $("#ulOption > li").each(function () {
                    var n = $(this);
                    n.click(function () {
                        g = false;
                        c = n.attr("money");
                        n.children("a").addClass("z-sel");
                        n.siblings().children().removeClass("z-sel").removeClass("z-initsel");
                        var needMoney = parseFloat(n.attr("money")).toFixed(2);
                        if (needMoney <= 0)needMoney = 0.01;
                        $("#price").val(needMoney);
                    })
                });
                $("#ulBankList > li").each(function (m) {
                    var n = $(this);
                    n.click(function () {
                        if (m < 2)return;
                        $("#pay_type").val(n.attr("payType"));
                        n.children("a").addClass("z-initsel");
                        n.siblings().children().removeClass("z-initsel");
                    })
                });

            };
            e()
        });

    </script>


</div>
</body>
</html>