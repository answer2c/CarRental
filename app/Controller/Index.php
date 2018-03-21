<?php
    namespace app\Controller;
   
    use app\Model\Car;


    class Index{

        /**
         * 跳转主页
         */
        public function index(){
          
            $nav_data=self::checkSession();
            require 'app/View/home.php';
        }

        /**
         * 跳转租车页面
         */
        public function rent(){

            //检查session
            $nav_data=self::checkSession();

            $carMess='';
            $car_data='';

            $car=new Car();
            $col1=array('type');
            $other='group by type';

            $data1=$car->select($col1,null,null,$other);
            if(is_array($data1)){
                foreach($data1 as $val){
                    $car_data.='<option>'.$val['type'].'</option>';
    
                }
            }else {
                echo $data1;
            }
           


            $col2=array('*');
            $con2=array("returned"=>"1");
           
            $data2=$car->select($col2,$con2);//获取到全部未借出汽车信息
            if(is_array($data1)){
            foreach($data2 as $val){
                    $carMess.='<tr><td>'.$val['type'].'</td><td>'.$val['model'].'</td><td>'.$val['no'].'</td><td>'.$val['price'].'</td><td><a href="#">详细信息</a></td><td><a href="#">租借</a></td></tr>';
            }
        }

            require 'app/view/rent.php';
        }

        /**
         * 跳转还车页面
         */
        public function  back(){
         
            //检查session,若没登陆 则提示并回退到上一界面
            if(!isset($_SESSION['user'])){
                self::goError();
                echo '<script>
                history.back();
                </script>';
            }else{
                $nav_data=self::checkSession();
                require 'app/view/back.php';
            }
            
        }

        /**
         * 跳转至登录页面
         */
        public static function register(){
                require 'app/view/register.php';
        }



        
        public static function goError(){
            echo '<script>alert("请您先登录！")</script>';
        }


        
        /**
         * 查看是否有用户session信息
         * 根据登录情况生成导航
         */
        public static function checkSession(){

            if(isset($_SESSION['user'])){
                $data='<li><a href="http://"><span class="glyphicon glyphicon-user"></span>个人信息 </a></li>
               
                <li class="pm"><a href="http://"> <span class="glyphicon glyphicon-log-out"></span>注销 </a></li>';
            }else{
                $data=' <li><a href="./?c=index&m=login">登录</a></li>
                    
                    <li class="pm"><a href="./?c=index&m=register" id="login">注册</a></li>';
            }
            return $data;
        }

        

    }