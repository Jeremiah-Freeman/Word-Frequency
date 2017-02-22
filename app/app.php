<?php

    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'  => __DIR__.'/../views'));

    $app->get("/" , function() use ($app)
    {
        return $app['twig']->render('Input.html.twig');
    });

    $app->post("/input" , function() use ($app)
    {
        $userInput = new RepeatCounter();
        $count = $userInput->countRepeats($_POST['sentence'] , $_POST['singleWord']);

        return $app['twig']->render('Output.html.twig' , array('count' => $count));

    });

    return $app;

?>
