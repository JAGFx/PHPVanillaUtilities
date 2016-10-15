<?php
	/**
	 * Created by PhpStorm.
	 * User: emsm
	 * Date: 15/10/2016
	 * Time: 13:37
	 */

	require __DIR__ . '/../dist/InputValidator.php';

	use \InputValidator\InputValidator;
	use \InputValidator\InputValidatorExceptions;

	$inputValidator = new InputValidator();

	$var = '';

	try {
		var_dump( $inputValidator->validateEmail( $var ) );

	} catch ( InputValidatorExceptions $ive ) {
		var_dump( $ive->getError() );
	}
