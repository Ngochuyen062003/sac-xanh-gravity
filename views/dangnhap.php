
    <!-- Sign-in Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.1s">
                    <h3 class="mb-4 text-center btn-primary rounded-pill">Đăng nhập</h3>
                    <p class="mb-4 text-center">Nếu bạn chưa có tài khoản, <a href="index.php?act=dang-ky">Đăng ký ngay</a> bạn nhé. </p>
                    <form>
                        
                        <div class="row g-3 ">
                            
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="username">
                                    <label>Tên người dùng</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password">
                                    <label>Mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <form action="?" method="POST">
                                    <div class="g-recaptcha" data-sitekey="2415ld"></div>
                                    <br/>
                                </form>
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <script type="text/javascript">
                                    var onloadCallback = function() {
                                        //alert("Grecaptcha is ready!");
                                    };
                                </script>
                                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"async defer></script>
                            </div>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- sign-in End -->