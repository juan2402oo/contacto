<?php
include ("navbar.php")
?>


<style>
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Lato, sans-serif;
}
        body {

            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 200vh;
            background-color: white;
}

        .slider-frame {
            width: 100%;
            height: 115vh; /* Ajusta según sea necesario */
            margin: 0 auto;
            overflow: hidden;
            position: relative; /* Necesario para posicionar el texto dentro del contenedor */
}

        .slider-frame ul {
            display: flex;
            padding: 0;
            width: 400%; /* Espacio para todas las imágenes */
            height: 100%;  /* Ajusta la altura del ul al contenedor */
            animation: margin-left 28s infinite alternate ease-in-out; /* Duración de 28 segundos */
        }

        .slider-frame li {
            width: 100%;
            list-style: none;
            position: relative; /* Necesario para el posicionamiento absoluto del texto */
}
        .slider-text {
            position: absolute;
            text-align: center;
            padding: 0 18.5vw; /* Padding basado en el ancho de la pantalla */
            top: 10vh; /* Posiciona el texto relativo a la altura de la pantalla */
            color: aliceblue;
            font-size: 2.5vw; /* Tamaño de fuente relativo al ancho de la pantalla */
}
        .texto1{
            position: absolute;
            text-align: center;
            padding: 0 18.5vw; /* Padding basado en el ancho de la pantalla */
            top: 10vh; /* Posiciona el texto relativo a la altura de la pantalla */
            color: aliceblue;
            font-size: 2.5vw; /* Tamaño de fuente relativo al ancho de la pantalla */
}
        .texto1 p{
            font-family: 'monserrat';
            font-size: 1.5rem; /* Tamaño de fuente para el párrafo */
            line-height: 1.5; /* Altura de línea para mejor legibilidad */
            margin: 280px  0 0; /* Espacio adicional en la parte superior del párrafo */
            text-align: justify; /* Justificar el texto */
            top:55px;
}
        .slider-text h2 {
            font-family: 'roboto';
            font-size: 2rem; /* Tamaño de fuente grande para el título */
            margin-bottom: 0; /* Espaciado inferior */
            margin-top: 200px; /* Espacio adicional en la parte superior */
            position: absolute; /* Posicionamiento absoluto */
            left: 18.5%; /* Espacio desde el borde izquierdo del contenedor */
}
        .texto1 h2 {
            font-family: 'roboto';
            font-size: 2rem; /* Tamaño de fuente grande para el título */
            margin-bottom: 0; /* Espaciado inferior */
            margin-top: 200px; /* Espacio adicional en la parte superior */
            position: absolute; /* Posicionamiento absoluto */
            left: 18.5%; /* Espacio desde el borde izquierdo del contenedor */
}
        .slider-text p {
            font-family: 'monserrat';
            font-size: 1.5rem; /* Tamaño de fuente para el párrafo */
            line-height: 1.5; /* Altura de línea para mejor legibilidad */
            margin: 280px 0 0 0; /* Espacio adicional en la parte superior del párrafo */
            text-align: justify; /* Justificar el texto */
}


        .slider-frame img {
            width: 100%;
            height: 80%;  /* Ajusta la imagen para que llene el contenedor */
            object-fit: cover; /* Mantiene las proporciones de la imagen mientras llena el contenedor */
            display: block;
            filter: brightness(60%); /* Oscurece la imagen */
            transition: filter 0.5s ease-in-out; /* Transición para el efecto de oscurecimiento */
        }
        .slider-frame li:hover img {
            filter: brightness(95%); /* Aumenta el brillo al pasar el mouse */
}
        .slider-text-overlay {
            position: absolute;
            top: 50%; /* Centra verticalmente */
            left: 50%;
            transform: translate(-50%, -50%); /* Centra horizontal y verticalmente */
            color: white;
            font-size: 36px; /* Aumenta el tamaño de la fuente */
            font-weight: bold;
            padding: 20px 40px; /* Ajusta el padding para hacer el contenedor más grande */
            border-radius: 10px; /* Bordes más redondeados */
            z-index: 2;
            text-align: justify;
            max-width: 80%; /* Limita el ancho del texto */
            line-height: 1.4; /* Ajusta el espacio entre líneas */
            background: none; /* Sin fondo de color */
}
        .slider-frame li.active .slider-text-overlay {
            opacity: 1; /* Mostrar el texto para el slide activo */
}
        .slider-frame button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0);
            border: none;
            color: white;
            font-size: 30px;
            padding: 10px;
            cursor: pointer;
            z-index: 1000;
            transition: background-color 0.3s, border-radius 0.3s;
}

        .slider-frame button:hover {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 100%;
            color: black;
}

        .slider-frame .prev0 {
            left: 10px;
            color: white;
}

        .slider-frame .next0 {
            right: 10px;
}


        @keyframes slide {
	        0% {margin-left: 0;}
	        20% {margin-left: 0;}
	
	        25% {margin-left: -100%;}
	        45% {margin-left: -100%;}
	
	        50% {margin-left: -200%;}
	        70% {margin-left: -200%;}
	
	        75% {margin-left: -300%;}
	        100% {margin-left: -300%;}
        }
        @media (max-width: 768px) {
        .slider-frame {
            width: 100%;
            height: auto;
            position: static; /* Cambia la posición a estática en pantallas pequeñas */
            transform: none;
    }

        .slider-frame img {
            width: 100%;
            height: auto;
            object-fit: contain;
    }

        .slider-frame button {
            font-size: 20px;
    }
   }
   @media (max-width: 430px) {
        .slider-frame {
            width: 100%;
            height: 300px;
            position: static; /* Cambia la posición a estática en pantallas pequeñas */
            transform: none;
    }

        .slider-frame img {
            width: 100%;
            height: auto;
            object-fit: contain;
    }

        .slider-frame button {
            font-size: 20px;
    }
   }
    @media (max-width: 768px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 10vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 17vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}
