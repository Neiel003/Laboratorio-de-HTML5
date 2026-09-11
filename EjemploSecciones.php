<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!--Codificación de caracteres-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Adaptación a pantallas-->
    <title>Ejemplo 5</title>
    <style>
        body{
            font-family: Arial, sans-serif; /*Tipo de letra*/
            margin: 0; /*Margen exterior nulo*/
            padding: 0; /*Espacio interno nulo*/
            line-height: 1.6; /*Altura de línea del texto*/
        }
        header, nav, main, section, article, aside, footer{
            padding: 1.5em; /*Espaciado interno de bloques*/
            margin: 0.5em; /*Margen exterior de bloques*/
            border: 2px dashed #ccc; /*Borde gris intermitente*/
        }
        header{background-color: #f4f4f4; } /*Fondo de la cabecera*/
        nav{background-color: #e2e2e2; } /*Fondo de la barra de navegación*/
        main{background-color: #fff; } /*Fondo del contenido principal*/
        section{background-color: #fafafa; } /*Fondo de las secciones*/
        article{background-color: #f0f8ff; } /*Fondo de los artículos independientes*/
        aside{background-color: #fff8dc; } /*Fondo de la barra lateral*/
        footer{background-color: #333; color: #fff; } /*Fondo oscuro y texto blanco del pie*/

        input:required:invalid {
            border: 1px solid red; /*Borde rojo para campo obligatorio vacío*/
        }
        input:required:valid {
            border: 1px solid green; /*Borde verde para campo obligatorio lleno*/
        }
    </style>
</head>
<body>

    <header> <!--Cabecera principal de la página-->
        <h1>Diseño Web con HTML5 y CSS3 </h1> <!--Título principal-->
        <p>Aprendiendo HTML5 y CSS paso a paso</p> <!--Descripción corta-->
    </header>

    <nav> <!--Barra de navegación-->
        <ul> <!--Lista no ordenada-->
            <li><a href="#inicio">Inicio</a></li> <!--Enlace de navegación interna-->
            <li><a href="#cursos">Cursos</a></li> <!--Enlace de navegación interna-->
            <li><a href="#contacto">Contacto</a></li> <!--Enlace de navegación interna-->
        </ul> <!--Cierre de lista-->
    </nav>

    <main> <!--Contenido principal-->
        <section id="cursos"> <!--Sección de cursos identificada-->
            <h2>Nuestros Cursos Disponibles</h2> <!--Título de la sección-->
            <p>Aquí agrupamos información relacionada con la oferta académica de programación.</p> <!--Texto descriptivo-->
            <article> <!--Artículo independiente del primer curso-->
                <h3>Cursos de Backend con PHP</h3> <!--Título del curso-->
                <p>Aprende a manejar bases de datos, lógica de servidores y frameworks modernos.</p> <!--Información del curso-->
            </article> <!--Cierre del primer artículo-->
            <article> <!--Artículo independiente del segundo curso-->
                <h3>Cursos de CSS Avanzado</h3> <!--Título del curso-->
                <p>Domina la cascada, especificidad, selectores y diseños responsivos.</p> <!--Información del curso-->
            </article> <!--Cierre del segundo artículo-->
        </section> <!--Cierre de sección cursos-->

        <section id="contacto"> <!--Sección de contacto identificada-->
            <h2>Contacto</h2> <!--Título de la sección-->
            <form> <!--Inicio del formulario-->
                <div style="margin:1em"> <!--Contenedor con margen-->
                    <label for="email1">Enter email</label><br /> <!--Etiqueta del campo de correo-->
                    <input type="email" id="email1" name="email1" value="" placeholder="Enter email" required /> <!--Campo de entrada obligatorio para correo-->
                </div> <!--Cierre de contenedor-->
            </form> <!--Cierre de formulario-->
        </section> <!--Cierre de sección contacto-->

        <aside> <!--Barra lateral complementaria-->
            <h4>Aviso Importante</h4> <!--Título del aviso-->
            <p>HTML5 es la quinta y última versión del Lenguaje de Marcado de Hipertexto ... </p> <!--Texto del aviso-->
        </aside> <!--Cierre de barra lateral-->
    </main> <!--Cierre de contenido principal-->

    <footer> <!--Pie de página-->
        <p>&copy; <?php echo date("Y"); ?> Universidad Tecnológica de Panamá. Todos los derechos reservados.</p> <!--Texto de derechos de autor con PHP-->
    </footer> <!--Cierre de pie de página-->
</body>
</html>





