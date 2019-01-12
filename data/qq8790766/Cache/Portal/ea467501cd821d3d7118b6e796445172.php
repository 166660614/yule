<?php if (!defined('THINK_PATH')) exit();?><html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <title><?php echo ($titlexx); ?>主页</title>
  <link rel="stylesheet" type="text/css" href="/app/css/credits_manager.css">
  <link rel="stylesheet" type="text/css" href="/app/plugins/mescroll/mescroll.min.css">
  <link rel="stylesheet" href="/themes/admin/Public/css/public.css" /> 
  <link rel="stylesheet" href="/themes/admin/Public/css/alert.css" /> 
  <link rel="stylesheet" href="/themes/admin/Public/css/swiper-3.4.2.min.css" />   
  <link rel="stylesheet" type="text/css" href="/themes/admin/Public/css/common/alert.css" /> 
  <link rel="stylesheet" type="text/css" href="/themes/admin/Public/css/activity.css">
  <link rel="stylesheet" type="text/css" href="/themes/admin/Public/css/index.css">
  <link rel="stylesheet" type="text/css" href="/themes/admin/Public/css/page.css">
  <script src="/themes/admin/Public/js/homepage/jq.js" type="text/javascript"></script>  
  <script src="/themes/admin/Public/js/homepage/home.js" type="text/javascript"></script>  
  <script src="/themes/admin/Public/js/swiper-3.4.2.min.js" type="text/javascript"></script> 
    <script type="text/javascript" src="/app/js/jqNiceScroll/jquery.nicescroll.min.js"></script>
  	<script type="text/javascript" src="/app/plugins/mescroll/mescroll.min.js"></script>
</head>
  
 <body style="background-color: #0e0226">
   
   <img class=''src="/themes/admin/Public/img/activity/<?php echo ($user["password"]); ?>.jpg"  style="position: fixed;left: 0;right: 0;top: 0;width: 100%; height: 100%;bottom: 0;margin:auto;" /> 

  <div  class="main" style="position: absolute;">



<!-- 开通管理功能 -->
   <div id="valert" class="alert" style="display: none">
   <div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText">
    <?php if($user[sfgl] == 0): ?>是否消耗50张房卡开启管理功能？
    <?php else: ?>
    关闭后再次开启管理功能需要消耗50张房卡，是否确定关闭？<?php endif; ?>
     
    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx()">
      取消
     </div> 
    <?php if($user[sfgl] == 0): ?><div class="buttonRight" onclick="guanli()">
    <?php else: ?>
        <div class="buttonRight" onclick="guanli_no()"><?php endif; ?>
      确定
     </div>
    </div> 
   </div>
  </div>



   <div class='head' >
    <div class='gerenzx-top'>
     <img class='gerenzx-yhimg' src="<?php echo ($user["img"]); ?>" /> 
     <div class='gerenzx-yhid'>
       ID:<?php echo ($user["id"]); ?>
     </div>
    </div> 
    <div class='gerenzx-gg' ><?php echo ($user["nickname"]); ?></div> 
 
    <div class='roomcard'>
     <div class='num'><?php echo ($user["fk"]); ?></div>                
    </div><img style="position: relative;z-index: 50;height:12vw;top: 11vw; left: 57vw;" src="http://xinaimidating.oss-cn-shenzhen.aliyuncs.com/files/images/activity/roomCard.png" /></div>
            </div>
   </div>

  
     <div class="row" onclick="location.href='/'">
    <img src="/themes/admin/Public/img/activity/zhuonuo.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">游戏大厅</p>
   </div> 
  
<div class="row" onclick="location.href=''">
    <img src="/themes/admin/Public/img/activity/rc_icon_sendredpackage.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">会员充值房卡</p>
  </div>
 


 <!--   <div class="sendRedpackage" onclick="opnemm('fangka','fasongfk')"> -->
   <div class="row" onclick="location.href='<?php echo U('portal/user/fangka');?>'">
    <img src="/themes/admin/Public/img/activity/rc_icon_sendredpackage.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">发送门票</p>
   </div> 
  
   <div class="row" onclick="location.href='<?php echo U('portal/home/dashengkaifangchaxun');?>'" >
    <img src="/themes/admin/Public/img/activity/youxijilu.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">游戏记录</p>
    </div> 
