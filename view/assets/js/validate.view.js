console.log("connected to validation file")

const titleInput = document.getElementById('title')

let errorMessage = document.querySelector(".error_message")

titleInput.addEventListener("change", function (){
    if (titleInput.value.trim() === ""){

        errorMessage.innerHTML = "Title cannot be empty"
        errorMessage.style.cssText = "color: red; font-weight: bold; margin: 20px 0 0 10px";
        document.querySelector(".button button").disabled = true;

    } else if (titleInput.value.trim().length > 50){

        errorMessage.innerHTML = "Maximum character length"
        errorMessage.style.cssText = "color: red; font-weight: bold; margin: 20px 0 0 10px";
        document.querySelector(".button button").disabled = true;

    } else {

        errorMessage.innerHTML = "";
        errorMessage.style.removeProperty("margin");
        document.querySelector(".button button").disabled = false;

    }
})

