
// 创建本地数据库并插入信息
var db=openDatabase("game_money","1.0","跟着陈思燕一起来玩数钱游戏吧",1024*1024);
var bol=false;
$(document).ready(function(){
	$arr=$(".wrap>.nav>div")
	$arr.on("click",function(){
		console.log("aaaa");
		console.log($('.wrap>.informationAll').eq($(this).index()));
		$('.wrap>.informationAll').eq($(this).index()).addClass("ranking1").siblings().removeClass("ranking1");
		$('.wrap>.mask').css("display","block");
	})
	// 首页关掉菜单栏窗口
	$(".close").on("click",function(){
		console.log("aaaaaaaaaaa");
		$(this).parent().removeClass("ranking1");
		$('.wrap>.mask').css("display","none");
	})
	//首页开始挑战
	$(".beginG").on("click",function(){
		console.log("aaaaaaaaaaaa");
		$('.informationAll').eq(0).addClass("ranking1");
		$('.wrap>.mask').css("display","block");
	})
	// 提交并开始游戏
	$('.btn').on("click",function(){
		console.log("aaa");
		$('.wrap>.mask').css("display","none");
		$(".wrap").css("display","none");
		$(".game").css("display","block");
		timer();
		move();
	})
	// 第二个页面，开始游戏
	// 温馨提示框 动画
	var i=0;
	$imgArr=["img/p2_txt1.png","img/p2_txt2.png","img/p2_txt3.png"];
	function move(){
		var timers=setInterval(function(){
			i++;
			$('.game1>img').attr("src",$imgArr[i]);
			if(i>$('.game>div>img').length-1){
				i=-1;
			}
		},1000)
	}
	// 数钱的效果
	var startPointY;
	var endPointY;
	var num=0;
	var s="";
	$('.money').on('touchstart',function(e){
		e.preventDefault(); 
		var e=window.event||e;
		// 获取手指点击事的坐标
		startPointY=e.touches[0].clientY;
		console.log("aaav");
		$('.scroll').css({
	 			"display":"none"
		})
		
	});
	$('.money').on('touchend',function(e){
		e.preventDefault(); 
		var e=window.event||e;
		endPointY=e.changedTouches[0].clientY;
		if(startPointY-endPointY>10){
			// 执行数钱动画效果
			 countMoney();
			 // 统计分数
			 sum();
		}
	});

	//数钱动画效果
	function countMoney(){
		$img=$("<img src='img/p2_qian.jpg' class='change'></img>");
		$(".money").append($img);
		setTimeout(function(){
			$(".change").eq(0).remove();
		},1000);
	}

	//倒计时
	function timer(){
		$('.informationAll').eq(0).removeClass("ranking1");
		var t=$('.time>span').eq(3).text();
		console.log(t);
		var time=setInterval(function(){
			t--;
			if(t==0){
				clearInterval(time);
				$(".game").css("display","none");
				$(".game_end").css("display","block");
				games();
				nameValue=$('input').eq(0).val();
				telValue=$('input').eq(1).val();
				dataFn(num);
			}
			$('.time>span').eq(3).text(t);
		},1000)
	}
	// 记分数
	function sum(){
		s=num++;
		console.log("num",num);
		console.log("s",s);
		var a=s.toString().split('');
		for(var i=0;i<a.length;i++){
			$('.time>span').eq(2).text(a[a.length-1]);
			$('.time>span').eq(1).text(a[a.length-2]);
			$('.time>span').eq(0).text(a[a.length-3]);
		}
	}
	// 游戏结果返回页面
	// 数钱的张数
	games();
	function games(){
		$('.nums').text(num*100);
		$spanArr=['没办法!你已经强到没有对手了','您太客气了,这不是您的极限吧！'];
		if(num>100){
			$('.game_end>p').eq(2).text($spanArr[0]);
		}else{
			$('.game_end>p').eq(2).text($spanArr[1]);
		}
		// 
		$arr=$(".game_end>.nav>.div")
		$arr.on("click",function(){
			$('.game_end>.informationAll').eq($(this).index()-1).addClass("ranking2").siblings().removeClass("ranking2");
			$('.mask2').css("display","block");
		})
		// 关掉菜单栏窗口
		$(".game_end .close").on("click",function(){
			$(this).parent().removeClass("ranking2");
			$('.mask2').css("display","none");
		})
		// 再来一次
		$('.sel>img').eq(0).on("click",function(){
			$(".game_end").css("display","none");
			$('.wrap').css("display","block");
			$('.time>span').eq(3).text(60);
			num=1;
			s=num;
			var a=s.toString().split('');
			$('.time>span').eq(2).text("0");
			$('.time>span').eq(1).text("0");
			$('.time>span').eq(0).text("0");
			readData();
		})
		// 分享
		$('.sel>img').eq(1).on("click",function(){
			// share1();
			$('.share2').css("display","block");
			$('.game_end>.mask1').css("display","block");
			$('.mask1').on("click",function(){
				$('.share2').css("display","none");
				$('.game_end>.mask1').css("display","none");
			})
		})
	}
})
	// 创建本地数据库并插入信息
	var db=openDatabase("game_money","1.0","跟着陈思燕一起来玩数钱游戏吧",1024*1024);
	// 删除数据表
	// db.transaction(function (tx) {
	// 	tx.executeSql('drop table user3');
	// });
	$('.btn').on("click",function(){

		//获取用户和手机号码
		console.log("aaaa");
		db.transaction(function(tx){
			tx.executeSql(
				"create table if not exists user3(name text,tel number,score number)", //sql语句
				[],//数据
				function(tx,result){
				// 成功回调
					console.log("创建成功");
				},
				function(tx,error){
				// 失败回调
					console.log("创建失败");
				}
			);
		})
	})
	function dataFn(num){
		// 比较相同名字跟电话的信息，取最高成绩到服务器
		db.transaction(function(tx){

			tx.executeSql(
				"select * from user3 ",[],
				function(tx, result){ 
					console.log("查询成功",tx,result);
					for(var i=0;i<result.rows.length;i++){
							bol=false;
							if(result.rows[i].name==nameValue&&result.rows[i].tel==telValue){
								 if(result.rows[i].score>=num*100){
								 	bol=true;
								 	break;
								 }else{
								 	bol=false;
								 } 
							}
					}
					console.log("bol",bol);
					if(!bol){
						// 先删除后插入
						tx.executeSql(
							"delete from user3 where name= ?",
							[nameValue],
							function (tx, result) {
							// alert("删除成功："+result)
							},
							function (tx, error) {
							// alert('删除失败: ' + error.message);
							}
						)
						tx.executeSql(
						"insert into user3(name,tel,score) values(?,?,?)",
						[nameValue,telValue,num*100],
						function(tx,result){
						// 成功回调
							console.log("插入成功");
						},
						function(tx,error){
						// 失败回调
							console.log("插入失败",error.message);
						})	
					}

				},
				function (tx, error) {
				alert('查询失败: ' + error.message);
			});	
		});

	}

// 读取数据库数据到前端页面
arrI=["first","second","third"];
function readData(){
	$(".r").html("");
	// 查询本地数据库的数据并对数据进行排名
	db.transaction(function(tx){
	tx.executeSql(
		"select * from user3  ORDER BY score DESC ",[],
		function(tx, result){ 
			console.log("查询成功",tx,result);
			for(var i=0;i<result.rows.length;i++){
				// 创建一个div
				if(i<3){
					for(var j=i;j<=i;j++){
						var div=$("<div class='ranking'>"
								+"<img src='img/p1_"+arrI[j]+".png'>"
								+"<img src='img/shizhong.png'><span class='name'>"
								+result.rows[i].name+"</span><span>"
								+result.rows[i].score+"分"+"</span>");
						$(".r").append(div);
					}
				}else {
					var div=$("<div class='ranking r3'>"
						+"<span class='span1'>"+(i+1)+"</span><img src='img/shizhong.png' class='img1'><span class='name'>"
						+result.rows[i].name+"</span><span>"
						+result.rows[i].score+"分"+"</span>");
					$(".r").append(div);
				}
				
			}
		}
	)
	})
}
$(".money1").on("click",function(){
	$(".r").html("");
	readData();
})



