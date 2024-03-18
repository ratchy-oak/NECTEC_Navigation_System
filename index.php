<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NECTEC Navigation System</title>
    <script src="https://unpkg.com/html5-qrcode"></script>
</head>
<body>
    <div style="display: flex; justify-content: center; margin-top: 220px;">
        <div id="qr-reader" style="width:500px"></div>
    </div>
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <div id="qr-reader-results"></div>
    </div>

    <script>
        function docReady(fn) {
            if (document.readyState === "complete" || document.readyState === "interactive") {
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function () {
            var myqr = document.getElementById('qr-reader-results')

            function onScanSuccess(decodeText, decodeResult) {
                alert(decodeText, decodeResult)
                myqr.innerHTML = `Scan result : ${decodeText}`
            }

            var htmlscanner = new Html5QrcodeScanner("qr-reader", {fps: 10, qrbox: 250})
            htmlscanner.render(onScanSuccess)
        });
    </script>
</body>
</html>