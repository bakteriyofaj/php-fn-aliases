<?php

namespace BakteriyoFaj\PhpFnAliases;

class Yaz extends PhpMethodCaller
{
    const AddInfo     = "yaz_addinfo";     // Returns additional error information
    const CclConf     = "yaz_ccl_conf";    // Configure CCL parser
    const CclParse    = "yaz_ccl_parse";   // Invoke CCL Parser
    const Close       = "yaz_close";       // Close YAZ connection
    const Connect     = "yaz_connect";     // Prepares for a connection to a Z39.50 server
    const Database    = "yaz_database";    // Specifies the databases within a session
    const Element     = "yaz_element";     // Specifies Element-Set Name for retrieval
    const ErrorNo     = "yaz_errno";       // Returns error number
    const Error       = "yaz_error";       // Returns error description
    const EsResult    = "yaz_es_result";   // Inspects Extended Services Result
    const Es          = "yaz_es";          // Prepares for an Extended Service Request
    const GetOption   = "yaz_get_option";  // Returns value of option for connection
    const Hits        = "yaz_hits";        // Returns number of hits for last search
    const ItemOrder   = "yaz_itemorder";   // Prepares for Z39.50 Item Order with an ILL-Request package
    const Present     = "yaz_present";     // Prepares for retrieval (Z39.50 present)
    const Range       = "yaz_range";       // Specifies a range of records to retrieve
    const Record      = "yaz_record";      // Returns a record
    const ScanResult  = "yaz_scan_result"; // Returns Scan Response result
    const Scan        = "yaz_scan";        // Prepares for a scan
    const Schema      = "yaz_schema";      // Specifies schema for retrieval
    const Search      = "yaz_search";      // Prepares for a search
    const SetOption   = "yaz_set_option";  // Sets one or more options for connection
    const Sort        = "yaz_sort";        // Sets sorting criteria
    const Syntax      = "yaz_syntax";      // Specifies the preferred record syntax for retrieval
    const Wait        = "yaz_wait";        // Wait for Z39.50 requests to complete
}