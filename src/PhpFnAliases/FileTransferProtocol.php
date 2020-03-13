<?php

namespace BakteriyoFaj\PhpFnAliases;

class FileTransferProtocol extends PhpMethodCaller
{
    const Alloc             = "ftp_alloc";           // Allocates space for a file to be uploaded
    const Append            = "ftp_append";          // Append the contents of a file to another file on the FTP server
    const Cdup              = "ftp_cdup";            // Changes to the parent directory
    const Chdir             = "ftp_chdir";           // Changes the current directory on a FTP server
    const Chmod             = "ftp_chmod";           // Set permissions on a file via FTP
    const Close             = "ftp_close";           // Closes an FTP connection
    const Connect           = "ftp_connect";         // Opens an FTP connection
    const Delete            = "ftp_delete";          // Deletes a file on the FTP server
    const Exec              = "ftp_exec";            // Requests execution of a command on the FTP server
    const Fget              = "ftp_fget";            // Downloads a file from the FTP server and saves to an open file
    const Fput              = "ftp_fput";            // Uploads from an open file to the FTP server
    const GetOption         = "ftp_get_option";      // Retrieves various runtime behaviours of the current FTP stream
    const Get               = "ftp_get";             // Downloads a file from the FTP server
    const Login             = "ftp_login";           // Logs in to an FTP connection
    const ModifiedTime      = "ftp_mdtm";            // Returns the last modified time of the given file
    const MakeDir           = "ftp_mkdir";           // Creates a directory
    const Mlsd              = "ftp_mlsd";            // Returns a list of files in the given directory
    const NbContinue        = "ftp_nb_continue";     // Continues retrieving/sending a file (non-blocking)
    const NbFget            = "ftp_nb_fget";         // Retrieves a file from the FTP server and writes it to an open file (non-blocking)
    const NbFput            = "ftp_nb_fput";         // Stores a file from an open file to the FTP server (non-blocking)
    const NbGet             = "ftp_nb_get";          // Retrieves a file from the FTP server and writes it to a local file (non-blocking)
    const NbPut             = "ftp_nb_put";          // Stores a file on the FTP server (non-blocking)
    const NList             = "ftp_nlist";           // Returns a list of files in the given directory
    const Passive           = "ftp_pasv";            // Turns passive mode on or off
    const Put               = "ftp_put";             // Uploads a file to the FTP server
    const Pwd               = "ftp_pwd";             // Returns the current directory name
    const Quit              = "ftp_quit";            // Alias of ftp_close
    const Raw               = "ftp_raw";             // Sends an arbitrary command to an FTP server
    const RawList           = "ftp_rawlist";         // Returns a detailed list of files in the given directory
    const Rename            = "ftp_rename";          // Renames a file or a directory on the FTP server
    const RemoveDir         = "ftp_rmdir";           // Removes a directory
    const SetOption         = "ftp_set_option";      // Set miscellaneous runtime FTP options
    const Site              = "ftp_site";            // Sends a SITE command to the server
    const Size              = "ftp_size";            // Returns the size of the given file
    const SslConnect        = "ftp_ssl_connect";     // Opens a Secure SSL-FTP connection
    const SystemType        = "ftp_systype";         // Returns the system type identifier of the remote FTP server
}