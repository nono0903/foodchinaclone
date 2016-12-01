/* Sudo Slider v. 2.2.8 */
(function(h){h.fn.sudoSlider=function(ka){function k(d,g){E[d]?E[d].push(g):(E[d]=[g],K[d]=function(){for(var g=E[d],h,k=0,z=0;z<g.length;z++){var A=g[z].apply(K,arguments);A!=ma&&(k++,1==k?h=A:2==k?h=[h,A]:h.push(A))}return 0==k?K:h})}var ma,d=!1,g=!0,K=this,E={};ka=h.extend({controlsshow:g,controlsfadespeed:400,controlsfade:g,insertafter:g,firstshow:d,lastshow:d,vertical:d,speed:800,ease:"swing",auto:d,pause:2E3,continuous:d,prevnext:g,numeric:d,numericattr:'class="controls"',numerictext:[],history:d,
speedhistory:400,autoheight:g,customlink:d,fade:d,crossfade:g,fadespeed:1E3,updatebefore:d,ajax:d,preloadajax:500,startslide:d,ajaxloadfunction:d,beforeanifunc:d,afteranifunc:d,uncurrentfunc:d,currentfunc:d,prevhtml:'<a href="#" class="prevBtn"> previous </a>',nexthtml:'<a href="#" class="nextBtn"> next </a>',loadingtext:"Loading Content...",firsthtml:'<a href="#" class="firstBtn"> first </a>',controlsattr:'class="control"',lasthtml:'<a href="#" class="lastBtn"> last </a>',autowidth:g,slidecount:1,
resumepause:d,movecount:1,responsive:d},function(d){var g={},h;for(h in d)g[h.toLowerCase()]=d[h];return g}(ka));var na="pages",R="next",aa="prev",oa="last",pa="first",qa=":hidden",ra=":visible";return this.each(function(){function E(b,n){var f=0;for(e in S)c[f]=S[e],f++;C=d;L=g;t=b.children("ul");t.length||b.append(t=h("<ul></ul>"));u=t.children("li");l=u.length;if(c[24]&&c[24].length>l){for(var e=1;e<=c[24].length-l;e++)t.append("<li><p>"+c[34]+"</p></li>");u=t.children("li");l=u.length}B=j=0;T=
l-1;p=g;U=x=ba=d;ca=[];C=d;"static"==b.css("position")&&b.css("position","relative");u.css({"float":"left",display:"block"});c[39]=s(c[39]);q=c[39];c[20]||(c[39]+=c[41]-1);c[26]=s(c[26])||1;(v=c[11]&&(!c[20]||1<c[39]))&&(v=[]);for(e=0;e<l;e++)c[15][e]=c[15][e]||e+1,c[24][e]=c[24][e]||d;y=[];for(f=0;f<l;f++)y[f]=[],y[f].push(u.eq(f));if(v){for(f=c[39];1<=f&&0<l;f--){var m=w(-c[39]+f-1),wa=w(c[39]-f),r=u.eq(m).clone();v.push(r);var k=u.eq(wa).clone();v.push(k);y[m].push(r);y[wa].push(k);t.prepend(r).append(k)}G=
t.children("li")}c[2]=c[2]&&!c[11];t[c[6]?"height":"width"](9E6);G=t.children("li");c[38]=c[38]&&!c[42];c[42]&&h(window).on("resize focus",K).resize();H=d;if(c[0]){H=h("<span "+c[36]+"></span>");h(b)[c[3]?"after":"before"](H);if(c[13]){xa=H.prepend("<ol "+c[14]+"></ol>").children();f=c[13]==na?q:1;for(e=0;e<l-(c[11]||c[13]==na?1:q)+1;e+=f)ca[e]=h("<li rel='"+(e+1)+"'><a href='#'><span>"+c[15][e]+"</span></a></li>").appendTo(xa).click(function(){M(F(this)-1,g);return d})}c[4]&&(ya=da(c[35],pa));c[5]&&
(za=da(c[37],oa));c[12]&&(Aa=da(c[33],R),Ba=da(c[32],aa))}f=[1,7,10,18,23];for(e in f)c[s(f[e])]=s(c[f[e]])||0==c[f[e]]?s(c[f[e]]):"fast"==c[f[e]]?200:"normal"==c[f[e]]||"medium"==c[f[e]]?400:"slow"==c[f[e]]?600:400;if(c[19])h(document).on("click",c[19],function(){var b;if(b=F(this))"stop"==b?(c[9]=d,A()):"start"==b?(N=z(c[10]),c[9]=g):"block"==b?p=d:"unblock"==b?p=g:p&&M(b==s(b)?b-1:b,g);return d});sa(G.slice(0,c[39]),g,function(){c[9]&&(N=z(c[10]));if(n)I(n,d,d,d);else if(c[16]){var b=h(b),e;if(e=
b.hashchange)e($);else if(e=h.address)e.change($);else b.on("hashchange",$);$()}else I(c[26]-1,d,d,d)});if(c[25]===g)for(f=0;f<=T;f++)c[24][f]&&c[26]-1!=f&&O(f,d,0,d)}function K(){G.width(P.width()/q);V(j,0);W()}function F(b){return h(b).attr("rel")}function $(){var b;a:{b=location.hash.substr(1);for(i in c[15])if(c[15][i]==b){b=i;break a}b=b?j:0}L?I(b,d,d,d):b!=j&&M(b,d)}function la(){if(c[24]&&s(c[25]))for(a in c[24])if(c[24][a]){clearTimeout(ea);ea=setTimeout(function(){c[24][a]?O(a,d,0,d):la()},
s(c[25]));break}}function z(b){ta=g;return setTimeout(function(){M(R,d)},b)}function A(b){clearTimeout(N);b||(ta=d)}function da(b,c){return h(b).prependTo(H).click(function(){M(c,g);return d})}function M(b,n,f){if(p&&(A(!0),X=d,!C))if(c[20])Ca(b,n,d);else{if(c[11]){var e=Y(b);b=e;var m=0>j-e?-(j-e):j-e;if(e<c[39]-q+1&&(0>j-e-l?-(j-e-l):j-e-l)<m)b=e+l,m=0>j-e-l?-(j-e-l):j-e-l;if(e>T-c[39]&&(0>j-e+l?-(j-e+l):j-e+l)<m)b=e-l}else b=Y(b);I(b,n,g,d,f)}}function fa(b,d,f){if(f){f=Aa;var e=za,m=R,g=oa,j=
c[5]}else f=Ba,e=ya,m=aa,g=pa,j=c[4];c[0]&&(b?(c[12]&&f.filter(qa).fadeIn(d),j&&e.filter(qa).fadeIn(d)):(c[12]&&f.filter(ra).fadeOut(d),j&&e.filter(ra).fadeOut(d)));c[19]&&(f=function(){return F(this)==m||F(this)==g},b?h(c[19]).filter(f).filter(qa).fadeIn(d):h(c[19]).filter(f).filter(ra).fadeOut(d))}function ua(b){b=w(b)+1;if(c[13])for(a in ca)Da(ca[a],b);c[19]&&Da(h(c[19]),b)}function Da(b,n){b.filter&&(b.filter(".current").removeClass("current").each(function(){var b=this;setTimeout(function(){h.isFunction(c[30])&&
c[30].call(b,F(b))},0)}),b.filter(function(){var b=F(this);if(c[13]==na)for(var e=0;e<q;e++){if(b==n-e)return g}else return b==n;return d}).addClass("current").each(function(){var b=this;setTimeout(function(){h.isFunction(c[31])&&c[31].call(b,F(b))},0)}))}function sa(b,c,d){b=b.add(b.find("img")).filter("img");var e=b.length;if(!e)return d(),this;b.each(function(){var b=this;h(b).on("load error",function(){h(b).off("load error");b.naturalHeight&&!b.clientHeight&&h(b).height(b.naturalHeight).width(b.naturalWidth);
c?(e--,0==e&&d()):d()});if("complete"==b.readyState)h(b).trigger("load");else if(b.readyState)b.src=b.src;else if(b.complete)h(b).trigger("load");else if(b.complete===ma){var g=b.src;b.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";b.src=g}})}function V(b,n){Ea=b=w(b);Fa=new Date-0+n;Ga=0==n?b:d;c[18]&&Ha(b,g);c[38]&&Ha(b,d)}function Ha(b,c){P.ready(function(){Ia(b,c);sa(u.eq(b),d,function(){Ia(b,c)})})}function Ia(b,n){if(b==Ea){for(var f=0,e=b;e<b+q;e++)var g=u.eq(w(e))[n?
"height":"width"](),f=n==c[6]?f+g:Math.max(g,f);e=Fa-(new Date-0);e=Math.max(e,0);P.animate(n?{height:f}:{width:f},{queue:d,duration:e,easing:c[8]})}}function W(){t.css({marginLeft:0,marginTop:0});var b=ga(j,d),c=ga(j,g);t.css({marginLeft:b,marginTop:c})}function ga(b,d){b=G.eq(b+(v?c[39]:0));return b.length?-b.position()[d?"top":"left"]:0}function La(){j=w(j);c[23]||ua(j);W();p=g;c[16]&&ba&&(window.location.hash=c[15][j]);c[9]&&(ba?(A(),c[40]&&(N=z(c[40]))):N=z(c[10]));!x&&X&&D(j,g)}function D(b,
c){b=w(b);var d=Ja(b);setTimeout(function(){(c?Ma:Na)(d,b+1)},0)}function Ma(b,d){h.isFunction(c[29])&&c[29].call(b,d)}function Na(b,d){h.isFunction(c[28])&&c[28].call(b,d)}function Ja(b){var c=h();for(a in y[b])c=c.add(y[b][a]);return c}function Y(b){return b==R?va(j+c[41],b):b==aa?va(j-c[41],b):b==pa?0:b==oa?T:va(s(b),b)}function va(b,d){if(c[11])return w(b);var f=l-q;return b>f?j==f&&d==R?0:f:0>b?0==j&&d==aa?f:0:b}function O(b,j,f,e){ea&&clearTimeout(ea);var m=c[24][b],l=u.eq(b),r=f===g;f=f===
g?0:f;x&&!c[21]&&s(0.4*c[22]);var k=d;h.ajax({url:m,success:function(c,h,m){"i"!=m.getResponseHeader("Content-Type").substr(0,1)&&(k=g,l.html(c),Ka(b,f,e,j,r,d))},complete:function(){k||(image=new Image,l.html("").append(image),image.src=m,Ka(b,f,e,j,r,g))}});c[24][b]=d;S.ajax[b]=d}function Ka(b,j,f,e,m,l){var k=u.eq(b),p=k;if(v){var q=d;for(a in y[b])q&&(q=k.clone(),v.push(q),y[b][a].replaceWith(q),y[b][a]=q,p=p.add(q)),q=g;G=t.children("li")}(e||Ga==b)&&V(b,j);sa(k,g,function(){m===g&&W();h.isFunction(f)&&
f();la();h.isFunction(c[27])&&c[27].call(p,s(b)+1,l)});2==f&&(D(b,d),X||(D(b,g),X=g))}function Ca(b,n,f){if(Y(b)!=j&&!C&&p){U=d;c[23]&&ua(Y(b));if(!(e||0==e))var e=!n&&!c[9]&&c[16]?c[22]*(c[17]/c[7]):c[22];var m=Y(b);if(c[2]){var k=c[1];fa(m,k,d);fa(m<l-q,k,g)}if(f)e=ha,Q&&Q--;else if(c[24]){Q=0;ha=e;for(f=m;f<m+q;f++)c[24][f]&&(O(w(f),d,e,function(){Ca(b,n,g)}),Q++)}else Q=d;if(!Q)if(p=!n,V(m,c[22]),c[21]){var r=g,e=0;for(f=m;f<m+q;f++)k=u.eq(w(f)).clone().prependTo(P),k.css({"z-index":"1000",position:"absolute",
"list-style":"none",top:c[6]?e:0,left:c[6]?0:e}).hide().fadeIn(c[22],c[8],function(){y[m].pop();screen.fontSmoothingEnabled&&this.style.removeAttribute("filter");x=p=g;r&&(I(m,n,d,d),c[16]&&n&&(window.location.hash=c[15][j]),D(m,g),r=d);h(this).remove();x=d}),y[m].push(k),e+=k[c[6]?"outerHeight":"outerWidth"](g);D(m,d)}else{D(m,d);var t=s(0.6*e),v=e-t;G.each(function(){h(this).animate({opacity:1E-4},{queue:d,duration:v,easing:c[8],complete:function(){x=p=g;I(m,d,d,d);p=!n;h(this).animate({opacity:1},
{queue:d,duration:t,easing:c[8],complete:function(){screen.fontSmoothingEnabled&&this.style.removeAttribute("filter");c[16]&&n&&(window.location.hash=c[15][j]);p=g;x=d;D(m,g)}})}})})}}}function I(b,n,f,e,h){if(p&&(!C&&(b!=j||L))&&l>w(b)||e){e||(U=d);p=!n&&!c[9];ba=n;B=j;j=b;c[23]&&!x&&ua(j);var k=Math.sqrt(0>B-j?-(B-j):B-j);h||0==h||(h=!f?0:!n&&!c[9]?s(k*c[17]):s(k*c[7]));k=w(j);if(e)h=ha,Z&&Z--;else if(c[24]){c[24][k]&&(O(k,g,L||h,2),U=g);if(!x){var r=B>j?j:B;e=B>j?B:j;Z=0;for(ha=h;r<=e;r++)r<=T&&
(0<=r&&c[24][r])&&(O(r,d,h,function(){I(b,n,f,g)}),Z++)}for(r=k+1;r<=k+q;r++)c[24][r]&&O(r,d,0,d)}Z||(!x&&!U&&(D(k,d),X=g),x||V(j,h),t.animate({marginTop:ga(j,g),marginLeft:ga(j,d)},{queue:d,duration:h,easing:c[8],complete:La}),c[2]&&(e=c[1],!n&&!c[9]&&(e=c[17]/c[7]*c[1]),f||(e=0),x&&(e=s(0.6*c[22])),h=j,fa(h,e,d),fa(h<l-q,e,g)),L&&!c[24][k]&&la(),L=d)}}function w(b){if(0==l)return 0;for(b=s(b);0>b;)b+=l;return b%l}function s(b){return parseInt(b,10)}function ia(){C=g;J=j;c[42]&&h(window).off("resize focus",
K);H&&H.remove();h(c[19]).off("click");if(v)for(var b=0;b<v.length;b++)v[b].remove();W()}function ja(){C&&E(P,J)}var L,t,u,G,l,j,B,T,p,ba,x,U,ca,xa,C,J,H,ya,za,Aa,Ba,N,ha,Z,Q,ta,v,q,X=d,ea,y,P=h(this),Ga=d,Ea,Fa=0,S=ka,c=[];E(P,d);k("destroy",ia);k("init",ja);k("getOption",function(b){return S[b.toLowerCase()]});k("setOption",function(b,c){ia();S[b.toLowerCase()]=c;ja()});k("insertSlide",function(b,d,f,e){ia();d>l&&(d=l);b="<li>"+b+"</li>";!d||0==d?t.prepend(b):u.eq(d-1).after(b);e?J=e-1:(d<=J||!d||
0==d)&&J++;c[15].length<d&&(c[15].length=d);c[15].splice(d,0,f||s(d)+1);ja()});k("removeSlide",function(b){b--;ia();u.eq(b).remove();c[15].splice(b,1);b<J&&J--;ja()});k("goToSlide",function(b,c){M(b==s(b)?b-1:b,g,c)});k("block",function(){p=d});k("unblock",function(){p=g});k("startAuto",function(){c[9]=g;N=z(c[10])});k("stopAuto",function(){c[9]=d;A()});k("adjust",function(){V(j,0);W()});k("getValue",function(b){return"currentSlide"==b?j+1:"totalSlides"==b?l:"clickable"==b?p:"destroyed"==b?C:"autoAnimation"==
b?ta:ma});k("getSlide",function(b){b=w(s(b)-1);return Ja(b)})})}})(jQuery);