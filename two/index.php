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
#gc{    
width: 400px;    
height: 400px;    
background: transparent;   
margin: 100px auto;    
color: #fff;    
font-size: 18px;    
overflow: hidden;    
position: relative;    
}    
#gc ul{    
position: absolute;    
top: 200px;   
width:400px; 
}    
#gc ul li{    
text-align: center;    
height: 40px;    
line-height: 40px;    
}    
.songs_cnt{    
float: left;    
margin-top: 200px;    
position: relative;    
}    
.songs_list{    
background-color: rgba(0,0,0,.2);    
border-radius: 5px;    
float: left;    
width: 250px;    
padding: 15px;    
margin-left: -280px;    
}    
.songs_list li{    
height: 40px;    
line-height: 40px;    
font-size: 16px;    
color: rgba(255,255,255,.8);    
cursor: pointer;    
}    
.songs_list li:hover{    
font-size: 20px;    
color: rgba(255,23,140,.6);    
}    
.sel_song{    
position: absolute;    
top: 50%;    
width: 40px;    
height: 80px;    
margin-top: -40px;    
font-size: 16px;    
text-align: center;    
background-color: transparent;    
border: 1px solid #2DCB70;    
font-weight: bold;    
cursor: pointer;    
border-radius: 3px;    
font-family: sans-serif;    
transition:all 2s;    
-moz-transition:all 2s;    
-webkit-transition:all 2s;    
-o-transition:all 2s;    
}   
ul li{
    list-style-type: none;
} 
.sel_song:hover{    
color: #fff;    
background-color: #2DCB70;    
}    
.songs_list li.active{    
color: #f00;    
}   
.addthirteen{
  background-color: #000000;
  overflow: hidden;
}
button{
  margin:15px auto;

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

<div id="demo" class="carousel slide" data-ride="carousel">
 
 
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  src="images/seven.jpg">
    </div>
    <div class="carousel-item">
      <img  src="images/seven.jpg">
    </div>
    <div class="carousel-item">
      <img  src="images/seven.jpg">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 
</div>

<div class="container">
<div class="row">
<button type="button" class="btn btn-danger">图片欣赏</button>
</div>
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





<div class="row">

<button type="button" class="btn btn-danger">音乐推荐</button>
<div class="col-md-12 addthirteen rounded">





 <div class="songs_cnt">    
<ul class="songs_list"> 
<li>一腔诗意喂了狗</li>     
<li>白色桔梗花</li>    
<li>伟大的渺小</li>    
</ul>    
<button class="sel_song" style="color:#fa8072">点<br/><br/>我</button>    
</div>   
<div class="col-md-4 col" id="gc">
<script>
function fn(sgname){    
$.get('music/'+sgname+'.lrc',function(data){
var str=parseLyric(data);  
for(var i=0,li;i<str.length;i++){    
li=$('<li>'+str[i][1]+'</li>');    
$('#gc ul').append(li);    
}    $('#aud')[0].ontimeupdate=function(){//视屏 音频当前的播放位置发生改变时触发    
for (var i = 0, l = str.length; i < l; i++) {    
if (this.currentTime /*当前播放的时间*/ > str[i][0]) {    
//显示到页面    
$('#gc ul').css('top',-i*40+200+'px'); //让歌词向上移动    
$('#gc ul li').css('color','#fff');    
$('#gc ul li:nth-child('+(i+1)+')').css('color','red'); //高亮显示当前播放的哪一句歌词    
}    
}    
if(this.ended){ //判断当前播放的音乐是否播放完毕    
var songslen=$('.songs_list li').length;    
for(var i= 0,val;i<songslen;i++){    
val=$('.songs_list li:nth-child('+(i+1)+')').text();    
if(val==sgname){    
i=(i==(songslen-1))?1:i+2;    
sgname=$('.songs_list li:nth-child('+i+')').text(); //音乐播放完毕之后切换下一首音乐    
$('#gc ul').empty(); //清空歌词    
$('#aud').attr('src','music/'+sgname+'.mp3');    
fn(sgname);    
return;    
}    
}    
}    
};    
});    
} fn($('.songs_list li:nth-child(1)').text());   
$('.songs_list li:nth-child(1)').addClass('active');    
$('.songs_cnt').mouseenter(function () {    
var e=event||window.event;    
var tag= e.target||e.srcElement;    
if(tag.nodeName=='BUTTON'){    
$('.songs_list').animate({'marginLeft':'0px'},'slow');    
}    
});    
$('.songs_cnt').mouseleave(function () {    
$('.songs_list').animate({'marginLeft':'-280px'},'slow');    
});    
$('.songs_list li').each(function () {    
$(this).click(function () {    
$('#aud').attr('src','music/'+$(this).text()+'.mp3');    
$('#gc ul').empty();    
fn($(this).text());    
$('.songs_list li').removeClass('active');    
$(this).addClass('active');    
});    
})  
</script>    
<script>
function parseLyric(text) {
    //将文本分隔成一行一行，存入数组
    var lines = text.split('\n'),
        //用于匹配时间的正则表达式，匹配的结果类似[xx:xx.xx]
        pattern = /\[\d{2}:\d{2}.\d{2}\]/g,
        //保存最终结果的数组
        result = [];
    //去掉不含时间的行
    while (!pattern.test(lines[0])) {
        lines = lines.slice(1);
    };
    //上面用'\n'生成生成数组时，结果中最后一个为空元素，这里将去掉
    lines[lines.length - 1].length === 0 && lines.pop();
    lines.forEach(function(v /*数组元素值*/ , i /*元素索引*/ , a /*数组本身*/ ) {
        //提取出时间[xx:xx.xx]
        var time = v.match(pattern),
            //提取歌词
            value = v.replace(pattern, '');
        //因为一行里面可能有多个时间，所以time有可能是[xx:xx.xx][xx:xx.xx][xx:xx.xx]的形式，需要进一步分隔
        time.forEach(function(v1, i1, a1) {
            //去掉时间里的中括号得到xx:xx.xx
            var t = v1.slice(1, -1).split(':');
            //将结果压入最终数组
            result.push([parseInt(t[0], 10) * 60 + parseFloat(t[1]), value]);
        });
    });
    //最后将结果数组中的元素按时间大小排序，以便保存之后正常显示歌词
    result.sort(function(a, b) {
        return a[0] - b[0];
    });
    return result;
}
</script>
<ul></ul>      
</div>
<audio src="music/一腔诗意喂了狗.mp3" id="aud" controls="controls" autoplay="autoplay">    
您的浏览器不支持audio属性，请更换浏览器在进行浏览。    
</audio>
</div>
<div class="col-md-4">
</div>










</div>
</div>






</div>








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
<div class="wow slideInLeft" data-wow-delay="0.5s" data-wow-offset="10" >       
       <button type="button" class="btn btn-lg btn-block btn-outline-success">小白教程</button>
       </div>
<div class="wow slideInRight" data-wow-delay="0.5s" data-wow-offset="10">
<button type="button" class="btn btn-lg  btn-block btn-outline-success">小白求助</button>
</div>
</div> 
                    </div>
</div>

<div class="footer">
<p>Copyright 1998 - 2018 邝帅兵. All Rights Reservedy</p>
</div>



         
            

            
        


</body>
</html>