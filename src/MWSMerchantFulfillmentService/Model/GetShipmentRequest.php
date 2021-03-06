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
  * MWSMerchantFulfillmentService_Model_GetShipmentRequest
  *
  * Properties:
  * <ul>
  *
  * <li>SellerId: string</li>
  * <li>MWSAuthToken: string</li>
  * <li>ShipmentId: string</li>
  *
  * </ul>
  */
 class MWSMerchantFulfillmentService_Model_GetShipmentRequest extends MWSMerchantFulfillmentService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'SellerId' => ['FieldValue' => null, 'FieldType' => 'string'],
    'MWSAuthToken' => ['FieldValue' => null, 'FieldType' => 'string'],
    'ShipmentId' => ['FieldValue' => null, 'FieldType' => 'string'],
    ];
         parent::__construct($data);
     }

     /**
      * Get the value of the SellerId property.
      *
      * @return string sellerId
      */
     public function getSellerId()
     {
         return $this->_fields['SellerId']['FieldValue'];
     }

     /**
      * Set the value of the SellerId property.
      *
      * @param string sellerId
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setSellerId($value)
     {
         $this->_fields['SellerId']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if SellerId is set.
      *
      * @return true if SellerId is set
      */
     public function isSetSellerId()
     {
         return !is_null($this->_fields['SellerId']['FieldValue']);
     }

     /**
      * Set the value of SellerId, return this.
      *
      * @param sellerId
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withSellerId($value)
     {
         $this->setSellerId($value);

         return $this;
     }

     /**
      * Get the value of the MWSAuthToken property.
      *
      * @return string MWSAuthToken
      */
     public function getMWSAuthToken()
     {
         return $this->_fields['MWSAuthToken']['FieldValue'];
     }

     /**
      * Set the value of the MWSAuthToken property.
      *
      * @param string mwsAuthToken
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setMWSAuthToken($value)
     {
         $this->_fields['MWSAuthToken']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if MWSAuthToken is set.
      *
      * @return true if MWSAuthToken is set
      */
     public function isSetMWSAuthToken()
     {
         return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
     }

     /**
      * Set the value of MWSAuthToken, return this.
      *
      * @param mwsAuthToken
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withMWSAuthToken($value)
     {
         $this->setMWSAuthToken($value);

         return $this;
     }

     /**
      * Get the value of the ShipmentId property.
      *
      * @return string shipmentId
      */
     public function getShipmentId()
     {
         return $this->_fields['ShipmentId']['FieldValue'];
     }

     /**
      * Set the value of the ShipmentId property.
      *
      * @param string shipmentId
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setShipmentId($value)
     {
         $this->_fields['ShipmentId']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if ShipmentId is set.
      *
      * @return true if ShipmentId is set
      */
     public function isSetShipmentId()
     {
         return !is_null($this->_fields['ShipmentId']['FieldValue']);
     }

     /**
      * Set the value of ShipmentId, return this.
      *
      * @param shipmentId
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withShipmentId($value)
     {
         $this->setShipmentId($value);

         return $this;
     }
 }
