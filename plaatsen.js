document.getElementById("selected").addEventListener("click", function updateSelect(){
    var select = document.getElementById("selected");
    plaats = select.options[select.selectedIndex].value - 1;

});
document.getElementById("testid").addEventListener("click", function changeImage(){
    var x = document.getElementsByClassName('yes');
    if (x[plaats].src === 'http://localhost/inschrijven/images/yes.png'){
            x[plaats].src='images/no.png';
        }
    else{
            x[plaats].src='images/yes.png';
        }
    });