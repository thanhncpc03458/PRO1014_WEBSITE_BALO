</main>
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                    <li><a href="">Tích điểm</a></li>
                    <li><a href="">Quà tặng</a></li>
                    <li><a href="">Lịch sử mua hàng</a></li>
                    <li><a href="">Chính sách bảo hành</a></li>
                    <li><a href="">Xem thêm</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                    <li><a href="">Tích điểm</a></li>
                    <li><a href="">Quà tặng</a></li>
                    <li><a href="">Lịch sử mua hàng</a></li>
                    <li><a href="">Chính sách bảo hành</a></li>
                    <li><a href="">Xem thêm</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.099256655871!2d105.72256447407683!3d9.92569127431091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08b451d4ecc4d%3A0xb91015721d18e909!2sFPT%20Shop!5e0!3m2!1svi!2s!4v1709816513523!5m2!1svi!2s" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <ul class="menu-footer">
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#commentForm').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                'delivery-address': {
                    required: true
                },
                city: {
                    required: true
                },
                district: {
                    required: true
                },
                ward: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Vui lòng nhập họ và tên'
                },
                email: {
                    required: 'Vui lòng nhập địa chỉ email',
                    email: 'Vui lòng nhập đúng định dạng email'
                },
                phone: {
                    required: 'Vui lòng nhập số điện thoại'
                },
                'delivery-address': {
                    required: 'Vui lòng nhập địa chỉ'
                },
                city: {
                    required: 'Vui lòng nhập tỉnh/thành phố'
                },
                district: {
                    required: 'Vui lòng nhập quận/huyện'
                },
                ward: {
                    required: 'Vui lòng nhập xã/phường/thị trấn'
                }
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.insertAfter(element);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid').addClass('is-valid');
            }
        });
    });
</script>
</body>
</html>