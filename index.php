<!doctype html>
<html lang="en">
<meta charset="utf-8">
<title>Shop Nam Hòa</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="./assets/css/base.css">
<link rel="stylesheet" href="./assets/css/main.css">
<link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">	
<link href="https://fonts.googleapis.com/css?family=Roboto:wght@300;400;500;700&display=swap&subset=vietnamese" rel="stylesheet">
</head>
	
<body>
    <!--Block Element Modifier-->
	<div class="app">
		<header class="header">
			<div class="grid">
				<nav class="header__navbar">
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
							Vào cửa hàng trên ứng dụng NamHoaShop
							
							<!--Header QR Code-->
							<div class="header__qr">
								<img src="./assets/img/qr_code.png" alt="QR code" class="header__qr-img">
								<div class="header__qr-apps">
									<a href="" class="header__qr-link">
									<img src="./assets/img/chplay.png" alt="Google Play" class="header__qr-download-img">
									</a>
									<a href="" class="header__qr-link">
									<img src="./assets/img/appstore.png" alt="App Store" class="header__qr-download-img">
									</a>	
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<span class="header__navbar-title--no-pointer">Kết nối</span>
							<a href="" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-facebook"></i>
							</a>
							<a href="" class="header__navbar-icon-link">
								<i class="header__navbar-icon fab fa-instagram"></i>
							</a>
						</li>
					</ul>
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item--has-notify">
							<a href="" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-bell"></i>
								Thông báo
							</a>
							<div class="header__notify">
								<header class="header__notify-header">
									<h3>Thông báo mới nhận</h3>
								</header>
								<ul class="header__notify-list">
									<li class="header__notify-iteam header__notify-iteam--viewed">
										<a href="" class="header__notify-link">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgyvC-QLEMScB1P2Sz3FtCzQ3VjqH1N20igg&usqp=CAU" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
												<span class="header__notify-descriotion">Mô tả mỹ phẩm Ohui chính hãng</span>
											</div>
										</a>
									</li>
									<li class="header__notify-iteam">
										<a href="" class="header__notify-link">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgyvC-QLEMScB1P2Sz3FtCzQ3VjqH1N20igg&usqp=CAU" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
												<span class="header__notify-descriotion">Mô tả mỹ phẩm Ohui chính hãng</span>
											</div>
										</a>
									</li>
									<li class="header__notify-iteam">
										<a href="" class="header__notify-link">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgyvC-QLEMScB1P2Sz3FtCzQ3VjqH1N20igg&usqp=CAU" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
												<span class="header__notify-descriotion">Mô tả mỹ phẩm Ohui chính hãng</span>
											</div>
										</a>
									</li>
									<li class="header__notify-iteam">
										<a href="" class="header__notify-link">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgyvC-QLEMScB1P2Sz3FtCzQ3VjqH1N20igg&usqp=CAU" alt="" class="header__notify-img">
											<div class="header__notify-info">
												<span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
												<span class="header__notify-descriotion">Mô tả mỹ phẩm Ohui chính hãng</span>
											</div>
										</a>
									</li>	
								</ul>
								<footer class="header__notify-footer">
									<a href="" class="header__notify-footer-btn">Xem tất cả</a>
								</footer>
							</div>
						</li>
						<li class="header__navbar-item">
							<a href="" class="header__navbar-item-link">
								<i class="header__navbar-icon far fa-question-circle"></i>
								Trợ giúp
							</a>
						</li>
<!--
						<li class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</li>
						<li class="header__navbar-item header__navbar-item--strong">Đăng nhập</li>
-->
						<li class="header__navbar-item header__navbar-user">
							<img src="https://yt3.ggpht.com/yti/APfAmoG6pU4Yl3IOAFfrxRl0pQ_SqMsQwNGl62K5dD1UPnw=s88-c-k-c0x00ffffff-no-rj-mo" alt="" class="header__navbar-user-img">
							<span class="header__navbar-user-name">Nam Hoà</span>
							
							<ul class="header__navbar-user-menu">
								<li class="header__navbar-user-item">
									<a href="">Tài khoản của tôi</a>
								</li>
								<li class="header__navbar-user-item">
									<a href="">Địa chỉ của tôi</a>
								</li>
								<li class="header__navbar-user-item">
									<a href="">Đơn mua</a>
								</li>
								<li class="header__navbar-user-item header__navbar-user-item--separate">
									<a href="">Đăng xuất</a>
								</li>
							</ul>
							
						</li>
					</ul>
				</nav>
				
                <!--Header with search-->
				<div class="header-with-search">
					<div class="header__logo">
						<a href="/BTL%20Web/Shoppe/" class="header__logo-link">
							<img src="./assets/img/LOGO.jpg" alt="" class="header__logo-img">
						</a>
					</div>
					<div class="header__search">
						<div class="header__search-input-wrap">
							<input type="text" class="header__search-input" placeholder="Nhập để tìm kiếm sản phẩm">
							
