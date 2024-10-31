<!DOCTYPE html>
<html>

<head>
    <title>CHO THUÊ XE TỰ LÁI ĐÀ NẴNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!--làm mờ header khi trượt xuống-->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) { // Điều chỉnh giá trị 50 cho khoảng cách cuộn phù hợp
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
    <!--button xem dòng xe khi kích vào sẽ trượt xuống-->
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.button-xem').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('.giaxe').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</head>

<body>
    <div>
        <div class="header">
            <div class="logo">
                <img src="image/logo-toan-cau-vang-moi.webp" alt="">
            </div>
            <ul class="menu">
                <li><a href="">Bảng Giá Xe Tự Lái</a>
                    <ul class="sub-menu">
                        <li><a href="">Thuê Xe 4 Chỗ Tự Lái</a></li>
                        <li><a href="">Thuê Xe 7 Chỗ Tự Lái</a></li>
                        <li><a href="">Thuê Xe Bán Tải Tự Lái</a></li>
                        <li><a href="">Thuê Xe 9 Chỗ Tự Lái</a></li>
                        <li><a href="">Thuê Xe 16 Chỗ Tự Lái</a></li>
                    </ul>
                </li>
                <li><a href="">Về Chúng Tôi</a>
                    <ul class="sub-menu">
                        <li><a href="">Hình Ảnh Khách Hàng</a></li>
                        <li><a href="">Tin Tức Công Ty</a></li>
                    </ul>
                </li>
                <li><a href="">Hỗ Trợ</a>
                    <ul class="sub-menu">
                        <li><a href="">Thủ Tục Thuê Xe</a></li>
                        <li><a href="">Hướng Dẫn Đặt Xe</a></li>
                    </ul>
                </li>
                <li><a href="">Dịch Vụ Khác</a>
                    <ul class="sub-menu">
                        <li><a href="">Thuê Xe Tự Lái Theo Tháng</a></li>
                        <li><a href="">Thuê Xe Cưới Hỏi</a></li>
                        <li><a href="">Thuê Xe Máy</a></li>
                        <li><a href="">Thuê Xe Du Lịch</a></li>
                        <li><a href="">Dịch Vụ Xe Đưa Đón Sân Bay</a></li>
                    </ul>
                </li>
                <li><a href="">Cẩm nang</a>
                    <ul class="sub-menu">
                        <li><a href="">Cẩm nang thuê xe</a></li>
                        <li><a href="">Cẩm nang du lịch Đà Nẵng</a></li>
                    </ul>
                </li>
                <li><a href="">Liên Hệ</a></li>
            </ul>
        </div>
        <div class="banner">
            <img src="image/banner-thue-xe-tu-lai-dn-1.webp" alt="">
            <div class="text-overlay">
                <p><strong><span style="color: #f99b1c;">Thuê Xe Tự Lái Toàn Cầu Vàng</span></strong></p>
                <h1><strong>Thuê Xe Tự Lái Đà Nẵng</strong></h1>
                <p>Nhanh chóng &#8211; Chuyên nghiệp &#8211; Tận tâm</p>
                <a href="" class="button-phone">
                    <span class="button-text">Thuê Xe Ngay</span>
                    <i class="fas fa-phone" aria-hidden="true"></i>
                </a>
                <a href="" class="button-xem" rel="nofollow" style="border-radius:20px;">
                    <span>Xem Dòng Xe</span>
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="text">
                <h2 style="text-align: center;">
                    <span style="color:#f99b1c"> Thuê Xe Tự Lái Toàn Cầu Vàng – Cho Thuê Xe Ô Tô Tự Lái Đà Nẵng Uy Tín</span>
                </h2>
                <div class="center">
                    <p style="text-align: justify;"><span style="color: #f99b1c;"><strong>Thuê Xe Tự Lái Toàn Cầu Vàng</strong></span> mang đến dịch vụ cho thuê xe tự lái tại Đà Nẵng với chất lượng và uy tín hàng đầu. Dù bạn cần một chiếc xe giá rẻ,
                        một chiếc SUV mạnh mẽ hay một chiếc xe hạng sang, chúng tôi luôn sẵn sàng đáp ứng. Toàn bộ xe đều là đời mới, sạch sẽ, trang bị đầy đủ tiện nghi như điều hòa, đảm bảo sự thoải mái tối đa trong mọi hành trình.</p>
                    <p style="text-align: justify;">Giá thuê chỉ từ <span style="color: #ed1c24;"><strong>600.000 VNĐ/ngày</strong></span>, đi kèm với thủ tục nhanh gọn, giúp bạn dễ dàng sở hữu chiếc xe mình cần trong thời gian ngắn nhất.</p>
                    <p style="text-align: justify;">Bạn có thể thuê xe theo ngày, theo tuần hoặc theo tháng, tùy vào nhu cầu cá nhân. Điều đặc biệt, Toàn Cầu Vàng là một trong số ít đơn vị tại Đà Nẵng cho phép <span style="color: #ed1c24;"><strong>thuê xe mà không cần đặt cọc</strong></span>, mang đến sự an tâm tuyệt đối cho khách hàng.</p>
                    <p style="text-align: justify;">Dịch vụ thuê xe du lịch tự lái của Toàn Cầu Vàng giúp bạn dễ dàng tham quan các địa điểm nổi tiếng tại Đà Nẵng như Bà Nà Hills, Ngũ Hành Sơn, Núi Thần Tài, Hội An và Sơn Trà. Chúng tôi cung cấp dịch vụ giao xe tận nơi, nhanh chóng và linh hoạt 24/7, đáp ứng mọi nhu cầu của khách hàng từ du lịch, thăm thân, công tác cho đến cưới hỏi.</p>

                </div>
            </div>
            <div class="center">
                <!-- Carousel Section với Flickity -->
                <section class="container my-5">
                    <div class="boder">
                        <h2><span>CHO THUÊ XE TỰ LÁI ĐÀ NẴNG THEO CHỔ</span></h2>
                    </div>
                    <!-- Slider Flickity -->
                    <div class="slider row-slider slider-nav-reveal" data-flickity='{ 
        "cellAlign": "center", 
        "wrapAround": true, 
        "autoPlay": 3000, 
        "prevNextButtons": true, 
        "pageDots": true 
    }'>

                        <!-- Post Item 1 -->
                        <div class="col post-item">
                            <div class="col-inner">
                                <div class="box box-push box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover">
                                            <a href="#" class="plain">
                                                <img src="image/thue-xe-oto-4-cho-tu-lai-da-nang.webp" alt="Thuê xe 16 chỗ tự lái Đà Nẵng">

                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large">
                                                <a href="#" class="plain">Thuê xe 4 chỗ tự lái</a>
                                            </h5>
                                            <div class="is-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Item 2 -->
                        <div class="col post-item">
                            <div class="col-inner">
                                <div class="box box-push box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover">
                                            <a href="#" class="plain">
                                                <img src="image/thue-xe-oto-7-cho-tu-lai-da-nang-1.webp" alt="Thuê xe 16 chỗ tự lái Đà Nẵng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large">
                                                <a href="#" class="plain">Thuê xe 7 chỗ tự lái</a>
                                            </h5>
                                            <div class="is-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Item 3 -->
                        <div class="col post-item">
                            <div class="col-inner">
                                <div class="box box-push box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover">
                                            <a href="#" class="plain">

                                                <img src="image/thue-xe-oto-16-cho-da-nang.webp" alt="Thuê xe 16 chỗ tự lái Đà Nẵng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large">
                                                <a href="#" class="plain">Thuê xe 16 chỗ tự lái</a>
                                            </h5>
                                            <div class="is-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Item 4 -->
                        <div class="col post-item">
                            <div class="col-inner">
                                <div class="box box-push box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                        <div class="image-cover">
                                            <a href="#" class="plain">
                                                <img src="image/thue-xe-oto-ban-tai-tu-lai-da-nang.webp" alt="Thuê xe 16 chỗ tự lái Đà Nẵng">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box-text text-center">
                                        <div class="box-text-inner blog-post-inner">
                                            <h5 class="post-title is-large">
                                                <a href="#" class="plain">Thuê xe bán tải tự lái</a>
                                            </h5>
                                            <div class="is-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
