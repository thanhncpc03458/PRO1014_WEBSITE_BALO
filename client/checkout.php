<?php include 'particals/header.php'; ?>
    <div class="container-checkout">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>THÔNG TIN ĐẶT HÀNG</h2>
                    </div>
                    <div class="card-body">
                        <form id="commentForm" action="thanh_toan.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Họ và tên:</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                        <div class="invalid-feedback" id="name-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Số điện thoại:</label>
                                        <input type="text" id="phone" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="delivery-address">Địa chỉ:</label>
                                        <input type="text" id="delivery-address" name="delivery-address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Tỉnh/Thành phố:</label>
                                        <input type="text" id="city" name="city" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="district">Quận/Huyện:</label>
                                        <input type="text" id="district" name="district" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ward">Xã/Phường/Thị trấn:</label>
                                        <input type="text" id="ward" name="ward" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="promo-code">Mã ưu đãi:</label>
                                        <input type="text" id="promo-code" name="promo-code">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Ghi chú đơn hàng (tuỳ chọn):</label>
                                        <textarea id="note" name="note"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary">Áp dụng</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-summary">
                <h1>ĐƠN HÀNG CỦA BẠN</h1>
                <div class="order-details">
                    <table>
                        <tr>
                            <th>SẢN PHẨM</th>
                            <th>TẠM TÍNH</th>
                        </tr>
                        <tr>
                            <th>The North Face Commuter Pack Alt Carry × 1</th>
                            <th>549.000 VND</th>
                        </tr>
                        <tr>
                            <th>Tạm tính</th>
                            <th>549.000 VND</th>
                        </tr>
                        <tr>
                            <th>Giao hàng</th>
                            <th>Nhập địa chỉ của bạn để xem các tùy chọn vận chuyển</th>
                        </tr>
                        <tr>
                            <th>Tổng</th>
                            <th>549.000 VND</th>
                        </tr>
                    </table>
                </div>
                <div class="payment-methods">
                    <h2>Phương thức thanh toán</h2>
                    <p>Chuyển khoản ngân hàng:</p>
                    <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của
                        bạn trong phần Nội dung thanh toán. Đơn hàng sẽ được giao sau khi tiền đã chuyển.</p>
                    <p>Trả tiền mặt khi nhận hàng:</p>
                </div>
                <button type="submit" class="btn btn-secondary">Thanh toán</button>
            </div>
        </div>
    </div>
<?php include 'particals/footer.php'; ?>