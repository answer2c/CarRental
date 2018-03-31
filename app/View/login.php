<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>租车</title>
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
                                <li><a href="<?php echo SITE_URL?>/index/index">首页</a></li>
                                <li ><a href="<?php echo SITE_URL?>/index/rent">租车</a></li>
                                <li><a href="<?php echo SITE_URL?>/index/back">还车</a></li>
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

                       
                        </div>
   
                </div>


           <div class="jumbotron">
              
                <div class="container">
                   
                    <form action="<?php echo SITE_URL ?>/FormHandle/loginhandle" method="post" class="form-horizontal">
                            <div class="form-group">
                                    
                                <label for="username" class="col-xs-5 col-sm-3 control-label">用户名：</label>
                                <div class="col-xs-8 col-sm-5">
                                    <input type="text" id="username" class="form-control" name="username" placeholder='username'>
                                
                                </div>                           
                             </div>

                            <div class="form-group">
                         
                                <label for="pwd" class="col-xs-5 col-sm-3 control-label">密码：</label>
                                <div class="col-xs-8 col-sm-5">
                                    <input type="password" id="pwd" class="form-control" name="pwd" placeholder='password'>
                                    
                                </div>                 
                            </div>

                            
                            <div class="form-group">
                                    <div class="col-md-offset-4 col-sm-2 col-xs-3">
                                    <input type="submit" name="sub" value="登录" class="btn btn-success" >
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                    <a href="<?php echo SITE_URL ?>/index/register" class="btn btn-primary">注册</a>
                                    </div>
                            </div>
                              
                     </form>
                  

              

                          
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
	
			

