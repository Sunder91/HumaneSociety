function ThemeChange(){
    var x = document.getElementById("afbg");
    if(x.style.backgroundColor ===  "rgb(138, 138, 138)"){
        x.style.backgroundColor = "rgb(34, 34, 34)";
    }else{
        x.style.backgroundColor = "rgb(138, 138, 138)";
    }
    //x.classList.toggle("afbglight");
    var y = document.getElementById("afdesc");
    if(y.style.backgroundColor === "rgb(34, 34, 34)") {
        y.style.backgroundColor = "rgb(138, 138, 138)";
    }else{
        y.style.backgroundColor = "rgb(34, 34, 34)";
    }
    if(y.style.color === "white"){
        y.style.color = "black";
    }else{
        y.style.color = "white";
    }
    var z = document.getElementById("user");
   if(z.style.color === "rgb(0, 255, 21)"){ 
        z.style.color = "#0265b6";  
   }else{
       z.style.color = "rgb(0, 255, 21)";   
   }

     var w = document.getElementById("subnav");
   if(w.style.color === "black"){
       w.style.color = "white";
   }else{
       w.style.color = "black";
   }
    var v = document.getElementById("affooter");
     if(v.style.backgroundColor ===  "rgb(34, 34, 34)"){
         v.style.backgroundColor = "rgb(138, 138, 138)";
     }else{
         v.style.backgroundColor = "rgb(34, 34, 34)";
     }

     } //end of document
 
   


