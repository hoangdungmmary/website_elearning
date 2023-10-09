<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trí tuệ nhân tạo</title>
        
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
                <li><a href="#" class="theloai">Ngôn ngữ lập trình</a></li>
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                <li><a href="java.php">Java</a></li>
                <li><a href="c.php">C</a></li>
                <li><a href="python.php">Python</a></li>
                <li><a href="#html">C++</a></li>
                <li><a href="#php">C#</a></li>
                <li><a href="#rjs">ReactJS</a></li>
                <li><a href="#ag">Khung Spring</a></li>
                <li><a href="#njs">Go</a></li>
            </ul>
        </nav>
    </div>
    <div class="subject">
        <h1>Các khóa học về ngôn ngữ lập trình C</h1><a href="#css" id="#css"></a>
        <p>Ngôn ngữ lập trình C liên quan đến Phát triển, CNTT & Phần mềm</p>
        <i class="fa fa-users" aria-hidden="true"></i><a> 25063 học viên</a>
    </div>

    <section class="count">
        <h1 class="heading">Học viên lập trình C cũng học </h1>
        <div class="box-container">
           <div class="box">
              <i class="fas fa-graduation-cap"></i>
              <div class="content">
                 <a href="jv.php"><h3>Lập trình C</h3></a>
                 <p>courses</p>
              </div>
           </div>
           <div class="box">
              <i class="fas fa-user-graduate"></i>
              <div class="content">
                 <h3>Lập trình C++</h3>
                 <p>courses</p>
              </div>
           </div>
     
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
                 <h3>Lập trình C#</h3>
                 <p>courses</p>
              </div>
           </div>
     
           <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
                 <a href="java.php"><h3>Java</h3></a>
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
               <a href="python.php"><h3>Spring</h3></a>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>Go</h3>
               <p>courses</p>
            </div>
         </div>
         <div class="box">
            <i class="fa fa-laptop" aria-hidden="true"></i>
            <div class="content">
               <h3>WebDriver</h3>
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
        <h1 class="heading"> Các khóa học hàng đầu về <span>ngôn ngữ lập trình C</span> </h1>
        <div class="box-container">
            <div class="box" data-aos="fade-right">
                <img src="image/c.png" alt="">
                <h3>Lập trình C</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">cơ bản</div>
                <a href="c_course.php"><button class="btn">Xem thêm</button></a>
            </div>
        
            <div class="box" data-aos="fade-right">
                <img src="image/c1.png" alt="">
                <h3>C nâng cao</h3>
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
                <img src="image/c2.png" alt="">
                <h3>Lập trình Android</h3>
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
        
            <div class="box" data-aos="fade-left">
                <img src="image/c3.png" alt="">
                <h3>Thực hành C </h3>
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