@media (max-width: 690px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 10vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 16vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}
@media (max-width: 590px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 10vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 15vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}
@media (max-width: 511px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 6vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 11vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}

@media (max-width: 480px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
    .texto1 p, .slider-text p {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 11vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
}
@media (max-width: 436px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
    .texto1 p, .slider-text p {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 10vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
}

@media (max-width: 430px){
    .texto1 h2, .slider-text h2 {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 0.5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }

}
  /* BOTONES CARRUSEL*/
  

  @media (max-width: 768px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -40%;
  }
    .slider-frame .next0 {
    right: 10px;
     color: white;
     margin-top: -40%;
}
@media (max-width: 430px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -80%;
  }
  }
  @media (max-width: 430px){
    .slider-frame .next0 {
            right: 10px;
            color: white;
            margin-top: -80%;
}

  }
  }
  @media (max-width: 412px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -80%;
  }
    .slider-frame .next0 {
    right: 10px;
     color: white;
     margin-top: -80%;
}

  }
 
  @media (max-width: 375px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -60%;
  }
    .slider-frame .next0 {
    right: 10px;
    color: white;
    margin-top: -60%;
}

  }
  @media (max-width: 344px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -100%;
  }
    .slider-frame .next0 {
    right: 10px;
     color: white;
     margin-top: -100%;
}

  }
  
/*responsive de los platos*/



/* Ajustes para pantallas más pequeñas */
@media (max-width: 1024px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 250px;
        height: 250px;
    }
}
@media (max-width: 821px) { /* Ajusta el valor según necesites */

.container1, .container2, .container3, .container4, .container5, 
.container6, .container7, .container8, .container9, .container10 {
    width: 500px;
    height: 500px;
}
}

/* Ajustes para pantallas medianas */
@media (max-width: 768px) { /* Ajusta el valor según necesites */

    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 250px;
        height: 250px;
    }
}

@media (max-width: 738px) { /* Ajusta el valor según necesites */

.container1, .container2, .container3, .container4, .container5, 
.container6, .container7, .container8, .container9, .container10 {
    width: 240px;
    height: 240px;
}
}

@media (max-width: 730px) { /* Ajusta el valor según necesites */

.container1, .container2, .container3, .container4, .container5, 
.container6, .container7, .container8, .container9, .container10 {
    width: 240px;
    height: 240px;
}
}


@media (max-width: 721px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 225px;
        height: 225px;
    }
}

@media (max-width: 686px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 220px;
        height: 220px;
    }
}

@media (max-width: 677px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 210px;
        height: 210px;
    }
}

@media (max-width: 673px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 210px;
        height: 210px;
    }
}

