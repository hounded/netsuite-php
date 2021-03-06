<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2016-06-02 02:54:03 PM UTC
 */

namespace NetSuite\Classes;

class CashSaleTime {
    public $apply;
    public $doc;
    public $line;
    public $billedDate;
    public $employeeDisp;
    public $itemDisp;
    public $jobDisp;
    public $department;
    public $class;
    public $location;
    public $quantity;
    public $rate;
    public $unitDisp;
    public $amount;
    public $memo;
    public $revRecSchedule;
    public $revRecStartDate;
    public $revRecEndDate;
    public $grossAmt;
    public $tax1Amt;
    public $taxCode;
    public $taxRate1;
    public $taxRate2;
    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "billedDate" => "dateTime",
        "employeeDisp" => "string",
        "itemDisp" => "string",
        "jobDisp" => "string",
        "department" => "string",
        "class" => "string",
        "location" => "string",
        "quantity" => "string",
        "rate" => "float",
        "unitDisp" => "string",
        "amount" => "float",
        "memo" => "string",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
    );
}
