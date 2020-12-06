<?php
//<!-- header -->
include 'inc/header.php';
//<!-- end header -->
?>

        <!-- breadcrumbs -->
        <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="assets/images/breadcumb1.jpg" class="imgBreadcrumbs" alt="Liên Hệ" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Liên Hệ</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="index.php" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Liên Hệ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- page contact -->
        <div class="wrapPageContact">
            <div class="container-xl containerPageContact">
                <div class="contentPageContact">
        			<div class="row rowInfoHotel">
        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Địa chỉ</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p>100A8 - 100A9, Trần Phú, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa</p>

                                            <p><a href="#" title="100A8 - 100A9, Trần Phú, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa" target="_blank">Xem bản đồ</a></p>
                                        </div>
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Hotline</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-phone"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p><a href="tel:02583905999" title="0258 3905 999">0258 3905 999</a></p>
                                        </div>										
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Email</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-envelope"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p><a href="mailto:info@gmail.com" title="info@gmail.com">info@gmail.com</a></p>
                                        </div>										
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Giờ mở cửa</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="far fa-clock"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p>6:00 sáng đến 11:00 tối</p>
                                        </div>
									</div>
								</div>
        					</div>
        				</div>
        			</div>

        			<div class="wrapFrmAndMap">
        				<div class="row rowFrmAndMapContact">
        					<div class="col-sm-5 colFrmContact">
        						<div class="contentFrmContact">
        							<div class="frmSendMessage">
	        							<h2 class="wrapTitleType1 titleItemContact">Gửi tin nhắn</h2>

	        							<h3 class="textSendMessage">Nếu bạn có bất kỳ câu hỏi nào, vui lòng gửi tin nhắn với của chúng tôi. Chúng tôi luôn ở đây để trả lời câu hỏi của bạn.</h4>

	        							<div class="form-group">
											<label class="titleInputSendMessage">Họ và tên</label>
											<input type="text" class="form-control" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Email</label>
											<input type="mail" class="form-control" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Số điện thoại</label>
											<input type="text" class="form-control" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Tin nhắn</label>
											<textarea class="form-control" rows="5"></textarea>
										</div>

										<button type="submit" class="btnType1 btnSendFrm"><i class="far fa-paper-plane"></i> Gửi ngay</button>
									</div>
        						</div>
        					</div>

        					<div class="col-sm-7 colMapContact">
        						<div id="map"></div>
        					</div>
        				</div>
        			</div>
        		</div>
            </div>
        </div>
        <!-- end page contact -->

        <?php
          //<!-- footer -->
        include 'inc/footer.php';
        //<!-- end footer -->

        //<!-- btn scroll top -->
        include 'inc/btn-scroll-top.php';
        //<!--end btn scroll top -->

        //<!-- btn show book room -->
        include 'inc/btn-show-book-room.php';
        //<!--end btn show book room -->

        //<!-- modal form book room -->
        include 'inc/modal-form-book-room.php';
        //<!--end modal form book room -->
        ?>

        <script src="assets/js/contact.js"></script>

        <!-- map -->
        <script type="text/javascript">
            var map;

            function initMap() {
                var widthWindowMap = $(window).width();
                var positionMap = {lat: 12.226416, lng: 109.200169};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 16,
                    center: positionMap,
                    styles: [
                        {
                            "featureType": "transit.line",
                            "elementType": "labels.text",
                            "stylers": [
                                {
                                    "color": "#008080"
                                }
                            ]
                        }
                    ]
                });

                var contentString = '<table width="100%"><tr><td><img src="assets/images/hotel-map.jpg" alt="hotel" height="108px"></td><td><p style="font-size:14px;font-weight:700; margin-bottom: 5px;">&nbsp Msova Hotel</p><p style="font-size:14px; margin-bottom: 5px;">&nbsp Hotline: <a href="tel: 000 000 000" title="000 000 000">000 000 000</a></p><p style="font-size:14px; margin-bottom: 5px;">&nbsp Fax: 000 000 000</p><p style="font-size:14px; margin-bottom: 5px;">&nbsp Email: <a href="mailto: info@gmail.com" title="info@floridahotel.vn">info@gmail.com</a></p></td></tr></table>';

                if(widthWindowMap <= 767) contentString = '<img src="assets/images/hotel-map.jpg" alt="hotel" width="auto" height="80px">';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: positionMap,
                    map: map,
                    title: 'Masova Hotel'
                });

                infowindow.open(map, marker);
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            }
        </script>
        <!-- end map -->

        <!-- key api map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkB5GqIi0zwqONIzbePzXWYlBmc9refyk&callback=initMap" ></script>
        <!-- end key api map -->
    </body>
</html>