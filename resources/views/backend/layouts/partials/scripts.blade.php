<script src="{{ asset('backend') }}/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('backend') }}/js/popper.min.js"></script>
<script src="{{ asset('backend') }}/js/tippy-bundle.umd.min.js"></script>
<script src="{{ asset('backend') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/js/apexcharts.min.js"></script>
<script src="{{ asset('backend') }}/js/chartist.min.js"></script>
<script src="{{ asset('backend') }}/js/jquery-jvectormap-2.0.5.min.js"></script>
<script src="{{ asset('backend') }}/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('backend') }}/js/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/js/morris.min.js"></script>
<script src="{{ asset('backend') }}/js/select2.min.js"></script>
<script src="{{ asset('backend') }}/js/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/js/moment.min.js"></script>
<script src="{{ asset('backend') }}/js/jquery-ui.min.js"></script>
<script src="https://unpkg.com/phosphor-icons"></script>
<script src="{{ asset('backend') }}/js/custom-select.js"></script>
<script src="{{ asset('backend') }}/js/custom-select2.js"></script>
<script src="{{ asset('backend') }}/js/waves.js"></script>
<script src="{{ asset('backend') }}/js/dragula.min.js"></script>
<script src="{{ asset('backend') }}/js/appkanban.js"></script>
<script src="{{ asset('backend') }}/js/app.js"></script>
<!-- Code injected by live-server -->
<script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
        (function () {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                        "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                            .valueOf());
                    }
                    parent.appendChild(elem);
                }
            }
            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function (msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    } else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
</script>

@stack('backend_scripts')
