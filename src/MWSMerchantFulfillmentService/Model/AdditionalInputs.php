<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2020-02-06
 * Generated: Mon Mar 02 20:07:25 UTC 2020
 */

/**
 *  @see MWSMerchantFulfillmentService_Model
 */
require_once(dirname(__FILE__) . '/../Model.php');

 /**
  * MWSMerchantFulfillmentService_Model_AdditionalInputs
  *
  * Properties:
  * <ul>
  *
  * <li>AdditionalInputFieldName: string</li>
  * <li>SellerInputDefinition: MWSMerchantFulfillmentService_Model_SellerInputDefinition</li>
  *
  * </ul>
  */
 class MWSMerchantFulfillmentService_Model_AdditionalInputs extends MWSMerchantFulfillmentService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'AdditionalInputFieldName' => ['FieldValue' => null, 'FieldType' => 'string'],
    'SellerInputDefinition' => ['FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_SellerInputDefinition'],
    ];
         parent::__construct($data);
     }

     /**
      * Get the value of the AdditionalInputFieldName property.
      *
      * @return string additionalInputFieldName
      */
     public function getAdditionalInputFieldName()
     {
         return $this->_fields['AdditionalInputFieldName']['FieldValue'];
     }

     /**
      * Set the value of the AdditionalInputFieldName property.
      *
      * @param string additionalInputFieldName
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setAdditionalInputFieldName($value)
     {
         $this->_fields['AdditionalInputFieldName']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if AdditionalInputFieldName is set.
      *
      * @return true if AdditionalInputFieldName is set
      */
     public function isSetAdditionalInputFieldName()
     {
         return !is_null($this->_fields['AdditionalInputFieldName']['FieldValue']);
     }

     /**
      * Set the value of AdditionalInputFieldName, return this.
      *
      * @param additionalInputFieldName
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withAdditionalInputFieldName($value)
     {
         $this->setAdditionalInputFieldName($value);

         return $this;
     }

     /**
      * Get the value of the SellerInputDefinition property.
      *
      * @return SellerInputDefinition sellerInputDefinition
      */
     public function getSellerInputDefinition()
     {
         return $this->_fields['SellerInputDefinition']['FieldValue'];
     }

     /**
      * Set the value of the SellerInputDefinition property.
      *
      * @param MWSMerchantFulfillmentService_Model_SellerInputDefinition sellerInputDefinition
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setSellerInputDefinition($value)
     {
         $this->_fields['SellerInputDefinition']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if SellerInputDefinition is set.
      *
      * @return true if SellerInputDefinition is set
      */
     public function isSetSellerInputDefinition()
     {
         return !is_null($this->_fields['SellerInputDefinition']['FieldValue']);
     }

     /**
      * Set the value of SellerInputDefinition, return this.
      *
      * @param sellerInputDefinition
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withSellerInputDefinition($value)
     {
         $this->setSellerInputDefinition($value);

         return $this;
     }
 }
