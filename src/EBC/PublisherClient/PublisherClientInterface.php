<?php

/*
 * This file is a part of the Publisher client library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBC\PublisherClient;

use EBT\EBDate\EBDateTime;
use EBT\Fastc\ClientInterface;
use EBC\PublisherClient\Campaign\Campaigns;
use EBC\PublisherClient\Campaign\Campaign;
use EBC\PublisherClient\ListDefinition\ListDefinition;
use EBC\PublisherClient\ListDefinition\ListsDefinition;

/**
 * PublisherClientInterface
 */
interface PublisherClientInterface extends ClientInterface
{
    /**
     * Choose the publisher on behalf the requests will be done.
     *
     * @param int    $publisherId Publisher ID
     * @param string $key         The key of publisher
     * @param string $secret      The secret of publisher
     *
     * @return PublisherClientInterface
     */
    public function setPublisher($publisherId, $key, $secret);

    /**
     * Returns all accessible campaigns for the current publisher.
     *
     * @param string|null       $orderBy created|updated|null
     * @param string|null       $order   asc|desc|ASC|DESC|null
     * @param EBDateTime|null   $endDateGreaterThan
     * @param int|null          $country
     *
     * @return Campaigns|Campaign[]
     */
    public function getCampaigns(
        $orderBy = null,
        $order = null,
        EBDateTime $endDateGreaterThan = null,
        $country = null
    );

    /**
     * Returns publisher lists.
     *
     * @return ListsDefinition|ListDefinition[]
     */
    public function getLists();
}
