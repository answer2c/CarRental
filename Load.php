<?php
    /**
     * 自动加载类
     */
    class Load{
      
        private static $DireMap=array(
              'app' => __DIR__.'\\'.'app',
              'common'=>__DIR__.'\\'.'common',
        );
     
        public static function autoLoad($class){
                $file=self::findFile($class);
                if(file_exists($file)){
                    if(is_file($file)){
                        require_once $file;
                    }
                   
                }else{
                    exit('Load error');
                 
                }
            
        }

        /**
         * 获取文件路径
         */
        public static function findFile($class){
            $space=substr($class,0,strpos($class,'\\'));//获取顶级命名空间
            $dir=self::$DireMap[$space];
            $filepath=substr($class,strpos($class,'\\')).'.php';   //获取类文件目录
            $path=$dir.$filepath;
            return $path;

        }



    }



   