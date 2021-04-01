<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./owl/dist/assets/owl.carousel.min.css"> -->
    <link rel="stylesheet" href="{!! asset('detail/owl/dist/assets/owl.carousel.min.css') !!}">

    <!-- <link rel="stylesheet" href="./fonts/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="{!! asset('detail/fonts/fontawesome/css/all.min.css') !!}">

    <!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{!! asset('detail/bootstrap/css/bootstrap.min.css') !!}">

    <!-- <link rel="stylesheet" href="./fonts/fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="{!! asset('detail/fonts/fontawesome/css/all.min.css') !!}">

    <!-- <link rel="stylesheet" href="./css.css"> -->
    <link rel="stylesheet" href="{!! asset('detail/css.css') !!}">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- <link rel="stylesheet" href="{!! asset('plugins/css.css') !!}"> -->

    <!-- Place favicon.ico in the root directory -->
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

</head>
<body>
    <header class="" >
        <div  id="top-bar" class="container-fluid" >
            <div class="row">
                <div class="col-6 top-bar-left">
                    <ul class="list-inline ">
                        <li class="">
                            <i class="fas fa-phone text-light"></i>
                            Hotline:
                            <a href="tel:0868676687">0868676687</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 top-bar-right ">
                    <ul class="list-inline  float-right">
                        <li class="list-inline-item">
                            <a href="#">Cách chọn Size</a>
                        </li>
                        <li class="list-inline-item ">
                            <a href="#">Giới thiệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end top bar -->

            <div id="menu" class="container-fluid ">
                <div class="row">
                    <div class="col-3 col-md-2 logo">
                        <a href="index.html"><img src="./img/logo.png" alt=""></a>
                    </div>
                    <div class="col-md-9 hidden-sm hidden-xs">
                        <nav class="hidden-sm hidden-xs">
                            <ul id="nav" class="nav">
                                <li class="nav-item active"><a class="nav-link" href="/">TRANG CHỦ</a></li>
                                <li class="nav-item ">
                                    <a href="/collections/all" class="nav-link">PHÒNG NGỦ <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>			
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="/giuong-ngu">Giường ngủ <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/giuong-ngu-go-cong-nghiep">Giường ngủ gỗ công nghiệp</a>
                                                </li>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/giuong-go-tu-nhien">Giường gỗ tự nhiên</a>
                                                </li>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/giuong-tan-co-dien">Giường tân cổ điển</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/tu-dau-giuong">Tủ đầu giường</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ban-trang-diem">Bàn trang điểm</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/tu-quan-ao">Tủ quần áo</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/bo-phong-ngu">Bộ phòng ngủ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="/collections/all" class="nav-link">PHÒNG KHÁCH <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>			
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a class="nav-link" href="/sofa">Sofa <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/sofa-vang">Sofa văng</a>
                                                </li>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/sofa-goc">Sofa góc</a>
                                                </li>
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/sofa-giuong">Sofa giường</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ban-tra-sofa">Bàn trà sofa</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ke-tivi">Kệ tivi</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ke-trang-tri">Kệ trang trí</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/tu-giay">Tủ giầy</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="/collections/all" class="nav-link">PHÒNG BẾP <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>			
                                    <ul class="dropdown-menu">
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/bo-ban-ghe-an">Bộ bàn ghế ăn</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/tu-bep">Tủ bếp</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/tu-ruou">Tủ rượu</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="/collections/all" class="nav-link">PHÒNG LÀM VIỆC <i class="fa fa-angle-right" data-toggle="dropdown"></i></a>			
                                    <ul class="dropdown-menu">
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ban-van-phong">Bàn làm việc</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ke-sach">kệ sách</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/tu-tai-lieu">Tủ tài liệu</a>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a class="nav-link" href="/ghe-van-phong">Ghế</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item "><a class="nav-link" href="/anh-ban-giao-khach-hang">TƯ VẤN THIẾT KẾ</a></li>
                                <li class="nav-item "><a class="nav-link" href="/lien-he">LIÊN HỆ</a></li>
                            </ul>
                            
                        </nav>
                    </div>
                    <div class="col-1 col-md-1">
                        <div class="market-right float-right ">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="fas fa-search"></i>
                            <i class="fas fa-bars"></i>
                            <form action="" class="form-search">
                                <input type="text" placeholder="Tìm kiếm">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
<!-- end header -->

<!-- breadcrumb -->
    <section id="breadcrumb">
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline list-breadcrumb">
                        <li class="list-inline-item">
                            <a href="">Trang chủ</a>
                            <span class="span-brc">>></span>
                        </li>
                        <li class="list-inline-item">
                            <a href="">Category</a>
                            <span class="span-brc">>></span>
                        </li>
                        <li class="list-inline-item">
                            <a href="">Title product</a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
    </section>
