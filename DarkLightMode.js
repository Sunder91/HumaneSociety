            function DarkLightMode(stylesheet){
                document.querySelector('#theme').setAttribute('href', "MainTemplate.css"); //query selector #theme looks for the ID theme to help find stylesheet
                localStorage.setItem('href', stylesheet);
                //var stylesheet = document.querySelector('#theme');
                if (localStorage.getItem('stylesheet') == "MainTemplate.css"){
                    //localStorage.getItem('stylesheet') == "MainTemplate.css");
                    localStorage.setItem('stylesheet', "MainTemplateDark.css");
                    theme.href = "MainTemplateDark.css";
                }else{
                    localStorage.getItem('stylesheet') == "MainTemplate.css";
                    ///theme.href = "MainTemplate.css" 
                    localStorage.removeItem('stylesheet', "MainTemplateDark.css");
                    localStorage.setItem('stylesheet', "MainTemplate.css");
            
                }
                
               
        }
        window.onload=function() {
            document.querySelector('#theme').setAttribute('href', localStorage.getItem("stylesheet")?localStorage.getItem("stylesheet"):"MainTemplate.css");       
        }
    //Page is working everything but slider seems to be doing what it needs to. Slider likes to revert to old postion?
        
/* this works
      function DarkLightMode(){
    const theme = document.querySelector("#theme"); //this slects the stylesheet
    if (theme.getAttribute("href") == "MainTemplate.css"){
       // localStorage.setItem('href', 'MainTemplateDark.css');
        theme.href = "MainTemplateDark.css";
    }else{
        //localStorage.removeItem('href', 'MainTemplateDark.css');
        //localStorage.setItem('href', 'MainTemplate.css');

        theme.href = "MainTemplate.css"
    }
    }
*/