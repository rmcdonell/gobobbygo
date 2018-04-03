<?php
require_once('file:///C|/xampp/htdocs/book_apps/ch22_register_email/model/message.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = 'reset';
} else {
    $action = strtolower($action);
}

switch ($action) {
    case 'reset':
        // Reset values for variables
        $first_name = '';
        $last_name = '';
        $phone = '';
        $email = '';

        // Load view
        include 'file:///C|/xampp/htdocs/book_apps/ch22_register_email/view/register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $first_name = trim(filter_input(INPUT_POST, 'first_name'));
        $last_name = trim(filter_input(INPUT_POST, 'last_name'));
        $phone = trim(filter_input(INPUT_POST, 'phone'));
        $email = trim(filter_input(INPUT_POST, 'email'));

        // Set up email variables
        $to_address = $email;
        $to_name = $first_name . ' ' . $last_name;
        $from_address = 'gobobbygo.com';
        $from_name = 'gobobbygo';
        $subject = 'Email Request';
        $body = '<p>Thanks for registering with our site.</p>' .
                '<p>Sincerely,</p>' .
                '<p>gobobbygo.com</p>';
        $is_body_html = true;
        
        // Send email
        try {
            send_email($to_address, $to_name, 
                    $from_address, $from_name, 
                    $subject, $body, $is_body_html);
            include 'file:///C|/xampp/htdocs/book_apps/ch22_register_email/view/success.php';
        } catch (Exception $ex) {
            $error = $ex->getMessage();
            include 'file:///C|/xampp/htdocs/book_apps/ch22_register_email/view/register.php';
        }        
        break;
}
?>