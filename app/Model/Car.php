<?php
    namespace app\Model;
    use \common\DbConn;
    use \common\CRUD;
    use \common\page;
    /**
     * 用户表数据映射
     */

    class Car{
            public static $curd;
                  
            public function __construct(){
                self::$curd=new CRUD();
            }
            /**
             * 查询
             */
            
             public function select($column,$condition=null,$limit=null,$other=null){
                    
                    self::$curd->select($column,$condition,'car',$limit,$other);
                    $data=self::$curd->selectdata;
                    return $data;
             }



             public function fpage($column,$condition=null,$limit=null,$other=null){
                $pageMess='';
               
                self::$curd->select($column,$condition,'car',$limit,$other);
                $data=self::$curd->total;
                $page=new page($data);

                $pageMess.='<li><a href="'.$page->uri.$page->pre().'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

                $pageMess.=$page->pagelist();
                $pageMess.=' <li><a href="'.$page->uri.$page->next().'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';

                return array($pageMess,$page->setlimit());

             }


            public function __destruct(){
                
            }
    }