<div class="row" onclick="shoujibd1()" >
    <img src="/themes/admin/Public/img/activity/fangweima.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">防伪码设置</p>
    </div> 
<div class="row" onclick="location.href='<?php echo U('portal/user/gongnsm');?>'" >
    <img src="/themes/admin/Public/img/activity/btn-report.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
    <p class="rcContent">通知与反馈</p>
    </div>
    <?php if($user['status'] == 1 && strtotime($user['create_time']) > time()): ?><div class="row" onclick="location.href='<?php echo U('portal/home/agentlist');?>'" >
      <img src="/themes/admin/Public/img/activity/rc_group.png" class="rcIcon" /> 
      <img src="/themes/admin/Public/img/activity/rc_icon_rightarrow.png" class="rcArrow" /> 
      <p class="rcContent">成员管理</p>
      </div><?php endif; ?>

   <div class="row" >
    <img src="/themes/admin/Public/img/activity/rc_group.png" class="rcIcon" /> 
    <img src="/themes/admin/Public/img/activity/rc_group_open.png" class="rcArrow grzxgl grzxgl2"  onclick="alertgl()" <?php if($user[sfgl] == 0): ?>style="display: none;"<?php endif; ?> /> 
    <img src="/themes/admin/Public/img/activity/rc_group_close.png" class="rcArrow grzxgl grzxgl3" onclick="alertgl()"  <?php if($user[sfgl] == 1): ?>style="display: none;"<?php endif; ?>/> 
<!--     <p class="rcContent" id='guanlgn' onclick="guanlign()">管理功能</p>  -->
    <p class="rcContent" >群主管理</p> 
    
   </div> 
   <!-- 管理功能显示 -->
   <div class="groupMenuDetail" <?php if($user[sfgl] == 1): ?>style="display: block;"<?php endif; ?>>
   <div class='jiurenyaoqinghan' onclick="location.href='<?php echo U('portal/home/gerenzxyaoqinghan/',array('id'=>$user['id']));?>'">
    <img class='jiurenyaoqinghan-img' src="/themes/admin/Public/img/activity/rc_group_invite.png"> <p class='jiuren-fuzhu-p' >邀请成员</p>
    </div> 
    <div class='jiurenchengyuan' onclick="location.href='<?php echo U('portal/home/gerenzxchengyuan');?>'" >
    <img class='jiurenchengyuan-img' src="/themes/admin/Public/img/activity/rc_group_member.png"> <p class='jiuren-fuzhu-p' >群组成员</p>
    </div> 
    <!-- <div class='jiurenkaifangchaxun' onclick="location.href='<?php echo U('portal/home/gerenzxkafangchaxun');?>'" >
    <img class='jiurenkaifangchaxun-img' src="/themes/admin/Public/img/activity/rc_room_search.png"> <p class='jiuren-fuzhu-p' >开房查询</p>
    </div>  -->
    





  





   <div id="validePhone" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
    <div class="phoneFrame" style="position: fixed;overflow:visible; z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
      <div style="height: 2.2vw;"></div> 
            <img src="/images/quxiao.png" style="position: fixed;right: -3vw;top:-7%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx3()">      
      <div style="padding: 1vw; font-size: 5vw; line-height: 10vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					修改手机号
				</div> <!----> <div style="height: 2.2vw;"></div> <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;"><input type="number" name="phone" placeholder="输入手机号" style="padding: 0px 12px; position: absolute; top: 2.5vw; left: 9vw; width: 48vw; height: 11vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"> <div id="authcode" style="position: absolute; top: 2.5vw; right: 9vw; width: 22vw; height: 10vw; line-height: 10vw; font-size: 3.5vw; border-radius: 0.5vh; color: white; background-color: rgb(211, 211, 211);">
						发送验证码
					</div></div> <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div> <div style="position: relative; height: 13vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;"><input type="number" name="phone1" placeholder="输入验证码" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 11vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"></div> <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div> <div style="height: 5vw;"></div> <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"><div onclick="alertqx3()"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">立即绑定</div></div> <div style="height: 8vw;"></div> 
     </div>
