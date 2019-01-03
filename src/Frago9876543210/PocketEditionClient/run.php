<?php

declare(strict_types=1);

namespace Frago9876543210\PocketEditionClient {

	use Frago9876543210\PocketEditionClient\protocol\PacketPool;
	use pocketmine\entity\Attribute;

	/** @noinspection PhpIncludeInspection */
	require_once "vendor/autoload.php";

	ini_set("memory_limit", "-1");

	RakNetPool::init();
	PacketPool::init();
	Attribute::init();

	$client = new PocketEditionClient(new Address("0.0.0.0", 19133), new Address("pe.scapemc.ru", 19133));
	$client->sendOpenConnectionRequest1();
	while(true){
		$client->tick();
	}
}