<?php

/**
 * ----------------------------------------------------------------------------------
 * Tars Exception
 * ----------------------------------------------------------------------------------
 *
 * ERR_CANNOT_CONVERT                 => 10001
 * ERR_OUTOF_RANGE                    => 10002
 * ERR_MALLOC_FAILED                  => 10003
 * ERR_CLASS_UNINIT                   => 10004
 * ERR_REQUIRED_FIELD_LOST            => 10005
 * ERR_DATA_FORMAT_ERROR              => 10006
 * ERR_TYPE_INVALID                   => 10007
 * ERR_CLASS_MISMATCH                 => 10008
 * ERR_WRONG_PARAMS                   => 10009
 * ERR_STATIC_FIELDS_PARAM_LOST       => 10010
 * ERR_ARRAY_RETRIEVE                 => 10011
 * ERR_READ_MAP_ERROR                 => 10012
 * ERR_SET_CONTEXT_ERROR              => 10013
 * ERR_SET_STATUS_ERROR               => 10014
 * ERR_ENCODE_BUF_ERROR               => 10015
 * ERR_WRITE_IVERSION_ERROR           => 10016
 * ERR_WRITE_CPACKETTYPE_ERROR        => 10017
 * ERR_WRITE_IMESSAGETYPE_ERROR       => 10018
 * ERR_WRITE_IREQUESTID_ERROR         => 10019
 * ERR_WRITE_SSERVANTNAME_ERROR       => 10020
 * ERR_WRITE_SFUNCNAME_ERROR          => 10021
 * ERR_WRITE_SBUFFER_ERROR            => 10022
 * ERR_WRITE_ITIMEOUT_ERROR           => 10023
 * ERR_WRITE_CONTEXT_ERROR            => 10024
 * ERR_WRITE_STATUS_ERROR             => 10025
 * ERR_STRUCT_COMPLICATE_NOT_DEFINE   => 10026
 * ERR_VECOTR_OR_MAP_EXT_PARAM_LOST   => 10027
 * ERR_STATIC_NAME_NOT_STRING_ERROR   => 10028
 * ERR_STATIC_REQUIRED_NOT_BOOL_ERROR => 10029
 * ERR_STATIC_TYPE_NOT_LONG_ERROR     => 10030
 *
 * @author lanlin
 * @change 2021/06/01
 */
class TARS_Exception extends Exception
{
    // ------------------------------------------------------------------------------

    /**
     * TARS_Exception constructor.
     *
     * @param string $message
     * @param int    $code
     */
    public function __construct(string $message, int $code = 0)
    {
        parent::__construct($message, $code);
    }

    // ------------------------------------------------------------------------------
}