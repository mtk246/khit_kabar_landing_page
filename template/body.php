<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/img/khitkabar.png" alt="khitkabar_logo" class="" width="80" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center" style="margin-left:auto;">
                <a class="nav-link" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">About</a>
                <a class="nav-link" href="#">Contact</a>
            </div>
        </div>
    </div>
</nav>
<!-- <div id="carouselExampleCaptions" class="carousel slide my-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80" class="img-carousel d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1492305175278-3b3afaa2f31f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxNjk1Mzk5fHxlbnwwfHx8fA%3D%3D&w=1000&q=80" class="img-carousel d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFgF6-VNdN8GozbJqd-M8czR443C8IdUxbwWRX5WKuAuBVjGfuvVfvSG9JmDPaFXz1uJc&usqp=CAU" class="img-carousel d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->

<script>
    var myCarousel = document.querySelector('#carouselExampleCaptions')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1500,
        wrap: false,
        pause: 'hover'
    })
</script>