var validarEmail =(email)=>{
    let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(regex.test(email)){
        return true
    }else{
        return false
    }
}



