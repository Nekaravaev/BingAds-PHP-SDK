<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/pollgeneratereport?view=bingads-11 PollGenerateReport Request Object
     * 
     * @used-by BingAdsReportingService::PollGenerateReport
     */
    final class PollGenerateReportRequest
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }
}
