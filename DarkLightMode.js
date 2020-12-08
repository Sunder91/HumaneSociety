            function DarkLightMode(stylesheet){
                const theme = document.querySelector("#theme").setAttribute('href', 'MainTemplate.css'); //query selector #theme looks for the ID theme to help find stylesheet
                localStorage.setItem('stylesheet', stylesheet);
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
                window.onload=function() {
                    document.getElementById('MainTemplate.css').setAttribute("href", localStorage.getItem("stylesheet")?localStorage.getItem("stylesheet"):"MainTemplate.css");       
                }
               
        }
    //Last changes made were added line 9.  Not pulling any errors but not switching stylesheets for some reason.
        
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