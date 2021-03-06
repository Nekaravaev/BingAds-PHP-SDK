<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Applies offline conversions for the account with Microsoft Click Id among other offline conversion data.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/applyofflineconversions?view=bingads-11 ApplyOfflineConversions Request Object
     * 
     * @uses OfflineConversion
     * @used-by BingAdsCampaignManagementService::ApplyOfflineConversions
     */
    final class ApplyOfflineConversionsRequest
    {
        /**
         * The list of offline conversions for the account.
         * @var OfflineConversion[]
         */
        public $OfflineConversions;
    }
}
