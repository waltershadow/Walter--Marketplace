
const productos = [
    {
        id: "Producto-01",
        titulo: "Miata",
        imagen: "/IMG/KP4weQ6N-ZARCySKcmi-(edit)2-RofxodyW-h.jpg" ,
        categoria: {
            nombre: "Vehiculos",
            id: "vehiculos"
        },
        precio: 1000000.00 
    },
    {
        id: "Producto-02",
        titulo: "Honda Civic",
        imagen: "/IMG/2022_Honda_Civic_LX_Sedan,_front_right,_11-02-2022.jpg",
        categoria: {
            nombre: "Vehiculos",
            id: "Vehiculos"
        },
        precio: 70000.00
    },
    {
        id: "Producto-03",
        titulo: "Ford T",
        imagen: "/IMG/Ford T.jpg",
        categoria: {
            nombre: "Vehiculos",
            id: "vehiculos"
        },
        precio: 35000.50
    },
    {
        id: "Producto-04",
        titulo: "Suerter",
        imagen: "/IMG/sueter.webp",
        categoria: {
            nombre: "Ropa",
            id: "ropa"
        },
        precio: 7.50
    },
    {
        id: "Producto-05",
        titulo: "Dizfras De Dino",
        imagen: "/IMG/t-rex.webp",
        categoria: {
            nombre: "Ropa",
            id: "ropa"
        },
        precio: 25.75
    },
    {
        id: "Producto-06",
        titulo: "Casa Pequeña",
        imagen: "/IMG/casas peque.jpg",
        categoria: {
            nombre: "Alquiler",
            id: "alquiler"
        },
        precio: 90000.00
    },
    {
        id: "Producto-07",
        titulo: "Casa Moderna",
        imagen: "/IMG/casas-moderna.jpg",
        categoria: {
            nombre: "Alquiler",
            id: "alquiler"
        },
        precio: 77777.77
    },
    {
        id: "Producto-08",
        titulo: "Tuba",
        imagen: "/IMG/tuba.webp",
        categoria: {
            nombre: "Instrumentos",
            id: "instrumentos"
        },
        precio: 300000.00
    },
    {
        id: "Producto-09",
        titulo: "Saxofon",
        imagen: "/IMG/sax.jpg",
        categoria: {
            nombre: "Instrumentos",
            id: "instrumentos"
        },
        precio: 250.00
    },
    {
      id: "Producto-10",
      titulo: "Balon de Voleiball",
      imagen: "/IMG/volleibol.jpg",
      categoria: {
          nombre: "Deportes",
          id: "Deportes"
      },
      precio: 300.00
     },
     {
      id: "Producto-11",
      titulo: "Zapatos",
      imagen: "/IMG/deportes.webp",
      categoria: {
          nombre: "Deportes",
          id: "deportes"
      },
      precio: 9.75
      },
      {
          id: "Producto-12",
          titulo: "Audifonos",
          imagen: "/IMG/Audifono.jpg",
          categoria: {
              nombre: "Electronica",
              id: "electronica"
          },
          precio: 13.50
      },
      {
          id: "Producto-13",
          titulo: "Tablet",
          imagen: "/IMG/tablet.webp",
          categoria: {
              nombre: "Electronica",
              id: "electronica"
          },
          precio: 130.50
      },
      {
          id: "Producto-14",
          titulo: "Lego",
          imagen: "/IMG/lego.webp",
          categoria: {
              nombre: "Juguetes",
              id: "juguetes"
          },
          precio: 25.00
      },
      {
          id: "Producto-15",
          titulo: "Pokemon Diamante",
          imagen: "/IMG/poke.webp",
          categoria: {
              nombre: "Entretenimiento",
              id: "entretenimiento"
          },
          precio: 50.50
      },
      {
          id: "Producto-16",
          titulo: "Barbie",
          imagen: "/IMG/barbie.webp",
          categoria: {
              nombre: "Juguetes",
              id: "juguetes"
          },
          precio: 10.50
      }
  ];
  
  const contenedorProductos = document.querySelector("#contenedor-productos");
  const botonesCategorias = document.querySelectorAll(".boton-categoria");
  
  
function cargarProductos(productosElegidos){

    contenedorProductos.innerHTML = "";

    productosElegidos.forEach(producto => {
        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = `
            <img class="producto-imagen"  src="${producto.imagen}" alt="${producto.titulo}" width="256" height="256"></img>
            <div class="producto-detalles">
            <h3 class="producto-titulo">${producto.titulo}</h3>
            <p class="producto-precio">$${producto.precio}</p>
        </div>
        `;
      contenedorProductos.append(div);
          
      })
  }
  
  cargarProductos(productos);

  botonesCategorias.forEach(boton => {
    boton.addEventListener("click", (e) => {

        botonesCategorias.forEach(boton => boton.classList.remove("active"))
        e.currentTarget.classList.add("active");

        if(e.currentTarget.id != "todos"){
        const productosBoton = productos.filter(producto => producto.categoria.id === e.currentTarget.id);
        cargarProductos(productosBoton);
        }else{
            cargarProductos(productos);
        }
    })
});


