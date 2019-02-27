var nbQuestionZone = 1;

function addQuestionZone() {
    nbQuestionZone++;
    var newQuestionZone = '<div id="question' +nbQuestionZone+ '" class="col s12 blue lighten-5" style="margin-bottom:2%"><div class="col s12 right-align"><button class="btn waves-effect waves-light blue lighten-2" onclick="removeQuestionZone(' +nbQuestionZone+ ')"><i class="material-icons right">close</i></button></div><div class="input-field col s12"><textarea id="enonce' +nbQuestionZone+ '" class="materialize-textarea" name="enonce' +nbQuestionZone+ '"></textarea><label for="enonce' +nbQuestionZone+ '">Énoncé ' +nbQuestionZone+ '</label></div><div class="input-field col s12"><textarea id="corrige' +nbQuestionZone+ '" class="materialize-textarea" name="corrige' +nbQuestionZone+ '"></textarea><label for="corrige' +nbQuestionZone+ '">Corrigé ' +nbQuestionZone+ '</label></div></div>'
    //document.getElementById('questionZone').innerHTML = document.getElementById('questionZone').innerHTML + newQuestionZone;
    $( "#questionZone" ).append( newQuestionZone );
}

function removeQuestionZone(id) {
    nbQuestionZone--;
    $( "#question" + id ).remove(  );
}

/*$( document ).ready(function() {
    console.log( "ready!" );
});*/