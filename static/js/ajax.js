/**
 * 检查两次密码是否一致
 * @param  obj 
 */
function checkpwd(obj){
    var p1=document.getElementById('pwd');
    if(p1.value!=obj.value){
         obj.nextElementSibling.innerText="两次输入密码不一致";
        
    }else{
        obj.nextElementSibling.innerText="";
    }


}

/**
 * 发送ajax请求
 * @param {*} id 
 */
function sendAjax(id){
    
    var xhr;
    var elem=document.getElementById(id);
   
    var val=elem.value;

    if(window.XMLHttpRequest){
        xhr=new XMLHttpRequest();
    }else{
        xhr=new ActiveXObject("Microsoft.XMLHTTP");
    }   
    document.getElementById(id).nextSibling.innerHTML="a";
    xhr.onreadystatechange=function(){
        if(xhr.readystate=4&&xhr.status==200){
            var data=xhr.responseText;
            elem.nextElementSibling.innerText=data;
           
        }
    }

    xhr.open('POST','./?c=FormHandle&m=ajax',true);
    var userdata=id+"="+val;
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send(userdata);
  
}

/**
 * 判断输入是否合法，合法则提交
 */
function ifsub(){
    var tag=0;
    var tips=document.getElementsByClassName("tip");
    for(var i=0;i<tips.length;i++){
        if(tips[0].innerText!=""){
           tag=1;
        }
    }
    if(tag==0){
        document.getElementById("myform").submit();
    }else{
        alert("表单输入错误");
    }
    
}