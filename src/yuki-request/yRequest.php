<?php

/*
 * This file is part of the yuki package.
 * Copyright (c) 2011 olamedia <olamedia@gmail.com>
 *
 * This source code is release under the MIT License.
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * yRequest
 *
 * @package yuki
 * @subpackage request
 * @author olamedia
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
class yRequest{
    protected static $_requestData = null;
    public static function fromEnvironment(){
        self::$_requestData = null;
        if (self::isHttp()){
            self::$_requestData = yHttpRequestData::fromEnvironment();
        }elseif (self::isCli()){
            self::$_requestData = yCliRequestData::fromEnvironment();
        }
    }
    public static function setData($requestData){
        self::$_requestData = $requestData;
    }
    public static function getData(){
        return self::$_requestData;
    }
    public static function isHttp(){
        if (self::$_requestData !== null){
            return self::$_requestData instanceof yHttpRequestData;
        }
    }
    public static function isCli(){
        
    }
    public static function getMethod(){
        if (self::isHttp()){
            
        }
    }
}

