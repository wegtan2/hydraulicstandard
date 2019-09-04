<link rel="shortcut icon" href="img/logo4.png" />

<div id="bs-example" class="bs-example fixed-top ">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt=""></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link active fix-nav hvr-grow hvr-underline-from-center">HOME</a>
                <a href="product.php" class="nav-item nav-link fix-nav hvr-grow hvr-underline-from-center">PRODUCT</a>
                <a href="service.php" class="nav-item nav-link fix-nav hvr-grow hvr-underline-from-center">SERVICE</a>
                <a href="project.php" class="nav-item nav-link fix-nav hvr-grow hvr-underline-from-center">PROJECT</a>
                <a href="contact.php" class="nav-item nav-link fix-nav hvr-grow hvr-underline-from-center">CONTACT</a>
                
               
            </div>
            <div class="navbar-nav ">
              
              
            </div>
        </div>
    </nav>
</div>


<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("bs-example").style.top = "0";
  } else {
    document.getElementById("bs-example").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}
</script>