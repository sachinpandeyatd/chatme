const form = document.querySelector('.login form'),
submitBtn = document.querySelector('.button input'),
errorText = document.querySelector('.error-txt');

form.onsumit = (e)=>{
    e.preventDefault();
}

submitBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/login.php', true);

    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data === 'success'){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}