<!--							Search history-->
							<div class="header__search-history">
								<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
								<ul class="header__search-history-list">
									<li class="header__search-history-item">
										<a href="">Kem dưỡng da</a>
									</li>
									<li class="header__search-history-item">
										<a href="">Sữa tắm</a>
									</li>
									<li class="header__search-history-item">
										<a href="">Iphone 13 pro max</a>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="header__search-select">
							<span class="header__search-select-label">Trong shop</span>
							<i class="header__search-select-icon fas fa-chevron-down"></i>
							
							<ul class="header__search-option">
								<li class="header__search-option-item header__search-option-item--active">
									<span>Trong shop</span>
									<i class="fas fa-check"></i>
								</li>
								<li class="header__search-option-item">
									<span>Ngoài shop</span>
									<i class="fas fa-check"></i>
								</li>
							</ul>
						</div>
						<button class="header__search-btn">
							<i class="header__search-btn-icon fas fa-search"></i>
						</button>
					</div>
					
					<!--Cart Layout-->
					<div class="header__cart">
							<div class="header__cart-wrap">
								<i class="header__cart-icon fas fa-shopping-cart"></i>
								<span class="header__cart-notice">3</span>
								
								<!--No cart: header__cart-list--no-cart-->
								<div class="header__cart-list">
									<img src="./assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
									<span class="header__cart-list-no-cart-msg">
										Chưa có sản phẩm
									</span>
									
								<h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
								<ul class="header__cart-list-item">
									
                                   <!--Cart item -->
									<li class="header__cart-item">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa811NtITn4N-GMUrQGzqEGa2eYoQcLgtlxA&usqp=CAU" alt="" class="header__cart-img">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<h5 class="header__cart-item-name">Iphone 13 pro max 1TB</h5>
												<div class="header__cart-item-price-wrap">
													<span class="header__cart-item-price">49.999.000đ</span>
													<span class="header__cart-item-multiply">x</span>
													<span class="header__cart-item-qnt">2</span>
												</div>
											</div>
											<div class="header__cart-item-body">
												<span class="header__cart-item-description">
													Phân loại: blue
												</span>
												<span class="header__cart-item-remove">Xóa</span>
											</div>
										</div>
									</li>	
									<li class="header__cart-item">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa811NtITn4N-GMUrQGzqEGa2eYoQcLgtlxA&usqp=CAU" alt="" class="header__cart-img">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<h5 class="header__cart-item-name">Iphone 13 pro max 1TB</h5>
												<div class="header__cart-item-price-wrap">
													<span class="header__cart-item-price">49.999.000đ</span>
													<span class="header__cart-item-multiply">x</span>
													<span class="header__cart-item-qnt">2</span>
												</div>
											</div>
											<div class="header__cart-item-body">
												<span class="header__cart-item-description">
													Phân loại: blue
												</span>
												<span class="header__cart-item-remove">Xóa</span>
											</div>
										</div>
									</li>	
									<li class="header__cart-item">
										<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa811NtITn4N-GMUrQGzqEGa2eYoQcLgtlxA&usqp=CAU" alt="" class="header__cart-img">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<h5 class="header__cart-item-name">Iphone 13 pro max 1TB</h5>
												<div class="header__cart-item-price-wrap">
													<span class="header__cart-item-price">49.999.000đ</span>
													<span class="header__cart-item-multiply">x</span>
													<span class="header__cart-item-qnt">2</span>
												</div>
											</div>
											<div class="header__cart-item-body">
												<span class="header__cart-item-description">
													Phân loại: blue
												</span>
												<span class="header__cart-item-remove">Xóa</span>
											</div>
										</div>
									</li>	
								</ul>	
									
								<button class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</button>	
							</div>
						</div>				
					</div>
				</div>
			</div>
		</header>
	
		<div class="app__container">
			<div class="grid">
				<div class="grid__row app__content">
					<div class="grid__column-2">
						<nav class="category">
							<h3 class="category__heading">
								<i class="category__heading-icon fas fa-list"></i>
									Danh mục
							</h3>
				
							<ul class="category-list">
								<li class="category-item category-item--active">
									<a href="#" class="category-item__link">Đồ điện tử</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Đồ điện tử</a>
								</li>
								<li class="category-item">
									<a href="#" class="category-item__link">Đồ điện tử</a>
								</li>
							</ul>
						</nav>
					</div>
				
					<div class="grid__column-10">
						<div class="hom-filter">
								<span class="home-filter__label">Sắp xếp theo</span>
								<button class="home-filter__btn btn">Phổ biến</button>
								<button class="home-filter__btn btn btn--primary">Mới nhất</button>
								<button class="home-filter__btn btn">Bán chạy</button>

								<div class="select-input">
									<span class="select-input__label">Giá</span>
									<i class="select-input__icon fas fa-chevron-down"></i>

									<!--List options-->
									<ul class="select-input__list">
										<li class="select-input__item">
											<a href="" class="select-input__link">Giá: Thấp đến cao</a>
										</li>
										<li class="select-input__item">
											<a href="" class="select-input__link">Giá: Cao đến thấp</a>
										</li>
									</ul>
								</div>

								<div class="home-filter__page">
									<span class="home-filter__page-num">
										<span class="home-filter__page-current">1</span>/14
									</span>

									<div class="home-filter__page-control">
										<a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
											<i class="home-filter__page-icon fas fa-chevron-left"></i>
										</a>
										<a href="" class="home-filter__page-btn">
											<i class="home-filter__page-icon fas fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
						
						<div class="home-product">
							<div class="grid__row">
								<!--Product item-->
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div><div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div><div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div><div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								<div class="grid__column-2-4">	
										<a class="home-product-item" href="#">
											<div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/3e49f5c2ab5fdce3ba7dcb919186e72f);"></div>
												<h4 class="home-product-item__name">Smart Tivi Samsung 4K 50 inch 50RU7200 UHD</h4>
												<div class="home-product-item__price">
													<span class="home-product-item__price-old">13.350.000đ</span>
													<span class="home-product-item__price-current">12.500.000đ</span>
												</div>
												<div class="home-product-item__action">
													<span class="home-product-item__like home-product-item__like--liked">
														<i class="home-product-item__like-icon-empty far fa-heart"></i>
														<i class="home-product-item__like-icon-fill fas fa-heart"></i>
													</span>
													<div class="home-product-item__rating">
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="home-product-item__gold fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<span class="home-product-item__sold">88 đã bán</span>
												</div>	
												<div class="home-product-item__origin">
													<span class="home-product-item__brand">SamSung</span>
													<span class="home-product-item__origin-name">Hàn Quốc</span>
												</div>
												<div class="home-product-item__favourite">
													<i class="fas fa-check"></i>
													Yêu thích
												</div>
												<div class="home-product-item__sale-off">	
													<span class="home-product-item__sale-off-percent">10%</span>
													<span class="home-product-item__sale-off-label">GIẢM</span>
												</div>	
											</a>
										</div>
								
							</div>
						</div>
						
						<ul class="pagination home-product__pagination">
							<li class="pagination-item">
								<a href="" class="pagination-item__link">
									<i class="pagination-item__icon fas fa-chevron-left"></i>
								</a>
							</li>
							<li class="pagination-item pagination-item--active">
								<a href="" class="pagination-item__link">1</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">2</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">3</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">4</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">5</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">...</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">14</a>
							</li>
							<li class="pagination-item">
								<a href="" class="pagination-item__link">
									<i class="pagination-item__icon fas fa-chevron-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	
		<footer class="footer">
			<div class="grid">
				<div class="grid__row">
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Chăm sóc khách hàng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">Giới thiệu</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Tuyển dụng</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Điều khoản</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Về Nam Hòa Shop</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Nam Hòa Shop Mall</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Danh Mục</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">Đồ điện tử</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Đồ điện tử</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Đồ điện tử</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Theo dõi</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-facebook"></i>
									Facebook
								</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-instagram"></i>
									Instagram
								</a>
								</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-linkedin"></i>
									LinkedIn
								</a>
							</li>
						</ul>
					</div>
					<div class="grid__column-2-4">
						<h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
						<div class="footer__download">
							<img src="./assets/img/qr_code.png" alt="Download QR" class="footer__download-qr">
							<div class="footer__download-apps">
								<a href="" class="footer__download-app-link">
									<img src="./assets/img/chplay.png" alt="Google play" class="footer__download-app-img">
								</a>
								<a href="" class="footer__download-app-link">
									<img src="./assets/img/appstore.png" alt="App store" class="footer__download-app-img">
								</a>							
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="footer__bottom">
				<div class="grid">
					<p class="footer__text">© 2021 - Bản quyền thuộc về Nam Hòa</p>
				</div>
			</div>	
		</footer>
	</div>
	
	<!--Modal layout-->