<!-- end breadcrumb -->

<!-- summary-product -->
    <section id="summary-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="slide-top ">
                        <div class="product-img-item bg-width">
                            <img src="./img/1.jpeg" alt="">
                        </div>
                        <div class="product-img-item  bg-width">
                            <img src="./img/2.jpeg" alt="">
                        </div>
                        <div class="product-img-item  bg-width">
                            <img src="./img/3.jpeg" alt="">
                        </div>
                        <div class="product-img-item  bg-width">
                            <img src="./img/4.jpeg" alt="">
                        </div>
                        
                        <div class="owl-controls" style="display:none">
                            <i  class="fa fa-chevron-left"></i>
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="slide-bottom" style="padding-left: 10px;">
                        <div class="row">
                            <div class="col-3 thumb-img-item active">
                                <img src="./img/1.jpeg" alt="">
                            </div>
                            <div class="col-3 thumb-img-item">
                                <img src="./img/2.jpeg" alt="">
                            </div>
                            <div class="col-3 thumb-img-item">
                                <img src="./img/3.jpeg" alt="">
                            </div>
                            <div class="col-3 thumb-img-item">
                                <img src="./img/4.jpeg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <h5 class="product-single-title">
                        Ghế Văn Phòng
                    </h5>
                    <p class="product-single-price">
                        <span class="span-underline">
                            Giá bán: 
                        </span>
                        <span class="span-price-red">
                            499.000đ
                        </span>
                    </p>
                    <p class="product-single-stock">
                        <span class="span-underline">
                            Tình trạng: 
                        </span>
                        <span >
                            Còn hàng
                        </span>
                    </p>
                    <p class="product-category">
                        <span class="span-underline">
                            Danh mục: 
                        </span>
                        <span class="span-category-red">
                           Ghế Văn Phòng
                        </span>
                    </p>
                    <p class="">
                        <span class="span-underline">
                            Mô tả ngắn 
                        </span>
                    </p>
                    <p class="product-short-description"></p>
                        <p>Bàn làm việc của Xuân Hòa có rất nhiều mẫu mã cho bạn lựa chọn, một cách để tìm mua được một chiếc bàn phù hợp là bạn có thể đặt nó vào tổng thể không gian nội thất văn phòng và điều này sẽ giúp bạn lựa chọn được chiếc bàn phù hợp cho công việc. Một chiếc bàn phù hợp điều đầu tiên là nó phải hài hòa với không gian. Bàn văn phòng BVP-4S-10 là một chiếc bàn như vậy. Nó có màu sắc trang nhã, kiểu dáng hiện đại dù không quá ấn tượng nhưng lại dễ kết hợp và tạo cảm giác thoáng cho văn phòng.</p>
                    
                   

                    <div class="color-filter single-pro-color mb-20 clearfix">
                       <ul>
                            <p class="">Chọn màu: </p></li>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                <label class="btn btn-outline-secondary" for="btnradio1">Xanh </label>
                              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio2">Vàng</label>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio3">Đen</label>
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio4">Đỏ</label>
                              
                              </div>
                            </ul>
                        
                    </div>
                    <div class="border">
                    </div>
                    <div class="size-filter single-pro-size mb-35 clearfix">
                        <ul>
                            
                            <li><span class="color-title text-capitalize">Kích Cỡ :</span></li>
                      
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1"><h2>M</h2></label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2"><h2>L</h2></label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                <label class="form-check-label" for="inlineRadio3"><h2>XL</h2></label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" >
                                <label class="form-check-label" for="inlineRadio4"><h2>2XL</h2></label>
                              </div>
                              
                        </ul>
                    </div>
                  
                    <div class="row row-submit">
                        <div class="col-12 border-ccc">
                            <hr>
                        </div>
                        <div class="col-12 col-md-3">
                            <button class="button-buy">
                                <i class="fas fa-shopping-cart"></i>
                                ĐĂNG KÝ MUA
                            </button>
                        </div>
                        <div class="col-12 col-md-9 position-relative">
                            <p class="position-absolute"> <a href="" id="addToCart">+ Thêm vào giỏ hàng </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end -->

