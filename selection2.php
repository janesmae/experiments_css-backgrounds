<html>

<!--
- Copyright (c) 2009-2016 Jaan Jänesmäe
- See LICENSE for license info.
-->

<head>
    <title>Selection Ver. 2</title>
    <style type="text/css">
        /* Begin selection color change */
        /* - Works currently with FF, Chrome and Safari */

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

        #seldiv {
            font-family: monospace;
            font-size: 1.2em;
        }

        .a01::selection {
            background: #FF0000;
            color: #FFF000;
        }

        .a01::-moz-selection {
            background: #FF0000;
            color: #FFF000;
        }

        .a02::selection {
            background: #FF0400;
            color: #FFFE00;
        }

        .a02::-moz-selection {
            background: #FF0400;
            color: #FFEC00;
        }

        .a03::selection {
            background: #FF0800;
            color: #FFE800;
        }

        .a03::-moz-selection {
            background: #FF0800;
            color: #FFE800;
        }

        .a04::selection {
            background: #FF0C00;
            color: #FFE400;
        }

        .a04::-moz-selection {
            background: #FF0C00;
            color: #FFE400;
        }

        .a05::selection {
            background: #FF1000;
            color: #FFE000;
        }

        .a05::-moz-selection {
            background: #FF1000;
            color: #FFE000;
        }

        .a06::selection {
            background: #FF1400;
            color: #FFDC00;
        }

        .a06::-moz-selection {
            background: #FF1400;
            color: #FFDC00;
        }

        .a07::selection {
            background: #FF1800;
            color: #FFD800;
        }

        .a07::-moz-selection {
            background: #FF1800;
            color: #FFD800;
        }

        .a08::selection {
            background: #FF1C00;
            color: #FFD400;
        }

        .a08::-moz-selection {
            background: #FF1C00;
            color: #FFD400;
        }

        .a09::selection {
            background: #FF2000;
            color: #FFD000;
        }

        .a09::-moz-selection {
            background: #FF2000;
            color: #FFD000;
        }

        .a10::selection {
            background: #FF2400;
            color: #FFCC00;
        }

        .a10::-moz-selection {
            background: #FF2400;
            color: #FFCC00;
        }

        .a11::selection {
            background: #FF2800;
            color: #FFC800;
        }

        .a11::-moz-selection {
            background: #FF2800;
            color: #FFC800;
        }

        .a12::selection {
            background: #FF2C00;
            color: #FFC400;
        }

        .a12::-moz-selection {
            background: #FF2C00;
            color: #FFC400;
        }

        .a13::selection {
            background: #FF3000;
            color: #FFC000;
        }

        .a13::-moz-selection {
            background: #FF3000;
            color: #FFC000;
        }

        .a14::selection {
            background: #FF3400;
            color: #FFBC00;
        }

        .a14::-moz-selection {
            background: #FF3400;
            color: #FFBC00;
        }

        .a15::selection {
            background: #FF3800;
            color: #FFB800;
        }

        .a15::-moz-selection {
            background: #FF3800;
            color: #FFB800;
        }

        .a16::selection {
            background: #FF3C00;
            color: #FFB400;
        }

        .a16::-moz-selection {
            background: #FF3C00;
            color: #FFB400;
        }

        .a17::selection {
            background: #FF4000;
            color: #FFB000;
        }

        .a17::-moz-selection {
            background: #FF4000;
            color: #FFB000;
        }

        .a18::selection {
            background: #FF4400;
            color: #FFAC00;
        }

        .a18::-moz-selection {
            background: #FF4400;
            color: #FFAC00;
        }

        .a19::selection {
            background: #FF4800;
            color: #FFA800;
        }

        .a19::-moz-selection {
            background: #FF4800;
            color: #FFA800;
        }

        .a20::selection {
            background: #FF4C00;
            color: #FFA400;
        }

        .a20::-moz-selection {
            background: #FF4C00;
            color: #FFA400;
        }

        .a21::selection {
            background: #FF5000;
            color: #FFA000;
        }

        .a21::-moz-selection {
            background: #FF5000;
            color: #FFA000;
        }

        .a22::selection {
            background: #FF5400;
            color: #FF9C00;
        }

        .a22::-moz-selection {
            background: #FF5400;
            color: #FF9C00;
        }

        .a23::selection {
            background: #FF5800;
            color: #FF9800;
        }

        .a23::-moz-selection {
            background: #FF5800;
            color: #FF9800;
        }

        .a24::selection {
            background: #FF5C00;
            color: #FF9400;
        }

        .a24::-moz-selection {
            background: #FF5C00;
            color: #FF9400;
        }

        .a25::selection {
            background: #FF6000;
            color: #FF9000;
        }

        .a25::-moz-selection {
            background: #FF6000;
            color: #FF9000;
        }

        .a26::selection {
            background: #FF6400;
            color: #FF8C00;
        }

        .a26::-moz-selection {
            background: #FF6400;
            color: #FF8C00;
        }

        .a27::selection {
            background: #FF6800;
            color: #FF8800;
        }

        .a27::-moz-selection {
            background: #FF6800;
            color: #FF8800;
        }

        .a28::selection {
            background: #FF6C00;
            color: #FF8400;
        }

        .a28::-moz-selection {
            background: #FF6C00;
            color: #FF8400;
        }

        .a29::selection {
            background: #FF7000;
            color: #FF8000;
        }

        .a29::-moz-selection {
            background: #FF7000;
            color: #FF8000;
        }

        .a30::selection {
            background: #FF7400;
            color: #FF7C00;
        }

        .a30::-moz-selection {
            background: #FF7400;
            color: #FF7C00;
        }

        .a31::selection {
            background: #FF7800;
            color: #FF7800;
        }

        .a31::-moz-selection {
            background: #FF7800;
            color: #FF7800;
        }

        .a32::selection {
            background: #FF7C00;
            color: #FF7400;
        }

        .a32::-moz-selection {
            background: #FF7C00;
            color: #FF7400;
        }

        .a33::selection {
            background: #FF8000;
            color: #FF7000;
        }

        .a33::-moz-selection {
            background: #FF8000;
            color: #FF7000;
        }

        .a34::selection {
            background: #FF8400;
            color: #FF6C00;
        }

        .a34::-moz-selection {
            background: #FF8400;
            color: #FF6C00;
        }

        .a35::selection {
            background: #FF8800;
            color: #FF6800;
        }

        .a35::-moz-selection {
            background: #FF8800;
            color: #FF6800;
        }

        .a36::selection {
            background: #FF8C00;
            color: #FF6400;
        }

        .a36::-moz-selection {
            background: #FF8C00;
            color: #FF6400;
        }

        .a37::selection {
            background: #FF9000;
            color: #FF6000;
        }

        .a37::-moz-selection {
            background: #FF9000;
            color: #FF6000;
        }

        .a38::selection {
            background: #FF9400;
            color: #FF5C00;
        }

        .a38::-moz-selection {
            background: #FF9400;
            color: #FF5C00;
        }

        .a39::selection {
            background: #FF9800;
            color: #FF5800;
        }

        .a39::-moz-selection {
            background: #FF9800;
            color: #FF5800;
        }

        .a40::selection {
            background: #FF9C00;
            color: #FF5400;
        }

        .a40::-moz-selection {
            background: #FF9C00;
            color: #FF5400;
        }

        .a41::selection {
            background: #FFA000;
            color: #FF5000;
        }

        .a41::-moz-selection {
            background: #FFA000;
            color: #FF5000;
        }

        .a42::selection {
            background: #FFA400;
            color: #FF4C00;
        }

        .a42::-moz-selection {
            background: #FFA400;
            color: #FF4C00;
        }

        .a43::selection {
            background: #FFA800;
            color: #FF4800;
        }

        .a43::-moz-selection {
            background: #FFA800;
            color: #FF4800;
        }

        .a44::selection {
            background: #FFAC00;
            color: #FF4400;
        }

        .a44::-moz-selection {
            background: #FFAC00;
            color: #FF4400;
        }

        .a45::selection {
            background: #FFB000;
            color: #FF4000;
        }

        .a45::-moz-selection {
            background: #FFB000;
            color: #FF4000;
        }

        .a46::selection {
            background: #FFB400;
            color: #FF3C00;
        }

        .a46::-moz-selection {
            background: #FFB400;
            color: #FF3C00;
        }

        .a47::selection {
            background: #FFB800;
            color: #FF3800;
        }

        .a47::-moz-selection {
            background: #FFB800;
            color: #FF3800;
        }

        .a48::selection {
            background: #FFBC00;
            color: #FF3400;
        }

        .a48::-moz-selection {
            background: #FFBC00;
            color: #FF3400;
        }

        .a49::selection {
            background: #FFC000;
            color: #FF3000;
        }

        .a49::-moz-selection {
            background: #FFC000;
            color: #FF3000;
        }

        .a50::selection {
            background: #FFC400;
            color: #FF2C00;
        }

        .a50::-moz-selection {
            background: #FFC400;
            color: #FF2C00;
        }

        .a51::selection {
            background: #FFC800;
            color: #FF2800;
        }

        .a51::-moz-selection {
            background: #FFC800;
            color: #FF2800;
        }

        .a52::selection {
            background: #FFCC00;
            color: #FF2400;
        }

        .a52::-moz-selection {
            background: #FFCC00;
            color: #FF2400;
        }

        .a53::selection {
            background: #FFD000;
            color: #FF2000;
        }

        .a53::-moz-selection {
            background: #FFD000;
            color: #FF2000;
        }

        .a54::selection {
            background: #FFD400;
            color: #FF1C00;
        }

        .a54::-moz-selection {
            background: #FFD400;
            color: #FF1C00;
        }

        .a55::selection {
            background: #FFD800;
            color: #FF1800;
        }

        .a55::-moz-selection {
            background: #FFD800;
            color: #FF1800;
        }

        .a56::selection {
            background: #FFDC00;
            color: #FF1400;
        }

        .a56::-moz-selection {
            background: #FFDC00;
            color: #FF1400;
        }

        .a57::selection {
            background: #FFE000;
            color: #FF1000;
        }

        .a57::-moz-selection {
            background: #FFE000;
            color: #FF1000;
        }

        .a58::selection {
            background: #FFE400;
            color: #FF0C00;
        }

        .a58::-moz-selection {
            background: #FFE400;
            color: #FF0C00;
        }

        .a59::selection {
            background: #FFE800;
            color: #FF0800;
        }

        .a59::-moz-selection {
            background: #FFE800;
            color: #FF0800;
        }

        .a60::selection {
            background: #FFF000;
            color: #FF0400;
        }

        .a60::-moz-selection {
            background: #FFF000;
            color: #FF0400;
        }

        .a61::selection {
            background: #FFF400;
            color: #FF0000;
        }

        .a61::-moz-selection {
            background: #FFF400;
            color: #FF0000;
        }

    </style>
