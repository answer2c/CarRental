<?php
    namespace app\Model;
    use \common\DbConn;
    use  \common\CRUD;
    class User{

        public function __construct(){
            $curd=new CRUD();
        }
          /**
             * 查询
             */
            
            public function select($column,$condition=null,$limit=null,$other=null){
             
                $data=CRUD::select($column,$condition,'user',$limit,$other);
                return $data;
              }


            public  function insert($val,$col=null){
             
                $data=CRUD::insert($val,'user',$col);
                return $data;
            }







    }
    