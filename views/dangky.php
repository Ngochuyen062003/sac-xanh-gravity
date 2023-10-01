
    <!-- Sign-up Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.1s">
                    <h3 class="mb-4 text-center btn-primary rounded-pill">Đăng ký</h3>
                    <p class="mb-4 text-center">Nếu bạn đã có tài khoản, <a href="index.php?act=dang-nhap">Đăng nhập ngay</a> bạn nhé. </p>
                    <form action="index.php?act=dang-ky" method="post" enctype="multipart/form-data">
                        <div class="row ">
                            <div class="col-md-12 text-center">
                                <p style="font-size: 20px;">Bạn là: </p><br>
                                <?php foreach ($roles as $key) {
                                    extract($key);
                                ?>
                                <div class="form-check form-check-inline" required>
                                    <input class="form-check-input" type="radio" name="role"  value="<?=$id?>">
                                    <label class="form-check-label"><?=$name?> <br> <?php if($id==2){echo "(Người gửi đồ quyên góp)";}else {echo "(Người nhận đồ quyên góp)";} ?> </label>
                                </div>
                                <?php } ?>
                            </div>
                        </div><br>
                        <div class="row g-3 ">
                            <div class="col-md-12 ">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fullname" required>
                                    <label>Họ và tên</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="username" required>
                                    <label>Tên người dùng</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="avatar" required>
                                    <label>Ảnh đại diện</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" required>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="phone-number" required>
                                    <label>Số điện thoại</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password">
                                    <label>Mật khẩu</label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button class="btn btn-primary rounded-pill py-2 px-4" name="dang-ky" type="submit">Đăng ký</button>
                            </div>
                        </div>
                    </form>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")){
                            echo "<br>".$thongbao;
                        ?>
                            <a href="index.php?act=dang-nhap">Đăng nhập ngay!</a>
                    <?php    
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- sign-up End -->