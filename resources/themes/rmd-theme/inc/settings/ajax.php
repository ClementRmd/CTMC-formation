<?php
add_action( "wp_ajax_trainings", "trainings" );
add_action( "wp_ajax_nopriv_trainings", "trainings" );

function trainings() {
    $category = $_POST['category'];

    $args = array(
        'post_type' => 'formations',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field'    => 'slug',
                'terms'    => $category,
            ),
        ),
    );
    $query = new WP_Query( $args );
    
    getTrainingsPost($query);

    die();
}

add_action( "wp_ajax_formValidation", "formValidation" );
add_action( "wp_ajax_nopriv_formValidation", "formValidation" );

function formValidation() {
    $data = json_decode(stripslashes($_POST['data']));
    $firstName = htmlspecialchars($data->firstname);
    $lastName = htmlspecialchars($data->lastname);
    $destinataire = htmlspecialchars($data->destinataire);
    $message = htmlspecialchars($data->message);
    $isValid = false;

    $formValidation = [
        'firstname' => array(
            'valid'=> false,
            'error'=> 'Le champs est requis',
        ),
        'lastname' => array(
            'valid'=> false,
            'error'=> 'Le champs est requis',
        ),
        'destinataire' => array(
            'valid'=> false,
            'error'=> 'L\'email n\'est pas valide',
        ),
        'message' => array(
            'valid'=> false,
            'error'=> 'Le champs ne doit pas être vide et contenir un maximum de 500 caractères',
        ),
    ];

    // Check firstName & lastname
    
    if (!empty($firstName)) :
        $formValidation['firstname']['valid'] = true;
    endif;

    if (!empty($lastName)) :
        $formValidation['lastname']['valid'] = true;
    endif;

    // Check destinataire

    if (!empty($destinataire) && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $destinataire)) :
        $formValidation['destinataire']['valid'] = true;
    endif;

    // Check message
    if (!empty($message) && strlen($message) < 500) :
        $formValidation['message']['valid'] = true;
    endif;


    foreach ($formValidation as $item) {
        if ($item['valid']) {
            $isValid = true;
        } else {
            $isValid = false;
            break;
        }
    }

    if ($isValid === true || $isValid === 1) {
        // $dest = "contact@ctmc-formations.com";
        $dest = 'contact@ctmc-formations.com';
        $objet = "CTMC Formations : Contact";
        wp_mail($dest, $objet, $message);

        echo $isValid;

    } else {
        echo json_encode($formValidation);
    }

    die();
}

// add_action( "wp_ajax_formTestimony", "formTestimony" );
// add_action( "wp_ajax_nopriv_formTestimony", "formTestimony" );

// function formTestimony() {
//     $data = json_decode(stripslashes($_POST['data']));
//     $postId = intval($data->postId);
//     $message = htmlspecialchars($data->message);
//     $name = htmlspecialchars($data->name);
//     $email = htmlspecialchars($data->email);

//     updateTestimony($name, $message, $email, $postId);

//     echo json_encode($data);
    
//     die();
// }


