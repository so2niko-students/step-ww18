const h = document.querySelectorAll('h2,h3');

h[1].addEventListener('click', function(){
    // console.log(h[0].innerHTML);
    let url = 'index.php?in=' + h[0].innerHTML;
    fetch(url).then((resp)=>{
        if(resp.ok){
           return resp.text();
        }else{
            alert('not ok');
            console.dir(resp);
        }}).then(function(res){
        h[0].innerHTML = res;
    });

});