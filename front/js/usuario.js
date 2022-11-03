//informa o log do acesso
function editar_registro(){
    console.log("Acessou o editar: ")

    //pega dados
    var nome = document.getElementById("valor_nome")
    var pais = document.getElementById("valor_pais")

    //altera campo
    nome.innerHTML = "<input class='form-ed' type='text' id='nome_text" + "'value'" + nome.innerHTML+ "'>";
}