function confirmar(e){

    if(confirm("seguro de eliminar este registro?")){
        return true;
    }else{
        e.preventDefault();
    }
    
}



let botonDelete = document.querySelectorAll(".linkEliminar");

for(let i=0; i<botonDelete.length; i++){
    botonDelete[i].addEventListener('click')
}


