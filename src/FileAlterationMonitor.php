<?php

namespace BakteriyoFaj\PhpFnAliases;

class FileAlterationMonitor extends PhpMethodCaller
{
    const CancelMonitor      = "fam_cancel_monitor";        // Terminate monitoring
    const Close              = "fam_close";                 // Close FAM connection
    const MonitorCollection  = "fam_monitor_collection";    // Monitor a collection of files in a directory for changes
    const MonitorDirectory   = "fam_monitor_directory";     // Monitor a directory for changes
    const MonitorFile        = "fam_monitor_file";          // Monitor a regular file for changes
    const NextEvent          = "fam_next_event";            // Get next pending FAM event
    const Open               = "fam_open";                  // Open connection to FAM daemon
    const Pending            = "fam_pending";               // Check for pending FAM events
    const ResumeMonitor      = "fam_resume_monitor";        // Resume suspended monitoring
    const SuspendMonitor     = "fam_suspend_monitor";       // Temporarily suspend monitoring
}