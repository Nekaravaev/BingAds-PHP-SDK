<?php

namespace Microsoft\BingAds\Samples\V11;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\CustomerManagement classes that will be used.
use Microsoft\BingAds\V11\CustomerManagement\AddClientLinksRequest;
use Microsoft\BingAds\V11\CustomerManagement\DeleteAccountRequest;
use Microsoft\BingAds\V11\CustomerManagement\DeleteCustomerRequest;
use Microsoft\BingAds\V11\CustomerManagement\DeleteUserRequest;
use Microsoft\BingAds\V11\CustomerManagement\FindAccountsRequest;
use Microsoft\BingAds\V11\CustomerManagement\FindAccountsOrCustomersInfoRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetAccountRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetAccountsInfoRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetCustomerRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetCustomerPilotFeaturesRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetCustomersInfoRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetUsersInfoRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchClientLinksRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchCustomersRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchUserInvitationsRequest;
use Microsoft\BingAds\V11\CustomerManagement\SendUserInvitationRequest;
use Microsoft\BingAds\V11\CustomerManagement\SignupCustomerRequest;
use Microsoft\BingAds\V11\CustomerManagement\UpdateAccountRequest;
use Microsoft\BingAds\V11\CustomerManagement\UpdateClientLinksRequest;
use Microsoft\BingAds\V11\CustomerManagement\UpdateCustomerRequest;
use Microsoft\BingAds\V11\CustomerManagement\UpdateUserRequest;
use Microsoft\BingAds\V11\CustomerManagement\UpdateUserRolesRequest;

final class CustomerManagementExampleHelper {
    static function AddClientLinks(
        $clientLinks)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new AddClientLinksRequest();

        $request->ClientLinks = $clientLinks;

