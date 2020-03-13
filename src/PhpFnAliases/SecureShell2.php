<?php

namespace BakteriyoFaj\PhpFnAliases;

class SecureShell2 extends PhpMethodCaller
{
    const AuthAgent         = "ssh2_auth_agent";             // Authenticate over SSH using the ssh agent
    const AuthHostBasedFile = "ssh2_auth_hostbased_file";    // Authenticate using a public hostkey
    const AuthNone          = "ssh2_auth_none";              // Authenticate as "none"
    const AuthPassword      = "ssh2_auth_password";          // Authenticate over SSH using a plain password
    const AuthPubkeyFile    = "ssh2_auth_pubkey_file";       // Authenticate using a public key
    const Connect           = "ssh2_connect";                // Connect to an SSH server
    const Disconnect        = "ssh2_disconnect";             // Close a connection to a remote SSH server
    const Exec              = "ssh2_exec";                   // Execute a command on a remote server
    const FetchStream       = "ssh2_fetch_stream";           // Fetch an extended data stream
    const FingerPrint       = "ssh2_fingerprint";            // Retrieve fingerprint of remote server
    const MethodsNegotiated = "ssh2_methods_negotiated";     // Return list of negotiated methods
    const PublickeyAdd      = "ssh2_publickey_add";          // Add an authorized publickey
    const PublickeyInit     = "ssh2_publickey_init";         // Initialize Publickey subsystem
    const PublickeyList     = "ssh2_publickey_list";         // List currently authorized publickeys
    const PublickeyRemove   = "ssh2_publickey_remove";       // Remove an authorized publickey
    const ScpRecv           = "ssh2_scp_recv";               // Request a file via SCP
    const ScpSend           = "ssh2_scp_send";               // Send a file via SCP
    const SftpChmod         = "ssh2_sftp_chmod";             // Changes file mode
    const SftpLstat         = "ssh2_sftp_lstat";             // Stat a symbolic link
    const SftpMkdir         = "ssh2_sftp_mkdir";             // Create a directory
    const SftpReadLink      = "ssh2_sftp_readlink";          // Return the target of a symbolic link
    const SftpRealpath      = "ssh2_sftp_realpath";          // Resolve the realpath of a provided path string
    const SftpRename        = "ssh2_sftp_rename";            // Rename a remote file
    const SftpRmdir         = "ssh2_sftp_rmdir";             // Remove a directory
    const SftpStat          = "ssh2_sftp_stat";              // Stat a file on a remote filesystem
    const SftpSymLink       = "ssh2_sftp_symlink";           // Create a symlink
    const SftpUnlink        = "ssh2_sftp_unlink";            // Delete a file
    const Sftp              = "ssh2_sftp";                   // Initialize SFTP subsystem
    const Shell             = "ssh2_shell";                  // Request an interactive shell
    const Tunnel            = "ssh2_tunnel";                 // Open a tunnel through a remote server
}