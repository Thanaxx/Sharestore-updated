var buttonSetting = document.getElementsByClassName("collap");
var i;

for(i = 0; i < buttonSetting.length; i++){
    buttonSetting[i].addEventListener("click", function(){
        this.classList.toggle("active");

        var panel = this.nextElementSibling;
        if(panel.style.display === "block"){
            panel.style.display = "none";
        }else{
            panel.style.display = "block";
        }
    });
}

// darkmode
const theme = document.getElementById("darker");

theme.addEventListener('change', () =>{
    document.body.classList.toggle('drk');
})

