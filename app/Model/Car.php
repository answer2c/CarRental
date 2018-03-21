<?php
    namespace app\Model;
    use \common\DbConn;

    /**
     * 汽车表数据映射
     */

    class Car{
            public $username;
            public $passwd;
            public $nickname;
            public $sex;
            public $tel;
            public $authority;
            public $email;
            public $idnum;
            private static $db;


            public function __construct(){
             
                self::$db=DbConn::getInstance()->DBC;
                
              
              
            }

       


            /**
             * 查询函数
             */
            public function select($column,$condition=null,$limit=null,$other=null){
                $col=implode(',',$column);
                $sql='select '.$col.' from car';
                if($condition){
                    $con="";
                    foreach($condition as $key=>$value){
                        $con.=' '.$key.'="'.$value.'" and';
                    }
                    $con=substr($con,0,-3);
                    $sql.=' where'.$con;
                                 }
                if($other){
                    $sql.=" ".$other;
                }

                if($limit){
                    $sql.=' limit '.$limit;
                }
                $st=self::$db->prepare($sql);
                $st->execute();
                $data=$st->fetchAll(\PDO::FETCH_ASSOC);
                return $data;
            }


            public function __destruct(){
                
            }
    }
