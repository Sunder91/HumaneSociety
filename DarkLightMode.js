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