</head>
<body>
<div>
    <b>Go on and try selecting some of the following text:</b><br/><b class="small">Added: Nov 8, 2009 / FF, Chrome
        &amp; Safari Only / View source for the HowTo ...</b><br/><br/>
    <div id="seldiv">
        <span class="a01">L</span><span class="a02">o</span><span class="a03">r</span><span class="a04">e</span><span
            class="a05">m</span><span class="a06"> </span><span class="a07">i</span><span class="a08">p</span><span
            class="a09">s</span><span class="a10">u</span><span class="a11">m</span><span class="a12"> </span><span
            class="a13">d</span><span class="a14">o</span><span class="a15">l</span><span class="a16">o</span><span
            class="a17">r</span><span class="a18"> </span><span class="a19">s</span><span class="a20">i</span><span
            class="a21">t</span><span class="a22"> </span><span class="a23">a</span><span class="a24">m</span><span
            class="a25">e</span><span class="a26">t</span><span class="a27">,</span><span class="a28"> </span><span
            class="a29">c</span><span class="a30">o</span><span class="a31">n</span><br/>
        <span class="a02">s</span><span class="a03">e</span><span class="a04">c</span><span class="a05">t</span><span
            class="a06">e</span><span class="a07">t</span><span class="a08">u</span><span class="a09">r</span><span
            class="a10"> </span><span class="a11">a</span><span class="a12">d</span><span class="a13">i</span><span
            class="a14">p</span><span class="a15">i</span><span class="a16">s</span><span class="a17">c</span><span
            class="a18">i</span><span class="a19">n</span><span class="a20">g</span><span class="a21"> </span><span
            class="a22">e</span><span class="a23">l</span><span class="a24">i</span><span class="a25">t</span><span
            class="a26">.</span><span class="a27"> </span><span class="a28">V</span><span class="a29">i</span><span
            class="a30">v</span><span class="a31">a</span><span class="a32">m</span><br/>
        <span class="a03">u</span><span class="a04">s</span><span class="a05"> </span><span class="a06">v</span><span
            class="a07">e</span><span class="a08">h</span><span class="a09">i</span><span class="a10">c</span><span
            class="a11">u</span><span class="a12">l</span><span class="a13">a</span><span class="a14"> </span><span
            class="a15">f</span><span class="a16">e</span><span class="a17">l</span><span class="a18">i</span><span
            class="a19">s</span><span class="a20"> </span><span class="a21">v</span><span class="a22">i</span><span
            class="a23">t</span><span class="a24">a</span><span class="a25">e</span><span class="a26"> </span><span
            class="a27">l</span><span class="a28">e</span><span class="a29">o</span><span class="a30"> </span><span
            class="a31">c</span><span class="a32">o</span><span class="a33">n</span><br/>
        <span class="a04">v</span><span class="a05">a</span><span class="a06">l</span><span class="a07">l</span><span
            class="a08">i</span><span class="a09">s</span><span class="a10"> </span><span class="a11">v</span><span
            class="a12">e</span><span class="a13">l</span><span class="a14"> </span><span class="a15">c</span><span
            class="a16">o</span><span class="a17">m</span><span class="a18">m</span><span class="a19">o</span><span
            class="a20">d</span><span class="a21">o</span><span class="a22"> </span><span class="a23">j</span><span
            class="a24">u</span><span class="a25">s</span><span class="a26">t</span><span class="a27">o</span><span
            class="a28"> </span><span class="a29">f</span><span class="a30">e</span><span class="a31">u</span><span
            class="a32">g</span><span class="a33">i</span><span class="a34">a</span><br/>
        <span class="a05">t</span><span class="a06">.</span><span class="a07"> </span><span class="a08">I</span><span
            class="a09">n</span><span class="a10"> </span><span class="a11">n</span><span class="a12">e</span><span
            class="a13">c</span><span class="a14"> </span><span class="a15">e</span><span class="a16">s</span><span
            class="a17">t</span><span class="a18"> </span><span class="a19">e</span><span class="a20">n</span><span
            class="a21">i</span><span class="a22">m</span><span class="a23">.</span><span class="a24"> </span><span
            class="a25">I</span><span class="a26">n</span><span class="a27"> </span><span class="a28">v</span><span
            class="a29">e</span><span class="a30">n</span><span class="a31">e</span><span class="a32">n</span><span
            class="a33">a</span><span class="a34">t</span><span class="a35">i</span><br/>
        <span class="a06">s</span><span class="a07"> </span><span class="a08">n</span><span class="a09">e</span><span
            class="a10">q</span><span class="a11">u</span><span class="a12">e</span><span class="a13"> </span><span
            class="a14">s</span><span class="a15">e</span><span class="a16">d</span><span class="a17"> </span><span
            class="a18">m</span><span class="a19">a</span><span class="a20">g</span><span class="a21">n</span><span
            class="a22">a</span><span class="a23"> </span><span class="a24">c</span><span class="a25">o</span><span
            class="a26">n</span><span class="a27">d</span><span class="a28">i</span><span class="a29">m</span><span
            class="a30">e</span><span class="a31">n</span><span class="a32">t</span><span class="a33">u</span><span
            class="a34">m</span><span class="a35"> </span><span class="a36">n</span><br/>
        <span class="a07">o</span><span class="a08">n</span><span class="a09"> </span><span class="a10">c</span><span
            class="a11">o</span><span class="a12">n</span><span class="a13">s</span><span class="a14">e</span><span
            class="a15">c</span><span class="a16">t</span><span class="a17">e</span><span class="a18">t</span><span
            class="a19">u</span><span class="a20">r</span><span class="a21"> </span><span class="a22">f</span><span
            class="a23">e</span><span class="a24">l</span><span class="a25">i</span><span class="a26">s</span><span
            class="a27"> </span><span class="a28">a</span><span class="a29">l</span><span class="a30">i</span><span
            class="a31">q</span><span class="a32">u</span><span class="a33">e</span><span class="a34">t</span><span
            class="a35">.</span><span class="a36"> </span><span class="a37">I</span><br/>
        <span class="a08">n</span><span class="a09">t</span><span class="a10">e</span><span class="a11">g</span><span
            class="a12">e</span><span class="a13">r</span><span class="a14"> </span><span class="a15">p</span><span
            class="a16">o</span><span class="a17">r</span><span class="a18">t</span><span class="a19">t</span><span
            class="a20">i</span><span class="a21">t</span><span class="a22">o</span><span class="a23">r</span><span
            class="a24"> </span><span class="a25">n</span><span class="a26">u</span><span class="a27">n</span><span
            class="a28">c</span><span class="a29"> </span><span class="a30">a</span><span class="a31">c</span><span
            class="a32"> </span><span class="a33">l</span><span class="a34">a</span><span class="a35">c</span><span
            class="a36">u</span><span class="a37">s</span><span class="a38"> </span><br/>
        <span class="a09">r</span><span class="a10">u</span><span class="a11">t</span><span class="a12">r</span><span
            class="a13">u</span><span class="a14">m</span><span class="a15"> </span><span class="a16">s</span><span
            class="a17">i</span><span class="a18">t</span><span class="a19"> </span><span class="a20">a</span><span
            class="a21">m</span><span class="a22">e</span><span class="a23">t</span><span class="a24"> </span><span
            class="a25">e</span><span class="a26">g</span><span class="a27">e</span><span class="a28">s</span><span
            class="a29">t</span><span class="a30">a</span><span class="a31">s</span><span class="a32"> </span><span
            class="a33">r</span><span class="a34">i</span><span class="a35">s</span><span class="a36">u</span><span
            class="a37">s</span><span class="a38"> </span><span class="a39">p</span><br/>
        <span class="a10">o</span><span class="a11">r</span><span class="a12">t</span><span class="a13">a</span><span
            class="a14">.</span><span class="a15"> </span><span class="a16">S</span><span class="a17">u</span><span
            class="a18">s</span><span class="a19">p</span><span class="a20">e</span><span class="a21">n</span><span
            class="a22">d</span><span class="a23">i</span><span class="a24">s</span><span class="a25">s</span><span
            class="a26">e</span><span class="a27"> </span><span class="a28">m</span><span class="a29">o</span><span
            class="a30">l</span><span class="a31">l</span><span class="a32">i</span><span class="a33">s</span><span
            class="a34"> </span><span class="a35">d</span><span class="a36">i</span><span class="a37">c</span><span
            class="a38">t</span><span class="a39">u</span><span class="a40">m</span><br/>
        <span class="a11">&nbsp;</span><span class="a12">n</span><span class="a13">u</span><span
            class="a14">l</span><span class="a15">l</span><span class="a16">a</span><span class="a17">,</span><span
            class="a18"> </span><span class="a19">e</span><span class="a20">g</span><span class="a21">e</span><span
            class="a22">t</span><span class="a23"> </span><span class="a24">e</span><span class="a25">g</span><span
            class="a26">e</span><span class="a27">s</span><span class="a28">t</span><span class="a29">a</span><span
            class="a30">s</span><span class="a31"> </span><span class="a32">a</span><span class="a33">n</span><span
            class="a34">t</span><span class="a35">e</span><span class="a36"> </span><span class="a37">l</span><span
            class="a38">o</span><span class="a39">b</span><span class="a40">o</span><span class="a41">r</span><br/>
        <span class="a12">t</span><span class="a13">i</span><span class="a14">s</span><span class="a15"> </span><span
            class="a16">s</span><span class="a17">i</span><span class="a18">t</span><span class="a19"> </span><span
            class="a20">a</span><span class="a21">m</span><span class="a22">e</span><span class="a23">t</span><span
            class="a24">.</span><span class="a25"> </span><span class="a26">M</span><span class="a27">a</span><span
            class="a28">e</span><span class="a29">c</span><span class="a30">e</span><span class="a31">n</span><span
            class="a32">a</span><span class="a33">s</span><span class="a34"> </span><span class="a35">c</span><span
            class="a36">o</span><span class="a37">n</span><span class="a38">d</span><span class="a39">i</span><span
            class="a40">m</span><span class="a41">e</span><span class="a42">n</span><br/>
        <span class="a13">t</span><span class="a14">u</span><span class="a15">m</span><span class="a16"> </span><span
            class="a17">t</span><span class="a18">o</span><span class="a19">r</span><span class="a20">t</span><span
            class="a21">o</span><span class="a22">r</span><span class="a23"> </span><span class="a24">e</span><span
            class="a25">r</span><span class="a26">a</span><span class="a27">t</span><span class="a28">.</span><span
            class="a29"> </span><span class="a30">N</span><span class="a31">u</span><span class="a32">l</span><span
            class="a33">l</span><span class="a34">a</span><span class="a35">m</span><span class="a36"> </span><span
            class="a37">p</span><span class="a38">h</span><span class="a39">a</span><span class="a40">r</span><span
            class="a41">e</span><span class="a42">t</span><span class="a43">r</span><br/>
        <span class="a14">a</span><span class="a15">,</span><span class="a16"> </span><span class="a17">l</span><span
            class="a18">a</span><span class="a19">c</span><span class="a20">u</span><span class="a21">s</span><span
            class="a22"> </span><span class="a23">q</span><span class="a24">u</span><span class="a25">i</span><span
            class="a26">s</span><span class="a27"> </span><span class="a28">e</span><span class="a29">u</span><span
            class="a30">i</span><span class="a31">s</span><span class="a32">m</span><span class="a33">o</span><span
            class="a34">d</span><span class="a35"> </span><span class="a36">f</span><span class="a37">e</span><span
            class="a38">u</span><span class="a39">g</span><span class="a40">i</span><span class="a41">a</span><span
            class="a42">t</span><span class="a43">,</span><span class="a44"> </span><br/>
        <span class="a15">n</span><span class="a16">i</span><span class="a17">s</span><span class="a18">i</span><span
            class="a19"> </span><span class="a20">p</span><span class="a21">u</span><span class="a22">r</span><span
            class="a23">u</span><span class="a24">s</span><span class="a25"> </span><span class="a26">v</span><span
            class="a27">e</span><span class="a28">n</span><span class="a29">e</span><span class="a30">n</span><span
            class="a31">a</span><span class="a32">t</span><span class="a33">i</span><span class="a34">s</span><span
            class="a35"> </span><span class="a36">v</span><span class="a37">e</span><span class="a38">l</span><span
            class="a39">i</span><span class="a40">t</span><span class="a41">,</span><span class="a42"> </span><span
            class="a43">a</span><span class="a44">t</span><span class="a45"> </span><br/>
        <span class="a16">c</span><span class="a17">o</span><span class="a18">m</span><span class="a19">m</span><span
            class="a20">o</span><span class="a21">d</span><span class="a22">o</span><span class="a23"> </span><span
            class="a24">a</span><span class="a25">n</span><span class="a26">t</span><span class="a27">e</span><span
            class="a28"> </span><span class="a29">j</span><span class="a30">u</span><span class="a31">s</span><span
            class="a32">t</span><span class="a33">o</span><span class="a34"> </span><span class="a35">n</span><span
            class="a36">e</span><span class="a37">c</span><span class="a38"> </span><span class="a39">i</span><span
            class="a40">p</span><span class="a41">s</span><span class="a42">u</span><span class="a43">m</span><span
            class="a44">.</span><span class="a45"> </span><span class="a46">M</span><br/>
        <span class="a17">a</span><span class="a18">u</span><span class="a19">r</span><span class="a20">i</span><span
            class="a21">s</span><span class="a22"> </span><span class="a23">f</span><span class="a24">e</span><span
            class="a25">u</span><span class="a26">g</span><span class="a27">i</span><span class="a28">a</span><span
            class="a29">t</span><span class="a30"> </span><span class="a31">d</span><span class="a32">o</span><span
            class="a33">l</span><span class="a34">o</span><span class="a35">r</span><span class="a36"> </span><span
            class="a37">e</span><span class="a38">g</span><span class="a39">e</span><span class="a40">t</span><span
            class="a41"> </span><span class="a42">o</span><span class="a43">r</span><span class="a44">c</span><span
            class="a45">i</span><span class="a46"> </span><span class="a47">s</span><br/>
        <span class="a18">e</span><span class="a19">m</span><span class="a20">p</span><span class="a21">e</span><span
            class="a22">r</span><span class="a23"> </span><span class="a24">v</span><span class="a25">e</span><span
            class="a26">l</span><span class="a27"> </span><span class="a28">g</span><span class="a29">r</span><span
            class="a30">a</span><span class="a31">v</span><span class="a32">i</span><span class="a33">d</span><span
            class="a34">a</span><span class="a35"> </span><span class="a36">n</span><span class="a37">u</span><span
            class="a38">l</span><span class="a39">l</span><span class="a40">a</span><span class="a41"> </span><span
            class="a42">a</span><span class="a43">l</span><span class="a44">i</span><span class="a45">q</span><span
            class="a46">u</span><span class="a47">a</span><span class="a48">m</span><br/>
        <span class="a19">.</span><span class="a20"> </span><span class="a21">C</span><span class="a22">u</span><span
            class="a23">r</span><span class="a24">a</span><span class="a25">b</span><span class="a26">i</span><span
            class="a27">t</span><span class="a28">u</span><span class="a29">r</span><span class="a30"> </span><span
            class="a31">i</span><span class="a32">d</span><span class="a33"> </span><span class="a34">l</span><span
            class="a35">a</span><span class="a36">c</span><span class="a37">u</span><span class="a38">s</span><span
            class="a39"> </span><span class="a40">i</span><span class="a41">p</span><span class="a42">s</span><span
            class="a43">u</span><span class="a44">m</span><span class="a45">.</span><span class="a46"> </span><span
            class="a47">A</span><span class="a48">l</span><span class="a49">i</span><br/>
        <span class="a20">q</span><span class="a21">u</span><span class="a22">a</span><span class="a23">m</span><span
            class="a24"> </span><span class="a25">i</span><span class="a26">d</span><span class="a27"> </span><span
            class="a28">q</span><span class="a29">u</span><span class="a30">a</span><span class="a31">m</span><span
            class="a32"> </span><span class="a33">i</span><span class="a34">p</span><span class="a35">s</span><span
            class="a36">u</span><span class="a37">m</span><span class="a38">,</span><span class="a39"> </span><span
            class="a40">i</span><span class="a41">d</span><span class="a42"> </span><span class="a43">o</span><span
            class="a44">r</span><span class="a45">n</span><span class="a46">a</span><span class="a47">r</span><span
            class="a48">e</span><span class="a49"> </span><span class="a50">l</span><br/>
        <span class="a21">e</span><span class="a22">o</span><span class="a23">.</span><span class="a24"> </span><span
            class="a25">P</span><span class="a26">e</span><span class="a27">l</span><span class="a28">l</span><span
            class="a29">e</span><span class="a30">n</span><span class="a31">t</span><span class="a32">e</span><span
            class="a33">s</span><span class="a34">q</span><span class="a35">u</span><span class="a36">e</span><span
            class="a37"> </span><span class="a38">h</span><span class="a39">a</span><span class="a40">b</span><span
            class="a41">i</span><span class="a42">t</span><span class="a43">a</span><span class="a44">n</span><span
            class="a45">t</span><span class="a46"> </span><span class="a47">m</span><span class="a48">o</span><span
            class="a49">r</span><span class="a50">b</span><span class="a51">i</span><br/>
        <span class="a22">&nbsp;</span><span class="a23">t</span><span class="a24">r</span><span
            class="a25">i</span><span class="a26">s</span><span class="a27">t</span><span class="a28">i</span><span
            class="a29">q</span><span class="a30">u</span><span class="a31">e</span><span class="a32"> </span><span
            class="a33">s</span><span class="a34">e</span><span class="a35">n</span><span class="a36">e</span><span
            class="a37">c</span><span class="a38">t</span><span class="a39">u</span><span class="a40">s</span><span
            class="a41"> </span><span class="a42">e</span><span class="a43">t</span><span class="a44"> </span><span
            class="a45">n</span><span class="a46">e</span><span class="a47">t</span><span class="a48">u</span><span
            class="a49">s</span><span class="a50"> </span><span class="a51">e</span><span class="a52">t</span><br/>
        <span class="a23">&nbsp;</span><span class="a24">m</span><span class="a25">a</span><span
            class="a26">l</span><span class="a27">e</span><span class="a28">s</span><span class="a29">u</span><span
            class="a30">a</span><span class="a31">d</span><span class="a32">a</span><span class="a33"> </span><span
            class="a34">f</span><span class="a35">a</span><span class="a36">m</span><span class="a37">e</span><span
            class="a38">s</span><span class="a39"> </span><span class="a40">a</span><span class="a41">c</span><span
            class="a42"> </span><span class="a43">t</span><span class="a44">u</span><span class="a45">r</span><span
            class="a46">p</span><span class="a47">i</span><span class="a48">s</span><span class="a49"> </span><span
            class="a50">e</span><span class="a51">g</span><span class="a52">e</span><span class="a53">s</span><br/>
        <span class="a24">t</span><span class="a25">a</span><span class="a26">s</span><span class="a27">.</span><span
            class="a28"> </span><span class="a29">N</span><span class="a30">u</span><span class="a31">l</span><span
            class="a32">l</span><span class="a33">a</span><span class="a34"> </span><span class="a35">q</span><span
            class="a36">u</span><span class="a37">i</span><span class="a38">s</span><span class="a39"> </span><span
            class="a40">m</span><span class="a41">e</span><span class="a42">t</span><span class="a43">u</span><span
            class="a44">s</span><span class="a45"> </span><span class="a46">p</span><span class="a47">u</span><span
            class="a48">r</span><span class="a49">u</span><span class="a50">s</span><span class="a51">,</span><span
            class="a52"> </span><span class="a53">v</span><span class="a54">e</span><br/>
        <span class="a25">l</span><span class="a26"> </span><span class="a27">c</span><span class="a28">u</span><span
            class="a29">r</span><span class="a30">s</span><span class="a31">u</span><span class="a32">s</span><span
            class="a33"> </span><span class="a34">m</span><span class="a35">a</span><span class="a36">g</span><span
            class="a37">n</span><span class="a38">a</span><span class="a39">.</span><span class="a40"> </span><span
            class="a41">V</span><span class="a42">e</span><span class="a43">s</span><span class="a44">t</span><span
            class="a45">i</span><span class="a46">b</span><span class="a47">u</span><span class="a48">l</span><span
            class="a49">u</span><span class="a50">m</span><span class="a51"> </span><span class="a52">l</span><span
            class="a53">e</span><span class="a54">o</span><span class="a55"> </span><br/>
        <span class="a26">e</span><span class="a27">r</span><span class="a28">o</span><span class="a29">s</span><span
            class="a30">,</span><span class="a31"> </span><span class="a32">e</span><span class="a33">l</span><span
            class="a34">e</span><span class="a35">i</span><span class="a36">f</span><span class="a37">e</span><span
            class="a38">n</span><span class="a39">d</span><span class="a40"> </span><span class="a41">i</span><span
            class="a42">n</span><span class="a43"> </span><span class="a44">v</span><span class="a45">u</span><span
            class="a46">l</span><span class="a47">p</span><span class="a48">u</span><span class="a49">t</span><span
            class="a50">a</span><span class="a51">t</span><span class="a52">e</span><span class="a53"> </span><span
            class="a54">s</span><span class="a55">c</span><span class="a56">e</span><br/>
        <span class="a27">l</span><span class="a28">e</span><span class="a29">r</span><span class="a30">i</span><span
            class="a31">s</span><span class="a32">q</span><span class="a33">u</span><span class="a34">e</span><span
            class="a35">,</span><span class="a36"> </span><span class="a37">c</span><span class="a38">o</span><span
            class="a39">n</span><span class="a40">s</span><span class="a41">e</span><span class="a42">q</span><span
            class="a43">u</span><span class="a44">a</span><span class="a45">t</span><span class="a46"> </span><span
            class="a47">e</span><span class="a48">u</span><span class="a49"> </span><span class="a50">i</span><span
            class="a51">p</span><span class="a52">s</span><span class="a53">u</span><span class="a54">m</span><span
            class="a55">.</span><span class="a56"> </span><span class="a57">P</span><br/>
        <span class="a28">h</span><span class="a29">a</span><span class="a30">s</span><span class="a31">e</span><span
            class="a32">l</span><span class="a33">l</span><span class="a34">u</span><span class="a35">s</span><span
            class="a36"> </span><span class="a37">h</span><span class="a38">e</span><span class="a39">n</span><span
            class="a40">d</span><span class="a41">r</span><span class="a42">e</span><span class="a43">r</span><span
            class="a44">i</span><span class="a45">t</span><span class="a46"> </span><span class="a47">p</span><span
            class="a48">h</span><span class="a49">a</span><span class="a50">r</span><span class="a51">e</span><span
            class="a52">t</span><span class="a53">r</span><span class="a54">a</span><span class="a55"> </span><span
            class="a56">q</span><span class="a57">u</span><span class="a58">a</span><br/>
        <span class="a29">m</span><span class="a30"> </span><span class="a31">v</span><span class="a32">u</span><span
            class="a33">l</span><span class="a34">p</span><span class="a35">u</span><span class="a36">t</span><span
            class="a37">a</span><span class="a38">t</span><span class="a39">e</span><span class="a40"> </span><span
            class="a41">s</span><span class="a42">e</span><span class="a43">m</span><span class="a44">p</span><span
            class="a45">e</span><span class="a46">r</span><span class="a47">.</span><span class="a48"> </span><span
            class="a49">N</span><span class="a50">a</span><span class="a51">m</span><span class="a52"> </span><span
            class="a53">p</span><span class="a54">u</span><span class="a55">l</span><span class="a56">v</span><span
            class="a57">i</span><span class="a58">n</span><span class="a59">a</span><br/>
        <span class="a30">r</span><span class="a31"> </span><span class="a32">l</span><span class="a33">i</span><span
            class="a34">g</span><span class="a35">u</span><span class="a36">l</span><span class="a37">a</span><span
            class="a38"> </span><span class="a39">v</span><span class="a40">e</span><span class="a41">l</span><span
            class="a42"> </span><span class="a43">d</span><span class="a44">i</span><span class="a45">a</span><span
            class="a46">m</span><span class="a47"> </span><span class="a48">u</span><span class="a49">l</span><span
            class="a50">l</span><span class="a51">a</span><span class="a52">m</span><span class="a53">c</span><span
            class="a54">o</span><span class="a55">r</span><span class="a56">p</span><span class="a57">e</span><span
            class="a58">r</span><span class="a59"> </span><span class="a60">r</span><br/>
        <span class="a31">u</span><span class="a32">t</span><span class="a33">r</span><span class="a34">u</span><span
            class="a35">m</span><span class="a36">.</span><span class="a37"> </span><span class="a38">M</span><span
            class="a39">o</span><span class="a40">r</span><span class="a41">b</span><span class="a42">i</span><span
            class="a43"> </span><span class="a44">i</span><span class="a45">d</span><span class="a46"> </span><span
            class="a47">v</span><span class="a48">o</span><span class="a49">l</span><span class="a50">u</span><span
            class="a51">t</span><span class="a52">p</span><span class="a53">a</span><span class="a54">t</span><span
            class="a55"> </span><span class="a56">n</span><span class="a57">i</span><span class="a58">s</span><span
            class="a59">i</span><span class="a60">.</span><span class="a61">&nbsp;</span>
    </div>
</div>
</body>
</html>