const opt = document.querySelector("#set");
const modalOption = document.querySelector(".modalWrite");

opt.addEventListener('click', () => {
    modalOption.style.display = "block";
});

window.onclick = function(event){
    if (event.target == modalOption){
        modalOption.style.display = "none";
    }
}




// const logbtn = document.querySelector(".Start");
// const logForm = document.querySelector(".loginPage");


// logbtn.addEventListener('click', ()=> {
//     logForm.style.display = "block";
// });
// SCREEN WRITE MODAL 


// const logForm = document.querySelector(".loginPage");
// const openmodal = document.querySelector("#set");

// SCREEN WRITE MODAL 
// const modal = document.querySelector(".modalWrite");

// window.onclick = function(event){
//     if (event.target == logForm){
//         logForm.style.display = "none";
//     }else if(event.target == modal){
//             modal.style.display = "none";
//     }
// }
// openmodal.addEventListener('click', () => {
//     logForm.style.display = "block";
// });
