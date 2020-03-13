<?php

namespace BakteriyoFaj\PhpFnAliases;

class Network extends PhpMethodCaller
{
    const Checkdnsrr               = "checkdnsrr";                  // Check DNS records corresponding to a given Internet host name or IP address
    const CloseLog                 = "closelog";                    // Close connection to system logger
    const DefineSysLogVariables    = "define_syslog_variables";     // Initializes all syslog related variables
    const DnsCheck_record          = "dns_check_record";            // Alias of checkdnsrr
    const DnsGetMx                 = "dns_get_mx";                  // Alias of getmxrr
    const DnsGetRecord             = "dns_get_record";              // Fetch DNS Resource Records associated with a hostname
    const Fsockopen                = "fsockopen";                   // Open Internet or Unix domain socket connection
    const GetHostByAddress         = "gethostbyaddr";               // Get the Internet host name corresponding to a given IP address
    const GetHostByName            = "gethostbyname";               // Get the IPv4 address corresponding to a given Internet host name
    const GetHostByNameList        = "gethostbynamel";              // Get a list of IPv4 addresses corresponding to a given Internet host name
    const GetHostName              = "gethostname";                 // Gets the host name
    const GetMxrr                  = "getmxrr";                     // Get MX records corresponding to a given Internet host name
    const GetProtoByName           = "getprotobyname";              // Get protocol number associated with protocol name
    const GetProtoByNumber         = "getprotobynumber";            // Get protocol name associated with protocol number
    const GetServerByName          = "getservbyname";               // Get port number associated with an Internet service and protocol
    const GetServerByPort          = "getservbyport";               // Get Internet service which corresponds to port and protocol
    const HeaderRegisterCallback   = "header_register_callback";    // Call a header function
    const HeaderRemove             = "header_remove";               // Remove previously set headers
    const Header                   = "header";                      // Send a raw HTTP header
    const HeadersList              = "headers_list";                // Returns a list of response headers sent (or ready to send)
    const HeadersSent              = "headers_sent";                // Checks if or where headers have been sent
    const HttpResponseCode         = "http_response_code";          // Get or Set the HTTP response code
    const InetNtop                 = "inet_ntop";                   // Converts a packed internet address to a human readable representation
    const InetPton                 = "inet_pton";                   // Converts a human readable IP address to its packed in_addr representation
    const IpToLong                 = "ip2long";                     // Converts a string containing an (IPv4) Internet Protocol dotted address into a long integer
    const LongToIp                 = "long2ip";                     // Converts an long integer address into a string in (IPv4) Internet standard dotted format
    const OpenLog                  = "openlog";                     // Open connection to system logger
    const Pfsockopen               = "pfsockopen";                  // Open persistent Internet or Unix domain socket connection
    const SetCookie                = "setcookie";                   // Send a cookie
    const SetRawCookie             = "setrawcookie";                // Send a cookie without urlencoding the cookie value
    const SocketGetStatus          = "socket_get_status";           // Alias of stream_get_meta_data
    const SocketSetBlocking        = "socket_set_blocking";         // Alias of stream_set_blocking
    const SocketSetTimeout         = "socket_set_timeout";          // Alias of stream_set_timeout
    const SystemLog                = "syslog";                      // Generate a system log message
}