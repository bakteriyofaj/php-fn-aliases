<?php

namespace BakteriyoFaj\PhpFnAliases;

class ClientURL extends PhpMethodCaller
{
    const CopyHandle           = "curl_copy_handle";            // Bir cURL tanıtıcısını tüm tercihleriyle kopyalar
    const Close                = "curl_close";                  // cURL oturumunu sonlandırır
    const ErrorNo              = "curl_errno";                  // Belirtilen oturumdaki son hatanın kodunu döndürür
    const Error                = "curl_error";                  // Belirtilen oturumdaki son hatayı içeren bir dizge döndürür
    const Escape               = "curl_escape";                 // URL encodes the given string
    const Exec                 = "curl_exec";                   // Bir cURL oturumunu işleme sokar
    const FileCreate           = "curl_file_create";            // Create a CURLFile object
    const GetInfo              = "curl_getinfo";                // Belli bir oturum ile ilgili bilgi döndürür
    const Init                 = "curl_init";                   // Bir cURL oturumunu ilklendirir
    const MultiAddHandle       = "curl_multi_add_handle";       // Tekil cURL tanıtıcısını çoklu cURL tanıtıcısına ekler
    const MultiClose           = "curl_multi_close";            // Çoklu tanıtıcıyı kapatır
    const MultiErrorNo         = "curl_multi_errno";            // Return the last multi curl error number
    const MultiExec            = "curl_multi_exec";             // Geçerli cURL tanıtıcısının alt bağlantılarını çalıştırır
    const MultiGetContent      = "curl_multi_getcontent";       // CURLOPT_RETURNTRANSFER etkinse bir cURL tanıtıcısının içeriği döner
    const MultiInfoRead        = "curl_multi_info_read";        // Geçerli oturum hakkında bilgi döndürür
    const Multi_init           = "curl_multi_init";             // Yeni bir çoklu cURL tanıtıcısı döndürür
    const MultiRemoveHandle    = "curl_multi_remove_handle";    // Bir tekil tanıtıcıyı bir çoklu tanıtıcıdan siler
    const MultiSelect          = "curl_multi_select";           // Çoklu cURL bağlantısında bir etkinlik olsun diye bekler
    const MultiSetOpt          = "curl_multi_setopt";           // Set an option for the cURL multi handle
    const MultiStringError     = "curl_multi_strerror";         // Return string describing error code
    const Pause                = "curl_pause";                  // Pause and unpause a connection
    const Reset                = "curl_reset";                  // Reset all options of a libcurl session handle
    const SetOptArray          = "curl_setopt_array";           // Belirtilen cURL oturumuna çok sayıda seçenek atar
    const SetOpt               = "curl_setopt";                 // Bir cURL aktarım seçeneği tanımlar
    const ShareClose           = "curl_share_close";            // Close a cURL share handle
    const ShareErrorNo         = "curl_share_errno";            // Return the last share curl error number
    const ShareInit            = "curl_share_init";             // Initialize a cURL share handle
    const ShareSetOpt          = "curl_share_setopt";           // Set an option for a cURL share handle
    const ShareStringError     = "curl_share_strerror";         // Return string describing the given error code
    const StringError          = "curl_strerror";               // Return string describing the given error code
    const Unescape             = "curl_unescape";               // Decodes the given URL encoded string
    const Version              = "curl_version";                // cURL sürüm bilgilerini döndürür
}