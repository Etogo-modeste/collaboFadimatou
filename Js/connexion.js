function connexion(){
    if (
        document.getElementById('user').value== ""
    ) {
        alert("Veuillez remplir les champs restés vides!");
    }
    if (
        document.getElementById('password').value== ""
    ) {
        alert("Veuillez remplir les champs restés vides!");
    }
}
function afficher_image(uploader){
    if (uploader.files && uploader.files[0]) {
        var imageFile = uploader.files[0];
        var reader= new FileReader();
        reader.onload=function(e){
            $('#profile').attr('src',e.targget.result);
        }
        reader.readAsDataURL(imageFile)
        $('#image').change(function(){
            afficher_image(this);
        })
        
    }
}