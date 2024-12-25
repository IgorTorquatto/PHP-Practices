const form = document.getElementById("form");

form.addEventListener('submit',(event)=>{

    event.preventDefault();

    let isValid = true;
    const errorMessageInputs = document.getElementsByClassName("error-input");

    const inputEmail = document.getElementById("inputEmail");
    if(!inputEmail.value || !inputEmail.value.includes('@')){
        errorMessageInputs[0].classList.remove('d-none');
        isValid = false;
    }else{
        errorMessageInputs[0].classList.add('d-none');
    }

    const inputPassword = document.getElementById("inputPassword");
    if(!inputPassword.value || inputPassword.value.length < 6){
        errorMessageInputs[1].classList.remove('d-none');
        isValid = false;
    }else{
        errorMessageInputs[1].classList.add('d-none');
    }

    if(isValid){
        form.submit();
    }
});