<?php

namespace BakteriyoFaj\PhpFnAliases;

class Yp extends PhpMethodCaller
{
    const All              = "yp_all";                  // Traverse the map and call a function on each entry
    const Cat              = "yp_cat";                  // Return an array containing the entire map
    const ErrorString      = "yp_err_string";           // Returns the error string associated with the given error code
    const ErrorNo          = "yp_errno";                // Returns the error code of the previous operation
    const First            = "yp_first";                // Returns the first key-value pair from the named map
    const GetDefaultDomain = "yp_get_default_domain";   // Fetches the machine's default NIS domain
    const Master           = "yp_master";               // Returns the machine name of the master NIS server for a map
    const Match            = "yp_match";                // Returns the matched line
    const Next             = "yp_next";                 // Returns the next key-value pair in the named map
    const Order            = "yp_order";                // Returns the order number for a map
}