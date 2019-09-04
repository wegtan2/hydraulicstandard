<title>STANDARD  HYDRAULIC</title>
<?php include 'inclued/css.php';?>
<?php include 'navbar/head.php';?>
<body>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="img/logo3.jpg" alt="image01" /></div>
      <div class="swiper-slide"><img src="img/logo3.jpg" alt="image01" /></div>
      <div class="swiper-slide"><img src="img/logo3.jpg" alt="image01" /></div>
      <div class="swiper-slide"><img src="img/logo3.jpg" alt="image01" /></div>
     
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<div class="container">
     <div class="row fix-row1" align="center">
          <div class="col-6">
               <div class="img-logo4">
                   <img src="img/logo4.png" alt="">
               </div>
          </div>
          <div class="col-6">
               <div class="about-content text-center">
               <p> บริษัท  สแตนดาร์ด ไฮโดรลิค จำกัด
			    STANDARD  HYDRAULIC CO., LTD.
						   
			    109/21-22  M.1, T.Bankao, A.Phanthong, 
			    Chonburi, 20160  Thailand</p>
               </div>
          </div>
     </div>
     <div class="row fix-row2" >
          <div class="col-12 FEATURED">
          <h3>FEATURED PRODUCT CATEGORIES</h3>
          </div>
     </div>
     <div class="row">
          <div class="col-12">
          <?php include 'slider1.php';?>   
          </div>
     </div>
</div>
<div class="margin"></div>

<section class="parallax">
	<div class="parallax-inner">
          <div class="container "> 
               <div class="row fix-row3  fadeInLeft wow">
                    <div class="col-12">
                    <h1>ABOUT US</h1>
                       <p>ผู้นำเข้าและจำหน่ายอุปกรณ์ไฮโดรลิคงานเซอร์วิสทุกชนิด</p>
                       <p>รับติดตั้ง แก้ไขปัญหา ซ่อมบำรุง ระบบไฮโดรลิค ในอุสาหกรรมทุกชนิด</p>
                         <div class="row">
                              <div class="col-6" align="right">
                                   <img src="img/maintenance.png" alt="">
                             </div>
                             <div class="col-6" align="left">
                                   <img src="img/home-delivery-of-goods.png" alt="">
                             </div>
                         </div>
                    </div>
               </div>
              
          </div>
	</div>
</section>
<?php include 'footer.php';?>
<?php include 'inclued/icon.php';?>

</body>
  <script>
    var swiper = new Swiper('.swiper-container', {
     autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>



