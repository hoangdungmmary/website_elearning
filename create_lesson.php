<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Lesson</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<!-- <link rel="stylesheet" href="css/reset.css"> CSS reset -->
    <link rel="stylesheet" href="quiz.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="style_create_lesson.css"> <!-- Resource style -->
	<script src="../baigiang/js/modernizr.js"></script> <!-- Modernizr -->
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
                <li><a href="giangvien.php">GIẢNG VIÊN</a></li>
                <li><a href="#">...</a></li>
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
    
  <!--Main-->
  <body>
	<form class="cd-form floating-labels">
		<fieldset>
            <legend>TẠO BÀI GIẢNG</legend>
            
            <div class="icon">
                <h4>Chương 1</h4>
				
                
		    </div> 
           

			<div class="icon">
                <h4 class="name">Tên Chương : </h4>
				<label class="cd-label" for="cd-name"></label>
				<input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                <div>
                    <input type="submit" value="Save">
                    
                </div>
		    </div> 
		</fieldset>

		<fieldset>
			<legend>Bài Giảng</legend>
			<div>
                <div class="icon">
                    <h4>Video</h4>
                    <label class="cd-label" for="cd-name"></label>
                    <input class="chap" type="text" name="cd-name" id="cd-name" required>
                    
                </div> 
               
    
                <div class="icon">
                    <h4>PDF</h4>
                    <label class="cd-label" for="cd-name"></label>
                    <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                    <div>
                        <input type="submit" value="Save">
                    </div>
			</div> 
        </div>
        </fieldset>
            <!--câu hỏi-->
            <section>
                <fieldset>
                <legend>câu hỏi </legend>
            <div class="two-column">
                                    <div class="single-col">
                                      <div class="styled-input-container">
                                      <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name"> Câu hỏi 1: </label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name"> A</label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name">B </label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name">C</label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                        <div class="styled-input-single">
                                          <label class="cd-label" for="cd-name">D </label>
                                          <input class="name-chap" type="text" name="cd-name" id="cd-name" required>
                                        </div>
                                      </div>
                                    </div>
                            </div>
                            <legend>câu trả lời đúng </legend>
                            <p class="cd-select icon"> 
                                    <select class="budget">
                                        <option value="0">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                        <option value="3">D</option>
                                    </select>
                                </p>

                                <div>
                                    <input type="submit" value="Save">
                    
                              </div>
            </section>
                </fieldset>
           

 <!--end câu hỏi -->
		
	</form>

  <!--end Main-->
    

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
    <script src="../danhmuc/js/jquery-2.1.1.js"></script>
    <script src="../danhmuc/js/main.js"></script> 
    <script src="../baigiang/js/qiz.js"></script> <!-- Resource jQuery -->

</body>
</html>    