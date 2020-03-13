<?php

namespace BakteriyoFaj\PhpFnAliases;

class DateAndTime extends PhpMethodCaller
{
    const CheckDate              = "checkdate";                               // Validate a Gregorian date
    const DateDefaultTimezoneGet = "date_default_timezone_get";               // Gets the default timezone used by all date/time functions in a script
    const DateDefaultTimezoneSet = "date_default_timezone_set";               // Sets the default timezone used by all date/time functions in a script
    const DateParseFromFormat    = "date_parse_from_format";                  // Get info about given date formatted according to the specified format
    const DateParse              = "date_parse";                              // Returns associative array with detailed info about given date
    const DateSunInfo            = "date_sun_info";                           // Returns an array with information about sunset/sunrise and twilight begin/end
    const DateSunrise            = "date_sunrise";                            // Returns time of sunrise for a given day and location
    const DateSunset             = "date_sunset";                             // Returns time of sunset for a given day and location
    const Date                   = "date";                                    // Format a local time/date
    const GetDate                = "getdate";                                 // Get date/time information
    const GettimeofDay           = "gettimeofday";                            // Get current time
    const GmDate                 = "gmdate";                                  // Format a GMT/UTC date/time
    const GmMakeTime             = "gmmktime";                                // Get Unix timestamp for a GMT date
    const GmstrfTime             = "gmstrftime";                              // Format a GMT/UTC time/date according to locale settings
    const Idate                  = "idate";                                   // Format a local time/date as integer
    const Localtime              = "localtime";                               // Get the local time
    const Microtime              = "microtime";                               // Return current Unix timestamp with microseconds
    const Maketime               = "mktime";                                  // Get Unix timestamp for a date
    const StrfTime               = "strftime";                                // Format a local time/date according to locale settings
    const StrpTime               = "strptime";                                // Parse a time/date generated with strftime
    const StrToTime              = "strtotime";                               // Parse about any English textual datetime description into a Unix timestamp
    const Time                   = "time";                                    // Return current Unix timestamp
    const TimezoneVersionGet     = "timezone_version_get";                    // Gets the version of the timezonedb
}