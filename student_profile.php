<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Developement</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/L.style.css">
`       <link rel="stylesheet" href="css/L.css-circular-prog-bar.css">
        <script src="https://kit.fontawesome.com/4b89062b79.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        
    </head>
<body>
<header>

    <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

    <nav class="navbar">
        <ul>
            <li><a class="" href="index.php">TRANG CHỦ</a></li>
            
            <li><a href="">THỂ LOẠI</a>
                <ul>
                    <li><a href="phattrien.php">Phát Triển Web</a>
                        <ul>
                            <li><a href="css.php">CSS</a></li>
                            <li><a href="js.php">JavaScript</a></li>
                            <li><a href="#html">HTML5</a></li>
                            <li><a href="#php">PHP</a></li>
                            <li><a href="#rjs">ReactJS</a></li>
                            <li><a href="#ts">Typescript</a></li>
                            <li><a href="#ag">Angular</a></li>
                            <li><a href="#njs">Node.Js</a></li>
                        </ul>
                    </li>
                    <li><a href="it-software.php">Khoa Học Dữ Liệu</a>
                        <ul>
                            <li><a href="#css">Python</a></li>
                            <li><a href="#js">Học máy</a></li>
                            <li><a href="#html">Phân tích dữ liệu</a></li>
                            <li><a href="#php">Học sâu</a></li>
                            <li><a href="#rjs">Trí tuệ nhân tạo</a></li>
                            <li><a href="#ts">R</a></li>
                            <li><a href="#ag">Thống kê</a></li>
                            <li><a href="#njs">Xử lý ngôn ngữ tự nhiên</a></li>
                        </ul>
                    </li>
                    <li><a href="design.php">Ngôn Ngữ Lập Trình</a>
                        <ul>
                            <li><a href="#css">Python</a></li>
                            <li><a href="#js">Java</a></li>
                            <li><a href="#ts">C</a></li>
                            <li><a href="#html">C++</a></li>
                            <li><a href="#php">C#</a></li>
                            <li><a href="#rjs">ReactJS</a></li>
                            <li><a href="#ag">Khung Spring</a></li>
                            <li><a href="#njs">Go</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li><a href="">MY COURSE</a></li>
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

    <!-- main -->
    <section>

        <div class="main">
            <div class="search-bar">
                <!-- <form action="">
                    <input type="text" placeholder="Search">
                </form> -->
                <form action="" class="search-form">
                    <div class="search">
                        <input class="search-text" type="text" placeholder="Search..."/>
                        <button class="button-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    
                    </div>
                </form>
            </div>
            
            <div class="search-bar">
                <p class="filter">Filter</p>
               
            </div>
            <div class="search-bar">
                <form action="" class="filter-form">
                  
                    <div class="search">
                        <select style="width: 194px;">
                            <option>All course</option>
                            <option>Completed</option>
                            <option>Learning</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
            
           
                <div class="shadow mt-4 b-5 bg-body rounded row">
                    <div class="col-1 ">
                        <div class="tag-course"></div>
                    </div>

                    <div class="col-8 ">
                        <div class="course2">
                            <div class="fs-2 pb-4">Learn Python: The Complete Python Programming Course</div>
                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>Jose Portilla</div>
                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> 12-10-2022</i></div>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="progress-circle over50 p60">
                            <span>60%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="shadow mt-4 b-5 bg-body rounded row">
                    <div class="col-1 ">
                        <div class="tag-course"></div>
                    </div>
                    <div class="col-8 ">
                        <div class="course2">
                            <div class="fs-2 pb-4">Learn Python: The Complete Python Programming Course</div>
                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>Jose Portilla</div>
                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> 12-10-2022</i></div>
                   
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="progress-circle over50 p78">
                            <span>78%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                    </div>
                </div>

                <div class="shadow mt-4 b-5 bg-body rounded row">
                    <div class="col-1 ">
                        <div class="tag-course"></div>
                    </div>
                    <div class="col-8 ">
                        <div class="course2">
                            <div class="fs-2 pb-4">Learn Python: The Complete Python Programming Course</div>
                            <div class="fs-4 inline"><i class="fa-solid fa-user-group"></i>Jose Portilla</div>
                            <div class="fs-4 inline"><i class="fa-regular fa-calendar"> 12-10-2022</i></div>
                            
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="progress-circle p30">
                            <span>30%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                    </div>
                </div>
        </div>
        
        
    </section>
     



    <!-- footer -->
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
    <script>
        function random_bg_color() {
            var x = Math.floor(Math.random() * 256);
            var y = Math.floor(Math.random() * 256);
            var z = Math.floor(Math.random() * 256);
            var bgColor = "rgb(" + x + "," + y + "," + z + ")";
            
            return bgColor;
            }

            var list = document.querySelectorAll(".tag-course");
            for (var i = 0; i < list.length; i++){
                color = random_bg_color();
                list[i].style.backgroundColor = color;
            }
            
    </script>
</body>
</html>    