<?php
// Récupérer l'utilisateur actuellement connecté
$current_user = wp_get_current_user();

// Vérifier si l'utilisateur est connecté
if ( $current_user->ID !== 0 ) {

    echo "<div class='text-light'>";

    echo '
    <div> 
        <center>
            <h2>Profil de ' . esc_html( $current_user->display_name ) . '</h2>
        </center>
    </div>
    ';

    echo "<div id='box'>";

    echo '
    <table>
        <tr>
            <th>Nom d\'utilisateur</th>
            <td>' . esc_html( $current_user->user_login ) . '</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>' . esc_html( $current_user->user_email ) . '</td>
        </tr>
        <tr>
            <th>Rôle</th>
            <td>' . esc_html( ucfirst( $current_user->roles[0] ) ) . '</td>
        </tr>
    </table>';

    echo "</div> </div>";

    // Vous pouvez afficher d'autres informations du profil ici en utilisant les propriétés de l'objet $current_user

} else {
    echo 'Vous devez être connecté pour voir votre profil.';
}
?>
