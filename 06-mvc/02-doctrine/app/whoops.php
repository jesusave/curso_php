<?php 

$run     = new \Whoops\Run;
$handler = new \Whoops\Handler\PrettyPageHandler;


// Set the title of the error page:
$handler->setPageTitle("Whoops! There was a problem.");

// Set the code editor
$handler->setEditor("phpstorm");

$run->pushHandler(new Whoops\Handler\PrettyPageHandler());
$run->pushHandler(new Whoops\Handler\JsonResponseHandler());

$run->pushHandler($handler);

// Add a special handler to deal with AJAX requests with an
// equally-informative JSON response. Since this handler is
// first in the stack, it will be executed before the error
// page handler, and will have a chance to decide if anything
// needs to be done.
if (\Whoops\Util\Misc::isAjaxRequest()) {
  $run->pushHandler(new \Whoops\Handler\JsonResponseHandler);
}

// Register the handler with PHP, and you're set!
$run->register();