<!-- tabpanel -->
    <section id="product-tabpanel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline product-ul-tabpanel ">
                        <li class="list-inline-item product-li-tabpanel active">
                            <a href="javascript::void(0)">Mô tả sản phẩm</a>
                            
                        </li>
                        <li class="list-inline-item product-li-tabpanel">
                            <a href="javascript::void(0)">Đánh giá</a>
                            
                        </li>
                        <li class="list-inline-item product-li-tabpanel">
                            <a href="javascript::void(0)">Bình luận</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tabpanel-item active">
                            <span>BÀN LÀM VIỆC VĂN PHÒNG BVP-4S-10.</span>

                           
                            Thông số sản phẩm:
                            <p> + Màu sắc: màu H2102 gỗ sáng </p>
                            <p> + Kích thước: Rộng 1400 x Sâu 700 x Cao 750 mm</p>
                            <p>+ Chất liệu: Gỗ công nghiệp MFC dày 25mm</p>

                           

                           
                           
                            
                        </p>
                            Mô tả sản phẩm:
                            
                            Bàn làm việc văn phòng là nơi bạn dành phần lớn thời gian của bạn ở nơi làm việc, việc lựa chọn được chiếc bàn làm việc ưng ý là không hề dễ. Bên cạnh đó, bàn làm việc còn có chức năng tô điểm cho không gian văn phòng, 1 chiếc bàn làm việc phù hợp giúp tao sự cân bằng trong nơi làm việc của bạn.
                            <p>– Bàn văn phòng BVP-4S-10 làm bằng gỗ MFC màu vân gỗ sáng H2102 cao cấp,các đường vân gỗ mang lại sự tự nhiên và mới mẻ tạo thiện cảm cho người ngồi đặc biệt là với nhân viên văn phòng người cần phải giữ tinh thần thoải mái để có hiệu suất làm việc tốt nhất.
                            </p>
                            <p>– Bàn nhân viên BVP-4S-10 có kích thước khá rộng nên với chỉ một người ngồi thì bàn có thể để được nhiều giấy tờ, cũng như máy tính để thuận tiện làm việc mà vẫn có sự ngăn nắp.
                            </p>
                            <p>– Bàn có yếm lửng che chắn tế nhị, 2 bên cạnh bàn là 2 cánh lớn kìn tạo cho bàn chắc chắn hơn rất nhiều. Giữa mặt bàn và chân bàn có sử dụng ke thép tạo thành khe hở giúp bàn có độ thoáng nhất định, các ke thép có màu đối lập với màu gỗ tạo nên điểm nhấn bắt mắt cho người nhìn. Phía dưới chân bàn văn phòng Xuân Hòa BVP-4S-10 có đế nhỏ đỡ bàn và dễ dàng cố định trên sàn, giảm ma sát giữa bàn và sàn phòng.
                            </p>
                            
                            
                            
                            Mách bạn: 
                            Với những tính năng và thiết kế như vậy, bàn văn phòng BVP-4S-10 có thể mang lại cho bạn sự hài lòng, nó rất tiện lại dễ kết hợp, dễ dàng dung hòa màu sắc tạo cảm giác thoải mái thoáng đãng. Đi kèm với bàn bạn có thể kết hợp thêm hộc di dộng, ghế lưới, ghế xoay để có thể làm việc một cách thuận tiện nhất.
                            
                            Bộ sản phẩm Nội Thất Xuân Hòa chính hãng gồm:
                            – Sản phẩm đi kèm với hướng dẫn lắp đặt, sử dụng.
                            – Phiếu bảo hành, tem chống hàng giả trên sản phẩm.
                            
                            CHÍNH SÁCH BẢO HÀNH:
                            <p>– Chúng tôi chịu trách nhiệm trước khách hàng về chất lượng và việc bảo hành cho người tiêu dùng.
                            </p>
                            <p>– Có ưu đãi đặc biệt với khách hàng quen thuộc.
                            </p>
                            <p> – Bảo hành tại nhà 1 năm, trả lại hàng sau 24h.
                            </p>
                            <p>  Ghi chú:</p>
                          

                            
                            
                           
                            Thương hiệu: Sản phẩm được phân phối bởi công ty Cổ phần Xuân Hòa.
                            
                          
                            – Gỗ MFC màu ghi: sử dụng mã màu 202.
                            – Gỗ MFC màu vân gỗ: sử dụng các mã màu 324, 325, 384, H2102.
                            – Giá bàn hoàn chỉnh không tính bằng phương pháp cộng giá khung và giá mặt gỗ.
                            – Khách hàng đặt sản phẩm sử dụng gỗ có mã màu khác: Công ty sẽ có báo giá riêng.
                        </div>
                        <div class="tabpanel-item text-center">
                            <form action="">
                                <p>Đánh giá của bạn</p>
                                <input type="radio" name="gender" value="male"> <i class="fas fa-star"></i><br>
                                <input type="radio" name="gender" value="female"> <i class="fas fa-star"></i><i class="fas fa-star"></i><br>
                                <input type="radio" name="gender" value="other"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>  
                                <input type="radio" name="gender" value="other"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>  
                                <input type="radio" name="gender" value="other"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>  
                                <button class="btn-danhgia">Gửi đánh giá</button>
                            </form>
                        </div>
                        <div class="tabpanel-item binhluan">

                        </div>
                    </div>
                    <p class="p-product-related">
                        <span>SẢN PHẨM CÙNG DANH MỤC</span>
                    </p>
                    <div id="carousel" class="owl-carousel">
                        <div class="item">
                            <div class="product-item text-center">
                                <div class="item-thumb">
                                    <img class=""  src="./img/a1.jpeg" alt="">
                                    <a href="">
                                        <i class="fas fa-shopping-cart product-item-cart"></i>
                                    </a>
                                </div>
                                <h4 class="product-title">
                                    <a href="#" title="Ghế xoay lưới GXL02 – có tựa đầu 7262">
                                        Ghế xoay lưới GXL02 – có tựa đầu 7262
                                    </a>
                                </h4>
                                <span class="product-price"> 670.000 đ</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item text-center">
                                <div class="item-thumb">
                                    <img class=""  src="./img/a2.jpeg" alt="">
                                    <a href="">
                                        <i class="fas fa-shopping-cart product-item-cart"></i>
                                    </a>
                                </div>
                                <h4 class="product-title">
                                    <a href="#" title="Ghế chân quỳ lưng lưới 7618">
                                        Ghế chân quỳ lưng lưới 7618
                                    </a>
                                </h4>
                                <span class="product-price"> 229.000 đ</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item text-center">
                                <div class="item-thumb">
                                    <img class=""  src="./img/a3.jpeg" alt="">
                                    <a href="">
                                        <i class="fas fa-shopping-cart product-item-cart"></i>
                                    </a>
                                </div>
                                <h4 class="product-title">
                                    <a href="#" title="Ghế giám đốc 10851">
                                        Ghế giám đốc 10851
                                    </a>
                                </h4>
                                <span class="product-price"> 123.000 đ</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item text-center">
                                <div class="item-thumb">
                                    <img class=""  src="./img/a4.jpeg" alt="">
                                    <a href="">
                                        <i class="fas fa-shopping-cart product-item-cart"></i>
                                    </a>
                                </div>
                                <h4 class="product-title">
                                    <a href="#" title="Ghế Giám Đốc Ngả 175 Độ">
                                        Ghế Giám Đốc Ngả 175 Độ
                                    </a>
                                </h4>
                                <span class="product-price"> 999.000 đ</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item text-center">
                                <div class="item-thumb">
                                    <img class=""  src="./img/a2.jpeg" alt="">
                                    <a href="">
                                        <i class="fas fa-shopping-cart product-item-cart"></i>
                                    </a>
                                </div>
                                <h4 class="product-title">
                                    <a href="#" title="Áo Khoác Kaki Rêu AK260">
                                        Áo Khoác Kaki Rêu AK260
                                    </a>
                                </h4>
                                <span class="product-price"> 425.000 </span>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>  
