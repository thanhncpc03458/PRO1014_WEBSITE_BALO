<?php
include 'particals/header.php';
?>
<section class="section-product">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Túi Du Lịch</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="box-img">
                    <img src="assets/images/product_3.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="title-category">Thương Hiệu: <a href="" class="text-primary" class="">Crumple</a> </h3>
                <h2 class="title-product">
                    Crumpler Big Breakfast Tote
                </h2>
                <h2 class="text-danger">180.000VND</h2>

                <p>Một cái ba lô là một loại túi lớn có dây đeo hai vai, thường được thiết kế để đựng đồ đạc và mang theo khi đi lại hoặc đi phượt.</p>
                <div class="input-group mb-3"> 
                    <label for="" class="label">Số lượng</label>
                    <button class="btn btn-outline-secondary" type="button">-</button>
                    <input type="number" value="1" min="1" class="qty" placeholder="" >
                    <button class="btn btn-outline-secondary" type="button">+</button>

                </div>

                <button class="btn btn-danger text-uppercase">
                    Thêm vào giỏ hàng
                </button>
                <button class="btn btn-primary text-uppercase">
                    Mua ngay
                </button>

            </div>
        </div>
        <div class="col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mô tả</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Thông tin bổ sung</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Đánh giá</button>
                </li>
                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    Balo một phần của cuộc sống hiện đại, không chỉ là một dụng cụ chứa đồ tiện ích mà còn là biểu tượng thể hiện phong cách và cá nhân của mỗi người. Dưới đây là một mô tả chi tiết về một chiếc balo đơn giản nhưng đầy tính nghệ thuật:

                    Tên: Balo Thanh Lịch Đa Năng <br>

                    Mô tả ngoại hình: <br>

                    Kích thước: Trung bình, đủ rộng để chứa các vật dụng cần thiết hàng ngày như laptop, sách vở, bình nước, ví tiền, điện thoại, và một số vật dụng cá nhân khác. <br>
                    Màu sắc: Một sắc đen cổ điển, tạo nên sự đẳng cấp và dễ dàng phối hợp với nhiều loại trang phục khác nhau. <br>
                    Chất liệu: Da tổng hợp chất lượng cao, có độ bền và độ bền cao, đồng thời cung cấp vẻ ngoài sang trọng và chuyên nghiệp. <br>
                    Thiết kế: Đơn giản và thanh lịch, không có quá nhiều chi tiết phức tạp. Có một ngăn chính rộng rãi với nhiều túi nhỏ bên trong để sắp xếp đồ dùng một cách ngăn nắp. Ngoài ra, còn có một túi zip nhỏ phía trước cho những vật dụng cần tiện lợi. <br>
                    Tính năng: <br> <br>

                    Đa năng: Phù hợp cho nhiều hoạt động khác nhau, từ đi làm, đi học đến các chuyến du lịch ngắn ngày. <br>
                    Thoải mái: Dây đeo có thể điều chỉnh được, phù hợp với mọi kích thước cơ thể, giúp mang balo một cách thoải mái suốt cả ngày dài. <br>
                    An toàn: Ngăn chứa laptop riêng biệt, được đệm mạnh mẽ để bảo vệ thiết bị khỏi va đập và trầy xước. <br>
                    Phong cách: <br>

                    Hiện đại và thanh lịch: Balo này thể hiện sự tinh tế và sự chuyên nghiệp của người sử dụng, phù hợp với cả nam và nữ. <br>
                    Dễ dàng phối hợp: Màu sắc đen cổ điển và thiết kế đơn giản làm cho balo dễ dàng phối hợp với nhiều loại trang phục và phụ kiện khác nhau. <br>
                    Với những đặc điểm trên, chiếc balo này không chỉ là một công cụ hữu ích để chứa đựng các vật dụng cá nhân mà còn là một biểu tượng của sự phong cách và cá nhân. <br>







                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>

            </div>
        </div>
    </div>
    </div>
</section>


<?php
include 'particals/footer.php';
?>