<?php

use App\Router;
use App\Controllers\PublicController;

Router::addRoute('/', [PublicController::class, 'Home']);

Router::addRoute('/about', [PublicController::class, 'About']);