        return $GLOBALS['CustomerManagementProxy']->GetService()->AddClientLinks($request);
    }
    static function DeleteAccount(
        $accountId,
        $timeStamp)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new DeleteAccountRequest();

        $request->AccountId = $accountId;
        $request->TimeStamp = $timeStamp;

        return $GLOBALS['CustomerManagementProxy']->GetService()->DeleteAccount($request);
    }
    static function DeleteCustomer(
        $customerId,
        $timeStamp)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new DeleteCustomerRequest();

        $request->CustomerId = $customerId;
        $request->TimeStamp = $timeStamp;

        return $GLOBALS['CustomerManagementProxy']->GetService()->DeleteCustomer($request);
    }
    static function DeleteUser(
        $userId,
        $timeStamp)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new DeleteUserRequest();

        $request->UserId = $userId;
        $request->TimeStamp = $timeStamp;

        return $GLOBALS['CustomerManagementProxy']->GetService()->DeleteUser($request);
    }
    static function FindAccounts(
        $customerId,
        $accountFilter,
        $topN,
        $applicationScope)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new FindAccountsRequest();

        $request->CustomerId = $customerId;
        $request->AccountFilter = $accountFilter;
        $request->TopN = $topN;
        $request->ApplicationScope = $applicationScope;

        return $GLOBALS['CustomerManagementProxy']->GetService()->FindAccounts($request);
    }
    static function FindAccountsOrCustomersInfo(
        $filter,
        $topN,
        $applicationScope)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new FindAccountsOrCustomersInfoRequest();

        $request->Filter = $filter;
        $request->TopN = $topN;
        $request->ApplicationScope = $applicationScope;

        return $GLOBALS['CustomerManagementProxy']->GetService()->FindAccountsOrCustomersInfo($request);
    }
    static function GetAccount(
        $accountId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetAccountRequest();

        $request->AccountId = $accountId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetAccount($request);
    }
    static function GetAccountsInfo(
        $customerId,
        $onlyParentAccounts)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetAccountsInfoRequest();

        $request->CustomerId = $customerId;
        $request->OnlyParentAccounts = $onlyParentAccounts;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetAccountsInfo($request);
    }
    static function GetCustomer(
        $customerId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetCustomerRequest();

        $request->CustomerId = $customerId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetCustomer($request);
    }
    static function GetCustomerPilotFeatures(
        $customerId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetCustomerPilotFeaturesRequest();

        $request->CustomerId = $customerId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetCustomerPilotFeatures($request);
    }
    static function GetCustomersInfo(
        $customerNameFilter,
        $topN,
        $applicationScope)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetCustomersInfoRequest();

        $request->CustomerNameFilter = $customerNameFilter;
        $request->TopN = $topN;
        $request->ApplicationScope = $applicationScope;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetCustomersInfo($request);
    }
    static function GetUser(
        $userId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetUserRequest();

        $request->UserId = $userId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetUser($request);
    }
    static function GetUsersInfo(
        $customerId,
        $statusFilter)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetUsersInfoRequest();

        $request->CustomerId = $customerId;
        $request->StatusFilter = $statusFilter;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetUsersInfo($request);
    }
    static function SearchAccounts(
        $predicates,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchAccountsRequest();

        $request->Predicates = $predicates;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchAccounts($request);
    }
    static function SearchClientLinks(
        $predicates,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchClientLinksRequest();

        $request->Predicates = $predicates;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchClientLinks($request);
    }
    static function SearchCustomers(
        $applicationScope,
        $predicates,
        $dateRange,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchCustomersRequest();

        $request->ApplicationScope = $applicationScope;
        $request->Predicates = $predicates;
        $request->DateRange = $dateRange;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchCustomers($request);
    }
    static function SearchUserInvitations(
        $predicates)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchUserInvitationsRequest();

        $request->Predicates = $predicates;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchUserInvitations($request);
    }
    static function SendUserInvitation(
        $userInvitation)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SendUserInvitationRequest();

        $request->UserInvitation = $userInvitation;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SendUserInvitation($request);
    }
    static function SignupCustomer(
        $customer,
        $account,
        $parentCustomerId,
        $applicationScope)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SignupCustomerRequest();

        $request->Customer = $customer;
        $request->Account = $account;
        $request->ParentCustomerId = $parentCustomerId;
        $request->ApplicationScope = $applicationScope;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SignupCustomer($request);
    }
    static function UpdateAccount(
        $account)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateAccountRequest();

        $request->Account = $account;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateAccount($request);
    }
    static function UpdateClientLinks(
        $clientLinks)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateClientLinksRequest();

        $request->ClientLinks = $clientLinks;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateClientLinks($request);
    }
    static function UpdateCustomer(
        $customer)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateCustomerRequest();

        $request->Customer = $customer;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateCustomer($request);
    }
    static function UpdateUser(
        $user)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateUserRequest();

        $request->User = $user;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateUser($request);
    }
    static function UpdateUserRoles(
        $customerId,
        $userId,
        $newRoleId,
        $newAccountIds,
        $newCustomerIds,
        $deleteRoleId,
        $deleteAccountIds,
        $deleteCustomerIds)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateUserRolesRequest();

        $request->CustomerId = $customerId;
        $request->UserId = $userId;
        $request->NewRoleId = $newRoleId;
        $request->NewAccountIds = $newAccountIds;
        $request->NewCustomerIds = $newCustomerIds;
        $request->DeleteRoleId = $deleteRoleId;
        $request->DeleteAccountIds = $deleteAccountIds;
        $request->DeleteCustomerIds = $deleteCustomerIds;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateUserRoles($request);
    }
    static function OutputAccount($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccount * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountType: %s", $dataObject->AccountType));
            self::OutputStatusMessage(sprintf("BillToCustomerId: %s", $dataObject->BillToCustomerId));
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("CurrencyType: %s", $dataObject->CurrencyType));
            self::OutputStatusMessage(sprintf("AccountFinancialStatus: %s", $dataObject->AccountFinancialStatus));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Number: %s", $dataObject->Number));
            self::OutputStatusMessage(sprintf("ParentCustomerId: %s", $dataObject->ParentCustomerId));
            self::OutputStatusMessage(sprintf("PaymentMethodId: %s", $dataObject->PaymentMethodId));
            self::OutputStatusMessage(sprintf("PaymentMethodType: %s", $dataObject->PaymentMethodType));
            self::OutputStatusMessage(sprintf("PrimaryUserId: %s", $dataObject->PrimaryUserId));
            self::OutputStatusMessage(sprintf("AccountLifeCycleStatus: %s", $dataObject->AccountLifeCycleStatus));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("TimeZone: %s", $dataObject->TimeZone));
            self::OutputStatusMessage(sprintf("PauseReason: %s", $dataObject->PauseReason));
            if($dataObject->AccountType === "AdvertiserAccount")
            {
                self::OutputAdvertiserAccount($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputAccount * * *");
    }
    static function OutputArrayOfAccount($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Account))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccount * * *");
        foreach ($dataObjects->Account as $dataObject)
        {
            self::OutputAccount($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccount * * *");
    }
    static function OutputAccountInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Number: %s", $dataObject->Number));
            self::OutputStatusMessage(sprintf("AccountLifeCycleStatus: %s", $dataObject->AccountLifeCycleStatus));
            self::OutputStatusMessage(sprintf("PauseReason: %s", $dataObject->PauseReason));
        }
        self::OutputStatusMessage("* * * End OutputAccountInfo * * *");
    }
    static function OutputArrayOfAccountInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountInfo * * *");
        foreach ($dataObjects->AccountInfo as $dataObject)
        {
            self::OutputAccountInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountInfo * * *");
    }
    static function OutputAccountInfoWithCustomerData($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountInfoWithCustomerData * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage(sprintf("CustomerName: %s", $dataObject->CustomerName));
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("AccountName: %s", $dataObject->AccountName));
            self::OutputStatusMessage(sprintf("AccountNumber: %s", $dataObject->AccountNumber));
            self::OutputStatusMessage(sprintf("AccountLifeCycleStatus: %s", $dataObject->AccountLifeCycleStatus));
            self::OutputStatusMessage(sprintf("PauseReason: %s", $dataObject->PauseReason));
        }
        self::OutputStatusMessage("* * * End OutputAccountInfoWithCustomerData * * *");
    }
    static function OutputArrayOfAccountInfoWithCustomerData($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountInfoWithCustomerData))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountInfoWithCustomerData * * *");
        foreach ($dataObjects->AccountInfoWithCustomerData as $dataObject)
        {
            self::OutputAccountInfoWithCustomerData($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountInfoWithCustomerData * * *");
    }
    static function OutputAdApiError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdApiError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Detail: %s", $dataObject->Detail));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputAdApiError * * *");
    }
    static function OutputArrayOfAdApiError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiError))
        {
            return;
        }
        else if (!is_array($dataObjects->AdApiError))
        {
            self::OutputAdApiError($dataObjects->AdApiError);
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdApiError * * *");
        foreach ($dataObjects->AdApiError as $dataObject)
        {
            self::OutputAdApiError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdApiError * * *");
    }
    static function OutputAdApiFaultDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdApiFaultDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAdApiError($dataObject->Errors);
        }
        self::OutputStatusMessage("* * * End OutputAdApiFaultDetail * * *");
    }
    static function OutputArrayOfAdApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiFaultDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdApiFaultDetail * * *");
        foreach ($dataObjects->AdApiFaultDetail as $dataObject)
        {
            self::OutputAdApiFaultDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdApiFaultDetail * * *");
    }
    static function OutputAddress($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAddress * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("City: %s", $dataObject->City));
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Line1: %s", $dataObject->Line1));
            self::OutputStatusMessage(sprintf("Line2: %s", $dataObject->Line2));
            self::OutputStatusMessage(sprintf("Line3: %s", $dataObject->Line3));
            self::OutputStatusMessage(sprintf("Line4: %s", $dataObject->Line4));
            self::OutputStatusMessage(sprintf("PostalCode: %s", $dataObject->PostalCode));
            self::OutputStatusMessage(sprintf("StateOrProvince: %s", $dataObject->StateOrProvince));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
        }
        self::OutputStatusMessage("* * * End OutputAddress * * *");
    }
    static function OutputArrayOfAddress($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Address))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAddress * * *");
        foreach ($dataObjects->Address as $dataObject)
        {
            self::OutputAddress($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAddress * * *");
    }
    static function OutputAdvertiserAccount($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdvertiserAccount * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfCustomerInfo($dataObject->LinkedAgencies);
            self::OutputStatusMessage(sprintf("SalesHouseCustomerId: %s", $dataObject->SalesHouseCustomerId));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->TaxInformation);
            self::OutputStatusMessage(sprintf("BackUpPaymentInstrumentId: %s", $dataObject->BackUpPaymentInstrumentId));
            self::OutputStatusMessage(sprintf("BillingThresholdAmount: %s", $dataObject->BillingThresholdAmount));
            self::OutputAddress($dataObject->BusinessAddress);
        }
        self::OutputStatusMessage("* * * End OutputAdvertiserAccount * * *");
    }
    static function OutputArrayOfAdvertiserAccount($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdvertiserAccount))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdvertiserAccount * * *");
        foreach ($dataObjects->AdvertiserAccount as $dataObject)
        {
            self::OutputAdvertiserAccount($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdvertiserAccount * * *");
    }
    static function OutputApiFault($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApiFault * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
        }
        self::OutputStatusMessage("* * * End OutputApiFault * * *");
    }
    static function OutputArrayOfApiFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFault))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApiFault * * *");
        foreach ($dataObjects->ApiFault as $dataObject)
        {
            self::OutputApiFault($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApiFault * * *");
    }
    static function OutputApplicationFault($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApplicationFault * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("TrackingId: %s", $dataObject->TrackingId));
            if($dataObject->Type === "AdApiFaultDetail")
            {
                self::OutputAdApiFaultDetail($dataObject);
            }
            if($dataObject->Type === "ApiFault")
            {
                self::OutputApiFault($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputApplicationFault * * *");
    }
    static function OutputArrayOfApplicationFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApplicationFault))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApplicationFault * * *");
        foreach ($dataObjects->ApplicationFault as $dataObject)
        {
            self::OutputApplicationFault($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApplicationFault * * *");
    }
    static function OutputClientLink($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputClientLink * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ClientAccountId: %s", $dataObject->ClientAccountId));
            self::OutputStatusMessage(sprintf("ClientAccountNumber: %s", $dataObject->ClientAccountNumber));
            self::OutputStatusMessage(sprintf("ManagingCustomerId: %s", $dataObject->ManagingCustomerId));
            self::OutputStatusMessage(sprintf("ManagingCustomerNumber: %s", $dataObject->ManagingCustomerNumber));
            self::OutputStatusMessage(sprintf("Note: %s", $dataObject->Note));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("InviterEmail: %s", $dataObject->InviterEmail));
            self::OutputStatusMessage(sprintf("InviterName: %s", $dataObject->InviterName));
            self::OutputStatusMessage(sprintf("InviterPhone: %s", $dataObject->InviterPhone));
            self::OutputStatusMessage(sprintf("IsBillToClient: %s", $dataObject->IsBillToClient));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("SuppressNotification: %s", $dataObject->SuppressNotification));
            self::OutputStatusMessage(sprintf("LastModifiedDateTime: %s", $dataObject->LastModifiedDateTime));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("Timestamp: %s", $dataObject->Timestamp));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
        }
        self::OutputStatusMessage("* * * End OutputClientLink * * *");
    }
    static function OutputArrayOfClientLink($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ClientLink))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfClientLink * * *");
        foreach ($dataObjects->ClientLink as $dataObject)
        {
            self::OutputClientLink($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfClientLink * * *");
    }
    static function OutputContactInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputContactInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputAddress($dataObject->Address);
            self::OutputStatusMessage(sprintf("ContactByPhone: %s", $dataObject->ContactByPhone));
            self::OutputStatusMessage(sprintf("ContactByPostalMail: %s", $dataObject->ContactByPostalMail));
            self::OutputStatusMessage(sprintf("Email: %s", $dataObject->Email));
            self::OutputStatusMessage(sprintf("EmailFormat: %s", $dataObject->EmailFormat));
            self::OutputStatusMessage(sprintf("Fax: %s", $dataObject->Fax));
            self::OutputStatusMessage(sprintf("HomePhone: %s", $dataObject->HomePhone));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Mobile: %s", $dataObject->Mobile));
            self::OutputStatusMessage(sprintf("Phone1: %s", $dataObject->Phone1));
            self::OutputStatusMessage(sprintf("Phone2: %s", $dataObject->Phone2));
        }
        self::OutputStatusMessage("* * * End OutputContactInfo * * *");
    }
    static function OutputArrayOfContactInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ContactInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfContactInfo * * *");
        foreach ($dataObjects->ContactInfo as $dataObject)
        {
            self::OutputContactInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfContactInfo * * *");
    }
    static function OutputCustomer($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomer * * *");
        if (!empty($dataObject))
        {
            self::OutputAddress($dataObject->CustomerAddress);
            self::OutputStatusMessage(sprintf("CustomerFinancialStatus: %s", $dataObject->CustomerFinancialStatus));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Industry: %s", $dataObject->Industry));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("MarketCountry: %s", $dataObject->MarketCountry));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("MarketLanguage: %s", $dataObject->MarketLanguage));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("ServiceLevel: %s", $dataObject->ServiceLevel));
            self::OutputStatusMessage(sprintf("CustomerLifeCycleStatus: %s", $dataObject->CustomerLifeCycleStatus));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("Number: %s", $dataObject->Number));
        }
        self::OutputStatusMessage("* * * End OutputCustomer * * *");
    }
    static function OutputArrayOfCustomer($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Customer))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomer * * *");
        foreach ($dataObjects->Customer as $dataObject)
        {
            self::OutputCustomer($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomer * * *");
    }
    static function OutputCustomerInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomerInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
        }
        self::OutputStatusMessage("* * * End OutputCustomerInfo * * *");
    }
    static function OutputArrayOfCustomerInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomerInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomerInfo * * *");
        foreach ($dataObjects->CustomerInfo as $dataObject)
        {
            self::OutputCustomerInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomerInfo * * *");
    }
    static function OutputDateRange($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDateRange * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("MinDate: %s", $dataObject->MinDate));
            self::OutputStatusMessage(sprintf("MaxDate: %s", $dataObject->MaxDate));
        }
        self::OutputStatusMessage("* * * End OutputDateRange * * *");
    }
    static function OutputArrayOfDateRange($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DateRange))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDateRange * * *");
        foreach ($dataObjects->DateRange as $dataObject)
        {
            self::OutputDateRange($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDateRange * * *");
    }
    static function OutputKeyValuePairOfstringstring($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeyValuePairOfstringstring * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
        }
        self::OutputStatusMessage("* * * End OutputKeyValuePairOfstringstring * * *");
    }
    static function OutputArrayOfKeyValuePairOfstringstring($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOfstringstring))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeyValuePairOfstringstring * * *");
        foreach ($dataObjects->KeyValuePairOfstringstring as $dataObject)
        {
            self::OutputKeyValuePairOfstringstring($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeyValuePairOfstringstring * * *");
    }
    static function OutputOperationError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOperationError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputOperationError * * *");
    }
    static function OutputArrayOfOperationError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OperationError))
        {
            return;
        }
        else if (!is_array($dataObjects->OperationError))
        {
            self::OutputOperationError($dataObjects->OperationError);
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOperationError * * *");
        foreach ($dataObjects->OperationError as $dataObject)
        {
            self::OutputOperationError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOperationError * * *");
    }
    static function OutputOrderBy($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOrderBy * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Field: %s", $dataObject->Field));
            self::OutputStatusMessage(sprintf("Order: %s", $dataObject->Order));
        }
        self::OutputStatusMessage("* * * End OutputOrderBy * * *");
    }
    static function OutputArrayOfOrderBy($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OrderBy))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOrderBy * * *");
        foreach ($dataObjects->OrderBy as $dataObject)
        {
            self::OutputOrderBy($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOrderBy * * *");
    }
    static function OutputPaging($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPaging * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Size: %s", $dataObject->Size));
        }
        self::OutputStatusMessage("* * * End OutputPaging * * *");
    }
    static function OutputArrayOfPaging($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Paging))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPaging * * *");
        foreach ($dataObjects->Paging as $dataObject)
        {
            self::OutputPaging($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPaging * * *");
    }
    static function OutputPersonName($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPersonName * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("FirstName: %s", $dataObject->FirstName));
            self::OutputStatusMessage(sprintf("LastName: %s", $dataObject->LastName));
            self::OutputStatusMessage(sprintf("MiddleInitial: %s", $dataObject->MiddleInitial));
        }
        self::OutputStatusMessage("* * * End OutputPersonName * * *");
    }
    static function OutputArrayOfPersonName($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PersonName))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPersonName * * *");
        foreach ($dataObjects->PersonName as $dataObject)
        {
            self::OutputPersonName($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPersonName * * *");
    }
    static function OutputPredicate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPredicate * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Field: %s", $dataObject->Field));
            self::OutputStatusMessage(sprintf("Operator: %s", $dataObject->Operator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
        }
        self::OutputStatusMessage("* * * End OutputPredicate * * *");
    }
    static function OutputArrayOfPredicate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Predicate))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPredicate * * *");
        foreach ($dataObjects->Predicate as $dataObject)
        {
            self::OutputPredicate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPredicate * * *");
    }
    static function OutputUser($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUser * * *");
        if (!empty($dataObject))
        {
            self::OutputContactInfo($dataObject->ContactInfo);
            self::OutputStatusMessage(sprintf("CustomerAppScope: %s", $dataObject->CustomerAppScope));
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("JobTitle: %s", $dataObject->JobTitle));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("Lcid: %s", $dataObject->Lcid));
            self::OutputPersonName($dataObject->Name);
            self::OutputStatusMessage(sprintf("Password: %s", $dataObject->Password));
            self::OutputStatusMessage(sprintf("SecretAnswer: %s", $dataObject->SecretAnswer));
            self::OutputStatusMessage(sprintf("SecretQuestion: %s", $dataObject->SecretQuestion));
            self::OutputStatusMessage(sprintf("UserLifeCycleStatus: %s", $dataObject->UserLifeCycleStatus));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("UserName: %s", $dataObject->UserName));
            self::OutputStatusMessage(sprintf("IsMigratedToMicrosoftAccount: %s", $dataObject->IsMigratedToMicrosoftAccount));
        }
        self::OutputStatusMessage("* * * End OutputUser * * *");
    }
    static function OutputArrayOfUser($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->User))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUser * * *");
        foreach ($dataObjects->User as $dataObject)
        {
            self::OutputUser($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUser * * *");
    }
    static function OutputUserInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUserInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("UserName: %s", $dataObject->UserName));
        }
        self::OutputStatusMessage("* * * End OutputUserInfo * * *");
    }
    static function OutputArrayOfUserInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserInfo * * *");
        foreach ($dataObjects->UserInfo as $dataObject)
        {
            self::OutputUserInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserInfo * * *");
    }
    static function OutputUserInvitation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUserInvitation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("FirstName: %s", $dataObject->FirstName));
            self::OutputStatusMessage(sprintf("LastName: %s", $dataObject->LastName));
            self::OutputStatusMessage(sprintf("Email: %s", $dataObject->Email));
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage(sprintf("Role: %s", $dataObject->Role));
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputStatusMessage(sprintf("ExpirationDate: %s", $dataObject->ExpirationDate));
            self::OutputStatusMessage(sprintf("Lcid: %s", $dataObject->Lcid));
        }
        self::OutputStatusMessage("* * * End OutputUserInvitation * * *");
    }
    static function OutputArrayOfUserInvitation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserInvitation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserInvitation * * *");
        foreach ($dataObjects->UserInvitation as $dataObject)
        {
            self::OutputUserInvitation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserInvitation * * *");
    }
    static function OutputAccountLifeCycleStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountLifeCycleStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountLifeCycleStatus * * *");
    }
    static function OutputArrayOfAccountLifeCycleStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountLifeCycleStatus * * *");
        foreach ($valueSets->AccountLifeCycleStatus as $valueSet)
        {
            self::OutputAccountLifeCycleStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountLifeCycleStatus * * *");
    }
    static function OutputApplicationType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputApplicationType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputApplicationType * * *");
    }
    static function OutputArrayOfApplicationType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApplicationType * * *");
        foreach ($valueSets->ApplicationType as $valueSet)
        {
            self::OutputApplicationType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApplicationType * * *");
    }
    static function OutputAccountType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountType * * *");
    }
    static function OutputArrayOfAccountType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountType * * *");
        foreach ($valueSets->AccountType as $valueSet)
        {
            self::OutputAccountType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountType * * *");
    }
    static function OutputCurrencyType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCurrencyType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCurrencyType * * *");
    }
    static function OutputArrayOfCurrencyType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCurrencyType * * *");
        foreach ($valueSets->CurrencyType as $valueSet)
        {
            self::OutputCurrencyType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCurrencyType * * *");
    }
    static function OutputAccountFinancialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountFinancialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountFinancialStatus * * *");
    }
    static function OutputArrayOfAccountFinancialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountFinancialStatus * * *");
        foreach ($valueSets->AccountFinancialStatus as $valueSet)
        {
            self::OutputAccountFinancialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountFinancialStatus * * *");
    }
    static function OutputLanguageType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLanguageType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLanguageType * * *");
    }
    static function OutputArrayOfLanguageType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLanguageType * * *");
        foreach ($valueSets->LanguageType as $valueSet)
        {
            self::OutputLanguageType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLanguageType * * *");
    }
    static function OutputPaymentMethodType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPaymentMethodType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPaymentMethodType * * *");
    }
    static function OutputArrayOfPaymentMethodType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPaymentMethodType * * *");
        foreach ($valueSets->PaymentMethodType as $valueSet)
        {
            self::OutputPaymentMethodType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPaymentMethodType * * *");
    }
    static function OutputTimeZoneType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputTimeZoneType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputTimeZoneType * * *");
    }
    static function OutputArrayOfTimeZoneType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTimeZoneType * * *");
        foreach ($valueSets->TimeZoneType as $valueSet)
        {
            self::OutputTimeZoneType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTimeZoneType * * *");
    }
    static function OutputCustomerFinancialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomerFinancialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCustomerFinancialStatus * * *");
    }
    static function OutputArrayOfCustomerFinancialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomerFinancialStatus * * *");
        foreach ($valueSets->CustomerFinancialStatus as $valueSet)
        {
            self::OutputCustomerFinancialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomerFinancialStatus * * *");
    }
    static function OutputIndustry($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputIndustry * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputIndustry * * *");
    }
    static function OutputArrayOfIndustry($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfIndustry * * *");
        foreach ($valueSets->Industry as $valueSet)
        {
            self::OutputIndustry($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfIndustry * * *");
    }
    static function OutputServiceLevel($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputServiceLevel * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputServiceLevel * * *");
    }
    static function OutputArrayOfServiceLevel($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfServiceLevel * * *");
        foreach ($valueSets->ServiceLevel as $valueSet)
        {
            self::OutputServiceLevel($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfServiceLevel * * *");
    }
    static function OutputCustomerLifeCycleStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomerLifeCycleStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCustomerLifeCycleStatus * * *");
    }
    static function OutputArrayOfCustomerLifeCycleStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomerLifeCycleStatus * * *");
        foreach ($valueSets->CustomerLifeCycleStatus as $valueSet)
        {
            self::OutputCustomerLifeCycleStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomerLifeCycleStatus * * *");
    }
    static function OutputEmailFormat($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputEmailFormat * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputEmailFormat * * *");
    }
    static function OutputArrayOfEmailFormat($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEmailFormat * * *");
        foreach ($valueSets->EmailFormat as $valueSet)
        {
            self::OutputEmailFormat($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEmailFormat * * *");
    }
    static function OutputLCID($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLCID * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLCID * * *");
    }
    static function OutputArrayOfLCID($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLCID * * *");
        foreach ($valueSets->LCID as $valueSet)
        {
            self::OutputLCID($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLCID * * *");
    }
    static function OutputSecretQuestion($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSecretQuestion * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSecretQuestion * * *");
    }
    static function OutputArrayOfSecretQuestion($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSecretQuestion * * *");
        foreach ($valueSets->SecretQuestion as $valueSet)
        {
            self::OutputSecretQuestion($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSecretQuestion * * *");
    }
    static function OutputUserLifeCycleStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputUserLifeCycleStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputUserLifeCycleStatus * * *");
    }
    static function OutputArrayOfUserLifeCycleStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserLifeCycleStatus * * *");
        foreach ($valueSets->UserLifeCycleStatus as $valueSet)
        {
            self::OutputUserLifeCycleStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserLifeCycleStatus * * *");
    }
    static function OutputPredicateOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPredicateOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPredicateOperator * * *");
    }
    static function OutputArrayOfPredicateOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPredicateOperator * * *");
        foreach ($valueSets->PredicateOperator as $valueSet)
        {
            self::OutputPredicateOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPredicateOperator * * *");
    }
    static function OutputOrderByField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputOrderByField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputOrderByField * * *");
    }
    static function OutputArrayOfOrderByField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOrderByField * * *");
        foreach ($valueSets->OrderByField as $valueSet)
        {
            self::OutputOrderByField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOrderByField * * *");
    }
    static function OutputSortOrder($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSortOrder * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSortOrder * * *");
    }
    static function OutputArrayOfSortOrder($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSortOrder * * *");
        foreach ($valueSets->SortOrder as $valueSet)
        {
            self::OutputSortOrder($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSortOrder * * *");
    }
    static function OutputClientLinkStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputClientLinkStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputClientLinkStatus * * *");
    }
    static function OutputArrayOfClientLinkStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfClientLinkStatus * * *");
        foreach ($valueSets->ClientLinkStatus as $valueSet)
        {
            self::OutputClientLinkStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfClientLinkStatus * * *");
    }
    static function OutputUserRole($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputUserRole * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputUserRole * * *");
    }
    static function OutputArrayOfUserRole($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserRole * * *");
        foreach ($valueSets->UserRole as $valueSet)
        {
            self::OutputUserRole($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserRole * * *");
    }
    static function OutputStatusMessage($message)
    {
        printf(" % s\n", $message);
    }
    static function OutputArrayOfString($items)
    {
        if(count((array)$items) == 0 || !isset($items->string))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfString * * *");
        foreach ($items->string as $item)
        {
            self::OutputStatusMessage(sprintf("Value of the string: %s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfString * * *");
    }
    static function OutputArrayOfLong($items)
    {
        if(count((array)$items) == 0 || !isset($items->long))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLong * * *");
        foreach ($items->long as $item)
        {
            self::OutputStatusMessage(sprintf("Value of the long: %s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLong * * *");
    }
    static function OutputArrayOfInt($items)
    {
        if(count((array)$items) == 0 || !isset($items->int))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInt * * *");
        foreach ($items->int as $item)
        {
            self::OutputStatusMessage(sprintf("Value of the int: %s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInt * * *");
    }
}
