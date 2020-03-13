<?php

namespace BakteriyoFaj\PhpFnAliases;

class Socket extends PhpMethodCaller
{
    const Accept                 = "socket_accept";                       // Accepts a connection on a socket
    const AddrInfoBind           = "socket_addrinfo_bind";                // Create and bind to a socket from a given addrinfo
    const AddrInfoConnect        = "socket_addrinfo_connect";             // Create and connect to a socket from a given addrinfo
    const AddrInfoExplain        = "socket_addrinfo_explain";             // Get information about addrinfo
    const AddrInfoLookup         = "socket_addrinfo_lookup";              // Get array with contents of getaddrinfo about the given hostname
    const Bind                   = "socket_bind";                         // Binds a name to a socket
    const ClearError             = "socket_clear_error";                  // Clears the error on the socket or the last error code
    const Close                  = "socket_close";                        // Closes a socket resource
    const CalculateMessageSpace  = "socket_cmsg_space";                   // Calculate message buffer size
    const Connect                = "socket_connect";                      // Initiates a connection on a socket
    const CreateListen           = "socket_create_listen";                // Opens a socket on port to accept connections
    const CreatePair             = "socket_create_pair";                  // Creates a pair of indistinguishable sockets and stores them in an array
    const Create                 = "socket_create";                       // Create a socket (endpoint for communication)
    const ExportStream           = "socket_export_stream";                // Export a socket extension resource into a stream that encapsulates a socket
    const GetOption              = "socket_get_option";                   // Gets socket options for the socket
    const Getopt                 = "socket_getopt";                       // Alias of socket_get_option
    const GetPeerName            = "socket_getpeername";                  // Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
    const GetSockName            = "socket_getsockname";                  // Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
    const ImportStream           = "socket_import_stream";                // Import a stream
    const LastError              = "socket_last_error";                   // Returns the last error on the socket
    const Listen                 = "socket_listen";                       // Listens for a connection on a socket
    const Read                   = "socket_read";                         // Reads a maximum of length bytes from a socket
    const Receives               = "socket_recv";                         // Receives data from a connected socket
    const ReceivesFrom           = "socket_recvfrom";                     // Receives data from a socket whether or not it is connection-oriented
    const ReceivesMessage        = "socket_recvmsg";                      // Read a message
    const Select                 = "socket_select";                       // Runs the select() system call on the given arrays of sockets with a specified timeout
    const Send                   = "socket_send";                         // Sends data to a connected socket
    const SendMessage            = "socket_sendmsg";                      // Send a message
    const SendTo                 = "socket_sendto";                       // Sends a message to a socket, whether it is connected or not
    const SetBlock               = "socket_set_block";                    // Sets blocking mode on a socket resource
    const SetNonBlock            = "socket_set_nonblock";                 // Sets nonblocking mode for file descriptor fd
    const SetOption              = "socket_set_option";                   // Sets socket options for the socket
    const ShutDown               = "socket_shutdown";                     // Shuts down a socket for receiving, sending, or both
    const StringError            = "socket_strerror";                     // Return a string describing a socket error
    const Write                  = "socket_write";                        // Write to a socket
    const WsaprotocolInfoExport  = "socket_wsaprotocol_info_export";      // Exports the WSAPROTOCOL_INFO Structure
    const WsaprotocolInfoImport  = "socket_wsaprotocol_info_import";      // Imports a Socket from another Process
    const WsaprotocolInfoRelease = "socket_wsaprotocol_info_release";     // Releases an exported WSAPROTOCOL_INFO Structure
}