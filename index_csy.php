
<?php
	require_once "jssdk.php";
	// 添加appid,appsecret
	$jssdk = new JSSDK("wx2f8715c83674c1ab", "7dc63c3b3114fabc59d77b459b2c5c31");
	$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>game</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
</head>
<body>
	<div class="wrap">
		<div class="ani">
			<div class=" animated bounceIn"><img src="img/tiaozhan.png"></div>
			<div class=" animated swing"><img src="img/yinqu.png"></div>
			<div class=" animated pulse infinite beginG"><img src="img/start_game.png"></div>
			<div class=" animated fadeOut infinite"><img src="img/shou.png"></div>
		</div>
		<div class="nav">
			<div><img src="img/p1_btns_wrap.png"></div>
			<div class="div money1"><img src="img/ranking.png"></div>
			<div class="div"><img src="img/activity_rule.png"></div>
			<div class="div"><img src="img/prize.png"></div>
			<div class="div"><img src="img/shiyong.png"></div>
		</div>
		<div class="informationAll">
			<form class="information">
				<input type="text" name="name" placeholder="姓名" class="input">
				<input type="text" name="tel" placeholder="电话"
				class="input">
				<button type="button" name="" class="btn" value="" ></button>
			</form>
			<div class="close C">
				<img src="img/close.png "	>
			</div>
		</div>
		<div class="informationAll">
			<form class="ronkings">
				<div class="r">
					
				</div>
			</form>
			<div class="close">
				<img src="img/close.png ">
			</div>
		</div>
		<div class="informationAll">
			<div class="ronkings2">
				<p>活动规则</p>
				<p>
				1、每人有多次游戏机会，但成绩只能提交一次，且提交之后不能更改！<br/>
				2、提交成绩时要提供姓名及手机号码作为兑奖凭证，因用户本人未在规定时间内提供正确的手机号码造成的奖品损失，由用户个人承担。<br/>
				3、活动时间为2016年5月11日-5月19日24:00，活动结束后将在“雾灵山庄”微信公布中奖名单。<br/>
				4、获奖规则：系统将根据大家提交的成绩，按照由多到少的规则进行排行，排名第1的网友将获得一等奖，排名第2-第21位的网友将分获二等奖，以此类推。<br/>
				5、奖品的发放：活动结束后，将由工作人员与您取得联系，并将相应的卡券编号发送到您提供的手机号码上。<br/>
				</p>
			</div>
			<div class="close">
				<img src="img/close.png ">
			</div> 
		</div>
		<div class="informationAll">
			<div class="ronkings2 p ">
				<p>活动奖品</p>
				<p>一等奖1人：价值1488元7号楼1晚豪华标间免费房券1张，并可享康体项目3折优惠;</p>
					
				<p>二等奖20人：100元订房代金券每人1张，并可享康体项目4折优惠；</p>

				<p>三等奖50人：50元订房代金券每人1张，并可享康体项目5折优惠。</p>

				<p>奖品的有效期：2016年5月20日至6月15日（周五、周六及法定节假日不可用</p>
				
			</div>
			<div class="close">
				<img src="img/close.png ">
			</div> 
		</div>
		<div class="informationAll">
			<div class="ronkings2">
				<p>奖券使用说明</p>
				<p>
				1、奖品的使用：请务必至少提前一周致电010-81027788或81027799进行预约，并于入住时向前台服务人员出示您手机上收到的卡券编号即可使用（需同时验证获奖人姓名与手机号码）。<br/>
				2、代金券仅适用于线下门市价入住客房消费使用，不适用于通过携程或微信等其他线上渠道预定使用。<br/>
				3、免费房安排的房间将视当时酒店排房情况而定，如您所预约的时段预订已满，将与您协商调整入住时间。<br/>
				4、免费房券及代金券不得用于除订房外其他产品消费，不得与酒店其他优惠折扣或礼券同时使用，且不予退换、兑换现金或找赎。<br/>
				5、对于恶意刷奖者和作弊者，主办方有权取消其兑奖资格。<br/>
				</p>
			</div>
			<div class="close">
				<img src="img/close.png ">
			</div> 
		</div>
		<div class="mask"></div>
	</div>
	<div class="game">
		<div class="game1">
			<img src="img/p2_txt1.png">
		</div>
		<div class="time">
			<span>0</span>
			<span>0</span>
			<span>0</span>
			<span>60</span>
		</div>
		<div class="money">
			<img src="img/p2_qian.jpg">
		</div>
		<div class="scroll ">
			<img src="img/p2_shou.png">
		</div>
		<div class="footer">
			<img src="img/p2_zhuan.png">
		</div>
	</div>
	<div class="game_end">
		<p>恭喜您已获得</p>
		<p><span>￥</span><span class="nums">0</span></p>
		<p>没办法!你已经强到没有对手了</p>
		<p><span>我的辉煌战绩￥</span><span class="nums"></span><span>当前排名:</span><span>66位</span></p>
		<div class="sel">
			<img src="img/p3_again.png">
			<img src="img/p3_share_btn.png">
		</div>
		<div class="nav">
			<div><img src="img/p1_btns_wrap.png"></div>
			<div class="div money1"><img src="img/ranking.png"></div>
			<div class="div"><img src="img/activity_rule.png"></div>
			<div class="div"><img src="img/prize.png"></div>
			<div class="div"><img src="img/shiyong.png"></div>
		</div>
		<div class="informationAll">
			<form class="ronkings">
				<div class="r">
					
				</div>
				<!-- <div class="ranking">
					<img src="img/p1_first.png">
					<img src="img/shizhong.png">
					<span>聪明的小明</span>
					<span>800分</span>
				</div>
				<div class="ranking r2">
					<img src="img/p1_second.png">
					<img src="img/shizhong.png">
					<span>聪明的小明</span>
					<span>800分</span>
				</div>
				<div class="ranking r3">
					<img src="img/p1_third.png">
					<img src="img/shizhong.png">
					<span>聪明的小明</span>
					<span>800分</span>
				</div>
				<div class="ranking r3">
					<span class="span1">111</span>
					<img src="img/shizhong.png" class="img1">
					<span>聪明的小明</span>
					<span>800分</span>
				</div> -->
			</form>
			<div class="close">
				<img src="img/close.png ">
			</div>
		</div>
		<div class="informationAll">
			<div class="ronkings2">
				<p>活动规则</p>
				<p>
				1、每人有多次游戏机会，但成绩只能提交一次，且提交之后不能更改！<br/>
				2、提交成绩时要提供姓名及手机号码作为兑奖凭证，因用户本人未在规定时间内提供正确的手机号码造成的奖品损失，由用户个人承担。<br/>
				3、活动时间为2016年5月11日-5月19日24:00，活动结束后将在“雾灵山庄”微信公布中奖名单。<br/>
				4、获奖规则：系统将根据大家提交的成绩，按照由多到少的规则进行排行，排名第1的网友将获得一等奖，排名第2-第21位的网友将分获二等奖，以此类推。<br/>
				5、奖品的发放：活动结束后，将由工作人员与您取得联系，并将相应的卡券编号发送到您提供的手机号码上。<br/>
				</p>
			</div>
			<div class="close">
				<img src="img/close.png ">
			</div> 
		</div>
		<div class="informationAll">
			<div class="ronkings2 p ">
				<p>活动奖品</p>
				<p>一等奖1人：价值1488元7号楼1晚豪华标间免费房券1张，并可享康体项目3折优惠;</p>
					
				<p>二等奖20人：100元订房代金券每人1张，并可享康体项目4折优惠；</p>

				<p>三等奖50人：50元订房代金券每人1张，并可享康体项目5折优惠。</p>

				<p>奖品的有效期：2016年5月20日至6月15日（周五、周六及法定节假日不可用</p>
				
			</div>
			<div class="close">
				<img src="img/close.png ">
			</div> 
		</div>
		<div class="informationAll">
			<div class="ronkings2">
				<p>奖券使用说明</p>
				<p>
				1、奖品的使用：请务必至少提前一周致电010-81027788或81027799进行预约，并于入住时向前台服务人员出示您手机上收到的卡券编号即可使用（需同时验证获奖人姓名与手机号码）。<br/>
				2、代金券仅适用于线下门市价入住客房消费使用，不适用于通过携程或微信等其他线上渠道预定使用。<br/>
				3、免费房安排的房间将视当时酒店排房情况而定，如您所预约的时段预订已满，将与您协商调整入住时间。<br/>
				4、免费房券及代金券不得用于除订房外其他产品消费，不得与酒店其他优惠折扣或礼券同时使用，且不予退换、兑换现金或找赎。<br/>
				5、对于恶意刷奖者和作弊者，主办方有权取消其兑奖资格。<br/>
				</p>
			</div>
			<div class="close">
				<img src="img/close.png ">
			</div> 
		</div>
		<div class="share2">
			<img src="img/p3_share.png">
		</div>
		<div class="mask1"></div>
	</div>
	<div class="mask2"></div>
	<!-- 遮罩层 -->
	<div id="mask">
		<p>0%</p>
	</div>
