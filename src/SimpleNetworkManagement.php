<?php

namespace BakteriyoFaj\PhpFnAliases;

class SimpleNetworkManagement extends PhpMethodCaller
{
    const GetQuickPrint      = "snmp_get_quick_print";        // Fetches the current value of the UCD library's quick_print setting
    const GetValueRetriEval  = "snmp_get_valueretrieval";     // Return the method how the SNMP values will be returned
    const ReadMib            = "snmp_read_mib";               // Reads and parses a MIB file into the active MIB tree
    const SetEnumPrint       = "snmp_set_enum_print";         // Return all values that are enums with their enum value instead of the raw integer
    const SetOidNumericPrint = "snmp_set_oid_numeric_print";  // Set the OID output format
    const SetoidOutputFormat = "snmp_set_oid_output_format";  // Set the OID output format
    const SetQuickPrint      = "snmp_set_quick_print";        // Set the value of quick_print within the UCD SNMP library
    const SetValueRetriEval  = "snmp_set_valueretrieval";     // Specify the method how the SNMP values will be returned
    const Snmp2Get           = "snmp2_get";                   // Fetch an SNMP object
    const Snmp2GetNext       = "snmp2_getnext";               // Fetch the SNMP object which follows the given object id
    const Snmp2RealWalk      = "snmp2_real_walk";             // Return all objects including their respective object ID within the specified one
    const Snmp2Set           = "snmp2_set";                   // Set the value of an SNMP object
    const Snmp2Walk          = "snmp2_walk";                  // Fetch all the SNMP objects from an agent
    const Snmp3Get           = "snmp3_get";                   // Fetch an SNMP object
    const Snmp3GetNext       = "snmp3_getnext";               // Fetch the SNMP object which follows the given object id
    const Snmp3RealWalk      = "snmp3_real_walk";             // Return all objects including their respective object ID within the specified one
    const Snmp3Set           = "snmp3_set";                   // Set the value of an SNMP object
    const Snmp3Walk          = "snmp3_walk";                  // Fetch all the SNMP objects from an agent
    const Get                = "snmpget";                     // Fetch an SNMP object
    const GetNext            = "snmpgetnext";                 // Fetch the SNMP object which follows the given object id
    const RealWalk           = "snmprealwalk";                // Return all objects including their respective object ID within the specified one
    const Set                = "snmpset";                     // Set the value of an SNMP object
    const Walk               = "snmpwalk";                    // Fetch all the SNMP objects from an agent
    const Walkoid            = "snmpwalkoid";                 // Query for a tree of information about a network entity
}