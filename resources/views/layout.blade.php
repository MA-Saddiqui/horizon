<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/vendor/horizon/img/favicon.png') }}">

    <title>Horizon{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>

    <!-- Style sheets-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="{{ asset(mix($cssFile, 'vendor/horizon')) }}" rel="stylesheet">
</head>
<body>
<div id="horizon" v-cloak>
    <alert :message="alert.message"
           :type="alert.type"
           :auto-close="alert.autoClose"
           :confirmation-proceed="alert.confirmationProceed"
           :confirmation-cancel="alert.confirmationCancel"
           v-if="alert.type"></alert>

    <div class="container mb-5">
        <div class="d-flex align-items-center py-4 header">
            <img src="{{asset('pdf/img/logo.png')}}" style="width: 200px" class="logo" alt="">


            <button class="btn btn-outline-primary ml-auto" :class="{active: autoLoadsNewEntries}" v-on:click.prevent="autoLoadNewEntries" title="Auto Load Entries">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon fill-primary">
                    <path d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z"></path>
                </svg>
            </button>
            <button class="btn btn-danger ml-1 mr-0" title="Delete All the previous Records" :class="{active: autoLoadsNewEntries}" v-on:click.prevent="autoLoadNewEntries" title="Auto Load Entries">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="icon" style="fill: white" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 473 473" style="enable-background:new 0 0 473 473;" xml:space="preserve">
                    <g>
                        <path d="M324.285,215.015V128h20V38h-98.384V0H132.669v38H34.285v90h20v305h161.523c23.578,24.635,56.766,40,93.477,40
                            c71.368,0,129.43-58.062,129.43-129.43C438.715,277.276,388.612,222.474,324.285,215.015z M294.285,215.015
                            c-18.052,2.093-34.982,7.911-50,16.669V128h50V215.015z M162.669,30h53.232v8h-53.232V30z M64.285,68h250v30h-250V68z M84.285,128
                            h50v275h-50V128z M164.285,403V128h50v127.768c-21.356,23.089-34.429,53.946-34.429,87.802c0,21.411,5.231,41.622,14.475,59.43
                            H164.285z M309.285,443c-54.826,0-99.429-44.604-99.429-99.43s44.604-99.429,99.429-99.429s99.43,44.604,99.43,99.429
                            S364.111,443,309.285,443z"/>
                        <polygon points="342.248,289.395 309.285,322.358 276.323,289.395 255.11,310.608 288.073,343.571 255.11,376.533 276.323,397.746
                            309.285,364.783 342.248,397.746 363.461,376.533 330.498,343.571 363.461,310.608 	"/>
                    </g>
                    <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                </svg>
            </button>
        </div>

        <div class="row mt-4">
            <div class="col-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <router-link active-class="active" to="/dashboard" class="nav-link d-flex align-items-center pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 2v12h16V5H2zm8 3l4 5H6l4-5z"></path>
                            </svg>
                            <span>Dashboard</span>
                        </router-link>

                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/upload-zip" class="nav-link d-flex align-items-center pt-0">
                            <svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="XMLID_1271_"><rect height="19.1" id="XMLID_446_" width="227.1" x="120.3" y="158.6"/><rect height="19.1" id="XMLID_445_" width="227.1" x="120.3" y="189.6"/><rect height="19.1" id="XMLID_444_" width="227.1" x="120.3" y="220.7"/><rect height="19.1" id="XMLID_443_" width="227.1" x="120.3" y="251.7"/><rect height="19.1" id="XMLID_442_" width="176.5" x="120.3" y="282.7"/><path d="M456.1,75.1L397.6,7.3c-1.8-1.8-4.9-1.8-6.7,0l-58.5,67.8c-2.6,2.6-0.6,6.7,3.3,6.7h27.4V135h62.1V81.8   h27.4C456.7,81.8,458.7,77.7,456.1,75.1z" id="XMLID_441_"/><rect height="24.2" id="XMLID_440_" width="62.1" x="363.2" y="144.6"/><path d="M363.2,187.3c0,2.2,2,4,4.5,4h53.1c2.5,0,4.5-1.8,4.5-4v-8.9h-62.1V187.3z" id="XMLID_439_"/><path d="M386.7,464.2c0,15.8-12.8,28.6-28.6,28.6H109.5c-15.8,0-28.6-12.8-28.6-28.6v-8.8H67.7V469   c0,20.5,16.6,37,37,37h258.1c20.5,0,37-16.6,37-37V200.4h-13.2V464.2z" id="XMLID_438_"/><path d="M80.9,110.3c0-15.8,12.8-28.6,28.6-28.6h213.2c-1.4-4.4-0.3-9.3,3-12.7l0.4-0.4H104.8   c-20.5,0-37,16.6-37,37V333h13.2V110.3z" id="XMLID_437_"/><path d="M241.6,372.3h-13v21.2h13c3.7,0,6.5-1,8.4-3c1.9-2,2.8-4.5,2.8-7.5s-0.9-5.6-2.8-7.6   C248.1,373.3,245.3,372.3,241.6,372.3z" id="XMLID_436_"/><path d="M345.4,394.3L345.4,394.3c0-28.7-23.3-52.1-52.1-52.1H54.7v104.1h238.7   C322.1,446.3,345.4,423,345.4,394.3z M179.6,424.3h-42.2V418l29.3-45.7h-29.1v-8h40.9v6l-29.4,46h30.5V424.3z M202.7,424.3h-10v-60   h10V424.3z M257.2,396.4c-3.7,3.4-8.9,5.1-15.6,5.1h-13v22.7h-10v-60h23c6.6,0,11.8,1.7,15.6,5.1c3.8,3.4,5.6,7.9,5.6,13.5   C262.8,388.5,260.9,393,257.2,396.4z" id="XMLID_1272_"/></g></svg>
                            <span>Upload Zip</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/monitoring" class="nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                            </svg>
                            <span>Monitoring</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/metrics" class="nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M1 10h3v10H1V10zM6 0h3v20H6V0zm5 8h3v12h-3V8zm5-4h3v16h-3V4z"></path>
                            </svg>
                            <span>Metrics</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/batches" class="nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M1 1h18v2H1V1zm0 8h18v2H1V9zm0 8h18v2H1v-2zM1 5h18v2H1V5zm0 8h18v2H1v-2z"/>
                            </svg>
                            <span>Batches</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/jobs/pending" class="nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6h2v8H7V6zm4 0h2v8h-2V6z"/>
                            </svg>
                            <span>Pending Jobs</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/jobs/completed" class="nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z"></path>
                            </svg>
                            <span>Completed Jobs</span>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link active-class="active" to="/failed" class="nav-link d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z"></path>
                            </svg>
                            <span>Failed Jobs</span>
                        </router-link>
                    </li>
                </ul>
            </div>

            <div class="col-10">
                @if (! $assetsAreCurrent)
                    <div class="alert alert-warning">
                        The published Horizon assets are not up-to-date with the installed version. To update, run:<br/><code>php artisan horizon:publish</code>
                    </div>
                @endif

                @if ($isDownForMaintenance)
                    <div class="alert alert-warning">
                        This application is in "maintenance mode". Queued jobs may not be processed unless your worker is using the "force" flag.
                    </div>
                @endif

                <router-view></router-view>
            </div>
        </div>
    </div>
</div>

<!-- Global Horizon Object -->
<script>
    window.Horizon = @json($horizonScriptVariables);
</script>

<script src="{{asset(mix('app.js', 'vendor/horizon'))}}"></script>
</body>
</html>
