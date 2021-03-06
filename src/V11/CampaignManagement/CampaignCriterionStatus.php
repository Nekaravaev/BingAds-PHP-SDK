<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible campaign criterion status values.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/campaigncriterionstatus?view=bingads-11 CampaignCriterionStatus Value Set
     * 
     * @used-by CampaignCriterion
     */
    final class CampaignCriterionStatus
    {
        /** The criterion is active. */
        const Active = 'Active';

        /** The criterion is paused. */
        const Paused = 'Paused';

        /** The criterion was deleted. */
        const Deleted = 'Deleted';
    }

}
