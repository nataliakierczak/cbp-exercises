JS1
var found = document.getElementById('my-element');
JS2 treti moznost
JS3
var message = document.getElementById('message');
message.setAttribute('class','error');
tohle jeste nemam opravene, takze nevim, zda je to spravne
jquery2
$('#like-this').on("click", function(){
    $.ajax({
        'url': '/api/like.php',
        'method': 'post',
        'data': {
            'id': 1,
        }
    });
});
events1
document.getElementById('clickable').onclick = function(){console.log('clicked')};
events2
$('#clickable).mouseenter(function(){
console.log("over");
});
$('#clickable).mouseleave(function(){
console.log("out");
});/**
 * Created by Natalia on 02/04/2017.
 */