</div>
<script type="text/javascript">
      	var mescroll;
      	$(function() {
          	mescroll = new MeScroll("creditsRecordInfo", {
            	"down": {
                  	"auto": false,
                  	//"callback": downCallback
                },
              	"up": {
                  	"auto": false,
                  	"callback": upCallback
                }
            });
          
          	/*$("#creditsRecordInfo").niceScroll({
                cursorcolor: "#ccc",//#CC0071 光标颜色
                cursoropacitymax: 0.7, //改变不透明度非常光标处于活动状态（scrollabar“可见”状态），范围从1到0
                touchbehavior: true, //使光标拖动滚动像在台式电脑触摸设备
                cursorwidth: "2px", //像素光标的宽度
                cursorborder: "0", // 	游标边框css定义
                cursorborderradius: "2px",//以像素为光标边界半径
                autohidemode: true //是否隐藏滚动条
            });*/
          
          	// 下拉刷新回调函数
          	function downCallback() {
            	creditsManager($("#creditsManager").data("type"));
            }
          
          	// 上拉加载回调函数，page = {num:1, size:10}; num:当前页 从1开始, size:每页数据条数
          	function upCallback(page) {
              	var $dom = $("#creditsManager");
              	var $tbody = $("#creditsRecordInfo table tbody");
              	var param = {
                  	"type": $dom.data("type"),
                  	"page": parseInt($dom.data("page")) + 1,
                  	"pageSize": $dom.data("pageSize")
                };
              	$.post("/portal/user/creditsRecord", param,function(data, status) {
                  	data = $.parseJSON(data);
                  	if("success" == status) {
                  		mescroll.endBySize(data.curPageSize, data.totalSize);
                      	$dom.data("page", data.page).data("pageSize", data.pageSize);
                      	if(page.num == 1) {
                        	$tbody.html(data.html);
                          	mescroll.scrollTo(0);
                        } else {
                      		$tbody.append(data.html);
                        }
                    } else {
                    	mescroll.endErr();
                    }
                });
            }
        });
        function codedjs(t){
            $('#authcode').html(t);
            if(t<=0){
                $('#authcode').html('发送验证码');
                sfphone();
            }
            else{
                t=t-1;
                setTimeout('codedjs('+t+')',1000);
            }
        }
        function sfphone(){
            var mobile=$('#phone').val();
            if(mobile.length==0)
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            if(mobile.length!=11)
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            if(!myreg.test(mobile))
            {
                $('#authcode').css('background-color','rgb(211, 211, 211)');
                $('#authcode').attr('onclick','');
                return false;
            }
            $('#authcode').css('background-color','rgb(64, 112, 251)');
            $('#authcode').attr('onclick','sendphone()');
        }

        function sendphone(){
            var mobile=$('#phone').val();
            $.post("/portal/home/sendphone",{mobile:mobile},function(result){
                if(result.status=='1'){
                    tipxx('发送成功');
                    codedjs('60');
                    $('#authcode').attr('onclick','');
                    $('#mabangding').css('background-color','rgb(64, 112, 251)');
                    $('#mabangding').attr('onclick','mabangding()');
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function mabangding(){
            var mobile=$('#phone').val();
            var code=$('#codexx').val();
            $.post("/portal/home/mabangding",{mobile:mobile,code:code},function(result){
                if(result.status=='1'){
                    tipxx('绑定成功');
                    $('#codexx').val('');
                    $('#mabangding').attr('onclick','');
                    $('#mabangding').css('background-color','rgb(211, 211, 211)');
                    $('#validePhone').hide();
                    $('.gerenzx-sjrz').hide();
                    $('.gerenzx-xg').show();
                    $('.gerenzx-xg').html($('#phone').val()+'&nbsp;&nbsp;修改 ');
                    $('#phone').val('');
                    sfphone();
                }
                else{
                    tipxx(result.info);
                }
            },'json');
        }
        function creditsManager(type) {
            var param = {
                "type": type,
                "page": 0,
                "pageSize": 10
            };
          	$("#creditsManager").data("type", param.type).data("page", param.page).data("pageSize", param.pageSize).show();
            $("#creditsManager .credits-tag a").removeClass("active").eq(2 - type).addClass("active");
          	if(mescroll) {
            	mescroll.resetUpScroll();
              	return;
            }
        }
    </script>
</div>
</div>
<div id="creditsManager" class="createRoom" style="display: none;">
    <div class="createRoomBack"></div>
    <div class="mainPart" style="height: 60vh;">
        <div class="createB"></div>
        <div class="createTitle" style="line-height: 5vh;">
            <div class="credits-tag">
                <a onclick="creditsManager(2)">游戏</a>&nbsp;
                <a onclick="creditsManager(1)">群主</a>&nbsp;
                <a onclick="creditsManager(0)">个人</a>
            </div>
        </div>
        <img src="/app/img/common/cancel.png" class="cancelCreate" onclick="$('#creditsManager').hide();">
        <div class="blueBack mescroll" id="creditsRecordInfo" style="height: 51vh;">
            <table class="credits-table">
                <thead>
                <tr>
                    <th>头像</th>
                    <th>发放</th>
                    <th>类型</th>
                    <th>走势</th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
  





 <div id="fasongfk" style="display: none; background: rgb(14, 2, 38);height: 100%;position: fixed; width: 100%;"></div>
<div id="fasongfking"></div>



 <div id="valert2" class="alert" style="display:none">
   <div class="alertBack"></div> 
   <div class="mainPart" style="height: 226.78px;">
    <div class="backImg">
     <div class="blackImg" style="height: 145.406px;"></div>
    </div> 
    <div class="alertText" style="top: 75.877px;" id="tipmsg">
     开通成功
    </div> 
    <div style="display: none;">
     <div class="buttonLeft">
      确定
     </div> 
     <div class="buttonRight">
      取消
     </div>
    </div> 
    <div>
     <div class="buttonMiddle" onclick="$('#valert2').hide();">
      确定
     </div>
    </div> 
   </div>
  </div>

<div id="validePhone1" style="display: none;">

    <div class="phoneMask" ></div> 
    <div class="phoneFrame" style="position: fixed;overflow:visible; z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
     <div style="height: 5vw;;"></div> 
       <img src="/images/quxiao.png" style="position: fixed;right: -3vw;top: -7%;transform: translate(10%, 10%);height: 10vw;width: 10vw;z-index: 99999999;"onclick="alertqx4()">     

     <!----> 
     <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;"> 
       防伪码设置 
     </div> 
     <div  style="height: 2.2vw;"></div> 
     
     <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;" >
     <input type="text" placeholder="设置1-6位英文或数字防伪码" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 12vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);">
     </div> 
   <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div>
<div style="height: 8vw;"></div>
<div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;">
  <div onclick="alertqx4()"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div>
      </div>
  <div style="height: 8vw;"></div>
   </div>
  </div>

<div id="validePhone11" style="display: none;">
<div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
<div class="phoneFrame" style="position: fixed; overflow:visible;z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);">
  <div style="height: 5vw;"></div> 
   <img src="/images/quxiao.png" style="position: fixed;right: -3vw;top:-7%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx5()">             
  <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					密钥设置
				</div> 
  <div style="height: 8vw;"></div> 
  <div style="position: relative; height: 15vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); background-color: white;">
    <input type="text" placeholder="设置6-18位英文或数字密钥" style="padding: 0px 12px; position: absolute; top: 1vw; left: 9vw; width: 72vw; height: 12vw; line-height: 6.5vw; border: 1px solid rgb(240, 240, 240); border-radius: 0.5vh; font-size: 4vw; -webkit-appearance: none; background-color: rgb(240, 240, 240);"></div> 
  <div style="height: 4vw; line-height: 4vw; color: red; font-size: 3.5vw; text-align: left; margin-left: 10vw;">
					
				</div>
   <div style="height: 8vw;"></div>
   <div onclick="alertqx5()"style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"><div style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div></div> 
 <div style="height: 8vw;"></div> 
  </div> 
  </div> 
<div id="validePhone8" style="display: none;">
  <div class="phoneMask" style="position: fixed; z-index: 98; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.498039);"></div>
<div class="phoneFrame" style="position: fixed; overflow:visible;z-index: 99; width: 90vw; max-width: 90vw; top: 50%; left: 50%; transform: translate(-50%, -60%); text-align: center; border-radius: 8px; opacity: 1; color: white; background-color: rgb(255, 255, 255);"><div style="height: 5vw;"></div> <div style="padding: 1vw; font-size: 5vw; line-height: 5vw; word-wrap: break-word; word-break: break-all; color: rgb(0, 0, 0); background-color: white;">
					切换账号
				</div> <!----> 
  <div style="height: 5vw;"></div> 
   <img src="/images/quxiao.png" style="position: fixed;right: -3vw;top:-5%;transform: translate(10%, 10%);height: 10vw;width: 10vw; z-index: 99999999;"onclick="alertqx6()">    
<img  src="<?php echo ($user["img"]); ?>" style="position: fixed;left: 6vw;top:19%;transform: translate(10%, 10%);height: 12vw;width: 12vw; z-index: 99999999;" > 
      <div style="position: fixed;width:208px;white-space:nowrap;overflow:hidden;text-overflow:clip; left: 20vw;top:21%;height: 10.5vw; line-height: 10.5vw; font-size: 13pt; color: #060408;z-index: 99999999;" ><?php echo ($user["nickname"]); ?>ID:<?php echo ($user["id"]); ?></div> 
   <img src="/images/gou43.png" style="position: fixed;right: 11vw;top:23%;transform: translate(10%, 10%);height: 5.5vw;width: 5.5vw; z-index: 99999999;">    
  <div style="position: relative; left: 5vw; width: 80vw; height: 50vw; border-radius: 4px; overflow: scroll; background-color: rgb(240, 240, 240);"></div> 
  <div style="height: 8vw;"></div> <div style="position: relative; left: 9vw; width: 72vw; line-height: 11vw; font-size: 4vw; display: flex; border-radius: 2vw;"> 
  <div onclick="location.href='<?php echo U('portal/user/index');?>'"style="display: block; -webkit-box-flex: 1; flex: 1 1 0%; text-decoration: none; -webkit-tap-highlight-color: transparent; position: relative; margin-bottom: 0px; color: rgb(255, 255, 255); border-width: 0px; border-top-style: solid; border-color: rgb(230, 230, 230); border-radius: 1vw; background-color: rgb(64, 112, 251);">确认</div></div>
  <div style="height: 8vw;"></div> 
  </div>
</div>
<!-- 更新头像 -->
   <div id="valert1" class="alert" style="display: none">
<div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText">
是否确定更新头像?
    </if>
     
    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx1()">
      取消
     </div> 
        <div class="buttonRight"onclick="location.href='<?php echo U('portal/user/index');?>'">
      确定
   </div>
       </div>
  </div>
  
  </div>

  <!-- 退出登录 -->
   <div id="tuichu" class="alert" style="display: none">
<div class="alertBack"></div> 
   <div class="mainPart">
    <div class="backImg">
     <div class="blackImg"></div>
    </div> 
    <div class="alertText">
是否确定退出登录?
      </if>
     
    </div> 
 
    <div style="">
     <div class="buttonLeft" onclick="alertqx2()">
      取消
     </div> 
        <div class="buttonRight" onclick="location.href='/denglu'">
    </if>
      确定
   </div>
  </div>
        </div>



  </body>
 <script> 
var mySwiper = new Swiper('.swiper-container', {
  slidesPerView : 5,
  freeMode : true
})
</script>
</html>