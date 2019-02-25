function onClickTp() {
    var myWindow = window.open("creationTP");
}

function onClickListeTp () {
    var myWindow = window.open("listeTP");
}

function onCorrection() {
    var myWindow = window.open("correction");
}

function removeDiv(element) {
    console.log($(element).parent().get(0));
    $($($($(element).parent().get(0)).parent().get(0)).parent().get(0)).remove();
}

function kagebushinojutsu() {
    var laDivQuiAppend = $('#creationTPMain');
    var laDivADuppliquer = $('<div id="zoneCreation '+ laDivQuiAppend.children().length +'" class="zoneCreation">' + 
                                '<form method="post">' +
                                    '<div id="zoneQuestion'+ laDivQuiAppend.children().length +'">' + 
                                            '<textarea id="zoneQuestion'+ laDivQuiAppend.children().length +'" cols="80" rows="5" placeholder="question ici" style="resize: none"></textarea>' +
                                            '<button id="buttonDelete'+ laDivQuiAppend.children().length +'" onClick="removeDiv(this)"> Delete  </button>' +
                                    '</div>' + 
                                    '<div id="zone_Enonce_Correction'+ laDivQuiAppend.children().length +'" class="boxEnonceCorrection">' +
                                        '<div id="EnonceContent'+ laDivQuiAppend.children().length +'">' +
                                            '<textarea class="enonceTextArea" cols="30" rows="10"></textarea>' + 
                                        '</div>' +
                                        '<div id="CorrectionContent'+ laDivQuiAppend.children().length +'">' +
                                            '<textarea class="enonceTextArea" cols="30" rows="10"></textarea>' +
                                        '</div>' +
                                    '</div>' +
                                '</form>' +
                            '</div>');
    $(laDivADuppliquer).appendTo(laDivQuiAppend);
}

$("#button_clone").click(function() {
    kagebushinojutsu();     
});

$( document ).ready(function() {
    kagebushinojutsu();
});
