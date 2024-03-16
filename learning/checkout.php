<?php
include 'particals/header.php';
?>
<section class="checkout py-5">
    <form action="" id="commentForm">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Thanh Toán</h1>
                <div class="col-12 col-lg-7 col-xl-6">


                    <div class="card">
                        <div class="card-header">
                            Thông Tin Giao Hàng
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Họ và Tên</label>
                            <input type="text" class="form-control" name="fullname" id="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                       
                    </div>

                </div>
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            Thông Tin Đơn Hàng
                        </div>
                        <div class="table-responsive">
                        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Ghi Chú</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
</div>


                            <table class="table">
                                <thead>
                                    <tr class="">
                                        <th scope="col" colspan="2">Sản Phẩm </th>

                                       
                                    </tr>
                                    <td scope="row">Điện thoại Iphone 20 Pro Max 256G</td>
                                        <td>70.000.000VNĐ</td>
                                </thead>
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Tổng Tiền </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row">Tạm Tính:</td>
                                        <td>70.000.000VNĐ</td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">Phí Vận Chuyển:</td>
                                        <td>50.000VNĐ</td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">VAT:</td>
                                        <td>7.000.000VNĐ(10%)
                                    </tr>
                                    <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Tổng: 77.500.000VNĐ </th>

                                    </tr>
                                </thead>
                                </tbody>


                            </table>
                        </div>
                        <input type="submit" class="submit btn btn-primary" name="submit" value="Thanh toán" id="submit">
                    </div>
                </div>
            </div>

        </div>
    </form>
</section>

<?php
include 'particals/footer.php';
?>