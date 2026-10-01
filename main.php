<?php

require_once __DIR__ .'/functions/server.php';
require_once __DIR__ .'/router/router.php';
require_once __DIR__ .'/middleware/middleware.php';
require_once __DIR__ .'/dispatcher/dispatcher.php';

// Controllers
require_once __DIR__ .'/controllers/cliente_controller.php';
require_once __DIR__ .'/controllers/lojaracao_controller.php';

// Services
require_once __DIR__ .'/services/cliente_services.php';
require_once __DIR__ .'/services/lojaracao_services.php';