</body>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
// 预加载
// 获取所有图片
imagesArr=["img/activity_rule.png","img/bg.jpg","img/bg2.png","img/close.png","img/p1_btns_wrap.png","img/p1_first.png","img/p1_from.png","img/p1_second.png","img/p1_sub.png","img/p1_third.png","img/p2_kuang.png","img/p2_qian.jpg","img/p2_scoring.png","img/p2_shou.png","img/p2_txt1.png","img/p2_txt2.png","img/p2_txt3.png","img/p2_zhuan.png","img/p3_acquire.png","img/p3_again.png","img/p3_bg.jpg","img/p3_share.png","img/p3_share_btn.png","img/prize.png","img/qian.png","img/ranking.png","img/ranking_bg.png","img/shiyong.png","img/shizhong.png","img/shou.png","img/start_game.png","img/tiaozhan.png","img/yinqu.png"];
// 用来表示已经加载了多少张图片
var num=0
// 百分比
var percent=0;
for(var i=0;i<imagesArr.length;i++){
	var img=new Image();
	img.src=imagesArr[i];
	img.onload=function(){
		num++;
		percent=parseInt((num/imagesArr.length)*100);
		$('#mask>p').text(percent+"%");
		// alert(percent+"%");
		if(num==imagesArr.length){
			$('#mask').css("display","none");
		}
	}
}

