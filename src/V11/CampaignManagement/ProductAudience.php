<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a product audience that you can use to remarket products from your Bing Merchant Center store.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/productaudience?view=bingads-11 ProductAudience Data Object
     * 
     * @uses ProductAudienceType
     */
    final class ProductAudience extends Audience
    {
        /**
         * Determines whether to remarket your products to general visitors, product searchers, product viewers, shopping cart abandoners, or past buyers.
         * @var ProductAudienceType
         */
        public $ProductAudienceType;

        /**
         * The Bing Ads identifier of the Universal Event Tracking (UET) tag that is used with the remarketing list.
         * @var integer
         */
        public $TagId;
    }

}
