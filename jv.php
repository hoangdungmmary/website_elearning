<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Developement</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/ptweb.css">    
        <link rel="stylesheet" href="css/baihoc.css">    
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
                <li><a href="python.php">Python</a></li>
                <li><a href="java.php">Java</a></li>
                <li><a href="c.php">C</a></li>
                <li><a href="#html">C++</a></li>
                <li><a href="#php">C#</a></li>
                <li><a href="#rjs">ReactJS</a></li>
               <li><a href="#ag">Khung Spring</a></li>
                <li><a href="#njs">Go</a></li>
            </ul>
        </nav>
    </div>
    <div id="content" class="container">
        <div id="post">
            <img class="img_subject" src="image/subject1.png">
        </div>
        <div id="sidebar" class="h1">
            <h1>Khóa học Lập trình hướng đối tượng Java</h1>
            <h2>Thầy: Phạm Văn V</h2>
            <h2><i class="fa fa-star" aria-hidden="true"></i> Mô tả:</h2> 
            <p>Lập trình hướng đối tượng (Object Oriented Programming – OOP) là một trong những kỹ thuật lập trình rất quan trọng và sử dụng nhiều hiện nay. Hầu hết các ngôn ngữ lập trình hiện nay như Java, PHP, .NET, Ruby, Python… đều hỗ trợ OOP.</p>
            <h2><i class="fa fa-star" aria-hidden="true"></i> Ưu điểm của khóa học</h2> 
            <p> <i class="fa fa-check" aria-hidden="true"></i> Cam Kết Nắm Vững Kiến Thức về ngôn ngữ Java Sau Khi Hoàn Thành Khóa Học.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Thời gian học tập linh động, có thể học bất kỳ thời điểm nào.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Không bị giới hạn địa lý, nơi nào cũng có thể học được.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Được tư vấn thời gian biểu học tập phù hợp với quỹ thời gian của bạn.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Chủ động học theo tiến độ riêng.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Quá trình học tập của bạn sẽ được theo sát bởi đội ngũ LetDiv.<br>
                <i class="fa fa-check" aria-hidden="true"></i> Giảng viên review từng dòng code. Hỗ trợ nhanh chóng nếu gặp khó khăn, và hỗ trợ cho đến khi học viên hiểu rõ 100% vấn đề.</p>

        </div>
        <div class="clear"></div>
    </div>

    <section class="menu" id="menu">

        <h1 class="heading"> Bài <span>Giảng</span> </h1>

        <ul class="list" data-aos="fade-down">
            <li class="btn active" data-src="image/bg6.png">Bài 1</li>
            <li class="btn" data-src="image/bg4.png">Bài 2</li>
            <li class="btn" data-src="image/bg5.png">Bài 3</li>
            <li class="btn" data-src="image/bg7.png">Bài 4</li>
            <li class="btn" data-src="image/bg7.png">Bài 5</li>
        </ul>

        <div class="row" data-aos="fade-right">

            <div class="image" data-aos="fade-left">
                <iframe width="550" height="315" src="https://www.youtube.com/embed/rnweHOhdW-s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
            <div class="content">
                <div class="info">
                    <h2><span>Bài 1:</span> Mở Đầu</h2>
                    <h3> <span>01.</span> các khái niệm cơ bản  </h3>
                    
                </div>
                <div class="info">
                    <h3> <span>02.</span> các đối tượng và lớp</h3>
                    
                </div>
                <div class="info">
                    <h3> <span>03.</span> các nguyên tắc trụ cột </h3>
                    
                </div>
                <div class="info">
                    <h3> <span>04.</span> Khai báo toán tử trong Java</h3>
                    
                </div>
                <div class="info">
                    <h3> <span>05.</span> Tìm hiểu If, else & switch </h3>
                    
                </div>
            </div> 
        </div>
    </section>


    <div class="open accordion" id="accordionExample">
        <h1>Nội dung khóa học</h1>
        <p>• 13 chương • 163 bài học</p>
        <div class="accordion-item">
            
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Bài #1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p><i class="fa fa-play" aria-hidden="true"></i><a href="C:\Users\Admin\Downloads\giao-trinh-lap-trinh-html-_-css - [cuuduongthancong.com].pdf"></a> Mở đầu</p>
                <iframe src="https://uet.vnu.edu.vn/~chauttm/e-books/OOP_2013.pdf" width="100%" height="500px">
                </iframe>
                
                <p><i class="fa fa-play" aria-hidden="true"></i> các khái niệm cơ bản</p> 
                <p><i class="fa fa-play" aria-hidden="true"></i> các đối tượng và lớp</p> 
                <p><i class="fa fa-play" aria-hidden="true"></i> các nguyên tắc trụ cột</p> 
                <a href="test1_java.php">Kiểm tra trắc nghiệm Bài 1</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Bài #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p><i class="fa fa-play" aria-hidden="true"></i> Ngôn ngữ lập trình Java</p>
                <p><i class="fa fa-play" aria-hidden="true"></i> Đặc tính của java</p> 
                <p><i class="fa fa-play" aria-hidden="true"></i> Các phép toán cơ bản</p> 
                <p><i class="fa fa-play" aria-hidden="true"></i> Các cấu trúc điều khiển</p> 
                <a href="">Kiểm tra trắc nghiệm Bài 2</a>      
                </div>    
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Bài #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p><i class="fa fa-play" aria-hidden="true"></i> Lớp và đối tượng</p>
                <p><i class="fa fa-play" aria-hidden="true"></i> Tạo và sử dụng các đối tượng</p> 
                <p><i class="fa fa-play" aria-hidden="true"></i> Tương tác giữa các đối tượng</p> 
                <a href="">Kiểm tra trắc nghiệm Bài 3</a>
                </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Bài #4
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p><i class="fa fa-play" aria-hidden="true"></i> Biến và các kiểu dữu liệu cơ bản</p> 
                  <p><i class="fa fa-play" aria-hidden="true"></i> Tham chiếu đối tượng</p> 
                  <p><i class="fa fa-play" aria-hidden="true"></i> Các phép so sánh</p>
                  <p><i class="fa fa-play" aria-hidden="true"></i> phép gán</p>
                  <a href="">Kiểm tra trắc nghiệm Bài 4</a>        
                  </div>    
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Bài #5
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <p><i class="fa fa-play" aria-hidden="true"></i> Sử dụng thư viện của java</p>
                  <p><i class="fa fa-play" aria-hidden="true"></i> ArryList</p>
                  <p><i class="fa fa-play" aria-hidden="true"></i> Sử dụng Java API</p> 
                  <p><i class="fa fa-play" aria-hidden="true"></i> một số lớp thông dụng trong API</p>  
                  <a href="">Kiểm tra trắc nghiệm Bài 5</a>  
                  </div>        
            </div>
        </div>     
    </div>


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