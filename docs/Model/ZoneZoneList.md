# # ZoneZoneList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**name** | **string** |  |
**isDnssecEnabled** | **bool** | necessary for api platform |
**refresh** | **int** |  | [default to 3600]
**retry** | **int** |  | [default to 600]
**expire** | **int** |  | [default to 604800]
**ttl** | **int** |  | [default to 3600]
**type** | **string** |  | [optional]
**nameservers** | [**\NETZFABRIK\Model\ZoneNameserverZoneList[]**](ZoneNameserverZoneList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
