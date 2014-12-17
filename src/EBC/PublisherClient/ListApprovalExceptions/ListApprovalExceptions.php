<?php

/**
 * LICENSE: [EMAILBIDDING_DESCRIPTION_LICENSE_HERE]
 *
 * @author     Rui Ribeiro <rui.ribeiro@emailbidding.com>, Diogo Rocha <diogo.rocha@emailbidding.com>
 * @copyright  2012-2014 Emailbidding
 * @license    [EMAILBIDDING_URL_LICENSE_HERE]
 */

namespace EBC\PublisherClient\ListApprovalExceptions;

/**
 * ListApprovalExceptions
 */
class ListApprovalExceptions
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var ApprovalCampaignsExceptions
     */
    protected $approvalCampaignsExceptions;

    /**
     * @return string
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
     * @return ApprovalCampaignsExceptions
     */
    public function getApprovalCampaignsExceptions()
    {
        return $this->approvalCampaignsExceptions;
    }
}
