
   var slideIndex = 0; 
         
  
    carousel();  





  function carousel() {
    var i;
    var x = document.getElementsByClassName("div");
    var y = document.getElementsByClassName("bt");


   for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
    }

   slideIndex++;
   if (slideIndex > x.length) {slideIndex = 1}
   x[slideIndex-1].style.display = "block";


    for (var v = 0; v < y.length; v++) {
     
      y[v].style.background = "white";
      y[v].style.fontWeight= "normal";

  }

  if (slideIndex > y.length) {slideIndex=1}
  y[slideIndex-1].style.background = "green";
  y[slideIndex-1].style.fontweight= "bold";

}


function plusDivs(n) {

  showDivs(slideIndex += n);

}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("div");

  var y = document.getElementsByClassName("bt");

  if (n > x.length) {slideIndex = 1,aux=5}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
   
  x[slideIndex-1].style.display = "block";
   

  if (n > y.length) {slideIndex = 1}
  if (n < 1) {slideIndex = y.length} ;
  for (var v = 0; v < y.length; v++) {
    y[v].style.background = "white";
    y[v].style.fontWeigh= "normal";
  }
   
  y[slideIndex-1].style.background = "green";
  y[slideIndex-1].style.fontWeight= "bold";
  

/*
if((slideIndex-1) <5){
  console.log(" ++aux:"+((slideIndex-1)+aux)); 
   y[slideIndex-1].style.display= "block";
   y[(slideIndex-1)+aux].style.display= "none";
 

}
  

  
if((slideIndex-1) >=5){
  console.log("--aux:"+((slideIndex-1)-aux));
  y[slideIndex-1].style.display= "block";
  y[(slideIndex-1)-aux].style.display= "none";

}*/
  

}


function showDivClick(n) {

  var v = document.getElementsByClassName("div");
  var y = document.getElementsByClassName("bt");  
  if(n==0){
    slideIndex = 1;
    

   v[0].style.display = "block";
   v[1].style.display = "none";
   v[2].style.display = "none";
   v[3].style.display = "none";
   v[4].style.display = "none";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "none";


   y[0].style.background= "green";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "white";
  
   

   y[0].style.fontWeight= "bold";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";
   
    
  }else if(n==1){
    slideIndex = 2;
  

    v[0].style.display = "none";
   v[1].style.display = "block";
   v[2].style.display = "none";
   v[3].style.display = "none";
   v[4].style.display = "none";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "none";
    
    y[0].style.background= "white";
   y[1].style.background= "green";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "white";
   
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "bold";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";

    
  }else if(n==2){
    slideIndex = 3;
    v[0].style.display = "none";
   v[1].style.display = "none";
   v[2].style.display = "block";
   v[3].style.display = "none";
   v[4].style.display = "none";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "none";
    
    y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "green";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "white";
   
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "bold";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";
    
  }else if(n==3){
    
    slideIndex = 4;
    v[0].style.display = "none";
   v[1].style.display = "none";
   v[2].style.display = "none";
   v[3].style.display = "block";
   v[4].style.display = "none";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "none";
      
    y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "green";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "white";
   
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "bold";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";
    
  }else if(n==4){
     
    
    slideIndex = 5;
    v[0].style.display = "none";
   v[1].style.display = "none";
   v[2].style.display = "none";
   v[3].style.display = "none";
   v[4].style.display = "block";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "none";

    
    y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "green";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "white";
   
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "bold";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";


  
  }else if(n==5){
    
    slideIndex = 6;
    v[0].style.display = "none";
   v[1].style.display = "none";
   v[2].style.display = "none";
   v[3].style.display = "none";
   v[4].style.display = "none";
   v[5].style.display = "block";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "none";
    
    y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "green";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "white";
     
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "bold";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";
    
  }else if(n==6){
    
    slideIndex = 7;
    v[0].style.display = "none";
    v[1].style.display = "none";
    v[2].style.display = "none";
    v[3].style.display = "none";
    v[4].style.display = "none";
    v[5].style.display = "none";
    v[6].style.display = "block";
   v[7].style.display = "none";
   v[8].style.display = "none";
    
   y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "green";
   y[7].style.background= "white";
   y[8].style.background= "white";
     
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "bold";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "normal";
    
  }else if(n==7){
    
    slideIndex = 8;
    v[0].style.display = "none";
   v[1].style.display = "none";
   v[2].style.display = "none";
   v[3].style.display = "none";
   v[4].style.display = "none";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "block";
   v[8].style.display = "none";
    
   y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "green";
   y[8].style.background= "white";
     
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "bold";
   y[8].style.fontWeight= "normal";
    
  }else if(n==8){
    
    slideIndex = 9;
    v[0].style.display = "none";
   v[1].style.display = "none";
   v[2].style.display = "none";
   v[3].style.display = "none";
   v[4].style.display = "none";
   v[5].style.display = "none";
   v[6].style.display = "none";
   v[7].style.display = "none";
   v[8].style.display = "block";
    
   y[0].style.background= "white";
   y[1].style.background= "white";
   y[2].style.background= "white";
   y[3].style.background= "white";
   y[4].style.background= "white";
   y[5].style.background= "white";
   y[6].style.background= "white";
   y[7].style.background= "white";
   y[8].style.background= "green";
     
   y[0].style.fontWeight= "normal";
   y[1].style.fontWeight= "normal";
   y[2].style.fontWeight= "normal";
   y[3].style.fontWeight= "normal";
   y[4].style.fontWeight= "normal";
   y[5].style.fontWeight= "normal";
   y[6].style.fontWeight= "normal";
   y[7].style.fontWeight= "normal";
   y[8].style.fontWeight= "bold";
    
  }



}
