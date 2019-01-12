function adduser(data){
        if(1!=isinitok)return setTimeout(function(){adduser(data)},50);

        if(typeof(data.user.id) == undefined || data.user.id == null || data.user.id == "" || data.user.id == "null"){
            return;
        }

        if($("#user" + data.user.id).length>0){
            $("#user" + data.user.id).remove();
        }

        var indexuser=data.user.index-index- -1;
        if(indexuser<=0){
            indexuser=indexuser-(-9);
        }
        console.log(index + " -- " + indexuser);
        if($('#user'+data.user.id+' .quitBack').length>0){
            $('#user'+data.user.id+' .quitBack').hide();

            if(data.user.is_watch){
                $("#user" + data.user.id + " .watchingText").show();
            } else {
                $("#user" + data.user.id + " .watchingText").hide();
            }
        }
        else{
            if("-1"==data.user.online)var onlinezt="display:block";else onlinezt="display:none";if(1==indexuser || is_watch)var actxx="onclick=\"send('zhunbei',{})\"";else actxx='style="display:none"';console.log(data.user);var html='<div class="member member'+indexuser+'" id="user'+data.user.id+'">';html+='<img src="/app/img/player.png" class="background" /> ',html+='<img src="/app/img/playerWin.png" class="background" style="display: none;" /> ',html+='<div class="title">'+data.user.nickname+"</div> ",html+='<div class="avatar">',html+='<img src="'+data.user.img+'" style="position: absolute; left: 25%; width: 100%; border-radius: 3px;" /> ',html+='<img src="/app/img/avatar_timer.jpg" style="position: absolute; left: 25%; width: 100%; border-radius: 3px; display: none;" /> ',html+='<div style="position: absolute; top: 0px; left: 25%; width: 100%; line-height: 42px; text-align: center; color: rgb(96, 38, 3); font-size: 20px; display: none;"> 0</div>',html+='</div> <div class="score">'+data.user.dqjf+"</div>",html+='<div class="quitBack" style="'+onlinezt+'"></div>',html+='<div class="isReady">',html+='<div class="unready" '+actxx+' style="display: none;">',html+='<img src="/app/lige/jhzb.png" style="width: 90%;" />',html+='<div class="innerText" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;line-height: 9vw;font-size: 4.5vw;text-align: center;color:#fff;font-weight: bold;"></div>',html+="</div>",html+='<img src="/app/img/ready.png" class="ready" style="display: none;" />',html+="</div>",1!=indexuser&&(html+='<div class="cardOver cardOver'+indexuser+'" style="display: none;">',html+='<img src="/app/img/cardBox.png" class="cardResult" />',html+='<div class="name">'+data.user.nickname+"</div> ",html+='<div class="openCard">',html+='<div class="cards card0">',html+='<div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div>",html+=' <div class="cards card1">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",html+=' <div class="cards card2">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",html+="</div>",html+='<div class="winText" style="display: none;">',html+=' <div class="winType winType0"></div> ',html+=' <div class="winScore winType0">',html+="  +</div></div></div>"),html+='<div class="PKbox" style="display: none;">',html+='<div class="PKboxBack"></div>',html+="</div>",html+='<img class="watchingText" src="http://goss.fexteam.com/files/images/h5watch/watching.png" style="position: absolute; z-index: 999999999; left: 12%; width: 80%; margin-top: 20%; display: none;"></div>',$("#member").append(html);


            1==data.user.zt&&0==data.zt?$(".member"+indexuser+" .ready").show():0==data.user.zt&&0==data.zt&&1==indexuser&&$(".member"+indexuser+" .unready").show(),1==data.user.tpzt&&havelook(data.user),2==data.user.zt&&havelose(data.user),3==data.user.zt&&havequit(data.user);



            if(data.user.is_watch){
                $("#user" + data.user.id + " .watchingText").show();
            }
            
            if(indexuser == 1 && is_watch){
              $("#user" + data.user.id + " .unready").hide();


              $("#user" + data.user.id + " .winType").css("top", "-10px");
              $("#user" + data.user.id + " .winType").css("left", "30px");

              $("#user" + data.user.id + " .winScore").css("top", "-20px");
            }

            if(data.user.zt == 1){
              $("#user" + data.user.id + " .isReady").show();
              $("#user" + data.user.id + " .unready").hide();
              $("#user" + data.user.id + " .ready").show();
            }

        }
    }

    function zbuser(data){var indexuser=data-index- -1;indexuser<=0&&(indexuser-=-9),$(".member"+indexuser+" .unready").hide(),$(".member"+indexuser+" .isReady").show(),$(".member"+indexuser+" .ready").show()}function removeuser(data){$("#user"+data+" .quitBack").show(),$("#user"+data+" .ready").hide()}function removeuser2(data){$("#user"+data).remove()}function userdjs(data){clearTimeout(ji);var now=data.time-Math.ceil(new Date/1e3)-(0-timewc)-1;if(0<now){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9),$(".member"+indexuser+" .avatar img").eq(1).show(),$(".member"+indexuser+" .avatar div").html(now),$(".member"+indexuser+" .avatar div").show(),ji=setTimeout("userdjs("+JSON.stringify(data)+")",1e3)}else clearuserdjs()}function clearuserdjs(){clearTimeout(ji),$(".avatar").each(function(){$(this).find("img").eq(1).hide()}),$(".avatar div").hide()}

    function allfapai(data){$(".ready").hide(),$(".isReady").hide();for(var i=0;i<data.user.length;i++){var user=data.user[i],indexuser=user.index-index- -1,html="";for(indexuser<=0&&(indexuser-=-9),j=1;j<4;j++)html=data.card?6<=indexuser?html+'<div class="card cardall card'+indexuser+j+" card"+data.card[user.id][j-1].card+" zhajinhua-index"+(4-j)+'"  style="display:none" ></div>':html+'<div class="card cardall card'+indexuser+j+" card"+data.card[user.id][j-1].card+" zhajinhua-index"+j+'"  style="display:none" ></div>':html+'<div class="card card'+indexuser+j+"  zhajinhua-index"+j+'"  style="display:none" ></div>';$("#userfp").append(html)}setTimeout(function(){$("#userfp .zhajinhua-index1").show()},1e3),setTimeout(function(){$("#userfp .zhajinhua-index2").show()},800),setTimeout(function(){$("#userfp .zhajinhua-index3").show()},600),setTimeout(function(){$(".place").show(),$(".scoresArea").show(),$(".myCards").show()},1e3)}

    function havelook(data){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9);var html='<div class="isSeen isSeen'+indexuser+'" style="z-index: 100;"></div> ';$("#userfp").append(html)}function havelose(data){var indexuser=data.index-index- -1;if(indexuser<=0&&(indexuser-=-9),1==indexuser){hidebook(),$("#member .member1 .quitBack").show(),$(".myCards .isLose").show(),$(".myQuitBack").show();for(var i=0;i<3;i++)$(".cardDeal .card1"+(i- -1)).hide(),$(".myCards .card"+i).show()}else{var html='<div class="isLose isLose'+indexuser+'" style="z-index: 100;" ></div> ';$("#userfp").append(html)}}function havequit(data){var indexuser=data.index-index- -1;if(indexuser<=0&&(indexuser-=-9),1==indexuser){hidebook(),$("#member .member1 .quitBack").show(),$(".myCards .isQuit").show(),$(".myQuitBack").show();for(var i=0;i<3;i++)$(".cardDeal .card1"+(i- -1)).hide(),$(".myCards .card"+i).show()}else{var html='<div class="isQuit isQuit'+indexuser+'"  style="z-index: 100;"></div> ';$("#userfp").append(html)}}function bipai(data){if($("#Buttons").hide(),1<data.user.length){$(".pkBackground").show();for(var i=0;i<data.user.length;i++){var user=data.user[i],indexuser=user.index-index- -1;indexuser<=0&&(indexuser-=-9),$(" #member .member"+indexuser+" .PKbox").show(),$(" #member .member"+indexuser+" .PKbox").attr("onclick","send('bipai',{uid:"+user.id+",time:"+data.time+"})")}}else send("bipai",{uid:data.user[0].id,time:data.time})}function qxbp(){$(" #member .PKbox").attr("onclick",""),$("#Buttons").show(),$(".pkBackground").hide(),$(".PKbox").hide(),$(".playerPK").hide()}function startPk(data){mp3play("shandian"),$(".playerPK .pkLoser").hide(),$(".playerPK .pk1 .title").html(data.user[0].nickname),$(".playerPK .pk1 .avatar").attr("src",data.user[0].img),$(".playerPK .pk1 .score").html(data.user[0].dqjf),$(".playerPK .pk2 .title").html(data.user[1].nickname),$(".playerPK .pk2 .avatar").attr("src",data.user[1].img),$(".playerPK .pk2 .score").html(data.user[1].dqjf),$(".playerPK").show(),setTimeout(function(){data.user[0].index==data.lose?$(".playerPK .pk1 .pkLoser").show():$(".playerPK .pk2 .pkLoser").show(),havelose({index:data.lose})},1e3)}function fapai(data){for(var i=0;i<data.card.length;i++){var card=data.card[i];$(".myCards .card"+i+"  .back").removeClass("cardundefined").addClass("card"+card.card),showmycard(i)}}function otherpai(data){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9),$(".cardOver"+indexuser).show(),$("#member .member"+indexuser+" .openCard").show(),console.log(data.card);for(var i=0;i<data.card.length;i++){var card=data.card[i];$("#member .member"+indexuser+" .card"+i+"  .back").removeClass("cardundefined").addClass("card"+card.card),$("#member .member"+indexuser+" .card"+i).addClass("card-flipped")}}function showmycard(id){$(".cardDeal .card1"+(id- -1)).hide(),$(".myCards .card"+id).show(),$(".myCards .card"+id).addClass("card-flipped")}function showbook(){$("#looking").show(),$("#looking").attr("onclick",'send("looking",{})')}function hidebook(){$("#looking").hide(),$("#looking").attr("onclick","")}

  function scoresArea(data){$(".scoresArea").attr("style", "");var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9);var total=$(".totalScore .scores").html(),jf=$("#member .member"+indexuser+" .score").html();$("#member .member"+indexuser+" .score").html(jf-data.jf),$(".totalScore .scores").html(total-(0-data.jf)),$(".scoresArea").append("<div class='coin  coin"+indexuser+" coinType"+data.jf+" style='top:"+112*Math.random()+"px;left:"+112*Math.random()+"px;' ></div>"),$(".coin"+indexuser).animate({top:82*Math.random(),left:82*Math.random()},300),$(".coin").removeClass("coin"+indexuser)}function recm(data){for(var total=0,i=0;i<data.cm.length;i++)total-=0-data.cm[i],$(".scoresArea").append("<div class='coin  coinType"+data.cm[i]+"' style='top:"+112*Math.random()+"px;left:"+112*Math.random()+"px;' ></div>");$(".totalScore .scores").html(total)}

