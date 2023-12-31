<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Developement</title>
        
         <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/ptweb.css">        
    </head>
<body>
    <header>
        <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

        <nav class="navbar">
            <ul>
                <li><a class="active" href="index.php">TRANG CHỦ</a></li>
                <li><a href="#menu">THỂ LOẠI</a>
                    <ul>
                        <li><a href="phattrien.php">Phát Triển Web</a></li>
                        <li><a href="it-software.php">Khoa Học Dữ Liệu</a></li>
                        <li><a href="design.php">Ngôn Ngữ Lập Trình</a></li>
                    </ul>
                </li>
                <li><a href="#teacher">GIẢNG VIÊN</a></li>
                <li><a href="#">Quá trình học tập của tôi</a></li>
            </ul>
        </nav>
        <form action="" class="search-form">
            <div class="search-box">
                <div class="search-input">
                    <input type="text" placeholder="Search..."/>
                </div>
                <button class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
        <a href="login.php">
            <div id="login" class="fas fa-user-circle"></div>
        </a>
    </header>

    <div class="danhmuc">
        <nav >
            <ul>
                <li><a href="phattrien.php" class="theloai">Phát Triển Web</a></li>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <li><a href="subject.php">CSS</a></li>
                <li><a href="js.php">JavaScript</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#php">PHP</a></li>
                <li><a href="#rjs">ReactJS</a></li>
                <li><a href="#ts">Typescript</a></li>
                <li><a href="#ag">Angular</a></li>
                <li><a href="#njs">Node.Js</a></li>
            </ul>
        </nav>
    </div>
    <div class="subject">
        <h1>Các khóa học về JavaScript</h1><a href="#css" id="#css"></a>
        <p>JavaScript liên quan đến Phát triển Web</p>
        <i class="fa fa-users" aria-hidden="true"></i><a> 25063 học viên</a>
    </div>

    <section class="count">
        <h1 class="heading">Học viên JavaScript cũng học </h1>
        <div class="box-container">
           <div class="box">
              <i class="fas fa-graduation-cap"></i>
              <div class="content">
                 <a href="subject.php"><h3>CSS</h3></a>
                 <p>courses</p>
              </div>
           </div>
           <div class="box">
              <i class="fas fa-user-graduate"></i>
              <div class="content">
                 <h3>JavaScript</h3>
                 <p>courses</p>
              </div>
           </div>
     
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
                 <h3>HTML5</h3>
                 <p>courses</p>
              </div>
           </div>
     
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
                 <h3>PHP</h3>
                 <p>courses</p>
              </div>
           </div>
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>ReactJS</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>HTML</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>Bootstrap</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>Node.Js</h3>
               <p>courses</p>
            </div>
         </div>
        </div>
     </section>

    <!-- <section class="course" id="course">
        <h1 class="heading"> Các khóa học hàng đầu về <span>CSS</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <img src="image/couse1.png" alt="">
                <h3>Lập trình J2EE</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/course2.png" alt="">
                <h3>Lập trình J2EE</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/course3.png" alt="">
                <h3>Phát triển Web</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        
            <div class="box" data-aos="fade-left">
                <img src="image/course4.png" alt="">
                <h3>Python</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">$30.00</div>
                <a href="#"><button class="btn">add to cart</button></a>
            </div>
        </div>
        
    </section>
     -->
    <!--  -->
    <section class="new-course" id="new-course">
        <!-- <div class="new-course">
            <h1 class="h1">Các khóa học để bạn bắt đầu</h1>
            <ul>
                <li><a href="#">Phổ biến nhất</a></li>
                <li><a href="#">Mới nhất</a></li>
                <li><a href="#">Thịnh hành</a></li>
            </ul>
        </div> -->
        <h1 class="heading"> Các khóa học hàng đầu về <span>JavaScript</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <img src="image/js.png" alt="">
                <h3>JavaScript</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">cơ bản</div>
                <a href="js.php"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/js1.png" alt="">
                <h3>JavaScript</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Nâng cao</div>
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
        
            <div class="box" data-aos="fade-right">
                <img src="image/js2.png" alt="">
                <h3>JavaScript</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">thiết kế</div>
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-left">
                <img src="image/js3.png" alt="">
                <h3>JavaScript</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">web</div>
                <a href="#"><button class="btn">Xem thêm</button></a>
            </div>
        </div>
        
    </section>

    <!-- teacher -->
    <section class="teacher" id="teacher">
        <h1 class="heading">Giảng <span>Viên</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-md" data-aos="fade-right">
                    <div class="testimonial-body ">
                    <div class="img">
                    <img src="./images/testimo3.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Maria Sheryl</h4>
                    <h6>Profession</h6>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-up">
                    <div class="testimonial-body two">
                    <div class="img">
                    <img src="./images/testimo5.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Sheryl SandBerg</h4>
                    <h6>Profession</h6>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-left">
                    <div class="testimonial-body">
                    <div class="img">
                    <img src="./images/testimo2.jpg" alt=""/>
                    </div>
                    <p>Motivation comes from working on things we care about</p>
                    <h4>Jason David</h4>
                    <h6>Profession</h6>
                    </div>
              </div>
            </div>
        </div>
    </section>
    

    <div class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-map-marker-alt"></i> mumbai, indai 400104 </p>
                <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
                <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
                <p> <i class="fas fa-phone"></i> +111-222-333 </p>
            </div>
    
            <div class="box">
                <h3>quick links </h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">popular</a>
                <a href="#">gallery</a>
                <a href="#">order</a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="#">instagram</a>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>
    
        </div>
    
        <h1 class="credit">create by <a href="#">mr. web designer</a> all rights reserved. </h1>
    
    </div>
    
    <!-- footer section ends -->
</body>
</html>    