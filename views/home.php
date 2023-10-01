
    <!-- Products Start -->
    <div class="container-fluid product py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Tin tức nổi bật</p>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                <?php foreach($blogs as $key){
                    extract($key);
                ?>
                <a href="" class="d-block product-item rounded">
                    <img src="views/img/blogs/<?=$image?>" alt="">
                    <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                        <h4 class="text-primary"><?php new_name($title); ?>...</h4>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- About Start -->
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row rounded-pill" style="border: 1px solid #228b22;">
                    <img src="views/img/user/example.png" class="col-1 rounded-circle">
                    <h3 class="col-10 fs-5 text-center" style="margin-top: 10px; margin-left: 30px;">Đăng bài ngay để chia sẻ về những kỉ niệm của bạn nhé!</h3>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <?php foreach($posts as $value){
                    extract($value);
                ?>
                <div class="row wow fadeIn mb-2" data-wow-delay="0.5s">
                    <div class="col-1">
                        <img src="views/img/user/example.png" class="rounded-circle" width="40px" style="border: 1px solid #228b22;">
                    </div>
                    <div class="col-10">
                        <p class="fs-4 fw-medium fst-italic text-primary" style="padding-top: 3px">Vũ Thị Ngọc Huyền</p>
                    </div>
                    <p class="mb-4"><?=new_description($description)?> ....<strong>Xem thêm</strong></p>
                    <img src="views/img/posts/<?=$image?>" width="70%">
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col-2">
                        <img src="views/img/la.png" class="rounded-circle" width="25px" height="25px"> 25.304 Lá
                    </div>
                    <div class="col-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg> 1.256 bình luận
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                        </svg> 984 lượt chia sẻ
                    </div>
                </div>
                <div class="row rounded-pill mb-5" style="border: 1px solid #228b22;">
                    <h4 class="fs-5 text-center" style="margin-top: 10px;">Viết bình luận</h4>
                </div>
                <?php } ?>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto btn-primary rounded-pill mb-5" style="border: 1px solid #228b22;">
                    <h4 class="fs-5 text-center" style="margin-top: 10px;">
                        Xem thêm các bài viết khác 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                    </h4>
                </div>
        </div>
    </div>
    <!-- About End -->



