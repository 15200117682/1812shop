<div class="m_content">
	<div class="m_right">
		<p></p>
		<div class="mem_tit"><h2>收货地址展示</h2></div>
		@foreach ($address as $v)
			@if($v["default"]==1)
				<div class="address">

					<table border="1" class="add_t" align="center" style="color:#ff0000;width:50%; margin:10px auto;text-align:center;font-size:20px;" cellspacing="0" cellpadding="0">
						<tr>
							<td align="right">收货人姓名：</td>
							<td>{{$v['man']}}</td>
						</tr>
						<tr>
							<td align="right">配送区域：</td>
							<td>{{$v['city']}}</td>
						</tr>
						<tr>
							<td align="right">详细地址：</td>
							<td>{{$v['detail']}}</td>
						</tr>
						<tr>
							<td align="right">手机：</td>
							<td>{{$v['tel']}}</td>
						</tr>
					</table>

					<p align="right">
						<a href="/order_code/order_update" style="color:#ff4e00;">编辑</a>
						<a href="/order_code/order_del" style="color:#ff4e00;">删除</a>
					</p>

				</div>
				@else
				<div class="address">

					<table border="1" class="add_t" align="center" style="width:50%; margin:0 auto;text-align:center;font-size:20px;" cellspacing="0" cellpadding="0">
						<tr>
							<td>收货人姓名：</td>
							<td>{{$v['man']}}</td>
						</tr>
						<tr>
							<td>配送区域：</td>
							<td>{{$v['city']}}</td>
						</tr>
						<tr>
							<td>详细地址：</td>
							<td>{{$v['detail']}}</td>
						</tr>
						<tr>
							<td>手机：</td>
							<td>{{$v['tel']}}</td>
						</tr>
					</table>

					<p align="right">
						<a href="/order_code/order_default" class="default" add_id="{$v.add_id}" style="color:#ff4e00;">设为默认</a>&nbsp; &nbsp;
						<a href="" style="color:#ff4e00;">编辑</a>
						<a href="/order_code/order_update" style="color:#ff4e00;">编辑</a>
					</p>

				</div>

			@endif
		@endforeach


		<div class="mem_tit">
			<h2>添加地址</h2>
		</div>
		<table border="0" class="add_tab" style="width:930px;"  cellspacing="0" cellpadding="0">
			<tr>
				<td width="135" align="right">配送地区</td>
				<td colspan="3" style="font-family:'宋体';">
					<select  name="add_province" id="add_province" style="width: 215px;height: 30px;color: #f86e09;" class="area">
						<option value="0" selected="selected">请选择...</option>
						@foreach($data as $v)
						<option value="{{$v['id']}}">{{$v['name']}}</option>
						@endforeach
					</select>
					<select  name="add_city" id="add_city" style="width: 215px;height: 30px;color: #f86e09;" class="area">

						<option value="0" selected="selected">请选择...</option>

					</select>
					<select  name="add_district" id="add_district" style="width: 215px;height: 30px;color: #f86e09;" class="area">
						<option value="0" selected="selected">请选择...</option>
					</select>
					（必填）
				</td>
			</tr>
			<tr>
				<td align="right">收货人姓名</td>
				<td style="font-family:'宋体';"><input type="text" name="add_name" id="add_name" class="add_ipt" style="width: 230px;height: 30px;"/>（必填）</td>
				<td align="right">手机</td>
				<td style="font-family:'宋体';"><input type="text" name="add_tel" id="add_tel" class="add_ipt" style="width: 230px;height: 30px;" />（必填）</td>
			</tr>
			<tr>
				<td align="right">详细地址</td>
				<td style="font-family:'宋体';"><input type="text" name="add_details" id="add_details" class="add_ipt" style="width: 230px;height: 30px;" />（必填）</td>
			</tr>
			<tr>
				<td>是否设置为默认收货地址</td>
				<td colspan="3"><input type="checkbox" name="is_default" id="is_default" ></td>
			</tr>
		</table>
		<br>
		<p align="center"><input type="button" value="添加" id="btn" style="background: orangered;border: none;width: 100px;height: 30px;color: white"></p>
		<p align="center">&nbsp; &nbsp;
		</p>
	</div>
</div>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
	$(function () {
		//市数据
		$('#add_province').change(function(){
			var _this=$(this);
			_this.nextAll('select').html("<option value='0'>请选择...</option>");
			var id=_this.val();
			$.ajax({
				url:"/order_code/getArea",
				data:{id:id},
				method:"get",
				dataType:"json",
				success:function(res){
					var data=res.data;
					var _option="<option value='0'>请选择...</option>";
					/*for(var i in res){
					    _option+="<option value='"+res.i.id+"'>"+res.i.name+"</option>";
					}*/
					$.each(data,function(key,val){
						_option+='<option value="'+val.id+'">'+val.name+'</option>';
					});
					$("#add_city").html(_option);
				}
			})
		});
		$('#add_city').change(function(){
			var _this=$(this);
			_this.nextAll('select').html("<option value='0'>请选择...</option>");
			var id=_this.val();
			$.ajax({
				url:"/order_code/getArea",
				data:{id:id},
				method:"get",
				dataType:"json",
				success:function(res){
					var data=res.data;
					var _option="<option value='0'>请选择...</option>";
					/*for(var i in res){
					    _option+="<option value='"+res.i.id+"'>"+res.i.name+"</option>";
					}*/
					$.each(data,function(key,val){
						_option+='<option value="'+val.id+'">'+val.name+'</option>';
					});
					$("#add_district").html(_option);
				}
			})
		});
		$("#btn").click(function () {
			var name=$("#add_name").val();
			var	tel=$("#add_tel").val();
			var details=$("#add_details").val();
			var province=$("#add_province").val();
			var city=$("#add_city").val();
			var district=$("#add_district").val();
			var is=$('#is_default').prop('checked');
			if(is===true){
				var is_default=1;
			}else{
				var is_default=0;
			}
			$.ajax({
				url:"/order_code/address",
				data:{name:name,tel:tel,details:details,province:province,city:city,district:district,default:is_default},
				method:"post",
				dataType:"json",
				success:function (res) {
					if(res.code==200){
						alert(res.msg);
						location.href="/order_code/order_address";
					}else{
						alert(res.msg);
					}
				}
			});
		})
	})
</script>