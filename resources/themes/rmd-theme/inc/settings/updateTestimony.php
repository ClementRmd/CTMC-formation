<?php

// function updateTestimony($name, $message, $email, $postId)
// {
//     $listTestimonyExisting = get_field('field_630f60ef852c0', $postId);

//     if (empty($listTestimonyExisting)) {
//         $args = array(
//             array(
//                 'name' => $name,
//                 'text' => $message,
//                 'email' => $email
//             )
//         );
//     } else {
//         $args = array(
//             array(
//                 'name' => $name,
//                 'text' => $message,
//                 'email' => $email
//             ),
//             ...$listTestimonyExisting
//         );
//     }

//     update_field("field_630f60ef852c0", $args, $postId);
// }
