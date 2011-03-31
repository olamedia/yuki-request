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
 * yHttpRequestData
 *
 * @package yuki
 * @subpackage request
 * @author olamedia
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
class yHttpRequestData{
    protected $_method = '';
    protected $_get = array();
    protected $_post = array();
    protected $_files = array();
    protected $_cookies = array();
    public function setMethod($method){
        $this->_method = $method;
                
    }
    public function getMethod(){
        return $this->_method;
    }
}

