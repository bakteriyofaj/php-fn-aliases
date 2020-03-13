<?php

namespace BakteriyoFaj\PhpFnAliases;

class Url extends PhpMethodCaller
{
    const Base64Decode   = "base64_decode";       // Decodes data encoded with MIME base64
    const Base64Encode   = "base64_encode";       // Encodes data with MIME base64
    const GetHeaders     = "get_headers";         // Fetches all the headers sent by the server in response to an HTTP request
    const GetMetaTags    = "get_meta_tags";       // Extracts all meta tag content attributes from a file and returns an array
    const HttpBuildQuery = "http_build_query";    // Generate URL-encoded query string
    const Parse          = "parse_url";           // Parse a URL and return its components
    const DecodeRaw      = "rawurldecode";        // Decode URL-encoded strings
    const EncodeRaw      = "rawurlencode";        // URL-encode according to RFC 3986
    const Decode         = "urldecode";           // Decodes URL-encoded string
    const Encode         = "urlencode";           // URL-encodes string
}