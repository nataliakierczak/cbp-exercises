<?php
$messages = array(
    'error' => array(
        'Something went wrong',
        'Something went REALLY wrong',
        'There is no end to this!'
    ),
    'warning' => array(
        'This is your first warning',
        'This is your final warning'
    ),
    'success' => array(
        'Finally, something was successful.'
    )
);

$error_messages = $messages ['error'];

$messages['error'][0]; //getting first error message

$error_messages [] = 'A new message'; //adding new message to errors
$messages['error'][] = 'A new message'; //another way how to do that

$messages['info'] = array();]//adding new item with a specified key

foreach($messages as $message_type => $message_of_type)
{
    typeof $messages_of_type; // array

    foreah ($messages_of_type as $numerc_key => $message_text)
    {
        $numeric_key; //number
        $message_text; //string

    }
}