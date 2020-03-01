<?php

namespace OrdersFood\DependencyInjection;

class Dependencies {

	public static $container;

	public static function getContainer() {
		return self::$container;
	}

	public static function run() {
		$injector = new Container();

		$injector->set('Symfony\Component\HttpFoundation\Request');
		$injector->set('Symfony\Component\HttpFoundation\Response');

		self::$container = $injector;

		return $injector;
	}
}