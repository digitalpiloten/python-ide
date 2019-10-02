<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="index,follow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Python</title>
        <link rel="stylesheet" type="text/css" href="https://libs.digitalpiloten.org/bootstrap/4.3.1/css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="https://libs.digitalpiloten.org/bootswatch/darkly/1.0.0/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="app.css" id="stylesheet">
    </head>
    <body>
        <div class="split left">
            <div class="editor" id="editor"></div>
        </div>
            
        <div class="split right">
            <button style="width:99%;" type="button" onclick="runit()" class="btn btn-primary">Run</button> 
            <hr style="width:97%;">
            <div class="card card-output" style="width:99%;">
                <div class="card-header">
                    Output
                </div>
                <div class="card-body">
                    <code class="output" id="output"></code>
                </div>
            </div>
            <br>
            <div class="card card-canvas" style="width:99%;">
                <div class="card-header">
                    Canvas
                </div>
                <div class="card-body">
                    <div class="canvas" id="canvas"></div>
                </div>
            </div>
            <hr style="width:97%;">
            <button style="width:99%;" type="button" class="btn btn-primary" onclick="downloadPython()">Download</button>
        </div> 
        <form>
        </form>
        <script type="application/javascript" src="https://libs.digitalpiloten.org/jquery/3.4.1/jquery.min.js"></script>
        <script type="application/javascript" src="https://libs.digitalpiloten.org/skulpt/0.0.1/skulpt.min.js"></script> 
        <script type="application/javascript" src="https://libs.digitalpiloten.org/skulpt/0.0.1/skulpt-stdlib.js"></script> 
        <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.18.0/min/vs/loader.js"></script>
        <script type="application/javascript" src="app.js"></script>
        <script type="application/javascript" src="https://libs.digitalpiloten.org/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>