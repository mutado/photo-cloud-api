<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://167.172.172.251";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.6.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.6.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authentication" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-login">
                                <a href="#authentication-POSTapi-login">Authenticate the user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="authentication-POSTapi-register">
                                <a href="#authentication-POSTapi-register">Register a new user.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-statistics-storage">
                                <a href="#endpoints-GETapi-statistics-storage">GET api/statistics/storage</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-statistics-summary">
                                <a href="#endpoints-GETapi-statistics-summary">GET api/statistics/summary</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-folders" class="tocify-header">
                <li class="tocify-item level-1" data-unique="folders">
                    <a href="#folders">Folders</a>
                </li>
                                    <ul id="tocify-subheader-folders" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="folders-GETapi-folders">
                                <a href="#folders-GETapi-folders">Index all folders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="folders-POSTapi-folders">
                                <a href="#folders-POSTapi-folders">Store a new folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="folders-GETapi-folders--id-">
                                <a href="#folders-GETapi-folders--id-">Show a folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="folders-PUTapi-folders--id-">
                                <a href="#folders-PUTapi-folders--id-">Update a folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="folders-DELETEapi-folders--id-">
                                <a href="#folders-DELETEapi-folders--id-">Delete a folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="folders-POSTapi-folders--folder_id--share">
                                <a href="#folders-POSTapi-folders--folder_id--share">Share a folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="folders-photo-references">
                                <a href="#folders-photo-references">Photo References</a>
                            </li>
                                                            <ul id="tocify-subheader-folders-photo-references" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="folders-GETapi-folders--folder_id--photos">
                                            <a href="#folders-GETapi-folders--folder_id--photos">Index all photo references</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-POSTapi-folders--folder_id--photos">
                                            <a href="#folders-POSTapi-folders--folder_id--photos">Store a photo in a folder</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-GETapi-folders--folder_id--photos--id-">
                                            <a href="#folders-GETapi-folders--folder_id--photos--id-">Show a photo</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-PUTapi-folders--folder_id--photos--id-">
                                            <a href="#folders-PUTapi-folders--folder_id--photos--id-">Update a photo</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-DELETEapi-folders--folder_id--photos--id-">
                                            <a href="#folders-DELETEapi-folders--folder_id--photos--id-">Delete a photo</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-GETapi-folders--folder_id--references--photoReference_id-">
                                            <a href="#folders-GETapi-folders--folder_id--references--photoReference_id-">Show a photo reference</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-POSTapi-folders--folder_id--photos--photo_id-">
                                            <a href="#folders-POSTapi-folders--folder_id--photos--photo_id-">Add a photo to a folder</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="folders-DELETEapi-folders--folder_id--references--photoReference_id-">
                                            <a href="#folders-DELETEapi-folders--folder_id--references--photoReference_id-">Remove a photo from a folder</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-photos" class="tocify-header">
                <li class="tocify-item level-1" data-unique="photos">
                    <a href="#photos">Photos</a>
                </li>
                                    <ul id="tocify-subheader-photos" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="photos-GETapi-photos">
                                <a href="#photos-GETapi-photos">Index all photos</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="photos-POSTapi-photos">
                                <a href="#photos-POSTapi-photos">Store a photo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="photos-GETapi-photos--id-">
                                <a href="#photos-GETapi-photos--id-">Show a photo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="photos-PUTapi-photos--id-">
                                <a href="#photos-PUTapi-photos--id-">Update a photo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="photos-DELETEapi-photos--id-">
                                <a href="#photos-DELETEapi-photos--id-">Delete a photo</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="photos-GETapi-photos--photo_id--download">
                                <a href="#photos-GETapi-photos--photo_id--download">Download a photo</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-shared-folders" class="tocify-header">
                <li class="tocify-item level-1" data-unique="shared-folders">
                    <a href="#shared-folders">Shared Folders</a>
                </li>
                                    <ul id="tocify-subheader-shared-folders" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="shared-folders-GETapi-shared">
                                <a href="#shared-folders-GETapi-shared">Index all shared folders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="shared-folders-POSTapi-shared">
                                <a href="#shared-folders-POSTapi-shared">Store a new shared folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="shared-folders-GETapi-shared--id-">
                                <a href="#shared-folders-GETapi-shared--id-">Show a shared folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="shared-folders-PUTapi-shared--id-">
                                <a href="#shared-folders-PUTapi-shared--id-">Update a shared folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="shared-folders-DELETEapi-shared--id-">
                                <a href="#shared-folders-DELETEapi-shared--id-">Delete a shared folder</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="shared-folders-shared-folder-emails">
                                <a href="#shared-folders-shared-folder-emails">Shared Folder Emails</a>
                            </li>
                                                            <ul id="tocify-subheader-shared-folders-shared-folder-emails" class="tocify-subheader">
                                                                            <li class="tocify-item level-3" data-unique="shared-folders-GETapi-shared--shared_id--emails">
                                            <a href="#shared-folders-GETapi-shared--shared_id--emails">Index all shared folder emails</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="shared-folders-POSTapi-shared--shared_id--emails">
                                            <a href="#shared-folders-POSTapi-shared--shared_id--emails">Share a folder with an email</a>
                                        </li>
                                                                            <li class="tocify-item level-3" data-unique="shared-folders-DELETEapi-shared--shared_id--emails--id-">
                                            <a href="#shared-folders-DELETEapi-shared--shared_id--emails--id-">Remove a shared folder email</a>
                                        </li>
                                                                    </ul>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 28, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Photo cloud api documentation</p>
