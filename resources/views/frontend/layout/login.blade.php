
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Đăng kí tài khoản miễn phí</h3>

										<form role="form" class="form-horizontal" action="{{route('register')}}" method="post">
                     <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Name :</h4>
												<input type="text" name="name" placeholder="Họ tên"  required="">
												<p class="alert text-danger"> {{$errors->first('name')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Email :</h4>
												<input type="text" name="email" placeholder="Email"  required="">
												<p class="alert text-danger"> {{$errors->first('email')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Số điện thoại :</h4>
												<input type="text" name="phone" placeholder="Số điện thoại"  required="">
												<p class="alert text-danger"> {{$errors->first('phone')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Địa chỉ :</h4>
												<input type="text" name="address" placeholder="Địa chỉ"  required="">
												<p class="alert text-danger"> {{$errors->first('address')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Mật khẩu :</h4>
												<input type="password" name="password" placeholder="Mật khẩu"  required="">
												<p class="alert text-danger"> {{$errors->first('password')}}</p>
											</div>
											<div class="sign-up">
												<h4><span class="text-danger">*</span> Nhập lại mật khẩu :</h4>
												<input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu"  required="">
												<p class="alert text-danger"> {{$errors->first('password_confirmation')}}</p>

											</div>
                      <input type="hidden" name="roles" value="0">
                      <input type="hidden" name="level" value="2">
											<div class="sign-up">
												<input type="submit" value="Đăng kí" >
											</div>

										</form>
									</div>

									<div class="login-right">
										<h3>Đăng nhập bằng tài khoản của bạn</h3>
										<form method="POST" action="{{route('login')}}">
										 <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
											<div class="sign-in">
												<h4><span class="text-danger">*</span> Email :</h4>
												<input type="text" name="email" placeholder="Nhập email"   required="">
											</div>
											<div class="sign-in">
												<h4><span class="text-danger">*</span> Password :</h4>
												<input type="password" name="password" placeholder="Nhập password"  required="">
											</div>
											<div class="sign-in">
												<input type="submit" value="Đăng nhập" >
											</div>
										</form>
									</div>


									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
