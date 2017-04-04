	function callhold(){
			//alert("get!");
			var info_box = document.getElementById('selectcourse');
			var cold_down = document.getElementById('showcall');
			
			var coursevalue = document.getElementById('courseid').value;
			var codevalue = document.getElementById('checkcode').value;
			info_box.setAttribute("hidden","true");
			cold_down.removeAttribute("hidden");
			sendmessage(coursevalue,codevalue);
			//startcountdown();
			//document.select_course_form.submit();
			//var checkcodebox = document.getElementById('checkcode');
			//checkcodebox.setAttribute("value",GetRandStr(4));
			
	}
	function sendmessage(courseId,checkcode){
		var xmlhttp;
		var response;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		    var uri = "index.php?/callprepare/callhold"+"/"+checkcode+"/"+courseId;
			xmlhttp.open("GET",uri,true);
			//var mstring = "testCode="+checkcode+"&courseId="+courseId ;
			xmlhttp.send();
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					//alert("发起成功\n"+uri);
					response = xmlhttp.responseText;
					//response:PHP回传的当次课程holdId
					startcountdown(courseId,response);					
				}
			  }
	}
	function startcountdown(courseId,holdId){
		var first = second = new Date();
		var longitude = document.getElementById('longitude').value;
		var latitude = document.getElementById('latitude').value;
		var uri = "index.php?/callresult/index/" + courseId +"/" + holdId +"/" +longitude +"/" +latitude;
		second.setSeconds(second.getSeconds()+60);
		
		$('#clock2').countdown(second, function(event) {
			$(this).html(event.strftime('%H:%M:%S'));
		}).on('finish.countdown', function(){
			$(this).parent().hide().html('<a href='+uri+'><button type="submit" class="btn blue"><i class="icon-ok"></i>查看点名结果</button></a>').show().addClass('animated bounceIn').closest('.panel').addClass('panel-success');
		});
	}
	
	function refresh(){
	   var map, geolocation;
		//加载地图，调用浏览器定位服务
		map = new AMap.Map('container', {
			resizeEnable: false
		});
		map.plugin('AMap.Geolocation', function() {
			geolocation = new AMap.Geolocation({
				enableHighAccuracy: true,//是否使用高精度定位，默认:true
				timeout: 10000,          //超过10秒后停止定位，默认：无穷大
				buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
				zoomToAccuracy: true,      //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
				buttonPosition:'RB'
			});
			map.addControl(geolocation);
			geolocation.getCurrentPosition();
			AMap.event.addListener(geolocation, 'complete', onComplete);//返回定位信息
			AMap.event.addListener(geolocation, 'error', onError);      //返回定位出错信息
		});
		//解析定位结果
		function onComplete(data) {	
			document.getElementById('latitude').value = data.position.getLat();
			document.getElementById('longitude').value = data.position.getLng();
		}
		//解析定位错误信息
		function onError(data) {
			alert('无法获取您的位置信息：'+data);
		}
	}
	
	