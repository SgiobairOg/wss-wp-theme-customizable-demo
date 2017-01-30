function PlayFlash(DivID, URL, WIDTH, HEIGHT)
{
    var d = document.getElementById(DivID);
    d.innerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + window.location.protocol + '//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="' + WIDTH + '" height="' + HEIGHT + '">' +
        '<param name="allowScriptAccess" value="always">' +
        '<param name="movie" value="' + URL + '">' +
        '<param name="quality" value="high">' +
        '<param name="wmode" value="transparent">' +
        '<embed src="' + URL + '" quality="high" pluginspage="' + window.location.protocol + '//www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" allowScriptAccess="always" width="' + WIDTH + '" height="' + HEIGHT + '"></embed>' +
        '</object>'
}
function PlayFlash2(DivID, URL, WIDTH, HEIGHT, ISTRANSPARENT, BGCOLOR)
{
    var theHTML;
    var d = document.getElementById(DivID);
    theHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + window.location.protocol + '//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="' + WIDTH + '" height="' + HEIGHT + '">' +
        '<param name="allowScriptAccess" value="always">' +
        '<param name="movie" value="' + URL + '">' +
        '<param name="quality" value="high">'
    if (ISTRANSPARENT)
        theHTML += '<param name="wmode" value="transparent">'
    theHTML += '<param name="bgcolor" value="' + BGCOLOR + '">'
    theHTML += '<embed src="' + URL + '" quality="high" pluginspage="' + window.location.protocol + '//www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"'
    if (ISTRANSPARENT)
        theHTML += ' wmode="transparent"'
    theHTML += ' allowScriptAccess="always" width="' + WIDTH + '" height="' + HEIGHT + '"></embed>' +
        '</object>'
    d.innerHTML = theHTML;
}
function PlayFlashSSL(DivID, URL, WIDTH, HEIGHT)
{
    var d = document.getElementById(DivID);
    d.innerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + window.location.protocol + '//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="' + WIDTH + '" height="' + HEIGHT + '">' +
        '<param name="allowScriptAccess" value="always">' +
        '<param name="movie" value="' + URL + '">' +
        '<param name="quality" value="high">' +
        '<param name="wmode" value="transparent">' +
        '<embed src="' + URL + '" quality="high" pluginspage="' + window.location.protocol + '//www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" allowScriptAccess="always" width="' + WIDTH + '" height="' + HEIGHT + '"></embed>' +
        '</object>'
}

function PlayFlashScript(DivID, URL, WIDTH, HEIGHT, PROTOCOL)
{
    var d = document.getElementById(DivID);
    d.innerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + PROTOCOL + 'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="' + WIDTH + '" height="' + HEIGHT + '">' +
        '<param name="movie" value="' + URL + '">' +
        '<param name="quality" value="high">' +
        '<param name="allowScriptAccess" value="always">' +
        '<param name="wmode" value="transparent">' +
        '<embed src="' + URL + '" quality="high" pluginspage="' + PROTOCOL + 'www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" allowScriptAccess="always" width="' + WIDTH + '" height="' + HEIGHT + '"></embed>' +
        '</object>'
}

function PlayFlashScriptAccess(DivID, URL, WIDTH, HEIGHT, SALIGN)
{
    var d = document.getElementById(DivID);
    d.innerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="' + window.location.protocol + '//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="' + HEIGHT + '" height="100%">' +
        '<param name="allowScriptAccess" value="always">' +
        '<param name="movie" value="' + URL + '">' +
        '<param name="quality" value="high">' +
        '<param name="salign" value="' + SALIGN + '" />' +
        '<param name="wmode" value="transparent">' +
        '<embed src="' + URL + '" quality="high" pluginspage="' + window.location.protocol + '//www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" salign="' + SALIGN + '" wmode="transparent" allowScriptAccess="always" width="' + WIDTH + '" height="' + HEIGHT + '"></embed>' +
        '</object>'
}