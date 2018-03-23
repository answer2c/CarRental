<?php
    namespace app\Model;
    use \common\DbConn;
    use  \common\CRUD;
    class User{
        public static $curd;
        public function __construct(){
            self::$curd=new CRUD();
        }
          /**
             * 查询
             */
            
            public function select($column,$condition=null,$limit=null,$other=null){
                
                self::$curd->select($column,$condition,'user',$limit,$other);
                $data=self::$curd->selectdata;
                return $data;
              }


            public  function insert($val,$col=null){
             
                self::$curd->insert($val,'user',$col);
                return $data;
            }







    }
    