<!--
	<div class="modal">
		<div class="modal__overlay"></div>
		<div class="modal__body">
-->
				<!--Register form-->
<!--
				<div class="auth-form">
					<div class="auth-form__container">
						<div class="auth-form__header">
							<h3 class="auth-form__heading">Đăng ký</h3>
							<span class="auth-form__swith-btn">Đăng nhập</span>
						</div>
						
						<div class="auth-form__form">
							<div class="auth-from-form__group">
								<input type="text" class="auth-form__input" placeholder="Nhập email của bạn">
							</div>
							<div class="auth-from-form__group">
								<input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
							</div>
							<div class="auth-from-form__group">
								<input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
							</div>
						</div>
					
					<div class="auth-form__aside">
						<p class="auth-form__policy-text">
							Bằng việc đăng kí, bạn có đồng ý với NamHoaShop về
							<a href="" class="auth-form__policy-link">Điều khoản dịch vụ</a> &
							<a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
						</p>
					</div>
					
					<div class="auth-form__controls">
						<button class="btn auth-form__controls-back btn--normal">TRỞ LẠI</button>
						<button class="btn btn--primary">ĐĂNG KÝ</button>
					</div>
						
				</div>
					
					
					<div class="auth-form__socials">
						<a href="" class="auth-form__socials--fb btn btn--size-s btn--with-icon">
							<i class="auth-form__socials-icon fab fa-facebook-square"></i>
							<span class="auth-form__socials-title">
								Kết nối với Facebook
							</span>
						</a>
						<a href="" class="auth-form__socials--gg btn btn--size-s btn--with-icon">
							<i class="auth-form__socials-icon fab fa-google"></i>
							<span class="auth-form__socials-title">
								Kết nối với Google
							</span>							
						</a>
					</div>
				</div>	
