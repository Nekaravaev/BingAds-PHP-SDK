<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadextensionseditorialreasons?view=bingads-11 GetAdExtensionsEditorialReasons Response Object
     * 
     * @uses AdExtensionEditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsResponse
    {
        /**
         * The collection of ad extension editorial reasons.
         * @var AdExtensionEditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