<!-- end tabpanel -->

<!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 widget-footer">
                    <img src="./img/logo-footer.png" alt="">
                    <p>THƯƠNG HIỆU NỘI THẤT VIỆT NAM</p>
                    <ul class="list-footer-contact">
                        <li>
                            <i class="far fa-envelope"></i>
                            Email :
                            <a href="">son@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            Hotline :
                            <a href="">0868676687</a>
                        </li>
                    </ul>  
                    <a href="" class="contact-mail"><i class="fab fa-facebook-f"></i></a>
                    <a href="" class="contact-mail"><i class="fas fa-envelope"></i></a>
                </div>
                <div class="col-md-3 widget-footer">
                    <h5>TRỢ GIÚP & TƯ VẤN</h5>
                    <ul class="menu-footer">
                        <li class="">
                            <a href=""><i class="fas fa-angle-double-right"></i> Liên hệ</a>
                        </li>
                        <li class="">
                            <a href=""><i class="fas fa-angle-double-right"></i> Bản đồ</a>
                        </li>
                        <li class="">
                            <a href=""><i class="fas fa-angle-double-right"></i> Cách chọn size quần áo</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 widget-footer">
                    <h5>THƯ BÁO</h5>
                    <p>Đăng ký nhận email khuyến mãi</p>
                    <form action="">
                        <input type="text" placeholder="Email của bạn">
                        <button>ĐĂNG KÝ</button>
                    </form>
                </div>
                <div class="col-md-3 widget-footer">
                    <h5>FACEBOOK</h5>
                </div>
            </div>
        </div>
    </footer>
        
<!-- end footer -->
    <!-- <script src="./jquery.min.js"></script> -->
<script src="{!! asset('detail/js/jquery.min.js') !!}"></script>

    <!-- <script src="./owl/dist/owl.carousel.min.js"></script> -->
<script src="{!! asset('detail/owl/dist/owl.carousel.min.js') !!}"></script>

    <!-- <script src="./main.js"></script> -->
<script src="{!! asset('detail/js/main.js') !!}"></script>

</body>
</html>