$(document).ready(function(){
    $("header>nav>button").click(function(){
        let carrito = JSON.parse(localStorage.getItem('carrito'));
        console.log("hadoken");
        let carritoD = document.getElementById('carro');
        if (carrito==null)
        {

        }
        else
        {
            if(carritoD.hasChildNodes()){
                while (carritoD.hasChildNodes()) {
                    carritoD.removeChild(carritoD.firstChild);
                  }

            }else{
                let c = document.createElement('div');
                c.textContent="Carrito";
                carritoD.appendChild(c);
                for (let i=0; i<carrito.length; i++)
                {
                    let producto = document.createElement('a');
                    producto.textContent+= carrito[i].id+" ";
                    producto.textContent+= carrito[i].descripcion+" ";
                    producto.textContent+= carrito[i].precio+" ";
                    producto.textContent+= carrito[i].cantidad;
                    carritoD.appendChild(producto);
                }
            }
        }
    });
});
