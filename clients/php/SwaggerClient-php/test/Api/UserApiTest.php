<?php
/**
 * UserApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BitMEX API
 *
 * REST API for the BitMEX.com trading platform.<br><br><a href=\"/app/restAPI\">REST Documentation</a><br><a href=\"/app/wsAPI\">Websocket Documentation</a>
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * UserApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for userCancelWithdrawal
     *
     * Cancel a withdrawal..
     *
     */
    public function testUserCancelWithdrawal()
    {

    }

    /**
     * Test case for userCheckReferralCode
     *
     * Check if a referral code is valid..
     *
     */
    public function testUserCheckReferralCode()
    {

    }

    /**
     * Test case for userConfirmEmail
     *
     * Confirm your email address with a token..
     *
     */
    public function testUserConfirmEmail()
    {

    }

    /**
     * Test case for userConfirmEnableTFA
     *
     * Confirm two-factor auth for this account. If using a Yubikey, simply send a token to this endpoint..
     *
     */
    public function testUserConfirmEnableTFA()
    {

    }

    /**
     * Test case for userConfirmPasswordReset
     *
     * Confirm a password reset..
     *
     */
    public function testUserConfirmPasswordReset()
    {

    }

    /**
     * Test case for userConfirmWithdrawal
     *
     * Confirm a withdrawal..
     *
     */
    public function testUserConfirmWithdrawal()
    {

    }

    /**
     * Test case for userDisableTFA
     *
     * Disable two-factor auth for this account..
     *
     */
    public function testUserDisableTFA()
    {

    }

    /**
     * Test case for userGet
     *
     * Get your user model..
     *
     */
    public function testUserGet()
    {

    }

    /**
     * Test case for userGetAffiliateStatus
     *
     * Get your current affiliate/referral status..
     *
     */
    public function testUserGetAffiliateStatus()
    {

    }

    /**
     * Test case for userGetCommission
     *
     * Get your account's commission status..
     *
     */
    public function testUserGetCommission()
    {

    }

    /**
     * Test case for userGetDepositAddress
     *
     * Get a deposit address..
     *
     */
    public function testUserGetDepositAddress()
    {

    }

    /**
     * Test case for userGetMargin
     *
     * Get your account's margin status. Send a currency of \"all\" to receive an array of all supported currencies..
     *
     */
    public function testUserGetMargin()
    {

    }

    /**
     * Test case for userGetWalletHistory
     *
     * Get a history of all of your wallet transactions (deposits and withdrawals)..
     *
     */
    public function testUserGetWalletHistory()
    {

    }

    /**
     * Test case for userLogin
     *
     * Log in to BitMEX..
     *
     */
    public function testUserLogin()
    {

    }

    /**
     * Test case for userLogout
     *
     * Log out of BitMEX..
     *
     */
    public function testUserLogout()
    {

    }

    /**
     * Test case for userLogoutAll
     *
     * Log all systems out of BitMEX. This will revoke all of your account's access tokens, logging you out on all devices..
     *
     */
    public function testUserLogoutAll()
    {

    }

    /**
     * Test case for userNew
     *
     * Register a new user..
     *
     */
    public function testUserNew()
    {

    }

    /**
     * Test case for userRequestEnableTFA
     *
     * Get Google Authenticator secret key for setting up two-factor auth. Fails if already enabled. Use /confirmEnableTFA for Yubikeys..
     *
     */
    public function testUserRequestEnableTFA()
    {

    }

    /**
     * Test case for userRequestPasswordReset
     *
     * Request a password reset..
     *
     */
    public function testUserRequestPasswordReset()
    {

    }

    /**
     * Test case for userRequestWithdrawal
     *
     * Request a withdrawal to an external wallet..
     *
     */
    public function testUserRequestWithdrawal()
    {

    }

    /**
     * Test case for userSavePreferences
     *
     * Save user preferences..
     *
     */
    public function testUserSavePreferences()
    {

    }

    /**
     * Test case for userSendVerificationEmail
     *
     * Re-send verification email..
     *
     */
    public function testUserSendVerificationEmail()
    {

    }

    /**
     * Test case for userUpdate
     *
     * Update your password, name, and other attributes..
     *
     */
    public function testUserUpdate()
    {

    }

}