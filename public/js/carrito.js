$(document).ready(function(){
    $("main>section>button").click(function(){
        let db = openDatabase('mycarrito', '1.0', 'Carrito DB', 2 * 1024 * 1024);
        db.transaction(function (tx) {
            tx.executeSql('CREATE TABLE IF NOT EXISTS carrito (id, descripcion, precio, cantidad)');
        });
        //let carrito = JSON.parse(localStorage.getItem('carrito'));
        let section = $(this).parent();
        let id = section.attr("producto_id");
        let descripcion = $(this).prev().prev().text();
        let precio = $(this).prev().text();
        let cantidad = 1;
        db.transaction(function (tx) {
            tx.executeSql("SELECT id, descripcion, precio, cantidad FROM carrito  "+
            " WHERE id = "+id, [], function (tx2, results) {
                cantidad = results.rows[0].cantidad;
                if (results.rows.length == 1)
                    /*tx2.executeSql("UPDATE carrito SET cantidad = ? WHERE id=?",[cantidad+1,id],function(tx3, result3) {
                        console.log(result3);
                    });*/
                    tx2.executeSql("REPLACE INTO carrito (id, descripcion, precio, cantidad) "+
                        " VALUES (?,?,?,?)",[id,descripcion,precio,cantidad+1],function(tx3, result3) {
                            console.log(result3);
                    });
                else
                    tx2.executeSql("INSERT INTO carrito (id, descripcion, precio, cantidad) "+
                    " VALUES (?,?,?,?)",[id,descripcion,precio,cantidad]);
            }, null);
        });
        /*if (carrito==null)
        {
            let cantidad = 1;
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
        }*/
    });
});
