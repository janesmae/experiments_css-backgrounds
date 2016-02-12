<html>

<!--
- Copyright (c) 2009-2016 Jaan Jänesmäe
- See LICENSE for license info.
-->

<head>
    <title>Selection Ver. 1</title>
    <style type="text/css">
        body {
            text-align: justify;
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 12px;
            color: #000;
            margin: 0;
            min-width: 900px;
            background: #fff;
        }

        html, div {
            padding: 0;
            margin: 10px auto;
            width: 800px;
        }

        /* Begin selection color change */
        /* - Works currently with FF, Chrome and Safari */

        /* Red */
        #seldiv_r::selection {
            background: red;
            color: white;
        }

        #seldiv_r::-moz-selection {
            background: red;
            color: white;
        }

        /* Green*/
        #seldiv_g::selection {
            background: green;
            color: white;
        }

        #seldiv_g::-moz-selection {
            background: green;
            color: white;
        }

        /* End selection color change */
    </style>
</head>
<body>
<div>
    <b>Go on and try selecting some of the following text:</b><br/><b class="small">Added: Nov 8, 2009 / FF, Chrome
        &amp; Safari Only / View source for the HowTo ...</b><br/><br/>
    <div id="seldiv_r">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula felis vitae leo
        convallis vel commodo justo feugiat. In nec est enim. In venenatis neque sed magna condimentum non consectetur
        felis aliquet. Integer porttitor nunc ac lacus rutrum sit amet egestas risus porta. Suspendisse mollis dictum
        nulla, eget egestas ante lobortis sit amet. Maecenas condimentum tortor erat. Nullam pharetra, lacus quis
        euismod feugiat, nisi purus venenatis velit, at commodo ante justo nec ipsum. Mauris feugiat dolor eget orci
        semper vel gravida nulla aliquam. Curabitur id lacus ipsum. Aliquam id quam ipsum, id ornare leo. Pellentesque
        habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla quis metus purus, vel
        cursus magna. Vestibulum leo eros, eleifend in vulputate scelerisque, consequat eu ipsum. Phasellus hendrerit
        pharetra quam vulputate semper. Nam pulvinar ligula vel diam ullamcorper rutrum. Morbi id volutpat nisi.
    </div>
    <br/>
    <div id="seldiv_g">Phasellus vitae leo dui. Pellentesque sed nisi vel risus luctus elementum. Ut ornare euismod
        turpis, id tristique lectus sagittis in. Ut tempor, est posuere condimentum fringilla, lorem est dictum dolor,
        vel pellentesque diam leo vel magna. Ut nec euismod mi. Duis bibendum massa posuere urna porttitor et iaculis
        sapien lacinia. Donec dapibus eleifend metus, molestie tempus lorem venenatis id. Donec vitae tristique nisl.
        Nullam facilisis purus nec orci porta auctor. Cum sociis natoque penatibus et magnis dis parturient montes,
        nascetur ridiculus mus. Vestibulum accumsan diam nec nisi fringilla luctus. Maecenas eu placerat ligula. Nunc
        vel neque nunc.
    </div>
</div>
</body>
</html>