
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
    

        var theme = document.getElementById('theme');
        if (theme) {
            theme.addEventListener('change', function(event){
                resetTheme(); //update color theme
            });

            function themeSwitch() {
                if (theme.checked) {
                    document.body.setAttribute('href', 'MainTemplate.css');
                    localStorage.setItem('href', 'MainTemplate.css');
                }else{
                    document.body.removeAttribute('href');
                    localStorage.removeItem(themeSwitch);
                }
            };
        }
