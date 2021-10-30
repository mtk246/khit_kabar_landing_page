<?php
$themeClass = '';
// if (!empty($_COOKIE['theme'])) {
//     if ($_COOKIE['theme'] == 'dark') {
//         $themeClass = 'dark-theme';
//     } else if ($_COOKIE['theme'] == 'light') {
//         $themeClass = 'light-theme';
//     }
// }

include "template/header.php";
include "template/body.php";
?>
<form action="" method="POST">
    <input type="hidden" name="theme" value="<?php echo $themeToggle; ?>" />
    <button class="btn btn-primary" type="submit" name="theme_check">Toggle Dark Mode</button>
</form>

<div class="body-content">
    <div class="heading">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <h1 class="display-5 fw-bolder">Khit Kabar</h1>
                    <p>Khit Kabar is one of the most famous distributors in Myanmar.</p>
                    <div class="container-fluid p-0">
                        <a href="#" class="btn btn-1 m-2">Contact Now</a>
                        <a href="#" class="btn btn-1 m-2">Email Us</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 blob-bg">
                    <img src="assets/img/1.svg" alt="kts-product" class="rounded-3" />
                </div>
            </div>
        </div>
    </div>

</div>
<div class="content">
    <div class="heading">
        <h1 class="display-6 fw-bolder my-2">What We Are</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="https://wallpaperaccess.com/full/1146666.jpg" alt="img" class="img-content" />
                </div>
                <div class="col-12 col-md-6 m-auto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam provident maiores unde consequuntur assumenda perferendis sint, ipsum magni, nihil tenetur voluptatibus corrupti, possimus facilis repudiandae ab voluptas modi ea. Consequatur?</p>
                </div>
            </div>
        </div>
        <hr />
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam provident maiores unde consequuntur assumenda perferendis sint, ipsum magni, nihil tenetur voluptatibus corrupti, possimus facilis repudiandae ab voluptas modi ea. Consequatur?</p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="https://wallpaperaccess.com/full/1146666.jpg" alt="img" class="img-content" />
                </div>
            </div>
        </div>
        <hr />
        <div class="my-4" id="service">
            <h1 class="display-6 fw-bolder my-2">Our Services</h1>
            <ul id="nav" class="nav text-center">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 shopping-info">
                            <li class="nav-item icon-2">
                                <a href="#" class="btn cat-btn">
                                    <div class="container-fluid">
                                        <div class="col">
                                            <img src="assets/img/wholesale.png" alt="wholesale" class="cat-icons cat-img" />
                                        </div>
                                        <div class="col">
                                            <h3>Whole Sale</h3>
                                            <p class="fs-6 content">Now we opened KOPWAR ACADEMY for Student (Online Learning System)</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 shopping-info">
                            <li class="nav-item icon-2">
                                <a href="#" class="btn cat-btn">
                                    <div class="container-fluid">
                                        <div class="col">
                                            <img src="assets/img/distribution.png" alt="distribution" class="cat-icons cat-img" />
                                        </div>
                                        <div class="col">
                                            <h3>Distribute</h3>
                                            <p class="fs-6 content">KOPWAR is an online store. Begin as a foodservice provider to business and other service. By using our app, you will never need to go to Market and get your hand dirty. *Currently available in Yangon</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 shopping-info">
                            <li class="nav-item icon-2">
                                <a href="#" class="btn cat-btn">
                                    <div class="container-fluid">
                                        <div class="col">
                                            <img src="assets/img/satisfied.png" alt="satisfied" class="cat-icons cat-img" />
                                        </div>
                                        <div class="col">
                                            <h3>Satisfaction</h3>
                                            <p class="fs-6 content">With our fair and transparent pricing, you know you’ll always get a good deal.</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
</div>
<script>
    // const btn = document.querySelector(".btn-toggle");
    // const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

    // btn.addEventListener("click", function() {
    //     if (prefersDarkScheme.matches) {
    //         document.body.classList.toggle("light-mode");
    //         var theme = document.body.classList.contains("light-mode") ? "light" : "dark";
    //     } else {
    //         document.body.classList.toggle("dark-mode");
    //         var theme = document.body.classList.contains("dark-mode") ? "dark" : "light";
    //     }
    //     document.cookie = "theme=" + theme;
    // });
</script>

<?php
include "template/footer.php";
