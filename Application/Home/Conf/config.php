<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' => '2',
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => [
        'article/:id' => 'Article/index',
        'category/:id' => 'Category/index',
    ],
);