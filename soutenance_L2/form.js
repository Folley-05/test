
var check=document.getElementById('check');
var bt=document.getElementById('bt-check');
var cd=document.getElementById('cond');
var im=document.getElementById('image-etp');
var ip=document.getElementById('image');
i=1;
function Check()
{
    i++;
    d=i%2;
    if(d)
    {
        bt.style="display: none;";
        cd.style="display: block;";
    }
    else
    {
        bt.style="display: block;";
        cd.style="display: none;";
    }
}
function image()
{
    im.src=ip.value;
}

check.addEventListener('click', function(){ Check(); }, false);

ip.addEventListener('change', function(){ image(); alert(im.src);}, false);