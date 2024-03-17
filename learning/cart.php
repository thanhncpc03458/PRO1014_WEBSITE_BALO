<?php include ("particals/header.php");?>

<section class="cart py-5">
    <div class="container">
        <h1 class="title">
            Giỏ hàng
        </h1>
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="table-responsive">
                    <table class="table  caption-top">
                        <caption>Giỏ hàng</caption>
                        <thead>
                            <tr>
                                <th scope="col" colspan="3">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tạm tính</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                    </svg></td>
                                <td><img src="https://balosaigon.com/wp-content/uploads/2023/07/5.11-Tactical-Rush-100-768x768.jpg"
                                        width="50px" alt=""></td>
                                <td>5.11 Tactical Rush 100 - Đen</td>
                                <td><ins>2.350.000 </ins></td>
                                <td>
                                    <div class="input-group mb-3 soluong">
                                        <button class="btn btn-outline-secondary" type="button">-</button>
                                        <input type="number"  value="1" min="1" class="form-control tly" placeholder=""
                                            aria-label="Example text with two button addons">
                                        <button class="btn btn-outline-secondary" type="button">+</button>
                                    </div>
                                </td>
                                <td><ins>2.350.000 </ins></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-outline-info btn-lg"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg>Tiếp tục xem sản phẩm</button>
                    <button type="button" class="btn btn-primary btn-lg th">Cập nhật giỏ hàng</button>

                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" colspan="4">Cộng giỏ hàng</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">Tạm tính</th>
                            <td></td>
                            <td></td>
                            <td><ins>1.100.000đ</ins></td>
                        </tr>
                        <tr>
                            <th scope="row">Giao hàng</th>
                            <td>Nhập địa chỉ của bạn để xem các tùy chọn vận chuyển</td>
                            
                            <!-- <td>Nhập địa chỉ của bạn để xem các tùy chọn vận chuyển
                                <br><p class="d-inline-flex gap-1">
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Link with href
                                    </a>

                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        Some placeholder content for the collapse component. This panel is hidden by
                                        default but revealed when the user activates the relevant trigger.
                                    </div>
                                </div> -->
                            </td> <td>
                            </td>
                            <td><select class="form-select" aria-label="Default select example">
                                    <option selected>Việt Nam</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th scope="row">Tổng</th>
                            <td></td>
                            <td></td>
                            <td><ins>1.100.000đ</ins></td>
                        </tr>
                    </tbody>

                </table>
                <div class="d-grid gap-2">
                    <button class="btn btn-danger" type="button">Tiến hành thanh toán</button>
                </div>
                <div class="coupon">
                    <form>
                        <div class="mb-3">
                            <label for="widget" class="form-label">Phiếu ưu đãi</label>
                            <input type="email" class="form-control" id="widget" aria-describedby="emailHelp"
                                placeholder="Mã ưu đãi">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-danger">Áp dụng</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container">

    </div>
</section>


<?php include ("particals/footer.php"); ?>