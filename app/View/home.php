<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>欢迎登陆</title>
    <link rel="stylesheet" href="http://localhost:8080/CarRental/static/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost:8080/CarRental/static/css/base.css">
   
    
</head>
<body>

      
<div class="navbar navbar-inverse navbar-static-top ">
                        <div class="navbar-header" id="navhead">
                            <button class="navbar-toggle" data-target=".hidemenu" data-toggle="collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="" class="nav-brand brand-img"><img src="http://localhost:8080/CarRental/static/img/banner.png" alt=""></a>
                        </div>

                        <div class="collapse navbar-collapse hidemenu ">
                            <ul class="nav navbar-nav"   >
                                <li class="active"><a href="./?c=Index&m=index">首页</a></li>
                                <li><a href="./?c=Index&m=rent">租车</a></li>
                                <li><a href="./?c=index&m=back">还车</a></li>
                                <li><a href="http://">车辆展示</a></li>
                                <li class="dropdown" >
                                    <a href="http://" data-toggle="dropdown" class="dropdown-toggle" >帮助
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a href="" >租车流程</a></li>
                                        <li class="divider"></li>
                                        <li><a href="">常见问题</a></li>
                                    
                                    </ul>
                                
                                
                                </li>

                            </ul>

                            <ul class="nav navbar-nav navbar-right" >
                                <?php echo $nav_data ?>
                               
                            </ul>
                        </div>
   
                </div>


           <div class="jumbotron">
              
                <div class="container">
                  
                       
                       
                        
                        <h1>Car-Rental</h1>  
                         <br><br>              
                            <p class="">一起体验驾驶乐趣 </p>
                            <br><br>
                            <button class="btn btn-success v2a">立即体验>></button>
              

                          
                </div> 
              
              
                
            </div>
          
            <div class="jumbotron jum2">
              
              <div class="container">
                
                     
                     
                    <p>CONTACT: answer2c@qqq.com</p>
            
            

                        
              </div> 
            
            
              
          </div>
        



  

  






    <script src="http://localhost:8080/CarRental/static/js/jquery-3.2.1.js"></script>
    <script src="http://localhost:8080/CarRental/static/js/bootstrap.min.js"></script>


</body>
</html>	
	
			

