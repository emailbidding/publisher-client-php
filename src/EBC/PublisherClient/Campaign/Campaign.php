<?php

/*
 * This file is a part of the Publisher client library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBC\PublisherClient\Campaign;

use EBC\PublisherClient\Advertiser\Advertiser;

/**
 * Campaign
 */
class Campaign
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Advertiser
     */
    protected $advertiser;

    /**
     * @var Schedule
     */
    protected $schedule;

    /**
     * @var Bid
     */
    protected $bid;

    /**
     * @var ListsApproval
     */
    protected $listsApproval;

    /**
     * @var Categories
     */
    protected $categories;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Advertiser
     */
    public function getAdvertiser()
    {
        return $this->advertiser;
    }

    /**
     * @return Schedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @return Bid
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @return ListsApproval|ListApproval[]
     */
    public function getListsApproval()
    {
        return $this->listsApproval;
    }

    /**
     * @return Categories|Category[]
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
