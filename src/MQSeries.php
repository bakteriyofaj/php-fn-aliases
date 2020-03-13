<?php

namespace BakteriyoFaj\PhpFnAliases;

class MQSeries extends PhpMethodCaller
{
    const Back     = "mqseries_back";       // MQSeries MQBACK
    const Begin    = "mqseries_begin";      // MQseries MQBEGIN
    const Close    = "mqseries_close";      // MQSeries MQCLOSE
    const Cmit     = "mqseries_cmit";       // MQSeries MQCMIT
    const Conn     = "mqseries_conn";       // MQSeries MQCONN
    const Connx    = "mqseries_connx";      // MQSeries MQCONNX
    const Disc     = "mqseries_disc";       // MQSeries MQDISC
    const Get      = "mqseries_get";        // MQSeries MQGET
    const Inq      = "mqseries_inq";        // MQSeries MQINQ
    const Open     = "mqseries_open";       // MQSeries MQOPEN
    const Put1     = "mqseries_put1";       // MQSeries MQPUT1
    const Put      = "mqseries_put";        // MQSeries MQPUT
    const Set      = "mqseries_set";        // MQSeries MQSET
    const StrError = "mqseries_strerror";   // Returns the error message corresponding to a result code (MQRC)
}