            function DarkLightMode(stylesheet){
                document.querySelector('#theme').setAttribute('href', "MainTemplateDark.css"); //query selector #theme looks for the ID theme to help find stylesheet
                localStorage.setItem('href', stylesheet);
                //var stylesheet = document.querySelector('#theme');
                if (localStorage.getItem('stylesheet') == "MainTemplateDark.css"){
                    //localStorage.getItem('stylesheet') == "MainTemplate.css");
                    localStorage.setItem('stylesheet', "MainTemplate.css");
                    theme.href = "MainTemplate.css";
                }else{
                    localStorage.getItem('stylesheet') == "MainTemplateDark.css";
                    ///theme.href = "MainTemplate.css" 
                    localStorage.removeItem('stylesheet', "MainTemplate.css");
                    localStorage.setItem('stylesheet', "MainTemplateDark.css");
            
                }
                
               
        }
        window.onload=function() {
            document.querySelector('#theme').setAttribute('href', localStorage.getItem("stylesheet")?localStorage.getItem("stylesheet"):"MainTemplate.css");       
        }
    //Last changes made set key to 'href' in setAttribute.  It seems to be holding the new value but not giving option to switch back
        
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