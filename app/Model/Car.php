<?php
    namespace app\Model;
    use \common\DbConn;
    use \common\CRUD;
    
    /**
     * 用户表数据映射
     */

    class Car{
                  
            /**
             * 查询
             */
            
             public function select($column,$condition=null,$limit=null,$other=null){
                    new CRUD();
                    $data=CRUD::select($column,$condition,'car',$limit,$other);
                    return $data;
             }




            public function __destruct(){
                
            }
    }
