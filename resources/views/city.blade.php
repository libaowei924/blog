@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=yTQ9MDgodPxYfOoYRowcP23LXeRg7f9x"></script>
<script type="text/javascript">
	//默认经纬度
	var point = new BMap.Point(116.331398,39.897445);
	var geolocation = new BMap.Geolocation();
	var BD_ERROR = [
	    '成功', '城市列表成功', '位置结果未知', '导航结果未知', '非法密钥', 
	    '非法请求', '没有权限', '服务不可用', '请求超时'
	];

	geolocation.getCurrentPosition(function(r){
		if(this.getStatus() == BMAP_STATUS_SUCCESS){
			var mk = new BMap.Marker(r.point);
			var url = "https://api.map.baidu.com/geocoder/v2/?callback=renderReverse&location="+r.point.lat+","+r.point.lng+"&output=json&pois=1&latest_admin=1&ak=yTQ9MDgodPxYfOoYRowcP23LXeRg7f9x";
			$.ajax({
					type: "GET", 
					dataType: "jsonp", 
					url: url,
					success: function (json) {
						if(json.status==0){
							alert("您当前位置:"+json.result.addressComponent.city);
						}
					},
					error: function (XMLHttpRequest, textStatus, errorThrown) { 
						alert(latlon+"地址位置获取失败"); 
					}
				});

		}
		else {
			alert(BD_ERROR[this.getStatus()]);
		}        
	},{enableHighAccuracy: true})

</script>
@stop
