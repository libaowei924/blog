@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=yTQ9MDgodPxYfOoYRowcP23LXeRg7f9x"></script>
<script type="text/javascript">
	//默认经纬度
	var point = new BMap.Point(116.331398,39.897445);
	var geolocation = new BMap.Geolocation();

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
							alert(json.result.addressComponent.city);
						}
					},
					error: function (XMLHttpRequest, textStatus, errorThrown) { 
						alert(latlon+"地址位置获取失败"); 
					}
				});

		}
		else {
			alert('发生错误！'+this.getStatus());
			//alert('failed'+this.getStatus());
		}        
	},{enableHighAccuracy: true})
	//关于状态码
	//BMAP_STATUS_SUCCESS	检索成功。对应数值“0”。
	//BMAP_STATUS_CITY_LIST	城市列表。对应数值“1”。
	//BMAP_STATUS_UNKNOWN_LOCATION	位置结果未知。对应数值“2”。
	//BMAP_STATUS_UNKNOWN_ROUTE	导航结果未知。对应数值“3”。
	//BMAP_STATUS_INVALID_KEY	非法密钥。对应数值“4”。
	//BMAP_STATUS_INVALID_REQUEST	非法请求。对应数值“5”。
	//BMAP_STATUS_PERMISSION_DENIED	没有权限。对应数值“6”。(自 1.1 新增)
	//BMAP_STATUS_SERVICE_UNAVAILABLE	服务不可用。对应数值“7”。(自 1.1 新增)
	//BMAP_STATUS_TIMEOUT	超时。对应数值“8”。(自 1.1 新增)
</script>
@stop