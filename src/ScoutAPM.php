<?php

namespace BakteriyoFaj\PhpFnAliases;

class ScoutAPM extends PhpMethodCaller
{
    const GetCalls                = "scoutapm_get_calls";                      // Returns a list of instrumented calls that have occurred
    const ListInstrumentFunctions = "scoutapm_list_instrumented_functions";    // List functions scoutapm will instrument.
}