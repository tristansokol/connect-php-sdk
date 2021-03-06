<?php
/**
 * VTransactionsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  Apache Licene v2 - http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://squareup.com/developers
 */
/**
 *  Copyright 2016 Square, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * Square Connect API
 *
 * Client library for accessing the Square Connect APIs
 *
 * OpenAPI spec version: 3.0
 * Contact: developers@squareup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace SquareConnect;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * VTransactionsApiTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  Apache Licene v2 - http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://squareup.com/developers
 */
class VTransactionsApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test case for v1CreateRefund
     *
     * Issues a refund for a previously processed payment. You must issue a refund within 60 days of the associated payment..
     *
     */
    public function testV1CreateRefund()
    {

    }

    /**
     * Test case for v1ListBankAccounts
     *
     * Provides non-confidential details for all of a location's associated bank accounts. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API..
     *
     */
    public function testV1ListBankAccounts()
    {

    }

    /**
     * Test case for v1ListOrders
     *
     * Provides summary information for a merchant's online store orders..
     *
     */
    public function testV1ListOrders()
    {

    }

    /**
     * Test case for v1ListPayments
     *
     * Provides summary information for all payments taken by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length. See Date ranges for details of inclusive and exclusive dates..
     *
     */
    public function testV1ListPayments()
    {

    }

    /**
     * Test case for v1ListRefunds
     *
     * Provides the details for all refunds initiated by a merchant or any of the merchant's mobile staff during a date range. Date ranges cannot exceed one year in length..
     *
     */
    public function testV1ListRefunds()
    {

    }

    /**
     * Test case for v1ListSettlements
     *
     * Provides summary information for all deposits and withdrawals initiated by Square to a merchant's bank account during a date range. Date ranges cannot exceed one year in length..
     *
     */
    public function testV1ListSettlements()
    {

    }

    /**
     * Test case for v1RetrieveBankAccount
     *
     * Provides non-confidential details for a merchant's associated bank account. This endpoint does not provide full bank account numbers, and there is no way to obtain a full bank account number with the Connect API..
     *
     */
    public function testV1RetrieveBankAccount()
    {

    }

    /**
     * Test case for v1RetrieveOrder
     *
     * Provides comprehensive information for a single online store order, including the order's history..
     *
     */
    public function testV1RetrieveOrder()
    {

    }

    /**
     * Test case for v1RetrievePayment
     *
     * Provides comprehensive information for a single payment..
     *
     */
    public function testV1RetrievePayment()
    {

    }

    /**
     * Test case for v1RetrieveSettlement
     *
     * Provides comprehensive information for a single settlement, including the entries that contribute to the settlement's total..
     *
     */
    public function testV1RetrieveSettlement()
    {

    }

    /**
     * Test case for v1UpdateOrder
     *
     * Updates the details of an online store order. Every update you perform on an order corresponds to one of three actions:.
     *
     */
    public function testV1UpdateOrder()
    {

    }

}