// 收筹码
function shou(data){
    var indexuser=data.index-index-(-1);
    if(indexuser<=0){
         indexuser=indexuser-(-9);
    }

    $('.totalScore .scores').html(data.total);
    
    var total=$('.totalScore .scores').html();
    var jf=$('#member .member'+indexuser+' .score').html();
    $('#userfp').html('');

    if(indexuser==1){
      if(is_watch){

        $('.winScore').html('+'+total);
        $('.winScore').show();
        $('#member .member'+indexuser+' .background').eq(1).show();

        $('.cardOver'+indexuser+' .cardResult').attr('src','/app/img/cardBoxWin.png');
        $('.cardOver'+indexuser+' .winText').html('<div class="winType winType'+data.type+'"></div> <div class="winScore winType'+data.type+'">+'+total+'</div>');
        $('.cardOver'+indexuser+' .winText').show();
      } else {
        $('.myCards .winText').show();
        $('.winScore').html('+'+total);
        $('.winScore').show();
        $('#member .member'+indexuser+' .background').eq(1).show();
      }
    }
    else{
      $('.cardOver'+indexuser+' .cardResult').attr('src','/app/img/cardBoxWin.png');
      $('.cardOver'+indexuser+' .winText').html('<div class="winType winType'+data.type+'"></div> <div class="winScore winType'+data.type+'">+'+total+'</div>');
      $('.cardOver'+indexuser+' .winText').show();
    }

    $('#member .member'+indexuser+' .score').html(jf-(0-total));
    $('.totalScore .scores').html(0);


    var top =   ['78','46' ,'33' ,'20','7','7','20','33','46'];
    var right = ['0' ,'-75','-75','-75' ,'-50','0','0','0','0'];
    var left =  ['0' ,'0'  ,'0'  ,'0' ,'0','-50','-75','-75','-75'];


    $('.scoresArea').children().animate({
        left:50+'%',
        top:50+'%'
    },500);

    $('.scoresArea').animate({
        top: top[indexuser-1]+'%',
        right:right[indexuser-1]+'%',
        left:left[indexuser-1]+'%',
    },1000);

    setTimeout(function (){
        $(".scoresArea").empty();
    },800);
  if(indexuser==1){
    mp3play('winmp3');
  }
  else{
    // mp3play('losemp3');
  }
}


  function operationButton(data){"8"==data&&($(".isReady").show(),$(".member1 .unready").show()),$("#operationButton").html(""),$("#operationButton").html("")}

  function initroom(){$(".scoresArea").empty(),$(".scoresArea").attr("style",""),$(".openCard").hide(),$(".cardOver").hide(),$("#CardType").html(""),$(".winText").hide(),$(".cardResult").attr("src","/app/img/cardBox.png"),$("#member .member").each(function(){$(this).find(".background").eq(1).hide()}),$("#member .member1 .quitBack").hide();var html='<div class="winText" style="display: none;">';html+='<img src="/app/img/winner.png" /> ',html+='<div class="winScore" style="width: 100%; left: 0px; text-align: center; font-size: 16px; display: none;">',html+="+</div></div> ",html+='<div class="cards card0" style="display: none;">',html+='<div class="face front"></div> ',html+='<div class="face back cardundefined"></div> ',html+='<div class="myQuitBack" style="display: none;"></div>',html+="</div> ",html+='<div class="cards card1" style="display: none;">',html+='<div class="face front"></div> ',html+='<div class="face back cardundefined"></div> ',html+='<div class="myQuitBack" style="display: none;"></div>',html+="</div> ",html+='<div class="cards card2" style="display: none;">',html+='<div class="face front"></div> ',html+='<div class="face back cardundefined"></div> ',html+='<div class="myQuitBack" style="display: none;"></div>',html+="</div> ",html+='<div style="width: 70px; height: 20px; position: absolute; top: 17px; left: 50%; margin-left: -40px; z-index: 95; text-align: center; color: rgb(255, 255, 255); font-size: 15px; padding: 1px 5px; display: none;" id="looking">',html+='<img src="/app/img/lookcard.png" style="width: 70px; height: 20px;" />',html+="</div> ",html+='<div class="isQuit isQuit1" style="display: none;"></div> ',html+='<div class="isLose isLose1" style="display: none;"></div>',html+='<div class="isLose isLose1" style="display: none;"></div>',$(".myCards").html(html);html="";html+='<div class="cards card0">',html+='<div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div>",html+=' <div class="cards card1">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",html+=' <div class="cards card2">',html+='  <div class="face front"></div> ',html+='  <div class="face back cardundefined"></div>',html+=" </div> ",$("#member .openCard").html(html),$(".myCards").hide(),$(".place").hide(),$(".scoresArea").hide(),$("#totalScore").html(0),$(".member1 .unready").show();

      if(is_watch){
        $(".isReady").hide();
      } else {
        $(".isReady").show()
      }
}


  function overroom(data){overzt=0,$("#table").hide();var c=document.getElementById("myCanvas"),ctx=c.getContext("2d"),img=new Image,img1=new Image;new Image;img.src="/app/bgf9.png",img1.src="/app/dyj.png";var sj=data;img.onload=function(){console.log(sj),ctx.drawImage(img,0,0,800,1297),ctx.drawImage(img1,142,370,43,54);var time1=sj.time.substring(0,sj.time.length-3);ctx.font="22px bold songti",ctx.fillStyle="#ebd76e",ctx.fillText("房间号:"+sj.id,178,284),ctx.fillText(time1,361,284),ctx.fillText(sj.zjs+"局",575,284),ctx.font="31px bolder songti",ctx.fillStyle="#d8cb66";var writeContent="房主 ："+fangzhu.nickname,writeLeft=(c.width-ctx.measureText(writeContent).width)/2;ctx.fillText(writeContent,writeLeft,345);

    var i = 0;
    for(var tempIndex=0;tempIndex<sj.user.length;tempIndex++){

      if(sj.user[tempIndex] == null || typeof(sj.user[tempIndex].id) == undefined || sj.user[tempIndex].id == null){
        continue;
      }

      1<i&&(ctx.fillStyle="#0da9c5",ctx.fillRect(142,505-(0-69*(i-2)),517,65));var user=sj.user[tempIndex];ctx.font="31px bolder songti",ctx.fillStyle="#d8cb66",ctx.fillText(user.nickname.substring(0,10),225,417+65*i),0<user.dqjf?user.dqjf="+"+user.dqjf:(ctx.fillStyle="#fff",ctx.fillText(user.nickname.substring(0,10),225,417+65*i),ctx.fillText(user.dqjf,530,417-(0-65*i))),ctx.fillText(user.dqjf,530,417-(0-65*i)); i++;}var dataURL=c.toDataURL();$("#overtime").html('<div onclick="location.href=\'/portal/user/index.html\'" style="z-index: 9999;position: absolute;width: 28%;height: 6%;bottom: 8%;right: 15%;" ></div><div style="background: #000;width: 100%;height: 100%;position: absolute;z-index: 200;""></div> <img src="'+dataURL+'" style="width: 100%;height:100%;position: absolute;z-index: 201;">'),$("#overtime").show()}}function msgshow(data){var indexuser=data.index-index- -1;indexuser<=0&&(indexuser-=-9);var html='<div class="messageSay messageSay'+indexuser+'" ><div>'+data.msg+'</div> <div class="triangle"></div></div>';$("#messageSay").append(html),mp3play(data.mp3),setTimeout(function(){console.log(indexuser),$(".messageSay"+indexuser).remove()},1500)}function updatescore(data){$("#user"+data.id+" .score").html(data.score)}function joingame(){1!=isinitok&&joinroom(),removejoinalert(),send("joingame")}function joinwatch(){1!=isinitok&&joinroom(),removejoinalert(),send("joinwatch")}function watch(){$("#watch-game").show(); is_watch = true;}function tojoin(){$("#watch-list").hide(),$("#watch-game").hide()}function watchlist(data){var html="";for(var k in data.data)html+='<div class="playerItem">\n                    <img src="'+data.data[k].img+'" class="playerAvatar" />\n                    <div class="playerName">'+data.data[k].nickname+'</div>\n                    <img src="/app/bscore/icon.png" class="playerIcon" />\n                </div>';$("#watch-list .playerList").html(html),1==data.is_start?($("#watch-list .joimwatch").hide(),$("#watch-list .joingame").hide()):1==data.is_watch?($("#watch-list .joimwatch").hide(),$("#watch-list .joingame").show()):0==data.is_watch&&($("#watch-list .joimwatch").show(),$("#watch-list .joingame").hide())}


