<?php

namespace BakteriyoFaj\PhpFnAliases;

class Multibyte extends PhpMethodCaller
{
   const CheckEncoding          = "mb_check_encoding";            // Check if strings are valid for the specified encoding
   const Char                   = "mb_chr";                       // Get a specific character
   const ConvertCase            = "mb_convert_case";              // Perform case folding on a string
   const ConvertEncoding        = "mb_convert_encoding";          // Convert character encoding
   const ConvertKana            = "mb_convert_kana";              // Convertconst "kana";one from another ("zen-kaku",const "han-kaku";and more)
   const ConvertVariables       = "mb_convert_variables";         // Convert character code in variable(s)
   const DecodeMimeHeader       = "mb_decode_mimeheader";         // Decode string in MIME header field
   const DecodeNumericEntity    = "mb_decode_numericentity";      // Decode HTML numeric string reference to character
   const DetectEncoding         = "mb_detect_encoding";           // Detect character encoding
   const DetectOrder            = "mb_detect_order";              // Set/Get character encoding detection order
   const EncodeMimeHeader       = "mb_encode_mimeheader";         // Encode string for MIME header
   const EncodeNumericEntity    = "mb_encode_numericentity";      // Encode character to HTML numeric string reference
   const EncodingAliases        = "mb_encoding_aliases";          // Get aliases of a known encoding type
   const EregMatch              = "mb_ereg_match";                // Regular expression match for multibyte string
   const EregReplaceCallback    = "mb_ereg_replace_callback";     // Perform a regular expression search and replace with multibyte support using a callback
   const EregReplace            = "mb_ereg_replace";              // Replace regular expression with multibyte support
   const EregSearchGetPos       = "mb_ereg_search_getpos";        // Returns start point for next regular expression match
   const EregSearchGetRegs      = "mb_ereg_search_getregs";       // Retrieve the result from the last multibyte regular expression match
   const EregSearchInit         = "mb_ereg_search_init";          // Setup string and regular expression for a multibyte regular expression match
   const EregSearchPos          = "mb_ereg_search_pos";           // Returns position and length of a matched part of the multibyte regular expression for a predefined multibyte string
   const EregSearchRegs         = "mb_ereg_search_regs";          // Returns the matched part of a multibyte regular expression
   const EregSearchSetPos       = "mb_ereg_search_setpos";        // Set start point of next regular expression match
   const EregSearch             = "mb_ereg_search";               // Multibyte regular expression match for predefined multibyte string
   const Ereg                   = "mb_ereg";                      // Regular expression match with multibyte support
   const EregiReplace           = "mb_eregi_replace";             // Replace regular expression with multibyte support ignoring case
   const Eregi                  = "mb_eregi";                     // Regular expression match ignoring case with multibyte support
   const GetInfo                = "mb_get_info";                  // Get internal settings of mbstring
   const HttpInput              = "mb_http_input";                // Detect HTTP input character encoding
   const HttpOutput             = "mb_http_output";               // Set/Get HTTP output character encoding
   const InternalEncoding       = "mb_internal_encoding";         // Set/Get internal character encoding
   const Language               = "mb_language";                  // Set/Get current language
   const ListEncodings          = "mb_list_encodings";            // Returns an array of all supported encodings
   const Ord                    = "mb_ord";                       // Get code point of character
   const OutputHandler          = "mb_output_handler";            // Callback function converts character encoding in output buffer
   const ParseString            = "mb_parse_str";                 // Parse GET/POST/COOKIE data and set global variable
   const PreferredMimeName      = "mb_preferred_mime_name";       // Get MIME charset string
   const RegexEncoding          = "mb_regex_encoding";            // Set/Get character encoding for multibyte regex
   const RegexSetOptions        = "mb_regex_set_options";         // Set/Get the default options for mbregex functions
   const Scrub                  = "mb_scrub";                     // Description
   const SendMail               = "mb_send_mail";                 // Send encoded mail
   const Split                  = "mb_split";                     // Split multibyte string using regular expression
   const Cut                    = "mb_strcut";                    // Get part of string
   const ImWidth                = "mb_strimwidth";                // Get truncated string with specified width
   const Ipos                   = "mb_stripos";                   // Finds position of first occurrence of a string within another, case insensitive
   const Istr                   = "mb_stristr";                   // Finds first occurrence of a string within another, case insensitive
   const Length                 = "mb_strlen";                    // Get string length
   const Position               = "mb_strpos";                    // Find position of first occurrence of string in a string
   const Rchr                   = "mb_strrchr";                   // Finds the last occurrence of a character in a string within another
   const Richr                  = "mb_strrichr";                  // Finds the last occurrence of a character in a string within another, case insensitive
   const Ripos                  = "mb_strripos";                  // Finds position of last occurrence of a string within another, case insensitive
   const Rpos                   = "mb_strrpos";                   // Find position of last occurrence of a string in a string
   const Str                    = "mb_strstr";                    // Finds first occurrence of a string within another
   const ToLower                = "mb_strtolower";                // Make a string lowercase
   const ToUpper                = "mb_strtoupper";                // Make a string uppercase
   const Width                  = "mb_strwidth";                  // Return width of string
   const SubStituteCharacter    = "mb_substitute_character";      // Set/Get substitution character
   const SubstringCount         = "mb_substr_count";              // Count the number of substring occurrences
   const SubString              = "mb_substr";                    // Get part of string
}