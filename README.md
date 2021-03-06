# SquareConnect
Client library for accessing the Square Connect APIs

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0
- Package version: 3.0.0
- Build date: 2017-01-05T17:43:20.756-08:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://squareup.com/developers](https://squareup.com/developers)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/square/connect.git"
    }
  ],
  "require": {
    "square/connect": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SquareConnect/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: personal_access_token
SquareConnect\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');

$api_instance = new SquareConnect\Api\CustomerApi();
$body = new \SquareConnect\Model\CreateCustomerRequest(); // \SquareConnect\Model\CreateCustomerRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}

?>
```
## Support

If you have trouble with this SDK or any of Square's APIs, ask a new question on Stack Overflow in the [square-connect](https://stackoverflow.com/questions/tagged/square-connect) tag. 

## Documentation for API Endpoints

All URIs are relative to *https://connect.squareup.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /v2/customers | CreateCustomer
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /v2/customers/{customer_id} | DeleteCustomer
*CustomerApi* | [**listCustomers**](docs/Api/CustomerApi.md#listcustomers) | **GET** /v2/customers | ListCustomers
*CustomerApi* | [**retrieveCustomer**](docs/Api/CustomerApi.md#retrievecustomer) | **GET** /v2/customers/{customer_id} | RetrieveCustomer
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /v2/customers/{customer_id} | UpdateCustomer
*CustomerCardApi* | [**createCustomerCard**](docs/Api/CustomerCardApi.md#createcustomercard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
*CustomerCardApi* | [**deleteCustomerCard**](docs/Api/CustomerCardApi.md#deletecustomercard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard
*EmployeesApi* | [**createEmployee**](docs/Api/EmployeesApi.md#createemployee) | **POST** /v1/me/employees | Creates an employee for a business.
*EmployeesApi* | [**createEmployeeRole**](docs/Api/EmployeesApi.md#createemployeerole) | **POST** /v1/me/roles | Creates an employee role you can then assign to employees.
*EmployeesApi* | [**createTimecard**](docs/Api/EmployeesApi.md#createtimecard) | **POST** /v1/me/timecards | Creates a timecard for an employee. Each timecard corresponds to a single shift.
*EmployeesApi* | [**deleteTimecard**](docs/Api/EmployeesApi.md#deletetimecard) | **DELETE** /v1/me/timecards/{timecard_id} | Deletes a timecard. Deleted timecards are still accessible from Connect API endpoints, but the value of their deleted field is set to true. See Handling deleted timecards for more information.
*EmployeesApi* | [**listCashDrawerShifts**](docs/Api/EmployeesApi.md#listcashdrawershifts) | **GET** /v1/{location_id}/cash-drawer-shifts | Provides the details for all of a location&#39;s cash drawer shifts during a date range. The date range you specify cannot exceed 90 days.
*EmployeesApi* | [**listEmployeeRoles**](docs/Api/EmployeesApi.md#listemployeeroles) | **GET** /v1/me/roles | Provides summary information for all of a business&#39;s employee roles.
*EmployeesApi* | [**listEmployees**](docs/Api/EmployeesApi.md#listemployees) | **GET** /v1/me/employees | Provides summary information for all of a business&#39;s employees.
*EmployeesApi* | [**listTimecardEvents**](docs/Api/EmployeesApi.md#listtimecardevents) | **GET** /v1/me/timecards/{timecard_id}/events | Provides summary information for all events associated with a particular timecard.
*EmployeesApi* | [**listTimecards**](docs/Api/EmployeesApi.md#listtimecards) | **GET** /v1/me/timecards | Provides summary information for all of a business&#39;s employee timecards.
*EmployeesApi* | [**retrieveCashDrawerShift**](docs/Api/EmployeesApi.md#retrievecashdrawershift) | **GET** /v1/{location_id}/cash-drawer-shifts/{shift_id} | Provides the details for a single cash drawer shift, including all events that occurred during the shift.
*EmployeesApi* | [**retrieveEmployee**](docs/Api/EmployeesApi.md#retrieveemployee) | **GET** /v1/me/employees/{employee_id} | Provides the details for a single employee.
*EmployeesApi* | [**retrieveEmployeeRole**](docs/Api/EmployeesApi.md#retrieveemployeerole) | **GET** /v1/me/roles/{role_id} | Provides the details for a single employee role.
*EmployeesApi* | [**retrieveTimecard**](docs/Api/EmployeesApi.md#retrievetimecard) | **GET** /v1/me/timecards/{timecard_id} | Provides the details for a single timecard.
*EmployeesApi* | [**updateEmployee**](docs/Api/EmployeesApi.md#updateemployee) | **PUT** /v1/me/employees/{employee_id} | v1UpdateEmployee
*EmployeesApi* | [**updateEmployeeRole**](docs/Api/EmployeesApi.md#updateemployeerole) | **PUT** /v1/me/roles/{role_id} | Modifies the details of an employee role.
*EmployeesApi* | [**updateTimecard**](docs/Api/EmployeesApi.md#updatetimecard) | **PUT** /v1/me/timecards/{timecard_id} | Modifies a timecard&#39;s details. This creates an API_EDIT event for the timecard. You can view a timecard&#39;s event history with the List Timecard Events endpoint.
*LocationApi* | [**listLocations**](docs/Api/LocationApi.md#listlocations) | **GET** /v2/locations | ListLocations
*OAuthApi* | [**getAccessToken**](docs/Api/OAuthApi.md#getaccesstoken) | **POST** /oauth2/token | Exchange an Authorization code for an Access Token
*OAuthApi* | [**renewToken**](docs/Api/OAuthApi.md#renewtoken) | **POST** /oauth2/clients/{application_id}/access-token/renew | Renew your Access Token.
*RefundApi* | [**createRefund**](docs/Api/RefundApi.md#createrefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
*RefundApi* | [**listRefunds**](docs/Api/RefundApi.md#listrefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds
*TransactionApi* | [**captureTransaction**](docs/Api/TransactionApi.md#capturetransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
*TransactionApi* | [**charge**](docs/Api/TransactionApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
*TransactionApi* | [**listTransactions**](docs/Api/TransactionApi.md#listtransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
*TransactionApi* | [**retrieveTransaction**](docs/Api/TransactionApi.md#retrievetransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
*TransactionApi* | [**voidTransaction**](docs/Api/TransactionApi.md#voidtransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction
*VBusinessManagementApi* | [**v1ListLocations**](docs/Api/VBusinessManagementApi.md#v1listlocations) | **GET** /v1/me/locations | Provides details for a business&#39;s locations, including their IDs.
*VBusinessManagementApi* | [**v1RetrieveBusiness**](docs/Api/VBusinessManagementApi.md#v1retrievebusiness) | **GET** /v1/me | Get a business&#39;s information.
*VItemsApi* | [**v1AdjustInventory**](docs/Api/VItemsApi.md#v1adjustinventory) | **POST** /v1/{location_id}/inventory/{variation_id} | Adjusts an item variation&#39;s current available inventory.
*VItemsApi* | [**v1ApplyFee**](docs/Api/VItemsApi.md#v1applyfee) | **PUT** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Associates a fee with an item, meaning the fee is automatically applied to the item in Square Register.
*VItemsApi* | [**v1ApplyModiferList**](docs/Api/VItemsApi.md#v1applymodiferlist) | **PUT** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Associates a modifier list with an item, meaning modifier options from the list can be applied to the item.
*VItemsApi* | [**v1CreateCategory**](docs/Api/VItemsApi.md#v1createcategory) | **POST** /v1/{location_id}/categories | Creates an item category.
*VItemsApi* | [**v1CreateDiscount**](docs/Api/VItemsApi.md#v1creatediscount) | **POST** /v1/{location_id}/discounts | Creates a discount.
*VItemsApi* | [**v1CreateFee**](docs/Api/VItemsApi.md#v1createfee) | **POST** /v1/{location_id}/fees | Creates a fee (tax).
*VItemsApi* | [**v1CreateItem**](docs/Api/VItemsApi.md#v1createitem) | **POST** /v1/{location_id}/items | Creates an item and at least one variation for it.
*VItemsApi* | [**v1CreateModifierList**](docs/Api/VItemsApi.md#v1createmodifierlist) | **POST** /v1/{location_id}/modifier-lists | Creates an item modifier list and at least one modifier option for it.
*VItemsApi* | [**v1CreateModifierListOption**](docs/Api/VItemsApi.md#v1createmodifierlistoption) | **POST** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options | Creates an item modifier option and adds it to a modifier list.
*VItemsApi* | [**v1CreatePage**](docs/Api/VItemsApi.md#v1createpage) | **POST** /v1/{location_id}/pages | Creates a Favorites page in Square Register.
*VItemsApi* | [**v1CreateVariation**](docs/Api/VItemsApi.md#v1createvariation) | **POST** /v1/{location_id}/items/{item_id}/variations | Creates an item variation for an existing item.
*VItemsApi* | [**v1DeleteFee**](docs/Api/VItemsApi.md#v1deletefee) | **DELETE** /v1/{location_id}/fees/{fee_id} | Deletes an existing fee (tax).
*VItemsApi* | [**v1DeleteItem**](docs/Api/VItemsApi.md#v1deleteitem) | **DELETE** /v1/{location_id}/items/{item_id} | Deletes an existing item and all item variations associated with it.
*VItemsApi* | [**v1DeleteItemCategory**](docs/Api/VItemsApi.md#v1deleteitemcategory) | **DELETE** /v1/{location_id}/categories/{category_id} | Deletes an existing item category.
*VItemsApi* | [**v1DeleteItemDiscount**](docs/Api/VItemsApi.md#v1deleteitemdiscount) | **DELETE** /v1/{location_id}/discounts/{discount_id} | Deletes an existing discount.
*VItemsApi* | [**v1DeleteModiferList**](docs/Api/VItemsApi.md#v1deletemodiferlist) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id} | Deletes an existing item modifier list and all modifier options associated with it.
*VItemsApi* | [**v1DeleteModiferListOption**](docs/Api/VItemsApi.md#v1deletemodiferlistoption) | **DELETE** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Deletes an existing item modifier option from a modifier list.
*VItemsApi* | [**v1DeletePage**](docs/Api/VItemsApi.md#v1deletepage) | **DELETE** /v1/{location_id}/pages/{page_id} | Deletes an existing Favorites page and all of its cells.
*VItemsApi* | [**v1DeletePageCell**](docs/Api/VItemsApi.md#v1deletepagecell) | **DELETE** /v1/{location_id}/pages/{page_id}/cells | Deletes a cell from a Favorites page in Square Register.
*VItemsApi* | [**v1DeleteVaration**](docs/Api/VItemsApi.md#v1deletevaration) | **DELETE** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Deletes an existing item variation from an item.
*VItemsApi* | [**v1ListDiscounts**](docs/Api/VItemsApi.md#v1listdiscounts) | **GET** /v1/{location_id}/discounts | Lists all of a location&#39;s discounts.
*VItemsApi* | [**v1ListFees**](docs/Api/VItemsApi.md#v1listfees) | **GET** /v1/{location_id}/fees | Lists all of a location&#39;s fees (taxes).
*VItemsApi* | [**v1ListInventory**](docs/Api/VItemsApi.md#v1listinventory) | **GET** /v1/{location_id}/inventory | Provides inventory information for all of a merchant&#39;s inventory-enabled item variations.
*VItemsApi* | [**v1ListItemCategories**](docs/Api/VItemsApi.md#v1listitemcategories) | **GET** /v1/{location_id}/categories | Lists all of a location&#39;s item categories.
*VItemsApi* | [**v1ListItems**](docs/Api/VItemsApi.md#v1listitems) | **GET** /v1/{location_id}/items | Provides summary information for all of a location&#39;s items.
*VItemsApi* | [**v1ListModifierLists**](docs/Api/VItemsApi.md#v1listmodifierlists) | **GET** /v1/{location_id}/modifier-lists | Lists all of a location&#39;s modifier lists.
*VItemsApi* | [**v1ListPages**](docs/Api/VItemsApi.md#v1listpages) | **GET** /v1/{location_id}/pages | Lists all of a location&#39;s Favorites pages in Square Register.
*VItemsApi* | [**v1RemoveFee**](docs/Api/VItemsApi.md#v1removefee) | **DELETE** /v1/{location_id}/items/{item_id}/fees/{fee_id} | Removes a fee assocation from an item, meaning the fee is no longer automatically applied to the item in Square Register.
*VItemsApi* | [**v1RemoveModiferList**](docs/Api/VItemsApi.md#v1removemodiferlist) | **DELETE** /v1/{location_id}/items/{item_id}/modifier-lists/{modifier_list_id} | Removes a modifier list association from an item, meaning modifier options from the list can no longer be applied to the item.
*VItemsApi* | [**v1RetrieveItem**](docs/Api/VItemsApi.md#v1retrieveitem) | **GET** /v1/{location_id}/items/{item_id} | Provides the details for a single item, including associated modifier lists and fees.
*VItemsApi* | [**v1RetrieveModiferList**](docs/Api/VItemsApi.md#v1retrievemodiferlist) | **GET** /v1/{location_id}/modifier-lists/{modifier_list_id} | Provides the details for a single modifier list.
*VItemsApi* | [**v1UpdateFee**](docs/Api/VItemsApi.md#v1updatefee) | **PUT** /v1/{location_id}/fees/{fee_id} | Modifies the details of an existing fee (tax).
*VItemsApi* | [**v1UpdateItem**](docs/Api/VItemsApi.md#v1updateitem) | **PUT** /v1/{location_id}/items/{item_id} | Modifies the core details of an existing item.
*VItemsApi* | [**v1UpdateItemCategory**](docs/Api/VItemsApi.md#v1updateitemcategory) | **PUT** /v1/{location_id}/categories/{category_id} | Modifies the details of an existing item category.
*VItemsApi* | [**v1UpdateItemDiscount**](docs/Api/VItemsApi.md#v1updateitemdiscount) | **PUT** /v1/{location_id}/discounts/{discount_id} | Modifies the details of an existing discount.
*VItemsApi* | [**v1UpdateModifierList**](docs/Api/VItemsApi.md#v1updatemodifierlist) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id} | Modifies the details of an existing item modifier list.
*VItemsApi* | [**v1UpdateModifierListOption**](docs/Api/VItemsApi.md#v1updatemodifierlistoption) | **PUT** /v1/{location_id}/modifier-lists/{modifier_list_id}/modifier-options/{modifier_option_id} | Modifies the details of an existing item modifier option.
*VItemsApi* | [**v1UpdatePage**](docs/Api/VItemsApi.md#v1updatepage) | **PUT** /v1/{location_id}/pages/{page_id} | Modifies the details of a Favorites page in Square Register.
*VItemsApi* | [**v1UpdatePageCell**](docs/Api/VItemsApi.md#v1updatepagecell) | **PUT** /v1/{location_id}/pages/{page_id}/cells | Modifies a cell of a Favorites page in Square Register.
*VItemsApi* | [**v1UpdateVaration**](docs/Api/VItemsApi.md#v1updatevaration) | **PUT** /v1/{location_id}/items/{item_id}/variations/{variation_id} | Modifies the details of an existing item variation.
*VTransactionsApi* | [**v1CreateRefund**](docs/Api/VTransactionsApi.md#v1createrefund) | **POST** /v1/{location_id}/refunds | Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment.
*VTransactionsApi* | [**v1ListBankAccounts**](docs/Api/VTransactionsApi.md#v1listbankaccounts) | **GET** /v1/{location_id}/bank-accounts | Provides non-confidential details for all of a location&#39;s associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.
*VTransactionsApi* | [**v1ListOrders**](docs/Api/VTransactionsApi.md#v1listorders) | **GET** /v1/{location_id}/orders | Provides summary information for a merchant&#39;s online store orders.
*VTransactionsApi* | [**v1ListPayments**](docs/Api/VTransactionsApi.md#v1listpayments) | **GET** /v1/{location_id}/payments | Provides summary information for all payments taken by a merchant or any of the merchant&#39;s mobile staff during a date range. Date ranges cannot exceed one year in length. See Date ranges for details of inclusive and exclusive dates.
*VTransactionsApi* | [**v1ListRefunds**](docs/Api/VTransactionsApi.md#v1listrefunds) | **GET** /v1/{location_id}/refunds | Provides the details for all refunds initiated by a merchant or any of the merchant&#39;s mobile staff during a date range. Date ranges cannot exceed one year in length.
*VTransactionsApi* | [**v1ListSettlements**](docs/Api/VTransactionsApi.md#v1listsettlements) | **GET** /v1/{location_id}/settlements | Provides summary information for all deposits and withdrawals initiated by Square to a merchant&#39;s bank account during a date range. Date ranges cannot exceed one year in length.
*VTransactionsApi* | [**v1RetrieveBankAccount**](docs/Api/VTransactionsApi.md#v1retrievebankaccount) | **GET** /v1/{location_id}/bank-accounts/{bank_account_id} | Provides non-confidential details for a merchant&#39;s associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API.
*VTransactionsApi* | [**v1RetrieveOrder**](docs/Api/VTransactionsApi.md#v1retrieveorder) | **GET** /v1/{location_id}/orders/{order_id} | Provides comprehensive information for a single online store order, including the order&#39;s history.
*VTransactionsApi* | [**v1RetrievePayment**](docs/Api/VTransactionsApi.md#v1retrievepayment) | **GET** /v1/{location_id}/payments/{payment_id} | Provides comprehensive information for a single payment.
*VTransactionsApi* | [**v1RetrieveSettlement**](docs/Api/VTransactionsApi.md#v1retrievesettlement) | **GET** /v1/{location_id}/settlements/{settlement_id} | Provides comprehensive information for a single settlement, including the entries that contribute to the settlement&#39;s total.
*VTransactionsApi* | [**v1UpdateOrder**](docs/Api/VTransactionsApi.md#v1updateorder) | **PUT** /v1/{location_id}/orders/{order_id} | Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:


## Documentation For Models

 - [AccessTokenRenewRequest](docs/Model/AccessTokenRenewRequest.md)
 - [AccessTokenRequest](docs/Model/AccessTokenRequest.md)
 - [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
 - [Address](docs/Model/Address.md)
 - [CaptureTransactionResponse](docs/Model/CaptureTransactionResponse.md)
 - [Card](docs/Model/Card.md)
 - [CardBrand](docs/Model/CardBrand.md)
 - [CashDrawerEvent](docs/Model/CashDrawerEvent.md)
 - [CashDrawerShift](docs/Model/CashDrawerShift.md)
 - [ChargeRequest](docs/Model/ChargeRequest.md)
 - [ChargeResponse](docs/Model/ChargeResponse.md)
 - [Country](docs/Model/Country.md)
 - [CreateCustomerCardRequest](docs/Model/CreateCustomerCardRequest.md)
 - [CreateCustomerCardResponse](docs/Model/CreateCustomerCardResponse.md)
 - [CreateCustomerRequest](docs/Model/CreateCustomerRequest.md)
 - [CreateCustomerResponse](docs/Model/CreateCustomerResponse.md)
 - [CreateRefundRequest](docs/Model/CreateRefundRequest.md)
 - [CreateRefundResponse](docs/Model/CreateRefundResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [Customer](docs/Model/Customer.md)
 - [DeleteCustomerCardResponse](docs/Model/DeleteCustomerCardResponse.md)
 - [DeleteCustomerResponse](docs/Model/DeleteCustomerResponse.md)
 - [Device](docs/Model/Device.md)
 - [Employee](docs/Model/Employee.md)
 - [EmployeeRole](docs/Model/EmployeeRole.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCategory](docs/Model/ErrorCategory.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [ListCustomersRequest](docs/Model/ListCustomersRequest.md)
 - [ListCustomersResponse](docs/Model/ListCustomersResponse.md)
 - [ListLocationsResponse](docs/Model/ListLocationsResponse.md)
 - [ListRefundsRequest](docs/Model/ListRefundsRequest.md)
 - [ListRefundsResponse](docs/Model/ListRefundsResponse.md)
 - [ListTransactionsRequest](docs/Model/ListTransactionsRequest.md)
 - [ListTransactionsResponse](docs/Model/ListTransactionsResponse.md)
 - [Location](docs/Model/Location.md)
 - [LocationCapability](docs/Model/LocationCapability.md)
 - [Money](docs/Model/Money.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundStatus](docs/Model/RefundStatus.md)
 - [RetrieveCustomerResponse](docs/Model/RetrieveCustomerResponse.md)
 - [RetrieveTransactionResponse](docs/Model/RetrieveTransactionResponse.md)
 - [SortOrder](docs/Model/SortOrder.md)
 - [Tender](docs/Model/Tender.md)
 - [TenderCardDetails](docs/Model/TenderCardDetails.md)
 - [TenderCardDetailsEntryMethod](docs/Model/TenderCardDetailsEntryMethod.md)
 - [TenderCardDetailsStatus](docs/Model/TenderCardDetailsStatus.md)
 - [TenderCashDetails](docs/Model/TenderCashDetails.md)
 - [TenderType](docs/Model/TenderType.md)
 - [Timecard](docs/Model/Timecard.md)
 - [TimecardEvent](docs/Model/TimecardEvent.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionProduct](docs/Model/TransactionProduct.md)
 - [UpdateCustomerRequest](docs/Model/UpdateCustomerRequest.md)
 - [UpdateCustomerResponse](docs/Model/UpdateCustomerResponse.md)
 - [V1AdjustItemInventoryRequest](docs/Model/V1AdjustItemInventoryRequest.md)
 - [V1BankAccount](docs/Model/V1BankAccount.md)
 - [V1CreateItemRequest](docs/Model/V1CreateItemRequest.md)
 - [V1CreateItemVariation](docs/Model/V1CreateItemVariation.md)
 - [V1CreateRefundRequest](docs/Model/V1CreateRefundRequest.md)
 - [V1Discount](docs/Model/V1Discount.md)
 - [V1Fee](docs/Model/V1Fee.md)
 - [V1Item](docs/Model/V1Item.md)
 - [V1ItemCategory](docs/Model/V1ItemCategory.md)
 - [V1ItemImage](docs/Model/V1ItemImage.md)
 - [V1ItemInventoryEntry](docs/Model/V1ItemInventoryEntry.md)
 - [V1ItemModifierList](docs/Model/V1ItemModifierList.md)
 - [V1ItemModifierOption](docs/Model/V1ItemModifierOption.md)
 - [V1ItemVariation](docs/Model/V1ItemVariation.md)
 - [V1ListLocationsResponse](docs/Model/V1ListLocationsResponse.md)
 - [V1Merchant](docs/Model/V1Merchant.md)
 - [V1MerchantLocationDetails](docs/Model/V1MerchantLocationDetails.md)
 - [V1Order](docs/Model/V1Order.md)
 - [V1OrderHistoryEntry](docs/Model/V1OrderHistoryEntry.md)
 - [V1Page](docs/Model/V1Page.md)
 - [V1PageCell](docs/Model/V1PageCell.md)
 - [V1Payment](docs/Model/V1Payment.md)
 - [V1PaymentDiscount](docs/Model/V1PaymentDiscount.md)
 - [V1PaymentItemDetail](docs/Model/V1PaymentItemDetail.md)
 - [V1PaymentItemization](docs/Model/V1PaymentItemization.md)
 - [V1PaymentModifier](docs/Model/V1PaymentModifier.md)
 - [V1PaymentTax](docs/Model/V1PaymentTax.md)
 - [V1Refund](docs/Model/V1Refund.md)
 - [V1Settlement](docs/Model/V1Settlement.md)
 - [V1SettlementEntry](docs/Model/V1SettlementEntry.md)
 - [V1Tender](docs/Model/V1Tender.md)
 - [V1UpdateItemRequest](docs/Model/V1UpdateItemRequest.md)
 - [V1UpdateItemVariation](docs/Model/V1UpdateItemVariation.md)
 - [V1UpdateModifierListRequest](docs/Model/V1UpdateModifierListRequest.md)
 - [V1UpdateOrderRequest](docs/Model/V1UpdateOrderRequest.md)
 - [VoidTransactionResponse](docs/Model/VoidTransactionResponse.md)


## Documentation For Authorization


## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://connect.squareup.com/oauth2/authorize?<PARAMETERS>
- **Scopes**: 
 - **MERCHANT_PROFILE_READ**: GET endpoints related to a merchant's business and location entities. Almost all Connect API applications need this permission in order to obtain a merchant's location IDs.
 - **PAYMENTS_READ**: GET endpoints related to transactions and refunds.
 - **PAYMENTS_WRITE**:  POST, PUT, and DELETE endpoints related to transactions and refunds. E-commerce applications must request this permission.
 - **CUSTOMERS_READ**:  GET endpoints related to customer management.
 - **CUSTOMERS_WRITE**: POST, PUT, and DELETE endpoints related to customer management.
 - **SETTLEMENTS_READ**: GET endpoints related to settlements (deposits).
 - **BANK_ACCOUNTS_READ**: GET endpoints related to a merchant's bank accounts.
 - **ITEMS_READ**: GET endpoints related to a merchant's item library.
 - **ITEMS_WRITE**: POST, PUT, and DELETE endpoints related to a merchant's item library.
 - **ORDERS_READ**: GET endpoints related to a merchant's Square online store.
 - **ORDERS_WRITE**: POST, PUT, and DELETE endpoints related to a merchant's Square online store.
 - **EMPLOYEES_READ**: GET endpoints related to employee management.
 - **EMPLOYEES_WRITE**: POST, PUT, and DELETE endpoints related to employee management.
 - **TIMECARDS_READ**: GET endpoints related to employee timecards.
 - **TIMECARDS_WRITE**: POST, PUT, and DELETE endpoints related to employee timecards.

## personal_access_token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

developers@squareup.com



