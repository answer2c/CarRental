<?php
    namespace common;
    use common\DbConn;
    class CRUD{

            private static $db;
            public $selectdata;//查询结果
            public $total;//结果条数


            public function __construct(){
             
                self::$db=DbConn::getInstance()->DBC;
                
                        
            }


                    /**
             * 查询函数
             */
            public function select($column=array("*"),$condition=null,$table,$limit=null,$other=null){
                $col=implode(',',$column);
                $sql='select '.$col.' from '.$table;
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
                 $this->selectdata=$data;
                 $this->total=$st->rowCount();
            }


            /**
             * 插入操作
             */
            public static function insert($val,$table,$col=null){
                $sql='insert into '.$table;
                if($col!=null){
                    $colstr=implode(',',$col);
                    $sql.=' ('.$colstr.')';
                }
                $sql.=' values(\''.implode('\',\'',$val).'\')';
               
                $data=self::$db->query($sql);

               
               
                return $data;
            }





    }