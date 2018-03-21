<?php   
    namespace app\Controller;
    use app\Model\Car;


    class RentHandle{


        /**
         * 处理rent页面的表单
         */
        public function handler(){
                        //检查session
            $nav_data=Index::checkSession();

            $carMess='';
            $car_data='';
            $car=new Car();
        
            $col1=array('type');
            $other='group by type';

            $data1=$car->select($col1,null,null,$other);

          //判断post数据是否存在，若存在，则查询相应数据
            if(isset($_POST['sub'])){
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
            }else{
                echo 'no empty';
            }



            require 'app/view/rent.php';
        }




    }
