<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<style type="text/css">
body, tr, td, th { 
    font-size:12pt 
}
a:hover { 
    color:#DD0000; 
}
span { 
    font-size:20pt 
}
small { 
    font-size:10pt 
}
</style>
<title>画像掲示板</title>
<script language="JavaScript">
function getCookie(key) {
    var tmp1, tmp2, xx1, xx2, xx3;
    tmp1 = " " + document.cookie + ";";
    xx1 = xx2 = 0;
    len = tmp1.length;	
    while (xx1 < len) {
        xx2 = tmp1.indexOf(";", xx1);
        tmp2 = tmp1.substring(xx1 + 1, xx2);
        xx3 = tmp2.indexOf("=");
        if (tmp2.substring(0, xx3) == key) {
            return(unescape(tmp2.substring(xx3 + 1, xx2 - xx1 - 1)));
        }
        xx1 = xx2 + 1;
    }
    return "";
}
window.onload = function(e) {
    var P = getCookie("pwdc");
    var N = getCookie("namec");
    for(var i = 0; i < document.forms.length; i++) {
        if (document.forms[i].pwd) {
            document.forms[i].pwd.value = P;
        }
        if (document.forms[i].name) {
            document.forms[i].name.value = N;
        }
    }
}
</script>
</head>
<body bgcolor="#FFFFEE" text="#800000" link="#0000EE" vlink="#0000EE">

<p align=right>
[<a href="" target="_top">ホーム</a>]
[<a href="futaba.php?mode=admin">管理用</a>]
</p>

<p align=center>
<font color="#800000" size=5>
    <b><SPAN>画像掲示板</SPAN></b>
</font>
</p>

<hr width="90%" size=1></hr>

<center>
<form action="futaba.php" method="POST" enctype="multipart/form-data">
    <input type=hidden name=mode value="regist">
    <input type=hidden name="MAX_FILE_SIZE" value="512000">
    <table cellpadding=1 cellspacing=1>
    <tr>
        <td bgcolor=#eeaa88><b>おなまえ</b></td>
        <td><input type=text name=name size="28"></td>
    </tr>
    <tr>
        <td bgcolor=#eeaa88><b>E-mail</b></td>
        <td><input type=text name=email size="28"></td>
    </tr>
    <tr>
        <td bgcolor=#eeaa88><b>題　　名</b></td>
        <td><input type=text name=sub size="35">
            <input type=submit value="送信する"></td>
    </tr>
    <tr>
        <td bgcolor=#eeaa88><b>コメント</b></td>
        <td><textarea name=com cols="48" rows="4" wrap=soft></textarea></td>
    </tr>
    <tr>
        <td bgcolor=#eeaa88><b>添付File</b></td>
        <td><input type=file name=upfile size="35">
            [<label><input type=checkbox name=textonly value=on>画像なし</label>]
        </td>
    </tr>
    <tr>
        <td bgcolor=#eeaa88><b>削除キー</b></td>
        <td><input type=password name=pwd size=8 maxlength=8 value="">
            <small>(記事の削除用。英数字で8文字以内)</small>
        </td>
    </tr>
    <tr><td colspan=2>
        <small><LI>添付可能ファイル：GIF, JPG, PNG ブラウザによっては正常に添付できないことがあります。</LI>
            <LI>最大投稿データ量は 500 KB までです。sage機能付き。</LI>
            <LI>画像は横 250ピクセル、縦 250ピクセルを超えると縮小表示されます。</LI>
        </small>
    </td></tr>
    </table>
</form>
</center>
   
<hr></hr>

<form action="futaba.php" method=POST>

画像タイトル：
    <a href="src/1487786676328.jpg" target=_blank>
        1487786676328.jpg
    </a>-(112273 B)<br>
    <small>サムネイルを表示しています.クリックすると元のサイズを表示します.</small>
    <br>
    <a href="src/1487786676328.jpg" target=_blank>
        <img src=thumb/1487786676328s.jpg border=0 align=left width=213 height=250 hspace=20 alt="112273 B">
    </a>
    <input type=checkbox name="19" value=delete>
    <font color=#cc1105 size=+1><b>testtitle</b></font> 
    Name 
    <font color=#117743>
        <b><a href="mailto:testmail">testname</a></b>
    </font> 17/02/23(木)03:04 No.19 &nbsp; 
    [<a href=futaba.php?res=19>返信</a>]
    <blockquote>testcomment</blockquote>
    <br clear=left>
    
<hr></hr>

<table align=right>
    <tr><td nowrap align=center>
        <input type=hidden name=mode value=usrdel>【記事削除】
        [<input type=checkbox name=onlyimgdel value=on>画像だけ消す]<br>
        削除キー<input type=password name=pwd size=8 maxlength=8 value="">
        <input type=submit value="削除">
    </form>
    </td></tr>
</table>

<table align=left border=1>
    <tr>
        <td>最初のページ</td>
        <td>[<b>0</b>] 
        [<a href="1.htm">1</a>] 
        [<a href="2.htm">2</a>] 
        </td>
    <form action="1.htm" method=get>
    <td><input type=submit value="次のページ"></td>
    </form>
</tr></table>

<br clear=all>

<center>
<small>
- <a href="http://php.s3.to" target=_top>GazouBBS v3.0 ふたば改0.8</a> 
+ <a href="http://www.2chan.net/" target=_top>futaba</a>-
</small>
</center>

</body>
</html>
