$(document).ready(function(){
    $("main>section>button").click(function(){
        let carrito = JSON.parse(localStorage.getItem('carrito'));
        let section = $(this).parent();
        let id = section.attr("producto_id");
        let descripcion = $(this).prev().prev().text();
        let precio = $(this).prev().text();
        if (carrito==null)
        {
            carrito = [{id: id,
                    descripcion: descripcion,
                    precio: precio,
                    cantidad:1}];
            localStorage.setItem('carrito',JSON.stringify(carrito));
        }
        else
        {
            let encontrado = false;
            for (let i=0; i<carrito.length; i++)
            {
                if (carrito[i].id == id)
                {
                    carrito[i].cantidad++;
                    encontrado = true;
                    break;
                }
            }
            if (!encontrado)
            {
                carrito.push({id: id,
                    descripcion: descripcion,
                    precio: precio,
                    cantidad:1});
            }
            localStorage.setItem('carrito',JSON.stringify(carrito));
        }
    });
});
