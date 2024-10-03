const productos = {
    producto1: {
        nombre: "carne",
        cantidad: 3,
        precio: 15
    },
    producto2: {
        nombre: "leche",
        cantidad: 1,
        precio: 5
    },
    producto3: {
        nombre: "Huevos",
        cantidad: 5,
        precio: 2
    }
};

const calcularPrecioxCantidad = (objeto) => {
    let costTotal = 0;
    for (let producto in objeto) {
        let element = objeto[producto];
        costTotal += element["cantidad"] * element["precio"];
    }
    return costTotal;
};

console.log(calcularPrecioxCantidad(productos))