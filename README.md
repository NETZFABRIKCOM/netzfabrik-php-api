# NETZFABRIK

PHP client library for the NETZFABRIK API

For more information, please visit [https://www.netzfabrik.com](https://www.netzfabrik.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/NETZFABRIKCOM/netzfabrik-php-api.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/netzfabrik-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Account identifier

try {
    $result = $apiInstance->getAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /accounts/{id} | Get an account
*AccountApi* | [**getUserAccounts**](docs/Api/AccountApi.md#getuseraccounts) | **GET** /user/accounts | Get the current user&#39;s accounts
*ApplicationApi* | [**getApplication**](docs/Api/ApplicationApi.md#getapplication) | **GET** /applications/{id} | Get managed application
*ApplicationApi* | [**getApplications**](docs/Api/ApplicationApi.md#getapplications) | **GET** /applications | Get managed applications
*ApplicationApi* | [**restartApplication**](docs/Api/ApplicationApi.md#restartapplication) | **POST** /applications/{id}/restart | Restart managed application
*ApplicationApi* | [**startApplication**](docs/Api/ApplicationApi.md#startapplication) | **POST** /applications/{id}/start | Start managed application
*ApplicationApi* | [**stopApplication**](docs/Api/ApplicationApi.md#stopapplication) | **POST** /applications/{id}/stop | Stop managed application
*CloudServerApi* | [**deleteServer**](docs/Api/CloudServerApi.md#deleteserver) | **POST** /cloud-servers/{id}/delete | Delete server
*CloudServerApi* | [**getServer**](docs/Api/CloudServerApi.md#getserver) | **GET** /cloud-servers/{id} | Get server
*CloudServerApi* | [**getServerStatistics**](docs/Api/CloudServerApi.md#getserverstatistics) | **GET** /cloud-servers/{id}/statistics | Get server statistics
*CloudServerApi* | [**getServers**](docs/Api/CloudServerApi.md#getservers) | **GET** /cloud-servers | Get servers
*CloudServerApi* | [**restartServer**](docs/Api/CloudServerApi.md#restartserver) | **POST** /cloud-servers/{id}/restart | Restart server
*CloudServerApi* | [**shutdownServer**](docs/Api/CloudServerApi.md#shutdownserver) | **POST** /cloud-servers/{id}/shutdown | Shutdown server
*CloudServerApi* | [**startServer**](docs/Api/CloudServerApi.md#startserver) | **POST** /cloud-servers/{id}/start | Start server
*CloudServerApi* | [**stopServer**](docs/Api/CloudServerApi.md#stopserver) | **POST** /cloud-servers/{id}/stop | Stop server
*CloudVolumeApi* | [**apiCloudVolumesIdDelete**](docs/Api/CloudVolumeApi.md#apicloudvolumesiddelete) | **DELETE** /cloud-volumes/{id} | Removes the Volume resource.
*CloudVolumeApi* | [**attachVolumeToServer**](docs/Api/CloudVolumeApi.md#attachvolumetoserver) | **POST** /cloud-servers/{id}/volume | Add volume to server
*CloudVolumeApi* | [**detachVolumeFromServer**](docs/Api/CloudVolumeApi.md#detachvolumefromserver) | **POST** /cloud-servers/{id}/volume/{volumeId} | Detach volume from server
*CloudVolumeApi* | [**getVolume**](docs/Api/CloudVolumeApi.md#getvolume) | **GET** /cloud-volumes/{id} | Get volume
*ColocationApi* | [**addColocation**](docs/Api/ColocationApi.md#addcolocation) | **POST** /colocations | Add a colocation
*ColocationApi* | [**getColocation**](docs/Api/ColocationApi.md#getcolocation) | **GET** /colocations/{id} | Get a colocation
*ColocationApi* | [**getColocationInterconnections**](docs/Api/ColocationApi.md#getcolocationinterconnections) | **GET** /colocations/{id}/interconnections | Get the interconnections of a colocation
*ColocationApi* | [**getColocationPowerFeeds**](docs/Api/ColocationApi.md#getcolocationpowerfeeds) | **GET** /colocations/{id}/power-feeds | Get the power feeds of a colocation
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customers | Create a new customer
*DomainApi* | [**cancelDomain**](docs/Api/DomainApi.md#canceldomain) | **POST** /domains/{id}/cancel | Cancel a domain on the given date. If no date is given, the domain will be cancelled immediately.
*DomainApi* | [**checkDomainAvailability**](docs/Api/DomainApi.md#checkdomainavailability) | **POST** /domains/check-availability | Check if a domain is available
*DomainApi* | [**createHandle**](docs/Api/DomainApi.md#createhandle) | **POST** /handles | Create a new handle
*DomainApi* | [**deleteDomainAuthCode**](docs/Api/DomainApi.md#deletedomainauthcode) | **DELETE** /domains/{id}/auth-code | Request the auth code for a domain
*DomainApi* | [**deleteDomainTransferLock**](docs/Api/DomainApi.md#deletedomaintransferlock) | **DELETE** /domains/{id}/transfer-lock | Delete the transfer lock for a domain. This is not available for .de domains.
*DomainApi* | [**getDomain**](docs/Api/DomainApi.md#getdomain) | **GET** /domains/{id} | Get a domain by id
*DomainApi* | [**getDomains**](docs/Api/DomainApi.md#getdomains) | **GET** /domains | Get the current domains
*DomainApi* | [**getHandle**](docs/Api/DomainApi.md#gethandle) | **GET** /handles/{id} | Get a handle by id
*DomainApi* | [**getHandles**](docs/Api/DomainApi.md#gethandles) | **GET** /handles | Get the current handles
*DomainApi* | [**postDomain**](docs/Api/DomainApi.md#postdomain) | **POST** /domains | Register a new domain
*DomainApi* | [**retrieveDomainAuthCode**](docs/Api/DomainApi.md#retrievedomainauthcode) | **POST** /domains/{id}/auth-code | Request the auth code for a domain
*DomainApi* | [**revokeCancelDomain**](docs/Api/DomainApi.md#revokecanceldomain) | **DELETE** /domains/{id}/cancel | Revokes the cancellation of a domain.
*DomainApi* | [**setDomainTransferLock**](docs/Api/DomainApi.md#setdomaintransferlock) | **POST** /domains/{id}/transfer-lock | Set the transfer lock for a domain. This is not available for .de domains.
*DomainApi* | [**transitDomain**](docs/Api/DomainApi.md#transitdomain) | **POST** /domains/{id}/transit | Gives the domain to the registrar. This is only available for .de domains.
*DomainResellerApi* | [**getDomainReseller**](docs/Api/DomainResellerApi.md#getdomainreseller) | **GET** /domain-reseller | Retrieves a DomainReseller resource.
*DomainResellerApi* | [**getDomainResellerBillingData**](docs/Api/DomainResellerApi.md#getdomainresellerbillingdata) | **GET** /domain-reseller/billing-data | Retrieves the collection of DomainReseller resources.
*InterconnectionApi* | [**getInterconnection**](docs/Api/InterconnectionApi.md#getinterconnection) | **GET** /interconnections/{id} | Get an interconnection
*InvoiceApi* | [**downloadInvoice**](docs/Api/InvoiceApi.md#downloadinvoice) | **GET** /invoices/{id}/download | Download invoice
*InvoiceApi* | [**getInvoice**](docs/Api/InvoiceApi.md#getinvoice) | **GET** /invoices/{id} | Get invoice
*InvoiceApi* | [**getInvoices**](docs/Api/InvoiceApi.md#getinvoices) | **GET** /invoices | Get invoices
*IpAddressApi* | [**apiIpAddressesPost**](docs/Api/IpAddressApi.md#apiipaddressespost) | **POST** /ip-addresses | Create IP address
*IpAddressPoolApi* | [**apiIpAddressPoolsPost**](docs/Api/IpAddressPoolApi.md#apiipaddresspoolspost) | **POST** /ip-address-pools | Creates a IpAddressPool resource.
*LoginCheckApi* | [**loginCheckPost**](docs/Api/LoginCheckApi.md#logincheckpost) | **POST** /auth/login | Creates a user token.
*NetworkApi* | [**attachNetworkToServer**](docs/Api/NetworkApi.md#attachnetworktoserver) | **POST** /cloud-servers/{id}/network | Add network to server
*NetworkApi* | [**createNetwork**](docs/Api/NetworkApi.md#createnetwork) | **POST** /cloud-networks | Create network
*NetworkApi* | [**deleteNetwork**](docs/Api/NetworkApi.md#deletenetwork) | **DELETE** /cloud-networks/{id} | Delete network
*NetworkApi* | [**detachNetworkFromServer**](docs/Api/NetworkApi.md#detachnetworkfromserver) | **DELETE** /cloud-servers/{id}/network/{networkId} | Detach network from server
*NetworkApi* | [**getNetwork**](docs/Api/NetworkApi.md#getnetwork) | **GET** /cloud-networks/{id} | Get network
*ObjectStorageApi* | [**getAccessKey**](docs/Api/ObjectStorageApi.md#getaccesskey) | **GET** /objects/access_keys/{id} | Get an access key by id
*ObjectStorageApi* | [**getAccessKeys**](docs/Api/ObjectStorageApi.md#getaccesskeys) | **GET** /objects/access_keys | Get the current access keys
*ObjectStorageApi* | [**getBucket**](docs/Api/ObjectStorageApi.md#getbucket) | **GET** /objects/buckets/{id} | Get a bucket by id
*ObjectStorageApi* | [**getBuckets**](docs/Api/ObjectStorageApi.md#getbuckets) | **GET** /objects/buckets | Get the current buckets
*PowerFeedApi* | [**getPowerFeed**](docs/Api/PowerFeedApi.md#getpowerfeed) | **GET** /power-feeds/{id} | Get a power feed
*RackApi* | [**getRack**](docs/Api/RackApi.md#getrack) | **GET** /racks/{id} | Get a rack
*RackApi* | [**getRacks**](docs/Api/RackApi.md#getracks) | **GET** /racks | Get the racks
*TicketApi* | [**createMessage**](docs/Api/TicketApi.md#createmessage) | **POST** /tickets/{id}/messages | Create message
*TicketApi* | [**createTicket**](docs/Api/TicketApi.md#createticket) | **POST** /tickets | Create ticket
*TicketApi* | [**getTicket**](docs/Api/TicketApi.md#getticket) | **GET** /tickets/{id} | Get ticket
*TicketApi* | [**getTickets**](docs/Api/TicketApi.md#gettickets) | **GET** /tickets | Get tickets
*TicketApi* | [**replyTicket**](docs/Api/TicketApi.md#replyticket) | **POST** /tickets/{id}/reply | Reply to ticket
*TrafficApi* | [**getBill**](docs/Api/TrafficApi.md#getbill) | **GET** /datacenter/traffic/bills/{id} | Retrieves a Bill resource.
*TrafficApi* | [**getBillHistories**](docs/Api/TrafficApi.md#getbillhistories) | **GET** /datacenter/traffic/bills/{id}/history | Retrieves the collection of BillHistory resources.
*TrafficApi* | [**getBillHistory**](docs/Api/TrafficApi.md#getbillhistory) | **GET** /datacenter/traffic/bills/{id}/history/{historyId} | Retrieves a BillHistory resource.
*TrafficApi* | [**getBillHistoryGraph**](docs/Api/TrafficApi.md#getbillhistorygraph) | **GET** /datacenter/traffic/bills/{id}/history/{historyId}/graphs/{graphType} | Retrieves a Bill resource.
*TrafficApi* | [**getBills**](docs/Api/TrafficApi.md#getbills) | **GET** /datacenter/traffic/bills | Retrieves the collection of Bill resources.
*UserApi* | [**completeUser**](docs/Api/UserApi.md#completeuser) | **POST** /user/complete | Complete the user registration
*UserApi* | [**createApiToken**](docs/Api/UserApi.md#createapitoken) | **POST** /user/api-tokens | Creates a ApiToken resource.
*UserApi* | [**deleteApiToken**](docs/Api/UserApi.md#deleteapitoken) | **DELETE** /user/api-tokens/{id} | Removes the ApiToken resource.
*UserApi* | [**getApiTokens**](docs/Api/UserApi.md#getapitokens) | **GET** /user/api-tokens | Retrieves the collection of ApiToken resources.
*UserApi* | [**getLoginActivities**](docs/Api/UserApi.md#getloginactivities) | **GET** /user/login-activities | Retrieves the collection of LoginActivity resources.
*UserApi* | [**getMe**](docs/Api/UserApi.md#getme) | **GET** /user/me | Get the current user
*UserApi* | [**getUserCustomers**](docs/Api/UserApi.md#getusercustomers) | **GET** /user/customers | Get the customers of the current user
*UserApi* | [**recoverPassword**](docs/Api/UserApi.md#recoverpassword) | **POST** /auth/recover-password/{id} | Recover the password
*UserApi* | [**registerUser**](docs/Api/UserApi.md#registeruser) | **POST** /auth/register | Register a new user
*UserApi* | [**requestPasswordRecovery**](docs/Api/UserApi.md#requestpasswordrecovery) | **POST** /auth/request-password-recovery | Request a password recovery
*UserApi* | [**setDefaultCustomer**](docs/Api/UserApi.md#setdefaultcustomer) | **POST** /user/default-customer | Set the default customer of the current user
*UserApi* | [**testPasswordRecovery**](docs/Api/UserApi.md#testpasswordrecovery) | **GET** /auth/recover-password/{id} | Test the password recovery token
*VLANApi* | [**apiVlansGetCollection**](docs/Api/VLANApi.md#apivlansgetcollection) | **GET** /vlans | Retrieves the collection of VLAN resources.
*VLANApi* | [**apiVlansIdGet**](docs/Api/VLANApi.md#apivlansidget) | **GET** /vlans/{id} | Retrieves a VLAN resource.
*VLANApi* | [**apiVlansPost**](docs/Api/VLANApi.md#apivlanspost) | **POST** /vlans | Creates a VLAN resource.
*WebspaceApi* | [**createWebspace**](docs/Api/WebspaceApi.md#createwebspace) | **POST** /webspaces | Create a webspace
*WebspaceApi* | [**getWebspace**](docs/Api/WebspaceApi.md#getwebspace) | **GET** /webspaces/{id} | Get a webspace
*WebspaceApi* | [**getWebspaces**](docs/Api/WebspaceApi.md#getwebspaces) | **GET** /webspaces | Get all webspaces
*WebspaceApi* | [**loginSessionWebspace**](docs/Api/WebspaceApi.md#loginsessionwebspace) | **POST** /webspaces/{id}/login-session | Login to a webspace
*WebspacePlanApi* | [**apiWebspacePlansIdGet**](docs/Api/WebspacePlanApi.md#apiwebspaceplansidget) | **GET** /webspace-plans/{id} | Get webspace plan
*ZoneApi* | [**createDnsZone**](docs/Api/ZoneApi.md#creatednszone) | **POST** /dns/zones | Create a DNS zone
*ZoneApi* | [**createDnsZoneRecord**](docs/Api/ZoneApi.md#creatednszonerecord) | **POST** /dns/zones/{id}/records | Create a DNS record
*ZoneApi* | [**deleteDnsZone**](docs/Api/ZoneApi.md#deletednszone) | **DELETE** /dns/zones/{id} | Delete a DNS zone
*ZoneApi* | [**disableDnssec**](docs/Api/ZoneApi.md#disablednssec) | **DELETE** /dns/zones/{id}/dnssec | Disable DNSSEC
*ZoneApi* | [**enableDnssec**](docs/Api/ZoneApi.md#enablednssec) | **POST** /dns/zones/{id}/dnssec | Enable DNSSEC
*ZoneApi* | [**getDnsZone**](docs/Api/ZoneApi.md#getdnszone) | **GET** /dns/zones/{id} | Get a DNS zone
*ZoneApi* | [**getDnsZoneRecords**](docs/Api/ZoneApi.md#getdnszonerecords) | **GET** /dns/zones/{id}/records | Get a collection of DNS records
*ZoneApi* | [**getDnsZones**](docs/Api/ZoneApi.md#getdnszones) | **GET** /dns/zones | Get a collection of DNS zones
*ZoneApi* | [**getDnssec**](docs/Api/ZoneApi.md#getdnssec) | **GET** /dns/zones/{id}/dnssec | Get DNSSEC keys
*ZoneApi* | [**updateDnsZone**](docs/Api/ZoneApi.md#updatednszone) | **PUT** /dns/zones/{id} | Update a DNS zone
*ZoneRecordApi* | [**deleteDnsZoneRecord**](docs/Api/ZoneRecordApi.md#deletednszonerecord) | **DELETE** /dns/zones/{id}/records/{recordId} | Delete a DNS record
*ZoneRecordApi* | [**updateDnsZoneRecord**](docs/Api/ZoneRecordApi.md#updatednszonerecord) | **PUT** /dns/zones/{id}/records/{recordId} | Update a DNS record

## Models

- [AccessKey](docs/Model/AccessKey.md)
- [AccessKeyBucket](docs/Model/AccessKeyBucket.md)
- [AccountAccountRead](docs/Model/AccountAccountRead.md)
- [AccountAccountReadCustomer](docs/Model/AccountAccountReadCustomer.md)
- [AccountUserReadUserMeReadAccountMeCustomerMe](docs/Model/AccountUserReadUserMeReadAccountMeCustomerMe.md)
- [ApiToken](docs/Model/ApiToken.md)
- [ApiTokenApiTokenCreatedResponse](docs/Model/ApiTokenApiTokenCreatedResponse.md)
- [ApiTokenApiTokenReadTimestampableCreatedAtReadTimestampableUpdatedAtRead](docs/Model/ApiTokenApiTokenReadTimestampableCreatedAtReadTimestampableUpdatedAtRead.md)
- [ApiTokenCreateApiTokenRequest](docs/Model/ApiTokenCreateApiTokenRequest.md)
- [ApplicationApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneRead](docs/Model/ApplicationApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneRead.md)
- [ApplicationApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneReadServiceLevelAgreement](docs/Model/ApplicationApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneReadServiceLevelAgreement.md)
- [ApplicationApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead](docs/Model/ApplicationApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead.md)
- [ApplicationApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneReadCloudServer](docs/Model/ApplicationApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneReadCloudServer.md)
- [ApplicationApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneReadServiceLevelAgreement](docs/Model/ApplicationApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneReadServiceLevelAgreement.md)
- [ApplicationTypeApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneRead](docs/Model/ApplicationTypeApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneRead.md)
- [ApplicationTypeApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead](docs/Model/ApplicationTypeApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead.md)
- [Bill](docs/Model/Bill.md)
- [BillBillGraphResponse](docs/Model/BillBillGraphResponse.md)
- [BillHistory](docs/Model/BillHistory.md)
- [Bucket](docs/Model/Bucket.md)
- [Colocation](docs/Model/Colocation.md)
- [ColocationInterconnection](docs/Model/ColocationInterconnection.md)
- [ColocationPowerFeed](docs/Model/ColocationPowerFeed.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAccountRead](docs/Model/CustomerAccountRead.md)
- [CustomerCreateCustomerRequest](docs/Model/CustomerCreateCustomerRequest.md)
- [CustomerUserReadUserMeReadAccountMeCustomerMe](docs/Model/CustomerUserReadUserMeReadAccountMeCustomerMe.md)
- [DnssecInfoKeyZoneDnssec](docs/Model/DnssecInfoKeyZoneDnssec.md)
- [DomainCancelRequest](docs/Model/DomainCancelRequest.md)
- [DomainCheckDomainAvailabilityRequestDomainCheck](docs/Model/DomainCheckDomainAvailabilityRequestDomainCheck.md)
- [DomainDomainAvailabilityResponseDomainCheck](docs/Model/DomainDomainAvailabilityResponseDomainCheck.md)
- [DomainDomainList](docs/Model/DomainDomainList.md)
- [DomainDomainReadHandleReadNameserverRead](docs/Model/DomainDomainReadHandleReadNameserverRead.md)
- [DomainDomainReadHandleReadNameserverReadAdminHandle](docs/Model/DomainDomainReadHandleReadNameserverReadAdminHandle.md)
- [DomainRegisterDomainRequest](docs/Model/DomainRegisterDomainRequest.md)
- [DomainRegistrar](docs/Model/DomainRegistrar.md)
- [DomainRegistrarHandle](docs/Model/DomainRegistrarHandle.md)
- [DomainResellerDomainResellerBillingDataResponse](docs/Model/DomainResellerDomainResellerBillingDataResponse.md)
- [DomainResellerDomainResellerRead](docs/Model/DomainResellerDomainResellerRead.md)
- [DomainTransitRequest](docs/Model/DomainTransitRequest.md)
- [Handle](docs/Model/Handle.md)
- [HandleCreateHandleRequestHandleWrite](docs/Model/HandleCreateHandleRequestHandleWrite.md)
- [HandleDomainReadHandleReadNameserverRead](docs/Model/HandleDomainReadHandleReadNameserverRead.md)
- [HandleHandleRead](docs/Model/HandleHandleRead.md)
- [Interconnection](docs/Model/Interconnection.md)
- [InvoiceInvoiceList](docs/Model/InvoiceInvoiceList.md)
- [InvoiceInvoiceRead](docs/Model/InvoiceInvoiceRead.md)
- [IpAddress](docs/Model/IpAddress.md)
- [IpAddressApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead](docs/Model/IpAddressApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead.md)
- [IpAddressCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead](docs/Model/IpAddressCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead.md)
- [IpAddressCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead](docs/Model/IpAddressCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead.md)
- [IpAddressPool](docs/Model/IpAddressPool.md)
- [IpAddressPoolIpAddressPoolCreate](docs/Model/IpAddressPoolIpAddressPoolCreate.md)
- [IpAddressWebspaceRead](docs/Model/IpAddressWebspaceRead.md)
- [LoginActivity](docs/Model/LoginActivity.md)
- [LoginCheckPost200Response](docs/Model/LoginCheckPost200Response.md)
- [LoginCheckPostRequest](docs/Model/LoginCheckPostRequest.md)
- [MessageTicketRead](docs/Model/MessageTicketRead.md)
- [MessageTicketReadMaintenanceRead](docs/Model/MessageTicketReadMaintenanceRead.md)
- [NameserverDomainReadHandleReadNameserverRead](docs/Model/NameserverDomainReadHandleReadNameserverRead.md)
- [NetworkAttachNetworkToServerRequest](docs/Model/NetworkAttachNetworkToServerRequest.md)
- [PaymentMethodInvoiceRead](docs/Model/PaymentMethodInvoiceRead.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PleskHostWebspaceRead](docs/Model/PleskHostWebspaceRead.md)
- [PowerFeed](docs/Model/PowerFeed.md)
- [Rack](docs/Model/Rack.md)
- [Region](docs/Model/Region.md)
- [RegionCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead](docs/Model/RegionCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead.md)
- [RegionCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead](docs/Model/RegionCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead.md)
- [RrdDataItemRrdDataRead](docs/Model/RrdDataItemRrdDataRead.md)
- [ServiceLevelAgreementApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneRead](docs/Model/ServiceLevelAgreementApplicationListServiceLevelAgreementReadApplicationTypeListCloudServerListZoneRead.md)
- [ServiceLevelAgreementApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead](docs/Model/ServiceLevelAgreementApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead.md)
- [ServiceLevelAgreementCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead](docs/Model/ServiceLevelAgreementCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead.md)
- [TicketCreateTicketRequestTicketCreate](docs/Model/TicketCreateTicketRequestTicketCreate.md)
- [TicketMessageMessageCreate](docs/Model/TicketMessageMessageCreate.md)
- [TicketReplyTicketRequestMessageCreate](docs/Model/TicketReplyTicketRequestMessageCreate.md)
- [TicketTicketList](docs/Model/TicketTicketList.md)
- [TicketTicketRead](docs/Model/TicketTicketRead.md)
- [TicketTicketReadMaintenanceRead](docs/Model/TicketTicketReadMaintenanceRead.md)
- [User](docs/Model/User.md)
- [UserChangePasswordRequestDefault](docs/Model/UserChangePasswordRequestDefault.md)
- [UserCompleteUserRequestUserComplete](docs/Model/UserCompleteUserRequestUserComplete.md)
- [UserCustomer](docs/Model/UserCustomer.md)
- [UserPasswordRecoveryTestResponse](docs/Model/UserPasswordRecoveryTestResponse.md)
- [UserRegisterUserRequestUserRegister](docs/Model/UserRegisterUserRequestUserRegister.md)
- [UserRequestPasswordRecoveryRequestDefault](docs/Model/UserRequestPasswordRecoveryRequestDefault.md)
- [UserSetDefaultCustomerRequestDefault](docs/Model/UserSetDefaultCustomerRequestDefault.md)
- [UserUserMeResponseUserReadUserMeReadAccountMeCustomerMe](docs/Model/UserUserMeResponseUserReadUserMeReadAccountMeCustomerMe.md)
- [UserUserMeResponseUserReadUserMeReadAccountMeCustomerMeAccount](docs/Model/UserUserMeResponseUserReadUserMeReadAccountMeCustomerMeAccount.md)
- [UserUserMeResponseUserReadUserMeReadAccountMeCustomerMeCustomer](docs/Model/UserUserMeResponseUserReadUserMeReadAccountMeCustomerMeCustomer.md)
- [VLAN](docs/Model/VLAN.md)
- [VirtualMachineApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead](docs/Model/VirtualMachineApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneRead.md)
- [VirtualMachineApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneReadIpV4](docs/Model/VirtualMachineApplicationReadServiceLevelAgreementReadApplicationTypeReadCloudServerReadZoneReadIpV4.md)
- [VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead](docs/Model/VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead.md)
- [VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4](docs/Model/VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4.md)
- [VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead](docs/Model/VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead.md)
- [VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskReadIpV4](docs/Model/VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskReadIpV4.md)
- [VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskReadServiceLevelAgreement](docs/Model/VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskReadServiceLevelAgreement.md)
- [VirtualMachineCloudServerStatisticsResponseRrdDataRead](docs/Model/VirtualMachineCloudServerStatisticsResponseRrdDataRead.md)
- [VirtualMachineTaskCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead](docs/Model/VirtualMachineTaskCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead.md)
- [WebspaceCreateWebspaceRequestWebspaceCreate](docs/Model/WebspaceCreateWebspaceRequestWebspaceCreate.md)
- [WebspacePlan](docs/Model/WebspacePlan.md)
- [WebspacePlanWebspaceRead](docs/Model/WebspacePlanWebspaceRead.md)
- [WebspaceWebspaceLoginSessionResponseWebspaceLoginSession](docs/Model/WebspaceWebspaceLoginSessionResponseWebspaceLoginSession.md)
- [WebspaceWebspaceRead](docs/Model/WebspaceWebspaceRead.md)
- [WebspaceWebspaceReadIpAddressV4](docs/Model/WebspaceWebspaceReadIpAddressV4.md)
- [WebspaceWebspaceReadIpAddressV6](docs/Model/WebspaceWebspaceReadIpAddressV6.md)
- [WebspaceWebspaceReadPleskHost](docs/Model/WebspaceWebspaceReadPleskHost.md)
- [ZoneDnssecInfoZoneDnssec](docs/Model/ZoneDnssecInfoZoneDnssec.md)
- [ZoneNameserverZoneList](docs/Model/ZoneNameserverZoneList.md)
- [ZoneNameserverZoneListZoneRead](docs/Model/ZoneNameserverZoneListZoneRead.md)
- [ZoneNameserverZoneRead](docs/Model/ZoneNameserverZoneRead.md)
- [ZoneNameserverZoneReadZoneListZoneRecordRead](docs/Model/ZoneNameserverZoneReadZoneListZoneRecordRead.md)
- [ZoneNameserverZoneReadZoneRecordRead](docs/Model/ZoneNameserverZoneReadZoneRecordRead.md)
- [ZoneRecord](docs/Model/ZoneRecord.md)
- [ZoneRecordInputZoneCreateZoneRecordCreate](docs/Model/ZoneRecordInputZoneCreateZoneRecordCreate.md)
- [ZoneRecordZoneReadZoneListZoneRecordRead](docs/Model/ZoneRecordZoneReadZoneListZoneRecordRead.md)
- [ZoneRecordZoneReadZoneRecordRead](docs/Model/ZoneRecordZoneReadZoneRecordRead.md)
- [ZoneRecordZoneRecordInputZoneRecordCreate](docs/Model/ZoneRecordZoneRecordInputZoneRecordCreate.md)
- [ZoneRecordZoneRecordRead](docs/Model/ZoneRecordZoneRecordRead.md)
- [ZoneRecordZoneRecordUpdate](docs/Model/ZoneRecordZoneRecordUpdate.md)
- [ZoneRecordZoneUpdateZoneRecordUpdate](docs/Model/ZoneRecordZoneUpdateZoneRecordUpdate.md)
- [ZoneZoneInputZoneCreateZoneRecordCreate](docs/Model/ZoneZoneInputZoneCreateZoneRecordCreate.md)
- [ZoneZoneList](docs/Model/ZoneZoneList.md)
- [ZoneZoneListZoneRead](docs/Model/ZoneZoneListZoneRead.md)
- [ZoneZoneRead](docs/Model/ZoneZoneRead.md)
- [ZoneZoneReadZoneListZoneRecordRead](docs/Model/ZoneZoneReadZoneListZoneRecordRead.md)
- [ZoneZoneReadZoneRecordRead](docs/Model/ZoneZoneReadZoneRecordRead.md)
- [ZoneZoneUpdateZoneRecordUpdate](docs/Model/ZoneZoneUpdateZoneRecordUpdate.md)

## Authorization

Authentication schemes defined for the API:
### JWT

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@netzfabrik.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
