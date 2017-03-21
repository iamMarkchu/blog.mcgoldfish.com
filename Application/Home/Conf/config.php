<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' => '2',
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => [
    	'categories' => 'Category/all',
        'article/:id' => 'Article/index',
        'category/:id' => 'Category/index',
        'search/:keyword' => 'Article/search',
    ],
);