<?php   
    namespace app\Controller;
    use app\Model\Car;
    use app\Model\User;


    //这个类来处理所有的表单
    class FormHandle{


        /**
         * 处理rent页面的表单
         */
        public function rentHandle(){

            if(!isset($_POST['sub'])){
                exit();
            }
                        //检查session
            $nav_data=Index::checkSession();

            $carMess='';
            $car_data='';
            $car=new Car();
        
            $col1=array('type');
            $other='group by type';

            $data1=$car->select($col1,null,null,$other);

         
           
                if(isset($_POST['cartype'])){    
                    $type=$_POST['cartype'];
                    
                    foreach($data1 as $val){
                        if($val['type']==$type){
                            $car_data.='<option selected>'.$val['type'].'</option>';
                        }else{
                            $car_data.='<option>'.$val['type'].'</option>';
                        }
                       
        
                    }       

                    $col2=array('*');
                    $con2=array("returned"=>"1","type"=>$type);
                    $data2=$car->select($col2,$con2);
                    foreach($data2 as $val){
                        $carMess.='<tr><td>'.$val['type'].'</td><td>'.$val['model'].'</td><td>'.$val['no'].'</td><td>'.$val['price'].'</td><td><a href="#">详细信息</a></td><td><a href="#">租借</a></td></tr>';
                         }
                
                }
           



            require 'app/view/rent.php';
        }


        /**
         * 处理注册表单
         */
        public function regiHandle(){
           if(empty($_POST)){
               exit();
           }

            $user=new User();
            $username=$_POST['username'];
            $pwd=md5($_POST['pwd']);
            $sex=$_POST['sex'];
            $tel=$_POST['tel'];
            $email=$_POST['email'];
            $idnum=$_POST['idnum'];

            $col=array($username,$pwd,$sex,$tel,1,$email,$idnum);
            $data=$user->insert($col);
            if($data){
                self::regiSucc();
            }else{
                echo '<script>alert("操作失败！"); history.back();</script>';

            }


        }


        /**
         * 处理ajax请求
         */
        public function ajax(){
            if(isset($_POST['username'])){
                if($_POST['username']==null){
                    echo '用户名不能为空';
                  
                }else{
                    $users=new User();
                    $col=array("count(*)");
                    $con=array("username"=>$_POST['username']);
                    $data=$users->select($col,$con);
                    if($data[0]['count(*)']>0){
                        echo '用户名已存在';
                    }
                  
                }
            }

            if(isset($_POST['pwd'])){
                if($_POST['pwd']==null){
                    echo '密码不能为空';
                  
                }elseif(strlen($_POST['pwd'])<4){
                    echo '密码长度不能小于4';
                }
            }

        }

        private static function regiSucc(){
         require 'app/View/OK.html';

        }


    }
