<?php
    namespace common;
       class page{
        private $total;     //总共记录数
        private $rows;      //每页的行数
        private $limit;  
        private  $uri;
        private $page;
        private $pagenum;
        private $arr=array("header"=>"条记录","pre"=>"前一页","next"=>"下一页","first"=>"首页","last"=>"尾页");
        
        function __construct($total,$rows='5'){
            $this->total=$total;
            $this->rows=$rows;
            $this->uri=$this->geturi();
            $this->page=!empty($_GET['page'])?$_GET['page']:1;
            $this->pagenum=ceil($this->total/$this->rows);   //页数
            $this->limit=$this->setlimit(); //获取limit
            
            //var_dump($this);
        }
        
        function __get($property){
            if($property=='limit'||$property=='pagenum'||$property=='page')
                   return $this->$property;
            else 
                   return false;
            
            
        }
        /**
         *  @return string 返回去掉page参数的url
         */
      private function geturi(){
          
           $uri=$_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':'?');
           //echo $uri;
         
         
            $query=parse_url($uri); //把url转化为数组               
            if(isset($query['query'])){ //若url中存在参数部分
                parse_str($query['query'],$params); //把参数部分赋值给一个数组
                unset($params['page']);        //去掉存在的 page参数
                $uri=$query['path'].'?'.http_build_query($params);
             }
            return $uri;
           //print_r($params);                 
        }
       
        
           /**
            * 根据当前的页数 来计算 limit 限制的取值范围
            * @return string
            */
        
          private function setlimit(){
              $diff=$this->total-$this->rows*($this->page-1);
               if($this->page==$this->pagenum){
                   return "Limit ".$this->rows*($this->page-1).",".$diff;  
               }else
              return "Limit ".$this->rows*($this->page-1).",{$this->rows}";
              
              
              
          }
    
           /**
            * 返回当前已显示的总条数   
            */
          
          private function end(){
              return min($this->total,$this->page*$this->rows);
              
          }
          /**
           * 返回当前页面开始的记录
           * @return number
           */
          private function start(){
              if($this->page==1){
                  return 1;
              }else
              return ($this->page-1)*$this->rows+1;
              
          }
          
          
          
          /**
           * 下一页
           * @return string
           */
          private function next(){
              if($this->page==$this->pagenum)
                  return "&page={$this->pagenum}";
               else 
                   return "&page=".($this->page+1);
          }
          
          /**
           * 上一页
           * @return string
           */
          private function pre(){
              if($this->page==1)
                  return "&page=1";
              else 
                  return "&page=".($this->page-1);
          }
          
          
 
   
          /**
           * 页面列表
           * @return string|number
           */
          private function pagelist(){
              $listnum=4;
              $list="";
              for($i=$listnum;$i>0;$i--){
                  $page=$this->page-$i;
                  if($page<=0)continue;   
                 $list.="<a href='{$this->uri}&page=$page'>".$page."</a>";
                 
              }
              $list.=$this->page;
              
              for($i=1;$i<$listnum;$i++){
                  $page=$this->page+$i;
                  if($page>$this->pagenum) break;
                  
                  $list.="<a href='{$this->uri}&page=$page'>".$page."</a>";
                  
                  
                  
              }
              return $list;
              
          }
          
   
         /**
          * 显示分页信息
          * @return string
          */
          function forpage(){
              //echo $this->uri;
              $html= "共".$this->total.$this->arr['header']."&nbsp;&nbsp;";
              $html.="当前第".$this->page."页"."&nbsp;&nbsp;";
              
              $html.="本页显示".($this->end()-$this->start()+1)."条记录"."&nbsp;&nbsp;";
              //$html.="本页显示第{$this->start()}-{$this->end()}条记录"."&nbsp;&nbsp;";
              $html.="{$this->page}/{$this->pagenum}页"."&nbsp;&nbsp;";
              $html.="<a href='$this->uri&page=1'>".$this->arr['first']."</a> &nbsp;";
              $html.="<a href='$this->uri&page={$this->pagenum}'>".$this->arr['last']."</a> &nbsp;";
              $html.="<a href='$this->uri"."{$this->pre()}'>"."上一页"."</a>"."&nbsp;&nbsp;";
              $html.="<a href='$this->uri"."{$this->next()}'>"."下一页"."</a>"."&nbsp;&nbsp;";
              $html.=$this->pagelist();
              $html.="<input type='text' id='page' name='page'  onkeydown='javascript: if(event.keyCode==13){
                    if(this.value<=".$this->pagenum."&&this.value>0){
                           var page=this.value;     }else{
                           var page=".$this->page."
                               }
                        if(page!=\"\"){location=\"".$this->uri."&page=\"+page}
                   }    ' >";
              
              $html.="<input type='button' value='GO' onclick='javascript:
                        if(this.previousSibling.value<=".$this->pagenum."&&this.previousSibling.value>0){
                           var page=this.previousSibling.value;     }else{
                           var page=".$this->page."
                               }
         
              if(page!=\"\") window.location=\"".$this->uri."&page=\"+page;'>";
              return $html;
          }
          
        
         
        
        
        
   }