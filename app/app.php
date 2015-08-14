<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    //Form route
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    //Result route
    $app->get("/count", function() use ($app) {
            $my_RepeatCounter = new RepeatCounter;
            $the_count = $my_RepeatCounter->counterRepeat($_GET['user_word']);

            return $app['twig']->render('count.html.twig', array('score' => $the_count));
    });

    return $app;
?>
