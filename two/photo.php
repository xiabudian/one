<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>document</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="http://static.runoob.com/assets/foundation-icons/foundation-icons.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
    <!-- 新 Bootstrap4 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
 
<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
<script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
 
<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<style>
*{
        margin:0 auto;
        padding:0;
      }
.carousel-item img{
    width:100%;

}
.sectionb{
    width:260px;
    margin:10px 5px;
}
.sectiond{
    height:600px;
    display:inline-block;
    width:68%;
}
.sectionc{
    width:26%;
    height:220px;
    display:inline-block;
}
.sectione{
    min-height:500px;
    padding:7em 0;
}
.sectione h2{
    margin-bottom:20px;
}
.sectionf{
    margin:10px 0;
    max-width:100%;
    height:600px;
}
.sectiong{
    max-width:100%;
    margin:10px 0;
    height:290px;
}
 img {
  border: 0;
  }

  a{
  color: #fff;
  text-decoration: none;
  }
.servicesBox {
  margin:5.5em auto;
  line-height: 18px;
  color: #999999;
  font-size: 12px;
  }
  

 .servicesBox .serBox {
  cursor: pointer;
  border: 1px solid #fff;
  display: inline;
  height: 320px;
  float: left;
  overflow: hidden;
  background-color: #f7f7f7;
  position: relative;
  }

  .servicesBox .serBoxOn {
  font-family: "Microsoft Yahei";
  display: none;
  width:320px;
  height:320px;
  background: url(http://demo.lanrenzhijia.com/2014/pic0910/images/serboxon_bg.gif) repeat 0px 0px;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 19;
  }

  .servicesBox .serBox .pic1 {
  width: 110px;
  height: 110px;
  text-align: center;
  position: absolute;
  top: 42px;
  right: 86px;
  z-index: 99;
  }

  .servicesBox .serBox .pic2 {
  width: 110px;
  height: 110px;
  text-align: center;
  position: absolute;
  top: 42px;
  left: -110px;
  z-index: 99;
  }

  .servicesBox .serBox .txt1 {

  height: 100px;
  color: #999999;
  position: absolute;
  top: 175px;
  left: 95px;
  z-index: 99;
  }

  .servicesBox .serBox .txt2 {
  width: 198px;
  height: 100px;
  color: #a9cf4f;
  position: absolute;
  top: 175px;
  right: -240px;
  z-index: 99;
  }

  .servicesBox .serBox span.tit {
  font-size: 16px;
  display: block;
  text-align: center;
  }

  .servicesBox .serBox .txt1 .tit {
  color: #000000;
  line-height: 30px;
  }

  .servicesBox .serBox .txt2 .tit {
  color: #fff;
  line-height: 30px;
  font-family: "Microsoft Yahei";
  }

  .servicesBox .serBox p {
  padding: 0 10px;
  text-align: center;
  }
  .sectionw{
    color:#000;
    margin:1em auto;
    text-align:center;
  }
  .header{
        width:100%;
        height:auto;
        background-color: #000000;
        overflow:hidden;
    }
    .header  ul{
        width:800px;
    }
    .header  ul li{
        list-style-type: none;
        float:left;
        line-height: 50px;
        overflow:hidden;
        text-align: center;

        
    }
    .header ul li a{
        text-decoration: none;
        display:inline-block;
        width:100px;
        height:50px;
      
    }
    ul li a:hover{
        background-color: red;
    }
    #test{
        display:none;
    }
    @media screen and (max-width:768px){
      *{
        margin:0 auto;
        padding:0;
      }
     #test{
        display:block;
        margin:12px auto;
    }
  .header  ul{
    display: none;
    width:100%;
    z-index:99;
    opacity:0.6;
  }
  .header  ul li a{
    width:100%;
    display: block;
    color:#ffffff;
  }
  .header  ul li{width:100%;}
  .addsix{
    float:left;
  }
  p.addeight{
    display:block;
    text-align: center;
    line-height: 48px;
    margin-bottom: 0;
  }
.addten{
  display:none;
}
.bingo{
  display:none;
}
}
.footer{
  background-color: #000000;
  color:#fff;
  width:100%;
  height:50px;
}
.footer p{
  text-align: center;
  line-height: 50px;
}
.addeight{
  display:none;
}
</style>
</head>
<body>
<script>
$(document).ready(function(){
  $("#test").click(function(){
    $("ul").slideToggle("slow");
  });
});
</script>
<div class="header">
<i style="font-size:24px" class="fa addsix" id="test">&#xf0c9</i>
<p class="addeight">
<span style="color:#fa8072">小白</span><span style="color:#5cbc3a">时光网</span>
</p>
<ul>
<li>
<span  class="bingo" style="color:#fa8072">小白</span><span class="bingo" style="color:#5cbc3a">时光网</span>
</li>
    <li><a href="index.php">
            <p>小白时光</p>
        </a></li>
    <li><a href="photo.php">
            <p>小白图库</p>
        </a></li>
    <li><a href="tuwen.php">
            <p>小白语录</p>
        </a></li>
    <li><a href="message.php">
            <p>留言园地</p>
        </a></li>
    <li><a href="connect.php">
            <p>联系我们</p>
        </a></li>
</ul>

</div>



<div class="container">





<i class="fi-layout" style="font-size:30px;"></i>
<span style="font-size:1em;">图文欣赏</span>
<div class="sectiona" style="height:30px"></div>
<div class="row">
<div class="col-md-3 col-6 card   float-left " ">
     <img src="images/3-150320103132.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 

     <div class="col-md-3 col-6 card   float-left " ">
     <img src="images/3-150320103135.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 

     <div class="col-md-3 col-6 card   float-left " ">
     <img src="images/3-150320103148.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 


     <div class="col-md-3 col-6 card   float-left " ">
     <img src="images/3-150320103154.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 
</div>


<div class="row">
<div class="col-md-3 col-6 card   float-left " ">
     <img src="images/3-1503201046470-L.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 

     <div class="col-md-3 col-6 card   float-left " ">
     <img src="images/3-150320103154.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 

     <div class="col-md-3 col-6 card   float-left " ">
     <img src="images/9-1P403114G92.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 


     <div class="col-md-3 col-6 card   float-left " ">
     <img src="images/20160428_9693a978cc95c52593aewfgocltja84w_284.jpg" alt="" class="card-img-top">
     <div class="card-body">
   <h4 class="card-title">think</h4>
   <p class="card-text">what you are said</p>

   
  
     </div>
     </div> 



</div>






</div>







<!--
<div class="sectione bg-dark text-white">
<div class="col-md-6 mx-auto">
<script src="http://cdn.dowebok.com/131/js/wow.min.js"></script>
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
  new WOW().init();
};
</script>
            
                    <h2 style="text-align:center">新人入门</h2>
                    <p style="text-align:center">尽管使用简单，但是对于某人来说，上手还是有点困难的，我们为小白提供了相关教程参阅</p>
<div class="col-md-4 mx-auto">  
<div class="wow slideInLeft" data-wow-delay="2s" data-wow-offset="10" >       
       <button type="button" class="btn btn-lg btn-block btn-outline-success">小白教程</button>
       </div>
<div class="wow slideInRight" data-wow-delay="1s" data-wow-offset="10">
<button type="button" class="btn btn-lg  btn-block btn-outline-success">小白求助</button>
</div>
</div> 
                    </div>
</div>
-->

<div class="footer">
<p>Copyright 1998 - 2018 邝帅兵. All Rights Reservedy</p>
</div>



         
            

            
        


</body>
</html>