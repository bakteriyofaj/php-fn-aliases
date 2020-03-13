<?php 

namespace BakteriyoFaj\PhpFnAliases;

class LightweightDirectoryAccess extends PhpMethodCaller
{
    const Translate8859Tot61            = "ldap_8859_to_t61";                       // Translate 8859 characters to t61 characters
    const AddExt                        = "ldap_add_ext";                           // Add entries to LDAP directory
    const Add                           = "ldap_add";                               // Add entries to LDAP directory
    const BindExt                       = "ldap_bind_ext";                          // Bind to LDAP directory
    const Bind                          = "ldap_bind";                              // Bind to LDAP directory
    const Close                         = "ldap_close";                             // Alias of ldap_unbind
    const Compare                       = "ldap_compare";                           // Compare value of attribute found in entry specified with DN
    const Connect                       = "ldap_connect";                           // Connect to an LDAP server
    const ControlPagedResultResponse    = "ldap_control_paged_result_response";     // Retrieve the LDAP pagination cookie
    const ControlPagedResult            = "ldap_control_paged_result";              // Send LDAP pagination control
    const CountEntries                  = "ldap_count_entries";                     // Count the number of entries in a search
    const DeleteExt                     = "ldap_delete_ext";                        // Delete an entry from a directory
    const Delete                        = "ldap_delete";                            // Delete an entry from a directory
    const Dn2ufn                        = "ldap_dn2ufn";                            // Convert DN to User Friendly Naming format
    const ErrorToString                 = "ldap_err2str";                           // Convert LDAP error number into string error message
    const ErrorNo                       = "ldap_errno";                             // Return the LDAP error number of the last LDAP command
    const Error                         = "ldap_error";                             // Return the LDAP error message of the last LDAP command
    const Escape                        = "ldap_escape";                            // Escape a string for use in an LDAP filter or DN
    const ExopPasswd                    = "ldap_exop_passwd";                       // PASSWD extended operation helper
    const ExopRefresh                   = "ldap_exop_refresh";                      // Refresh extended operation helper
    const ExopWhoami                    = "ldap_exop_whoami";                       // WHOAMI extended operation helper
    const Exop                          = "ldap_exop";                              // Performs an extended operation
    const ExplodeDn                     = "ldap_explode_dn";                        // Splits DN into its component parts
    const FirstAttribute                = "ldap_first_attribute";                   // Return first attribute
    const FirstEntry                    = "ldap_first_entry";                       // Return first result id
    const FirstReference                = "ldap_first_reference";                   // Return first reference
    const FreeResult                    = "ldap_free_result";                       // Free result memory
    const GetAttributes                 = "ldap_get_attributes";                    // Get attributes from a search result entry
    const GetDn                         = "ldap_get_dn";                            // Get the DN of a result entry
    const GetEntries                    = "ldap_get_entries";                       // Get all result entries
    const GetOption                     = "ldap_get_option";                        // Get the current value for given option
    const GetValuesLen                  = "ldap_get_values_len";                    // Get all binary values from a result entry
    const GetValues                     = "ldap_get_values";                        // Get all values from a result entry
    const List                          = "ldap_list";                              // Single-level search
    const ModAddExt                     = "ldap_mod_add_ext";                       // Add attribute values to current attributes
    const ModAdd                        = "ldap_mod_add";                           // Add attribute values to current attributes
    const ModDelExt                     = "ldap_mod_del_ext";                       // Delete attribute values from current attributes
    const ModDel                        = "ldap_mod_del";                           // Delete attribute values from current attributes
    const ModReplaceExt                 = "ldap_mod_replace_ext";                   // Replace attribute values with new ones
    const ModReplace                    = "ldap_mod_replace";                       // Replace attribute values with new ones
    const ModifyBatch                   = "ldap_modify_batch";                      // Batch and execute modifications on an LDAP entry
    const Modify                        = "ldap_modify";                            // Alias of ldap_mod_replace
    const NextAttribute                 = "ldap_next_attribute";                    // Get the next attribute in result
    const NextEntry                     = "ldap_next_entry";                        // Get next result entry
    const NextReference                 = "ldap_next_reference";                    // Get next reference
    const ParseExop                     = "ldap_parse_exop";                        // Parse result object from an LDAP extended operation
    const ParseReference                = "ldap_parse_reference";                   // Extract information from reference entry
    const ParseResult                   = "ldap_parse_result";                      // Extract information from result
    const Read                          = "ldap_read";                              // Read an entry
    const RenameExt                     = "ldap_rename_ext";                        // Modify the name of an entry
    const Rename                        = "ldap_rename";                            // Modify the name of an entry
    const SaslBind                      = "ldap_sasl_bind";                         // Bind to LDAP directory using SASL
    const Search                        = "ldap_search";                            // Search LDAP tree
    const SetOption                     = "ldap_set_option";                        // Set the value of the given option
    const SetRebindProc                 = "ldap_set_rebind_proc";                   // Set a callback function to do re-binds on referral chasing
    const Sort                          = "ldap_sort";                              // Sort LDAP result entries on the client side
    const StartTls                      = "ldap_start_tls";                         // Start TLS
    const Translatet61To8859            = "ldap_t61_to_8859";                       // Translate t61 characters to 8859 characters
    const Unbind                        = "ldap_unbind";                            // Unbind from LDAP directory
}