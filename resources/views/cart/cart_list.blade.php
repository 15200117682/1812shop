@extends('layouts.index_layout')

@section('title', 'cart')

@section('content')
   <div class="cart section">
		<div class="container">
			<div class="pages-head">
				<h3>CART</h3>
			</div>

				<div class="content">
					@foreach($data as $k => $v)
					<div class="cart-1">
						<div class="row">
							<div class="col s5">
								<h5>Image</h5>
							</div>
							<div class="col s7">
								<img src="/uploads/{{$v['g_img']}}" alt="" style="width: 500;height: 400">
							</div>
						</div>
						<div class="row">
							<div class="col s5">
								<h5>商品名称</h5>
							</div>
							<div class="col s7">
								<h5><a href="">{{$v['g_name']}}</a></h5>
							</div>
						</div>
						<div class="row">
							<div class="col s5">
								<h5>商品数量</h5>
							</div>
							<div class="col s7 num">
								<input value="1" type="text">
							</div>
						</div>
						<div class="row">
							<div class="col s5">
								<h5>商品价格</h5>
							</div>
							<div class="col s7">
								<h5 class="price">￥{{$v['g_price']}}</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s5">
								<h5>Action</h5>
							</div>
							<div class="col s7">
								<h5><i class="fa fa-trash"></i></h5>
							</div>
						</div>
					</div>
					<div class="divider"></div>
					@endforeach
				
				</div>
			<div class="total">
				
				<div class="row">
					<div class="col s7">
						<h6>总价</h6>
					</div>
					<div class="col s5">
						<h6 id="total">￥41.00</h6>
					</div>
				</div>
			</div>
			<!-- <button class="btn button-default" id='sum'>结算</button> -->
			<a href="/order_code/order_show" class="btn button-default" id='sum'>结算</a>
		</div>
	</div>
@endsection
<script type="text/javascript" src="/index/js/jquery.min.js"></script>
<script type="text/javascript">

	$(document).on("blur",'.num',function(){
		//获取到价格
		var price = $(this).parent().next().children().children('.price').text();
		// alert(price);
		price = price.substr(1);
		//获取数量
		var num = $(this).children().val();
		//计算总价
		var price_do = "￥" + price * num;
		//替换价格
		$(this).parent().next().children().children('.price').text(price_do);
		
		//获取总价
		var total = 0;
		$('.price').each(function(){
			var prices = $(this).text();
			prices = prices.substr(1); 
			total += parseInt(prices); 
		})
		$('#total').html('￥'+total);
	})
	//获取总价 循环获得单价 
	// $(function(){
	// 	var total = 0;
	// 	$('.price').each(function(){
	// 		var prices = $(this).text();
	// 		prices = prices.substr(1); 
	// 		total += parseInt(prices); 
	// 	})
	// 	$('#total').html('￥'+total);
	// })

	//结算
	// $(document).on("click",'#sum',function(){
	// 	$.ajax({
	// 		url:"{{url('/order_code/order_show')}}",
	// 		type:'get',
	// 		success:function(res){
	// 			console.log(res);
	// 		}
	// 	})
	// })
	
</script>

