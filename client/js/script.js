qtdFilhos = 0;
$( document ).ready(function() {
    $("#filhosTrue").click( () => {
        $(".botaoEnviar").show()
        qtdFilhos = qtdFilhos=1;
        renderizaFilhos()
        $(".containerFilhos").show()
        $(".botaoAdicionar").show()
    } )
    $("#filhosFalse").click( () => {
        $(".botaoEnviar").show()
        qtdFilhos = 0;
        $(".containerFilhos").hide()
        $(".botaoAdicionar").hide()
    } )
    $(".adicionar").click( () => {
        qtdFilhos = qtdFilhos+1;
        renderizaFilhos()
    } )
});

function renderizaFilhos() {
    let filhosHtml = '';
    for (let index = 0; index < qtdFilhos; index++) {
        filhosHtml = filhosHtml + `
                <div class="form-group">
                    <label for="nomeFilho${index}">Nome do filho</label>
                    <input id="nomeFilho${index}" name="nomeFilho${index}" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="idadeFilho${index}">Idade do filho</label>
                    <input id="idadeFilho${index}" name="idadeFilho${index}" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="remover btn btn-danger">Remover</button> 
                </div>
                <hr>                     
            `
    }     
    qtdFilhos == 0 ? $(".botaoAdicionar").hide() : ''        
    $(".containerFilhos").html(filhosHtml)   
    $(".remover").click( () => {
        console.log('removendo')
        qtdFilhos = qtdFilhos-1;
        renderizaFilhos(qtdFilhos)
    } )     
}

