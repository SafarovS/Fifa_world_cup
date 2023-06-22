const form= document.querySelector(".form"),
randbtn= document.querySelectorAll("input"),
successful= document.querySelector(".succesfuly"),
errortext= document.querySelector(".errortext");

form.onsubmit = (e)=>{
    e.preventDefault();
}

randbtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./controller/function.php", true);
    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data= xhr.response;
                if(data === "success"){
                    successful.style.display = "block";
                    successful.textContent= data;
                }else{
                    errortext.style.display = "block";
                    errortext.textContent= data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}