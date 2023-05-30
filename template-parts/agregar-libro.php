<?php
// // Verificar si se ha enviado el formulario o se ha realizado la acción deseada
// if (isset($_POST['submit'])) {
//     echo $_POST['title'];
//     // Recuperar los datos del formulario
//     $title = sanitize_text_field($_POST['title']);

//     // Configurar los parámetros para crear la entrada
//     $post_args = array(
//         'post_type' => 'mis_libros', // Nombre del post type al que quieres agregar la entrada
//         'post_title' => $title,           
//         'post_status' => 'publish', // Publicar la entrada inmediatamente
//     );

//     // Insertar la entrada en el post type
//     $post_id = wp_insert_post($post_args, $wp_error);

//     // Comprobar si la entrada se creó correctamente
//     if (!is_wp_error($post_id)) {
//         // La entrada se creó exitosamente
//         echo 'La entrada se ha creado correctamente.';
//     } else {
//         // Hubo un error al crear la entrada
//         echo 'Hubo un error al crear la entrada.';
//     }
// }

if (isset($_POST['submit'])) {
    echo $_POST['title'];
    // Recuperar los datos del formulario
    $title = sanitize_text_field($_POST['title']);
    
}
?>


<div class="mt-60">
    <form action="post">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="asdasd" required>

        <input type="submit" name="submit" value="Agregar">
        Title <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>

    </form>
</div>