<?php

namespace Payutc\Mapping;

class Errors {
    public static function get(){
        return array(
        	'ServiceNotFound' => 404,
        	'ServiceMethodNotFound' => 404,
        	'ServiceMethodForbidden' => 403,
        	'ServiceMissingMethodArgument' => 400,
        	'PossException' => function(\PossException $e) {
        		return array(
        			'type' => 'PossException', 
        			'code' => $e->err_code, 
        			'message' => $e->getMessage()
        		);
        	}
        );
    }
}
