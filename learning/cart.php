<?php
include 'particals/header.php';
?>

<section class="cart py-5">

    <div class="container">
        <h1 class="title">
            Giỏ Hàng
        </h1>

        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8">
                <div class="table-reponsive">
                    <table class="table caption-top">
                        <caption>Giỏ Hàng</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col" colspan="3">Sản Phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Tạm Tính</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 10; $i++) :
                            ?>
                                <tr>
                                    <th scope="row"> <button class="btn rounded-circle btn-danger">Xóa</button> </th>
                                    <td  > <img src="../assets/images/balo1.jpg" alt="" width="50px"> </td>
                                    <td>Điện thoại Iphone 20 Pro Max 256G</td>
                                    <td></td>
                                    <td></td>
                                    <td>7.000.000VNĐ</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="number" value="1" min="1" class="form-control" placeholder="" aria-label="Example text with two button addons">
                                            <button class="btn btn-outline-secondary" type="button">+</button>

                                        </div>
                                    </td>
                                    <td>7.000.000VNĐ</td>
                                </tr>
                            <?php
                            endfor;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="table-responsive">
                    <table class="table">
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
                            
                        </tbody>
                        

                    </table>
                    <button class="btn btn-primary"> Thanh Toán</button>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include 'particals/footer.php';
?>