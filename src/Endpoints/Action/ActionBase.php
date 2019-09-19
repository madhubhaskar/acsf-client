<?php declare(strict_types=1);

namespace swichers\Acsf\Client\Endpoints\Action;

use swichers\Acsf\Client\ClientInterface;

/**
 * Class ActionBase.
 *
 * @package swichers\Acsf\Client\Endpoints\Action
 */
abstract class ActionBase implements ActionInterface {

  /**
   * ACSF Client.
   *
   * @var \swichers\Acsf\Client\ClientInterface
   */
  protected $client;

  /**
   * ActionBase constructor.
   *
   * @param \swichers\Acsf\Client\ClientInterface $client
   *   An ACSF client.
   */
  public function __construct(ClientInterface $client) {
    $this->client = $client;
  }

}
