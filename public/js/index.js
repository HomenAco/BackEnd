const marca = document.getElementById("marca_id")
const modelo = document.getElementById("modelo_id");
let guardaId = 0;
let guardaIdMarca = 0;
function selecionaCarro(tipo){
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "./routes/Filter.php", true)
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState === 4 && ajax.status === 200){
            const json = JSON.parse(ajax.responseText)
            if(json[tipo]){
                const marrcasLista = Object.values(json[tipo].marcas)
                const htmlMarcas =  "<option value>Selecione a marca</option>";
                marca.innerHTML = htmlMarcas;
                const atributoClicar = document.createAttribute('onclick');
                atributoClicar.value = "listaModelo("+tipo+")";
                marca.setAttributeNode(atributoClicar);
                marrcasLista.forEach(elements =>{
                    if(elements.nome == '-'){
                        marca.innerHTML += "<option value="+elements.id+" disabled>"+elements.nome+"</option>";
                    }else{
                        marca.innerHTML += "<option value="+elements.id+" >"+elements.nome+"</option>";
                    }
                })
            }   
        }
    }
    ajax.send();
}
function listaModelo(tipo){
    const selectMarca = marca.options[marca.selectedIndex].value;
    if(!selectMarca || guardaId === selectMarca) return;
    guardaId = selectMarca;
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "./routes/Filter.php", true);
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState === 4 && ajax.status === 200){
            const json = JSON.parse(ajax.responseText);
            if(json[tipo]){
                const htmlModelo = "<option value>Selecione o modelo</option>"
                modelo.innerHTML =  htmlModelo;
                json[tipo].marcas[selectMarca].modelos.forEach(elements =>{
                    modelo.innerHTML += "<option value="+elements.id+">"+elements.nome+"</option>"
                })
            }
        }
    }
    ajax.send();
}