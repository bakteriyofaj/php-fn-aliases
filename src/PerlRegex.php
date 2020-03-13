<?php

namespace BakteriyoFaj\PhpFnAliases;

class PerlRegex extends PhpMethodCaller
{
    const Filter               = "preg_filter";                 // Perform a regular expression search and replace
    const Grep                 = "preg_grep";                   // Return array entries that match the pattern
    const LastError            = "preg_last_error";             // Returns the error code of the last PCRE regex execution
    const MatchAll             = "preg_match_all";              // Perform a global regular expression match
    const Match                = "preg_match";                  // Perform a regular expression match
    const Quote                = "preg_quote";                  // Quote regular expression characters
    const ReplaceCallbackArray = "preg_replace_callback_array"; // Perform a regular expression search and replace using callbacks
    const ReplaceCallback      = "preg_replace_callback";       // Perform a regular expression search and replace using a callback
    const Replace              = "preg_replace";                // Perform a regular expression search and replace
    const Split                = "preg_split";                  // Split string by a regular expression
}