// 分享接口
wx.config({
    debug:false,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      'onMenuShareTimeline' ,//获取网络类型
      'onMenuShareAppMessage'//地理位置
    ]
  });
	wx.ready(function(){
		wx.onMenuShareTimeline({
			    title: '数钱游戏', // 分享标题
			    link: 'http://10.class3.applinzi.com/money3/index_csy.php', // 分享链接
			    imgUrl: 'http://10.class3.applinzi.com/money3/img/tiaozhan.png', // 分享图标
			    success: function () { 
			        // 用户确认分享后执行的回调函数
			    },
			    cancel: function () { 
			        // 用户取消分享后执行的回调函数
			    }
		});
		wx.onMenuShareAppMessage({
		   	title: '数钱游戏', // 分享标题
		    desc: '跟陈思燕一起来数钱吧！', // 分享描述
		   	link: 'http://10.class3.applinzi.com/money3/index_csy.php', // 分享链接
		   	imgUrl: 'http://10.class3.applinzi.com/money3/img/tiaozhan.png', // 分享图标
		    type: '', // 分享类型,music、video或link，不填默认为link
		    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		    success: function () { 
		        // 用户确认分享后执行的回调函数
		    },
		    cancel: function () { 
		        // 用户取消分享后执行的回调函数
		    }
		});
  });

</script>
</html>