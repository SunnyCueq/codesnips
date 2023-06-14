<script>
    var jdownloader = false;
</script>
<script src="http://127.0.0.1:9666/jdcheck.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var statusElement = document.createElement('p');
        if (jdownloader) {
            statusElement.textContent = "(JDownloader is currently running)";
        } else {
            statusElement.textContent = "(JDownloader is NOT running)";
        }
        document.body.appendChild(statusElement);
    });
</script>
