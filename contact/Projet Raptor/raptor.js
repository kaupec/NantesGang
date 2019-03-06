function y(t){
    var e=v(t),n=t.ownerDocument||t.document,i=n.body,r=n.documentElement,s=r.clientTop||i.clientTop||0,o=r.clientLeft||i.clientLeft||0,a=(window.pageYOffset||it.g&&r.scrollTop||i.scrollTop)-s,l=(window.pageXOffset||it.g&&r.scrollLeft||i.scrollLeft)-o,c=e.top+a,u=e.left+l,d=e.bottom+a,h=e.right+l;return{bottom:d,height:e.height,left:u,right:h,top:c,width:e.width}}

function y(){return E("img",{id:Rt,src:"fuck.png",style:"position: fixed; bottom: -500px; right: 0%; z-index: 10"})}