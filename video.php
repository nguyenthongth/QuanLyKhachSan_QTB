<?php
//<!-- header -->
include 'inc/header.php';
//<!-- end header -->
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
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="ds-video.php" class="linkListBreadcrumb" title="Thư Viện Videos">Thư Viện Videos</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Deluxe hướng biển</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- html Video
            <div style="display:none;" id="video1">
                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                    <source src="assets/videos/video-1.mp4" type="video/mp4">
                </video>
            </div> 
        End html video -->

        <!-- video detail -->
        <div class="wrapPageServiceList">
            <div class="container-xl containerPageServiceList">
                <div class="contentPageServiceList">
                    <div class="row rowPageServiceList" id="showGalleryVideosDetail">
                        <!-- Html Show Video
                            <div class="col-6 col-lg-4 elementSlideLatestNews" data-html="#video1">
                                <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                    <img src="assets/images/room-1.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                                </div>
                            </div> 
                        end Html Show Video -->

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="https://www.youtube.com/watch?v=wiXL60wHv9U">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-1.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="https://www.youtube.com/watch?v=wiXL60wHv9U">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-2.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="https://www.youtube.com/watch?v=wiXL60wHv9U">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-3.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="https://www.youtube.com/watch?v=wiXL60wHv9U">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-4.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="https://www.youtube.com/watch?v=wiXL60wHv9U">
                            <div class="wrapImgResize imgSquare wrapImgItemLatestNews">
                                <img src="assets/images/room-5.jpg" alt="Deluxe hướng biển" class="imgItemLatestNews" />
                            </div>
                        </div>

                        <div class="col-6 col-lg-4 elementSlideLatestNews" data-src="https://www.youtube.com/watch?v=wiXL60wHv9U">
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
        <!-- end video detail -->

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

        <script src="assets/js/video-detail.js"></script>
    </body>
</html>