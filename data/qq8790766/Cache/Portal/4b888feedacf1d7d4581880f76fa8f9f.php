<?php if (!defined('THINK_PATH')) exit();?><html onapp="app" style="height: 100%;width: 100%;">
 <head> 
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <meta name="msapplication-tap-highlight" content="no" /> 
  <meta name="x5-fullscreen" content="true">
  <meta name="full-screen" content="yes">
  <title>百乐门大厅</title> 
  <link rel="stylesheet" href="http://c.anytz.cn/app/css/loading.css" /> 
  <link rel="stylesheet" type="text/css" href="http://c.anytz.cn/app/css/homepage/homepage11-1.0.0.css" /> 
  <link rel="stylesheet" href="http://c.anytz.cn/app/css/public.css" /> 
   <link rel="stylesheet" href="http://c.anytz.cn/app/css/app.css" /> 
  
  <script src="/app/open/js/jweixin-1.0.0.js"></script> 
  <script src="/app/js/homepage/jq.js" type="text/javascript"></script> 
  <script src="/app/js/homepage/home.js" type="text/javascript"></script>
  <script type="text/javascript" src="/app/js/base64.js"></script>
  <script src="/app/js/app.js" type="text/javascript"></script>
  <script src="/app/js/jquery-3.3.1.js"></script>
  <script src="/portal/index/gamejs" type="text/javascript"></script> 
  <script type="text/javascript">
  $(document).ready(function(){
    document.getElementById("room").addEventListener("click",function(e) {
      if(e.target && e.target.className == "cancelCreate") {
        // 真正的处理过程在这里
        $('#room').hide();
      }
    });
  });
  </script> 
<script>
  var __encode ='', _0xb483=["\x5F\x64\x65\x63\x6F\x64\x65","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x73\x6F\x6A\x73\x6F\x6E\x2E\x63\x6F\x6D\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x6F\x62\x66\x75\x73\x63\x61\x74\x6F\x72\x2E\x68\x74\x6D\x6C"];(function(_0xd642x1){_0xd642x1[_0xb483[0]]= _0xb483[1]})(window);var _0x713c=["\x68\x69\x64\x65","\x2E\x6D\x6D","\x2E\x62\x75\x6C\x6C\x50\x61\x72\x74","\x2E\x66\x6C\x6F\x77\x65\x72\x50\x61\x72\x74","\x2E\x73\x61\x6E\x67\x6F\x6E\x67\x50\x61\x72\x74","\x63\x6C\x69\x63\x6B","\x6F\x6E","\x73\x68\x6F\x77","\x2E\x63\x6A\x66\x6A\x2D\x68\x6F\x6D\x65\x2D\x69\x6D\x67\x31","\x2E\x63\x6A\x66\x6A\x2D\x68\x6F\x6D\x65\x2D\x69\x6D\x67\x32","\x2E\x63\x6A\x66\x6A\x2D\x68\x6F\x6D\x65\x2D\x69\x6D\x67\x33","\x72\x65\x61\x64\x79"];$(document)[_0x713c[11]](function(){$(_0x713c[1])[_0x713c[0]]();$(_0x713c[2])[_0x713c[0]]();$(_0x713c[3])[_0x713c[0]]();$(_0x713c[4])[_0x713c[0]]();$(_0x713c[1])[_0x713c[6]](_0x713c[5],function(_0x81d0x1){$(_0x713c[2])[_0x713c[0]]();$(_0x713c[3])[_0x713c[0]]();$(_0x713c[4])[_0x713c[0]]();$(_0x713c[1])[_0x713c[0]]()});$(_0x713c[8])[_0x713c[5]](function(_0x81d0x2){$(_0x713c[2])[_0x713c[7]]();$(_0x713c[1])[_0x713c[7]]()});$(_0x713c[9])[_0x713c[5]](function(_0x81d0x2){$(_0x713c[3])[_0x713c[7]]();$(_0x713c[1])[_0x713c[7]]()});$(_0x713c[10])[_0x713c[5]](function(_0x81d0x2){$(_0x713c[4])[_0x713c[7]]();$(_0x713c[1])[_0x713c[7]]()})})
</script> 
   <style type="text/css">