<aside>
    <strong>Base URL</strong>: <code>http://167.172.172.251</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="authentication">Authentication</h1>

    

                                <h2 id="authentication-POSTapi-login">Authenticate the user.</h2>

<p>
</p>

<p>This endpoint is used to authenticate the user. It will return a JWT token with user information.</p>

<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"hamill.antwon@example.net\",
    \"password\": \"sunt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "hamill.antwon@example.net",
    "password": "sunt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-login"
               value="hamill.antwon@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>hamill.antwon@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-login"
               value="sunt"
               data-component="body">
    <br>
<p>Example: <code>sunt</code></p>
        </div>
        </form>

                    <h2 id="authentication-POSTapi-register">Register a new user.</h2>

<p>
</p>

<p>This endpoint is used to register a new user. It will return a JWT token with user information.</p>

<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ovysdojeiaevdxsvnifmkno\",
    \"email\": \"heller.schuyler@example.org\",
    \"password\": \"ZL{J#l2CmUJ|C.oOP2B\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ovysdojeiaevdxsvnifmkno",
    "email": "heller.schuyler@example.org",
    "password": "ZL{J#l2CmUJ|C.oOP2B"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-register"
               value="ovysdojeiaevdxsvnifmkno"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>ovysdojeiaevdxsvnifmkno</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-register"
               value="heller.schuyler@example.org"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>heller.schuyler@example.org</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-register"
               value="ZL{J#l2CmUJ|C.oOP2B"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>ZL{J#l2CmUJ|C.oOP2B</code></p>
        </div>
        </form>

                <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/user" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/user"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-user"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-statistics-storage">GET api/statistics/storage</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-statistics-storage">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/statistics/storage" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/statistics/storage"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-statistics-storage">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-statistics-storage" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-statistics-storage"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-statistics-storage" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-statistics-storage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-statistics-storage"></code></pre>
</span>
<form id="form-GETapi-statistics-storage" data-method="GET"
      data-path="api/statistics/storage"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-statistics-storage', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-statistics-storage"
                    onclick="tryItOut('GETapi-statistics-storage');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-statistics-storage"
                    onclick="cancelTryOut('GETapi-statistics-storage');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-statistics-storage" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/statistics/storage</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-statistics-storage"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-statistics-storage"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-statistics-storage"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-statistics-summary">GET api/statistics/summary</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-statistics-summary">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/statistics/summary" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/statistics/summary"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-statistics-summary">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-statistics-summary" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-statistics-summary"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-statistics-summary" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-statistics-summary" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-statistics-summary"></code></pre>
</span>
<form id="form-GETapi-statistics-summary" data-method="GET"
      data-path="api/statistics/summary"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-statistics-summary', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-statistics-summary"
                    onclick="tryItOut('GETapi-statistics-summary');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-statistics-summary"
                    onclick="cancelTryOut('GETapi-statistics-summary');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-statistics-summary" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/statistics/summary</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-statistics-summary"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-statistics-summary"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-statistics-summary"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                <h1 id="folders">Folders</h1>

    <p>Class FoldersController</p>

                                <h2 id="folders-GETapi-folders">Index all folders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a list of all folders</p>

<span id="example-requests-GETapi-folders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/folders" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-folders">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-folders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-folders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-folders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders"></code></pre>
</span>
<form id="form-GETapi-folders" data-method="GET"
      data-path="api/folders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-folders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-folders"
                    onclick="tryItOut('GETapi-folders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-folders"
                    onclick="cancelTryOut('GETapi-folders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-folders" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/folders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-folders"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-folders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-folders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="folders-POSTapi-folders">Store a new folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Creates a new folder and returns it.</p>

<span id="example-requests-POSTapi-folders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/folders" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Folder name\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Folder name"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-folders">
</span>
<span id="execution-results-POSTapi-folders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-folders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folders" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-folders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folders"></code></pre>
</span>
<form id="form-POSTapi-folders" data-method="POST"
      data-path="api/folders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-folders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-folders"
                    onclick="tryItOut('POSTapi-folders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-folders"
                    onclick="cancelTryOut('POSTapi-folders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-folders" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/folders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-folders"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-folders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-folders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-folders"
               value="Folder name"
               data-component="body">
    <br>
<p>The name of the folder. This field is required and must be a string. Must not be greater than 255 characters. Example: <code>Folder name</code></p>
        </div>
        </form>

                    <h2 id="folders-GETapi-folders--id-">Show a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a folder.</p>

<span id="example-requests-GETapi-folders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-folders--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-folders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-folders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-folders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders--id-"></code></pre>
</span>
<form id="form-GETapi-folders--id-" data-method="GET"
      data-path="api/folders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-folders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-folders--id-"
                    onclick="tryItOut('GETapi-folders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-folders--id-"
                    onclick="cancelTryOut('GETapi-folders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-folders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/folders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-folders--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-folders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-folders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-folders--id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    </form>

                    <h2 id="folders-PUTapi-folders--id-">Update a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Updates a folder and returns it.</p>

<span id="example-requests-PUTapi-folders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"Folder name\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "Folder name"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-folders--id-">
</span>
<span id="execution-results-PUTapi-folders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-folders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-folders--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-folders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-folders--id-"></code></pre>
</span>
<form id="form-PUTapi-folders--id-" data-method="PUT"
      data-path="api/folders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-folders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-folders--id-"
                    onclick="tryItOut('PUTapi-folders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-folders--id-"
                    onclick="cancelTryOut('PUTapi-folders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-folders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/folders/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/folders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-folders--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-folders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-folders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-folders--id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-folders--id-"
               value="Folder name"
               data-component="body">
    <br>
<p>The name of the folder. This field is required and must be a string. Must not be greater than 255 characters. Example: <code>Folder name</code></p>
        </div>
        </form>

                    <h2 id="folders-DELETEapi-folders--id-">Delete a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Deletes a folder.</p>

<span id="example-requests-DELETEapi-folders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-folders--id-">
</span>
<span id="execution-results-DELETEapi-folders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-folders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-folders--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-folders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-folders--id-"></code></pre>
</span>
<form id="form-DELETEapi-folders--id-" data-method="DELETE"
      data-path="api/folders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-folders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-folders--id-"
                    onclick="tryItOut('DELETEapi-folders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-folders--id-"
                    onclick="cancelTryOut('DELETEapi-folders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-folders--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/folders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-folders--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-folders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-folders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-folders--id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    </form>

                    <h2 id="folders-POSTapi-folders--folder_id--share">Share a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Shares a folder with another user.</p>

<span id="example-requests-POSTapi-folders--folder_id--share">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/share" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"is_public\": false,
    \"is_password_protected\": false,
    \"password\": \"password\",
    \"emails\": [
        \"test@example.com\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/share"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_public": false,
    "is_password_protected": false,
    "password": "password",
    "emails": [
        "test@example.com"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-folders--folder_id--share">
</span>
<span id="execution-results-POSTapi-folders--folder_id--share" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-folders--folder_id--share"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folders--folder_id--share" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-folders--folder_id--share" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folders--folder_id--share"></code></pre>
</span>
<form id="form-POSTapi-folders--folder_id--share" data-method="POST"
      data-path="api/folders/{folder_id}/share"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-folders--folder_id--share', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-folders--folder_id--share"
                    onclick="tryItOut('POSTapi-folders--folder_id--share');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-folders--folder_id--share"
                    onclick="cancelTryOut('POSTapi-folders--folder_id--share');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-folders--folder_id--share" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/folders/{folder_id}/share</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-folders--folder_id--share"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-folders--folder_id--share"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-folders--folder_id--share"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="POSTapi-folders--folder_id--share"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-folders--folder_id--share" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="POSTapi-folders--folder_id--share"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-folders--folder_id--share" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="POSTapi-folders--folder_id--share"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the folder is public or not. If the folder is public, it will be accessible by anyone with the link. If the folder is not public, it will be accessible only by the emails provided. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_password_protected</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-folders--folder_id--share" style="display: none">
            <input type="radio" name="is_password_protected"
                   value="true"
                   data-endpoint="POSTapi-folders--folder_id--share"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-folders--folder_id--share" style="display: none">
            <input type="radio" name="is_password_protected"
                   value="false"
                   data-endpoint="POSTapi-folders--folder_id--share"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the folder is password protected or not. If the folder is password protected, it will be accessible only by the emails provided and the password. If the folder is not password protected, it will be accessible only by the emails provided authorized by email code. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-folders--folder_id--share"
               value="password"
               data-component="body">
    <br>
<p>The password to protect the folder with. This field is required if the folder is password protected. This field is required when <code>is_password_protected</code> is <code>true</code>. Example: <code>password</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emails</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="emails[0]"                data-endpoint="POSTapi-folders--folder_id--share"
               data-component="body">
        <input type="text" style="display: none"
               name="emails[1]"                data-endpoint="POSTapi-folders--folder_id--share"
               data-component="body">
    <br>
<p>The email to share the folder with. This field is required and must be a valid email. Must be a valid email address.</p>
        </div>
        </form>

                                <h2 id="folders-photo-references">Photo References</h2>
                                                    <h2 id="folders-GETapi-folders--folder_id--photos">Index all photo references</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a list of all photo references in a folder.</p>

<span id="example-requests-GETapi-folders--folder_id--photos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-folders--folder_id--photos">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-folders--folder_id--photos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-folders--folder_id--photos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders--folder_id--photos" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-folders--folder_id--photos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders--folder_id--photos"></code></pre>
</span>
<form id="form-GETapi-folders--folder_id--photos" data-method="GET"
      data-path="api/folders/{folder_id}/photos"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-folders--folder_id--photos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-folders--folder_id--photos"
                    onclick="tryItOut('GETapi-folders--folder_id--photos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-folders--folder_id--photos"
                    onclick="cancelTryOut('GETapi-folders--folder_id--photos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-folders--folder_id--photos" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/folders/{folder_id}/photos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-folders--folder_id--photos"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-folders--folder_id--photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-folders--folder_id--photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="GETapi-folders--folder_id--photos"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    </form>

                    <h2 id="folders-POSTapi-folders--folder_id--photos">Store a photo in a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Stores a new photo and adds it into a folder.</p>

<span id="example-requests-POSTapi-folders--folder_id--photos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "photo=@/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/phpDXo17n" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-folders--folder_id--photos">
</span>
<span id="execution-results-POSTapi-folders--folder_id--photos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-folders--folder_id--photos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folders--folder_id--photos" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-folders--folder_id--photos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folders--folder_id--photos"></code></pre>
</span>
<form id="form-POSTapi-folders--folder_id--photos" data-method="POST"
      data-path="api/folders/{folder_id}/photos"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-folders--folder_id--photos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-folders--folder_id--photos"
                    onclick="tryItOut('POSTapi-folders--folder_id--photos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-folders--folder_id--photos"
                    onclick="cancelTryOut('POSTapi-folders--folder_id--photos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-folders--folder_id--photos" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/folders/{folder_id}/photos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-folders--folder_id--photos"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-folders--folder_id--photos"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-folders--folder_id--photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="POSTapi-folders--folder_id--photos"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
               name="photo"                data-endpoint="POSTapi-folders--folder_id--photos"
               value=""
               data-component="body">
    <br>
<p>The photo to upload. Example: <code>/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/phpDXo17n</code></p>
        </div>
        </form>

                    <h2 id="folders-GETapi-folders--folder_id--photos--id-">Show a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a photo.</p>

<span id="example-requests-GETapi-folders--folder_id--photos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-folders--folder_id--photos--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-folders--folder_id--photos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-folders--folder_id--photos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders--folder_id--photos--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-folders--folder_id--photos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders--folder_id--photos--id-"></code></pre>
</span>
<form id="form-GETapi-folders--folder_id--photos--id-" data-method="GET"
      data-path="api/folders/{folder_id}/photos/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-folders--folder_id--photos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-folders--folder_id--photos--id-"
                    onclick="tryItOut('GETapi-folders--folder_id--photos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-folders--folder_id--photos--id-"
                    onclick="cancelTryOut('GETapi-folders--folder_id--photos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-folders--folder_id--photos--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/folders/{folder_id}/photos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-folders--folder_id--photos--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-folders--folder_id--photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-folders--folder_id--photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="GETapi-folders--folder_id--photos--id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-folders--folder_id--photos--id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                    </form>

                    <h2 id="folders-PUTapi-folders--folder_id--photos--id-">Update a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Updates a photo inside folder.</p>

<span id="example-requests-PUTapi-folders--folder_id--photos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "photo=@/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/phpNo0Dwb" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-folders--folder_id--photos--id-">
</span>
<span id="execution-results-PUTapi-folders--folder_id--photos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-folders--folder_id--photos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-folders--folder_id--photos--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-folders--folder_id--photos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-folders--folder_id--photos--id-"></code></pre>
</span>
<form id="form-PUTapi-folders--folder_id--photos--id-" data-method="PUT"
      data-path="api/folders/{folder_id}/photos/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-folders--folder_id--photos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-folders--folder_id--photos--id-"
                    onclick="tryItOut('PUTapi-folders--folder_id--photos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-folders--folder_id--photos--id-"
                    onclick="cancelTryOut('PUTapi-folders--folder_id--photos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-folders--folder_id--photos--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/folders/{folder_id}/photos/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/folders/{folder_id}/photos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-folders--folder_id--photos--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-folders--folder_id--photos--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-folders--folder_id--photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="PUTapi-folders--folder_id--photos--id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-folders--folder_id--photos--id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
               name="photo"                data-endpoint="PUTapi-folders--folder_id--photos--id-"
               value=""
               data-component="body">
    <br>
<p>The photo to upload. Example: <code>/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/phpNo0Dwb</code></p>
        </div>
        </form>

                    <h2 id="folders-DELETEapi-folders--folder_id--photos--id-">Delete a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Deletes a photo. Deletes all references.</p>

<span id="example-requests-DELETEapi-folders--folder_id--photos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-folders--folder_id--photos--id-">
</span>
<span id="execution-results-DELETEapi-folders--folder_id--photos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-folders--folder_id--photos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-folders--folder_id--photos--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-folders--folder_id--photos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-folders--folder_id--photos--id-"></code></pre>
</span>
<form id="form-DELETEapi-folders--folder_id--photos--id-" data-method="DELETE"
      data-path="api/folders/{folder_id}/photos/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-folders--folder_id--photos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-folders--folder_id--photos--id-"
                    onclick="tryItOut('DELETEapi-folders--folder_id--photos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-folders--folder_id--photos--id-"
                    onclick="cancelTryOut('DELETEapi-folders--folder_id--photos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-folders--folder_id--photos--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/folders/{folder_id}/photos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-folders--folder_id--photos--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-folders--folder_id--photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-folders--folder_id--photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="DELETEapi-folders--folder_id--photos--id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-folders--folder_id--photos--id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                    </form>

                    <h2 id="folders-GETapi-folders--folder_id--references--photoReference_id-">Show a photo reference</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a photo reference.</p>

<span id="example-requests-GETapi-folders--folder_id--references--photoReference_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/references/00aefb4b-1a3e-4e60-abe5-65cdd28ef799" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/references/00aefb4b-1a3e-4e60-abe5-65cdd28ef799"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-folders--folder_id--references--photoReference_id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-folders--folder_id--references--photoReference_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-folders--folder_id--references--photoReference_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders--folder_id--references--photoReference_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-folders--folder_id--references--photoReference_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders--folder_id--references--photoReference_id-"></code></pre>
</span>
<form id="form-GETapi-folders--folder_id--references--photoReference_id-" data-method="GET"
      data-path="api/folders/{folder_id}/references/{photoReference_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-folders--folder_id--references--photoReference_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-folders--folder_id--references--photoReference_id-"
                    onclick="tryItOut('GETapi-folders--folder_id--references--photoReference_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-folders--folder_id--references--photoReference_id-"
                    onclick="cancelTryOut('GETapi-folders--folder_id--references--photoReference_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-folders--folder_id--references--photoReference_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/folders/{folder_id}/references/{photoReference_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-folders--folder_id--references--photoReference_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-folders--folder_id--references--photoReference_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-folders--folder_id--references--photoReference_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="GETapi-folders--folder_id--references--photoReference_id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>photoReference_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="photoReference_id"                data-endpoint="GETapi-folders--folder_id--references--photoReference_id-"
               value="00aefb4b-1a3e-4e60-abe5-65cdd28ef799"
               data-component="url">
    <br>
<p>The ID of the photoReference. Example: <code>00aefb4b-1a3e-4e60-abe5-65cdd28ef799</code></p>
            </div>
                    </form>

                    <h2 id="folders-POSTapi-folders--folder_id--photos--photo_id-">Add a photo to a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Adds a photo to a folder. Creates a new reference.</p>

<span id="example-requests-POSTapi-folders--folder_id--photos--photo_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-folders--folder_id--photos--photo_id-">
</span>
<span id="execution-results-POSTapi-folders--folder_id--photos--photo_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-folders--folder_id--photos--photo_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folders--folder_id--photos--photo_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-folders--folder_id--photos--photo_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folders--folder_id--photos--photo_id-"></code></pre>
</span>
<form id="form-POSTapi-folders--folder_id--photos--photo_id-" data-method="POST"
      data-path="api/folders/{folder_id}/photos/{photo_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-folders--folder_id--photos--photo_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-folders--folder_id--photos--photo_id-"
                    onclick="tryItOut('POSTapi-folders--folder_id--photos--photo_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-folders--folder_id--photos--photo_id-"
                    onclick="cancelTryOut('POSTapi-folders--folder_id--photos--photo_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-folders--folder_id--photos--photo_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/folders/{folder_id}/photos/{photo_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-folders--folder_id--photos--photo_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-folders--folder_id--photos--photo_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-folders--folder_id--photos--photo_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="POSTapi-folders--folder_id--photos--photo_id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>photo_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="photo_id"                data-endpoint="POSTapi-folders--folder_id--photos--photo_id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                    </form>

                    <h2 id="folders-DELETEapi-folders--folder_id--references--photoReference_id-">Remove a photo from a folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Removes a photo from a folder. Deletes the reference.</p>

<span id="example-requests-DELETEapi-folders--folder_id--references--photoReference_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/references/00aefb4b-1a3e-4e60-abe5-65cdd28ef799" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/folders/0ac26e36-a229-4e23-b05f-5a7ad1dbe346/references/00aefb4b-1a3e-4e60-abe5-65cdd28ef799"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-folders--folder_id--references--photoReference_id-">
</span>
<span id="execution-results-DELETEapi-folders--folder_id--references--photoReference_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-folders--folder_id--references--photoReference_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-folders--folder_id--references--photoReference_id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-folders--folder_id--references--photoReference_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-folders--folder_id--references--photoReference_id-"></code></pre>
</span>
<form id="form-DELETEapi-folders--folder_id--references--photoReference_id-" data-method="DELETE"
      data-path="api/folders/{folder_id}/references/{photoReference_id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-folders--folder_id--references--photoReference_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-folders--folder_id--references--photoReference_id-"
                    onclick="tryItOut('DELETEapi-folders--folder_id--references--photoReference_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-folders--folder_id--references--photoReference_id-"
                    onclick="cancelTryOut('DELETEapi-folders--folder_id--references--photoReference_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-folders--folder_id--references--photoReference_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/folders/{folder_id}/references/{photoReference_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-folders--folder_id--references--photoReference_id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-folders--folder_id--references--photoReference_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-folders--folder_id--references--photoReference_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="DELETEapi-folders--folder_id--references--photoReference_id-"
               value="0ac26e36-a229-4e23-b05f-5a7ad1dbe346"
               data-component="url">
    <br>
<p>The ID of the folder. Example: <code>0ac26e36-a229-4e23-b05f-5a7ad1dbe346</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>photoReference_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="photoReference_id"                data-endpoint="DELETEapi-folders--folder_id--references--photoReference_id-"
               value="00aefb4b-1a3e-4e60-abe5-65cdd28ef799"
               data-component="url">
    <br>
<p>The ID of the photoReference. Example: <code>00aefb4b-1a3e-4e60-abe5-65cdd28ef799</code></p>
            </div>
                    </form>

                <h1 id="photos">Photos</h1>

    <p>Class OriginalPhotosController</p>

                                <h2 id="photos-GETapi-photos">Index all photos</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a list of all photos.</p>

<span id="example-requests-GETapi-photos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/photos" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/photos"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-photos">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-photos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-photos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-photos" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-photos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-photos"></code></pre>
</span>
<form id="form-GETapi-photos" data-method="GET"
      data-path="api/photos"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-photos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-photos"
                    onclick="tryItOut('GETapi-photos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-photos"
                    onclick="cancelTryOut('GETapi-photos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-photos" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/photos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-photos"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="photos-POSTapi-photos">Store a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Creates a new photo and returns it.</p>

<span id="example-requests-POSTapi-photos">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/photos" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "photo=@/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/phpKybMvz" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/photos"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-photos">
</span>
<span id="execution-results-POSTapi-photos" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-photos"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-photos" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-photos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-photos"></code></pre>
</span>
<form id="form-POSTapi-photos" data-method="POST"
      data-path="api/photos"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-photos', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-photos"
                    onclick="tryItOut('POSTapi-photos');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-photos"
                    onclick="cancelTryOut('POSTapi-photos');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-photos" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/photos</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-photos"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-photos"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-photos"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
               name="photo"                data-endpoint="POSTapi-photos"
               value=""
               data-component="body">
    <br>
<p>The photo to upload. Example: <code>/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/phpKybMvz</code></p>
        </div>
        </form>

                    <h2 id="photos-GETapi-photos--id-">Show a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a photo.</p>

<span id="example-requests-GETapi-photos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-photos--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-photos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-photos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-photos--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-photos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-photos--id-"></code></pre>
</span>
<form id="form-GETapi-photos--id-" data-method="GET"
      data-path="api/photos/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-photos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-photos--id-"
                    onclick="tryItOut('GETapi-photos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-photos--id-"
                    onclick="cancelTryOut('GETapi-photos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-photos--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/photos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-photos--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-photos--id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                    </form>

                    <h2 id="photos-PUTapi-photos--id-">Update a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Updates a photo and returns it.</p>

<span id="example-requests-PUTapi-photos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "photo=@/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/php2D00rU" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-photos--id-">
</span>
<span id="execution-results-PUTapi-photos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-photos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-photos--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-photos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-photos--id-"></code></pre>
</span>
<form id="form-PUTapi-photos--id-" data-method="PUT"
      data-path="api/photos/{id}"
      data-authed="1"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-photos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-photos--id-"
                    onclick="tryItOut('PUTapi-photos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-photos--id-"
                    onclick="cancelTryOut('PUTapi-photos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-photos--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/photos/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/photos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-photos--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-photos--id-"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-photos--id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>photo</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
                <input type="file" style="display: none"
               name="photo"                data-endpoint="PUTapi-photos--id-"
               value=""
               data-component="body">
    <br>
<p>The photo to upload. Example: <code>/private/var/folders/n8/fsfl19wj09d3snhz3hpp_zgr0000gn/T/php2D00rU</code></p>
        </div>
        </form>

                    <h2 id="photos-DELETEapi-photos--id-">Delete a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Deletes a photo.</p>

<span id="example-requests-DELETEapi-photos--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-photos--id-">
</span>
<span id="execution-results-DELETEapi-photos--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-photos--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-photos--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-photos--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-photos--id-"></code></pre>
</span>
<form id="form-DELETEapi-photos--id-" data-method="DELETE"
      data-path="api/photos/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-photos--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-photos--id-"
                    onclick="tryItOut('DELETEapi-photos--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-photos--id-"
                    onclick="cancelTryOut('DELETEapi-photos--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-photos--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/photos/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-photos--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-photos--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-photos--id-"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                    </form>

                    <h2 id="photos-GETapi-photos--photo_id--download">Download a photo</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a photo file.</p>

<span id="example-requests-GETapi-photos--photo_id--download">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632/download" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/photos/033e5e3e-e16f-4563-97d5-86333a3dc632/download"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-photos--photo_id--download">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-photos--photo_id--download" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-photos--photo_id--download"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-photos--photo_id--download" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-photos--photo_id--download" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-photos--photo_id--download"></code></pre>
</span>
<form id="form-GETapi-photos--photo_id--download" data-method="GET"
      data-path="api/photos/{photo_id}/download"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-photos--photo_id--download', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-photos--photo_id--download"
                    onclick="tryItOut('GETapi-photos--photo_id--download');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-photos--photo_id--download"
                    onclick="cancelTryOut('GETapi-photos--photo_id--download');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-photos--photo_id--download" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/photos/{photo_id}/download</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-photos--photo_id--download"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-photos--photo_id--download"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-photos--photo_id--download"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>photo_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="photo_id"                data-endpoint="GETapi-photos--photo_id--download"
               value="033e5e3e-e16f-4563-97d5-86333a3dc632"
               data-component="url">
    <br>
<p>The ID of the photo. Example: <code>033e5e3e-e16f-4563-97d5-86333a3dc632</code></p>
            </div>
                    </form>

                <h1 id="shared-folders">Shared Folders</h1>

    <p>Class SharedFoldersController</p>

                                <h2 id="shared-folders-GETapi-shared">Index all shared folders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a list of all shared folders.</p>

<span id="example-requests-GETapi-shared">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/shared" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shared">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shared" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shared"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shared" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shared" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shared"></code></pre>
</span>
<form id="form-GETapi-shared" data-method="GET"
      data-path="api/shared"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shared', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shared"
                    onclick="tryItOut('GETapi-shared');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shared"
                    onclick="cancelTryOut('GETapi-shared');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shared" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shared</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-shared"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-shared"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-shared"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="shared-folders-POSTapi-shared">Store a new shared folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Creates a new shared folder and returns it. The folder must be owned by the authenticated user.</p>

<span id="example-requests-POSTapi-shared">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/shared" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"folder_id\": \"1\",
    \"is_public\": false,
    \"is_password_protected\": false,
    \"password\": \"password\",
    \"emails\": [
        \"test@example.com\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "folder_id": "1",
    "is_public": false,
    "is_password_protected": false,
    "password": "password",
    "emails": [
        "test@example.com"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-shared">
</span>
<span id="execution-results-POSTapi-shared" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-shared"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-shared" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-shared" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-shared"></code></pre>
</span>
<form id="form-POSTapi-shared" data-method="POST"
      data-path="api/shared"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-shared', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-shared"
                    onclick="tryItOut('POSTapi-shared');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-shared"
                    onclick="cancelTryOut('POSTapi-shared');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-shared" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/shared</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-shared"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-shared"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-shared"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="POSTapi-shared"
               value="1"
               data-component="body">
    <br>
<p>The ID of the folder to share. This field is required and must be a valid folder ID. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-shared" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="POSTapi-shared"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-shared" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="POSTapi-shared"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the folder is public or not. If the folder is public, it will be accessible by anyone with the link. If the folder is not public, it will be accessible only by the emails provided. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_password_protected</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-shared" style="display: none">
            <input type="radio" name="is_password_protected"
                   value="true"
                   data-endpoint="POSTapi-shared"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-shared" style="display: none">
            <input type="radio" name="is_password_protected"
                   value="false"
                   data-endpoint="POSTapi-shared"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the folder is password protected or not. If the folder is password protected, it will be accessible only by the emails provided and the password. If the folder is not password protected, it will be accessible only by the emails provided authorized by email code. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTapi-shared"
               value="password"
               data-component="body">
    <br>
<p>The password to protect the folder with. This field is required if the folder is password protected. This field is required when <code>is_password_protected</code> is <code>true</code>. Example: <code>password</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emails</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="emails[0]"                data-endpoint="POSTapi-shared"
               data-component="body">
        <input type="text" style="display: none"
               name="emails[1]"                data-endpoint="POSTapi-shared"
               data-component="body">
    <br>
<p>The email to share the folder with. This field is required and must be a valid email. Must be a valid email address.</p>
        </div>
        </form>

                    <h2 id="shared-folders-GETapi-shared--id-">Show a shared folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a shared folder.</p>

<span id="example-requests-GETapi-shared--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shared--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shared--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shared--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shared--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shared--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shared--id-"></code></pre>
</span>
<form id="form-GETapi-shared--id-" data-method="GET"
      data-path="api/shared/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shared--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shared--id-"
                    onclick="tryItOut('GETapi-shared--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shared--id-"
                    onclick="cancelTryOut('GETapi-shared--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shared--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shared/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-shared--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-shared--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-shared--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-shared--id-"
               value="29a220dd-6988-4ecf-a781-9e38e738c77f"
               data-component="url">
    <br>
<p>The ID of the shared. Example: <code>29a220dd-6988-4ecf-a781-9e38e738c77f</code></p>
            </div>
                    </form>

                    <h2 id="shared-folders-PUTapi-shared--id-">Update a shared folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Updates a shared folder and returns it.</p>

<span id="example-requests-PUTapi-shared--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"folder_id\": \"1\",
    \"is_public\": false,
    \"is_password_protected\": false,
    \"password\": \"password\",
    \"emails\": [
        \"test@example.com\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "folder_id": "1",
    "is_public": false,
    "is_password_protected": false,
    "password": "password",
    "emails": [
        "test@example.com"
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-shared--id-">
</span>
<span id="execution-results-PUTapi-shared--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-shared--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-shared--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-shared--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-shared--id-"></code></pre>
</span>
<form id="form-PUTapi-shared--id-" data-method="PUT"
      data-path="api/shared/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-shared--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-shared--id-"
                    onclick="tryItOut('PUTapi-shared--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-shared--id-"
                    onclick="cancelTryOut('PUTapi-shared--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-shared--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/shared/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/shared/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-shared--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-shared--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-shared--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-shared--id-"
               value="29a220dd-6988-4ecf-a781-9e38e738c77f"
               data-component="url">
    <br>
<p>The ID of the shared. Example: <code>29a220dd-6988-4ecf-a781-9e38e738c77f</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>folder_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="folder_id"                data-endpoint="PUTapi-shared--id-"
               value="1"
               data-component="body">
    <br>
<p>The ID of the folder to share. This field is required and must be a valid folder ID. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_public</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-shared--id-" style="display: none">
            <input type="radio" name="is_public"
                   value="true"
                   data-endpoint="PUTapi-shared--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-shared--id-" style="display: none">
            <input type="radio" name="is_public"
                   value="false"
                   data-endpoint="PUTapi-shared--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the folder is public or not. If the folder is public, it will be accessible by anyone with the link. If the folder is not public, it will be accessible only by the emails provided. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_password_protected</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-shared--id-" style="display: none">
            <input type="radio" name="is_password_protected"
                   value="true"
                   data-endpoint="PUTapi-shared--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-shared--id-" style="display: none">
            <input type="radio" name="is_password_protected"
                   value="false"
                   data-endpoint="PUTapi-shared--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Whether the folder is password protected or not. If the folder is password protected, it will be accessible only by the emails provided and the password. If the folder is not password protected, it will be accessible only by the emails provided authorized by email code. Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="PUTapi-shared--id-"
               value="password"
               data-component="body">
    <br>
<p>The password to protect the folder with. This field is required if the folder is password protected. This field is required when <code>is_password_protected</code> is <code>true</code>. Example: <code>password</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>emails</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="emails[0]"                data-endpoint="PUTapi-shared--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="emails[1]"                data-endpoint="PUTapi-shared--id-"
               data-component="body">
    <br>
<p>The email to share the folder with. This field is required and must be a valid email. Must be a valid email address.</p>
        </div>
        </form>

                    <h2 id="shared-folders-DELETEapi-shared--id-">Delete a shared folder</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Deletes a shared folder.</p>

<span id="example-requests-DELETEapi-shared--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-shared--id-">
</span>
<span id="execution-results-DELETEapi-shared--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-shared--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-shared--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-shared--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-shared--id-"></code></pre>
</span>
<form id="form-DELETEapi-shared--id-" data-method="DELETE"
      data-path="api/shared/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-shared--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-shared--id-"
                    onclick="tryItOut('DELETEapi-shared--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-shared--id-"
                    onclick="cancelTryOut('DELETEapi-shared--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-shared--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/shared/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-shared--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-shared--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-shared--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-shared--id-"
               value="29a220dd-6988-4ecf-a781-9e38e738c77f"
               data-component="url">
    <br>
<p>The ID of the shared. Example: <code>29a220dd-6988-4ecf-a781-9e38e738c77f</code></p>
            </div>
                    </form>

                                <h2 id="shared-folders-shared-folder-emails">Shared Folder Emails</h2>
                                                    <h2 id="shared-folders-GETapi-shared--shared_id--emails">Index all shared folder emails</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Returns a list of all shared folder emails.</p>

<span id="example-requests-GETapi-shared--shared_id--emails">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f/emails" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f/emails"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shared--shared_id--emails">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shared--shared_id--emails" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shared--shared_id--emails"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shared--shared_id--emails" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-shared--shared_id--emails" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shared--shared_id--emails"></code></pre>
</span>
<form id="form-GETapi-shared--shared_id--emails" data-method="GET"
      data-path="api/shared/{shared_id}/emails"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shared--shared_id--emails', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shared--shared_id--emails"
                    onclick="tryItOut('GETapi-shared--shared_id--emails');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shared--shared_id--emails"
                    onclick="cancelTryOut('GETapi-shared--shared_id--emails');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shared--shared_id--emails" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shared/{shared_id}/emails</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-shared--shared_id--emails"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-shared--shared_id--emails"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-shared--shared_id--emails"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>shared_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="shared_id"                data-endpoint="GETapi-shared--shared_id--emails"
               value="29a220dd-6988-4ecf-a781-9e38e738c77f"
               data-component="url">
    <br>
<p>The ID of the shared. Example: <code>29a220dd-6988-4ecf-a781-9e38e738c77f</code></p>
            </div>
                    </form>

                    <h2 id="shared-folders-POSTapi-shared--shared_id--emails">Share a folder with an email</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Creates a new shared folder email and returns it. The shared folder must be owned by the authenticated user.</p>

<span id="example-requests-POSTapi-shared--shared_id--emails">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f/emails" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"test@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f/emails"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "test@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-shared--shared_id--emails">
</span>
<span id="execution-results-POSTapi-shared--shared_id--emails" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-shared--shared_id--emails"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-shared--shared_id--emails" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-shared--shared_id--emails" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-shared--shared_id--emails"></code></pre>
</span>
<form id="form-POSTapi-shared--shared_id--emails" data-method="POST"
      data-path="api/shared/{shared_id}/emails"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-shared--shared_id--emails', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-shared--shared_id--emails"
                    onclick="tryItOut('POSTapi-shared--shared_id--emails');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-shared--shared_id--emails"
                    onclick="cancelTryOut('POSTapi-shared--shared_id--emails');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-shared--shared_id--emails" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/shared/{shared_id}/emails</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-shared--shared_id--emails"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-shared--shared_id--emails"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-shared--shared_id--emails"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>shared_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="shared_id"                data-endpoint="POSTapi-shared--shared_id--emails"
               value="29a220dd-6988-4ecf-a781-9e38e738c77f"
               data-component="url">
    <br>
<p>The ID of the shared. Example: <code>29a220dd-6988-4ecf-a781-9e38e738c77f</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTapi-shared--shared_id--emails"
               value="test@example.com"
               data-component="body">
    <br>
<p>The email to share the folder with. This field is required and must be a valid email. Must be a valid email address. Example: <code>test@example.com</code></p>
        </div>
        </form>

                    <h2 id="shared-folders-DELETEapi-shared--shared_id--emails--id-">Remove a shared folder email</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Removes a shared folder email.</p>

<span id="example-requests-DELETEapi-shared--shared_id--emails--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f/emails/nostrum" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://167.172.172.251/api/shared/29a220dd-6988-4ecf-a781-9e38e738c77f/emails/nostrum"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-shared--shared_id--emails--id-">
</span>
<span id="execution-results-DELETEapi-shared--shared_id--emails--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-shared--shared_id--emails--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-shared--shared_id--emails--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-shared--shared_id--emails--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-shared--shared_id--emails--id-"></code></pre>
</span>
<form id="form-DELETEapi-shared--shared_id--emails--id-" data-method="DELETE"
      data-path="api/shared/{shared_id}/emails/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-shared--shared_id--emails--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-shared--shared_id--emails--id-"
                    onclick="tryItOut('DELETEapi-shared--shared_id--emails--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-shared--shared_id--emails--id-"
                    onclick="cancelTryOut('DELETEapi-shared--shared_id--emails--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-shared--shared_id--emails--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/shared/{shared_id}/emails/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-shared--shared_id--emails--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-shared--shared_id--emails--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-shared--shared_id--emails--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>shared_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="shared_id"                data-endpoint="DELETEapi-shared--shared_id--emails--id-"
               value="29a220dd-6988-4ecf-a781-9e38e738c77f"
               data-component="url">
    <br>
<p>The ID of the shared. Example: <code>29a220dd-6988-4ecf-a781-9e38e738c77f</code></p>
            </div>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-shared--shared_id--emails--id-"
               value="nostrum"
               data-component="url">
    <br>
<p>The ID of the email. Example: <code>nostrum</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
