<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/' ;

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3010">
    <div class="frame-layout">
        <div class="line">
            <h2>NEED MORE HELP?</h2>
            <h1>Our team is ready to provide expert solutions.</h1>
        </div>
        <div class="line">
            <div class="column">
                <i class="fas fa-sharp fa-comments"></i>
                <h3>Customer Support</h3>
                <p>Effictur lobortis amet faucibus feugiat aptent convallis cubilia bibendum nostra nulla arcu</p>
                <button>CHAT NOW</button>
            </div>
            <div class="column">
                <i class="fas fa-envelope"></i>
                <h3>Ticket Support</h3>
                <p>Effictur lobortis amet faucibus feugiat aptent convallis cubilia bibendum nostra nulla arcu</p>
                <button>SEND TICKET</button>
            </div>
            <div class="column">
                <i class="fas fa-cogs"></i>
                <h3>Technical Support</h3>
                <p>Effictur lobortis amet faucibus feugiat aptent convallis cubilia bibendum nostra nulla arcu</p>
                <button>CHAT NOW</button>
            </div>
            <div class="column">
                <i class="fas fa-book"></i>
                <h3>Free Insight</h3>
                <p>Effictur lobortis amet faucibus feugiat aptent convallis cubilia bibendum nostra nulla arcu</p>
                <button>READ ARTICLE</button>
            </div>
        </div>
    </div>
</div>
