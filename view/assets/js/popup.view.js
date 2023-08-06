console.log("connected to validation file")

deleteInput = document.querySelectorAll(".fa-solid.fa-trash");
confirmDelete = document.querySelector("#confirm-delete")

deleteInput.forEach((element) => {
    element.addEventListener("click", function(){
        // const deleteInput = document.getElementById("trash");

        let room_id = this.getAttribute('data-id');
    
        const popup = document.getElementById("popup");
        if (popup.classList.contains("hide")) {
            popup.classList.remove("hide")
            popup.classList.add("show");
        }

        url = "/delete/" +  room_id

        confirmDelete.addEventListener("click", function() {
            this.href = url;
            console.log(url);
        });

        
        
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