!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:o})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=0)}([function(e,t,n){n(1),e.exports=n(2)},function(e,t){$(document).ready(function(){$("#search").keyup(function(){$key=$("#search").val(),$key.length}),$("#search").autocomplete({source:function(e,t){$key=$("#search").val(),0!=$key.length?$.ajax({url:"searchResult/"+$key,type:"GET",data:{_token:"{{ csrf_token() }}"},success:function(e){console.log(e.list),t(e.list)}}):$("#search").autocomplete("close")},minLength:0,autoFocus:!0,delay:0,select:function(e,t){var n;n="Selected: "+t.item.value+" aka "+t.item.id,$("<div>").text(n).prependTo("#log"),$("#log").scrollTop(0)}})})},function(e,t){}]);