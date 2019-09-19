@extends('layouts.index_layout')
@section('content')

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
								产品清单
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
								购物车
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="checkout.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-credit-card"></i>
								</div>
								订单查看
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
								关于我们
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
								设置
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="login.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-sign-in"></i>
								</div>
								登录
							</div>
						</a>
					</div>
					<div class="col s4">
						<a href="register.html" class="button-link">
							<div class="menu-link">
								<div class="icon">
									<i class="fa fa-user-plus"></i>
								</div>
								注册
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

	
	<!-- checkout -->
	<div class="checkout pages section">
		<div class="container">
			<div class="pages-head">
				<h3>付款处</h3>
			</div>
			<div class="checkout-content">
				<div class="row">
					<div class="col s12">
						<ul class="collapsible" data-collapsible="accordion">
							<li>
								<div class="collapsible-header active"><h5>1 - 付款方法</h5></div>
								<div class="collapsible-body">
									<h6>以客人或注册的身份结账</h6>
									<form action="#" class="checkout-radio">
										<p>
											<input type="radio" class="with-gap" id="guest-checkout" name="group1">
											<label for="guest-checkout"><span>客人结账</span></label>
										</p>
										<p>
											<input type="radio" class="with-gap" id="register" name="group1">
											<label for="register"><span>注册</span></label>
										</p>
									</form>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis sunt</p>
									<a href="" class="btn button-default">CONTINUE</a>
									<div class="checkout-login">
										<div class="row">
											<form class="col s12">
												<h6>登录</h6>
												<p>Lorem ipsum dolor sit amet.</p>
												<div class="input-field">
													<h5>用户名/邮箱</h5>
													<input type="text" class="validate" required>
												</div>
												<div class="input-field">
													<h5>密码</h5>
													<input type="password" class="validate" required>
												</div>
												<a href=""><h6>忘记密码 ?</h6></a>
												<a href="" class="btn button-default">登录</a>
											</form>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="collapsible-header"><h5>2 - 票据信息</h5></div>
								<div class="collapsible-body">
									<div class="billing-information">
										<form action="#">
											<div class="input-field">
												<h5>Name*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Email*</h5>
												<input type="email" class="validate" required>
											</div>
											<div class="input-field">
												<h5>公司名称</h5>
												<input type="text" class="validate">
											</div>
											<div class="input-field">
												<h5>地址*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>城镇/城市*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>国家*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>邮政编码*</h5>
												<input type="number" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Phone*</h5>
												<input type="number" class="validate" required>
											</div>
											<a href="" class="btn button-default">CONTINUE</a>
										</form>
									</div>
								</div>
							</li>
							<li>
								<div class="collapsible-header"><h5>3 - 配送信息</h5></div>
								<div class="collapsible-body">
									<div class="shipping-information">
										<form action="#">
											<div class="input-field">
												<h5>Name*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Email*</h5>
												<input type="email" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Company Name</h5>
												<input type="text" class="validate">
											</div>
											<div class="input-field">
												<h5>Address*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Town/City*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>State/Country*</h5>
												<input type="text" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Portalcode/ZIP*</h5>
												<input type="number" class="validate" required>
											</div>
											<div class="input-field">
												<h5>Phone*</h5>
												<input type="number" class="validate" required>
											</div>
											<a href="" class="btn button-default">CONTINUE</a>
										</form>
									</div>
								</div>
							</li>
							<li>
								<div class="collapsible-header"><h5>4 - 支付方式</h5></div>
								<div class="collapsible-body">
									<div class="payment-mode">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur provident repellat</p>
										<form action="#" class="checkout-radio">
												<div class="input-field">
													<input type="radio" class="with-gap" id="bank-transfer" name="group1">
													<label for="bank-transfer"><span>Bank Transfer</span></label>
												</div>
												<div class="input-field">
													<input type="radio" class="with-gap" id="cash-on-delivery" name="group1">
													<label for="cash-on-delivery"><span>Cash on Delivery</span></label>
												</div>
												<div class="input-field">
													<input type="radio" class="with-gap" id="online-payments" name="group1">
													<label for="online-payments"><span>Online Payments</span></label>
												</div>
	
											<a href="" class="btn button-default">CONTINUE</a>
										</form>
									</div>
								</div>
							</li>
							<li>
								<div class="collapsible-header"><h5>5 - 订单审核</h5></div>
								<div class="collapsible-body">
									<div class="order-review">
										<div class="row">
											<div class="col s12">
												<div class="cart-details">
													<div class="col s5">
														<div class="cart-product">
															<h5>Image</h5>
														</div>
													</div>
													<div class="col s7">
														<div class="cart-product">
															<img src="img/shop1.png" alt="">
														</div>
													</div>
												</div>
												<div class="divider"></div>
												<div class="cart-details">
													<div class="col s5">
														<div class="cart-product">
															<h5>名称</h5>
														</div>
													</div>
													<div class="col s7">
														<div class="cart-product">
															<a href="">Jackets Men's</a>
														</div>
													</div>
												</div>
												<div class="divider"></div>
												<div class="cart-details">
													<div class="col s5">
														<div class="cart-product">
															<h5>数量</h5>
														</div>
													</div>
													<div class="col s7">
														<div class="cart-product">
															<input type="text" value="1">
														</div>
													</div>
												</div>
												<div class="divider"></div>
												<div class="cart-details">
													<div class="col s5">
														<div class="cart-product">
															<h5>单价</h5>
														</div>
													</div>
													<div class="col s7">
														<div class="cart-product">
															<span>$26.00</span>
														</div>
													</div>
												</div>
												<div class="cart-details">
													<div class="col s5">
														<div class="cart-product">
															<h5>总价</h5>
														</div>
													</div>
													<div class="col s7">
														<div class="cart-product">
															<span>$26.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="order-review final-price">
										<div class="row">
											<div class="col s12">
												<div class="cart-details">
													<div class="col s8">
														<div class="cart-product">
															<h5>Sub Total</h5>
														</div>
													</div>
													<div class="col s4">
														<div class="cart-product">
															<span>$26.00</span>
														</div>
													</div>
												</div>
												<div class="cart-details">
													<div class="col s8">
														<div class="cart-product">
															<h5>运费:</h5>
														</div>
													</div>
													<div class="col s4">
														<div class="cart-product">
															<span>$5.00</span>
														</div>
													</div>
												</div>
												<div class="cart-details">
													<div class="col s8">
														<div class="cart-product">
															<h5>总计</h5>
														</div>
													</div>
													<div class="col s4">
														<div class="cart-product">
															<span>$31.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="" class="btn button-default button-fullwidth">CONTINUE</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end checkout -->
	

	
	

</body>
</html>






@endsection
