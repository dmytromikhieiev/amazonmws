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
  * MWSMerchantFulfillmentService_Model_ShipmentRequestDetails
  *
  * Properties:
  * <ul>
  *
  * <li>AmazonOrderId: string</li>
  * <li>SellerOrderId: string</li>
  * <li>ItemList: array</li>
  * <li>ShipFromAddress: MWSMerchantFulfillmentService_Model_Address</li>
  * <li>PackageDimensions: MWSMerchantFulfillmentService_Model_PackageDimensions</li>
  * <li>Weight: MWSMerchantFulfillmentService_Model_Weight</li>
  * <li>MustArriveByDate: string</li>
  * <li>ShipDate: string</li>
  * <li>ShippingServiceOptions: MWSMerchantFulfillmentService_Model_ShippingServiceOptions</li>
  * <li>LabelCustomization: MWSMerchantFulfillmentService_Model_LabelCustomization</li>
  *
  * </ul>
  */
 class MWSMerchantFulfillmentService_Model_ShipmentRequestDetails extends MWSMerchantFulfillmentService_Model
 {
     public function __construct($data = null)
     {
         $this->_fields = [
    'AmazonOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
    'SellerOrderId' => ['FieldValue' => null, 'FieldType' => 'string'],
    'ItemList' => ['FieldValue' => [], 'FieldType' => ['MWSMerchantFulfillmentService_Model_Item'], 'ListMemberName' => 'Item'],
    'ShipFromAddress' => ['FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Address'],
    'PackageDimensions' => ['FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_PackageDimensions'],
    'Weight' => ['FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_Weight'],
    'MustArriveByDate' => ['FieldValue' => null, 'FieldType' => 'string'],
    'ShipDate' => ['FieldValue' => null, 'FieldType' => 'string'],
    'ShippingServiceOptions' => ['FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_ShippingServiceOptions'],
    'LabelCustomization' => ['FieldValue' => null, 'FieldType' => 'MWSMerchantFulfillmentService_Model_LabelCustomization'],
    ];
         parent::__construct($data);
     }

     /**
      * Get the value of the AmazonOrderId property.
      *
      * @return string amazonOrderId
      */
     public function getAmazonOrderId()
     {
         return $this->_fields['AmazonOrderId']['FieldValue'];
     }

     /**
      * Set the value of the AmazonOrderId property.
      *
      * @param string amazonOrderId
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setAmazonOrderId($value)
     {
         $this->_fields['AmazonOrderId']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if AmazonOrderId is set.
      *
      * @return true if AmazonOrderId is set
      */
     public function isSetAmazonOrderId()
     {
         return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
     }

     /**
      * Set the value of AmazonOrderId, return this.
      *
      * @param amazonOrderId
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withAmazonOrderId($value)
     {
         $this->setAmazonOrderId($value);

         return $this;
     }

     /**
      * Get the value of the SellerOrderId property.
      *
      * @return string sellerOrderId
      */
     public function getSellerOrderId()
     {
         return $this->_fields['SellerOrderId']['FieldValue'];
     }

     /**
      * Set the value of the SellerOrderId property.
      *
      * @param string sellerOrderId
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setSellerOrderId($value)
     {
         $this->_fields['SellerOrderId']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if SellerOrderId is set.
      *
      * @return true if SellerOrderId is set
      */
     public function isSetSellerOrderId()
     {
         return !is_null($this->_fields['SellerOrderId']['FieldValue']);
     }

     /**
      * Set the value of SellerOrderId, return this.
      *
      * @param sellerOrderId
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withSellerOrderId($value)
     {
         $this->setSellerOrderId($value);

         return $this;
     }

     /**
      * Get the value of the ItemList property.
      *
      * @return List<Item> itemList
      */
     public function getItemList()
     {
         if ($this->_fields['ItemList']['FieldValue'] == null) {
             $this->_fields['ItemList']['FieldValue'] = [];
         }

         return $this->_fields['ItemList']['FieldValue'];
     }

     /**
      * Set the value of the ItemList property.
      *
      * @param array itemList
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setItemList($value)
     {
         if (!$this->_isNumericArray($value)) {
             $value = [$value];
         }
         $this->_fields['ItemList']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Clear ItemList.
      */
     public function unsetItemList()
     {
         $this->_fields['ItemList']['FieldValue'] = [];
     }

     /**
      * Check to see if ItemList is set.
      *
      * @return true if ItemList is set
      */
     public function isSetItemList()
     {
         return !empty($this->_fields['ItemList']['FieldValue']);
     }

     /**
      * Add values for ItemList, return this.
      *
      * @param itemList
      *             New values to add
      *
      * @return $this instance
      */
     public function withItemList()
     {
         foreach (func_get_args() as $ItemList) {
             $this->_fields['ItemList']['FieldValue'][] = $ItemList;
         }

         return $this;
     }

     /**
      * Get the value of the ShipFromAddress property.
      *
      * @return Address shipFromAddress
      */
     public function getShipFromAddress()
     {
         return $this->_fields['ShipFromAddress']['FieldValue'];
     }

     /**
      * Set the value of the ShipFromAddress property.
      *
      * @param MWSMerchantFulfillmentService_Model_Address shipFromAddress
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setShipFromAddress($value)
     {
         $this->_fields['ShipFromAddress']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if ShipFromAddress is set.
      *
      * @return true if ShipFromAddress is set
      */
     public function isSetShipFromAddress()
     {
         return !is_null($this->_fields['ShipFromAddress']['FieldValue']);
     }

     /**
      * Set the value of ShipFromAddress, return this.
      *
      * @param shipFromAddress
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withShipFromAddress($value)
     {
         $this->setShipFromAddress($value);

         return $this;
     }

     /**
      * Get the value of the PackageDimensions property.
      *
      * @return PackageDimensions packageDimensions
      */
     public function getPackageDimensions()
     {
         return $this->_fields['PackageDimensions']['FieldValue'];
     }

     /**
      * Set the value of the PackageDimensions property.
      *
      * @param MWSMerchantFulfillmentService_Model_PackageDimensions packageDimensions
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setPackageDimensions($value)
     {
         $this->_fields['PackageDimensions']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if PackageDimensions is set.
      *
      * @return true if PackageDimensions is set
      */
     public function isSetPackageDimensions()
     {
         return !is_null($this->_fields['PackageDimensions']['FieldValue']);
     }

     /**
      * Set the value of PackageDimensions, return this.
      *
      * @param packageDimensions
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withPackageDimensions($value)
     {
         $this->setPackageDimensions($value);

         return $this;
     }

     /**
      * Get the value of the Weight property.
      *
      * @return Weight weight
      */
     public function getWeight()
     {
         return $this->_fields['Weight']['FieldValue'];
     }

     /**
      * Set the value of the Weight property.
      *
      * @param MWSMerchantFulfillmentService_Model_Weight weight
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setWeight($value)
     {
         $this->_fields['Weight']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if Weight is set.
      *
      * @return true if Weight is set
      */
     public function isSetWeight()
     {
         return !is_null($this->_fields['Weight']['FieldValue']);
     }

     /**
      * Set the value of Weight, return this.
      *
      * @param weight
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withWeight($value)
     {
         $this->setWeight($value);

         return $this;
     }

     /**
      * Get the value of the MustArriveByDate property.
      *
      * @return XMLGregorianCalendar mustArriveByDate
      */
     public function getMustArriveByDate()
     {
         return $this->_fields['MustArriveByDate']['FieldValue'];
     }

     /**
      * Set the value of the MustArriveByDate property.
      *
      * @param string mustArriveByDate
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setMustArriveByDate($value)
     {
         $this->_fields['MustArriveByDate']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if MustArriveByDate is set.
      *
      * @return true if MustArriveByDate is set
      */
     public function isSetMustArriveByDate()
     {
         return !is_null($this->_fields['MustArriveByDate']['FieldValue']);
     }

     /**
      * Set the value of MustArriveByDate, return this.
      *
      * @param mustArriveByDate
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withMustArriveByDate($value)
     {
         $this->setMustArriveByDate($value);

         return $this;
     }

     /**
      * Get the value of the ShipDate property.
      *
      * @return XMLGregorianCalendar shipDate
      */
     public function getShipDate()
     {
         return $this->_fields['ShipDate']['FieldValue'];
     }

     /**
      * Set the value of the ShipDate property.
      *
      * @param string shipDate
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setShipDate($value)
     {
         $this->_fields['ShipDate']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if ShipDate is set.
      *
      * @return true if ShipDate is set
      */
     public function isSetShipDate()
     {
         return !is_null($this->_fields['ShipDate']['FieldValue']);
     }

     /**
      * Set the value of ShipDate, return this.
      *
      * @param shipDate
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withShipDate($value)
     {
         $this->setShipDate($value);

         return $this;
     }

     /**
      * Get the value of the ShippingServiceOptions property.
      *
      * @return ShippingServiceOptions shippingServiceOptions
      */
     public function getShippingServiceOptions()
     {
         return $this->_fields['ShippingServiceOptions']['FieldValue'];
     }

     /**
      * Set the value of the ShippingServiceOptions property.
      *
      * @param MWSMerchantFulfillmentService_Model_ShippingServiceOptions shippingServiceOptions
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setShippingServiceOptions($value)
     {
         $this->_fields['ShippingServiceOptions']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if ShippingServiceOptions is set.
      *
      * @return true if ShippingServiceOptions is set
      */
     public function isSetShippingServiceOptions()
     {
         return !is_null($this->_fields['ShippingServiceOptions']['FieldValue']);
     }

     /**
      * Set the value of ShippingServiceOptions, return this.
      *
      * @param shippingServiceOptions
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withShippingServiceOptions($value)
     {
         $this->setShippingServiceOptions($value);

         return $this;
     }

     /**
      * Get the value of the LabelCustomization property.
      *
      * @return LabelCustomization labelCustomization
      */
     public function getLabelCustomization()
     {
         return $this->_fields['LabelCustomization']['FieldValue'];
     }

     /**
      * Set the value of the LabelCustomization property.
      *
      * @param MWSMerchantFulfillmentService_Model_LabelCustomization labelCustomization
      * @param mixed $value
      *
      * @return $this instance
      */
     public function setLabelCustomization($value)
     {
         $this->_fields['LabelCustomization']['FieldValue'] = $value;

         return $this;
     }

     /**
      * Check to see if LabelCustomization is set.
      *
      * @return true if LabelCustomization is set
      */
     public function isSetLabelCustomization()
     {
         return !is_null($this->_fields['LabelCustomization']['FieldValue']);
     }

     /**
      * Set the value of LabelCustomization, return this.
      *
      * @param labelCustomization
      *             The new value to set
      * @param mixed $value
      *
      * @return $this instance
      */
     public function withLabelCustomization($value)
     {
         $this->setLabelCustomization($value);

         return $this;
     }
 }