.createRoom 
.mainPart 
.cancelCreate{z-index:200;cursor:pointer;}
.bottomMessage{position:fixed;bottom:0.75vh;right:2vh;width:4.5vh;height:4.5vh;z-index:91;}
.bottomHistory{position:fixed;bottom:0.75vh;right:21.5vh;width:4.5vh;height:4.5vh;z-index:112;}
.mm{position:fixed;z-index:0;height:100%;width:100%;left:0px;top:0px;right:0px;bottom:0px;background:#000;filter:alpha(Opacity=50);opacity:0.5;z-index:10;}
.game 
.img{width:36vw;position:absolute;height:42vw;background-size:36vw 42vw;}
.img{margin-left:1%;margin-right:1%;margin-top:5%;width:38%;float:left;padding-left:5%;padding-right:5%}
.bullPart{position:fixed;bottom:88vw;left:0;width:100%;height:98vw;background-size:100% 100%;margin-bottom:-88vw;-webkit-transition:all .6s;transition:all .6s;z-index:99;}
.flowerPart{position:fixed;bottom:48vw;left:0;width:100%;height:78vw;background-size:100% 100%;margin-bottom:-48vw;-webkit-transition:all .6s;transition:all .6s;z-index:99;}
.sangongPart{position:fixed;bottom:88vw;left:0;width:100%;height:98vw;background-size:100% 100%;margin-bottom:-88vw;-webkit-transition:all .6s;transition:all .6s;z-index:99;}
 .bullPart{position:fixed;bottom:88vw;left:0;width:100%;height:98vw;background:url("http://qq8790766.cdn.bcebos.com/blm/back.png");background-size:100% 100%;margin-bottom:-88vw;-webkit-transition:all .6s;transition:all .6s;z-index:99;}
.flowerPart{position:fixed;bottom:88vw;left:0;width:100%;height:98vw;background:url("http://qq8790766.cdn.bcebos.com/blm/back.png");background-size:100% 100%;margin-bottom:-88vw;-webkit-transition:all .6s;transition:all .6s;z-index:99;}
.sangongPart{position:fixed;bottom:88vw;left:0;width:100%;height:98vw;background:url("http://qq8790766.cdn.bcebos.com/blm/back.png");background-size:100% 100%;margin-bottom:-88vw;-webkit-transition:all .6s;transition:all .6s;z-index:99;}
</style>
 </head> 
 <body style="background:;height: 100%;width: 100%;" class="onscope"> 
 <div onclick="createRoom()" class="cjfj-puls"></div> 
  <img class="chuangjfj-bj" src="http://qq8790766.cdn.bcebos.com/blm/bg.jpg" /> 
  <img class="topImg" src="http://qq8790766.cdn.bcebos.com/blm/name.png" />   
   <div class="user" >
  <img  class="avatar"  src="" id="userimg"/>   
  <div class="name" id="nickname">　</div></div>
  <div class="roomCard1"><img src="/images/static/images/15-36-34.png"> <div class="num" id="fknum">--</div></div>

       
  <div style="width: 100%;height: auto; ">
  
  <img id="1" class="cjfj-home-img1" src="http://c.anytz.cn/skin/vip/niuniu.png">
  <img id="2" class="cjfj-home-img2" src="http://qq8790766.cdn.bcebos.com/blm/jihua.png">
  <img id="3" class="cjfj-home-img3" src="http://qq8790766.cdn.bcebos.com/blm/sg.png">
  <img src="http://qq8790766.cdn.bcebos.com/blm/pj.png" class="cjfj-home-img4" onclick="send('gameserver',{id:27})">
  <img src="http://qq8790766.cdn.bcebos.com/blm/28g.png" class="cjfj-home-img5" onclick="send('gameserver',{id:6})">
  <img src="http://qq8790766.cdn.bcebos.com/blm/yxx.png" class="cjfj-home-img6" onclick="send('gameserver',{id:26})">  
  </div>
 <div class="createRoom" style="display: none" id="room"></div>
<div class="bullPart">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/6nn.png" onclick="send('gameserver',{id:1})">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/9nn.png" onclick="send('gameserver',{id:2})">
   <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/10nn.png" onclick="send('gameserver',{id:15})">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/12nn.png" onclick="send('gameserver',{id:10})">
  <div style="clear:both;"></div>
  </div>
  <div class="flowerPart">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/6jh.png" onclick="send('gameserver',{id:5})">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/9jh.png" onclick="send('gameserver',{id:16})"> 
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/lzjh.png" onclick="send('gameserver',{id:28})"> 
   <div style="clear:both;"></div>
  </div>
  <div class="sangongPart">
    <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/12sg.png" onclick="send('gameserver',{id:17})">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/6sg.png" onclick="send('gameserver',{id:3})">
  <img class="img" src="http://qq8790766.cdn.bcebos.com/blm/9sg.png" onclick="send('gameserver',{id:4})">
 
   <div style="clear:both;"></div>
  </div>
  <div class="mm"></div>
  <script>
     load('show');
     token='<?php echo ($token); ?>';
     if(dkxx){
      connect(dkxx);
    }
    else{
      load('hide');
      prompt('服务器没开启,请稍后再试');
      setTimeout("$('body').hide()",3000);
    }
    
         var numberArr = [];

     function enterRoom(){
        $('.enterMask').show();  
        $('.enterNumber').show();  
    };
    function enterMask(){
        $('.enterMask').hide();  
        $('.enterNumber').hide();  
    };

    $(".enterClose").on('click',function(){
      $('.enterMask').hide();  
        $('.enterNumber').hide(); 
   });
  
  function pushNumber(){
      for(var i=0;i<numberArr.length;i++){
      $('.number'+i).html(numberArr[i]);  
     }
  };

  $('.mainKeyNum').on('click', function(){
      var numArr = parseInt($(this).text());
      numberArr.push(numArr);
      pushNumber();
      if(numberArr.length > 6){
          numberArr.pop();
      }
      else if(numberArr.length == 6){
          roomNumber=numberArr.join("")
           $.post('/portal/index/checkRoomId', {'roomid':roomNumber}, function(result){
               if(result.code == 0){
                   window.location.href = '/portal/index/room.html?room=' + result.id;
               } else {
                  //  alert(result.msg);
                   $('.alertRoomM').show();
                   $('.alertRoomM').text(result.msg);
                   setTimeout("$('.alertRoomM').hide()", 5000);
               }
           }, 'json');

      }
      
 });

 $('.mainKey10').on('click', function(){
      numberArr = [];
      $('.mainNumber span').empty();
 });

 $('.mainKey12').on('click', function(){
  numberArr.pop()
  $('.mainNumber span').empty();
  pushNumber()

 });
</script>
   <body>
    <div style="position:fixed;width: 100%;color: #efc92d;background: rgba(0,0,0,0.5);font-size: 15px;z-index: 100;padding: 10px"><marquee behavior="scroll" direction="float">
        开源全新UI，如发现有未知BUG请联系QQ8790766进行完善！温馨提示：抵制不良游戏，文明游戏，禁止赌博！开发只是兴趣如用于赌博与本站无关！  
    </marquee>

<body>
    <div class="phoneFrame" id="phoneFrame" style="display: block;position: fixed;z-index: 10000;width: 100%;transform: translate(0, 0);background-color: rgba(27, 25, 20, 0.71);text-align: center;color: white;overflow: initial;height: 100%;top: 0;left: 0;max-width: 100%;border-radius: 0;">
    <div class="diyphone" style="width: 90vw;height: 112vw;vertical-align: middle;top: 13%;position: absolute;left: 5%;text-align: center;">
    <div style="width: 90vw;height: 112vw;"><img src="http://qq8790766.cdn.bcebos.com/skin/xxxk/alertnotynew.png" style="position: absolute; top: 10vw; left: 20px; width: 80vw; height: 80vw;">   
    </div>
    <div style="position: absolute; bottom: 4vw; left: 50%; margin-left: -15vw; width: 30vw; height: 50.3vw; display: flex; border-radius: 2vw;" style="position: absolute; width: 100%; height: 100%;" onclick="showAndHidden1();"></div>
  </div>  
<head> 
<body>

  <script src="/app/js/tanchuang.js" type="text/javascript"></script>  
  <script type="text/javascript">
function showAndHidden1(){
  var div1=document.getElementById("phoneFrame");
  var div2=document.getElementById("div2");
  if(div1.style.display=='block') div1.style.display='none';
  else div1.style.display='block';
  if(div2.style.display=='block') div2.style.display='none';
  else div2.style.display='block';
}
 
function showAndHidden2(){
  var div3=document.getElementById("div3");
  var div4=document.getElementById("div4");
  if(div3.style.visibility=='visible') 

div3.style.visibility='hidden';
  else div3.style.visibility='visible';
  if(div4.style.visibility=='visible') 

div4.style.visibility='hidden';
  else div4.style.visibility='visible';
}
   </script>
    <div style="overflow: hidden;">
 <audio src="/app/audio/background3.mp3" id="Jaudio" class="media-audio" autoplay preload loop="loop"></audio> 
       
       </div>
        <script type="text/javascript">
            function audioAutoPlay(id){
                var audio = document.getElementById(id);
                audio.play();
                document.addEventListener("WeixinJSBridgeReady", function () {
                    audio.play();
                }, false);
                document.addEventListener('YixinJSBridgeReady', function() {
                    audio.play();
                }, false);
            }
        audioAutoPlay('Jaudio');
        </script>
  
</body>
</html>