fixMozillaZIndex=true; //Fixes Z-Index problem  with Mozilla browsers but causes odd scrolling problem, toggle to see if it helps
_menuCloseDelay=500;
_menuOpenDelay=20;
_subOffsetTop=2;
_subOffsetLeft=-2;




with(menuStyle=new mm_style()){
align="left";
bordercolor="#ffffff";
borderstyle="solid";
borderwidth=1;
fontfamily="Verdana, Tahoma, Arial";
fontsize="100%";
fontstyle="normal";
headerbgcolor="#ffffff";
headercolor="#000000";
offbgcolor="#244a7a";
offcolor="#ffffff";
overbgimage="/images/button_roll_on.gif";
onbgcolor="#000000";
oncolor="#ffffff";
outfilter="randomdissolve(duration=0.8)";
overfilter="Fade(duration=0.2);Alpha(opacity=100);Shadow(color=#000000', Direction=135, Strength=20)";
padding=5;
pagebgimage="/images/button_roll_on.gif";
pagecolor="#ffffff";
separatorcolor="#ffffff";
separatorsize=1;
subimage="http://www.milonic.com/menuimages/arrow.gif";
subimagepadding=2;
}

with(milonic=new menuname("feature","url=features.html")){
style=menuStyle;
aI("text=Secure Remote/Onsite Tech Support;url=techsupport.html;");
aI("text=Keylogging Defense System;url=keylogdefense.html;");
aI("text=Firewall Protection;url=firewall.html;");
aI("text=Internet/System Cleaner;url=internetcleaner.html;");
aI("text=Secure Data Backup plus File Shredder;url=fileshredder.html;")
}





drawMenus();

