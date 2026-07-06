function validar(){
    let nome = document.getElementById("nome").value;

    if(nome==""){
        alert("Digite o nome do funcionário");
        return false;

    }

    return true;

}