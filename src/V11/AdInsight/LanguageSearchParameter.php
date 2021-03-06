<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The language search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/languagesearchparameter?view=bingads-11 LanguageSearchParameter Data Object
     * 
     * @uses LanguageCriterion
     */
    final class LanguageSearchParameter extends SearchParameter
    {
        /**
         * The language criterion list for the returned keyword ideas.
         * @var LanguageCriterion[]
         */
        public $Languages;
    }

}
