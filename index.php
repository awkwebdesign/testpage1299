<!doctype html>

<html lang="en">
<head>
 <meta charset="utf-8">

 <title>Kurt + Andy</title>
 <meta name="description" content="The HTML5 Herald">
 <meta name="author" content="SitePoint">

 <link rel="stylesheet" href="normalize.css">
 <link rel="stylesheet" href="style.css">
 <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>

<body>
    
 <div id="container1" style="background-color:lightgreen; padding:10px; margin:10px; border:2px solid red; height:calc(100vh - 42.5px);">
  <h1 id="helloKurt" style="font-size:calc(5vw + 5vh); font-family: 'Staatliches', cursive;">
   Hello Kurt! Welcome to the world of web development! :)
  </h1>
    
  <p style="font-family: 'Open Sans', sans-serif; font-size:calc(1.5vw + 1.5vh) ">
   You can write anything here! Literally anything! Pictures, text, video, it's all yours if you know how to code it...
  <br>
  <p id="andy" style="font-style:italics; font-family: 'Open Sans', sans-serif;" >- Andy</p>
  <div id="arrowsContainer2" style="width:100%; display:none">
   <img style="height:50px; text-align:center" src="images/icons/scrollDown.gif"/>
  </div>
 </div>
    

    
 <div id="container2" style="background-color:lightgreen; padding:10px; margin:10px; border:2px solid red;">
  <div id="videoCover" style="position:absolute; z-index:1; background-color:transparent; height:500px; width:calc(100% - 45px)">
  </div>
  <iframe id="video" width="100%" height="500" src="https://www.youtube.com/embed/hfbd8aZauZQ?start=46&autoplay=1&modestbranding=1" frameborder="0"; allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
    
 <div id="demo">
  <p id="image" onmouseover="animateScript()" onmouseout="stopAnimate()"></p>
 </div>
    
    
 <div id="arrowsContainer">
  <div id="leftArrow" class="arrows"></div>
  <div id="rightArrow" class="arrows"></div>
  <div id="upArrow" class="arrows"></div>
  <div id="downArrow" class="arrows"></div>
 </div>
    

 <script src="scripts.js"></script>
 <script>
     window.onload = function() {
      //setTimeout(hideVideo,22000);
      setTimeout(showArrows,2600);
     };
     
     function hideVideo() {
         var video = document.getElementById('container2');
         video.style.display="none";
     }
     
     function showArrows() {
         var arrows = document.getElementById('arrowsContainer2');
         arrows.style.display="initial";
     }
 </script>

</body>
</html>

<!--
Icons gathered from

<!-- vexels links -
<a target="_blank" a href="https://www.vexels.com/vectors/preview/153199/keyboard-arrow-keys-stroke-icon"> Keyboard arrow keys stroke icon </a> | designed by Vexels

-->