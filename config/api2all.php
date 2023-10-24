<?php

if (env('API_PROD') == true) {
    return [
        "auth" => "http://pauthapi.linkv2.com",
        "wallet" => "http://pwalletapi.linkv2.com",
        "ticket" => "http://pwlapi.linkv2.com",
        "glist" => "http://gamelistapi.linkv2.com",
        "ogame" => "http://opengameapi.linkv2.com",
    ];
} else {
    return [
        "auth" => "http://pauthapi.data333.com",
        "wallet" => "http://w2.data333.com",
        "ticket" => "http://pwlapi.data333.com",
        "glist" => "http://gamelistapi.data333.com",
        "ogame" => "http://opengameapi.data333.com",
    ];
}
