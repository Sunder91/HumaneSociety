
function DarkLightMode(){
    const theme = document.querySelector("#theme-link"); /*this slects the stylesheet*/
    if (theme.getAttribute("href") == "MainTemplate.css"){
        theme.href = "MainTemplateDark.css";
    }else{
        theme.href = "MainTemplate.css"
    }
    }
    
