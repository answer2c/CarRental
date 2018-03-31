<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>欢迎注册</title>
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
                            <a href="" class="nav-brand brand-img"><img src="http://localhost:8080/CarRental/static/img/banner.png" alt="" class=""></a>
                        </div>

                        <div class="collapse navbar-collapse hidemenu ">
                            <ul class="nav navbar-nav"   >
                            <li class="active"><a href="<?php echo SITE_URL?>/index/index">首页</a></li>
                               
                            <li><a href="<?php echo SITE_URL?>/index/rent">租车</a></li>
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
                   
                            <form action="./?c=FormHandle&m=regiHandle" method="post" class="form-horizontal" id="myform">
                                <div class="form-group has-feedback ">
                                    
                                       <label for="username" class="col-xs-5 col-sm-3 control-label">用户名：</label>
                                       <div class="col-xs-8 col-sm-5">
                                        <input type="text" id="username" class="form-control" name="username" placeholder='username' onblur="sendAjax(this.id)" >
                                         
                                            <span class="tip"></span>
                                       </div>                           
                                </div>

                                <div class="form-group">
                                    
                                    <label for="pwd" class="col-xs-5 col-sm-3 control-label">密码：</label>
                                    <div class="col-xs-8 col-sm-5">
                                        <input type="password" id="pwd" class="form-control" name="pwd" placeholder='password' onblur="sendAjax(this.id)">
                                        <span class="tip"></span>
                                    </div>                 
                                </div>

                                <div class="form-group">
                                    
                                    <label for="pwd-c" class="col-xs-5 col-sm-3 control-label">确认密码：</label>
                                    <div class="col-xs-8 col-sm-5">
                                    <input type="password" id="pwd-c" class="form-control" name="pwd-c" placeholder='password' onblur="checkpwd(this)">
                                    <span class="tip"></span>
                                    </div>                 
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-xs-3 col-sm-3 control-label">性别：</label>
                                   
                                    <div class="radio col-xs-2">
                                        <label>
                                        <input type="radio" name="sex" id="sex" value="男" checked>男
                                        
                                        </label>

                                    </div>
                                    <div class="radio col-xs-2">
                                        <label>
                                        <input type="radio" name="sex" id="sex" value="女" checked>女
                                        
                                        </label>

                                    </div>


                                </div>

                                
                                <div class="form-group">
                                    
                                    <label for="tel" class="col-xs-5 col-sm-3 control-label">电话号码：</label>
                                    <div class="col-xs-8 col-sm-5">
                                    <input type="text" id="tel" class="form-control" name="tel" placeholder='telephone number' onblur="sendAjax(this.id)">
                                    <span class="tip"></span>

                                    </div>                 
                                </div>

                                <div class="form-group">
                                    
                                    <label for="email" class="col-xs-5 col-sm-3 control-label" >电子邮箱：</label>
                                    <div class="col-xs-8 col-sm-5">
                                    <input type="text" id="email" class="form-control" name="email" placeholder='email' onblur="sendAjax(this.id)">
                                    <span class="tip"></span>

                                    </div>                 
                                </div>

                                <div class="form-group">
                                    
                                    <label for="idnum" class="col-xs-5 col-sm-3 control-label">证件号码：</label>
                                    <div class="col-xs-8 col-sm-5">
                                    <input type="text" id="idnum" class="form-control" name="idnum" placeholder='ID NUMBER' onblur="sendAjax(this.id)">
                                    <span class="tip"></span>
                                    </div>                 
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-4 col-sm-2 col-xs-3">
                                    <input type="button" name="sub" value="确认" class="btn btn-success" onclick="ifsub()">
                                    </div>
                                    <div class="col-sm-4 col-xs-3">
                                    <input type="reset" value="重置" class="btn btn-danger">
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
    <script src="http://localhost:8080/CarRental/static/js/ajax.js"></script>
 



</body>
</html>	
	
			

