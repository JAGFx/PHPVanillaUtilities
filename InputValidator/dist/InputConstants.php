<?php
	/**
	 * Created by PhpStorm.
	 * User: emsm
	 * Date: 15/10/2016
	 * Time: 13:59
	 */

	define( 'CHECK_CONFORMITY_FAIL_TITLE', "Valeur incorecte", true );
	define( 'CHECK_CONFORMITY_FAIL_MESSAGE', "La valeur n'est pas défini", true );
	define( 'CHECK_CONFORMITY_FAIL_CODE', 0, true );

	define( 'INVALID_INT_TITLE', "Valeur non valide", true );
	define( 'INVALID_INT_MESSAGE', "La valeur n'est pas un entier valide", true );
	define( 'INVALID_INT_CODE', 1, true );

	define( 'INVALID_BOOLEAN_TITLE', "Valeur non valide", true );
	define( 'INVALID_BOOLEAN_MESSAGE', "La valeur n'est pas un booléen valide", true );
	define( 'INVALID_BOOLEAN_CODE', 2, true );

	define( 'INVALID_FLOAT_TITLE', "Valeur non valide", true );
	define( 'INVALID_FLOAT_MESSAGE', "La valeur n'est pas un flotant valide", true );
	define( 'INVALID_FLOAT_CODE', 3, true );

	define( 'INVALID_STRING_TITLE', "Chaine de caractères non valide", true );
	define( 'INVALID_STRING_MESSAGE', "La valeur n'est pas une chaine de caractères valide", true );
	define( 'INVALID_STRING_CODE', 4, true );

	define( 'INVALID_ARRAY_TITLE', "Tableau non valide", true );
	define( 'INVALID_ARRAY_MESSAGE', "La valeur n'est pas un tableau valide", true );
	define( 'INVALID_ARRAY_CODE', 12, true );

	define( 'INVALID_EMAIL_TITLE', "Email non valide", true );
	define( 'INVALID_EMAIL_MESSAGE', "La valeur n'est pas un email valide", true );
	define( 'INVALID_EMAIL_CODE', 5, true );

	define( 'REGEXP_TEL', '/^(\d{2}){5}$/', true );
	define( 'INVALID_TEL_TITLE', "Numéro de téléphone non valide", true );
	define( 'INVALID_TEL_MESSAGE', "La valeur n'est pas un numéro de téléphone valide", true );
	define( 'INVALID_TEL_CODE', 6, true );

	define( 'INVALID_URL_TITLE', "Adresse URL non valide", true );
	define( 'INVALID_URL_MESSAGE', "La valeur n'est pas une adresse URL valide", true );
	define( 'INVALID_URL_CODE', 7, true );

	define( 'INVALID_IPV4_TITLE', "Adresse IPV4 non valide", true );
	define( 'INVALID_IPV4_MESSAGE', "La valeur n'est pas une adresse IPV4 valide", true );
	define( 'INVALID_IPV4_CODE', 8, true );

	define( 'INVALID_IPV6_TITLE', "Adresse IPV6 non valide", true );
	define( 'INVALID_IPV6_MESSAGE', "La valeur n'est pas une adresse IPV6 valide", true );
	define( 'INVALID_IPV6_CODE', 9, true );

	define( 'INVALID_MAC_TITLE', "Adresse MAC non valide", true );
	define( 'INVALID_MAC_MESSAGE', "La valeur n'est pas une adresse MAC valide", true );
	define( 'INVALID_MAC_CODE', 10, true );

	define( 'REGEXP_DEC_DEGREE', '/^\d{1,3}(\.\d*)?$/', true );
	define( 'INVALID_DEC_DEGREE_TITLE', "Coordonnée en degrès décimal non valide", true );
	define( 'INVALID_DEC_DEGREE_MESSAGE', "La valeur n'est pas une coordonnée en degrès décimal valide", true );
	define( 'INVALID_DEC_DEGREE_CODE', 11, true );

	define( 'INVALID_UPLOAD_DEGREE_TITLE', "Coordonnée en degrès décimal non valide", true );
	define( 'FU_ERR_INI_SIZE', "La taille du fichier téléchargé excède la valeur configurée sur le serveur", true );
	define( 'FU_ERR_FORM_SIZE', "La taille du fichier téléchargé excède la valeur maximal spécifiée dans le formulaire HTML", true );
	define( 'FU_ERR_PARTIAL', "Le fichier n'a été que partiellement téléchargé", true );
	define( 'FU_ERR_NO_FILE', "Aucun fichier n'a été téléchargé", true );
	define( 'FU_ERR_NO_TMP_DIR', "Un dossier temporaire est manquant", true );
	define( 'FU_ERR_CANT_WRITE', "Échec de l'écriture du fichier sur le disque", true );
	define( 'FU_ERR_EXTENSION', "Extension non supporté", true );