// 从游戏中，切换为“观战中”
function removeuserByWatch(data) {
  $("#user" + data + " .watchingText").show();
  $("#user" + data + " .quitBack").hide();
  $("#user" + data + " .isReady").hide();
}

// 更新用户的信息
function userUpdate(data) {
  console.log(data);
  if(data.is_start == 0){
      $("#watch-list .joinwatch").show();
  } else {
      $("#watch-list .joinwatch").hide();
  }

  is_watch = data.is_watch;

  if(data.is_watch){ 
      $("#watch-list .joingame").show();
      $(".isReady").hide();
  }else{
      $("#watch-list .joingame").hide();
  }

}

    
 function lookmsg()
    {
     $("#nousermessage").hide();   
    $("#usermessage").show();
     
    } 
 
 function hidemsg()
    {
     //document.getElementById("button1").disabled=true; 
    $("#usermessage").hide();
    $("#nousermessage").show();  
    }
    
function pullhum() {
  $("#watch-list .joinwatch").hide(),
  $("#watch-list .joingame").hide(),
  $("#watch-list .joingamefalse").show()
} 
function pullwatchhum() {
  $("#watch-list .joinwatch").hide(),
  $("#watch-list .joingame").hide(),
  $("#watch-list .joinwatchfalse").show()
}