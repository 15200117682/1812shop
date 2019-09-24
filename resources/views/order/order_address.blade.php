@extends('layouts.index_layout')
@section('content')


<body>
	<!-- navbar bottom -->
	<div class="navbar-bottom">
		<div class="row">
			<div class="col s2">
				<a href="index.html"><i class="fa fa-home"></i></a>
			</div>
			<div class="col s2">
				<a href="wishlist.html"><i class="fa fa-heart"></i></a>
			</div>
			<div class="col s4">
				<div class="bar-center">
					<a href="#animatedModal" id="cart-menu"><i class="fa fa-shopping-basket"></i></a>
					<span>2</span>
				</div>
			</div>
			<div class="col s2">
				<a href="contact.html"><i class="fa fa-envelope-o"></i></a>
			</div>
			<div class="col s2">
				<a href="#animatedModal2" id="nav-menu"><i class="fa fa-bars"></i></a>
			</div>
		</div>
	</div>
	<!-- end navbar bottom -->

	<!-- menu -->
	<div class="menus" id="animatedModal2">
		<div class="close-animatedModal2 close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="container">
				<div class="row">
					<div class="col s4">
						<a href="index.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-home"></i>
								</div>
								Home
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="product-list.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bars"></i>
								</div>
								Product List
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="shop-single.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-eye"></i>
								</div>
								Single Shop
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="wishlist.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-heart"></i>
								</div>
								Wishlist
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="cart.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-shopping-cart"></i>
								</div>
								Cart
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="checkout.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-credit-card"></i>
								</div>
								Checkout
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="blog.html" class="button-link">	
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-bold"></i>
								</div>
								Blog
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="blog-single.html" class="button-link">	
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-file-text-o"></i>
								</div>
								Blog Single
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="error404.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-hourglass-half"></i>
								</div>
								404
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="testimonial.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-support"></i>
								</div>
								Testimonial
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="about-us.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user"></i>
								</div>
								About Us
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="contact.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-envelope-o"></i>
								</div>
								Contact
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<a href="setting.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-cog"></i>
								</div>
								Settings
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="login.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-sign-in"></i>
								</div>
								Login
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="register.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user-plus"></i>
								</div>
								Register
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end menu -->

	<!-- cart menu -->
	<div class="menus" id="animatedModal">
		<div class="close-animatedModal close-icon">
			<i class="fa fa-close"></i>
		</div>
		<div class="modal-content">
			<div class="cart-menu">
				<div class="container">
					<div class="content">
						<div class="cart-1">
							<div class="row">
								<div class="col s5">
									<img src="img/cart-menu1.png" alt="">
								</div>
								<div class="col s7">
									<h5><a href="">Fashion Men's</a></h5>
								</div>
							</div>
							<div class="row quantity">
								<div class="col s5">
									<h5>Quantity</h5>
								</div>
								<div class="col s7">
									<input value="1" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Price</h5>
								</div>
								<div class="col s7">
									<h5>$20</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Action</h5>
								</div>
								<div class="col s7">
									<div class="action"><i class="fa fa-trash"></i></div>
								</div>
							</div>
						</div>
						<div class="divider"></div>
						<div class="cart-2">
							<div class="row">
								<div class="col s5">
									<img src="img/cart-menu2.png" alt="">
								</div>
								<div class="col s7">
									<h5><a href="">Fashion Men's</a></h5>
								</div>
							</div>
							<div class="row quantity">
								<div class="col s5">
									<h5>Quantity</h5>
								</div>
								<div class="col s7">
									<input value="1" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Price</h5>
								</div>
								<div class="col s7">
									<h5>$20</h5>
								</div>
							</div>
							<div class="row">
								<div class="col s5">
									<h5>Action</h5>
								</div>
								<div class="col s7">
									<div class="action"><i class="fa fa-trash"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="total">
						<div class="row">
							<div class="col s7">
								<h5>Fashion Men's</h5>
							</div>
							<div class="col s5">
								<h5>$21.00</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s7">
								<h5>Fashion Men's</h5>
							</div>
							<div class="col s5">
								<h5>$21.00</h5>
							</div>
						</div>
						<div class="row">
							<div class="col s7">
								<h6>Total</h6>
							</div>
							<div class="col s5">
								<h6>$41.00</h6>
							</div>
						</div>
					</div>
					<button class="btn button-default">Process to Checkout</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart menu -->
	<!-- contact us -->
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>收货地址</h3>
			</div>
			<div class="contact-us">
				<div class="row">
					<div class="col s12">
						<form action="send-mail.php" class="contact-form" id="contact-form" method="post">
							<div >
							</div>

							<div class="form-group" id="name-field">
								<input type="text" class="validate" id="form-name" name="form-name" placeholder="名称" required>
							</div>
							<div class="form-group" id="email-field">
								<input type="email" class="validate" id="form-email" name="form-email" placeholder="手机" required>
							</div>
							<div class="form-group" id="subject-field">
								<input type="text" class="validate" id="form-subject" name="form-subject" placeholder="详细地址" required>
							</div>
							<div class="form-group">
								<button class="btn button-default" type="submit" id="submit" name="submit">确认</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact us -->
<!-- loader -->
	<div id="fakeLoader"></div>

	<!-- end loader -->
</body>

</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
        $(function(){
            alert(1);
            $.ajax({
				url:"/order_code/getArea",
				method:"get",
				dataType:"json",
				success:function (res) {
				    console.log(res);
				    	var data=res.data;
                        var _option="<option value='0'>请选择...</option>";

						$.each(data,function(key,val){
							_option+="<option value='"+val.id+"'>"+val.name+"</option>";
						});

						console.log(_option);
                        $("#add_province").html(_option);
				}

			});
           /* //三级联动
            $('.area').change(function(){
                var _this=$(this);
                _this.nextAll('select').html("<option value='0'>请选择...</option>");
                var id=_this.val();
                //console.log(id);
                $.ajax({
                    url:"/order_code/getArea",
                    data:{id:id},
                    method:"get",
                    dataType:"json",
                    success:function(res){
                        console.log(res);
                        var _option="<option value='0'>请选择...</option>";
                        // for(var i in res){
                        //     _option+="<option value='"+res.i.id+"'>"+res.i.name+"</option>";
                        // }
                        $.each(res,function(key,val){
                            _option+='<option value="'+res.data.id+'">'+res.data.name+'</option>';
                        });


                        _this.next('select').html(_option);
                    }
                })
            });*/
            //表单提交
            $('#btn').click(function(){
                //获取数据
                var add_province=$('#add_province').val();
                var add_city=$('#add_city').val();
                var add_district=$('#add_district').val();
                var add_name=$('#add_name').val();
                var add_tel=$('#add_tel').val();
                var add_details=$('#add_details').val();
                var send_time=$('#send_time').val();
                var is_default=$('#is_default').prop('checked');
                $.post(
                    "{:url('address/address')}",
                    {add_province:add_province,add_city:add_city,add_district:add_district,add_name:add_name,add_tel:add_tel,add_details:add_details,send_time:send_time,is_default:is_default},
                    function(res){
                        layer.msg(res.font,{icon:res.code});
                        if(res.code==1){
                            location.href="{:url('address/address')}";
                        }
                    },
                    'json'
                )
            })
        })
</script>
@endsection
<tr>
	<td width="135" align="right">配送地区</td>
	<td colspan="3" style="font-family:'宋体';">
		<select  class="area" id="add_province">
			<option value="0" selected="selected">请选择...</option>
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