<div class="giaxe">
                <div class="boder">
                    <h2><span>BẢNG GIÁ CHO THUÊ XE TỰ LÁI ĐÀ NẴNG 2024</span></h2>
                </div>

                <div class="car-text">
                    <p><span style="font-weight: 400;">Quý khách vui lòng tham khảo <a href="#" style="color: blue;" class="car-text-blue">bảng giá thuê xe tự lái Đà Nẵng</a>
                            cập nhật năm 2024 dưới đây và liên hệ ngay đến Toàn Cầu Vàng để được tư vấn và hỗ trợ đặt xe nhanh chống nhé!
                        </span></p>
                </div>
                <div class="car-card-con">


                    <div class="car-card ">
                        <img src="image/thue-xe-tu-lai-Vinfast-LUX-SA2.0-Thue-Xe-Tu-Lai-Toan-Cau-Vang.webp" alt="Vinfast Lux A2.0" class="car-image">
                        <div class="car-info ">
                            <h3>VINFAST LUX A2.0</h3>
                            <ul>
                                <li><strong>Màu:</strong> Đỏ cam</li>
                                <li><strong>Số:</strong> Tự động</li>
                                <li><strong>Loại xe:</strong> 5 chỗ</li>
                                <li><strong>Đời xe:</strong> 2022</li>
                                <li><strong>Giá thuê ngày:</strong> 900.000 VND</li>
                                <li><strong>Thuê tháng:</strong> Thương lượng</li>
                            </ul>
                            <button class="car-card-button">THUÊ NHANH</button>
                        </div>
                    </div>
                    <div class="car-card ">
                        <img src="image/thue-xe-tu-lai-Toyota-Vios-Thue-Xe-Tu-Lai-Toan-Cau-Vang.webp" alt="Toyota vios" class="car-image">
                        <div class="car-info ">
                            <h3>TOYOTA VIOS</h3>
                            <ul>
                                <li><strong>Màu:</strong> Đỏ </li>
                                <li><strong>Số:</strong> Tự động</li>
                                <li><strong>Loại xe:</strong> 5 chỗ</li>
                                <li><strong>Đời xe:</strong> 2019</li>
                                <li><strong>Giá thuê ngày:</strong> 700.000 VND</li>
                                <li><strong>Thuê tháng:</strong> Thương lượng</li>
                            </ul>
                            <button class="car-card-button">THUÊ NHANH</button>
                        </div>
                    </div>
                    <div class="car-card ">
                        <img src="image/thue-xe-tu-lai-Mazda-3-mau-trang.webp" alt="Mazda 3" class="car-image">
                        <div class="car-info ">
                            <h3>MAZDA 3</h3>
                            <ul>
                                <li><strong>Màu:</strong> Trắng </li>
                                <li><strong>Số:</strong> Tự động</li>
                                <li><strong>Loại xe:</strong> 5 chỗ</li>
                                <li><strong>Đời xe:</strong> 2022</li>
                                <li><strong>Giá thuê ngày:</strong> 800.000 VND</li>
                                <li><strong>Thuê tháng:</strong> Thương lượng</li>
                            </ul>
                            <button class="car-card-button">THUÊ NHANH</button>
                        </div>
                    </div>
                    <div class="car-card ">
                        <img src="image/thue-xe-tu-lai-COROLLA-ALTIS.webp" alt="Toyota Corolla altis" class="car-image">
                        <div class="car-info ">
                            <h3>TOYOTA COROLLA ALTIS</h3>
                            <ul>
                                <li><strong>Màu:</strong> Đen </li>
                                <li><strong>Số:</strong> Tự động</li>
                                <li><strong>Loại xe:</strong> 5 chỗ</li>
                                <li><strong>Đời xe:</strong> 2019</li>
                                <li><strong>Giá thuê ngày:</strong> 800.000 VND</li>
                                <li><strong>Thuê tháng:</strong> Thương lượng</li>
                            </ul>
                            <button class="car-card-button">THUÊ NHANH</button>
                        </div>
                    </div>
                    <div class="car-card ">
                        <img src="image/thue-xe-mazda3-tu-lai-o-da-nang.webp" alt="Mazda 3 mới" class="car-image">
                        <div class="car-info ">
                            <h3>MAZDA 3 MỚI</h3>
                            <ul>
                                <li><strong>Màu:</strong> Xanh </li>
                                <li><strong>Số:</strong> Tự động</li>
                                <li><strong>Loại xe:</strong> 5 chỗ</li>
                                <li><strong>Đời xe:</strong> 2022</li>
                                <li><strong>Giá thuê ngày:</strong> 800.000 VND</li>
                                <li><strong>Thuê tháng:</strong> Thương lượng</li>
                            </ul>
                            <button class="car-card-button">THUÊ NHANH</button>
                        </div>
                    </div>
                    <div class="car-card ">
                        <img src="image/thue-xe-mercerdes-tu-lai-da-nang-1.webp" alt="Mercedes c200" class="car-image">
                        <div class="car-info ">
                            <h3>MERCEDES C200</h3>
                            <ul>
                                <li><strong>Màu:</strong> Trắng </li>
                                <li><strong>Số:</strong> Tự động</li>
                                <li><strong>Loại xe:</strong> 5 chỗ</li>
                                <li><strong>Đời xe:</strong> 2021</li>
                                <li><strong>Giá thuê ngày:</strong> 1.800.000 VND</li>
                                <li><strong>Thuê tháng:</strong> Thương lượng</li>
                            </ul>
                            <button class="car-card-button">THUÊ NHANH</button>
                        </div>
                    </div>
                    </div>


                </div>
                <div class="content-luu-y">
                    <p> <b>Lưu ý: </b><i style="color: red;">Chi phí thuê xe tự lái của cửa hàng chưa bao gồm (xăng, dầu),
                            các khoản phí như: Bảo hiểm, phí giao xe tận nơi ngoại thành, phí đường đi, phí VAT,.. và một số phụ phí có thể phát sinh khác.
                        </i></p>

                </div>
                <!-- QUY TRÌNH VÀ THỦ TỤC THUÊ XE-->
                <div class="boder">
                    <h2><span>QUY TRÌNH VÀ THỦ TỤC THUÊ XE TỰ LÁI ĐÀ NẴNG</span></h2>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="icon" style="text-align:center">
                                <img src="image/can-cac-cong-dan.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; color: #ed1c24;"><strong>1. Chuẩn bị giấy tờ cần thiết</strong></span></h3>
                            <div class="content-link">
                                <a href="#">
                                    <p>Bạn cần chuẩn bị sẵn CCCD và bằng lái xe hạng B1 trở lên để làm thủ tục thuê xe</p>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-3">
                            <div class="icon" style="text-align:center">
                                <img src="image/chon-xe-va-dia-diem-nhan.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; color: #ed1c24;"><strong>2. Chọn xe và thời gian thuê</strong></span></h3>

                            <p>Sau khi đáp ứng các điều kiện thuê, bạn tiến hành chọn xe và thời gian thuê xe</p>
                        </div>
                        <div class="col-sm-3">
                            <div class="icon" style="text-align:center">
                                <img src="image/ki-hop-dong-thue-xe.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; color: #ed1c24;"><strong>3. Kí hợp đồng và nhận xe</strong></span></h3>

                            <div class="content-link">
                                <a href="#">
                                    <p>Hai bên tiến hành kí hợp đồng thuê xe. Bạn nhận xe tại công ty hoặc giao xe tận nơi theo yêu cầu</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="icon" style="text-align:center">
                                <img src="image/tra-xe.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; color: #ed1c24;"><strong>4. Trả xe </strong></span></h3>

                            <p>Sau khi hết thời hạn thuê xe mà bạn không gia hạn thêm thì tiến hành trả xe theo hợp đồng</p>
                        </div>
                    </div>
                </div>
                <!--Tại sao nên chọn ...-->
                <div class="boder">
                    <h2><span>TẠI SAO NÊN CHỌN TOÀN CẦU VÀNG</span></h2>
                </div>
                <div class="content-why">
                    <p><b>Toàn Cầu Vàng - Đơn vị cho thuê xe tự lái tại Đà Nẵng uy tín.</b>
                        Chúng tôi cam kết mang đến cho khách hàng dịch vụ <b>chuyên nghiệp</b> và <b>chất lượng</b> cao nhất.
                        Với nỗ lực không ngừng, Toàn Cầu Vàng đã khẳng định vị thế dẫn đầu trên thị trường cho thuê xe tự lái ở Đà Nẵng.
                        Chúng tôi luôn đặt <b>uy tín và trải nghiệm khách hàng</b> lên hàng đầu,
                        đảm bảo mang đến cho bạn những hành trình hoàn hảo.
                        Bên cạnh đó, khi khách hàng sử dụng dịch vụ của Toàn Cầu Vàng sẽ nhận được những ưu đãi <b> ĐẶC BIỆT</b> sau đây:
                    </p>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="icon-why">
                                <img src="image/contact-form.png.webp" alt="" width="70px" height="70px">
                            </div>
                            <h3><span style="font-size: 20px; "><strong>THỦ TỤC THUÊ XE NHANH</strong></span></h3>

                            <p>Hoàn tất thủ tục thuê xe tại Toàn Cầu Vàng rất đơn giản chỉ trong vòng 1 phút.</p></a>


                        </div>
                        <div class="col-sm-4">
                            <div class="icon-why">
                                <img src="image/money.png.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px;"><strong>KHÔNG CẦN CỌC TRƯỚC</strong></span></h3>

                            <p>Thuê xe tự lái mà không cần đặt cọc trước, chỉ thanh toán sau khi trả xe.</p></a>


                        </div>
                        <div class="col-sm-4">
                            <div class="icon-why">
                                <img src="image/car.png.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; "><strong>GIAO XE TẬN NƠI KHÔNG TỐN PHÍ</strong></span></h3>

                            <p>Toàn Cầu Vàng hỗ trợ giao xe miễn phí tận nơi, đưa đón khách tại sân bay, khách sạn.</p></a>


                        </div>
                        <div class="col-sm-4">
                            <div class="icon-why">
                                <img src="image/privacy.png.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; "><strong>BẢO MẬT THÔNG TIN</strong></span></h3>

                            <p>Thông tin thuê xe chỉ có bạn và Toàn Cầu Vàng biết. Tuyệt đối không có 1 bên thứ 3 nào xâm phạm.</p></a>


                        </div>
                        <div class="col-sm-4">
                            <div class="icon-why">
                                <img src="image/traffic-signal.png.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; "><strong>KHÔNG GIỮ TÀI SẢN KHÁCH HÀNG</strong></span></h3>

                            <p>Toàn Cầu Vàng CAM KẾT không giữ bất kỳ tài sản nào của khách hàng./p></a>


                        </div>
                        <div class="col-sm-4">
                            <div class="icon-why">
                                <img src="image/car-service.png.webp" alt="" width="100px" height="100px">
                            </div>
                            <h3><span style="font-size: 20px; "><strong>VỆ SINH XE MIỄN PHÍ</strong></span></h3>

                            <p>Bất kể khi nào khách hàng cần rửa lại xe cho sạch đẹp thì hãy đến Toàn Cầu Vàng. Chúng tôi sẽ thực hiện nó hoàn toàn Free.</p></a>


                        </div>
                    </div>
                </div>

            </div>

        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Thông tin công ty -->
                    <div class="col-sm-3">
                        <div class="footer-logo">
                        <img src="image/logo-toan-cau-vang-moi.webp" alt="" >
                        </div>
                        <p><i>Thuê Xe Tự Lái Toàn Cầu Vàng là công ty cho thuê xe tự lái Đà Nẵng uy tín, giá rẻ, phục vụ tận tâm và chu đáo. Gọi ngay để được tư vấn!</i></p>
                        <p><strong>〉<span style="color: #f99b1c;">Công ty TNHH TMDV Toàn Cầu Vàng </span></strong></p>
                        
                        
                        <ul>
                            <li><strong>MST:</strong><a href="#"> 0401827781</a></li>
                            <li><strong>Hotline/Zalo:</strong><a href="#"> 0888.88.66.77</a></li>
                            <li><strong>Địa chỉ: </strong><a href="#">137 Lê Đình Lý, Bình Thuận, Thanh Khê, Đà Nẵng</a></li>
                            <li><strong>Email:</strong><a href="#"> toancauvang@gmai.com</a></li>
                            <li><strong>Giờ làm việc:</strong> 24h từ Thứ 2 - Chủ Nhật</li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-3">
                        <!-- Dịch vụ thuê xe -->
                        <h4>Dịch Vụ Thuê Xe Ô Tô Tự Lái</h4>
                        <ul>
                            <li><a href="#">Thuê xe theo tháng</a></li>
                            <li><a href="#">Thuê xe cưới hỏi</a></li>
                            <li><a href="#">Thuê xe du lịch</a></li>
                            <li><a href="#">Thuê xe máy</a></li>
                            <li><a href="#">Xe đưa đón sân bay</a></li>
                        </ul>
                        <!--Loại xe cho thuê-->
                        <h4>Loại Xe Cho Thuê</h4>
                        <ul>
                            <li><a href="#">Thuê xe 4 chổ tự lái </a></li>
                            <li><a href="#">Thuê xe 7 chổ tự lái</a></li>
                            <li><a href="#">Thuê xe 9 chổ tự lái</a></li>
                            <li><a href="#">Thuê xe bán tải tự lái</a></li>
                        </ul>

                    </div>
                    
                    
                    
                    <div class="col-sm-3">
    <!--Hỗ trợ khách hàng-->
                        <h4>Hỗ Trợ Khách Hàng</h4>
                        <ul>
                            <li><a href="#">Thử tục thuê xe</a></li>
                            <li><a href="#">Hướng dẫn đặt xe</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                        <!--Chính sách-->
                        <h4>Chính sách</h4>
                        <ul>
                            <li><a href="#">Chính sách khách hàng thân thiết</a> </li>
                            <li><a href="#">Chính sách dịch vụ</a> </li>
                            <li><a href="#">Chính sách bảo mật thông tin</a></li>
                            <li><a href="#">Chính sách cookies</a></li>
                            <li><a href="#">Chính sách miễn trừ</a></li>
                            <li><a href="#">Điều khoản sử dụng</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-3">
                        <!-- google map-->
                        <h4>Google Map</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.9537353156167!3d-37.81627974202133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xfb1a2a1ef87a4cb!2sTo%C3%A0n%20C%E1%BA%A7u%20V%C3%A0ng!5e0!3m2!1sen!2s!4v1600241971020!5m2!1sen!2s"
                            width="100%"
                            height="150"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <!--Thông tin và bảo vệ -->
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="#">Giới thiệu</a> </li>
                            <li><a href="#">Liên hệ</a> </li>
                            <li><a href="#">CEO</a></li>

                        </ul>
                    </div>
                    
                    

                </div>
                 <!-- Copyright -->
    <div class="footer-bottom">
      <p>Copyright 2024 © thuexetulaidanang.com - Design by Thuê Xe Tự Lái Toàn Cầu Vàng</p>
    </div>
            </div>

        </footer>
    </div>
</body>

</html>
<!-- phím tắt chỉnh bố cục code "shift alt f"-->