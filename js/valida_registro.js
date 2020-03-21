function validarPassword(form)
    {
        if(form.password.value != "" && form.password.value == form.confirmarPassword.value) {
            if(form.password.value.length < 8) {
                alert("Error: La contraseña debe contener al menos ocho caracteres!");
                form.password.focus();
                return false;
            }
        alert("Ingreso una contraseña válida: " + form.password.value);
        return true;
    }

