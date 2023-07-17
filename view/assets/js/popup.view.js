console.log("connected to validation file")

deleteInput = document.querySelectorAll(".fa-solid.fa-trash");

deleteInput.forEach((element) => {
    element.addEventListener("click", function(){
        // const deleteInput = document.getElementById("trash");
    
        const popup = document.getElementById("popup");
        if (popup.classList.contains("hide")) {
            popup.classList.remove("hide")
            popup.classList.add("show");
        }
        
    });
    
  });

document.getElementById("cancelBtn").addEventListener("click", ()=>{
    // const cancelBtn = document.getElementById("cancelBtn");
    const popup = document.getElementById("popup");
    if (popup.classList.contains("show")) {
        popup.classList.remove("show")
        popup.classList.add("hide");
    }
});