@media (max-width: 658px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 210px;
        height: 210px;
    }
}

@media (max-width: 657px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 205px;
        height: 205px;
    }
}

@media (max-width: 650px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 205px;
        height: 205px;
    }
}

@media (max-width: 646px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 200px;
        height: 200px;
    }
}

@media (max-width: 636px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 199px;
        height: 199px;
    }
}

@media (max-width: 635px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 199px;
        height: 199px;
    }
}

@media (max-width: 634px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 196px;
        height: 196px;
    }
}

@media (max-width: 630px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 195px;
        height: 195px;
    }
}

@media (max-width: 626px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 192px;
        height: 192px;
    }
}

@media (max-width: 625px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 190px;
        height: 190px;
    }
}

@media (max-width: 621px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 190px;
        height: 190px;
    }

}

@media (max-width: 618px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 180px;
        height: 180px;
    }

}

@media (max-width: 597px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 170px;
        height: 170px;
    }

}

@media (max-width: 574px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 158px;
        height: 158px;
    }

}

@media (max-width: 553px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 147px;
        height: 147px;
    }

}

@media (max-width: 531px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 137px;
        height: 137px;
    }

}


@media (max-width: 521px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 130px;
        height: 130px;
    }
}

/* Ajustes para pantallas pequeñas */
@media (max-width: 498px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 115px;
        height: 115px;
    }
}

/* Ajustes para pantallas pequeñas */
@media (max-width: 480px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 105px;
        height: 105px;
    }
}

@media (max-width: 448px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 100px;
        height: 100px;
    }
}

@media (max-width: 437px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 96px;
        height: 96px;
    }
}

@media (max-width: 429px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 85px;
        height: 85px;
    }
}

@media (max-width: 412px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 96px;
        height: 96px;
    }
}
@media (max-width: 680px){
    .contenedores {
            margin-top: -25%;

        }
}

  /*RESPONSIVE TEXTO DE PLATOS*/

  @media (max-width: 680px){
    h2 {
        font-size: 15px;
        margin: 10px 0;
  }
}

@media (max-width: 555px){
    h2 {
        font-size: 12px;
        margin: 10px 0;
  }
}

@media (max-width: 500px){
    h2 {
        font-size: 11px;
        margin: 10px 0;
  }
}

@media (max-width: 477px){
    h2 {
        font-size: 10px;
        margin: 10px 0;
  }
}

  @media (max-width: 412px){
    h2 {
        font-size: 10px;
        margin: 10px 0;
  }
}
@media (max-width: 430px){
    h2 {
        font-size: 10px;
        margin: 9px 0;
  }
}
    </style>


    </script>
<!-- FIN BARRA DE NAVEGACIÓN -->
</html>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- INICIO CODIGO carrusel -->
<div class="slider-frame">
<ul>
<li>
                <img src="imagenes/portada_galeria.png" alt=""></li>
            <li><img src="imagenes/portada_galeria2.png" alt=""></li>
            <li><img src="imagenes/portada_galeria3.png" alt=""></li>
            <li><img src="imagenes/portada_galeria4.png" alt=""></li>
            <li><img src="imagenes/portada_galeria5.png" alt=""></li>
        </ul>
    <button class="prev0" aria-label="Previous Slide">&#10094;</button>
    <button class="next0" aria-label="Next Slide">&#10095;</button>
