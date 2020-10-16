function exibir_categoria(categoria){
    let elementos = document.getElementsByClassName('box_produto');
    console.log (elementos);
    for (var i=0; i<elementos.length; i++){
        console.log (elementos [i].id);
            if (categoria == elementos [i].id)
                elementos [i].style = "display:inline-block";
            else 
            elementos [i].style = "display:none";
    }
}; 

function exibir_todos() {
    let elementos = document.getElementsByClassName('box_produto');

        for (var i=0; i<elementos.length; i++){
        elementos [i].style = "display:inline-block";
    }
}; 

function msg_compra (){
    alert ("Item adicionado ao carrinho!");
};

function destaque(imagem){
    console.log(imagem);
    if (imagem.width == 280)
        imagem.width = 150;
    else 
        imagem.width = 280;
};