(function(e,t,n){"use strict";var r=t.getElementById("ncstate-util-toggle-link"),i=t.getElementById("ncstate-util-links"),s=/\bis-hidden\b/g,o=function(){if(s.exec(i.className)){i.className=i.className.replace(s,"");console.log("0")}else{i.className=i.className+" is-hidden";console.log("1")}console.log("hi");return!1};r.addEventListener("click",o,!1)})(window,document);