<?php
require_once 'autoloader.php';

$app = new Application();

$errors = [
    'status' => false,
    'errors' => [
        'subject' => '',
        'content' => ''
    ]
];
$request = $app->request();

if(empty($request['subject'])){
    $errors['status'] = true;
    $errors['errors']['subject'] = 'Subject is empty';
}
if(empty($request['content'])){
    $errors['status'] = true;
    $errors['errors']['content'] = 'Content is empty';
}

if($errors['status']){
    $_SESSION['errors'] = $errors['errors'];
} else {
    $message = new Message($request['subject'], $request['content'], new \DateTime(), $app->getUser());

    try {
        $message->save();
    }catch (\Exception $e) {
        array_push($_SESSION['errors'],['general' => $e->getMessage()]);
    }
}

//var_dump($_SESSION);
//header('Location: http://'. $_SERVER['HTTP_HOST']);

