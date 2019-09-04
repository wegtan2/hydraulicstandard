<?php include 'inclued/modal.php';?>
   
    <style>
    /*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/
@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) {
    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* MD */
@media (min-width: 768px) {
    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
/* LG */
@media (min-width: 991px) {
    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }
}
.carousel-item h5{
text-align:center;
}
    </style>
    <!-- Top content -->
<div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active" data-toggle="modal" data-target=".bd-example-modal-lg1">
                    <img src="img/MANUAL VALVE.png" class="img-fluid mx-auto d-block" alt="img1">
                    <h5 >MANUAL VALVE</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg2">
                    <img src="img/CHARGING SET.png" class="img-fluid mx-auto d-block" alt="img2">
                    <h5>CHARGING SET</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg3">
                    <img src="img/COUPLING QUICK NIPPLE.png" class="img-fluid mx-auto d-block" alt="img3">
                    <h5>COUPLING QUICK NIPPLE</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg4">
                    <img src="img/POWER UNIT.png" class="img-fluid mx-auto d-block" alt="img4">
                    <h5>POWER UNIT</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg5">
                    <img src="img/POWER PACK.png" class="img-fluid mx-auto d-block" alt="img5">
                    <h5>POWER PACK</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg6">
                    <img src="img/GAS BOOSTER.png" class="img-fluid mx-auto d-block" alt="img6">
                    <h5>GAS BOOSTER</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg7">
                    <img src="img/POWER PACK 700 BAR.png" class="img-fluid mx-auto d-block" alt="img6">
                    <h5>POWER PACK 700 BAR</h5>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3" data-toggle="modal" data-target=".bd-example-modal-lg8">
                    <img src="img/HYDRAULIC TESTER.png" class="img-fluid mx-auto d-block" alt="img6">
                    <h5>HYDRAULIC TESTER</h5>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<script>
/*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
</script>