</div>
<!-- FIN CODIGO carrusel -->
 <script>
    const sliderBox = document.querySelector('.slider-frame ul');
    const slides = document.querySelectorAll('.slider-frame li');
    const prevButton = document.querySelector('.prev0');
    const nextButton = document.querySelector('.next0');
    const textOverlays = document.querySelectorAll('.slider-text-overlay');
    
    let slideIndex = 1; // Empezamos en 1 porque insertaremos un slide clonado al inicio
    const totalSlides = slides.length;
    
    // Clonar el primer y el último slide
    const firstSlide = slides[0].cloneNode(true);
    const lastSlide = slides[slides.length - 1].cloneNode(true);
    
    // Añadir los slides clonados
    sliderBox.appendChild(firstSlide); // Añadimos al final
    sliderBox.insertBefore(lastSlide, slides[0]); // Añadimos al inicio
    
    // Establecer ancho del contenedor para acomodar los slides + clones
    sliderBox.style.width = `${(totalSlides + 2) * 100}%`;
    
    // Posicionar el slider en el primer slide original
    sliderBox.style.marginLeft = `-${slideIndex * 100}%`;
    
    function showSlide(index) {
        sliderBox.style.transition = 'margin-left 0.5s ease-in-out';
        sliderBox.style.marginLeft = `-${index * 100}%`;
    
        // Actualizar la visibilidad del texto
        textOverlays.forEach((text, i) => {
            text.style.opacity = i === index - 1 ? '1' : '0'; // Ajustar visibilidad del texto
        });
    }
    
    nextButton.addEventListener('click', () => {
        slideIndex++;
        showSlide(slideIndex);
        if (slideIndex === totalSlides + 1) {
            setTimeout(() => {
                sliderBox.style.transition = 'none';
                slideIndex = 1;
                sliderBox.style.marginLeft = `-${slideIndex * 100}%`;
            }, 500);
        }
    });
    
    prevButton.addEventListener('click', () => {
        slideIndex--;
        showSlide(slideIndex);
        if (slideIndex === 0) {
            setTimeout(() => {
                sliderBox.style.transition = 'margin-left 1.5s ease-in-out'; 
                slideIndex = totalSlides;
                sliderBox.style.marginLeft = `-${slideIndex * 100}%`;
            }, 500);
        }
    });
    
    // Auto Slide
    setInterval(() => {
        nextButton.click();
    }, 7000);
</script>

















































<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTOS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/contactos.css">
</head>
<body>

<div class="contact-section">
    <div class="contact-form">
        <h2>CONTACTO</h2>
        <p class="description-text">
            Ponte en contacto con nosotros si tienes alguna pregunta o necesitas más información sobre el Hostal Mirador Pisco, nuestras habitaciones, servicios, restaurante, o cualquier otro detalle. Estamos aquí para ayudarte y responder a todas tus consultas, ya sea a través de nuestro formulario de contacto, por teléfono, vía WhatsApp, en nuestras redes sociales, o directamente por correo electrónico. ¡No dudes en comunicarte con nosotros!
        </p>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nombres y Apellidos</label>
                <input type="text" id="name" name="name" required placeholder="Ejemplo: Juan Pérez">
                <i class="fas fa-user icon"></i>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Ejemplo: juan@example.com">
                <i class="fas fa-envelope icon"></i>
            </div>
            <div class="form-group">
                <label for="subject">Asunto</label>
                <input type="text" id="subject" name="subject" required placeholder="Ejemplo: Consulta general">
                <i class="fas fa-tag icon"></i>
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea id="message" name="message" required placeholder="Escribe tu mensaje aquí..."></textarea>
                <i class="fas fa-comments icon"></i>
            </div>
            <button type="submit" class="btn-submit">Enviar Mensaje</button>
        </form>
    </div>

    <div class="map-container">
        <iframe 
            src="https://maps.app.goo.gl/83zs5bjCAmNt3d8fA" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="image-container">
    <img src="imagenes/hotel.jpg" alt="Hotel Mirador Pisco">
</div>

<div class="info-container">
    <h2>Hostal</h2>
    <h3>Hostal Mirador Pisco</h3>
    <div class="line"></div>
    <p><strong>Dirección</strong> <br>Av. José De San Martín 267, Pisco 11601</p>
    <div class="line"></div>
    <p><strong>Contacto</strong></p>
    <div class="contact-info">
        <i class="fab fa-whatsapp"></i>
        <p>960 551 427</p>
    </div>
    <div class="contact-info">
        <i class="fas fa-envelope"></i>
        <p>contacto@hostalmiradoralborada.com</p>
    </div>
    <div class="line"></div>
    <p><strong>Horarios de Recepción</strong></p>
    <p>De lunes a domingo - 24 horas</p>
    <div class="line"></div>

    <ul class="social_icon2">
        <li><a href="https://wa.me/message/IREGEUO4XHVNN1?src=qr">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a></li>
            <li><a href="https://www.facebook.com/hostalmirador21">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="https://www.instagram.com/hostalmirador__/?igshid=NjZxdjRidGF0enMy">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<div class="footer">
<?php
include ("footer.php")
?>
</div>

</body>
</html>