-->
				<!--Login form-->
<!--
				<div class="auth-form">
					<div class="auth-form__container">
						<div class="auth-form__header">
							<h3 class="auth-form__heading">Đăng nhập</h3>
							<span class="auth-form__swith-btn">Đăng ký</span>
						</div>
						
						<div class="auth-form__form">
							<div class="auth-from-form__group">
								<input type="text" class="auth-form__input" placeholder="Nhập email của bạn">
							</div>
							<div class="auth-from-form__group">
								<input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn">
							</div>					
						</div>
					
					<div class="auth-form__aside">
						<div class="auth-form__help">
							<a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
							<span class="auth-form__help-separate"></span>
							<a href="" class="auth-form__help-link">Cần trợ giúp?</a>
						</div>
					</div>
					
					<div class="auth-form__controls">
						<button class="btn auth-form__controls-back btn--normal">TRỞ LẠI</button>
						<button class="btn btn--primary">ĐĂNG NHẬP</button>
					</div>
						
				</div>
					
					
					<div class="auth-form__socials">
						<a href="" class="auth-form__socials--fb btn btn--size-s btn--with-icon">
							<i class="auth-form__socials-icon fab fa-facebook-square"></i>
							<span class="auth-form__socials-title">
								Kết nối với Facebook
							</span>
						</a>
						<a href="" class="auth-form__socials--gg btn btn--size-s btn--with-icon">
							<i class="auth-form__socials-icon fab fa-google"></i>
							<span class="auth-form__socials-title">
								Kết nối với Google
							</span>							
						</a>
					</div>
				</div>
-->
		</div>
	</div>
</body>
</html>