<?php
    namespace common;

    /**
     * 实现数据库连接
     * 单例模式
     */
    class DbConn{
        public static $db;
        public  $DBC;
        private static $config; //数据库连接的配置
        private function __construct(){
              self::getConfig();//读取配置
              $DSN=self::$config['type'].":dbname=".self::$config['database'].";host=".self::$config['host'].";port=".self::$config['port'];
              try{
                  $this->DBC=new \PDO($DSN,self::$config['username'],self::$config['password']);
              }catch(PDOException $e){
                  echo "Connection Error:".$e->getMessage();
              }
        }

        public static function getInstance(){
            if(self::$db){
                return self::$db;
            }else{
                self::$db=new self();
                return self::$db;
            }
        }

        private static function getConfig(){
            $config_file="conf/database.php";
            if(file_exists($config_file)){
                if(is_file($config_file)){
                    self::$config=include($config_file);
                }
            }else{
                 exit('Get DataBase Config Error..');
         
            }
        }


    }   

  
 

