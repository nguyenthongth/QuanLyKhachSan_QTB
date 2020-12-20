<?php
//header
include 'inc/header.php';
//end header
?>

        <!-- breadcrumbs -->
        <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="assets/images/breadcumb1.jpg" class="imgBreadcrumbs" alt="Deluxe hướng biển" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Deluxe hướng biển</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="index.php" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="ds-hinh-anh.php" class="linkListBreadcrumb" title="Thư Viện Hình Ảnh">Thư Viện Hình Ảnh</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Deluxe hướng biển</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- images detail -->
        <div class="wrapPageServiceList">
            <div class="container-xl containerPageServiceList">
                <div class="contentPageServiceList">
                    <div class="row rowPageServiceList" id="showGalleryImagesDetail">
                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-1.jpg">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-1.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-2.jpg">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-2.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-3.jpg">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-3.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-4.jpg">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-4.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-5.jpg">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-5.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="assets/images/room-6.jpg">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-6.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>
                    </div>

                    <div class="wrapPaggingList">
                        <a href="#" class="linkPaggingList active" title="1"><span>1</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>2</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>3</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>4</span></a>
                        <a href="#" class="linkPaggingList" title="1"><span>5</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end images detail -->

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
        <!-- btn scroll top -->
        <div class="btnScrollTop"><i class="fas fa-angle-up"></i></button></div>
        <!-- end btn scroll top -->

        <!-- btn show book room -->
        <button type="button" class="btnType1 btnShowBookRoom" name="book-room">Book now</button>
        <!-- end btn show book room -->

        <!-- modal form book room -->
        <div class="modal fade modalFormBookRoom" id="modalFormBookRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body modalBodyFormBookRoom">
                        <div class="wrapTitleType1 titleMainFormBookRoom">Book a room</div>
                        <a href="#" class="btnCloseFormBookRoomMobile" data-dismiss="modal" title="Close Form book a room"><i class="fas fa-times"></i></a>
    
                        <div class="listInputBookRoom">
                            <div class="row rowInputBookRoom">
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>
    
                                        <input type="text" readonly="true" class="form-control inputChooseDateCheckIn" placeholder="Check-in" />
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>
    
                                        <input type="text" readonly="true" class="form-control inputChooseDateCheckOut" placeholder="Check-out" />
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>
    
                                        <select class="form-control selectPciker inputNumberAdult">
                                            <option>Người lớn</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>
    
                                        <select class="form-control selectPciker inputNumberChildren">
                                            <option>Trẻ em</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-home"></i></div>
    
                                        <select class="form-control selectPciker formControlRoomSelect">
                                            <option>Chọn phòng</option>
                                            <option value="1">Deluxe</option>
                                            <option value="2">Deluxe hướng biển</option>
                                            <option value="3">Senior Deluxe hướng biển</option>
                                            <option value="4">Suite Hướng biển</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-sort-numeric-up-alt"></i></div>
    
                                        <input type="number" class="form-control" placeholder="Số lượng phòng" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-user"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập họ và tên" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-envelope"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập email" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-phone"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập Số điện thoại" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-file-alt"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập ghi chú" />
                                    </div>
                                </div>
    
                                <div class="col-md-12 colInputBookRoom colBtnBookRoom">
                                    <div class="contentInputBookRoom">
                                        <button type="button" name="book-now" class="btnType1 btnBookNowRoomForm">Book now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- end modal form book room -->

        <script src="assets/js/image-detail.js"></script>
    </body>
</html>